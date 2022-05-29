<?php
include("./headerIndex.php");

$_db_host = "localhost";
$_db_datenbank = "dragontail";
$_db_username = "dev";
$_db_passwort = "dev1234";

$katigorien;
?>

<body>

    <?php
    if (!isset($_GET['hin'])) {
        echo '<h1>Welcome to the Admin Panel</h1>
    <a href="admin.php?hin=artikel">Artikel hinzufügen</a>
    <br>
    <a href="admin.php?hin=katigorie">Katigorie hinzufügen</a>';
    } else {
        if ($_GET['hin'] == 'artikel') {
            echo '<h2>Artikel hinzufügen:</h2><br />
        <form action="admin.php?hin=artikel" method="post" enctype="multipart/form-data">
            <div>
                <label for="titel">Titel: </label>
                <input type="text" name="titel" id="titel">
            </div>
    
            <br>
    
            <div>
                <label for="fileToUpload">Select image to upload: </label>
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
    
            <br>
            <div>
                <label for="katigorie">Katigorie: </label>
                <select name="katigorie" id="katigorie">
                    <option default value="none">Bitte auswählen</option>';


            
                $conn = new mysqli($_db_host, $_db_username, $_db_passwort, $_db_datenbank);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Get Data
                $sql = "SELECT * FROM katigorie";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option default value="' . $row["katigorieid"] . '">' . $row["bezeichnung"] . '</option>';
                        $katigorien[$row["katigorieid"]] = $row["bezeichnung"];
                    }
                }

                $conn->close();
            

            echo '</select>
            </div>
            <br>
    
            <div>
                <label for="preis">Preis: </label>
                <input type="number" name="preis" id="preis">
            </div>
    
            <br>
            <div>
                <textarea name="beschreibung" id="beschreibung" cols="50" rows="10">Beschreibung</textarea>
            </div>
    
            <br>
    
            <input type="submit" value="Upload Image" name="submit">
                </form>';


        } else {
            if ($_GET["hin"] == 'katigorie') {
                echo '<h2>Katigorie hinzufügen:</h2><br />
                <form action="admin.php?hin=katigorie" method="post" enctype="multipart/form-data">
                    <input type="text" name="name" id="name">
                    <input type="submit" value="Erstelle neue Katigorie" name="submit">
                </form>
                ';

                if (isset($_POST['submit'])) {
                    $conn = new mysqli($_db_host, $_db_username, $_db_passwort, $_db_datenbank);

                    //Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $insertStatement = "INSERT INTO katigorie VALUES (null, '" . $_POST["name"] . "');";
                    if ($conn->query($insertStatement)) {
                        echo "<br>It has been added to the database.";
                    } else {
                        echo "<br>NO insertion into database";
                    }
                    # close database
                    $conn->close();

                    mkdir('img/artikel/' . $_POST["name"], 0700);
                }
            } else {
                echo "<h2>404 Page not found</h2>";
            }
        }
    }
    ?>



</body>

</html>
<?php


if (isset($_GET['hin']) && $_GET['hin'] == 'artikel') {
    $target_dir = "img/artikel/" . $katigorien[$_POST["katigorie"]] . "/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been
uploaded.";
            echo "<br>";

            $conn = new mysqli($_db_host, $_db_username, $_db_passwort, $_db_datenbank);

            //Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $insertStatement = "INSERT INTO artikel (artikelnr, titel, img, preis, katigorieid, beschreibung) VALUES (null, '" . $_POST["titel"] . "', '" . basename($_FILES["fileToUpload"]["name"]) . "', '" . ((float) $_POST["preis"]) . "', '" . $_POST['katigorie'] . "', '" . $_POST["beschreibung"] . "');";
            if ($conn->query($insertStatement)) {
                echo "<br>Image $target_file has been added to the database.";
            } else {
                echo "<br>NO insertion into database";
            }
            # close database
            $conn->close();
        }
    }
}#

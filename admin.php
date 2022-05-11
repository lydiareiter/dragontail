<?php
include("./headerIndex.php");
?>

<body>
    <h1>Welcome to the Admin Panel</h1>
    <h2>Dateiupload:</h2><br />
    <form action="admin.php" method="post" enctype="multipart/form-data">

        <label for="titel">Titel: </label>
        <input type="text" name="titel" id="titel">

        <br>

        <label for="fileToUpload">Select image to upload: </label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        
        <br>
        
        <label for="katigorie">Katigorie: </label>
        <select name="katigorie" id="katigorie">
            <option default value="none">Bitte auswählen</option>
            
            <?php
            $_db_host = "localhost";
            $_db_datenbank = "dragontail";
            $_db_username = "dev";
            $_db_passwort = "dev1234";
            $conn = new mysqli($_db_host, $_db_username, $_db_passwort, $_db_datenbank);
    
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
    
            // Get Data
            $sql = "SELECT * FROM katigorie";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<option default value="' . $row["bezeichnung"] . '">' . $row["bezeichnung"] . '</option>';
                }
            }
            ?>
        </select>
        
        <br>

        <label for="preis">Preis: </label>
        <input type="number" name="preis" id="preis">

        <br>

        <textarea name="beschreibung" id="beschreibung" cols="50" rows="10">Beschreibung</textarea>

        <br>
        
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>

</html>
<?php

$target_dir = "img/";
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
        $_db_host = "localhost";
        $_db_datenbank = "uebungen";
        $_db_username = "dev";
        $_db_passwort = "dev1234";
        $conn = new mysqli($_db_host, $_db_username, $_db_passwort, $_db_datenbank);

        $imagefile = $target_file;
        $imagesize = getimagesize($imagefile);
        $imagewidth = $imagesize[0];
        $imageheight = $imagesize[1];
        $imagetype = $imagesize[2];
        switch ($imagetype) {
                // Bedeutung von $imagetype:
                // 1 = GIF, 2 = JPG, 3 = PNG, 4 = SWF, 5 = PSD, 6 = BMP, 7 = TIFF(intel byte order), 8 = TIFF(motorola byte order), 9 = JPC, 10 = JP2, 11 = JPX, 12 = JB2, 13 = SWC, 14 = IFF, 15 = WBMP, 16 = XBM
            case 1: // GIF
                $image = imagecreatefromgif($imagefile);
                break;
            case 2: // JPEG
                $image = imagecreatefromjpeg($imagefile);
                break;
            case 3: // PNG
                $image = imagecreatefrompng($imagefile);
                break;
            default:
                die('Unsupported imageformat');
        }


        //Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        echo "<br>";
        echo "Titel: " . $_POST["titel"];
        echo "<br>";
        var_dump($_POST["titel"]);
        echo "<br>";
        echo "Filename: " . basename($_FILES["fileToUpload"]["name"]);
        echo "<br>";
        var_dump(basename($_FILES["fileToUpload"]["name"]));
        echo "<br>";
        echo "Preis: " . (int) $_POST["preis"];
        echo "<br>";
        var_dump((double) $_POST["preis"]);
        echo "<br>";
        echo "Beschreibung: " . $_POST["beschreibung"];
        echo "<br>";
        var_dump($_POST["beschreibung"]);

        $insertStatement = "INSERT INTO artikel VALUES ('21', '" . $_POST["titel"] . "' '$target_file', '" . ((double) $_POST["preis"]) . "', '" . $_POST["beschreibung"] . "');";
        if ($_res = $conn->query($insertStatement)) {
            echo "<br>Image $target_file has been added to the database.";
        } else {
            echo "<br>NO insertion into database";
        }
        # close database
        $conn->close();
    }
}

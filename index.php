<?php
include("./headerIndex.php");
?>

<body>
    <div id="blurry" onclick="popUpClose()"></div>

    <div id="header">
        <div id="grun"></div>
        <a href="./index.php">
            <h3>Dragontail</h3>
        </a>
        <h1>Produkte</h1>
        <div id="buttons">
            <a href="./unterseiten/profil.php">
                <img src="./img/benutzer.png" alt="Benutzer">
            </a>
            <a href="./unterseiten/warenkorb.php">
                <img src="./img/shopping-cart.png" alt="Shopping Cart">
            </a>
        </div>
    </div>

    <div id="artikel">
        <?php
        //$artikel = json_decode(file_get_contents("./artikel.json"));

        $_db_host = "localhost";
        $_db_datenbank = "dragontail";
        $_db_username = "dev";
        $_db_passwort = "dev1234";
        $conn = new mysqli($_db_host, $_db_username, $_db_passwort, $_db_datenbank);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get Data
        $sql = "SELECT * FROM artikel";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //echo $row["artikelnr"] . " " . $row["titel"] . " " . $row["img"] . " " . $row["preis"] . " " . $row["katigorie"] . "<br>";

                $pfad = "./img/artikel/" . $row["katigorie"] . "/";
                $string = '<div onclick="popUp(this)" class="artikeln" id="' . $row["artikelnr"] . '"> <p style="display:none">' . $row["artikelnr"] . '</p>';
                $img = $pfad . $row['img'];
                $string2 = "<div style=\"background-image: url('$img')\"></div>";
                $string3 = '<p>' . $row["titel"] . '</p>';
                $string4 = '</div>';

                echo $string;
                echo $string2;
                echo $string3;
                echo $string4;
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>

    <?php
    include("./footer.php");
    ?>

</body>

</html>
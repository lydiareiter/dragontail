<?php
$_db_host = "localhost";
$_db_datenbank = "dragontail";
$_db_username = "dev";
$_db_passwort = "dev1234";

$conn = new mysqli($_db_host, $_db_username, $_db_passwort, $_db_datenbank);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$anzrow = 0;

if (isset($_GET['email'])) {
    $sql = "SELECT count(*) as anzrow from warenkorb join warenkorbartikel w using (warenkorbid) join artikel a using (artikelnr) where email like '" . $_GET['email'] . "';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $anzrow = $row["anzrow"];
        }
    }


    $sql = "SELECT * from warenkorb join warenkorbartikel w using (warenkorbid) join artikel a using (artikelnr) where email like '" . $_GET['email'] . "';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $anzrow--;

            echo '{';

            echo '"artikelnr": ';
            echo $row["artikelnr"] . ',';

            echo '"anz": ';
            echo $row["anz"] . ',';

            echo '"titel": ';
            echo '"' . $row["titel"] . '",';

            echo '"preis": ';
            echo $row["preis"] . ',';

            echo '"katigorieid": ';
            echo $row["katigorieid"] . ',';

            echo '"beschreibung": ';
            echo '"' . $row["beschreibung"] . '"';

            echo '}';

            if ($anzrow > 0) {
                echo ',';
            }
        }
    }
}

$conn->close();

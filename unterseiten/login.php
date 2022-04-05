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
$sql = "SELECT * FROM benutzer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["vorname"] . " " . $row["nachname"] . " " . $row["geburtsdatum"] . " " . $row["email"] . " " . $row["passwort"] . "<br>";

        if ($row["email"] == $_POST["email"] && $row["passwort"] == md5($_POST["password"])) {
            $string2 = "{";
            $string2 = $string2 . '"vorname": "' . $row["vorname"] . '",';
            $string2 = $string2 . '"nachname": "' . $row["nachname"] . '",';
            $string2 = $string2 . '"geburtsdatum": "' . $row["geburtsdatum"] . '",';
            $string2 = $string2 . '"email": "' . $row["email"] . '",';
            $string2 = $string2 . '"passwort": "' . $row["passwort"] . '"';
            $string2 = $string2 . "}";

            setcookie("Dragontail", $string2, time() + 3600); # 1 Stunde gültig
            header("Location: ./profil.php");
            exit;
        }
    }
} else {
    echo "0 results";
}
$conn->close();

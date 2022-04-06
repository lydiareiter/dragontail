<?php
$_db_host = "localhost";
$_db_datenbank = "dragontail";
$_db_username = "dev";
$_db_passwort = "dev1234";
$conn = new mysqli($_db_host, $_db_username, $_db_passwort, $_db_datenbank);

if ($conn->connect_error) {
    echo "Fehler";
    die("Connection failed: " . $conn->connect_error);
}

// Get Data
$sql = "insert into benutzer (vorname, nachname, geburtsdatum, email, passwort) values (" . 
    $_POST["vorname"] .
    ", " .
    $_POST["nachname"] .
    ", " .
    $_POST["gbDate"] .
    ", " .
    $_POST["email"] .
    ", " .
    md5($_POST["password"]) .
    ")";
    echo 2;
$result = $conn->query($sql);
$conn->query("commit");
$conn->close();

$string = "{";
    $string = $string . '"vorname": "' . $_POST["vorname"] . '",';
    $string = $string . '"nachname": "' . $_POST["nachname"] . '",';
    $string = $string . '"geburtsdatum": "' . $_POST["gbDate"] . '",';
    $string = $string . '"email": "' . $_POST["email"] . '",';
    $string = $string . '"passwort": "' . md5($_POST["password"]) . '"';
    $string = $string . "}";

setcookie("Dragontail", $string, time() + 3600); # 1 Stunde gültig
header("Location: ./profil.php");
?>
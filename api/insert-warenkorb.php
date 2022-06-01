<?php
$_db_host = "localhost";
$_db_datenbank = "dragontail";
$_db_username = "dev";
$_db_passwort = "dev1234";

$conn = new mysqli($_db_host, $_db_username, $_db_passwort, $_db_datenbank);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['benutzerid'])) {
    $sql = "INSERT INTO `warenkorb` (`warenkorbid`, `email`) VALUES (NULL, '" . $_GET['benutzer'] . "');";
    $conn->query($sql);
}

if (isset($_GET['benutzer']) && isset($_GET['artikelnr'])) {
    $sql = "INSERT INTO `warenkorb` (`warenkorbid`, `email`) VALUES (NULL, '" . $_GET['benutzer'] . "');";
    $conn->query($sql);
}

$conn->close();

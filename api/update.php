<?php
$_db_host = "localhost";
$_db_datenbank = "dragontail";
$_db_username = "dev";
$_db_passwort = "dev1234";

$conn = new mysqli($_db_host, $_db_username, $_db_passwort, $_db_datenbank);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['email']) && isset($_GET['artikelnr']) && isset($_GET['anz'])) {
    $sql = "UPDATE warenkorbartikel set anz = " . $_GET['anz'] . " where warenkorbid like (select warenkorbid from warenkorb where email like \"" . $_GET['email'] . "\") and artikelnr like " . $_GET['artikelnr'] . ";";
    echo $sql;
    $conn->query($sql);
}

$conn->close();

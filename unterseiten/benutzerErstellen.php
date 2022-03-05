<?php
$benutzer = json_decode(file_get_contents("../benutzer.json"));

$string = "[";
foreach ($benutzer as $i) {
    $string = $string . '{';
    $string = $string . '"vorname": "' . $i->vorname . '",';
    $string = $string . '"nachname": "' . $i->nachname . '",';
    $string = $string . '"geburtsdatum": "' . $i->geburtsdatum . '",';
    $string = $string . '"email": "' . $i->email . '",';
    $string = $string . '"passwort": "' . $i->passwort . '"';
    $string = $string . '},';
}

$string2 = "{";
$string2 = $string2 . '"vorname": "' . $_POST["vorname"] . '",';
$string2 = $string2 . '"nachname": "' . $_POST["nachname"] . '",';
$string2 = $string2 . '"geburtsdatum": "' . $_POST["gbDate"] . '",';
$string2 = $string2 . '"email": "' . $_POST["email"] . '",';
$string2 = $string2 . '"passwort": "' . md5($_POST["password"]) . '"';
$string2 = $string2 . "}";

$string = $string . $string2 . "]";

$myfile = fopen("../benutzer.json", "w") or die("Unable to open file!");
fwrite($myfile, $string);
fclose($myfile);

setcookie("Dragontail", $string2, time()+3600); # 1 Stunde gültig
header("Location: ./profil.php");
exit;
?>
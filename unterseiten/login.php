<?php
$benutzer = json_decode(file_get_contents("../benutzer.json"));

foreach ($benutzer as $i) {
    if ($i->email == $_POST["email"] && $i->passwort == md5($_POST["password"])) {
        $string2 = "{";
        $string2 = $string2 . '"vorname": "' . $i->vorname . '",';
        $string2 = $string2 . '"nachname": "' . $i->nachname . '",';
        $string2 = $string2 . '"geburtsdatum": "' . $i->geburtsdatum . '",';
        $string2 = $string2 . '"email": "' . $i->email . '",';
        $string2 = $string2 . '"passwort": "' . $i->passwort . '"';
        $string2 = $string2 . "}";

        setcookie("Dragontail", $string2, time() + 3600); # 1 Stunde gültig
        header("Location: ./profil.php");
        exit;
    }
}
?>
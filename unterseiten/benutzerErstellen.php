<?php
            $benutzer = json_decode(file_get_contents("../benutzer.json"));

            $string = "[{";
            foreach($benutzer as $i){
                $string = $string . '"vorname": "' . $i->vorname . '",';
                $string = $string . '"nachname": "' . $i->nachname . '",';
                $string = $string . '"geburtsdatum": "' . $i->geburtsdatum . '",';
                $string = $string . '"email": "' . $i->email . '",';
                $string = $string . '"passwort": "' . $i->passwort . '"';
                $string = $string . '},';
            }

            $string = $string . "{";
            $string = $string . '"vorname": "' . $_POST["vorname"] . '",';
            $string = $string . '"nachname": "' . $_POST["nachname"] . '",';
            $string = $string . '"geburtsdatum": "' . $_POST["gbDate"] . '",';
            $string = $string . '"email": "' . $_POST["email"] . '",';
            $string = $string . '"passwort": "' . md5($_POST["password"]) . '"';
            
            $string = $string . "}]";

            $myfile = fopen("../benutzer.json", "w") or die("Unable to open file!");
            fwrite($myfile, $string);
            fclose($myfile);
        ?>
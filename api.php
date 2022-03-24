<?php

    $artikel = json_decode(file_get_contents("./artikel.json"));

    foreach ($artikel as $i) {
        $pfad = "./img/artikel/" . $i->katigorie . "/";
        $string = '<div onclick="popUp(this)" class="artikeln" id="' . $i->artikelnr . '">';
        $string2 = "<div style=\"background-image: url('$pfad$i->img')\"></div>";
        $string3 = '<p>' . $i->titel . '</p>';
        $string4 = '</div>';

        echo $string;
        echo $string2;
        echo $string3;
        echo $string4;
    }
?>
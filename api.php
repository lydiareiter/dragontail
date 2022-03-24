<?php
    # how can i have the id which i need???
    foreach ($artikel as $i) {
        if($i->artikelnr == $id){
            $data->katigorie = $i->katigorie;
            $data->artikelnr = $i->artikelnr;
            $data->titel = $i->titel;
            $data->img = $i->img;
            $data->preis = $i->preis;
        }
    }
    echo $data;
?>
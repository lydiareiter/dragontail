<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Open+Sans:wght@300&family=Work+Sans:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Dragontail</title>
</head>
<body>
    <div id="header">
        <div id="grun"></div>
        <a href="./index.php"><h3>Dragontail</h3></a>
        <h1>Bücher</h1>
        <div id="buttons">
            <a href="./unterseiten/anmelden.php">
                <img src="./img/benutzer.png" alt="Benutzer">
            </a>
            <a href="./unterseiten/warenkorb.php">
                <img src="./img/shopping-cart.png" alt="Shopping Cart">
            </a>
        </div>
    </div>

    <div id="artikel">
        <?php

        $artikel = json_decode(file_get_contents("./artikel.json"));

        foreach($artikel as $i){
            $pfad = "./img/artikel/". $i->katigorie ."/";
            $string = '<div class="artikeln" id="' . $i->artikelnr .'">';
            $string2 = "<div style=\"background-image: url('$pfad$i->img')\"></div>";
            $string3 = '<p>'. $i->titel .'</p>';
            $string4 = '</div>';

            echo $string;
            echo $string2;
            echo $string3;
            echo $string4;
        }
        ?>
    </div>
</body>
</html>
<?php
include("./headerIndex.php");
?>

<body>
<div id="blurry"></div>

<div id="header">
    <div id="grun"></div>
    <a href="./index.php"><h3>Dragontail</h3></a>
    <h1>Produkte</h1>
    <div id="buttons">
        <a href="./unterseiten/profil.php">
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
</div>

<?php
include("./footer.php");
?>

</body>
</html>
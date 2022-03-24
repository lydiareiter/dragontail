<?php
include("./headerIndex.php");
?>

<body>
<div id="blurry" onclick="popUpClose()"></div>

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
    include("./api.php")
    ?>
</div>

<?php
include("./footer.php");
?>

</body>
</html>
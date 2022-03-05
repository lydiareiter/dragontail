<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Open+Sans:wght@300&family=Work+Sans:wght@200&display=swap"
            rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <title>Dragontail</title>
</head>

<body>
<div id="header">
    <div id="grun"></div>
    <a href="../index.php">
        <h3>Dragontail</h3>
    </a>
    <h1>Anmeldung</h1>
    <div id="buttons">
        <a href="./warenkorb.php">
            <img src="../img/shopping-cart.png" alt="Shopping Cart">
        </a>
        <a href="../index.php">
            <img src="../img/x.png" alt="close">
        </a>
    </div>
</div>
<div id="mainBox">
<form action="login.php" method="post">
    <div>
        <h3>E-Mail</h3>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <h3>Passwort</h3>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <button type="submit">Anmelden</button>
    </div>
</form>
    <div>
        <a href="./konto-erstellen.php">Konto erstellen</a>
    </div>

</div>
<?php
include("./footer.php");
?>
</body>

</html>
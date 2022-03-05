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
    <h1>Warenkorb</h1>
    <div id="buttons">
        <a href="./profil.php">
            <img src="../img/benutzer.png" alt="Benutzer">
        </a>
        <a href="../index.php">
            <img src="../img/x.png" alt="close">
        </a>
    </div>

    <?php
    if ($_COOKIE["Dragontail"] == null) {
        header("Location: ./profil.php");
        exit;
    }
    ?>

</div>
<div>
    <h2>Sie haben nichts in Ihren Warenkob</h2>
</div>
<?php
include("../footer.php");
?>
</body>

</html>
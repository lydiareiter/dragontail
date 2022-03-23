<?php
include("./header.php");
?>

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
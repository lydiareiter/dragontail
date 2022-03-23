<?php
include("../header.php");
?>

<body>
<div id="header">
    <div id="grun"></div>
    <a href="../index.php">
        <h3>Dragontail</h3>
    </a>
    <h1>Konto erstellen</h1>
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
    <form action="benutzerErstellen.php" method="post">
        <div>
            <h3>Vorname</h3>
            <input type="text" name="vorname" id="vorname">
        </div>

        <div>
            <h3>Nachname</h3>
            <input type="text" name="nachname" id="nachname">
        </div>
        <div>
            <h3>Geburtsdatum</h3>
            <input type="date" name="gbDate" id="gbDate">
        </div>
        <div>
            <h3>E-Mail</h3>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <h3>Passwort</h3>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <h3>Passwort erneut eingeben</h3>
            <input type="password" name="password2" id="password2">
        </div>
        <div>
            <button type="submit">Erstellen</button>
        </div>
    </form>
    <div>
        <a href="./anmelden.php">Schon ein Konto?</a>
    </div>
</div>
<?php
include("../footer.php");
?>
</body>

</html>
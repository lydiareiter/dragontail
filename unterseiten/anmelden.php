<?php
include("../header.php");
?>

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
include("../footer.php");
?>
</body>

</html>
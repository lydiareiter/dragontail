<?php
include("../header.php");
?>

<body>
<div id="header">
    <div id="grun"></div>
    <a href="../index.php">
        <h3>Dragontail</h3>
    </a>

    <?php
    if ($_COOKIE["Dragontail"] == null) {
        header("Location: ./anmelden.php");
        exit;
    }
    ?>

    <h1>Konto</h1>
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
    <?php
    $data = json_decode($_COOKIE["Dragontail"]);

    echo '<form action="logout.php" method="post">
                <div>
                    <h3>Vorname</h3>
                    <p id="vorname">' . $data->vorname . '</p>
                </div>
                <div>
                    <h3>Nachname</h3>
                    <p id="nachname">' . $data->nachname . '</p>
                </div>
                <div>
                    <h3>Geburtsdatum</h3>
                    <p id="gbDate">' . $data->geburtsdatum . '</p>
                </div>
                <div>
                    <h3>E-Mail</h3>
                    <p id="email">' . $data->email . '</p>
                </div>
                <div>
                    <button type="submit">Logout</button>
                </div>
                </form>';
    ?>
</div>
<?php
include("../footer.php");
?>
</body>
</html>
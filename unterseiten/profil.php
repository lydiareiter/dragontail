<?php
include("../header.php");
?>

<body>
    <div id="header-nav-wrapper">
        <header>
            <a href="../index.php">
                <h1>DRAGONTAIL</h1>
            </a>
        </header>
        <nav>
            <div>
                <a href="warenkorb.php">WARENKORB</a>
            </div>
            <div>
                <a href="profil.php">KONTO</a>
            </div>
        </nav>
    </div>

    <?php
    if ($_COOKIE["Dragontail"] == null) {
        header("Location: ./anmelden.php");
        exit;
    }
    ?>

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
include("../footer-other.php");
?>
</body>
</html>
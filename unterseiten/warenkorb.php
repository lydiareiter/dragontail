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
        echo "<h3>Bitte erstellen Sie ein Konto</h3>";
        set_time_limit(50000000);
        header("Location: ./profil.php");
        exit;
    }
    ?>

</div>
<div>
    <h2>Sie haben nichts in Ihren Warenkob</h2>
</div>
<?php
include("../footer-other.php");
?>
</body>

</html>
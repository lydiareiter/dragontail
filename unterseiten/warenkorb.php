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

    </div>
    <div>
        <?php
        if ($_COOKIE["Dragontail"] == null) {
            header("Location: ./profil.php");
            exit;
        }

        ?>

        <h3>Sie haben nichts in Ihren Warenkob</h3>
    </div>
    <?php
    include("../footer-other.php");
    ?>
</body>

</html>
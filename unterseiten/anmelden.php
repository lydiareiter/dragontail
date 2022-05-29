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
    include("../footer-other.php");
    ?>
</body>

</html>
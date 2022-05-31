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
                <label for="email">E-MAIL</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="password">PASSWORT</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <button type="submit">ANMELDEN</button>
            </div>
        </form>
        <div>
            <a href="./konto-erstellen.php">KONTO ERSTELLEN</a>
        </div>

    </div>

    <?php
        if(isset($_GET['failed'])){
            echo "<div class=\"alerterror\">
            <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>
            <strong>Fehler oder Problem!</strong> Problem bei den vorgenommenen Vorgang.
        </div>";
        }
    ?>

    <?php
    include("../footer-other.php");
    ?>
</body>

</html>
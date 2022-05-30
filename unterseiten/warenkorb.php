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
    <div id="warenkorb">
        <?php
        if ($_COOKIE["Dragontail"] == null) {
            header("Location: ./profil.php");
            exit;
        }

        ?>

        <script>
            let warenkorb = document.getElementById('warenkorb');
            if(localStorage.length == 0){
                warenkorb.innerHTML = '<h3>Sie haben nichts in Ihren Warenkob</h3>';
            }else{
                warenkorb.innerHTML = "";
                for (let index = 0; index < localStorage.length; index++) {
                    warenkorb.innerHTML += ("<p>" + localStorage[index] + "</p>");
                }
            }
        </script>

    </div>
    <?php
    include("../footer-other.php");
    ?>
</body>

</html>
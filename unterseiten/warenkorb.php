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
        /*
        if ($_COOKIE["Dragontail"] == null) {
            header("Location: ./profil.php");
            exit;
        }
        */
        ?>

        <script>
            function buy() {
                if (document.cookie != "") {
                    localStorage.clear();
                    location.reload();
                }else{
                    let ari = window.location.href.split("/");
                    let locat = "";
                    ari[ari.length-1] = "anmelden.php?failed=true";

                    for (let index = 0; index < ari.length; index++) {
                        locat += ari[index];
                        if(index != ari.length - 1){
                            locat += "/";
                        }
                    }

                    console.log(locat);

                    window.location.href = locat;
                }
            }

            let warenkorb = document.getElementById('warenkorb');
            if (localStorage.length == 0) {
                warenkorb.innerHTML = '<h3>Sie haben nichts in Ihren Warenkob</h3>';
            } else {
                warenkorb.innerHTML = "";
                for (let index = 0; index < localStorage.length; index++) {
                    warenkorb.innerHTML += ("<p>" + localStorage[index] + "</p>");
                }

                warenkorb.innerHTML += "<div><button onclick=\"buy()\">Kaufen</button></div>";
            }
        </script>

    </div>
    <?php
    include("../footer-other.php");
    ?>
</body>

</html>
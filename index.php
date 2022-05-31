<?php
$_db_host = "localhost";
$_db_datenbank = "dragontail";
$_db_username = "dev";
$_db_passwort = "dev1234";

$conn = new mysqli($_db_host, $_db_username, $_db_passwort, $_db_datenbank);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


include("./headerIndex.php");
?>

<body>
    <div id="header-nav-wrapper">
        <header>
            <a href="index.php">
                <h1>DRAGONTAIL</h1>
            </a>
        </header>
        <nav>
            <div>
                <a href="./unterseiten/warenkorb.php">WARENKORB</a>
            </div>
            <div>
                <a href="./unterseiten/profil.php">KONTO</a>
            </div>
        </nav>

        <div id="filter">
            <button type="button" class="collapsible">Filter</button>
            <div class="filter-content">
                <form action="index.php" method="get">
                    <div>
                        <label for="katigorie">Kategorie: </label>
                        <select name="kat" id="kat">
                            <option value="none">Bitte auswählen</option>
                            <?php

                            // Get Data
                            $sql = "SELECT * FROM katigorie;";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<option default value="' . $row["bezeichnung"] . '">' . $row["bezeichnung"] . '</option>';
                                }
                            }

                            ?>

                        </select>
                    </div>
                    <input type="submit" value="Filtern" name="submit">
                </form>
            </div>

            <script>
                var coll = document.getElementsByClassName("collapsible");
                var i;

                for (i = 0; i < coll.length; i++) {
                    coll[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var content = this.nextElementSibling;
                        if (content.style.display === "block") {
                            content.style.display = "none";
                        } else {
                            content.style.display = "block";
                        }
                    });
                }
            </script>
        </div>
    </div>

    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Funktioniert!</strong> Artikel konnte in den Warenkob gegeben werden.
    </div>

    <main>

        <?php

        if (isset($_GET["kat"]) && $_GET["kat"] != 'none') {
            $sql = "SELECT * FROM artikel join katigorie k using (katigorieid) where k.bezeichnung like '" . $_GET["kat"] . "' ORDER BY RAND();";
        } else {
            $sql = "SELECT * FROM artikel join katigorie k using (katigorieid) ORDER BY RAND();";
        }

        // Get Data
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //echo $row["artikelnr"] . " " . $row["titel"] . " " . $row["img"] . " " . $row["preis"] . " " . $row["katigorie"] . "<br>";

            
                echo "<div id=\"" . $row["artikelnr"] . "\"";

                $path = "./img/artikel/" . $row["bezeichnung"] . "/" .  $row['img'];

                if($row['img'] != null && file_exists($path)){

                    echo "style=\"background: url('" . $path . "')\">";
                }

                echo "<div class=\"product-overlay\"></div>";

                echo "<div class=\"product-content\">
                <div class=\"product-headline\">";

                echo "<div>" . $row["titel"] . "</div>";

                echo "</div>";

                echo "<div class=\"product-body\">";

                echo "<p>" . $row["beschreibung"] . "</p>";

                echo "</div>
                <div class=\"product-footer\">
                    <div class=\"product-amount-select\">
                        <div onclick=\"remove(this)\" class=\"product-amount-select-minus\">
                            <div></div>
                        </div>
                        <div>1</div>
                        <div onclick=\"add(this)\" class=\"product-amount-select-plus\">
                            <div></div>
                        </div>
                    </div>
                    <div onclick=\"addCart(this)\" class=\"product-add\">HINZUFÜGEN</div>
                </div>
            </div>
        </div>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </main>

    <?php
    include("./footer.php");
    ?>

</body>

</html>

<?php
$conn->close();
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Open+Sans:wght@300&family=Work+Sans:wght@200&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <title>Dragontail</title>
</head>

<body>
    <div id="header">
        <div id="grun"></div>
        <a href="../index.php">
            <h3>Dragontail</h3>
        </a>
        <h1>Konto erstellen</h1>
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
    <form action="benutzerErstellen.php" method="post">
        <div>
            <h3>Vorname</h3>
            <input type="text" name="vorname" id="vorname">
        </div>

        <div>
            <h3>Nachname</h3>
            <input type="text" name="nachname" id="nachname">
        </div>
        <div>
            <h3>Geburtsdatum</h3>
            <input type="date" name="gbDate" id="gbDate">
        </div>
        <div>
            <h3>E-Mail</h3>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <h3>Passwort</h3>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <h3>Passwort erneut eingeben</h3>
            <input type="password" name="password2" id="password2">
        </div>
        <div>
            <button type="submit">Erstellen</button>
        </div>
        </form>
        <div>
            <a href="./anmelden.php">Schon ein Konto?</a>
        </div>
    </div>
</body>

</html>
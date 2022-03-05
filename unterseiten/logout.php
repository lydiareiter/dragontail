<?php
setcookie("Dragontail", "", time() - 10000);
header("Location: ./profil.php");
exit;
?>
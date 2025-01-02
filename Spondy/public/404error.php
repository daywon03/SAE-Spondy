<?php
$title = "404 Not Found";
$style = "./styles/style_home.css";
$script = "./scripts/script.js";
require_once("./header.php");
?>

<main>
<div class="container">
    <h1>404</h1>
    <h2>Cette page n'existe pas</h2>
    <p>Ce site n'est qu'une démo et cette page n'existe pas encore</p>
    <a href="index.php" class="button">Retour à la page d'accueil</a>
</div>
</main>

<?php
require_once("./footer.php");
?>

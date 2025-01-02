
<?php
$style = "./styles/style_connexion.css";
$title = "AFS - Accueil";
$script = "scripts/connexion.js";
$excludeContainer = true; // Empêche l'ajout du <div class="container">
require_once("./header.php");
?>
<main>
    <div class="container">

        <form id="login-form" class="active" action="login.php" method="POST" >
            <h2>Bienvenue</h2>
            <div class="input-group">
                <label for="login-email">Email</label>
                <input type="email" id="login-email" name="login-email" required placeholder="Entrez votre email">
            </div>
            <div class="input-group">
                <label for="login-password">Mot de passe</label>
                <input type="password" id="login-password" name="login-password" required placeholder="Entrez votre mot de passe">
            </div>
            <button type="submit" onclick="document.getElementById('questionnaire').style.display = 'block';">Se connecter</button>
            <div class="error-message" id="login-error"></div>
            <div class="toggle-form">
                <a href="javascript:void(0)" onclick="toggleForm('signup-form')">Pas encore de compte ? Inscrivez-vous</a>
            </div>
        </form>

        <form id="signup-form" action="signup.php" method="POST">
    <h2>Créer un compte</h2>
    <div class="input-group">
        <label for="signup-name">Nom complet</label>
        <input type="text" id="signup-name" name="signup-name" required placeholder="Entrez votre nom complet">
    </div>
    <div class="input-group">
        <label for="signup-email">Email</label>
        <input type="email" id="signup-email" name="signup-email" required placeholder="Entrez votre email">
    </div>
    <div class="input-group">
        <label for="signup-password">Mot de passe</label>
        <input type="password" id="signup-password" name="signup-password" required placeholder="Choisissez un mot de passe">
    </div>
    <button type="submit">S'inscrire</button>
    <div class="toggle-form">
        <a href="javascript:void(0)" onclick="toggleForm('login-form')">Déjà un compte ? Connectez-vous</a>
    </div>
    </form>

</main>
<?php
require_once("./footer.php");
?>
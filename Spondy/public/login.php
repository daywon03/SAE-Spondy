<?php

use back\Auth;
use back\config;
use back\SQLUser;

if (!session_id()) {
    session_start();
}

require "../back/config.php";  // Pour la connexion à la base de données
require "../back/SQLUser.php"; // Gestion des utilisateurs
require "../back/Auth.php";    // Authentification

// Initialisation des objets nécessaires
$bdd = new config(); // Classe de configuration de la BDD
$pdo = $bdd->connexion(); // Connexion à la base
$userRepo = new SQLUser($pdo); // Gestion des utilisateurs
$auth = new Auth($userRepo);   // Gestion de l'authentification

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars($_POST['login-email'] ?? ''); // Vérifie et sécurise l'email
    $password = $_POST['login-password'] ?? ''; // Mot de passe

    try {
        // Tente de connecter l'utilisateur
        $auth->login($email, $password);
        $_SESSION['flash']['success'] = "Connexion réussie. Bienvenue !";

        exit;
    } catch (Exception $e) {
        $_SESSION['flash']['warning'] = "Erreur : " . $e->getMessage();
    }
}
?>

<?php

use \back\config;

require "../back/config.php";
$bdd = new config();
$pdo = $bdd->connexion();
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = htmlspecialchars($_POST['signup-name']);
    $email = htmlspecialchars($_POST['signup-email']);
    $password = password_hash($_POST['signup-password'], PASSWORD_DEFAULT); //Hash le mdp

    try {
        //vérifie si le mail existe déjà dans la base
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ? ");
        $stmt -> execute([$email]);
        if ($stmt->rowCount()>0){
            echo "Cet email est déjà utilisé.";
            exit;
        }

        //Insère le nouvelle utilisateur
        $stmt = $pdo -> prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :pwd)");
        $stmt -> execute ([":name" =>$name,"email"=> $email, ":pwd"=>$password]);
        $_SESSION['flash']['success'] = "Connexion réussie. Bienvenue !";
        header("Location : connexion.php");
        exit;
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
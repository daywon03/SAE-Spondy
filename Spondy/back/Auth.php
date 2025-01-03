<?php

namespace back;

require_once 'SQLUser.php';

class Auth
{
    private SQLUser $userRepo;

    public function __construct(SQLUser $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    /**
     * Tente de connecter un utilisateur.
     *
     * @param string $email
     * @param string $password
     * @throws Exception
     */
    public function login(string $email, string $password): void
    {
        $user = $this->userRepo->findUserByEmail($email);
        if (!$user || !password_verify($password, $user['password'])) {
            throw new \Exception("Email ou mot de passe incorrect.");
        }

        // Si l'utilisateur est validé, on enregistre ses informations en session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_role'] = $user['role'];
    }
}

// Connexion à la base de données
try {
    $bdd = new config();
    $pdo = $bdd->connexion();
    $userRepo = new SQLUser($pdo);
    $auth = new Auth($userRepo);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = htmlspecialchars($_POST['login-email'] ?? '');
        $password = $_POST['login-password'] ?? '';

        try {
            $auth->login($email, $password);
            if ($_SESSION['user_role'] == 'admin') {
                header("Location: ../administrateur/admin.php");
            }else{
                $_SESSION['flash']['success'] = "Connexion réussie. Bienvenue !";
                header("Location: questionnaire.php"); // Redirection après succès
            }
            exit;

        } catch (Exception $e) {
            $_SESSION['flash']['error'] = $e->getMessage();
        }
    }
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
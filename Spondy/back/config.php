<?php

namespace back;
class config
{
    private \PDO $pdo;
    private string $host;
    private string $port;
    private string $login;
    private string $password;
    private string $dbname;

    public function __construct()
    {
        // Paramètres de connexion à la base de données
        $this->host = '127.0.0.1';  // Adresse du serveur MySQL
        $this->port = '8889';       // Port MySQL
        $this->login = 'admin';     // Nom d'utilisateur MySQL
        $this->password = 'pswd';   // Mot de passe MySQL
        $this->dbname = 'AFS_Quiz'; // Nom de la base de données
    }

    /**
     * Connexion à la base de données
     *
     * @return \PDO
     */
    public function connexion(): \PDO
    {
        try {
            // Chaîne de connexion DSN
            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->dbname};charset=utf8";

            // Création d'une nouvelle instance PDO
            $this->pdo = new \PDO($dsn, $this->login, $this->password);

            // Configuration des attributs PDO
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

        } catch (\PDOException $e) {
            // Gestion des erreurs
            die("Erreur de connexion BDD : " . $e->getMessage());
        }

        return $this->pdo;
    }
}

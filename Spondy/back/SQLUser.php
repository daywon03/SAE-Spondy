<?php

namespace back;
class SQLUser
{
    public function __construct(private \PDO $connexion)
    {
    }

    public function findUserByEmail(string $email): ?array
    {
        $stmt = $this->connexion->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();

        return $user ?: null;
    }
}
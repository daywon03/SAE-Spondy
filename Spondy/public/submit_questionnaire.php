<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: connexion.php");
    exit;
}

require '../back/config.php';
require "../back/SQLUser.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $data = json_decode(file_get_contents('php://input'), true);

        // Vérification des données
        if (!isset($data['age'], $data['region'], $data['situation_logement'], $data['cdaph'], $data['activite_pro'], $data['besoins_soutien'])) {
            http_response_code(400); // Mauvaise requête
            echo json_encode(["error" => "Données manquantes"]);
            exit;
        }

        $age = htmlspecialchars($data['age']);
        $region = htmlspecialchars($data['region']);
        $situation_logement = htmlspecialchars($data['situation_logement']);
        $cdaph = htmlspecialchars($data['cdaph']);
        $choix_logement = htmlspecialchars($data['choix_logement'] ?? ""); // Optionnel
        $activite_pro = htmlspecialchars($data['activite_pro']);
        $besoins_soutien = htmlspecialchars($data['besoins_soutien']);
        $qualite_vie = isset($data['qualite_vie']) ? implode(", ", $data['qualite_vie']) : "";

        $bdd = new \back\config();
        $pdo = $bdd->connexion();

        $sql = "INSERT INTO questionnaire (age, region, situation_logement, cdaph, choix_logement, activite_pro, besoins_soutien, qualite_vie)
                VALUES (:age, :region, :situation_logement, :cdaph, :choix_logement, :activite_pro, :besoins_soutien, :qualite_vie)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":age" => $age,
            ":region" => $region,
            ":situation_logement" => $situation_logement,
            ":cdaph" => $cdaph,
            ":choix_logement" => $choix_logement,
            ":activite_pro" => $activite_pro,
            ":besoins_soutien" => $besoins_soutien,
            ":qualite_vie" => $qualite_vie
        ]);

        echo json_encode(["success" => true]);
        exit;
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(["error" => $e->getMessage()]);
        exit;
    }
} else {
    http_response_code(405); // Méthode non autorisée
    echo json_encode(["error" => "Méthode non autorisée"]);
    exit;
}

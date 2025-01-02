<?php
require '../../back/config.php';

$pdo = (new \back\config())->connexion();

try {
    $data = $pdo->query("SELECT region, COUNT(*) as count FROM questionnaire GROUP BY region")->fetchAll(PDO::FETCH_ASSOC);
    header('Content-Type: application/json');
    echo json_encode($data);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["error" => $e->getMessage()]);
}

<?php
require '../../back/config.php';
$pdo = (new \back\config())->connexion();
$data = $pdo->query("SELECT age, COUNT(*) as count FROM questionnaire GROUP BY age ORDER BY age ASC")->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type: application/json');
echo json_encode($data);

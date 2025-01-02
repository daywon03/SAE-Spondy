<?php
require '../../back/config.php';
$pdo = (new \back\config())->connexion();
$data = $pdo->query("SELECT besoins_soutien as need, COUNT(*) as count FROM questionnaire GROUP BY besoins_soutien")->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type: application/json');
echo json_encode($data);

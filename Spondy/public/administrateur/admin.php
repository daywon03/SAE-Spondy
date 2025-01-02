<?php
session_start();

require '../../back/config.php';
$pdo = (new \back\config())->connexion();

// Récupération des données
$stmt = $pdo->query("SELECT * FROM questionnaire");
$questionnaireData = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - AFS</title>
    <link rel="stylesheet" href="../styles/admin.css">
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src="../scripts/admin.js" defer></script>
</head>
<body>

<header>
    <h1>Tableau de Bord Administrateur</h1>
    <nav>
        <a href="../index.php">Accueil</a>
        <a href="logout.php">Déconnexion</a>
    </nav>
</header>

<main>
    <!-- Section Tableau -->
    <section id="data-section">
        <h2>Données collectées</h2>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Âge</th>
                <th>Région</th>
                <th>Situation Logement</th>
                <th>CDAPH</th>
                <th>Activité Pro</th>
                <th>Besoins Soutien</th>
                <th>Qualité Vie</th>
                <th>Choix logement</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($questionnaireData as $row): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['age']) ?></td>
                    <td><?= htmlspecialchars($row['region']) ?></td>
                    <td><?= htmlspecialchars($row['situation_logement']) ?></td>
                    <td><?= htmlspecialchars($row['cdaph']) ?></td>
                    <td><?= htmlspecialchars($row['activite_pro']) ?></td>
                    <td><?= htmlspecialchars($row['besoins_soutien']) ?></td>
                    <td><?= htmlspecialchars($row['qualite_vie']) ?></td>
                    <td><?= htmlspecialchars($row['choix_logement']) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </section>

    <!-- Section Graphiques -->
    <section id="indicators-section">
        <h2>Indicateurs</h2>
        <div id="chart-container">
            <div id="region-chart" class="chart">
                <h3>Répartition par région</h3>
                <div id="pie-chart"></div>
            </div>
            <div id="age-chart" class="chart">
                <h3>Distribution des âges</h3>
                <div id="bar-chart" class="graph"></div>
            </div>
            <div id="needs-chart" class="chart">
                <h3>Besoins</h3>
                <div id="horizontal-bar-chart"></div>
            </div>
        </div>
    </section>
</main>

</body>
</html>

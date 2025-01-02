
<html>

<head>
    <link rel="icon" type="image/x-icon" href=./images/fav.png>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ? $title: "AFS"?></title>
    <link rel="stylesheet" href="<?php echo $style='./styles/style.css' ? $style: ''?>">
</head>
<body>
<?php if (!isset($excludeContainer) || !$excludeContainer): ?>
<div class="container">
    <?php endif; ?>

<header>
    <div class="logo-container">
        <a><img src="./images/logo.png" alt="Logo de l'AFS"></a>
    </div>
    <nav>

        <!-- MENU-->
        <div class="hamburger" id="hamburger">&#9776;</div> <!-- Hamburger icon -->
        <ul id="nav-links" class="hidden">
            <li><a href="index.php">L'AFS</a>
            </li>
            <li><a  href="#actualite">Actualité</a>
            </li>
            <li><a href="laSpondy.php">La maladie</a>
                <ul class="submenu hidden">
                    <li><a href="laSpondy.php">Qu’est ce que la spondyloarthrtite</a></li>
                    <li><a href="404error.php">Recherche et Progrès</a></li>
                    <li><a href="404error.php">Informations médicale</a></li>
                    <li><a href="404error.php">Articles spécialisée médicaux</a></li>
                    <li><a href="404error.php">L’AFs et la recherche</a></li>
                    <li><a href="404error.php">Essai clinique </a></li>
                    <li><a href="404error.php">Espace soignant </a></li>

                </ul>
            </li>


            <li><a href="/temoignage">Qui sommes nous</a>

                <ul class="submenu hidden">
                    <li><a href="quiSomme.php">Qu’est ce que l’AFS</a></li>
                    <li><a href="404error.php">Conseil d'administration et dirigeants de l'AFS</a></li>
                    <li><a href="404error.php">L’AFs et la recherche</a></li>

                </ul></li>

            <li><a href="404error.php">Nous rejoindre</a>
                <ul class="submenu hidden">
                    <li><a href="./connexion.html">Espace malade</a></li>
                    <li><a href="404error.php">Spondyfollowers</a></li>
                    <li><a href="don.php">Faire un don</a></li>
                    <li><a href="404error.php">Nous contacter</a></li>
                    <li><a href="404error.php">Délegation de l’afs</a></li>
                </ul>
            </li>


        </ul>
    </nav>
</header>

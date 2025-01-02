<?php
$title = "AFS - Accueil";
$style = "./styles/style_home.css";
$script = "./scripts/script.js";
require_once("./header.php");
?>
<main>
    <div id="hero">
        <h1>Agir contre <br> la spondyloarthrite</h1>
        <p>Association reconnue par le Ministère de la Santé, pour les malades, par les malades</p>
         <a href = "connexion.php"><button> Rejoignez-nous</button></a>
    </div>
   <div class="content">
   </div>

    <div id="quiSommeNous" >
        <h1>Qui sommes-nous?</h1>
        <h3>L'AFS, reconnue d'utilité publique, rassemble des malades pour aider ceux souffrant de spondyloarthrite.</h3>
        <p><b>Mission : Soutenir les malades, informer, et agir.</b>

            Depuis sa création, l’AFS (Association France Spondyloarthrites) s’engage à améliorer la qualité de vie des personnes atteintes de spondyloarthrite en France. Reconnue par le Ministère de la Santé, l’AFS compte aujourd’hui plus de <b>5 000 membres actifs</b> et près de<b> 100 bénévoles</b> répartis à travers <b>12 délégations régionales.</b> Chaque année, nous organisons plus de <b>50 événements</b> de sensibilisation, conférences médicales et actions de soutien.

            <b>Ensemble, nous faisons avancer la recherche et améliorons le quotidien des malades. Rejoignez-nous !</b></p>
        <button>Rejoignez-nous</button>

    </div>




    <!-- Section Actualités -->
    <section id="actualite">
        <h2>Actualité</h2>
        <div class="actualites-container">
            <article class="actualite-item">
                <img src="./images/actu.png" alt="Actualité 1">
                <h3>Titre</h3>
                <p>Sous-titre</p>
                <p>Contenu bref de l'actualité...</p>
            </article>
            <article class="actualite-item">
                <img src="./images/actu.png" alt="Actualité 2">
                <h3>Titre</h3>
                <p>Sous-titre</p>
                <p>Contenu bref de l'actualité...</p>
            </article>
            <article class="actualite-item">
                <img src="./images/actu.png" alt="Actualité 3">
                <h3>Titre</h3>
                <p>Sous-titre</p>
                <p>Contenu bref de l'actualité...</p>
            </article>
        </div>
    </section>

    <!-- Section Membres -->
    <section id="membres">
        <h2>Notre équipe</h2>
        <div class="membres-container">
            <div class="membre-item">
                <img src="./images/presidente.jpg" alt="Membre 1">
                <h3>Delphine Lafarge</h3>
                <p>Présidente</p>
            </div>
            <div class="membre-item">
                <img src="./images/vice.jpg" alt="Membre 2">
                <h3>Vice présidente</h3>
                <p>Title</p>
            </div>
            <div class="membre-item">
                <img src="./images/secretaire.jpg" alt="Membre 3">
                <h3>Marie-Christine Roblet</h3>
                <p>Title</p>
            </div>
        </div>
    </section>


</main>

<?php
require_once("./footer.php");
?>
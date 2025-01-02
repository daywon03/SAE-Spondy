
<?php
$style = "styles/style_connexion.css";
$title = "AFS - Accueil";
$script = "scripts/connexion.js";
$excludeContainer = true; // Empêche l'ajout du <div class="container">
require_once("./header.php");
?>


<main>
    <form id="questionnaire" method="POST" style="display: block">

    <div class="container">

            <h2>Questionnaire détaillé</h2>
            <div class="progress-bar">
                <div class="progress" id="progress"></div>
            </div>

            <div class="question-container">
                <div class="question">
                    <label for="age-input">Quel est votre âge ?</label>
                    <div class="input-group">
                        <input
                                type="number"
                                id="age-input"
                                name="age"
                                min="0"
                                required
                                placeholder="Entrez votre âge"

                                    >
                    </div>
                </div>

                <div class="question">
                    <label for="satisfaction-select">Dans quelle région habitez-vous ?</label>
                    <div class="input-group">
                        <select id="satisfaction-select" name="region" required class="form-select">
                            <option value="" disabled selected>Choisissez une région</option>
                            <option value="auvergne">Auvergne-Rhône-Alpes</option>
                            <option value="bourgogne">Bourgogne-Franche-Comté</option>
                            <option value="bretagne">Bretagne</option>
                            <option value="centre_val_de_loire">Centre-Val de Loire</option>
                            <option value="corse">Corse</option>
                            <option value="grand_est">Grand-Est</option>
                            <option value="hdf">Hauts-de-France</option>
                            <option value="idf">Île-de-France</option>
                            <option value="normandie">Normandie</option>
                            <option value="nouvelle_aquitaine">Nouvelle-Aquitaine</option>
                            <option value="occitanie">Occitanie</option>
                            <option value="pays_de_la_loire">Pays de la Loire</option>
                            <option value="provence">Provence-Alpes-Côte d'Azur</option>
                            <option value="guadeloupe">Guadeloupe</option>
                            <option value="guyane">Guyane</option>
                            <option value="martinique">Martinique</option>
                            <option value="mayotte">Mayotte</option>
                            <option value="reunion">La Réunion</option>
                            <option value="etranger">Je vis à l'étranger</option>
                        </select>
                    </div>
                </div>
                <!--Lieu de vie-->
                <div class="question">
                    <label for="situation-logement-select">Quelle est votre situation de logement ?</label>
                    <div class="input-group">
                        <select id="situation-logement-select" name="situation_logement" required class="form-select">
                            <option value="" disabled selected>Choisissez une situation</option>
                            <option value="famille_perm">Dans la famille en permanence</option>
                            <option value="famille_solution">Dans la famille avec une solution d'accueil ou des activités en journée</option>
                            <option value="famille_etablissement">Dans la famille principalement mais avec un accueil temporaire ou séquentiel en établissement</option>
                            <option value="independant">Dans un logement indépendant</option>
                            <option value="habitat_inclusif">Dans un habitat inclusif</option>
                            <option value="foyer_acceuil">Dans un foyer d'accueil médicalisé (FAM)</option>
                            <option value="mas">Dans une maison d'accueil spécialisé (MAS)</option>
                            <option value="foyer_vie_hebergement">Dans un foyer de vie ou foyer d'hébergement</option>
                            <option value="IME">En IME avec internat</option>
                            <option value="psychiatrie">Hospitalisation en psychiatrie</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                </div>




                <div class="question">
                    <label>Avez vous une reconnaissance CDAPH ?</label>
                    <div class="options">
                        <label><input type="radio" name="cdaph" value="social" required>oui</label>
                        <label><input type="radio" name="cdaph" value="friend">non</label>
                        <label><input type="radio" name="cdaph" value="search">pas d’orientation CDAPH</label>
                    </div>
                </div>


                <div class="question">
                    <label>Avez-vous choisi votre logement ?</label>
                    <div class="options">
                        <label><input type="radio" name="choix_logement" value="oui" required>oui</label>
                        <label><input type="radio" name="choix_logement" value="non">non</label>
                    </div>
                </div>

                <!--Activité pro-->
                <div class="question">
                    <label for="activite-pro-select">Activité professionnelles et insertions sociale :</label>
                    <div class="input-group">
                        <select id="activite-pro-select" name="activite_pro" required class="form-select">
                            <option value="" disabled selected>Choisissez une activité</option>
                            <option value="scolarite_ordinaire">Scolarité en milieu ordinaire</option>
                            <option value="dispositif_specialise">Scolarité en dispositif spécialisé de l'Éducation Nationale</option>
                            <option value="instruction_famille">Instruction en Famille</option>
                            <option value="etablissement_midico_social">Scolarité dans un établissement médico-social (IME, IMPRO ... )</option>
                            <option value="formation_pro">Formation professionnelle</option>
                            <option value="etudes_sup">Études supérieures</option>
                            <option value="activite_pro_ordinaire">Activité professionnelle en milieu ordinaire</option>
                            <option value="activite_pro_adapte">Activité professionnelle en milieu protégé (ESAT, Entreprise adaptée)</option>
                            <option value="aucune_activite">Sans aucune activité scolaire ou professionnelle</option>
                            <option value="autre_activite">Autre</option>
                        </select>
                    </div>
                </div>

                <!--Besoin de soutien-->

                <div class="question">
                    <label for="besoins-soutien-select">Besoins de soutien : De quel type d’interventions avez-vous besoin ?</label>
                    <div class="input-group">
                        <select id="besoins-soutien-select" name="besoins_soutien" required class="form-select">
                            <option value="" disabled selected>Choisissez un besoin</option>
                            <option value="aide_24h">Une aide pour tous les actes de la vie quotidienne et la présence d’une tierce personne 24h/24</option>
                            <option value="autonome">Je suis totalement autonome</option>
                            <option value="soutien_autonomie">Un soutien à l’autonomie pour le logement, l'accès à la santé, aux loisirs, et les démarches administratives</option>
                            <option value="interventions_ponctuelles">Des interventions et stimulations ponctuelles mais quotidiennes (toilette, sortie, repas, communication)</option>
                        </select>
                    </div>
                </div>

                <div class="question">
                    <label for="qualite-vie-checkbox">Qualité de vie : Comment définiriez-vous votre qualité de vie ?</label>
                    <div class="input-group">
                        <div id="qualite-vie-checkbox">
                            <label><input type="checkbox" name="qualite_vie" value="tout_va_bien"> Tout va bien</label><br>
                            <label><input type="checkbox" name="qualite_vie" value="restriction_sociale"> Restriction de la vie sociale</label><br>
                            <label><input type="checkbox" name="qualite_vie" value="souffrance_psychologique"> Souffrance psychologique</label><br>
                            <label><input type="checkbox" name="qualite_vie" value="fatigue"> Fatigue, épuisement</label><br>
                            <label><input type="checkbox" name="qualite_vie" value="reduction_activite"> Réduction d'activité professionnelle</label><br>
                            <label><input type="checkbox" name="qualite_vie" value="couts_financiers"> Coûts financiers importants</label><br>
                            <label><input type="checkbox" name="qualite_vie" value="impact_fratrie"> Impact négatif sur la fratrie</label><br>
                            <label><input type="checkbox" name="qualite_vie" value="conflits_familiaux"> Conflits familiaux</label><br>
                            <label><input type="checkbox" name="qualite_vie" value="maladie_difficulte"> Maladie, ou difficulté pour la personne concernée</label><br>
                            <label><input type="checkbox" name="qualite_vie" value="eloignement_malade"> Éloignement de la personne malade</label>
                        </div>
                    </div>
                </div>

            <div class="success-message" id="questionnaire-success"></div>
    </div>
        <button onclick="handleQuestionnaire(event)" type="submit">Soumettre</button>

    </form>
</main>

<?php
require_once("./footer.php");
?>
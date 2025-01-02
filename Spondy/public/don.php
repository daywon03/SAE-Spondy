<?php
$title = "L'AFS - Association France Spondyloarthrites";
$style = "./styles/style_don.css";
$script = "./scripts/script.js";
require_once("./header.php");
?>


<div class="container">
<div class="content">

  <div class="left-side">
    <h2>Soutenez nous!</h2>
    <div class="illustration">
      <img alt="illustration don" src="./images/illustration_don.jpg" width="400" height="300" style="width: 100%; height: auto;">
    </div>

    <p>Votre soutien est essentiel pour améliorer<br> la vie de milliers de personnes touchées par la spondyloarthrite en France.</p>

  </div>

  <div class="form-container">
    <h1>Faites un don</h1>
    <form id="donationForm" onsubmit="handleSubmit(event)">
      <div class="form-grid">
        <div>
          <label>Prénom *</label>
          <input type="text" required>
        </div>
        <div>
          <label>Nom *</label>
          <input type="text">
        </div>

        <div class="form-full">
          <label>Adresse email *</label>
          <input type="email" required>
        </div>


        <div>
          <label>Numéro de télephone</label>
          <div class="phone-group">
            <input type="tel" placeholder="+33">
          </div>
        </div>

        <div class="form-full">
          <label>Somme *</label>
          <select required>
            <option value="50">50€</option>
            <option value="100">100€</option>
            <option value="200">200€</option>
            <option value="custom">Montant personalisé</option>
          </select>
        </div>

        <div class="form-full">
          <label>Moyen de paiement *</label>
          <select required>
            <option value="">Selectionnez un mode de paiement</option>
            <option value="card">Carte Bleu</option>
            <option value="paypal">PayPal</option>

          </select>
        </div>


        <div class="form-full">
          <button type="submit" class="donate-button">Faire un don</button>
        </div>
      </div>
    </form>
  </div>
</div>

</div>


<script src="./script.js"></script>

<?php
require_once("./footer.php");
?>
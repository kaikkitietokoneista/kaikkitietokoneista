<!DOCTYPE html>
<html lang="fi" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Etusivu &laquo; kaikkitietokoneista.net</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <meta name="description" content="Web-hotelleja ja DNS-palveluita">
    <meta name="keywords" content="Web-hotelli, Kaikkitietokoneista, Kaikki tietokoneista, DNS-palvelu">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div class="w3-container w3-padding-24">
      <form method="post" action="/domain.php">
        <div class="w3-row centered">
          <input type="text" name="domain" class="w3-col" style="width:80%; padding: 6px;" placeholder="domain">
          <span>.fi</span>
          <input type="submit" class="w3-rest w3-button w3-theme-l1" value="Hae">
        </div>
      </form>
    </div>
    <!-- Ominaisuudet -->
    <div class="w3-container w3-padding-24">
      <div class="w3-row">
        <div class="w3-half">
          <center><i class='fas fa-server' style='font-size:100px'></i></center>
        </div>
        <div class="w3-half">
          <h3>SSD-levyt</h3>
          <p>Käytämme palvelimillamme SSD-levyjä tarjotaksemme parhaan nopeuden. </p>
        </div>
      </div>
    </div>

    <div class="w3-container w3-padding-24 w3-theme-l1">
      <div class="w3-row">
        <div class="w3-half">
          <h3>Valtuutettu verkottunnusvälittäjä</h3>
          <p>Olemme Viestintäviraston valtuuttama verkkotunnusvälittäjä. </p>
        </div>
        <div class="w3-half">
          <center><img style="width: 120px; height: 120px;" alt="Valtuutettu verkkotunnusvälittäjä kuva" src="valittajatunnus_FI_RGB.png"></center>
        </div>
      </div>
    </div>

    <div class="w3-container w3-padding-24">
      <div class="w3-row">
        <div class="w3-half">
          <center><i class='fab fa-wordpress' style='font-size:100px'></i></center>
        </div>
        <div class="w3-half">
          <h3>Wordpressin helppo asennus</h3>
          <p>Maksulliset pakettimme sisältävät Wordpressin yhden klikkauksen asennusohjelman. </p>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>
  </body>
</html>

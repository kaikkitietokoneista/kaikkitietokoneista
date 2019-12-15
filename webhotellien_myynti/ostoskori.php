<?php

$tuote = htmlspecialchars($_GET["tuote"]);

if ($tuote == "") {
    echo "<script>window.location.pathname = 'hinnasto.php';</script>";
} else {
?>
<!DOCTYPE html>
<html lang="fi" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ostoskori &laquo; kaikkitietokoneista.net</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <meta name="description" content="Web-hotelleja ja DNS-palveluita">
    <meta name="keywords" content="Web-hotelli, Kaikkitietokoneista, Kaikki tietokoneista, DNS-palvelu">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div class="w3-sidebar w3-bar-block" style="width:25%">
      <h3>Osta</h3>
      <div class="w3-dropdown-hover">
        <button class="w3-button">Webhotellit <i class='fas fa-caret-down'></i></button>
        <div class="w3-dropdown-content w3-bar-block w3-border">
          <a href="ostoskori.php?tuote=webhotelli%20ilmainen" class="w3-bar-item w3-button">Webhotelli ilmainen</a>
          <a href="ostoskori.php?tuote=webhotelli%20pieni" class="w3-bar-item w3-button">Webhotelli pieni</a>
          <a href="ostoskori.php?tuote=webhotelli%20suuri" class="w3-bar-item w3-button">Webhotelli suuri</a>
        </div>
      </div>
      <a href="?tuote=DNS-palvelu" class="w3-bar-item w3-button">DNS-palvelu</a>
      <a href="?tuote=domain" class="w3-bar-item w3-button">Domain</a>
      <hr>
      <a href="?tuote=" class="w3-bar-item w3-button">Takaisin hinnastoon</a>
    </div>

    <div style="margin-left:25%">
      <div class="w3-container w3-padding-24">
        <div class="w3-row">
          <div class="w3-container w3-half">
            <strong>Tuote valittu (<?php echo $tuote; ?>)</strong>
          </div>
          <div class="w3-container w3-half">
            <strong>Vaaditut tiedot annettu</strong>
          </div>
        </div>
        <hr>
        <div class="w3-light-grey w3-round">
          <div class="w3-container w3-round w3-blue" style="width:50%">50%</div>
        </div>
      </div>
      <?php include 'footer.php'; ?>
    </div>
  </body>
</html>
<?php
}
?>

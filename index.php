<!DOCTYPE html>
<html lang="fi" dir="ltr">
  <head>
    <!-- TO DO
    Käytä preload-tagia enemmän nopeuttamaan latausaikoja
   -->
    <!--
    Värimaailma:
    Celestial blue: #3E92CC
    Lapis Lazuli: #2A628F
    Yankees Blue: #13293D
    Space Cadet: #16324F
    Japanese Indigo: #18435A
    https://coolors.co/3e92cc-2a628f-13293d-16324f-18435a
    -->
    <meta charset="utf-8">
    <title>Etusivu &laquo; kaikkitietokoneista.net</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <meta name="description" content="Web-hotelleja ja DNS-palveluita">
    <meta name="keywords" content="Web-hotelli, Kaikkitietokoneista, Kaikki tietokoneista, DNS-palvelu">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div class="domain">
      <br>
      <center><form method="post" action="/domain.php"><input type="text" name="domain" placeholder="domain"><span class="fi">.fi</span><input type="submit" class="nappi" value="Hae"></form></center>
    </div>
<!--    <center>
      <div class="p16">
        <div class="kortti">
          <h2>Kaistanleveys 100 Mbps</h2>
        </div>
      </div>
      <div class="p16">
        <div class="kortti">
          <h2>Anti-DDoS</h2>
        </div>
      </div>
      <div class="p16">
        <div class="kortti">
          <h2>SSD-levyt</h2>
        </div>
      </div>
    </center>-->

    <?php include 'footer.php'; ?>
  </body>
</html>

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
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div class="w3-container w3-padding-24">
      <form method="post" action="/domain.php">
        <div class="w3-row ">
          <input type="text" name="domain" class="w3-col" style="width:80%; padding: 6px;" placeholder="domain">
          <input type="submit" class="w3-rest w3-button w3-theme-l1" value="Hae">
        </div>
      </form>
    </div>
    <?php
      $komento = escapeshellcmd("whois " . $_POST["domain"] . ".fi");
      $vastaus = shell_exec($komento);
      //Debuggausta varten echo $vastaus;
      if (strstr($vastaus, "Domain not found")) {
        if ($_POST["domain"] != "") {
        ?>
        <p>Domain on saatavilla</p>
        <p>Varaa domain <?php echo htmlspecialchars($_POST["domain"]) . ".fi";?> hintaan 15 €<small>/vuosi</small> <a href="<?php echo "/ostoskori.php?tuote=domain&domain=" . $_POST['domain']; ?>">tästä</a>.</p>
        <?php
        } else {
            echo "Kirjoita domain ilman www-etuliitettä ylläolevaan hakukenttään.";
        }
      } else {
        ?>
        <p>Domain ei ole saatavilla</p>
        <?php
      }
    ?>
    <?php include 'footer.php'; ?>
  </body>
</html>

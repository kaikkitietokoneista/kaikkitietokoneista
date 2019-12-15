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
    <?php
    if ($_GET["hanki"] == "domain") {
      ?>
        <p>Olet hankkimassa Domainia <?php echo htmlspecialchars($_GET["domain"]); ?>.fi</p>
        <form method="post" action="osto.php?domain=true">
          <table>
            <tr>
              <td><b>Domain:</b></td>
              <td><input type="text" name="hankittavadomain" value="<?php echo $_GET["domain"]; ?>.fi" disabled required></td>
            </tr>
            <tr>
              <td><b>Etunimi:</b></td>
              <td><input type="text" name="etunimi" placeholder="Etunimi" required></td>
            </tr>
            <tr>
              <td><b>Sukunimi:</b></td>
              <td><input type="text" name="sukuminimi" placeholder="Sukunimi" required></td>
            </tr>
            <tr>
              <td><b>Sähköposti:</b></td>
              <td><input type="text" name="sahkoposti" placeholder="etunimi.sukunimi@example.com" required></td>
            </tr>
            <tr>
              <td><b>Henkilötunnus:</b></td>
              <td><input type="text" name="hlotunnus" placeholder="" required></td>
            </tr>
            <tr>
              <td><b>Olen lukenut ja hyväksynyt käyttöehdot:</b></td>
              <td><input type="checkbox" name="kayttoehdot" required></td>
            </tr>
          </table>
          <p>Hinta 15 €<small>/vuosi</small></p>
          <p><i>Ostosi käsitellään 24 tunnin kuluessa</i>
          <input type="submit" class="nappi" value="Osta"></p>
        </form>
      <?php
    } else {
     ?>
    <form method="post" action="osta.php?hanki=webhotelli">
      <input type="text" name="nimi" placeholder="nimi"><br>
      <input type="password" name="salasana" placeholder="salasana"><br>
      <select>
        <option value="Pieni">Webhotelli pieni</option>
        <option value="Keski">Webhotelli keskikokoinen</option>
        <option value="Suuri">Webhotelli suuri</option>
      </select>
      <input type="submit" value="Lähetä">
    </form>
    <form method="post" action="?hanki=domain">
      <input type="text" name="nimi" placeholder="nimi"><br>
      <input type="password" name="salasana" placeholder="salasana"><br>
      <select>
        <option value="Pieni">Webhotelli pieni</option>
        <option value="Keski">Webhotelli keskikokoinen</option>
        <option value="Suuri">Webhotelli suuri</option>
      </select>
      <input type="submit" value="Lähetä">
    </form>
    <?php
  }
    include 'footer.php';

    ?>
  </body>
</html>

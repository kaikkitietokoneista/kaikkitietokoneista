<!DOCTYPE html>
<html lang="fi" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hinnasto &laquo; kaikkitietokoneista.net</title>
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
    <div class="w3-container">
      <h2>Tuotteet</h2>
      <div class="w3-row">
        <a href="javascript:void(0)" onclick="openosio(event, 'webhotelli');">
          <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Webhotellit</div>
        </a>
        <a href="javascript:void(0)" onclick="openosio(event, 'DNS');">
          <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">DNS-palvelut</div>
        </a>
        <a href="javascript:void(0)" onclick="openosio(event, 'Domain');">
          <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Domain</div>
        </a>
      </div>

      <div id="webhotelli" class="w3-container osio">
        <h2>Webhotellit</h2>
        <div class="w3-row">
          <div class="w3-card w3-container w3-third">
            <ul class="w3-ul">
              <li><h3 class="w3-text-green">Ilmainen 0€<small>/kk</small></h3></li>
              <li>Web-tallennustila: 10 MB</li>
              <li>Kaistanleveys/kk: 10 000 MB eli 10 GB</li>
              <li>PHP: PHP-FPM</li>
              <li>SSL ja Let's Encrypt: kyllä</li>
              <li>Domaineja: 1</li>
              <li>Aliasdomaineja: 1</li>
              <li>Alidomaineja: 1</li>
              <li>FTP-käyttäjiä: 2</li>
              <li>Shell-käyttäjiä: 1</li>
              <li>Varmuuskopionti: kyllä</li>
              <li><a href="ostoskori.php?tuote=webhotelli%20ilmainen" class="w3-button w3-theme-d5">Osta</a></li>
            </ul>
          </div>
          <div class="w3-card w3-container w3-third">
            <ul class="w3-ul">
              <li><h3 class="w3-text-blue">Pieni 2€<small>/kk</small></h3></li>
              <li>Web-tallennustila: 100 MB</li>
              <li>Kaistanleveys/kk: 100 000 MB eli 100 GB</li>
              <li>PHP: PHP-FPM</li>
              <li>SSL ja Let's Encrypt: kyllä</li>
              <li>Domaineja: 5</li>
              <li>Aliasdomaineja: 5</li>
              <li>Alidomaineja: 5</li>
              <li>FTP-käyttäjiä: 10</li>
              <li>Shell-käyttäjiä: 5</li>
              <li>Varmuuskopionti: kyllä</li>
              <li><a href="ostoskori.php?tuote=webhotelli%20pieni" class="w3-button w3-theme-d5">Osta</a></li>
            </ul>
          </div>
          <div class="w3-card w3-container w3-third">
            <ul class="w3-ul">
              <li><h3 class="w3-text-blue">Suuri 4€<small>/kk</small></h3></li>
              <li>Web-tallennustila: 1000 MB eli 1 GB</li>
              <li>Kaistanleveys/kk: rajaton</li>
              <li>PHP: PHP-FPM</li>
              <li>SSL ja Let's Encrypt: kyllä</li>
              <li>Domaineja: 20</li>
              <li>Aliasdomaineja: 20</li>
              <li>Alidomaineja: 20</li>
              <li>FTP-käyttäjiä: 40</li>
              <li>Shell-käyttäjiä: 10</li>
              <li>Varmuuskopionti: kyllä</li>
              <li><a href="ostoskori.php?tuote=webhotelli%20suuri" class="w3-button w3-theme-d5">Osta</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div id="DNS" class="w3-container osio" style="display:none">
        <h2>DNS-palvelut</h2>
      </div>

      <div id="Domain" class="w3-container osio" style="display:none">
        <h2>Domain</h2>
        <p>Meiltä voit varata verkkotunnuksen fi-päättellä hintaan 15 euroa per vuosi.</p>
        <h3>Hae domainia</h3>
        <div class="w3-container w3-padding-24">
          <form method="post" action="/domain.php">
            <div class="w3-row ">
              <input type="text" name="domain" class="w3-col" style="width:80%; padding: 6px;" placeholder="domain.fi">
              <input type="submit" class="w3-rest w3-button w3-theme-l1" value="Hae">
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
    function openosio(evt, osioName) {
      var i, x, tablinks;
      x = document.getElementsByClassName("osio");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
      }
      document.getElementById(osioName).style.display = "block";
      evt.currentTarget.firstElementChild.className += " w3-border-red";
    }
    </script>
    <!-- Tuotteet -->
    <br>
    <?php include 'footer.php'; ?>
  </body>
</html>

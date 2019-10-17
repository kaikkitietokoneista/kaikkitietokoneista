<!DOCTYPE html>
<html lang="fi" dir="ltr">
  <head>
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
    <link rel="stylesheet" href="src/prism.css" data-noprefix>
  </head>
  <body>
    <header style="padding: 16px; background-image: url('https://cdn.pixabay.com/photo/2017/05/29/18/22/matrix-2354492_960_720.jpg'); /*linear-gradient(#939de6, white)*/">
  		<h1 style="color: white;">Kaikkitietokoneista.<wbr>net</h1>
  		<a href="/" class="nappi">Etusivu</a>
  		<a href="lahiverkko" class="nappi">Lähiverkon rakentaminen</a>
      <div class="alasveto">
  		    <a href="ohjelmat" class="nappi">Ohjelmat</a>
          <div class="alasvetolaatikko">
            <a href="ohjelmat" class="nappi">Ohjelmat</a>
            <a href="http://kaikkitietokoneista.net/8080" class="nappi">Työkalut</a>
            <a href="botit" class="nappi">Botit</a>
          </div>
      </div>
  		<div class="oikea">
        <script>
          var d = new Date();
          var months = ["Tammikuu", "Helmikuu", "Maaliskuu", "Huhtikuu", "Toukokuu", "Kesäkuu", "Heinäkuu", "Elokuu", "Syyskuu", "Lokakuu", "Marraskuu", "Joulukuu"]
          document.write(months[d.getMonth()], " ", d.getDate(), " ", d.getHours(), ":", d.getMinutes());
        </script>
      </div>
  	</header>
    <div style="width: 25%; float: right;"><a class="twitter-timeline" href="https://twitter.com/RoyTakanen?ref_src=twsrc%5Etfw">RoyTakasen Tweetit</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
    <div id="tutoriaalit"></div>
    <?php
    if ($_GET["p"] != "") {
      $arrayhakemisto = scandir(getcwd() . "/artikkelit", SCANDIR_SORT_DESCENDING);
      foreach($arrayhakemisto as $file) {
        $tiedostonnimi = str_replace(".tiny", "",$file);
        $path2file = getcwd() . "/artikkelit/" . $file;
        $tiedosto = fopen($path2file, "r");
        $content = fread($tiedosto, filesize($path2file));
        if ($_GET["p"] === $tiedostonnimi) {
          echo $content;
        }
      }
    } else {
    ?>
    <script>
    $.get("kaikki-artikkelit.php", {},
      function(data){
        $("#tutoriaalit").html(data);
    });
    </script>
    <?php } ?>
    <footer style="background-color: #16324F; color: white;" class="p16">
      <center><p>Hakkereille, ohjelmoijille, tietokonenörteille ja valkohatuille suunnattu sivusto.</p></center>
      <p class="p16"><b>Muista:</b> näitä ohjeita ei ole tarkoitettu pahaan, jotenka jos pystyisit esimerkiksi murtamaan koulusi sisäverkon näillä ohjeilla. Niin sinun tulee ilmoittaa siitä ATK-henkilöstölle eikä kerätä koevastauksia avoimien printtereiden kautta.</p>
    </footer>
    <script src="src/prism.js"></script>
  </body>
</html>

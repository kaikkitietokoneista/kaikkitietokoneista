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
    <?php include 'header.php'; ?>
    <div class="neljäsosa oikealle">
      <iframe src="twitterembed.html" frameBorder="0" width="100%" height="500px"></iframe>
    </div>
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
    <?php include 'footer.php'; ?>
  </body>
</html>

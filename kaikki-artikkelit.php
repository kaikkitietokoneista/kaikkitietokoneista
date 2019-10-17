<html>
  <head>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="src/prism.css">
  </head>
  <body>
    <div class="kolmeneljäsosaa" style="display: inline-block;">
    <?php
      $arrayhakemisto = scandir(getcwd() . "/artikkelit", SCANDIR_SORT_DESCENDING);
      foreach($arrayhakemisto as $file) {
        /*Poistaa . ja .. näkyvistä*/
        if ($file != ".") {
          if ($file != "..") {
            /* Poistaa src-hakemiston*/
            if ($file != "src") {
              $path2file = getcwd() . "/artikkelit/" . $file;
              //$tags = get_meta_tags($path2file);
              $tiedostonnimi = str_replace(".tiny", "",$file);
              //echo "<div class='p16'>" .$tags["description"] . "</div>"; Toimii paremmin hakukoneessa. Harkitse myös sellaisen tekemistä

              //Lukee tiedostosta sisällön
              $tiedosto = fopen($path2file, "r");
              $content = fread($tiedosto, filesize($path2file));
              echo $content;
            }
          }
        }
      }
    ?>
    <script src="src/prism.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="fi" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kaikkitietokoneista - suomenkielisten tietokoneartikkeleiden kokoelma</title>
    <link rel="stylesheet" href="/static/css/master.css">
  </head>
  <body>
    <header>
      <h1>Kaikkitietokoneista</h1>
      <h3>suomenkielisten tietokoneartikkeleiden kokoelma</h3>
    </header>

    <div class="rivi">
      <article class="puolikas">
        <h4>Yhteydenotto</h4>
        Huomasitko kirjoitusvirheen tai haluaisitko artikkelin, jostakin tietystä asiasta? Suosittelemme lähettämään sähköpostia osoitteeseen <a href="mailto:info@kaikkitietokoneista.net">info@kaikkitietokoneista.net</a>.
      </article>
      <nav class="puolikas">
        <!--<form class="" action="hae" method="get">
          <input type="text" name="hakutermi" placeholder="Hakusana...">
          <input type="submit" name="" value="Hae">
        </form>-->
        <b>Yleiset linkit: </b> <a href="/">Etusivu</a> <a href="/yhteydenotto">Ota yhtettä</a>
        <hr>
        <b>Artikkelien linkit: </b> <?php
        $artikkelit = scandir('articles', SCANDIR_SORT_DESCENDING);

        foreach ($artikkelit as $key => $file) {
          if ($file != "." && $file != "..") {
            echo str_replace(".md","","<li><a href='/?p=" . $file . "'>" . $file . "</a></li>");
            /*if ($key < count($artikkelit) - 3) {
              echo " | ";
            }*/
          }
        }


         ?>
      </nav>
    </div>

    <!--<footer>
      <center>
        <p>Ota yhteyttä <a class="sahkoposti" href="mailto:info@Kaikkitietokoneista.net">info@kaikkitietokoneista.net</a></p>
      </center>
    </footer>-->
  </body>
</html>

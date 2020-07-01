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
        <form class="isohae" action="hae" method="get">
          <input type="text" name="hakutermi" value="<?php echo htmlspecialchars($_GET["hakutermi"]); ?>">
          <input type="submit" name="" value="Hae">
        </form>
        <b>Avainsanat:</b> <kbd>macOS</kbd>
      </article>
      <nav class="puolikas">
        <form class="" action="hae" method="get">
          <input type="text" name="hakutermi" placeholder="Hakusana...">
          <input type="submit" name="" value="Hae">
        </form>
        <b>Yleiset linkit: </b> <a href="/">Etusivu</a> <a href="/yhteydenotto">Ota yhtettä</a>
        <hr>
        <b>Artikkelien linkit: </b><a href="/wget">Wgetin käyttö</a>
      </nav>
    </div>

    <!--<footer>
      <center>
        <p>Ota yhteyttä <a class="sahkoposti" href="mailto:info@Kaikkitietokoneista.net">info@kaikkitietokoneista.net</a></p>
      </center>
    </footer>-->
  </body>
</html>

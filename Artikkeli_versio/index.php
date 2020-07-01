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
        <?php
          require_once 'parsedown/Parsedown.php';

          $Parsedown = new Parsedown();

          function shorter($text, $chars_limit) {
            // Check if length is larger than the character limit
            if (strlen($text) > $chars_limit) {
              // If so, cut the string at the character limit
              $new_text = substr($text, 0, $chars_limit);
              // Trim off white space
              $new_text = trim($new_text);
              // Add at end of text ...
              return $new_text . "...";
            }
            // If not just return the text as is
            else {
              return $text;
            }
          }

          if ($_GET["p"] != "") {
            $suojattu = basename($_GET["p"]);

            $tiedosto = fopen("articles/" . $suojattu . ".md", "r") or die("Unable to open file!");
            echo $Parsedown->text(fread($tiedosto,filesize("articles/" . $suojattu . ".md")));
            fclose($tiedosto);


            ?><!--<b>Avainsanat:</b> <kbd>macOS</kbd>--><?php
          } else {
            $artikkelit = scandir('articles', SCANDIR_SORT_ASCENDING);

            foreach ($artikkelit as $key => $file) {
              if ($file != "." && $file != "..") {
                $tiedosto = fopen("articles/" . $file, "r") or die("Unable to open file!");
                echo str_replace(".md","","<a href='/?p=" .$file . "'>" . $file . "</a>");
                echo shorter($Parsedown->text(fread($tiedosto,filesize("articles/" . $file))), 1000);
                echo "<hr>";
                fclose($tiedosto);
              }
            }
          }

        ?>
      </article>
      <nav class="puolikas">
        <!--<form class="" action="hae" method="get">
          <input type="text" name="hakutermi" placeholder="Hakusana...">
          <input type="submit" name="" value="Hae">
        </form>-->
        <b>Yleiset linkit: </b> <a href="/">Etusivu</a> <a href="/yhteydenotto">Ota yhtettä</a>
        <hr>
        <b>Artikkelien linkit: </b><ul><?php
        $artikkelit = scandir('articles', SCANDIR_SORT_ASCENDING);

        foreach ($artikkelit as $key => $file) {
          if ($file != "." && $file != "..") {
            echo str_replace(".md","","<li><a href='/?p=" . $file . "'>" . $file . "</a></li>");
            /*if ($key < count($artikkelit) - 3) {
              echo " | ";
            }*/
          }
        }

         ?>
       </ul>
      </nav>
    </div>

    <!--<footer>
      <center>
        <p>Ota yhteyttä <a class="sahkoposti" href="mailto:info@Kaikkitietokoneista.net">info@kaikkitietokoneista.net</a></p>
      </center>
    </footer>-->
  </body>
</html>

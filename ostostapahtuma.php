<?php

  if ($_GET["domain"] == true) {
    if ($_POST["kayttoehdot"] != "") {
      $msg = "Tämä on kaikkitietokoneista.net:in domainin hankintajärjestelmä\nAsiakkaan tiedot:\nHankittava domain: " . $_POST["hankittavadomain"] . "\nEtunimi: " . $_POST["etunimi"] . "\nSukunimi: " . $_POST["sukunimi"] . "\nSähköposti: " . $_POST["sahkoposti"] . "\nHenkilötunnus: " . $_POST["hlotunnus"] . "\nOlen lukenut ja hyväksynyt käyttöehdot: " . $_POST["kayttoehdot"];

      mail("roy@kaikkitietokoneista.net","(AUTOM. Kaikkiti) Domainin hankinta",$msg);
    }
  } if ($_GET["webhotelli"] == true) {
    if ($_POST["kayttoehdot"] != "") {
      $msg = "Tämä on kaikkitietokoneista.net:in webhotlelin hankintajärjestelmä\nAsiakkaan tiedot:\nHankittava domain: " . $_POST["domainille"] . "\nEtunimi: " . $_POST["etunimi"] . "\nSukunimi: " . $_POST["sukunimi"] . "\nSähköposti: " . $_POST["sahkoposti"] . "\nHenkilötunnus: " . $_POST["hlotunnus"] . "\nOlen lukenut ja hyväksynyt käyttöehdot: " . $_POST["kayttoehdot"];

      mail("roy@kaikkitietokoneista.net","(AUTOM. Kaikkiti) Webhotellin hankinta",$msg);
      ?>
      <script>
        window.location.href = "http://localhost:9998/ostoskori.php?tuote=webhotelli%20ilmainen&vaihe=2";
      </script>
      <?php
    }
  }
?>

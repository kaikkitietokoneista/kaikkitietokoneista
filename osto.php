<?php

  if ($_GET["domain"] == true) {
    if ($_POST["kayttoehdot"] != "") {
      $msg = "Tämä on kaikkitietokoneista.net:in domainin hankintajärjestelmä\nAsiakkaan tiedot:\nHankittava domain: " . $_POST["hankittavadomain"] . "\nEtunimi: " . $_POST["etunimi"] . "\nSukunimi: " . $_POST["sukunimi"] . "\nSähköposti: " . $_POST["sahkoposti"] . "\nHenkilötunnus: " . $_POST["hlotunnus"] . "\nOlen lukenut ja hyväksynyt käyttöehdot: " . $_POST["kayttoehdot"];

      mail("roy@kaikkitietokoneista.net","(AUTOM. Kaikkiti) Domainin hankinta",$msg);
    }
  }
?>

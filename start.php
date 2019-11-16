<?php

function rss($feedURL) {
    $rss = simplexml_load_file($feedURL);
    echo "<ul class='newsSide'>";
    $i = 0;
    foreach ($rss->channel->item as $feedItem) {
        $i++;
        echo "<li><a target='_blank' href='$feedItem->link' title='$feedItem->title'>" . $feedItem->title . "</a></li>";
        if($i >= 5) break;
    }
    echo "</ul>";
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Start | kaikkitietokoneista</title>
    <style media="screen">
      body {
        background-size: cover;
        background-image: url("src/background.jpg");
        margin: 0;
        height: 100vh;
        font-family: sans-serif;
      }

      li {
        border-top: 1px solid black;
        font-style: bold;
        color: white;
      }

      a {
        text-decoration: none;
        color: white;
      }

      input {
        border: 1px solid #bbb;
        border-radius: 20px;
        padding: 16px;
      }

      /*.button {
        border-radius: 0;
      } */
      img {
        width: 50px;
        transition: 0.4s;
      }

      img:hover {
        width: 70px;
      }

      .totallycenter {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
      }

      .puolet {
        width: 400px;
      }

      .alas {
        bottom: 0;
        position: absolute;
      }

      .laatikko {
        padding: 8px;
        background-color:rgba(0, 0, 0, 0.9);
        border-radius: 5px;
        color: white;
      }

      .pikalinkit {
        top: 50%;
        transform: translate(calc(100vw - 66px), -50%);
        position: absolute;
        font-size: 25px;
      }
    </style>
  </head>
  <body>
    <div class="totallycenter">
      <form action="https://www.google.com/search?safe=active&client=safari&" method="get">
        <input type="text" name="q">
        <input class="button" type="submit" value="Search">
      </form>
    </div>
    <div class="puolet alas laatikko">
      <center><h4>Ilta-sanomat</h4></center>
      <?php echo rss("https://www.is.fi/rss/tuoreimmat.xml"); ?>
    </div>
    <div class="puolet laatikko">
      <a href="https://kaikkitietokoneista.net">Kaikkitietokoneista.net</a>
      <center><h4>Yle-uutiset</h4></center>
      <?php echo rss("https://feeds.yle.fi/uutiset/v1/majorHeadlines/YLE_UUTISET.rss"); ?>
    </div>
    <div class="pikalinkit laatikko">
      <a href="https://wilma.edu.hel.fi"><img src="https://d2tymyeu6o0w3n.cloudfront.net/2.30.13.3/images/favicon.ico" alt="wilma"></a><br>
      <a href="https://www.office.com"><img src="https://blobs.officehome.msocdn.com/images/content/images/favicon_metro-bb8cb440e5.ico" alt="o365"></a><br>
      <a href="http://outlook.office.com"><img src="https://opehuone.edu.hel.fi/wp-content/uploads/Outlook.svg" alt="Outlook"></a><br>
      <a href="https://proxy.kaikkitietokoneista.net"><img src="https://pixabay.com/get/57e9d4464c50a414f6da8c7dda6d49214b6ac3e4565672417c2d7cd790/cyber-security-1915628_1280.png" alt="Proxy"></a>
      <!--wilma<br>
      proxy<br>
      o365-->
    </div>
  </body>
</html>

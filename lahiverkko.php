<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lähiverkon rakentaminen &laquo; kaikkitietokoneista.net</title>
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
  		<a href="/" class="nappi">Pitkät oppaat</a>
      <div class="alasveto">
  		    <a href="ohjelmat" class="nappi">Ohjelmat</a>
          <div class="alasvetolaatikko">
            <a href="ohjelmat" class="nappi">Ohjelmat</a>
            <a href="http://kaikkitietokoneista.net/8080" class="nappi">Työkalut</a>
            <a href="ohjelmat" class="nappi">Botit</a>
          </div>
      </div>
  		<div class="oikea"><script>
        var d = new Date();
        var months = ["Tammikuu", "Helmikuu", "Maaliskuu", "Huhtikuu", "Toukokuu", "Kesäkuu", "Heinäkuu", "Elokuu", "Syyskuu", "Lokakuu", "Marraskuu", "Joulukuu"]
        document.write(months[d.getMonth()], " ", d.getDate(), " ", d.getHours(), ":", d.getMinutes());
      </script>
      </div>
  	</header>
    <div style="width: 25%; float: right;"><a class="twitter-timeline" href="https://twitter.com/RoyTakanen?ref_src=twsrc%5Etfw">RoyTakasen Tweetit</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
    <script>alert("Varoitus! Olet työmaa-alueella. Älä valita epäselvyydestä!!!");</script>
    <div style="padding: 16px;">
      <h3>Tehokkaan ja nopean lähiverkon rakentaminen</h3>
      <p>Jokainen verkko on yksilöllinen ja verkoille ei ole olemassa yleistä sääntöä kuinka ne pitäisi koostaa. Kaikki riippuu myös budjetista, mutta vanhoillakin kytkimillä voit ottaa ylimääräisiä IP-osoitteita käyttöön.</p>
      <h4>Nopeutta halvalla</h4>
      <p>Ei vaadita paljoakaan nopeuttaa omaa Wifiä ja verkkoa. Suosittelen käymään seuraavat vaiheet läpi (nopeimmasta hitaimpaan):</p>
      <ol>
        <li><b>5Ghz wifi taajuus reitittimessä.</b> Uusimissa reitittimissä on hyväksyttävä 5Ghz-taajuus, joka on paljon nopeampi kuin 2,4Ghz-taajuus. 2,4Ghz ei tarjoa wifi-verkon käyttää koko maksetun netin nopeutta hitautensa vuoksi. 2,4 Ghz on kuitenkin pidemmälle ulottuva, koska 5Ghz käyttää suurempaa allonpituutta kuin 2,4GHz. Internet voi kuitenkin hidastua, jos ylläpidät molempia verkkoja samaan aikaan. Onkin suositeltavaa ylläpitää vain yhtä. <i>2,4Ghz on myös mikroaaltouunin taajuus</i>.</li><br>
        <li><b>DNS:än vaihtaminen.</b> DNS: selvittää ip-osoitteen domainille. Eli jos haet https://kaikkitietokoneista.net-sivustoa, koneesi kysyy sen ip-osoitetta DNS:ltä. Hidas DNS = hidas sivujen latautuminen. Ja useimmilla tämä hidastaa nettiä paljolti. DNS on oletuksena palveluntarjoajan, mikä taas ei ole läheskään yhtä nopea kuin suurten yritysten. Cloudflaren ja Googlen DNS:ät ovat yhdessä luotettavin yhdistelmä. <p>Aseta reitittimesi asetuksissa DNS-kohdassa ensimmäiseksi:<div style="color: blue;">1.1.1.1 (Cloudflare)</div>ja toiseksi <div style="color: blue;">8.8.8.8 (Google)</div><br>Kaksi DNS:ää tuovat paremman toimintavakauden toisen kaatuessa.</p></li><br>
        <li><b>Kytkin reitittimen ja ulkoverkon väliin.</b> Asettamalla vanhankin varastosta löytyneen kytkimen ulkoverkon ja reitittimen väliin, saat jaettua kuormaa ja yhdistettyä neljä (4) laitetta ulkoverkkoon eristetyllä IP-osoitteella. Näissä koneissa tulee olla kuitenkin hyvin tehokkaat palomuurit, koska välissä ei enää ole reititintä suojaamassa. Laitoin alapuolelle kuvan esimerkistä. <i>Useimmat internet-palveluntarjoajat jakavat 5 dynaamista ip-osoitetta.</i><br><br><img src="src/Kytkin_ulkoverkon_välissä_esimerkki.png"></li>
      </ol>
    </div>
    <footer style="background-color: #16324F; color: white;" class="p16">
      <center><p>Hakkereille, ohjelmoijille, tietokonenörteille ja valkohatuille suunnattu sivusto.</p></center>
      <p class="p16"><b>Muista:</b> näitä ohjeita ei ole tarkoitettu pahaan, jotenka jos pystyisit esimerkiksi murtamaan koulusi sisäverkon näillä ohjeilla. Niin sinun tulee ilmoittaa siitä ATK-henkilöstölle eikä kerätä koevastauksia avoimien printtereiden kautta.</p>
    </footer>
    <script src="src/prism.js"></script>
  </body>
</html>

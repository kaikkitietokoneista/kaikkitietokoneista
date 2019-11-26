<script>
//Rewrites http to https
if (location.protocol == "http:") {
  console.log('changing protocol to https');
  location.protocol = "https:";
}
</script>
<header style="padding: 16px; background-image: url('src/header.jpg'); /*linear-gradient(#939de6, white)*/">
  <link rel="icon" href="src/con.png">
  <h1 style="color: white;">Kaikkitietokoneista.<wbr>net</h1>
  <a href="/" class="nappi">Etusivu</a>
  <a href="lahiverkko" class="nappi">Lähiverkon rakentaminen</a>
  <div class="alasveto">
      <a href="ohjelmat" class="nappi">Ohjelmat</a>
      <div class="alasvetolaatikko">
        <a href="ohjelmat" class="nappi">Ohjelmat</a>
        <a href="http://srv.kaikkitietokoneista.net:8080" class="nappi">Työkalut</a>
        <a href="botit" class="nappi">Botit</a>
      </div>
  </div>
  <div class="oikealle" style="color: white;">
    <script>
      var d = new Date();
      var months = ["Tammikuu", "Helmikuu", "Maaliskuu", "Huhtikuu", "Toukokuu", "Kesäkuu", "Heinäkuu", "Elokuu", "Syyskuu", "Lokakuu", "Marraskuu", "Joulukuu"]
      document.write(months[d.getMonth()], " ", d.getDate(), " ", d.getHours(), ":", d.getMinutes());
    </script>
  </div>
</header>
			
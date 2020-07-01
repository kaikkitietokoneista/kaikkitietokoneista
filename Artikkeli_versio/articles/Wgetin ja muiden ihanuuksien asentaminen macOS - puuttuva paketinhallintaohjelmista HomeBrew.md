#### Wgetin ja muiden ihanuuksien asentaminen macOS - puuttuva paketinhallintaohjelmisto HomeBrew

Moni varmasti tietää kuinka paljon macOS:n terminaali muistuttaa Linux-terminaalia, mutta silti tuntuu erittäin etäiseltä verrattuna Linux-terminaaliin. Syynähän on tietenkin paketinhallintaohjelmiston puuttuminen, jolla voisi asentaa kaiken olennaisen (wget, htop, neofetch jne.), jota Apple ei ole lisännyt.

Ongelman voi kuitenkin ratkoa yllättävän yksinkertaisesti. Tähän menee vain viisi (5) minuuttia. Ensiksi tulee mennä sivustolle brew.sh. Täältä saa asennuskoodin, joka tulee ajaa terminaalissa:
`/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"`

On normaalia, että pääkäyttäjän salasanaa kysytään tässä kohtaa, koska ollaanhan nyt tekemässä jotakin niinkin kauheaa kuin muokkaamassa macOS:ää vähän siedettävämmäksi.

Asennuksen valmistuttua on mahdollista asentaa kaikki ne lukuisat ohjelmat helposti terminaalin kautta vain kirjoittamalla vain `brew install haluttuohjelma`. Elämä ei sitten helpommaksi voi mennä.

Fonttien, ohjelmien ja muiden suljetun lähdekoodin ohjelmienkin asennus onnistuu nyt suoraan komentoriviltä. Tällöin tulee kirjoittaa `brew cask install firefox` välttyäkseen raahaa ja tiputa asentamiselta.

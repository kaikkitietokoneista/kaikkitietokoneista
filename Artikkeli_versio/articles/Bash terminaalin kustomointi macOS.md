#### Bash terminaalin kustomointi macOS

Jokainen tietää kuinka laimealta terminaali näyttää oletusarvoisena macOS:ssä. Tämän vuoksi siihen olisi hauska antaa sävyä. Tämän saa tehtyä muutamalla kikalla. Ensinnäkin joudut tarkistamaan ihan alkajaisiksi kai sinä olet käyttämässä Bash-komentotulkkia, sillä Apple yrittää ajaa useita ZSH:n käyttäjiksi. Tämä tarkistus tapahtuu komennolla `echo $SHELL`. Se tulostaa nykyisen komentotulkin sijainnin. Jos se on `/bin/bash`, kaikki on hyvin. Mikäli se kuitenkin on jotakin muuta, sen voi vaihtaa nopeasti komennolla `chsh -s /bin/bash`.

Nyt voimme siirtyä osa 2. Piilotamme Applen kehotukset vaihtaa ZSH:n. Nyt alamme muokkaamaan tiedostoa `~/.profile`. Tähän voi käyttää mitä tahansa tekstieditoria. Itse kuitenkin suosin Nanoa (`nano ~/.profile`). Lisäämme allaolevan rivin:

```
export BASH_SILENCE_DEPRECATION_WARNING=1
```

Seuraavaksi lisäämme värit ls-komentoon. Lisäämällä rivin

```
alias ls='ls -G'
```

Nyt `ls`-komento onkin alias komennolle `ls -G`, joka näyttää värit tulosteessaan.

Viimeiseksi lisäämme hienon ulkoasun terminaalille. Tarkoitan sitä, että vanhan tutun user@kone> -tulostuksen sijaan saisimme jotain muuta. Tämän voi tehdä [täällä] (http://ezprompt.net/).

Lisäämme alhalla tulleeseen tekstikenttään tulleen koodin myös `~/.profile`-tiedostoon. Esimerkkiskripti:

```
export PS1="\[\e[33m\]\u\[\e[m\]\[\e[37m\]@\[\e[m\]\[\e[36m\]\h\[\e[m\][\[\e[32m\]\W\[\e[m\]]\\$ "
```

Tiedosto `~/.profile` ajetaan aina komentotulkin käynnistyessä. Eli terminaalin uudelleenkäynnistyksellä tai komennolla `source ~/.profile` näet tekemäsi kustomisaatiot.

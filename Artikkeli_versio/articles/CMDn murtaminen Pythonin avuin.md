#### CMD:n murtaminen Windowsissa Pythonilla

**Tulossa uudempi ohje!!!**

CMD:n murtaminen on hyödyllistä tietää varsinkin, jos ylläpitäjä on estänyt sen käytön.

Ensimmäisenä sinulla tulee olla Python asennettuna. Jos sitä ei ole asennettu, asenna se [täältä](https://www.python.org/downloads/). Seuraavaksi tee tiedosto työpöydälle nimellä cmd.py. Voit avata tiedoston millä tahansa tekstieditorilla. Koodi jonka laitat tiedostoon on alapuolella.

```
    import os

    while True:
      komento = input(">>> ")
      os.system(komento)
```

Rivi yksi ottaa moduulin `os` käyttöön, jolla voi ajaa komentoja. Rivi 3 taas käynnistää silmukan, joka ajaa tabulaattorilla ulostyönnettyä koodia ikuisesti. Rivi neljä määrittää muuttujan `komento` annetuksi syötteeksi. Viimeinen rivi ajaa syötteen komentona ja näyttää ulostulon (output).

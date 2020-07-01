##### Ubuntu wifi:n korjaaminen Macissä

Tämän ohje on nopea HOWTO, jonka avulla Wifin korjaaminen onnistuu helposti.

Jotta saat ajettua nämä komennot joudut ensin jakamaan puhelimestasi Internetin koneellesi ensin. Tämän voi tehdä Wifillä, Bluetoothilla tai johdolla. Komennot ovat seuraavat:
```
    sudo apt-get update;
    sudo apt-get upgrade;
    sudo apt-get remove --purge bcmwl-kernel-source;
    sudo reboot;
    sudo apt-get install firmware-b43-installer;
```

##### Viimeistely

Viimeiseksi otamme laitteiston uusine ajureineen käyttöön. Avaa sovellus "Software & updates" ja valitse välilehdeksi "Additional Drivers".

Sinun tulee hyväksyä laitteen käyttö valitsemalla ympyröity vaihtoehto ja hyväksymällä muutokset vielä oikealla alanurkassa.

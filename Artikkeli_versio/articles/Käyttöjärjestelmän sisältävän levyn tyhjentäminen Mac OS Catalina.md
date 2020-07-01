#### Käyttöjärjestelmän sisältävän levyn tyhjentäminen Mac OS Catalina

Macissa Disku Utilityn Erase -toiminto ei ole aina ratkaisu kaikkeen. Usein voi törmätä ongelmaan, jossa USB-tikulle on asennettu käyttöjärjestelmä, mutta levyn Erase-toiminto, ei vain toimi. Tämän voi korjata muutamalla komennolla.

Ensiksi tulee avata terminaali ja kytkeä USB-tikku tietokoneeseen. Seuraavaksi ajetaan komento `diskutil list`.

/dev/disk2 on ainoa ulkoinen levy ja siten käyttöjärjestelmän sisältävä USB-tikku. Nyt voidaan ajaa komento `diskutil zeroDisk /dev/disk2`.

Levy on onnistuneesti tyhjennetty ja sen voi pyyhkiä nyt Disk Utilityn Erase-toiminnolla.

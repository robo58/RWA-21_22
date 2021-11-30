# RWA-21_22

## Postavljanje git repozitorija
### Naredbe
- `git init` (inicijaliziraj repozitorij)
- `git remote add origin https://github.com/robo58/test_repozitorij.git` (dodaj udaljeni repozitorij imena origin)
- `git add .` (dodaj sve datoteke unutar trenutnog repozitorija na popis za commit)
- `git commit -m "poruka"` (commitaj datoteke sa popisa, odnosno pripremi za slanje sa porukom "poruka")
- `git push origin master` (posalji datoteke na udaljeni server origin, na branch master)
- `git pull origin master` ( povuci promjene sa brancha master)

### Ostale naredbe
- `git checkout -b drugi_branch` ( promjeni branch na drugi_branch)
- `git clone https://github.com/robo58/test_repozitorij.git` (kloniraj repozitorij lokalno)
- `git status` (provjeri trenutni status unutar repozitorija)

## Spajanje na server
### SSH
- `ssh username@host` (rwa012022@studenti.sum.ba)
- Pristupni podaci za sveucilisni server.

Username: `rwaXX2022` s tim da je XX broj vase grupe (brojevi od 1-9 pisu 01,02,...,09)

Password: `csdigital2022`

Isti podaci su za bazu,, ona se nalazi na `studenti.sum.ba/phpmyadmin`

lista studenata(grupu mozete ovdje vidjeti): `https://docs.google.com/spreadsheets/d/1xpEvObWsnbPBizpdvcA6D4fkWpORCronLWr3nLAqqnc/edit#gid=0`

url: `http://studenti.sum.ba/projekti/rwa/2022/gX` (s tim da je X broj grupe)

### Putty
- Download link: https://www.putty.org/
- Ukucati u host studenti.sum.ba
- Ukucati username pa lozinku

### Naredbe za server
- `ls` (ispis svih datoteka i mapa u trenutnoj mapi)
- `pwd` (ispis pune lokacije trenutne mape)
- `cd ime_direktorija` ( promjena trenutne mape)
- `cd ..` (idi u prethodnu mapu)
- `cd` (bez argumenata, vraca nas u nasu home mapu)
- `cp datoteka_za_kopiranje mjesto_za_zalijepit` (naredba za kopiranje)
- `mv datoteka novo_mjesto_datoteke` (naredba za premjestanje)
- `ln -s datoteka_koju_linkamo ime_linka`
- `rm ime_datoteke` (brisanje datoteke)

### Kreiranje public simboličkog linka
- Nakon spajanja na server kucamo `git clone ime_repozitorija`
- Zatim brisemo stari public pomocu `rm -rf public` ( -rf su flagovi r i f, r oznacava rekurzivno brisanje, obavezno kad brisemo mape, a f oznacava force brisanje odnosno)
- Zatim pravimo simbolicki link na nas repozitorij pomocu `ln -s ime_repozitorija public`
- Ako ste vec koristili neki framework i imate public mapu u vasem repozitoriju, ili build mapu(dist), linkate na tu mapu npr. `ln -s ime_repozitorija/public public`

## Korisni linkovi
- https://www.w3schools.com/
- https://laracasts.com/
- https://madewithvuejs.com/vuecasts
- https://www.atlassian.com/git
- https://www.hostinger.com/tutorials/ssh-tutorial-how-does-ssh-work

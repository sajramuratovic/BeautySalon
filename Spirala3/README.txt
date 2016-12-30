Sajra Muratovic
16915
Spirala 3



Zadatak 1.
Koristeci PHP napravljena je serijalizacija podataka u XML fajlove.
Napravljena je serijalizacija o nekim clancima koji se dodaju na stranicu,
kao i serijalizacija o registrovanim korisnicima. 
Registrovani korisnici nemaju nikakve privilegije, samo je napravljeno da se prilikom
registracije, njihovi podaci spremaju u XML/registrovaniKorisnici, dok se clanci
spremaju u XML/articles.xml
Sve manipulacije sa podacima, kao sto su unos, izmjena, prikazivanje i brisanje, su uradjene 
samo sa podacima u articles.xml
Ovi clanci se dodaju na podstranici AboutUs.
Logovanje je omoguceno samo adminu, sa podacima username: admin
email: admin@gmail.com
password: 12345678

Prilikom logovanja admina, otvara se Admin Panel, gdje je moguce dodavati clanke, brisati ih, uredjivati ih, 
vidjeti izvjestaje o clancima u pdfu, i csvu, kao i pretrazivati clanke
Svi podaci koji se unose u XML fajlove su validirani u phpu. Manipulisati podacima moze samo admin.
Dodavanje podataka se vrsi na podstranici Add news, gdje se uspjesno dodaju clanci.
Brisanje clanaka se vrsi ukucavanjem naslova clanka koji zelimo izbrisati.
Mijenjanje clanka takodjer se vrsi ukucavanjem naslova.

Bugovi u zadatku 1: Malipulacija se radi sa podacima iz articles.xml
Prvobitno je napravljeno da se svi clanci brisu i edituju preko naslova, tj.zaboravila sam svakom clanku dodijeliti id
cime bih olaksala manipulaciju podacima. 
Ovako se javlja bug, jer mogu unijeti vise clanaka sa istim naslovom, i onda prilikom mijenjanja i brisanja
ako unesem clanak koji ima isti naslov, oba se brisu/mijenjaju. Ovaj problem, nazalost
zbog nedostatka u vremenu, nisam stigla rijesiti, ali ce u nastavku biti implementirano
koristenjem id-ova;

Zadatak 2.
Omoguceno je adminu download podataka o clancima u csvu.
Nema bugova;

Zadatak 3.
Opcija generisanja izvjestaja o clancima u obliku pdf fajla je takodjer implementirana;
Nema bugova;

Ove opcije se nalaze na podstranici Reports;

Zadatak 4.
Napravljena je opcija pretrage clanaka sa prjedlozima. Pretraga se vrsi za min 2 polja istovremeno tj.vrsi se po naslovima
i po autorima clanaka;
Pritiskom na dugmem ispisuju se rezultati koji zadovoljavaju uslov;
Nema bugova;


NAPOMENA: Zadatak 1: Editovanje, dodavanje, i brisanje radi odlicno ako ne unosimo identicne naslove (bug koji je prethhodno objasnjen)

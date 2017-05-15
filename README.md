# WebTech2 - Projekt

autori:
=======
Sabina Fraňová, Adam Podhradský, Erik Pribula, Roman Danko

Návod na prácu so serverom:
===========================
* Naklonujte si repozitár,
* Pre prácu na svojej úlohe si vytvorte nový branch
* Pracujte na projekte lokálne resp. na svojom školskom serveri a v prípade že budete mať svoju prácu hotovú, tak požiadajte na githube o merge request. Následne to mergne zodpovená osoba a dáta sa automaticky uploadnu na hostnigový server wt2.romandanko.sk,
* Prosim necommitujte zložku .idea/ ani žiadnu inú, ktorú vytvorí váše IDE
* Po dokončení práce zapíšte report do "Job logu", ktorý je nižšie

Job log:
========
* 2017-04-08 Roman Danko:<br>
Vytvoril som hosting pre nasu stranku, pripravil git repozitár https://github.com/elcomtik/WebTech2, a pushnul prvé dáta. Pripravil guideline na prácu so serverom a git projektom<br>


Návod pre autorov:
==================
* Musíte dodržať template aby sa to zobrazovalo OK:
* 1. include_once('session.php'); - obsahuje premenné o nastavenom jazyku a prihlásenom užívateľovi
* 2. \<head> tag 
* 3. inculde_once(includes.php) - dodá zakladné závislosti (bootstrap, jquery, bootstrap scripty, a pod.)
* 4. \<\head> tag
* 5. \<body> tag
* 6. include_once(menu.php); - vykreslí navigačnú lištu v danom jazyku a s prihlásenym užívateľom atd.
* 7. Váš kód
* 8. \<\body> tag
* Ak chete zistiť či je niekto prihlásený stači požit if(isset($_SESSION['name'])); -ak vráti true tak je prihlásený 
* Zoznam parametrov pre $_SESSION:
* 1. name - obsahuje celé meno prihláseného užívateľa
* 2. login_user - obsahuje prihlasovacie meno
* 3. permissions(zatiaľ neimplementované) - bude obsahovať pole so zoznamom skupín a hodnotou oprávnenia (napr. admin - false, hr - true, atd.)

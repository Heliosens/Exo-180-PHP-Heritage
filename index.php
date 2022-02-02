<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes
 * définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes
 * définies, y compris les setters ( dans index.php ).
 */

require "Habitation.php";
require "Maison.php";
require "Appartement.php";

$home1 = new Maison("France", "Fourmies", "59 610" , 2, 3, true, 2,true);

$home2 = new Maison("France", "Anor", "59 186", 1, 3, false, 1, false);

echo "L'habitation 1 est en " . $home1->getPays() . " à " . $home1->getVille() .", CP : " . $home1->getCp() .
    ", c'est une maison avec " . $home1->getChambre() . " chambre(s) et " . $home1->getPiece() . " pièce(s), ";
echo $home1->isJardin() ? "avec jardin, " : "sans jardin, ";
echo " de " . $home1->getEtages() . " étage(s), ";
echo $home1->isGarage() ? "avec garage" : "sans garage";

echo "<br><br>";

echo "L'habitation 2 est en " . $home2->getPays() . " à " . $home2->getVille() .", CP : " . $home2->getCp() .
    ", c'est une maison avec " . $home2->getChambre() . " chambre(s) et " . $home2->getPiece() . " pièce(s), ";
echo $home2->isJardin() ? "avec jardin, " : "sans jardin, ";
echo " de " . $home2->getEtages() . " étage(s), ";
echo $home2->isGarage() ? "avec garage" : "sans garage";

echo "<br><br>";

$apart1 = new Appartement("France", "Fourmies", "59 610", 1, 1, false);

echo "L'appartement 1 est en " . $apart1->getPays() . " à " . $apart1->getVille() . " CP: " . $apart1->getCp() .
     ", il a " . $apart1->getChambre() . " chambre(s) et " . $apart1->getPiece() . " pièce(s)";
echo $apart1->isGarage() ? " et il a un garage" : " et il n'a pas de garage";

echo "<br><br>";

$apart1->setPays("Belgique");
$apart1->setVille("Mons");
$apart1->setCp('7000');
$apart1->setPiece("2");
$apart1->setChambre("2");
$apart1->setGarage(true);


echo "L'appartement 2 est en " . $apart1->getPays() . " à " . $apart1->getVille() . " CP: " . $apart1->getCp() .
    ", il a " . $apart1->getChambre() . " chambre(s) et " . $apart1->getPiece() . " pièce(s)";
echo $apart1->isGarage() ? " et il a un garage" : " et il n'a pas de garage";

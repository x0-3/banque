<?php
// link to pages
include 'Titulaire.php';
include 'Compte.php';

// 1st user 
$titulaire1= new Titulaire ("DESSORT", "Lea", "05-01-2002", "Mulhouse");
echo $titulaire1. "<br>"; // call toString method
$compte1 = new CompteBancaire ("Compte courant", 100, "€", $titulaire1);//account for $titulaire1

// calls and writes functions stored in compte.php
echo $compte1-> crediter(200);
echo $compte1-> débiter(50);
echo $titulaire1-> afficherCompte(). "<br>";

echo "<hr>";
// 2nd user 
$titulaire2 = new Titulaire ("DUPONT", "George", "04-01-2000", "Lille");
echo $titulaire2. "<br>"; // call toString method
$compte2 = new CompteBancaire ("livretA", 100, "€", $titulaire2);

$compte2-> crediter(354);
$compte2-> débiter(45);


echo $compte1-> virement(100, $compte2);// calls function virement()
echo $titulaire2-> afficherCompte(). "<br>";

<?php

// link to pages
include 'Titulaire.php';
include 'Compte.php';

// class titulaire
$titulaire1= new Titulaire ("Dessort", "Lea", "05-01-2002", "Mulhouse");
echo $titulaire1. "<br>"; //call toString method
$compte1 = new CompteBancaire ("Compte courant", 100, "€", $titulaire1);//account for $titulaire1

//calls and writes functions stored in compte.php
// echo $compte1-> crediter(200);
// echo $compte1-> débiter(50);
echo $titulaire1-> afficherCompte(). "<br>";

// 2nd new user 
$titulaire2= new Titulaire ("xfcgvh", "nguigds", "04-01-2000", "Mulhouse");
echo $titulaire2. "<br>"; //call toString method
$compte2 = new CompteBancaire ("livretA", 100, "€", $titulaire2);

echo $compte1->virement(50,$compte2);// calls function virement()
echo $titulaire2-> afficherCompte(). "<br>";

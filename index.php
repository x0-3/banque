<?php

//link to pages
include 'Titulaire.php';
include 'Compte.php';

//class titulaire
$titulaire1= new Titulaire ("Dessort", "Lea", "05-01-2002", "Mulhouse");
echo $titulaire1. "<br>"; //call toString method

//comptes for $titulaire1
$compte1 = new CompteBancaire ("Compte courant", 100, "€", $titulaire1);

echo $compte1-> crediter(200);
echo $compte1-> débiter(50);
//calls and writes function afficherCompte() stored in compte.php
echo $titulaire1-> afficherCompte();



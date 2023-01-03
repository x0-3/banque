<?php

//link to pages
include 'Titulaire.php';
include 'Compte.php';

//class titulaire
$titulaire1= new Titulaire ("Dessort", "Lea", "05-01-2002", "Mulhouse");
echo $titulaire1. "<br>"; //call toString method

//comptes
$compte1 = new CompteBancaire ("Compte courant", 100, "€", $titulaire1);

$compte2 = new CompteBancaire ("Livret A", 50, "€", $titulaire1);

//calls and writes function afficherCompte() stored in compte.php
echo $titulaire1-> afficherCompte();


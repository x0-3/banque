<?php

class Titulaire {
    // Attribute
    private $nom;
    private $prénom;
    private $dateNaissance;
    private $ville;
    private array $compte;

    // magic method __construct
    public function __construct($nom, $prénom, $dateNaissance, $ville){
        $this-> nom = $nom;
        $this-> prénom = $prénom;
        $this-> dateNaissance = $dateNaissance;
        $this-> ville = $ville;
        $this-> compte = [];
    }

    // get functions
    public function get_Nom(){
        return $this-> nom;
    }
    public function get_Prenom(){
        return $this-> prénom;
    }
    public function get_dateNaissance(){
        return $this-> dateNaissance;
    }
    public function get_Ville(){
        return $this-> ville;
    }

    // function to store account into a table
    public function addCompte(CompteBancaire $compteBancaire){
        $this-> compte[] = $compteBancaire;
    }

    // function to show the account of a user
    public function afficherCompte(){
        foreach($this-> compte as $compteBancaire)
        echo $compteBancaire;
    }

    //  age function 
    public function age(){
        $date= new DateTime();
        $birthday= new DateTime($this-> get_dateNaissance());
        $dif= $birthday->diff($date)-> format("%Y ans");
        return $dif;
    }

    // to string method writes name, age and city
    public function __toString(){ // changer date de naissance par l'age
        return "Nom: {$this-> nom} <br> 
        Prénom: {$this-> prénom} <br> 
        Age: {$this-> age()} <br> 
        Ville: {$this-> ville} <br>";
    }
}


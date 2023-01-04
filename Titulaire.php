<?php

class Titulaire {
    // Attribute
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $ville;
    private array $comptes;

    // magic method __construct
    public function __construct($nom, $prenom, $dateNaissance, $ville){
        $this-> nom = $nom;
        $this-> prenom = $prenom;
        $this-> dateNaissance = $dateNaissance;
        $this-> ville = $ville;
        $this-> comptes = [];
    }

    // get functions
    public function get_Nom(){
        return $this-> nom;
    }
    public function get_Prenom(){
        return $this-> prenom;
    }
    public function get_dateNaissance(){
        return $this-> dateNaissance;
    }
    public function get_Ville(){
        return $this-> ville;
    }

    //setter
    public function set_Nom(){
        $this-> nom;
    }
    public function set_Prenom(){
        $this-> prenom;
    }
    public function set_dateNaissance(){
        $this-> dateNaissance;
    }
    public function set_Ville(){
        $this-> ville;
    }

    // function to store account into a table
    public function addComptes(CompteBancaire $compteBancaire){
        $this-> comptes[] = $compteBancaire;
    }

    // function to show the account of a user
    public function afficherCompte(){
        foreach($this-> comptes as $compteBancaire)
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
        Prénom: {$this-> prenom} <br> 
        Age: {$this-> age()} <br> 
        Ville: {$this-> ville} <br>";
    }
}

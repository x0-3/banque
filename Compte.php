<?php

class CompteBancaire {
    //Attribute
    private $libellé;
    private $solde;
    private $devise;
    private Titulaire $titulaire;

    //magic method __construct
    public function __construct($libellé, $solde, $devise, Titulaire $titulaire){
        $this-> libellé = $libellé;
        $this-> solde = $solde;
        $this-> devise = $devise;
        $this-> titulaire = $titulaire;
        $titulaire->addCompte($this);//declare a function that is written in Titulaire.php
    }

    //get functions
    public function get_Libelle(){
        return $this-> libellé;
    }
    public function get_Solde(){
        return $this-> solde;
    }
    public function get_Devise(){
        return $this-> devise;
    }

    //créditer
    public function crediter($montant) {
        $this->solde += $montant;
    }

    //débiter
    public function débiter($montant) {
        $this->solde -= $montant;
        
    }

    //virement
    // public function  virement($montant){

    // }

    //to string method writes name of the account, amount on it and the currency
    public function __toString(){
        return "{$this-> libellé}: {$this-> solde} {$this-> devise} <br>";
    }
}
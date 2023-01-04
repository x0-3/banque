<?php

class CompteBancaire {
    // Attribute
    private $libelle;
    private $solde;
    private $devise;
    private Titulaire $titulaire;

    // magic method __construct
    public function __construct($libelle, $solde, $devise, Titulaire $titulaire){
        $this-> libelle = $libelle;
        $this-> solde = $solde;
        $this-> devise = $devise;
        $this-> titulaire = $titulaire;
        $titulaire-> addComptes($this);//declare a function that is written in Titulaire.php
    }

    // get functions
    public function get_Libelle(){
        return $this-> libelle;
    }
    public function get_Solde(){
        return $this-> solde;
    }
    public function get_Devise(){
        return $this-> devise;
    }

    // setter functions
    public function set_Libelle(){
        $this-> libelle;
    }
    public function set_Solde(){
        $this-> solde;
    }
    public function set_Devise(){
        $this-> devise;
    }

    // créditer
    public function crediter($montant) {
        $this->solde += $montant;
    }

    // débiter
    public function débiter($montant) {
        $this->solde -= $montant;
    }

    // virement
    public function  virement(float $montant, CompteBancaire $destination){
        $this-> débiter($montant);
        $destination-> crediter($montant);
    }

    // to string method writes userinfo, name of the account, amount on it and the currency
    public function __toString(){
        return "{$this->titulaire} {$this-> libelle}: {$this-> solde} {$this-> devise} <br>";
    }
}
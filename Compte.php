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
        $titulaire->addCompte($this);
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


    //to string method
    public function __toString(){
        return "{$this-> libellé}: {$this-> solde}{$this-> devise} <br>";
    }
}
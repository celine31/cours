<?php

class Biblio{
    public $nom;
    public $livres;
    
    public function __construct($nom=null,$livres=[]){
        $this->nom=$nom;
        $this->livres=$livres;
        }
      
}


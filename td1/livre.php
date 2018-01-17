<?php
class Livre{
    public $titre;
    public $annee;
    public function __construct($titre=null, $annee=null){
        $this->titre = $titre;
        $this->annee = $annee===null? date('Y'):$annee;
    }
}


<?php

class Client {

    public $nom;
    public $code;

    public function __construct($nom = null, $code = 0) {
        $this->nom = $nom;
        $this->code = $code;
    }

    public function acheter() {
        echo "{$this->nom} achète un produit";
    }

}

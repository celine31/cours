<?php

require_once('Client.php');
$dupont=new Client("Dupont",123);
echo $dupont->nom; // Dupont
echo $dupont->code;// 123
$dupont->acheter();// Dupont achète un produit

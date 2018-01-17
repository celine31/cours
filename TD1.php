<?php
function ajout($tab){
    $tab[]=4;
}
$tab=[1,2,3];
ajout($tab);
var_dump($tab);

<?php

interface I{
    function m();
}

class A{
    function m(){
        echo 'A';
    }
}

class E extends A implements I{}

(new E())->m(); 
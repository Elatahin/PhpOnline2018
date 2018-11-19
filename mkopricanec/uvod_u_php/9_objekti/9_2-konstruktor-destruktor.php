<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class covjek
{
    public $ime;
    
    function __construct($novo_ime){
        $this->ime = $novo_ime;
    }
    function __destruct(){
        echo 'R.I.P.'.$this->ime;
    }
    function get_ime(){
        return $this->ime;
    }
}

$kupac = new covjek('Ivan');
echo $kupac->ime;
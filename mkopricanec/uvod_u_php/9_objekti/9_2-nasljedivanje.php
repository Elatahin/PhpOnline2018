<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class covjek {
    public $ime;
    
    function __construct($novo_ime){
        $this->ime = $novo_ime;
    }
    
    function get_ime(){
        return $this->ime;
    }
}

class kupac extends covjek {
    public $id_kupca;
    public $potroseni_iznos;
    
    function __construct($novo_ime){
        parent::__construct($novo_ime);
        $this->id_kupca = 1234;
    }
    
}

$kupac = new kupac('Ivan');
echo $kupac->ime;
echo $kupac->id_kupca;
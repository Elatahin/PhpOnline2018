<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class covjek
{
    public $ime;
    
    function set_ime($novo_ime)
    {
        $this->ime = $novo_ime;
    }
    
    function get_ime()
    {
        return $this->ime;
    }
}

$kupac = new covjek;
$kupac->set_ime('Ivan');
echo $kupac->get_ime();
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Covjek{
    public $ime;
    function __construct(){
        $this->ime='John Doe';
    }
    function set_ime($novo_ime){
        $this->ime=$novo_ime;
    }
    function __destruct(){
        echo '<br>RIP'.$this->ime;
    }
}

$C1=new Covjek();
echo $C1->ime;
$C1->set_ime('Aleksandar Makedonski');
echo $C1->ime;

echo "<hr>";

$C2=new Covjek();
$C2->set_ime('Marko Antonije');
echo $C2->ime;
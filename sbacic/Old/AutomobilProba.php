<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'Automobil.class.php';

$a1 = new Automobil('Honda');
$a2 = new Automobil('Mazda');

$a1->vozi();
echo $a1->get_model();

$a2->ispis();

<?php

  /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$polje=array('crvena','zuta','plava');
echo $polje[1];

echo '<hr> ispis svih elemenata:<br>';
for($i=0;$i<=2;$i++){
    echo ''.$polje[$i];
}

unset($polje[1]);

$polje[]='zelena';
$polje[]='crna';


echo '<hr> ispis svih elemenata:<br>';
for($i=0;$i<=2;$i++){
    echo ''.$polje[$i];
}

echo '<hr> Ispis pomoću print_r():<br>';
echo '<pre>';
print_r($polje);
echo '</pre>';


echo '<hr> ispis svih elemenata pomocu duljine polja:<br>';
for($i=0;$i<=count($polje);$i++){
    echo ''.$polje[$i];
}
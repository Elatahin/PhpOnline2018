<?php

$mysql_server = "localhost";
$mysql_ime = "MojeMySQLIme";
$mysql_lozinka = "MojaMySQLLozinka";
$mysql_db = "fakultet";

$kon = new mysqli($mysql_server, $mysql_ime, $mysql_lozinka, $mysql_db);

if($kon->connect_error)
{
        echo "Gre&#353;ka: " . $kon->connect_error;
}

?>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fakultet";
$db = new db($servername, $username, $password, $dbname);
if ($db->connect_error) {
    die("Connection failed: ".$conn->connect_error);
} 

$sql = 'SELECT imeStud, prezStud FROM stud';
$result = $conn->query($sql);


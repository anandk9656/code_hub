<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "<-----: Objects in PHP :-----> ";
$obj = new stdClass();
$obj-> name = "Anand";
$obj-> id = 123;
$obj-> address = "House No 413 Dariya Pur Kalan";
$obj-> mobile = 9873497838;

echo '<pre>';
print_r($obj);
echo '</pre>',"<br> <br>";

echo $obj->address;
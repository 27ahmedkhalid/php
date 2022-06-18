<?php
//Integer Number
 $x = 59867;
 var_dump(is_int($x));
//float Number
 $x = 598.67;
 var_dump(is_float($x));
//infinte or finte Number
 $x = 1.9e411;
 var_dump($x);
//NaN (Not a Number)
 $x = acos(8);
var_dump($x);
// Numerical String
$x = 5985;
var_dump(is_numeric($x));
//non Numerical String
$x = "Hello";
var_dump(is_numeric($x));
// Cast float to int 
$x = 23465.768;
$cast = (int)$x."</br>";
echo $cast;
// Cast String to int 
$x = '23465.768';
$cast1 = (int)$x;
echo $cast1."</br>";;
// Another Way of Casting
$x = 10.5+(int)10.5;
echo gettype(10.5+10);
//echo $x;
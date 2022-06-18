<?php

echo(pi())."</br>";                                 // returns 3.1415926535898
//min() function The pi() function returns the value of PI:
echo (min(156,564,238,4684,354,84,9))."</br>";      //returns 9
//max() function The min() and max() functions can be used to find the lowest or highest value in a list of arguments:
echo (max(156,564,238,4684,354,84,9))."</br>";      // returns 4684
//abs() function The abs() function returns the absolute (positive) value of a number:
echo(abs(-2548))."</br>";                           // returns 6.7
//sqrt() function The sqrt() function returns the square root of a number:
echo(sqrt(64))."</br>";                             // returns 8
//round() function The round() function rounds a floating-point number to its nearest integer:
$x = 10.49+(int)10.50;
echo (round($x))."</br>";                           // returns 21
//rand() function The rand() function generates a random number:
echo (rand(10,50));                                 // returns 39

?>
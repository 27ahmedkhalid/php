<?php
/*constant:
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
A valid constant name starts with a letter or underscore (no $ sign before the constant name).
Note: Unlike variables, constants are automatically global across the entire script.
*/
define("ak",100,);
echo ak ."</br>";
//Array in Constant using define
define("cars",[
    "alfaromaio",
    "BMW",
    "opel",
    "sqoda"
]);
echo cars[2];
//Constant is Global
function test(){
    echo cars;
}
test();
?>
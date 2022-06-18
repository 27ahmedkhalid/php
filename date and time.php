<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <style>body {background-color:blue;
        color: white;}</style>
            <?php
            //Date() function// 
            echo date("H:i:sa")."</br>";?>
            <?php
            //Automatic Copyright Year//
            ?>
            &copy ; 2010-<?php echo date("Y")."</br>";
            //Get Your Time Zone//
            echo date_default_timezone_set("egypt")."</br>";
            echo date('H-i-s')."</br>";
            //Create a Date With mktime()//
            $time = mktime(11,14,54,8,12,2014);
            echo date("H:i:s m-d-y",$time)."</br>";
            //Create a Date From a String With strtotime()//
            $s= strtotime ("10:30pm April 15 2014"); //must write the name of the month in the varabile and not put dashs -// 
            echo date("H:i:sa m-d-y",$s)."</br>";
            ?>
    </body>
</html>
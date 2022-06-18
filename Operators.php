<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <style> body {background-color: yellow;} </style>
            <?php

            /*Assignment operation :
            The PHP arithmetic operators are used with numeric values to perform common arithmetical 
            operations, such as addition, subtraction, multiplication etc.
            */
            $x=10;
            $y=10;
            if ($x=$y){
                echo "equal"."</br>";
            }else{
                echo "Not equals"."</br>";
            }
            /*Comparision Operatiom:
            The PHP assignment operators are used with numeric values to write a value to a variable.
            The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.
            */
            $x=10;
            $y=20;
            if ($x!=$y){
                echo "Not equals"."</br>";
            }else{
                echo "equal"."</br>";
            }
            /*Increament Decreament operation:
            The PHP increment operators are used to increment a variable's value.
            The PHP decrement operators are used to decrement a variable's value.
            */
                $x=10;
                $y=20;
            ++$x; // Pre-Increament
            echo $x."</br>";
            $x++; // Post-Increament
            echo $x."</br>";
            --$x; // Pre-Decreament
            echo $x."</br>";
            $x--; // Post-Decreament
            echo $x."</br>";
            /*Logical Operation: 
            The PHP logical operators are used to combine conditional statements.
            */
            $x = 100;  
            $y = 50;
            if ($x == 100 and $y == 50) { //And operator
                echo "the both is equal"."</br>";
            }

            $x = 100;  
            $y = 500;
            if ($x == 100 or $y == 50) { //OR operator
                echo "One only equal"."</br>";
            }

            $x = 100;  
            $y = 500;
            if ($x !== 90) {
                echo "NOT equal"."</br>";
            }
            /*String Operation:
            PHP has two operators that are specially designed for strings.
            */
            echo $x.$y."</br>"; //Concatenation

            $x = "Ahmed ";  
            $y = "Khalid";
            $x .= $y;  //Concatention assignment (Concatention with variable)
            echo $x."</br>";
            /*Array operation:
            The PHP array operators are used to compare arrays.
            */
            $cars= array(
                "verna" => "hyundai",
                "vectra" => "opel",
                "Lancer" => "Mitsubishi",
                "Cerato" => "Kia"
            );
            $colors= array(
                "c" => "blue",
                "d" => "yellow"
            );  
                                //echo $cars["verna"];
            echo "<pre>";
            print_r($cars+$colors);
            echo "</pre>"."</br>";
            var_dump($x == $y);//equal
            echo "</br>";
            var_dump($x === $y);//Identical
            echo "</br>";
            var_dump($x != $y);//Not equal
            echo "</br>";
            var_dump($x <> $y);//inequalty
            echo "</br>";
            var_dump($x !== $y);//Not Identical
            echo "</br>";
            /*Conditional Operation:
            The PHP conditional assignment operators are used to set a value depending on conditions
            */
            $age = 18; //Ternery
            echo ($age>=18) ? "adult" : "teenager"."</br>";
            // variable $user is the value of $_GET['user']
            // and 'anonymous' if it does not exist
            echo"</br>";
            $_GET["user"] = "ahmed";// Null coalescing
            echo $user = $_GET["user"] ?? "anonymous";
            echo"</br>";

            // variable $color is "red" if $color does not exist or is null
            $color= "blue";
            echo $color = $color ?? "No Color";
            ?>
        </body>
</html>
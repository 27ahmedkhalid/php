<!DOCTYPE html>
    <html>
        <head></head>
        <body>
            <style> body{background-color:gray;}</style>
            
            <?php
            /*
            ----IF Statments----
            (if) Statment - execites some code if one condition is true 
            (if..else) statment -executes some code if a condition is true and anther code if that condition is false
            (if...elseif...else) statment -executes different code for more than two conditions
            */
            $T = date("H");
            echo "The Server time ". $T ."</br>";

                if($T <= "10"){
                    echo "Good Morning Mr.Ahmed Khalid"."</br>";
            } elseif ($T <= "12" or $T < "18" ){
                echo "Good Afternoon Mr.Ahmed Khalid"."</br>";
            } else {
                echo "Good Evening Mr.Ahmed Khalid";
            };
            ?>
        </body>
    </html>
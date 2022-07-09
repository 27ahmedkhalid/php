<?php
/*
----Filters----
PHP Filters are used to validate and senitize external input.
the php filter extension has many of the function needed for checking user input, and is designed
to make data validation easier and quicker.
validating data = Determined if the data is in proper form.
Sanitizing data = Remove any illegal characterfrom the data.
*/
?>
<!DOCTYPE html>
    <html>
        <head></head>
        <body>
        <style> body{background-color:gray;}</style>
            <?php
            /*
            The filter_list() function can be used to list what the php filter extension offers
            */
            echo "<pre>";
            print_r(filter_list());
            echo "</pr>";
            /*
            ----filter_var()----
            The filter var function both sanitize data.
            And filter a string variable with a specified filter. it takes two pieces of data:
                -1- The variable you need to check.
                -2- The type pf check to use.
            */
            //Sanitize a String
            $str1 ="<p>Hello World</p>";
            $newstr1 = filter_var($str1 , FILTER_SANITIZE_STRING);
            echo $newstr1 ."</br>" ;
            //Validate an Integer
            $int =100;
            if(!filter_var($int,FILTER_VALIDATE_INT) === false){
                echo "intger is vaild</br>";
            } else {
                echo"intger is invaild</br>";
            }
            //Validate an IP Address
            $IP="192.168.1.2";
            if(!filter_var($IP,FILTER_VALIDATE_IP) === false){
                echo "You insert a vaild IP address</br>"; 
            }else{
                echo "Please insert a vaild IP address</br>"; 
            }
            //Sanitize and Validate an Email Address
            $email =  "john.doe@exampl.com";
            $email =  filter_var($email,FILTER_SANITIZE_EMAIL); // sanitizing the email and remove unwanted character
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                echo $email." is a vaild URL </br>";
            }else{
                echo $email." is not a vaild URL </br>";
            }
            //Sanitize and Validate a URL
            $URL =  "https://facebook.com";
            $URL =  filter_var($URL,FILTER_SANITIZE_URL); // sanitizing the URL and remove unwanted character
            if (!filter_var($URL, FILTER_VALIDATE_URL) === false){
                echo $URL." is a vaild URL </br>";
            }else{
                echo $URL." is not a vaild URL </br>";
            }
            ?>
        </body>
    </html>
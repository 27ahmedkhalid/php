<?php
$cookie_name = "user1";
$cookie_value = "ahmed khalid";
setcookie($cookie_name, $cookie_value, time() +5, "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <style>body {background-color:blue;
        color: white;}</style>
            <?php
            if(!isset($_COOKIE[$cookie_name])){
                echo "cookies named (".$cookie_name.") is not set ";
            }else {
                echo "congrats your cookie (".$cookie_name.") is set succsfully </br>";
                echo "Value is: ". $_COOKIE[$cookie_name]."</br>";
            }
            if(count($_COOKIE) > 0){
                echo "The Cookies is Enabled. </br>";
            }else{
                echo "The Cookies is Disabled.";
            }
            ?>
    </body>
</html>
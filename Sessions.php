<?php
session_start();
?>
<!DOCTYPE html>
    <html>
        <head></head>
        <body>
        <style> body{background-color:gray;}</style>
            
            <?php
            /*$_SESSION["fname"] = "mahmoud";
            $_SESSION["sname"] ="khalid";
            echo "sesion variables are set succssfuly.".$_SESSION["fname"] ." ".$_SESSION["sname"];
            ?>
            <?php
            echo "<pre>";
            print_r($_SESSION);
            echo "</pre>";*/
            session_unset();
            session_destroy();
            ?>

        </body>
    </html>
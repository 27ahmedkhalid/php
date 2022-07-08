<?php
/*
----Session----
A session ia away to store information (in variables)to be used across multiple pages.
Session variable are set with the php globel variable: $_SESSION.
To Modify a session you need to change a session variable, (just overwrite it).
*/
?>
<!DOCTYPE html>
    <html>
        <head></head>
        <body>
        <style> body{background-color:gray;}</style>
            <?php
            /*
            ----Session_Start----
            A session is started with session_start() function
            */
            session_start();
            $_SESSION["fname"] = "Ahmed";
            $_SESSION["sname"] ="khalid";
            echo "session variables are set succssfuly.".$_SESSION["fname"] ." ".$_SESSION["sname"];
            ?>
            <?php
            echo "<pre>";
            print_r($_SESSION);
            echo "</pre>";
            /*
            ----Session_Unset----
            The session function frees all the variable currently registered.
            This function has no parameters.
            Returns true on success or false on failure.
            */
            session_unset();
            /*
            ----Session_Destroy----
            destroy session is dstroy all of the data associated with the current session it does not 
            unset any of global variables associated with the session ,or unset the session cookie . 
            to use the session variable again ,session_start() has to be called. 
            */
            session_destroy();
            ?>

        </body>
    </html>
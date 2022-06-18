<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <style>body{background-color:gray;}</style>
        <?php
        //Super global variables are built-in variables that are always available in all scopes.//
        /*
        ----$GLOBALS---- 
        is a PHP super global variable which is used to access global variables 
        from anywhere in the PHP script (also from within functions or methods).
        */
        $x = 75;
        $y = 25;
        function addition(){
            $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
            echo $GLOBALS['z'];
        }
        addition();
        /*
        ----$_SERVER----
        $SERVER is a php super globals variable which holds information about headeer,path,script location
        */
        echo $_SERVER['PHP_SELF']." (Returns the filename of the currently executing script)";
        echo "<br>";
        echo $_SERVER['SERVER_NAME']."(	Returns the name of the host server (such as www.w3schools.com))";
        echo "<br>";
        echo $_SERVER['HTTP_HOST']."(Returns the Host header from the current request)";
        echo "<br>";
        echo $_SERVER['HTTP_REFERER']."(Returns the complete URL of the current page (not reliable because not all user-agents support it))";
        echo "<br>";
        echo $_SERVER['SERVER_SOFTWARE']."(	Returns the server identification string (such as Apache/2.2.24))";
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME']."(	Returns the path of the current script)";
        echo "<br>";
        echo $_SERVER['REQUEST_TIME']."(Returns the timestamp of the start of the request (such as 1377687496))";
        echo "<br>";
        echo $_SERVER['GATEWAY_INTERFACE'] ." (Returns the version of the Common Gateway Interface (CGI) the server is using)";
        echo "<br>";
        /*
        ----$_REQUEST----
        PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
        */
        ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name :  <input type="text" name="fname">
                <input type="submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_REQUEST['fname'];
        if (empty($name)) {
            echo "Name is empty</br>";
        } else {
            echo $name."</br>";
        }

        }
        /*
        ----$_post----
        php $_post is aphp super global variable whice used to collect from data 
        after submitting an html from with method="post".$post is also widly used to pass variable
        */
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
         $name =$_POST['fname'];
        if (empty($name)) {
            echo "Name is empty </br>";
        } else {
            echo $name."</br>";
        }
        /*
        ----$_GET----
        php $_GET is aphp super global variable whice used to collect from data 
        after submitting an html from with method="get".$GET is also widly used to pass variable
        */
        }
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // collect value of input field
         $name =$_GET['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
        }
        ?>
    </body>
</html>
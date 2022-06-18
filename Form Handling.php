<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <style>body{background-color:gray;}</style>
        <form action="Form Handling.php" method="post">
        Name : <input type ="text" name="name">
        E-Mail : <input type ="text" name="email"><br>
        <input type ="submit"><br>
        </form>
        <?php
       
       $name =$_POST['name'];
       $email =$_POST['email'];

      if ($_SERVER["REQUEST_METHOD"] == "POST"){  
       if(empty($name and $email)){
            echo "no name was writen";
        } else {
            echo $name."</br>";
            echo $email;
        }
    }
        ?>
    </body>
</html>
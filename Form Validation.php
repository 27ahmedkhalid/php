<!DOCTYPE HTML>  
<html>
        <head>
        </head>
    <body>  
    <?php
    // define variable and set to empty values//
    $name = $email = $gender = $comment = $website ="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name       = test_input($_POST["name"]);
        $email      = test_input($_POST["email"]);
        $gender     = test_input($_POST["gender"]);
        $comment    = test_input($_POST["comment"]);
        $website    = test_input($_POST["website"]);
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
     ?>
     <h2>PHP Form Validation Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name : <input type="text" name="name">
    <br>
    E-Mail : <input type="text" name="email">
    <br>
    Website : <input type="text" name="website">
    <br>
    Comment : <textarea name="comment" rows="5" cols="40" ></textarea>
    <br>
    Gender :
    <input type="radio" name="gender" value ="female"> Female
    <input type="radio" name="gender" value ="male"> Male
    <input type="radio" name="gender" value ="other"> other
    <br>
    <input type="submit" name="submit" value="submit">
    </form>
    
    <?php
    echo "<h2>Your Input:</h2>";
    echo $name."</br>";
    echo $email."</br>";
    echo $website."</br>";
    echo $comment."</br>";
    echo $gender."</br>";
    ?>
    </body>
</html>
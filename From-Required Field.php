<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <style>
            body{background-color:blue;}
            .error {color:red;}
        </style>
        <?php
        //define the variable with an empty values//
        $nameErr = $emailErr = $genderErr = $websitErr ="";
        $name =  $email = $gender = $comment = $websit ="";
        //a group of (if) loop that will check if the field is empty to print the error messages// 
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            //check name field is empty//
            if(empty($_POST['name']))
            {
                $nameErr =  "Name is required";
            }
            else
            {
                $name = test_input($_POST["name"]);
            }
            //check email field is empty//
            if(empty($_POST["email"]))
            {
                $emailErr =  "email is required";
            }
            else
            {
                $email = test_input($_POST["email"]);
            }
            //check gender field is empty//
            if(empty($_POST["gender"]))
            {
                $genderErr =  "gender is required";
            }
            else
            {
                $gender = test_input($_POST["gender"]);
            }
            //check website field is empty//
            if(empty($_POST["websit"]))
            {
                $websitErr =  "websit is required";
            }
            else
            {
                $websit = test_input($_POST["websit"]);
            }
        }
    //this is the function that control the data required in the fields//
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
        ?>
        <?php/*html form that will display the  field and the error message if the user try 
        to submit without filling out the requried fields*/?>
        <h2>PHP Form Validation Example</h2>
        <form method= "POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name:
            <input type="text" name="name">
            <span class="error">*<?php echo $nameErr ;?></span>
            <br><br>    
            E-Mail:
            <input type ="text" name="email">
            <span class="error">* <?php echo $emailErr; ?></span>
            <br><br>
            Website:
            <input type="text" name="websit">
            <span class="error">* <?php echo $websitErr ;?></span>
            <br><br>
            Comment:
            <textarea name="comment" cols="100" rows="2"></textarea>
            <br>
            Gender:
            <input type="radio" name="gender" value="male"> Male
            <input type="radio"name="gender" value="female"> Female
            <input type ="radio"name="gender"value="other"> other
            <span class="error">*<?php echo $genderErr?></span>
            <br>
            <input type="submit" name="submit" value="submit">
        </form>
        <h2>Your Input:</h2>
        <?php
        echo $name."</br>";
        echo $email."</br>";
        echo $websit."</br>";
        echo $comment."</br>";
        echo $gender;
        ?>
    </body>
</html>
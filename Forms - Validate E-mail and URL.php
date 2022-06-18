<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <style>
        body{background-color:black; color:white;            }
        .error {color:blue;}
        </style>
        <?php
        $nameErr = $emailErr = $genderErr = $websiteErr ="";
        $name = $email = $gender = $comment = $website ="";
        // check if the server requset method is POST //
        if ($_SERVER["REQUEST_METHOD"] =="POST"){
            
            
            // check if the name field is empty or not empty to print an error message if empty //
            if(empty($_POST["name"])){
                $nameErr = "Name is Required"; 
            }else{
                $name = test_input($_POST["name"]);
                // check if the name field contian the wanted char like dashes,apostrophes,whitespaces //
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                    $nameErr = "Only letters and white space allowed";
                }
            }

            // check if the eamil field is empty or not empty to print the error message if empty //
            if(empty($_POST["email"])){
                $emailErr = "email is Required"; 
            }else{
                $email = test_input($_POST["email"]);
            
                //check if the field do not contain a valid email address tp print an error message//
                if (!filter_var($email,FILTER_VALIDATE_EMAIL)){ 
                    $emailErr = "Only emails allowed";
                }
            }

            // check if the Website field is empty or not empty to print the error message if empty //
            if(empty($_POST["website"])){
                $websiteErr = "website is Required"; 
            }else{
                $website = test_input($_POST["website"]);
            
                // check if the the URL sentax is vailed//
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.,;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
                    $websiteErr = "Only letters and white space allowed";
                }
            }
            
            // check if the gender field is empty or not empty to print the error message if empty //
            if(empty($_POST["gender"])){
                $genderErr = "gender is Required"; 
            }else{
                $gender = test_input($_POST["gender"]);
            }
        }
        function test_input($data){
            $data = trim($data);
            $data =stripslashes($data);
            $data =htmlspecialchars($data);
            return $data ;
        }
        ?>
        <h3> php form - VALIDATE_EMAIL and URL</h3>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Name:
        <input type="text" name="name">
        <span class="error">*<?php echo $nameErr?></span>
        <br><br>
        Email:
        <input type="text" name="email">
        <span class="error">*<?php echo $emailErr?></span>
        <br><br>
        Website:
        <input type="text" name="website">
        <span class="error">*<?php echo $websiteErr?></span>
        <br><br>
        Comment:
        <textarea name="comment" cols="100" rows="5"></textarea>
         <br><br>
        Gender:
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="other">Other
        <span class="error">*<?php echo $genderErr?></span>
        <br><br>
        <input type="submit" name="submit" value="submit">
        </form>
        <h3>your output</h3>
        <?php
        if(!empty($_POST["name"] and $_POST["email"] and $_POST["website"] and $_POST["gender"])){
            echo $name."</br>";
            echo $email."</br>";
            echo $website."</br>";
            echo $_POST["comment"]."</br>";
            echo $gender."</br>";
        }else{
            echo "check the fields may be empty and try again later when you are sure";
        }
        ?>
    </body>
</html>
<!DOCTYPE html>
    <html>
        <head></head>
        <body>
        <style> body{background-color:gray;  color:white;}
        .error{color:red;}
        </style>
        <?php
        $name=$email=$url="";
        $nameErr=$emailErr=$urlErr="";
       
if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["name"])){
            $nameErr="Must contain name";
        }else{
            $name= ($_POST["name"]);
            
        }

            if(empty($_POST["email"])){
                $emailErr="Must contain Email";
            }else{
                $email= ($_POST["email"]);
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $emailErr ="only email is allowed";
                }
            }
            
            if(empty($_POST["url"])){
                $urlErr="Must contain URL";
            }else{
                $url= ($_POST["url"]);
                if(!filter_var($url,FILTER_VALIDATE_URL)){
                    $urlErr ="only URL is allowed";
                }
            }
}
        ?>

<form method="POST" action="form.php"> 
Name: 
<input type="text" name="name">
<spam class="error">*<?php echo $nameErr;?></span>
<br><br>

Email:
<input type="text" name="email">
<spam class="error">*<?php echo $emailErr;?></span>
<br><br>

URL: 
<input type="text" name="url">
<spam class="error">*<?php echo $urlErr;?></span>
<br><br>
<input type="submit" value="submit" name="submit">
</form>
        </body>
    </html>
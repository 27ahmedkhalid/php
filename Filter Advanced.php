<!DOCTYPE html>
    <html>
        <head></head>
        <body>
        <style> body{background-color:gray;}
        </style>
        <?php
        $intErr = "";
        $int = ($_POST['num']);
        $ipv6Err = "";
        $ipv6 = ($_POST['ipv6']);
        $urlErr="";
        $url= ($_POST['url']);
        $url= filter_var($url,FILTER_SANITIZE_URL);
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            //check if the INT fiald is empty and then check the int is equal true or false and then check if the int in the range
            if(empty($_POST['num'])){
                $intErr = " Must Contain Value";
            } else {
                if(!filter_var($int,FILTER_VALIDATE_INT) == false){
                
                    if($int <=200){
                        echo " the int you inserted is within the range </br>";
                    }else {
                        echo " the int you inserted is not within the range</br>";
                    }
            
                }else{
                        echo "Not Int</br>";
                } 
            }
            //check if the IPV6 fiald is empty and then check the ipv6 characters is true of false
            if(empty($_POST['ipv6'])){
                $ipv6Err = "Must Contain IPV6";
            }else{
            if(!filter_var($ipv6,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)=== false){
                echo "$ipv6 is a vaild IPV6 address</br>";
            }else{
                echo "$ipv6 is not a vaild IPV6 address</br>";
                }
            }

            //check if the URL fiald is empty and then check the URL characters is true of false
            if(empty($_POST['url'])){
                $urlErr= "Must Contain URL";
            }else{
                if(!filter_var($url,FILTER_VALIDATE_URL) === false){
                    echo "$url is a valid URL with a query string";
                }else{
                    echo "$url is not a valid URL with a query string" ;
                }
            }
        } 
        ?>
<form method="POST" action="Filter Advanced.php"> 
INT: 
<input type="int" name="num">
<span class="error">*<?php Echo $intErr?></span>
<br><br>
IPV6: 
<input type="text" name="ipv6">
<span class="error">*<?php Echo $ipv6Err?></span>
<br><br>
URL: 
<input type="text" name="url">
<span class="error">*<?php Echo $urlErr?></span>
<br><br>
<input type="submit" value="submit" name="submit">
</form>
        </body>
    </html>
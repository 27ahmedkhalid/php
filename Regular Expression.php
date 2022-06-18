<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <style>body{background-color:gray;}</style>
        <?php
        /*
        ----Regular expression----
        a regular exprission is a sequence of characters that forms a search pattern, when you search for data in a text
        you can use this pattern to describe what you are searching for
        --syntax--
        $exp= ="/w3schools/i";
        --regular exprission function--
        preg_match() => return (1) if the pattern was found in the string and return (0) if not found.
        preg_match_all() => returns the number of time the pattern was found in the string, which may also be 0.
        preg_replace() => returns a new string where matched pattern have been replaced with another string.
        */
        //preg_match//
        $str = "visit w3schools";
        $pattern = "/W3schools/i";// default case sensitive / case insensitive (i)
        echo preg_match($pattern,$str)."</br>";
        //preg_match_all//
        $str = "the rain in spain falls mainly on the plains.";
        $pattern = "/ain/i";// default case sensitive / case insensitive (i)
        echo preg_match_all($pattern,$str)."</br>";
        //preg_replace//
        $str = "visit microsoft";
        $pattern = "/microsoft/i";// default case sensitive / case insensitive (i)
        echo preg_replace($pattern,"w3schools",$str)."</br>";
        ?>
    </body>
</html>
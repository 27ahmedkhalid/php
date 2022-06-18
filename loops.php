<DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <style> body {background-color:gray;}</style>
        <?php
        /*
       -- Loops are used to execute the same block of code again and again, as long as a certain condition is true.
        (while)      - loops through a block of code as long as the specified condition is true
        (do...while) - loops through a block of code once, and then repeats the loop as long as the specified condition is true
        (for)        - loops through a block of code a specified number of times
        (foreach)    - loops through a block of code for each element in an array
        /*
        While loop:
            the while lopp executes a block of code as long as the specified condition is true.
        */
        $x = 0;
        while ($x <=5){
            echo "the number is: ".$x."</br>";
            $x++;
        }
        /*
        Do While loop:
            the do...while loop will always executes the block of code once ,
            it will then check the condition , 
            and repeat the loop while the specified condition is true.
        */
        do {
            echo "the number is: $x <br>";
            $x++;
        } while($x <= 10);
        /*
        for loop:
            the for loop - loops through a block of code a specified number of time 
            the for loop is used when you know in advance how many times the scrit
            should run .
        */
        for($y = 1;$y <=20;$y++){
            echo"your fuckn number is:$y </br>";
        }
        /*
        foreach:
            the foreach loop- loops through a block of code for each element in an array.
            the foreach loop work only on array , and is used to loop through each key/value pair in array.
        */
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        //foreach($variable as $key => $values)
        foreach($age as $x =>$val){
            echo $x."=".$val."</br>";
        }
        /*
        Break:
        the break are used to (jump out) of any loop 
        */
        for($d =0 ; $d<10;$d++){
            if($d==6){
                break;
            }
            echo "The number is: $d <br>";    
            }
        /*
        break in while statment:
        */
        $r= 0;
        while($r<10){
            if($r==6){
                break;
            }
            echo" the vesitors is $r"."</br>";
            $r++;
        }
        /*
        Continue:
        The continue statement breaks one iteration (in the loop),
        if a specified condition occurs,
        and continues with the next iteration in the loop.
        */
        for($k =0 ; $k<10;$k++){
            if($k==6){
                continue;
            }
            echo "the user in our site is : $k <br>";    
            }  
        /*
        continue in while statment:
        */
        $q=0;
        while($q<10){
            if($q==6){
                $q++;
                continue;
            }
            echo"hello ahmed $q"."</br>";
            $q++;
        }
        ?>
    </body>
</html>
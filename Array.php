<!DOCTYPE html
<html>
    <head></head>
    <body>
        <style> body {background-color:gray;}</style>
    <?php
    /*
    ----Array----
    An array is an special variable, which can hold more then one value at a time.
    */
    $cars = array(
    "Volvo",
    "BMW",
    "Toyota"
    );
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".</br>";
    /*
    ----Indexed Arrays----
    Indexed Arrays are arrays in which the elements are ordered based on index. 
    The index can be used to access or modify the elements of array.
    */
    $cars1 = array(
        "Volvo",
        "BMW",
        "Toyota"
        );
    $arrlength = count($cars);

    for($x = 0; $x < $arrlength; $x++) {
     echo $cars1[$x];
     echo "<br>";
    }
    /*
    ----Associative Arrays----
    Associative Arrays are arrays that use named keys that you assign to them
    */
    $age =array(
        "peter"=>"35",
        "Ben"  =>"37",
        "Joe"  =>"43"
    );
    foreach($age as $x => $value){
    echo"you are ".$x.$value." you are accpeted years old</br>";
    }
    /*
    ----Multidimensional Array----
    A multimension array is an array containing one or more arrays.
    */
    $cars = array ( //Two-dimensional//
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );
      echo $cars[0][0]."-In stock:".$cars[0][1].",sold:".$cars[0][2]."</br>";
      echo $cars[1][0]."-In stock:".$cars[1][1].",sold:".$cars[1][2]."</br>";
      echo $cars[2][0]."-In stock:".$cars[2][1].",sold:".$cars[2][2]."</br>";
      echo $cars[3][0]."-In stock:".$cars[3][1].",sold:".$cars[3][2]."</br>";
    for($row = 0;$row<4;$row++){
        echo "row number$row";
        echo"<ul>";
        for($col=0;$col<3;$col++){
            echo"<li>".$cars[$row][$col]."</li>";
        }
        echo"</ul>";
    } 
    /*
    ----Sorting Arrays----
    The element in an array can be stored in alphabetical or numerical order ,descending or ascending
    */
    $cars1 = array(
        "Volvo",
        "BMW",
        "Toyota"
        );
       echo sort($cars1);
    ?>
    </body>
</html>
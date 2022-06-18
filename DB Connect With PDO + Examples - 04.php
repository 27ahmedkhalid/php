<?php

$dsn = 'mysql:host=localhost;dbname=test';//data source name

$user = 'root';//user name to connect

$pass = '';//user password 
//$option  = array(
    
    //PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',

);

try{

$db = new PDO($dsn,$user,$pass);//start new connection with PDO class

$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);

//$q = "INSERT INTO item (name) VALUES ('product1')";
//$db->exec($q);

}

catch(PDOException $e){
    echo'Failed'. $e->getMessage();
}
for($i=1, $i <= 500,$i++{
    $stmt = $db->perpare("INSTER INTO '");
})
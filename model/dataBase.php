 <?php
 
 $server = "localhost";
 $dataBase = "app";
 $userName = "Bryan";
 $password = "ByV12@bx2";


 try
 {
    $conectionToDatabase = new PDO("mysql:host=$server;dbname=$dataBase",$userName,$password);
 }
 catch(Exception $err)
 {
    echo $err->getMessage();
 }


 ?>
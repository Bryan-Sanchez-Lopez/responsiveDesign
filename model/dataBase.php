 <?php
 
 $server = "localhost";
 $dataBase = "app";
 $userName = "Bryan";
 $password = "ByV12@bx2";


 try
 {
    $conectionToDatabase = mysqli_connect($server, $userName, $password, $dataBase);
 }
 catch(Exception $err)
 {
    echo $err->getMessage();
 }


 ?>
<?php
$command = "mysql -h localhost -u root";
$conn_mysql  = new PDO("mysql:host=localhost;dbname=test_odbc", "root", "");
var_dump($conn_mysql);



$server_name = "localhost";
$database_name = "newdb";
try
 {
  $conn = new PDO("sqlsrv:Server=$server_name;Database=$database_name;ConnectionPooling=0", "test", "123456789");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{

   echo $e->getMessage();

}


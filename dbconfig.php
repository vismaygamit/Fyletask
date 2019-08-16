<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
try{
 $host        = "host = ec2-54-197-239-115.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = df1oav3abc1noe";
   $credentials = "user = juxpoeblhvsctz password=a289cdfcf54ce0e25c4ac39ab7452b92221a8ae5a9c33cfe2ce69b4fe431e503";
$dbuser="juxpoeblhvsctz";
$dbpass="a289cdfcf54ce0e25c4ac39ab7452b92221a8ae5a9c33cfe2ce69b4fe431e503";
  //$dbh = new PDO("pgsql:host=$host;dbname=$dbname", $dbuser, $dbpass); 
   $db = pg_connect( "$host $port $dbname $credentials") or die("error". pg_affected_error());
   if(!$db) {
      //echo "Error : Unable to open database\n";
   } else {
   //   echo "Opened database successfully\n";
     
      
   }
}
 catch (Exception $err)
 {
    echo $err->getMessage();
 }


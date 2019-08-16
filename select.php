<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'dbconfig.php';

 $result = pg_query($db, "select * from fav");
 $exm=array();
 
 while($row = pg_fetch_array($result))
 {
  $exm[]=$row;
 // echo $row[0];
 // echo json_decode($row."\n");
 //echo $row;
 }
 

//echo $exm;
//echo json_decode($exm."\n");
echo json_encode($exm);

/*
// $connection_string = "host=localhost port=5432 dbname=postgres user=postgres password=1234";
 
 
$dbconn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");


if ($dbconn) {
    echo "Connected to " . pg_host($dbconn);
} else {
    echo "Error in connecting to database.";
}

$result = pg_query($dbconn, "select * from fav");
$arr = pg_fetch_all($result);

echo json_encode($arr);
 */



/*

$con = new mysqli("localhost","root","","bank");


$result = $con->query("select * from fav");

$exm = array();

while ($row = mysqli_fetch_array($result)) {

    $exm[] = $row;
   
}

echo json_encode($exm);
 
 */
?>

<?php

include 'dbconfig.php';

$data = json_decode(file_get_contents("php://input"));
$bifsc = $data[0];
$bid = $data[1];
$branch = $data[2];
$add = $data[3];
$city = $data[4];
$dist = $data[5];
$state = $data[6];
$bankname = $data[7];
echo "<br />";
$sql="insert into fav values('".$bifsc."','".$bid."','".$branch."','".$add."','".$city."','".$dist."','".$state."','".$bankname."')";
echo $result= pg_query($sql);




//MySQL
/*
$con = new mysqli("localhost","root","","bank");

  $data= json_decode(file_get_contents("php://input"));
  $bifsc=$data[0];
  $bid=$data[1];
  $branch=$data[2];
  $add=$data[3];
  $city=$data[4];
  $dist=$data[5];
  $state=$data[6];
  $bankname=$data[7];

  $datainsert= json_encode($data);
  //$bifsc=$bid=$branch=$add=$city=$dist=$state=$bankname="";
  if($datainsert!=NUll)
  {

  $sql=$con->query("insert into fav values('".$bifsc."','".$bid."','".$branch."','".$add."','".$city."','".$dist."','".$state."','".$bankname."')");
  // $sql=$con->query("insert into ang values('".$name."')");
  if($sql==TRUE)
  {
  //echo "Data inserted SuccessFully";


  }
  else
  {
  echo mysqli_error($con);
  echo "fail";

  }
  }
  else
  {
  echo 'empty';
  }
*/
 
?>

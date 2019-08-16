<?php

include 'dbconfig.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$data= json_decode(file_get_contents("php://input"));
  $bifsc=$data[0];
 $datainsert= json_encode($data);
 if($datainsert!=NUll)
  {

  $sql=pg_query("delete from fav where ifsc= '".$bifsc."' ");
  $cmdtuples= pg_affected_rows($sql);
  if($sql==TRUE)
  {
  echo "Data deleted SuccessFully";


  }
  else
  {
  echo pg_errormessage($con);
  echo "fail";

  }
  }
  else
  {
  echo 'empty';
  }
  /*
$con = new mysqli("localhost","root","","bank");

  $data= json_decode(file_get_contents("php://input"));
  $bifsc=$data[0];
  

  $datainsert= json_encode($data);
  //$bifsc=$bid=$branch=$add=$city=$dist=$state=$bankname="";
  if($datainsert!=NUll)
  {

  $sql=$con->query("delete from fav where ifsc= '".$bifsc."' ");
  // $sql=$con->query("insert into ang values('".$name."')");
  if($sql==TRUE)
  {
  echo "Data deleted SuccessFully";


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

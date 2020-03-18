<?php
include 'MySQL.php';
$mysql = new MySQL();
$mysql->connect();
 
$query = "select * from user";
$hasil  =mysql_query($query);
 
 
if(mysql_num_rows($hasil) > 0 ){
  $response = array();
  $response["user"] = array();
  while($x = mysql_fetch_array($hasil)){
    $h['id_user'] = $x["id_user"];
    $h['nama'] = $x["nama"];
    $h['email'] = $x["email"];
    array_push($response["user"], $h);
  }
  echo json_encode($response);
}else {
  $response["message"]="tidak ada data";
  echo json_encode($response);
}
?>
<?php

include_once '../../hots/koneksi.inc';

$res = array('error' => false);

$action = 'read';

if(isset($_GET['action'])){
  $action = $_GET['action'];
}

// MENAMPILKAN DATA ADMIN
if($action == 'readAdmin'){
  $result = $conn->query("SELECT * FROM hots_admin WHERE status = 1 ORDER BY id_fasil");
  $admins = array();

  while($row = $result->fetch_assoc()){
    array_push($admins, $row);
  }

  $res['admins'] = $admins;
}

$conn->close();

header("Content-type: application/json");
echo json_encode($res);
die();

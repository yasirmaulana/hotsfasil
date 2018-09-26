<?php

include_once '../../hots/koneksi.inc';

$res = array('error' => false);

$action = 'read';

if(isset($_GET['action'])){
  $action = $_GET['action'];
}

// MENAMPILKAN DATA GRUP
if($action == 'readGrup'){
  $result = $conn->query("SELECT * FROM view_hots_grup ORDER BY id_fasil");
  $grups = array();

  while($row = $result->fetch_assoc()){
    array_push($grups, $row);
  }

  $res['grups'] = $grups;
}

// MENAMPILKAN DATA ADMIN
if($action == 'readAdmin'){
  $result = $conn->query("SELECT * FROM view_hots_admin ORDER BY id_fasil");
  $admins = array();

  while($row = $result->fetch_assoc()){
    array_push($admins, $row);
  }

  $res['admins'] = $admins;
}

// MENAMPILKAN DATA REVIEWER
if($action == 'readReviewer'){
  $result = $conn->query("SELECT * FROM view_hots_reviewer ORDER BY fasil");
  $reviewers = array();

  while($row = $result->fetch_assoc()){
    array_push($reviewers, $row);
  }

  $res['reviewers'] = $reviewers;
}

// UPDATE DATA ADMIN
if($action == 'updateGrup'){

  $id = $_POST['id'];
  $id_admin = $_POST['id_admin'];
  $id_admin2 = $_POST['id_admin2'];
  $id_reviewer = $_POST['id_reviewer'];
  $id_reviewer2 = $_POST['id_reviewer2'];

  $result = $conn->query("UPDATE hots_grup set id_admin = $id_admin, id_admin2 = $id_admin2, id_reviewer = $id_reviewer, id_reviewer2 = $id_reviewer2 WHERE id = $id");

  $cek = "UPDATE hots_grup set id_admin = $id_admin, id_admin2 = $id_admin2, id_reviewer = $id_reviewer, id_reviewer2 = $id_reviewer2 WHERE id = $id";

  if($result){
    $res['message'] = "laporan berhasil tersimpan";
  } else {
    $res['error'] = $cek;
  }

}

$conn->close();

header("Content-type: application/json");
echo json_encode($res);
die();

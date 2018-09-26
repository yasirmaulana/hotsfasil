<?php

include_once '../../hots/koneksi.inc';

$res = array('error' => false);

$action = 'read';

if(isset($_GET['action'])){
  $action = $_GET['action'];
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

// MENAMPILKAN DATA FASIL
if($action == 'readFasil'){
  $result = $conn->query("SELECT * FROM hots_fasil ORDER BY nama");
  $fasils = array();

  while($row = $result->fetch_assoc()){
    array_push($fasils, $row);
  }

  $res['fasils'] = $fasils;
}

// MENYIMPAN DATA REVIEWER
if($action == 'saveNewReviewer'){

  $nama = $_POST['nama'];
  $nomorWA1 = $_POST['nomorWA1'];
  $nomorWA2 = $_POST['nomorWA2'];
  $id_fasil = $_POST['id_fasil'];

  $result = $conn->query("INSERT INTO hots_reviewer(nama, nomorWA, nomorWA2, id_fasil) VALUES ('$nama', '$nomorWA1', '$nomorWA2', '$id_fasil')");

  $cek = "INSERT INTO hots_reviewer(nama, nomorWA, nomorWA2, id_fasil) VALUES ('$nama', '$nomorWA1', '$nomorWA2', '$id_fasil')";

  if($result){
    $res['message'] = "laporan berhasil tersimpan";
  } else {
    $res['error'] = $cek;
  }

}

// UPDATE DATA ADMIN
if($action == 'updateReviewer'){

  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $nomorWA1 = $_POST['nomorWA'];
  $nomorWA2 = $_POST['nomorWA2'];
  $status = $_POST['status'];

  $result = $conn->query("UPDATE hots_reviewer set nama = '$nama', nomorWA = '$nomorWA1', nomorWA2 = '$nomorWA2', status = $status WHERE id = $id");

  // $cek = "UPDATE hots_admin set nama = `$nama`, nomorWA = `$nomorWA1`, nomorWA2 = `$nomorWA2`, status = `$status` WHERE id = `$id`";

  if($result){
    // $res['message'] = "laporan berhasil tersimpan";
  } else {
    // $res['error'] = $cek;
  }

}


$conn->close();

header("Content-type: application/json");
echo json_encode($res);
die();

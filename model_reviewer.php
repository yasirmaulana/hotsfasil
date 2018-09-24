<?php

include_once '../../hots/koneksi.inc';

$res = array('error' => false);

$action = 'read';

if(isset($_GET['action'])){
  $action = $_GET['action'];
}

// MENAMPILKAN DATA REVIEWER
if($action == 'readReviewer'){
  $result = $conn->query("SELECT * FROM hots_reviewer ORDER BY id_fasil");
  $reviewers = array();

  while($row = $result->fetch_assoc()){
    array_push($reviewers, $row);
  }

  $res['reviewers'] = $reviewers;
}

// MENYIMPAN DATA REVIEWER
if($action == 'saveNewReviewer'){

  $nama = $_POST['nama'];
  $nomorWA1 = $_POST['nomorWA1'];
  $nomorWA2 = $_POST['nomorWA2'];

  $result = $conn->query("INSERT INTO hots_reviewer(nama, nomorWA, nomorWA2) VALUES ('$nama', '$nomorWA1', '$nomorWA2')");

  // $cek = "INSERT INTO hots_admin(nama, nomorWA, nomorWA2) VALUES ('$nama', '$nomorWA1', '$nomorWA2')";

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

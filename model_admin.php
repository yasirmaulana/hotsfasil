<?php

include_once '../../hots/koneksi.inc';

$res = array('error' => false);

$action = 'read';

if(isset($_GET['action'])){
  $action = $_GET['action'];
}

// MENAMPILKAN DATA ADMIN
if($action == 'readAdmin'){
  $result = $conn->query("SELECT * FROM hots_admin ORDER BY id_fasil");
  $admins = array();

  while($row = $result->fetch_assoc()){
    array_push($admins, $row);
  }

  $res['admins'] = $admins;
}

// MENYIMPAN DATA ADMIN
if($action == 'saveNewAdmin'){

  $nama = $_POST['nama'];
  $nomorWA1 = $_POST['nomorWA1'];
  $nomorWA2 = $_POST['nomorWA2'];

  $result = $conn->query("INSERT INTO hots_admin(nama, nomorWA, nomorWA2) VALUES ('$nama', '$nomorWA1', '$nomorWA2')");

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

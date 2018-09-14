<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lis Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div id="selectAdmin">
    <div class="container" style="margin-top: 10px;margin-bottom: 30px">
      <!-- {{this.arrAdmin}} -->
      <h2>Lis Admin</h2>
      Pastikan untuk meng-update data Admin, jika ada perubahan data
      <a type="button" class="btn btn-success" href="/hots/hotsfasil/view_addAdmin.php" style="float: right">add Admin</a>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor WA</th>
            <th>Nomor WA2</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="admin in this.arrAdmin">
            <td>{{admin.id}}</td>
            <td>{{admin.nama}}</td>
            <td>{{admin.nomorWA}}</td>
            <td>{{admin.nomorWA2}}</td>
            <td><button type="button" class="btn btn-warning">update</button></td>
            <td><button type="button" class="btn btn-danger">delete</button></td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
  <!-- <script type="text/javascript" src="../sweetalert.js"></script>
  <script type="text/javascript" src="../axios.js"></script>
  <script type="text/javascript" src="../vue.js"></script> -->
  <script type="text/javascript" src="controller_selectAdmin.js"></script>
</body>
</html>

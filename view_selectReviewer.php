<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lis Reviewer</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div id="selectReviewer">
    <div class="container" style="margin-top: 10px;margin-bottom: 30px">
      <!-- {{this.arrReviewer}} -->
      <h2>Lis Reviewer</h2>
      Pastikan untuk meng-update data Reviewer, jika ada perubahan data <br><br>
      <a type="button" class="btn btn-success" href="/hots/hotsfasil/view_addReviewer.php">add Reviewer</a>
      <a type="button" class="btn btn-info" href="/hots/hotsfasil/">back</a>
      <table class="table table-hover">
        <thead>
          <tr>
            <!-- <th>ID</th> -->
            <th>Nama</th>
            <th>Nomor WA</th>
            <!-- <th>Nomor WA2</th> -->
            <th>Status</th>
            <th>Update</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="reviewer in this.arrReviewer">
            <!-- <td>{{admin.id}}</td> -->
            <td>{{reviewer.nama}}</td>
            <td>{{reviewer.nomorWA}}</td>
            <!-- <td>{{admin.nomorWA2}}</td> -->
            <td>{{reviewer.status}}</td>
            <td><button type="button" class="btn btn-warning">update</button></td>
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
  <script type="text/javascript" src="controller_selectReviewer.js"></script>
</body>
</html>

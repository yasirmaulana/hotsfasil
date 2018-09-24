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
  <div id="selectGrup">
    <div class="container" style="margin-top: 10px;margin-bottom: 30px">
      <!-- {{this.arrGrup}} -->
      <h2>Lis Grup</h2>
      Pastikan untuk meng-update data Grup, jika ada perubahan data <br><br>
      <a type="button" class="btn btn-info" href="/hots/hotsfasil/">back</a>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>No Grup</th>
            <th>Surah</th>
            <th>Admin</th>
            <th>Admin2</th>
            <th>Reviewer</th>
            <th>Reviewer2</th>
            <th>Fasil</th>
            <th>Update</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="grup in this.arrGrup">
            <td>{{grup.nomor_grup}}</td>
            <td>{{grup.surah}}</td>
            <td>{{grup.admin}}</td>
            <td>{{grup.admin2}}</td>
            <td>{{grup.reviewer}}</td>
            <td>{{grup.reviewer2}}</td>
            <td>{{grup.fasil}}</td>
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
  <script type="text/javascript" src="controller_selectGrup.js"></script>
</body>
</html>

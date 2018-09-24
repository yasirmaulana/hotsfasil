<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form Admin Update</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div id="selectAdmin">
    <div class="container" style="margin-top: 10px;margin-bottom: 30px">
      <div class="row">

          {{this.adminSelected}}
          <!-- <div class="col-xs-12 col-sm-12 col-lg-12">
            <h3>Form Admin Update</h3>
            <br>
            <form>
              <div class="form-group">
                <label for="nm">Nama :</label>
                <input id="nm" type="text" class="form-control" v-model="newAdmin.nama">
              </div>
              <div class="form-group">
                <label for="wa1">Nomor WA 1 :</label>
                <input id="wa1" type="text" class="form-control" v-model="newAdmin.nomorWA1">
              </div>
              <div class="form-group">
                <label for="wa2">Nomor WA 2 (optional) :</label>
                <input id="wa2" type="text" class="form-control" v-model="newAdmin.nomorWA2">
              </div>

              <a class="btn btn-success" type="submit" name="action" @click="saveNewAdmin()">add Admin</a>
              <a type="button" class="btn btn-info" href="view_selectAdmin.php">cancel</a>
            </form>
          </div> -->

      </div>
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

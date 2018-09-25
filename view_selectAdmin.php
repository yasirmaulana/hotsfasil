<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lis Admin</title>
  <link rel="shortcut icon" href="http://localhost/hots/images/hots1_GcT_icon.ico"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div id="selectAdmin">
    <div class="container" style="margin-top: 10px;margin-bottom: 30px">
      <!-- {{this.arrAdmin}} -->
      <!-- {{this.adminSelected}} -->
      <h2>Lis Admin</h2>
      Pastikan untuk meng-update data Admin, jika ada perubahan data <br><br>
      <a type="button" class="btn btn-success" href="/hots/hotsfasil/view_addAdmin.php">add Admin</a>
      <a type="button" class="btn btn-info" href="/hots/hotsfasil/">back to menu</a>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor WA</th>
            <th>Nomor WA2</th>
            <th>Status</th>
            <th>Fasil</th>
            <th>Update</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="admin in this.arrAdmin">
            <td>{{admin.id}}</td>
            <td>{{admin.nama}}</td>
            <td>{{admin.nomorWA}}</td>
            <td>{{admin.nomorWA2}}</td>
            <td>{{admin.status2}}</td>
            <td>{{admin.fasil}}</td>
            <td>
              <!-- <button type="button" class="btn btn-warning" @click="getAdminSelected(admin)">update</button> -->
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal" @click="getAdminSelected(admin)">update</button>

              <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Update data Admin</h4>
                    </div>
                    <div class="modal-body">
                      <!-- {{adminSelected}} -->
                      <form>
                        <div class="form-group">
                          <label for="id">Id</label>
                          <input id="id" type="text" class="form-control" v-model="adminSelected.id" disabled>
                        </div>
                        <div class="form-group">
                          <label for="nm">Nama :</label>
                          <input id="nm" type="text" class="form-control" v-model="adminSelected.nama">
                        </div>
                        <div class="form-group">
                          <label for="wa1">Nomor WA 1 :</label>
                          <input id="wa1" type="text" class="form-control" v-model="adminSelected.nomorWA">
                        </div>
                        <div class="form-group">
                          <label for="wa2">Nomor WA 2 (optional) :</label>
                          <input id="wa2" type="text" class="form-control" v-model="adminSelected.nomorWA2">
                        </div>
                        <div class="form-group">
                          <label for="st">Status</label>
                          <select class="form-control" v-model="adminSelected.status">
                            <option value="1">aktif</option>
                            <option value="0">pasif</option>
                          </select>
                        </div>

                        <!-- <a class="btn btn-success" type="submit" name="action" @click="saveNewAdmin()">add Admin</a> -->
                        <!-- <a type="button" class="btn btn-info" href="view_selectAdmin.php">cancel</a> -->
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-success" @click="updateAdmin()"  data-dismiss="modal">save</button>
                      <button type="button" class="btn btn-info" data-dismiss="modal">cancel</button>
                    </div>
                  </div>

                </div>
              </div>

            </td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue-router/3.0.1/vue-router.min.js"></script> -->
  <!-- <script type="text/javascript" src="../sweetalert.js"></script> -->
  <!-- <script type="text/javascript" src="../axios.js"></script> -->
  <!-- <script type="text/javascript" src="../vue.js"></script> -->
  <script type="text/javascript" src="controller_selectAdmin.js"></script>
</body>
</html>

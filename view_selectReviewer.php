<!DOCTYPE html>
<html lang="en">
<head>
  <title>Manage Reviewer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="http://hots.kauny.com/images/hots.ico"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://hots.kauny.com">
        Hafizh on the Street
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="#">Home</a></li> -->
        <li><a href="view_selectAdmin.php">Manage Admin</a></li>
        <li><a href="view_selectReviewer.php">Manage Reviewer</a></li>
        <li><a href="view_selectGrup.php">Manage Grup</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div id="selectReviewer">
      <div class="container">
        <!-- {{this.arrAdmin}} -->
        <!-- {{this.adminSelected}} -->
        <div style="float: left; text-align: left; margin-top: 50px">
          <h2>Lis Reviewer</h2>
          Pastikan untuk meng-update data reviewer, jika ada perubahan data <br><br>
          <a type="button" class="btn btn-success" href="../hotsfasil/view_addReviewer.php">add Reviewer</a>
          <a type="button" class="btn btn-info" href="../hotsfasil/">back to forward</a>
        </div>

        <table class="table table-hover" style="text-align: left;">
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
            <tr v-for="reviewer in this.arrReviewer">
              <td>{{reviewer.id}}</td>
              <td>{{reviewer.nama}}</td>
              <td>{{reviewer.nomorWA}}</td>
              <td>{{reviewer.nomorWA2}}</td>
              <td>{{reviewer.status2}}</td>
              <td>{{reviewer.fasil}}</td>
              <td>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal" @click="getReviewerSelected(reviewer)">update</button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update data Reviewer</h4>
                      </div>
                      <div class="modal-body">
                        <!-- {{reviewerSelected}} -->
                        <form>
                          <div class="form-group">
                            <label for="id">Id</label>
                            <input id="id" type="text" class="form-control" v-model="reviewerSelected.id" disabled>
                          </div>
                          <div class="form-group">
                            <label for="nm">Nama :</label>
                            <input id="nm" type="text" class="form-control" v-model="reviewerSelected.nama">
                          </div>
                          <div class="form-group">
                            <label for="wa1">Nomor WA 1 :</label>
                            <input id="wa1" type="text" class="form-control" v-model="reviewerSelected.nomorWA">
                          </div>
                          <div class="form-group">
                            <label for="wa2">Nomor WA 2 (optional) :</label>
                            <input id="wa2" type="text" class="form-control" v-model="reviewerSelected.nomorWA2">
                          </div>
                          <div class="form-group">
                            <label for="st">Status</label>
                            <select class="form-control" v-model="reviewerSelected.status"> -->
                              <option value="1">aktif</option>
                              <option value="0">pasif</option>
                            </select>
                          </div>

                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-success" @click="updateReviewer()"  data-dismiss="modal">save</button>
                        <button type="button" class="btn btn-info" data-dismiss="modal">cancel</button>
                      </div>
                    </div>

                  </div>
                </div>

              </td>
            </tr>
          </tbody>
        </table>

        <footer class="container-fluid text-center">
          <p>Footer Text</p>
        </footer>
      </div>
    </div>

  </div>
</div>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue-router/3.0.1/vue-router.min.js"></script> -->
  <!-- <script type="text/javascript" src="../sweetalert.js"></script> -->
  <!-- <script type="text/javascript" src="../axios.js"></script> -->
  <!-- <script type="text/javascript" src="../vue.js"></script> -->
  <script type="text/javascript" src="controller_selectReviewer.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form Menambahkan Admin</title>
  <link rel="shortcut icon" href="http://hots.kauny.com/images/hots.ico"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div id="selectGrup">
    <div class="container" style="margin-top: 10px;margin-bottom: 30px">
      <div class="row">
          {{getGrupSelected}}
          <div class="col-xs-12 col-sm-12 col-lg-12">
            <h3>Form Update Grup</h3>
            <br>
            <form>
              <div class="form-group">
                <label for="ng">Nomor Grup :</label>
                <input id="ng" type="text" class="form-control" v-model="grupSelected.nomor_grup" disabled>
              </div>
              <div class="form-group">
                <label for="sr">Surah :</label>
                <input id="sr" type="text" class="form-control" v-model="grupSelected.surah" disabled>
              </div>
              <div class="form-group">
                <label for="st">Admin 1 - Fasil:</label>
                <select class="form-control" v-model="grupSelected.id_admin">
                  <option v-for="admin in arrAdmin" :value="admin.id">{{admin.nama}} - {{admin.fasil}}</option>
                </select>
              </div>
              <div class="form-group">
                <label for="st">Admin 2 - Fasil:</label>
                <select class="form-control" v-model="grupSelected.id_admin2">
                  <option v-for="admin in arrAdmin" :value="admin.id">{{admin.nama}} - {{admin.fasil}}</option>
                </select>
              </div>
              <div class="form-group">
                <label for="st">Reviewer 1 - Fasil:</label>
                <select class="form-control" v-model="grupSelected.id_reviewer">
                  <option v-for="reviewer in arrReviewer" :value="reviewer.id">{{reviewer.nama}} - {{reviewer.fasil}}</option>
                </select>
              </div>
              <div class="form-group">
                <label for="st">Reviewer 2 - Fasil:</label>
                <select class="form-control" v-model="grupSelected.id_reviewer2">
                  <option v-for="reviewer in arrReviewer" :value="reviewer.id">{{reviewer.nama}} - {{reviewer.fasil}}</option>
                </select>
              </div>

              <a class="btn btn-success" type="submit" name="action" @click="" >add Admin</a>
              <a type="button" class="btn btn-info" href="view_selectGrup.php">back to list</a>
            </form>
          </div>

      </div>
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

// var url = "http://hots.kauny.com/hotsfasil/model_admin.php?action="
var url = "http://localhost/hots/hotsfasil/model_admin.php?action="
var app = new Vue({
  el: "#addAdmin",

  data: {
    arrFasil: [],
    newAdmin: {
      id_fasil: '',
      nama: '',
      nomorWA1: '',
      nomorWA2: '',
    },
  },

  mounted: function(){
    this.getFasil()
  },

  methods: {
    getFasil: function () {
      axios.get(url+"readFasil")
       .then(function(response){
         app.arrFasil = response.data.fasils
         // console.log('>>>>>>>>>>>>> admin',app.arrFasil)
       })
       .catch(function(error){
         // console.log('============',error)
       })
    },

    validasiForm: function () {
      let cekWA1 = this.newAdmin.nomorWA1.match(/[^0-9]/g)
      let cekWA2 = this.newAdmin.nomorWA2.match(/[^0-9]/g)

      if (this.newAdmin.id_fasil === '') {
        swal({
          icon: 'error',
          title: 'Oops',
          text: 'Fasil wajib diisi'
        })
        return false
      } else if (this.newAdmin.nama === '') {
        swal({
          icon: 'error',
          title: 'Oops',
          text: 'Nama wajib diisi'
        })
        return false
      } else if (cekWA1) {
        swal({
          icon: 'error',
          title: 'Oops',
          text: 'isian nomor Whatsapp 1 tidak boleh selain angka'
        })
        return false
      } else if (this.newAdmin.nomorWA1.length < 10) {
        swal({
          icon: 'error',
          title: 'Oops',
          text: 'Isian nomor Whatsapp 1 minimal 10 digit'
        })
        return false
      } else {
        return true
      }
    },

    toFormdata: function(obj){
      var form_data = new FormData()
      for(var key in obj){
        form_data.append(key, obj[key])
      }
      return form_data;
    },

    saveNewAdmin: function(){
      let cek = this.validasiForm()
      if(cek){
        var formData = this.toFormdata(this.newAdmin)
        axios.post(url+"saveNewAdmin", formData)
          .then(function(response){
            swal('Menambahkan Admin Baru', 'Berhasil diinput', 'success')
            // console.log(response)
          })
          .catch(function(error){
            swall({
              icon: 'error',
              title: 'Oops...',
              text: 'Proses input gagal...'
            })
          })
      }
    }


  }

})

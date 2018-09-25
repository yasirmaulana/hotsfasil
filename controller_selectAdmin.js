var url = "http://localhost/hots/hotsfasil/model_admin.php?action="
var app = new Vue({
  el: "#selectAdmin",

  data: {
    arrAdmin: [],
    adminSelected: {},
  },

  mounted: function(){
    this.getAdmin()
  },

  methods: {
    getAdmin: function(){
      axios.get(url+"readAdmin")
       .then(function(response){
         app.arrAdmin = response.data.admins
         // console.log('>>>>>>>>>>>>> admin',this.arrAdmin)
       })
       .catch(function(error){
         // console.log('============',error)
       })
    },

    getAdminSelected: function(objAdmin){
      this.adminSelected = objAdmin
    },

    // validasiForm: function () {
    //   let cekWA1 = this.adminSelected.nomorWA.match(/[^0-9]/g)
    //   let cekWA2 = this.adminSelected.nomorWA2.match(/[^0-9]/g)
    //
    //   if (this.adminSelected.nama === '') {
    //     swal({
    //       icon: 'error',
    //       title: 'Oops',
    //       text: 'Nama wajib diisi'
    //     })
    //     return false
    //   } else if (cekWA1) {
    //     swal({
    //       icon: 'error',
    //       title: 'Oops',
    //       text: 'isian nomor Whatsapp 1 tidak boleh selain angka'
    //     })
    //     return false
    //   } else if (this.adminSelected.nomorWA.length < 10) {
    //     swal({
    //       icon: 'error',
    //       title: 'Oops',
    //       text: 'nomor Whatsapp minimal 10 digit'
    //     })
    //     return false
    //   } else {
    //     return true
    //   }
    // },

    toFormdata: function(obj){
      var form_data = new FormData()
      for(var key in obj){
        form_data.append(key, obj[key])
      }
      return form_data;
    },

    updateAdmin: function(){
      // let cek = this.validasiForm()
      // if(cek){
        var formData = this.toFormdata(this.adminSelected)
        // console.log('>>>>>>>>>>>>>>>',formData)
        axios.post(url+"updateAdmin", formData)
          .then(function(response){
            swal('Update Admin', 'Berhasil diperbaharui', 'success')
            // console.log(response)
            
          })
          .catch(function(error){
            swall({
              icon: 'error',
              title: 'Oops...',
              text: 'Proses update gagal...'
            })
          })
      // }
    }

  }

})

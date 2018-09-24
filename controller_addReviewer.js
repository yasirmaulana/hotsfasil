var url = "http://localhost/hots/hotsfasil/model_admin.php?action="
var app = new Vue({
  el: "#addReviewer",

  data: {
    newReviewer: {
      nama: '',
      nomorWA1: '',
      nomorWA2: '',
    },
  },

  mounted: function(){
    // this.getReviewer()
    // this.getSurah()
  },

  methods: {
    validasiForm: function () {
      let cekWA1 = this.newReviewer.nomorWA1.match(/[^0-9]/g)
      let cekWA2 = this.newReviewer.nomorWA2.match(/[^0-9]/g)

      if (this.newReviewer.nama === '') {
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
      } else if (this.newReviewer.nomorWA1.length < 10) {
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

    saveNewReviewer: function(){
      let cek = this.validasiForm()
      if(cek){
        // console.log('dodododododdod')
        var formData = this.toFormdata(this.newReviewer)
        axios.post(url+"saveNewReviewer", formData)
          .then(function(response){
            swal('Menambahkan Reviewer Baru', 'Berhasil diinput', 'success')
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

// var url = "http://hots.kauny.com/hotsfasil/model_admin.php?action="
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

    toFormdata: function(obj){
      var form_data = new FormData()
      for(var key in obj){
        form_data.append(key, obj[key])
      }
      return form_data;
    },

    updateAdmin: function(){
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
    }

  }

})

// var url = "http://hots.kauny.com/hotsfasil/model_grup.php?action="
var url = "http://localhost/hots/hotsfasil/model_grup.php?action="
var app = new Vue({
  el: "#selectGrup",

  data: {
    arrGrup: [],
    grupSelected: {},
    arrAdmin: [],
    arrReviewer: []
  },

  mounted: function(){
    this.getGrup()
  },

  methods: {
    getGrup: function(){
      axios.get(url+"readGrup")
       .then(function(response){
         app.arrGrup = response.data.grups
         // console.log('>>>>>>>>>>>>> admin',this.arrReviewer)
       })
       .catch(function(error){
         // console.log('============',error)
       })
    },

    getGrupSelected: function(objGrup){
      this.grupSelected = objGrup
    },

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

    getReviewer: function(){
      axios.get(url+"readReviewer")
       .then(function(response){
         app.arrReviewer = response.data.reviewers
         // console.log('>>>>>>>>>>>>> admin',this.arrReviewer)
       })
       .catch(function(error){
         // console.log('============',error)
       })
    },

    getAdminReviewer: function(){
      this.getAdmin()
      this.getReviewer()
    },

    toFormdata: function(obj){
      var form_data = new FormData()
      for(var key in obj){
        form_data.append(key, obj[key])
      }
      return form_data;
    },

    updateGrup: function(){
      var formData = this.toFormdata(this.grupSelected)
      // console.log('>>>>>>>>>>>>>>>',formData)
      axios.post(url+"updateGrup", formData)
        .then(function(response){
          swal('Update Grup', 'Berhasil diperbaharui', 'success')
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

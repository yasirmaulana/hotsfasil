var url = "http://localhost/hots/hotsfasil/model_admin.php?action="
var app = new Vue({
  el: "#selectAdmin",

  data: {
    arrAdmin: [],
    adminSelected: {'dodol': 'asik'}
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
      // alert(adminSelected.nama)
    }

  }

})

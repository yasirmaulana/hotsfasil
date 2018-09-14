var url = "http://localhost/hots/hotsfasil/model_selectAdmin.php?action="
var app = new Vue({
  el: "#selectAdmin",

  data: {
    arrAdmin: [],

  },

  mounted: function(){
    this.getAdmin()
  },

  methods: {
    getAdmin: function(){
      console.log("dodol banget si inih>>>>");
      axios.get(url+"readAdmin")
       .then(function(response){
         app.arrAdmin = response.data.admins
         console.log('>>>>>>>>>>>>> admin',this.arrAdmin)
       })
       .catch(function(error){
         console.log('============',error)
       })
    },


  }

})

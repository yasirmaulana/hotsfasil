var url = "http://localhost/hots/hotsfasil/model_grup.php?action="
var app = new Vue({
  el: "#selectGrup",

  data: {
    arrGrup: [],

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


  }

})

var url = "http://localhost/hots/hotsfasil/model_reviewer.php?action="
var app = new Vue({
  el: "#selectReviewer",

  data: {
    arrReviewer: [],

  },

  mounted: function(){
    this.getReviewer()
  },

  methods: {
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


  }

})

// var url = "http://hots.kauny.com/hotsfasil/model_reviewer.php?action="
var url = "http://localhost/hots/hotsfasil/model_reviewer.php?action="
var app = new Vue({
  el: "#selectReviewer",

  data: {
    arrReviewer: [],
    reviewerSelected: {},
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

    getReviewerSelected: function(objAdmin){
      this.reviewerSelected = objAdmin
    },

    toFormdata: function(obj){
      var form_data = new FormData()
      for(var key in obj){
        form_data.append(key, obj[key])
      }
      return form_data;
    },

    updateReviewer: function(){
      var formData = this.toFormdata(this.reviewerSelected)
      // console.log('>>>>>>>>>>>>>>>',formData)
      axios.post(url+"updateReviewer", formData)
        .then(function(response){
          swal('Update Reviewer', 'Berhasil diperbaharui', 'success')
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

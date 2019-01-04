$(document).ready(function () {
    //var base_url='http://localhost/jay_school/';
    var base_url = window.location.origin + '/';
   $('#teachers_form').on('submit',function () {
       var datas=$(this).serialize();
       var url=base_url+'home/processTeachers/';
       $.ajax({
           type: 'POST',
           url: url,
           dataType: 'json',
           data: datas,
           success: function(res) {
               alert(res.message);
           }
       });
   })
});
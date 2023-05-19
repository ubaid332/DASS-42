


$("#submitForm").append('<input type="hidden" name="cat_id" >');

$(document).ready(function () {
 $(".btn-md").click(function(){
   $("input").val("");
   $(".nameErr").html("")
   $(".modal-header > h5").html('Add Category')
   
 });


$(".addRecord").click(function(e){
    e.preventDefault();
    var form = $('#submitForm')[0];
    var data = new FormData(form);
    $(".nameErr").html(""); 
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        type: "POST",
        enctype: "multipart/form-data",
        url: "/dashboard/category",
        enctype: 'multipart/form-data',
        data: data,
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
            console.log(response);
            if(response.status == 400){
                $(".nameErr").html(response.errors.name)
                
            }else{
                $(".nameErr").html(""); 
                $("#table").DataTable().ajax.reload();
                $("#add_category").modal('hide');
                toastr.success(response.message, 'Notification');
            }
        }
    });
    
})
})


$("body").on("click", ".update2", function () {
    $("#" + $(this).data("modal")).modal("toggle");
    $(".modal-header > h5").html('Edit Category')  
    $("input[name=name]").val($(this).data("name"));
    $("input[name=cat_id]").val($(this).data("id"));
    $(".nameErr").html("")
   
});

 // -------------Delete-----------------
 $('body').on('click', '.delete', function (){
    var id = $(this).data("id");
   

  $.ajaxSetup({
  headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
  },
});
swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this record!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
     $.ajax({
     type: "DELETE",
     url: "/dashboard/category/" + id,
     dataType: "json",
     success: function (response) {
      console.log(response);
   if (response.status == 200) {
       $("#table").DataTable().ajax.reload();
   }
},
});
      swal("Poof! Your record has been deleted!", {
          icon: "success",
      });
  }
});

});


function getStatus(val,id){
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
      });
    $.ajax({
        url: "/dashboard/category_status",
        type: "POST",
        data: {id : id, status:val},
        success: function(response) {
            console.log("success", response);
            $("#table").DataTable().ajax.reload();
            toastr.success(response.message, 'Notification');
           
        },
      });
    
 
 }
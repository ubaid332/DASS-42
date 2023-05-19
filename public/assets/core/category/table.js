$('#table').DataTable({
    "processing": true,
    "serverSide": true,
    "order": [],
    
   ajax:{ 
       type: "GET",
       url: "/dashboard/category",
       },
      columns: [            
       {title:"#",  
       data: 'DT_RowIndex',
       orderable: false, 
       searchable: false
       },
       {title:"Name",data: 'name', name: 'name'},
       {
        title:"Status",
        render: function(data,type, row, meta){
            if(row.status == "active"){
                // return '<span class="outline-badge green">Active</span>'
                return  '<select id="box" name="status"  class="outline-badge green" data-style="warning" onChange="getStatus(this.value,'+row.id+');"><option value="active" selected="selected" >Active</option><option value="inactive">In active</option></select>';
            }else{
                return  '<select id="box" name="status"  class="outline-badge red" data-style="warning" onChange="getStatus(this.value,'+row.id+');"><option value="active">Active</option><option value="inactive" selected="selected">In active</option></select>';
            }
        }
       },
       {title:"created_at", data: 'created_at', name: 'created_at'},
       {
       
        title: "Action",
        render: function (data, type, row, meta) {
            return (
                '<a href="javascript:void(0)" class="delete btn btn-danger btn-sm mt-2" data-toggle="tooltip" title="evaluation" data-id="' +
                row.id +
                '" data-table="evaluation-table" data-original-title="Delete Record"><i class="mdi mdi-delete-forever" ></i></a>' +
                '<a href="javascript:void(0)" class="update2 mt-2 btn btn-info btn-sm" data-toggle="tooltip" title="Edit Category" data-id="' +
                row.id +
                '" data-name="'+row.name+'" data-table="evaluation-table" data-modal="add_category" data-original-title="Update Record"><i class="mdi mdi-pencil-box-outline" ></i></a>'
            );  
        },
        orderable: false,
        searchable: false,
       }
       
    ],
   
    
});  

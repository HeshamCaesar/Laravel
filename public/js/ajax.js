$(document).on('click','.Add-Blog',function()
{ 
$.ajax({
    type:'GET',
    url:'/blogs/create',
    success:function(res){
           
            $('#modal-AddBlog .modal-body').html(res);
    }})

}
);
function getAllBLogs()
{
    
    $.ajax({
        type:'GET',
        url:'/blogs/ajax/table',
        success:function(res){
            $('#blog-content').html(res);
        }
    })
}
$(document).on('submit','#modal-AddBlog form',function(e){
    e.preventDefault();
    const action = $(this).attr('action');
    let form = new FormData($(this)[0]);

    $.ajax({
        type:'POST',
        url: action,
        processData:false,
        contentType:false,
        data: form,
        success:function(res){
            getAllBLogs();
            $('#modal-AddBlog').modal('hide');
        }
    })

});
$(document).on('click','#show-Blog',function(){
    const blogId = $(this).attr('blog_id');
    $.ajax({
        type:'GET',
        url:'/blogs/show/'+blogId,
        success:function(res){
            $('#modal-showBlog .modal-body').html(res);
        }
    })
});

$(document).on('click','.editBlog',function () {
    const blogId=$(this).attr('blog_id');
    const route = $(this).attr('url');
    $.ajax({
        type: 'GET',
        url:'/blogs/edit/'+blogId,
        success: function (res) {
            $('#modal-editBlog .modal-body').html(res);
            $('#updateBlog').attr('action',route);
        }
    })
});
$(document).on('submit','#modal-editBlog form',function(e){
    e.preventDefault();
    const action = $(this).attr('action');
    console.log(action);
    let form = new FormData($(this)[0]);

    $.ajax({
        type:'POST',
        url: action,
        processData:false,
        contentType:false,
        data: form,
        success:function(res){
            getAllBLogs();
            $('#modal-editBlog').modal('hide');
        }
    })

});
$(document).on('click', '.delete', function(){
    var id = $(this).attr('blog_id');
    if(confirm("Are you sure you want to Delete this data?"))
    {
        $.ajax({
            url:"{{route('blog.destroy')}}",
            mehtod:"get",
            data:{id:id},
            success:function(data)
            {
                alert(data);
                $('#blog-table').DataTable().ajax.reload();
            }
        })
    }
    else
    {
        return false;
    }
}); 
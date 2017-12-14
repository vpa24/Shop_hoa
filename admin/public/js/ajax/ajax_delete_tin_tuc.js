function deleteAjax(id){
    if(confirm('Đồng ý xóa')){
        $.ajax({
        type:'post',
        url:'models/delete_tin_tuc.php',
        data:{delete_id:id},
        success:function(data){
            $('#delete'+id).hide('slow');
        }
        })
    }
    }

function deleteAjax(id){
    if(confirm('Đồng ý xóa')){
        $.ajax({
        type:'post',
        url:'models/delete_loai_hoa.php',
        data:{delete_id:id},
        success:function(data){
            $('#delete'+id).hide('slow');
        }
        })
    }
    }
    
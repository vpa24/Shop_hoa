$(document).ready(function(){
  phantrang(1);
  var maloai=0;
  function phantrang(page)
  {
      $.ajax({
          type:'post',
          url:'ajax_danh_sach_hoa.php',
          data:{page:page},
          success:function(data){
              $('#ds_hoa').html(data);
              $("#"+page).addClass('active');
      }
    })
  }
  function doctheoMaLoai(maloai,page){
    $.ajax({
        type:'post',
        url:'ajax_danh_sach_hoa.php',
        data:{maloai:maloai,page:page},
        success:function(data){
            $('#ds_hoa').html(data);
            $("#"+page).addClass('active');
    }
  })
  }
  //click vao link phan trang
  $(document).on('click','.pagination_link',function(){
    var page=$(this).attr("id");
    phantrang(page)
    if(maloai!=0){
        doctheoMaLoai(maloai,page);
    }
    $("html, body").animate({ scrollTop:250 }, "fast");
  });
  //ma loai
  $(document).on('click','.maLoai',function(){
    chuoi_maloai=$(this).attr("id");
    maloai=chuoi_maloai.replace('maloai_','');
    doctheoMaLoai(maloai,1);
    $("html, body").animate({ scrollTop:250 }, "fast");
  });
});

$(document).ready(function(){
  phantrang(1);
  function phantrang(page)
  {
      $.ajax({
          type:'post',
          url:'ajax_danh_sach_hoa.php',
          data:{page:page},
          success:function(data){
            console.log(page);
              $('#ds_hoa').html(data);
              $("#"+page).addClass('active');
      }
    })
  }
  $(document).on('click','.pagination_link',function(){
    var page=$(this).attr("id");

    phantrang(page);
    $("html, body").animate({ scrollTop:250 }, "fast");
  });
});

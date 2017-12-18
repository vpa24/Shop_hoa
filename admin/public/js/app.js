$(document).ready(function(){
  $.ajax({
    url:"so_luong_loai_hoa.php",
    method:"GET",
    success:function(data){
      console.log(data);
      var ten=[];
      var soluong=[];
      var obj=jQuery.parseJSON(data);
      for(var i in obj){
        ten.push("Tên loại: " + obj[i].TenLoai);
        soluong.push(obj[i].so_luong);
      };
      var chardata={
        labels:ten,
        datasets:[
          {
            label:'Số lượng',
            backgroundColor:'rgba(200,200,200,0.75)',
            borderColor:'rgba(200,200,200,0.75)',
            hoverBackgroundColor:'rgba(200,200,200,1)',
            hoverBorderColor:'rgba(200,200,200,1)',
            data:soluong
          }
        ]
      };
      var ctx=$('#myCanvas');
      var barGraph=new Chart(ctx,{
        type:'bar',
        data:chardata
      });
    },
    error:function(data){
      console.log(data);
    }
  })
});

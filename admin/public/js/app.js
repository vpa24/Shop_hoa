$(document).ready(function(){
  $.ajax({
    url:"so_luong_loai_hoa.php",
    method:"GET",
    success:function(data){
      console.log(data);
      var ten=[];
      var soluong=[];
      var mau=[];
      var obj=jQuery.parseJSON(data);
      for(var i in obj){
        ten.push(obj[i].TenLoai);
        soluong.push(obj[i].so_luong);
        mau.push(obj[i].mau)
      };
      var chardata={
        labels:ten,
        datasets:[
          {
            backgroundColor:mau,
            data:soluong
          }
        ]
      };

      var ctx=$('#myCanvas');
      var barGraph=new Chart(ctx,{
        type:'pie',
        data:chardata,
        options: {
          title: {
          display: true,
          fontSize:20,
          fontColor:'#7C0085',
          text: 'Thống kê số lượng hoa'
      }
    }
      });
    },
    error:function(data){
      console.log(data);
    }
  })
});

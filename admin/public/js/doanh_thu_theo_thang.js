$(document).ready(function(){
  $.ajax({
    url:"doanh_thu_theo_thang.php",
    method:"GET",
    success:function(data){
      console.log(data);
      var thang=[];
      var so_luong_ban=[];
      var obj=jQuery.parseJSON(data);
      for(var i in obj){
        thang.push('Tháng '+obj[i].thang);
        so_luong_ban.push(obj[i].so_luong_ban);
      };
      var chardata={
        labels:thang,
        datasets:[
          {
            label:"số lượng bán",
            data:so_luong_ban,
            backgroundColor:"rgba(2,117,216,1)",
            borderColor:"rgba(2,117,216,1)"
          }
        ]
      };

      var ctx=$('#myBarChartTheoThang');
      var barGraph=new Chart(ctx,{
        type:'bar',
        data:chardata,
        options: {
        legend:{display:!1}
        }
      });
    },
    error:function(data){
        console.log(data);
    }
  })
});

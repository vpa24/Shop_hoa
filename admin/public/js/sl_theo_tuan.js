$(document).ready(function(){
  $.ajax({
    url:"sl_theo_tuan.php",
    method:"GET",
    success:function(data){
      console.log(data);
      var ngay_dat=[];
      var so_luong_ban=[];
      var obj=jQuery.parseJSON(data);
      for(var i in obj){
        ngay_dat.push(obj[i].ngay_dat);
        so_luong_ban.push(obj[i].so_luong_ban);
      };
      var chardata={
        labels:ngay_dat,
        datasets:[
          {
            label:"số lượng",
            data:so_luong_ban,
            backgroundColor:"rgba(2,117,216,1)",
            borderColor:"rgba(2,117,216,1)"
          }
        ]
      };

      var ctx=$('#myBarChartTheoTuan');
      var barGraph=new Chart(ctx,{
        type:'bar',
        data:chardata,
        options: {
            legend:{display:!1},
        }
      });
    },
    error:function(data){
    }
  })
});

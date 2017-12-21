$(document).ready(function(){
  $.ajax({
    url:"sl_theo_tuan.php",
    method:"GET",
    success:function(data){
      console.log(data);
      var tuan=[];
      var so_luong_ban=[];
      var obj=jQuery.parseJSON(data);
      for(var i in obj){
        tuan.push('Tuần '+ obj[i].tuan);
        so_luong_ban.push(obj[i].so_luong_ban);
      };
      var chardata={
        labels:tuan,
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

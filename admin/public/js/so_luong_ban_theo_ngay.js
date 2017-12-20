$(document).ready(function(){
  $.ajax({
    url:"so_luong_ban_theo_ngay_dat.php",
    method:"GET",
    success:function(data){
      console.log(data);
      var soluong_ban=[];
      var ngaydat=[];
      var obj=jQuery.parseJSON(data);
      for(var i in obj){
        soluong_ban.push(obj[i].so_luong_ban);
        ngaydat.push(obj[i].ngay_dat);
      };
      var chardata={
        labels:ngaydat,
        datasets:[
          {
            label:"số lượng hoa bán",
            data:soluong_ban,
            lineTension:.3,
            backgroundColor:"rgba(2,117,216,0.2)",
            borderColor:"rgba(2,117,216,1)",
            pointRadius:5,
            pointBackgroundColor:"rgba(2,117,216,1)",
            pointBorderColor:"rgba(255,255,255,0.8)",
            pointHoverRadius:5,
            pointHoverBackgroundColor:"rgba(2,117,216,1)",
            pointHitRadius:20,
            pointBorderWidth:2
          }
        ]
      };

      var ctx=$('#myAreaChart');
      var barGraph=new Chart(ctx,{
        type:'line',
        data:chardata,

      });
    },
    error:function(data){
    }
  })
});

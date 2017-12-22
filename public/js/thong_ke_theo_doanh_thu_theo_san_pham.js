$(document).ready(function(){
  $.ajax({
    url:"thong_ke_theo_doanh_thu_theo_san_pham.php",
    method:"GET",
    success:function(data){
      console.log(data);
      var maHoa=[];
      var tenHoa=[];
      var giaKhuyenMai=[];
      var Hinh=[];
      var slSP=[];
      var tong_tt=[];
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

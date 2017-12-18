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
        ten.push(obj[i].TenLoai);
        soluong.push(obj[i].so_luong);
      };
      var chardata={
        labels:ten,
        datasets:[
          {
            label:'Số lượng',
            backgroundColor: [
                '#F9B1D3',
                '#0088B7',
                '#D86500',
                '#DCB927',
                '#99DF72',
            ],
            borderColor:'rgba(200,200,200,0.75)',
            data:soluong
          }
        ]
      };

      var ctx=$('#myCanvas');
      var barGraph=new Chart(ctx,{
        type:'bar',
        data:chardata,
        options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }],
          },
          title: {
          display: true,
          fontSize:20,
          fontColor:'#7C0085',
          text: 'Thống kê sản phẩm'
      }
    }
      });
    },
    error:function(data){
      console.log(data);
    }
  })
});

$(document).ready(function(){
  $.ajax({
    url:"doanh_thu_theo_tuan.php",
    method:"GET",
    success:function(data){
      console.log(data);
      var tuan=[];
      var tong_tt=[];
      var obj=jQuery.parseJSON(data);
      for(var i in obj){
        tuan.push('Tuần '+obj[i].tuan);
        tong_tt.push(obj[i].tong_tt);
      };
      var chardata={
        labels:tuan,
        datasets:[
          {
            label:"tổng số tiền",
            data:tong_tt,
            backgroundColor:"rgba(2,117,216,1)",
            borderColor:"rgba(2,117,216,1)"
          }
        ]
      };

      var ctx=$('#myBarChart');
      var barGraph=new Chart(ctx,{
        type:'bar',
        data:chardata,
        options: {
          tooltips: {
           mode: 'label',
           label: 'mylabel',
           callbacks: {
               label: function(tooltipItem, data) {
                   return tooltipItem.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","); }, },
        },

            scales: {
                yAxes: [{
                    ticks: {
                        callback: function (tong_tt) {
                            return accounting.formatNumber(tong_tt);
                        }
                    }
                }]
            },
            legend:{display:!1}
        }
      });
    },
    error:function(data){
    }
  })
});

function chuyen_huong_gio_hang(MaHoa,sl_gio_hang) {
	$.ajax({
			type:'get',
			url:'gio_hang.php',
			data:{MaHoa:MaHoa},
			success:function(data){
					swal_dat_hang(sl_gio_hang);
			}
	})
}
function kt_sl_mua(MaHoa,sl_gio_hang){
		var sl=document.getElementById("sl_"+MaHoa).value;
		if(sl>=10){
			swal({
			  title: "Rất tiếc!!!",
			  text: "Số lượng đặt hàng lớn hơn qui định",
			  icon: "warning",
			  dangerMode: true,
			})
		}
		else{
			$.ajax({
					type:'get',
					url:'gio_hang.php',
					data:{MaHoa:MaHoa,sl:sl},
					success:function(data){
						swal_dat_hang(sl_gio_hang);
					}
			});
		}


}
function swal_dat_hang(sl_gio_hang){
	sl_gio_hang++;
	document.getElementById("session").innerHTML=sl_gio_hang;
	swal("Bạn đã đặt hàng thành công", {
  buttons: {
		cancel: "Đặt hàng tiếp",
		catch: {
      text: "Xem giỏ hàng",
      value: "catch",
    },
	},
}).then((value) => {
  switch (value) {
    case "catch":
      window.location="gio-hang.html";
      break;
  }
});
}

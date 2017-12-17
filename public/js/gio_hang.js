function chuyen_huong_gio_hang(MaHoa) {
	$.ajax({
			type:'get',
			url:'gio_hang.php',
			data:{MaHoa:MaHoa},
			success:function(data){
			}
	})
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

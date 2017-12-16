function chuyen_huong_gio_hang(MaHoa) {
	$.ajax({
			type:'get',
			url:'gio_hang.php',
			data:{MaHoa:MaHoa},
			success:function(data){
			}
	})
	swal("Bạn có muốn xem giỏ hàng?", {
  buttons: {
		cancel: "Không!",
		catch: {
      text: "Có!",
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

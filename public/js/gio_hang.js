function chonmua(id)
{
	if(kiemtra(id))
	{

    var sl=document.getElementById("sl_" + id).value;
		// Chuyển trang lưu session
		window.location="chon_mua.php?MaHoa=" + id + "&sl=" + sl;
  }
}
function kiemtra(id)
{
	var sl="sl_"+ id;
	var soluong=document.getElementById(sl);
	if(soluong.value=="" || parseInt(soluong.value)<=0 || isNaN(soluong.value) || parseInt(soluong.value)!=Number(soluong.value) )
	{
		alert("Nhập số lượng >0");
		soluong.focus();
		soluong.select();
		return false;
	}
	return true;
}

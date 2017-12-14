<div class="container">
	<div class="col-md-12 col-sm-12 col-xs-12 khach_hang">
		<h1 class="giohang_rong">Vui lòng nhập thông tin khách hàng</h1>
		<form name="them_khach_hang" action="khach_hang.php" method="post">
			<ul class="form-style-1">
    <li><label>Tên khách hàng </label><input type="text" name="ten_kh" class="field-divided" placeholder="Tên khách hàng" /></li>
		<li>
        <label>Phái</label>
        <select name="phai" class="field-select">
					<option value="1">Nam</option>
					<option value="0">Nữ</option>
					<option value="2">Khác</option>
        </select>
    </li>
    <li>
        <label>Email </label>
        <input type="email" name="email" class="field-long" placeholder="Email" />
    </li>
		<li>
        <label>Địa chỉ </label>
        <input type="text" name="dia_chi" class="field-long" placeholder="Địa chỉ"/>
    </li>
		<li>
        <label>Điện thoại </label>
        <input type="text" name="dien_thoai" class="field-long" placeholder="Điện thoại"/>
    </li>

    <li>
			<input type="submit"  class="one" value="Lưu" name="luu"/>
				<a href="gio_hang.html"><input type="button" class="one" value="<<< Quay về" /></a>
    </li>
</ul>

	</div>
</div>

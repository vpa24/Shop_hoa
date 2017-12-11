<h1 class="tieu_de_kh">Vui lòng nhập thông tin khách hàng</h1>
<form name="them_khach_hang" action="khach_hang.php" method="post">
		<table>
        <tr>
					<td>Tên khách hàng</td>
          <td><input type="text" name="ten_kh" /></td>
				</tr>
        <tr>
          <td>Phái</td>
          <td>
            <select name="phai">
              <option value="1">Nam</option>
              <option value="0">Nữ</option>
              <option value="2">Khác</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email" /></td>
        </tr>
        <tr>
					<td>Địa chỉ</td>
          <td><input type="text" name="dia_chi" /></td>
				</tr>
				<tr>
					<td>Điện thoại</td>
          <td><input type="text" name="dien_thoai"/></td>
				</tr>
        <tr>
					<td align="center"><input type="submit"  class="one" value="Lưu" name="luu"/>
						<a href="gio_hang.html"><input type="button" class="one" value="<<< Quay về" /></a>
					</td>
				</tr>
			</table>
			</form>

<div  class="col-md-6 product-left-block">
  <h3 class="canh_giua khach_hang thong_tin">Thông tin</h3>
  <form name="them_khach_hang" action="luu_du_lieu.php" method="post">
    <ul class="form-style-1">
  <li><label>Tên khách hàng </label><input type="text" name="ten_kh" class="field-divided" placeholder="Tên khách hàng" /></li>
  <li>
      <label>Phái</label>
      <select name="phai" class="field-select phai">
        <option value="1">Nam</option>
        <option value="0">Nữ</option>
        <option value="2">Khác</option>
      </select>
  </li>
  <li>
      <label>Email </label>
      <input type="email" name="email" class="field-long email" placeholder="Email" />
  </li>
  <li>
      <label>Địa chỉ </label>
      <input type="text" name="dia_chi" class="field-long dia_chi" placeholder="Địa chỉ"/>
  </li>
  <li>
      <label>Điện thoại </label>
      <input type="text" name="dien_thoai" class="field-long dien_thoai" placeholder="Điện thoại"/>
  </li>

  <li>
    <input type="submit"  class="one khach_hang" value="Lưu" name="luu"/>
  </li>
</ul>
  </div>

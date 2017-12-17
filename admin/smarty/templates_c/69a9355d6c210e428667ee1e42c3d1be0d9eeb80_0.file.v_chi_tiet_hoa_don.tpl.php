<?php
/* Smarty version 3.1.30, created on 2017-12-17 10:49:13
  from "C:\wamp64\www\shop_hoa-master\admin\views\v_chi_tiet_hoa_don.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a364ba9d3ed10_26304870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69a9355d6c210e428667ee1e42c3d1be0d9eeb80' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\v_chi_tiet_hoa_don.tpl',
      1 => 1513507733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a364ba9d3ed10_26304870 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp64\\www\\shop_hoa-master\\admin\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Chi tiết hóa đơn</div>
    <div class="card-body">
      <fieldset class="chi_tiet_hoa_don">
            <p>
              <label>Mã Đơn Hàng:</label> <?php echo $_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->ma_hoa_don;?>

              <label><span style="margin-left:50px">Ngày lập hóa đơn: </span></label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->ngay_dat,'%d-%m-%Y');?>

            </p>
            <p>
              <label>Trị giá: </label> <?php echo number_format($_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->tong_thanh_tien);?>
 đồng
            </p>
            <p>
              <label>Họ tên khách hàng: </label> <?php echo $_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->ten_khach_hang;?>

            </p>
            <p>
              <label>Địa chỉ: </label> <?php echo $_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->dia_chi;?>

              <label><span style="margin-left:20px">Điện thoại:</span></label> <?php echo $_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->dien_thoai;?>

              <label><span style="margin-left:20px">Email: </span></label> <?php echo $_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->email;?>

            </p>
        </fieldset>
        <div class="clear"></div>
        <div class="tieu_de">
           <h1>Chi tiết hóa đơn</h1>
        </div>
  <table>
   <thead>
     <tr>
       <th>STT</th>
       <th>Sản phẩm</th>
       <th>Số lượng</th>
       <th>Đơn giá</th>
       <th>Thành tiền</th>
     </tr>
   </thead>
   <tfoot>
       <tr>
         <td colspan="3">
         <div class="pagination"><h4>Tổng thành tiền: <?php echo number_format($_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->tong_thanh_tien);?>
 đồng</h4> </div>
         <div class="clear"></div></td>
       </tr>
     </tfoot>
   <tbody>
     <?php $_smarty_tpl->_assignInScope('stt', 0);
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_san_pham']->value, 'sp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
?>
      <?php $_smarty_tpl->_assignInScope('stt', $_smarty_tpl->tpl_vars['stt']->value+1);
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['stt']->value;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['sp']->value->TenHoa;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['sp']->value->so_luong;?>
</td>
      <td><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->GiaKhuyenMai);?>
 đ</td>
      <td><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->GiaKhuyenMai*$_smarty_tpl->tpl_vars['sp']->value->so_luong);?>
 đ</td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

   </tbody>
 </table>
    </div>
  </div>
<?php }
}

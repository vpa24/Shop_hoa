<?php
/* Smarty version 3.1.30, created on 2017-12-17 10:04:15
  from "C:\wamp64\www\shop_hoa-master\admin\views\v_hoa_don.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a36411fddce42_35579244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '664b5d4c986b052a2d0668b864a45d3f82d1e6b4' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\v_hoa_don.tpl',
      1 => 1513505052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a36411fddce42_35579244 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp64\\www\\shop_hoa-master\\admin\\smarty\\libs\\plugins\\modifier.date_format.php';
?>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách hóa đơn</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Mã đơn hàng</th>
                  <th>Khách hàng</th>
                  <th>Ngày đặt</th>
                  <th>Tổng tiền</th>
                  <th>Trạng thái</th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa_don']->value, 'hoa_don');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa_don']->value) {
?>
                <tr>
                  <td>
                     <a href="chi_tiet_hoa_don.php?ma_hoa_don=<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>
" title="Xem chi tiết đơn hàng">
                       <?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>

                     </a>
                   </td>
                  <td><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ten_khach_hang;?>
</td>
                  <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['hoa_don']->value->ngay_dat,'%d-%m-%Y');?>
</td>
                  <td><?php echo number_format($_smarty_tpl->tpl_vars['hoa_don']->value->tong_thanh_tien);?>
 đ</td>
                  <td>
                    <select name="ds[]">
                      <option value="1"
                            <?php if ($_smarty_tpl->tpl_vars['hoa_don']->value->trang_thai == 1) {?>
                                selected
                            <?php }?>>Chưa thanh toán</option>
                      <option value="2"
                            <?php if ($_smarty_tpl->tpl_vars['hoa_don']->value->trang_thai == 2) {?>
                              selected
                            <?php }?>>Đã thanh toán</option>
                      <option value="3"
                            <?php if ($_smarty_tpl->tpl_vars['hoa_don']->value->trang_thai == 3) {?>
                              selected
                            <?php }?>>Hủy đơn hàng</option>
                    </select>
                  </td>
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

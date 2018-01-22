<?php
/* Smarty version 3.1.30, created on 2018-01-22 08:54:27
  from "C:\wamp64\www\shop_hoa-master\admin\views\index\v_hien_thi_ds_hoa_het_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a65a6c3447bb4_93100518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0223e24576bc64d168b023308e67de6da09e27a5' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\index\\v_hien_thi_ds_hoa_het_hang.tpl',
      1 => 1516611197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a65a6c3447bb4_93100518 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dshoa']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
    <tr id="delete<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
">
      <td width="75px" ><img src="../public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" class="img-fluid" alt="Responsive image"></td>
      <td><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</td>
      <td data-name="so_luong"  data-type="text"  class="so_luong" data-url="sua_sl_hoa.php" data-pk="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->SoLuongSP;?>
</td>
    </tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}

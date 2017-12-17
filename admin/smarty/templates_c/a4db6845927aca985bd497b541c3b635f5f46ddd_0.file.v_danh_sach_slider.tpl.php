<?php
/* Smarty version 3.1.30, created on 2017-12-17 13:09:38
  from "C:\wamp64\www\shop_hoa-master\admin\views\slider\v_danh_sach_slider.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a366c926da357_47674232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4db6845927aca985bd497b541c3b635f5f46ddd' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\slider\\v_danh_sach_slider.tpl',
      1 => 1513515890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/slider/v_modal_sua_slider.tpl' => 1,
  ),
),false)) {
function content_5a366c926da357_47674232 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Hình</th>
      <th>Tên Slider</th>
      <th>Thời gian</th>
      <th>Hành động</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_slider']->value, 'slider');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->value) {
?>
    <tr id="delete<?php echo $_smarty_tpl->tpl_vars['slider']->value->id;?>
">
      <td width="175px" style="max-height: 200px;"><img src="../public/images/slider/<?php echo $_smarty_tpl->tpl_vars['slider']->value->Hinh;?>
" class="img-fluid" alt="Responsive image"></td>
      <td><?php echo $_smarty_tpl->tpl_vars['slider']->value->TieuDe;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['slider']->value->ThoiGian;?>
</td>
      <td>
          <button type="button" class="btn btn-primary" onclick="getId(<?php echo $_smarty_tpl->tpl_vars['slider']->value->id;?>
)" id="update<?php echo $_smarty_tpl->tpl_vars['slider']->value->id;?>
" data-toggle="modal" data-target="#edit<?php echo $_smarty_tpl->tpl_vars['slider']->value->id;?>
" >Sửa</button>
          <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['slider']->value->id;?>
)" class="btn btn-danger">Xóa</button>
      </td>
    </tr>
    <?php $_smarty_tpl->_subTemplateRender("file:views/slider/v_modal_sua_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
</table>
<?php }
}

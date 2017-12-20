<?php
/* Smarty version 3.1.30, created on 2017-12-20 11:02:31
  from "C:\wamp64\www\shop_hoa-master\admin\views\logo\v_hien_thi_logo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3a4347202b82_35358812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6726abe193fadd7397c1bf10f3e443aa5ac3f95b' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\logo\\v_hien_thi_logo.tpl',
      1 => 1513767749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/logo/v_modal_sua_logo.tpl' => 1,
  ),
),false)) {
function content_5a3a4347202b82_35358812 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Hình Logo</th>
      <th>Chiều cao</th>
      <th>Độ rộng</th>
      <th>Hành động</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><img src="../public/images/logo/<?php echo $_smarty_tpl->tpl_vars['doc_logo']->value->Hinh;?>
" class="img-fluid" alt="Responsive image"></td>
      <td><?php echo $_smarty_tpl->tpl_vars['doc_logo']->value->ChieuCao;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['doc_logo']->value->DoRong;?>
</td>
      <td>
        <button type="button" class="btn btn-primary" onclick="getLogo()" id="update" data-toggle="modal" data-target="#edit" >Sửa</button>
      </td>
    </tr>
    <?php $_smarty_tpl->_subTemplateRender("file:views/logo/v_modal_sua_logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </tbody>
</table>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2017-12-22 12:17:48
  from "C:\wamp\www\shop_hoa-master\views\v_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ce9dc58eba8_93407262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '640fc8b6e109f7681f4881d6d8b4ad312a3bc583' => 
    array (
      0 => 'C:\\wamp\\www\\shop_hoa-master\\views\\v_hoa.tpl',
      1 => 1513884612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/hoa/v_thanh_danh_muc.tpl' => 1,
    'file:views/hoa/v_tim_theo_loai_don_gia.tpl' => 1,
    'file:views/hoa/v_danh_sach_hoa.tpl' => 1,
    'file:layouts/body/quang_cao.tpl' => 1,
  ),
),false)) {
function content_5a3ce9dc58eba8_93407262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/hoa/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="container">
    <div class="main">
          <div class="row">
              <?php $_smarty_tpl->_subTemplateRender("file:views/hoa/v_tim_theo_loai_don_gia.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

              <?php $_smarty_tpl->_subTemplateRender("file:views/hoa/v_danh_sach_hoa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </div>
    </div>
      <?php $_smarty_tpl->_subTemplateRender("file:layouts/body/quang_cao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </div>
<?php }
}

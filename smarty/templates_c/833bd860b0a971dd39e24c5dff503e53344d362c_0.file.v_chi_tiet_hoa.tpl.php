<?php
/* Smarty version 3.1.30, created on 2017-12-22 12:48:21
  from "C:\wamp\www\shop_hoa-master\views\v_chi_tiet_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3cf10554de15_05413759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '833bd860b0a971dd39e24c5dff503e53344d362c' => 
    array (
      0 => 'C:\\wamp\\www\\shop_hoa-master\\views\\v_chi_tiet_hoa.tpl',
      1 => 1513884612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/chi_tiet_hoa/v_thanh_danh_muc.tpl' => 1,
    'file:views/chi_tiet_hoa/v_chi_tiet_hoa.tpl' => 1,
    'file:views/chi_tiet_hoa/v_thong_tin_khac.tpl' => 1,
    'file:views/chi_tiet_hoa/v_thong_tin_hoa.tpl' => 1,
    'file:views/chi_tiet_hoa/v_san_pham_cung_loai.tpl' => 1,
    'file:layouts/body/quang_cao.tpl' => 1,
  ),
),false)) {
function content_5a3cf10554de15_05413759 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/chi_tiet_hoa/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <div class="product-view">
    <form method="post" action="gio_hang.php?MaHoa=<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
">
      <div class="row">
        <div class="col-md-5">
            <img class="img-responsive hinh_ct" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
" title="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
">
        </div>
        <div class="product-shop col-md-7 col-sm-6 col-xs-12">
          <div class="product-shop-content">
            <?php $_smarty_tpl->_subTemplateRender("file:views/chi_tiet_hoa/v_chi_tiet_hoa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("file:views/chi_tiet_hoa/v_thong_tin_khac.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("file:views/chi_tiet_hoa/v_thong_tin_hoa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </div>
      </div>
    </div>
  </form>
</div>
  <?php $_smarty_tpl->_subTemplateRender("file:views/chi_tiet_hoa/v_san_pham_cung_loai.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php $_smarty_tpl->_subTemplateRender("file:layouts/body/quang_cao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}

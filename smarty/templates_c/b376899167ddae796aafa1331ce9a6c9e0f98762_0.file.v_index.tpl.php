<?php
/* Smarty version 3.1.30, created on 2017-12-22 12:16:24
  from "C:\wamp\www\shop_hoa-master\views\v_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ce988e835c5_73313363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b376899167ddae796aafa1331ce9a6c9e0f98762' => 
    array (
      0 => 'C:\\wamp\\www\\shop_hoa-master\\views\\v_index.tpl',
      1 => 1513884612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/trang_chu/v_slider.tpl' => 1,
    'file:views/trang_chu/v_banner.tpl' => 1,
    'file:views/trang_chu/v_mau_hoa_moi.tpl' => 1,
    'file:views/trang_chu/v_hoa_ban_chay.tpl' => 1,
    'file:views/trang_chu/v_hoa_giam_gia.tpl' => 1,
    'file:layouts/body/quang_cao.tpl' => 1,
    'file:views/trang_chu/v_san_pham_giam_gia.tpl' => 1,
    'file:views/trang_chu/v_san_pham_noi_bat.tpl' => 1,
    'file:views/trang_chu/v_san_pham_re_nhat.tpl' => 1,
  ),
),false)) {
function content_5a3ce988e835c5_73313363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/trang_chu/v_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:views/trang_chu/v_banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mau_hoa">
    <div class="magic-category clearfix">
        <div class="block-title-tabs clearfix">
            <ul class="magictabs">
                <li class="item active loaded">
                    <span class="title" data-toggle="tab" href="#menu1">Mẫu hoa mới</span>
                </li>
                <li class="item" >
                    <span class="title" data-toggle="tab" href="#menu2">Mẫu hoa bán chạy</span>
                </li>
                <li class="item">
                    <span class="title" data-toggle="tab" href="#menu3">Mẫu hoa giảm giá</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content">
        <?php $_smarty_tpl->_subTemplateRender("file:views/trang_chu/v_mau_hoa_moi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:views/trang_chu/v_hoa_ban_chay.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:views/trang_chu/v_hoa_giam_gia.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:layouts/body/quang_cao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <div class="cms-static-mix-custom-product block-custom-product">
  	<div class="container">
  		<div class="row">
  			<?php $_smarty_tpl->_subTemplateRender("file:views/trang_chu/v_san_pham_giam_gia.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  			<?php $_smarty_tpl->_subTemplateRender("file:views/trang_chu/v_san_pham_noi_bat.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  			<?php $_smarty_tpl->_subTemplateRender("file:views/trang_chu/v_san_pham_re_nhat.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  		</div>
  	</div>
  </div>
</div>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2017-12-22 00:43:10
  from "C:\wamp64\www\shop_hoa-master\admin\views\v_thong_ke_doanh_thu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3c551ea7fc38_12770178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c19da4f486ca1a47a1fbc32c54681c5e50812e5' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\v_thong_ke_doanh_thu.tpl',
      1 => 1513902722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/thong_ke_theo_doanh_thu/v_theo_san_pham.tpl' => 1,
    'file:views/thong_ke_theo_doanh_thu/v_theo_thang.tpl' => 1,
  ),
),false)) {
function content_5a3c551ea7fc38_12770178 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
				<div class="tabs tabs-style-fillup">
					<nav>
						<ul>
							<li><a href="#section-fillup-1"><span>Theo sản phẩm</span></a></li>
							<li><a href="#section-fillup-2"><span>Theo tháng</span></a></li>
							<li><a href="#section-fillup-3"><span>Upload</span></a></li>
							<li><a href="#section-fillup-4"><span>Work</span></a></li>
							<li><a href="#section-fillup-5"><span>Settings</span></a></li>
						</ul>
					</nav>
					<div class="content-wrap">
						<?php $_smarty_tpl->_subTemplateRender("file:views/thong_ke_theo_doanh_thu/v_theo_san_pham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("file:views/thong_ke_theo_doanh_thu/v_theo_thang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

						<section id="section-fillup-3"><p>3</p></section>
						<section id="section-fillup-4"><p>4</p></section>
						<section id="section-fillup-5"><p>5</p></section>
					</div><!-- /content -->
				</div><!-- /tabs -->
			</section>
<?php }
}

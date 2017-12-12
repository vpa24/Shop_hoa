<?php
/* Smarty version 3.1.30, created on 2017-12-12 14:15:09
  from "C:\wamp64\www\shop_hoa\views\v_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2fe46d6c9dd3_81606980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e73d49b7a2e951c9b414451593058700da3e80a7' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa\\views\\v_index.tpl',
      1 => 1513086429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/body/tin_tuc.tpl' => 1,
  ),
),false)) {
function content_5a2fe46d6c9dd3_81606980 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="bsm_products" class="container">
  <div class="col-md-12 col-sm-12 col-xs-12 bsm_title_section">
    <h1>Mẫu hoa mới!</h1>
        <img src="public/img/divider2.png" alt="">
  </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
      <a href="san-pham/<?php echo makeURL($_smarty_tpl->tpl_vars['hoa']->value->TenHoa);?>
-<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
.html">
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="bsm_product">
                <div class="bsm_product_image">
                    <img class="img-responsive hinh_anh" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
">
                </div>
                <div class="bsm_product_info">
                   <a href="san-pham/<?php echo makeURL($_smarty_tpl->tpl_vars['hoa']->value->TenHoa);?>
-<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
.html">
                     <h4><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</h4></a>
                    <span><?php echo number_format($_smarty_tpl->tpl_vars['hoa']->value->Gia);?>
 đ</span>
                </div>

            </div>
        </div>
      </a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <div class="col-md-12 col-sm-12 col-xs-12">
       <a href="danh-sach-hoa.html"> <button id="bsm_products_more" class="bsm_button_style">Xem tất cả</button></a>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:layouts/body/tin_tuc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

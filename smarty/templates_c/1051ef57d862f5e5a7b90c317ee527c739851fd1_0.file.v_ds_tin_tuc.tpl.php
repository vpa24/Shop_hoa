<?php
/* Smarty version 3.1.30, created on 2017-12-23 15:10:29
  from "C:\wamp64\www\shop_hoa-master\views\tin_tuc\v_ds_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3e71e5f05663_05400958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1051ef57d862f5e5a7b90c317ee527c739851fd1' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\views\\tin_tuc\\v_ds_tin_tuc.tpl',
      1 => 1514041826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3e71e5f05663_05400958 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp64\\www\\shop_hoa-master\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<div class="col-main col-md-12 content-color color f-right">
    <div class="category-products">
        <ul class="products-grid row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tin_tuc']->value, 'tin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tin']->value) {
?>
            <li class="item tt">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover">
                            <a href="tin-tuc/<?php echo makeURL($_smarty_tpl->tpl_vars['tin']->value->TenTT);?>
-<?php echo $_smarty_tpl->tpl_vars['tin']->value->MaTT;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['tin']->value->TenTT;?>
" class="product-image">
                                <img class="img-responsive hinh_hoa" src="public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['tin']->value->Hinh;?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['tin']->value->TenTT;?>
">
                            </a>
                        </div>
                        <h2 class="tt-name">
                        <a href="tin-tuc/<?php echo makeURL($_smarty_tpl->tpl_vars['tin']->value->TenTT);?>
-<?php echo $_smarty_tpl->tpl_vars['tin']->value->MaTT;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['tin']->value->TenTT;?>
"><?php echo $_smarty_tpl->tpl_vars['tin']->value->TenTT;?>
</a>
                        </h2>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <div class="price-box">
                                    <a class="minimal-price-link">
                                        <span class="mua_online">Ngày đăng:</span>
                                        <span class="price" id="product-minimal-price-2678"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tin']->value->ThoiGian,'%d-%m-%Y');?>
 </span>
                                    </a>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>
    <div class="bsm_products_pagination" >

</div>
<?php }
}

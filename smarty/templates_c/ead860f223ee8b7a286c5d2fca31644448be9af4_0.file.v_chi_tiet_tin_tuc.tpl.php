<?php
/* Smarty version 3.1.30, created on 2017-12-09 05:24:29
  from "C:\wamp64\www\shop_hoa\views\v_chi_tiet_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2b738dd39c32_51132036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ead860f223ee8b7a286c5d2fca31644448be9af4' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa\\views\\v_chi_tiet_tin_tuc.tpl',
      1 => 1512797059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2b738dd39c32_51132036 (Smarty_Internal_Template $_smarty_tpl) {
?>

            <!-- BEGIN HEADER PAGE -->
            <div id="bsm_header_page">
                <h1>Chi tiết tin tức</h1>
            </div>
            <!-- END HEADER PAGE -->

            <!-- BEGIN PRODUCT DETAILS -->

            <div class="container">
                    <div id="bsm_product_details_content" >
                      <div class="new">
                          <h1><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->TenTT;?>
</h1>
                      </div>
                      <div class="hinh_tt">
                        <img src="public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->Hinh;?>
" class="img-responsive">
                      </div>



                            <p class="noiDungTT"><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->NoiDung;?>
</p><br>
                    </div>
              </div>
            <!-- END PRODUCT DETAILS -->
<?php }
}

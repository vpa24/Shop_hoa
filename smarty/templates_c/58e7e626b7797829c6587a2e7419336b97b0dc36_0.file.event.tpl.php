<?php
/* Smarty version 3.1.30, created on 2017-11-30 15:17:56
  from "C:\wamp64\www\project_tn\smarty\templates\layouts\body\event.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a202124e77842_33859025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58e7e626b7797829c6587a2e7419336b97b0dc36' => 
    array (
      0 => 'C:\\wamp64\\www\\project_tn\\smarty\\templates\\layouts\\body\\event.tpl',
      1 => 1512055073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a202124e77842_33859025 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="bsm_testimonials">
    <div class="swiper-wrapper">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['su_kien']->value, 'event');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
?>
        <div class="bsm_testimonial swiper-slide">
            <img src="public/img/testimonials/testimonial_1.png" alt="">
            <div class="col-md-6 col-sm-8 col-xs-12">
                <div>
                    <h3><?php echo $_smarty_tpl->tpl_vars['event']->value->TenTT;?>
</h3>
                    <p><?php echo $_smarty_tpl->tpl_vars['event']->value->NoiDung;?>
</p>
                </div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <div id="bsm_testimonials_pagination"></div>
</div>
<?php }
}

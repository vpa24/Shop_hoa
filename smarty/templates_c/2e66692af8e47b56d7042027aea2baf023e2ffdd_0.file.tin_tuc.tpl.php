<?php
/* Smarty version 3.1.30, created on 2017-12-12 08:05:13
  from "C:\wamp64\www\shop_hoa\smarty\templates\layouts\body\tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2f8db9289be3_96208595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e66692af8e47b56d7042027aea2baf023e2ffdd' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa\\smarty\\templates\\layouts\\body\\tin_tuc.tpl',
      1 => 1513038237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2f8db9289be3_96208595 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="container" style="padding-bottom:25px; margin-bottom: 15px">
    <div class="col-md-12 col-sm-12 col-xs-12 bsm_title_section">
        <h1>Những tin tức mới</h1>
        <img src="public/img/divider2.png" alt="">
    </div>
    <div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tin_tuc']->value, 'tin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tin']->value) {
?>
    <div class="col-sm-3 col-xs-6">
    <figure>
        <a href="tin-tuc/<?php echo makeURL($_smarty_tpl->tpl_vars['tin']->value->TenTT);?>
-<?php echo $_smarty_tpl->tpl_vars['tin']->value->MaTT;?>
.html"><img class="img-thumbnail" src="public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['tin']->value->Hinh;?>
" style="height:160px;width:100%;object-fit: cover;"></a>
        <figcaption>
            <h3 class="tieu_deTT"><a href="tin-tuc/<?php echo makeURL($_smarty_tpl->tpl_vars['tin']->value->TenTT);?>
-<?php echo $_smarty_tpl->tpl_vars['tin']->value->MaTT;?>
.html"><?php echo $_smarty_tpl->tpl_vars['tin']->value->TenTT;?>
</a></h3>
        </figcaption>
    </figure>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div><span class="clearfix"></span></div>
</section>
<?php }
}

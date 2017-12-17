<?php
/* Smarty version 3.1.30, created on 2017-12-17 12:03:42
  from "C:\wamp64\www\shop_hoa-masterrr\views\hoa\v_thanh_danh_muc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a365d1e2818c7_26219981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52c63a02282e7b41adad50ca83d8f4f935a4493e' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-masterrr\\views\\hoa\\v_thanh_danh_muc.tpl',
      1 => 1513453820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a365d1e2818c7_26219981 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home">
                    <a href="." title="Trở về trang chủ">Trang chủ</a>
                </li>
                <li class="category4">
                    <a href="danh-sach-hoa" title="">Danh sách hoa</a>
                </li>
                <?php if (isset($_GET['loai_hoa'])) {?>
                <li class="category4">
                    <a class="ten_loai_hoa" title="<?php echo $_smarty_tpl->tpl_vars['ten_loai']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ten_loai']->value;?>
</a>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
<?php }
}

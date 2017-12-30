<?php
/* Smarty version 3.1.30, created on 2017-12-29 11:05:20
  from "C:\wamp64\www\shop_hoa-master\smarty\templates\layouts\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a46217076e257_06727516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f9a0ae2224e9f396604497c8052d85613dcd18b' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\smarty\\templates\\layouts\\footer.tpl',
      1 => 1514545441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/script.tpl' => 1,
  ),
),false)) {
function content_5a46217076e257_06727516 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer>
    <div class="container">
        <div class="col-sm-5 text-left">
            © Bản quyền thuộc về <?php echo $_smarty_tpl->tpl_vars['title_website']->value;?>

        </div>
        <div class="col-sm-7 text-right">
            <?php echo $_smarty_tpl->tpl_vars['address']->value;?>
 | Email: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 | Hotline: <?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>

        </div>
    </div>
</footer>
<?php $_smarty_tpl->_subTemplateRender("file:layouts/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
</html>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2017-12-12 14:35:30
  from "C:\wamp64\www\shop_hoa\smarty\templates\layouts\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2fe932234880_72004255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '860bb67836fdddf742839059063406d782d12ee9' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa\\smarty\\templates\\layouts\\footer.tpl',
      1 => 1513089178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2fe932234880_72004255 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer>
    <div class="container">
        <div class="col-sm-5 text-left">
            © Bản quyền thuộc về Shop Hoa Online
        </div>
        <div class="col-sm-7 text-right">
            Điện hoa hiện đại 137 Nguyễn Chí Thanh | Email: nct@gmail.com | Hotline: 0165.453.3100
        </div>
    </div>
</footer>
        <?php echo '<script'; ?>
 src="public/js/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/js/bootstrap.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/js/slider.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/js/jquery.elevatezoom.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/js/jquery.elevateZoom-3.0.8.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/js/imagezoom.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/js/custom.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/js/gio_hang.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function(){
              $("#giam").click(function(){
            		var sl=$(".value").val();
                sl--;
            		$(".value").val(sl);
            		if(sl<=1)
            			$(".value").val(1);
            	});
              $("#tang").click(function(){
            			var sl=$(".value").val();
            			sl++;
            			$(".value").val(sl);
            	});
    });
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
  $("#zoom_08").elevateZoom({
  			zoomWindowFadeIn: 800,
  			zoomWindowFadeOut: 800,
  			lensFadeIn: 800,
  			lensFadeOut: 800
  });
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
    <?php if (isset($_smarty_tpl->tpl_vars['giohang']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hoa']->value, 'sp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
?>
        $("#tang_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
").click(function(){
          var sl=$("#qty_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
").val();
          sl++;
          $("#qty_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
").val(sl);
      });
      $("#giam_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
").click(function(){
        var sl=$("#qty_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
").val();
        sl--;
        $("#qty_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
").val(sl);
        if(sl<=1)
          $("#qty_<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
").val(1);
      });
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php }?>

});
<?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}

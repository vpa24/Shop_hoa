<?php
/* Smarty version 3.1.30, created on 2018-01-09 14:12:56
  from "C:\wamp64\www\shop_hoa-master\smarty\templates\layouts\script.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a54cde8771f08_60290616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3c35e8fa296b490d6b753f72e5f0b7391d6948c' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\smarty\\templates\\layouts\\script.tpl',
      1 => 1515506759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a54cde8771f08_60290616 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="public/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/slider.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/aos.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/custom.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/parallax.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/ajax/ajax_tim_kiem.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/ajax/ajax_tim_kiem-mobile.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/ajax/ajax_phan_trang.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/jquery.gotop.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/slider/bxslider.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/main.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/numeral.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/slider/script.slider.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
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
          if(sl>=10)
            $(".value").val(10);

      });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
  $('#gotop').gotop({
    background: '#FF3366',
    bottom : '100px',
    mobileOnly: false
  });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
AOS.init({
       easing: 'ease-in-out-sine'
     });
<?php echo '</script'; ?>
>
<?php }
}

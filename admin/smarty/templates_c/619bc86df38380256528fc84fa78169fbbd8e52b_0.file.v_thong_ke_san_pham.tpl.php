<?php
/* Smarty version 3.1.30, created on 2017-12-21 12:32:58
  from "C:\wamp64\www\shop_hoa-master\admin\views\v_thong_ke_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ba9fa98a157_83506173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '619bc86df38380256528fc84fa78169fbbd8e52b' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\v_thong_ke_san_pham.tpl',
      1 => 1513859575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3ba9fa98a157_83506173 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp64\\www\\shop_hoa-master\\admin\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i>Thống kê sản phẩm</div>
    <div class="card-body ">
      <table class="table">
      	<thead>
      		<tr>
      			<th>Ngày bắt đầu&nbsp;
              <input type="text" class="span2" value="<?php echo smarty_modifier_date_format(time(),"%m-%d-%Y");?>
" data-date-format="mm/dd/yyyy" id="dp2">
      			</th>
      			<th>Ngày kết thúc&nbsp;
      			 <input type="text" class="span2" value="<?php echo smarty_modifier_date_format(time(),"%m-%d-%Y");?>
" data-date-format="mm/dd/yyyy" id="dp3">
      			</th>
      		</tr>
      	</thead>
      	<tbody>
          <tr>
            <button type="button" class="btn btn-primary" onclick="">  Bắt đầu tìm</button>
          </tr>
      	</tbody>
      </table>
      <section id="section-linetriangle-1">
        <div class="card mb-3">
          <div class="card-body">
              <canvas id="myBarChartTheoTuan"></canvas>
          </div>
        </div>
</section>
</div>
</div>
<?php }
}

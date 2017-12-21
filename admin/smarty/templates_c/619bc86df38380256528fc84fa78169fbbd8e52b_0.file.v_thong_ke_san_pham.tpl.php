<?php
/* Smarty version 3.1.30, created on 2017-12-21 12:45:35
  from "C:\wamp64\www\shop_hoa-master\admin\views\v_thong_ke_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3bacef5ee161_64417095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '619bc86df38380256528fc84fa78169fbbd8e52b' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\v_thong_ke_san_pham.tpl',
      1 => 1513860295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3bacef5ee161_64417095 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i>Thống kê sản phẩm</div>
    <div class="card-body ">
      <table class="table">
      	<thead>
      		<tr>
      			<th>Ngày bắt đầu&nbsp;
              <input type="text" id="dt1">
      			</th>
      			<th>Ngày kết thúc&nbsp;
      			  <input type="text" id="dt2">
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

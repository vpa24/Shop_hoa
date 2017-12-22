<?php
/* Smarty version 3.1.30, created on 2017-12-22 12:35:24
  from "C:\wamp\www\shop_hoa-master\admin\views\v_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3cedfc19fa60_13458961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9e7f1c1629652ec7427b2420df8d5dd3ba36ed0' => 
    array (
      0 => 'C:\\wamp\\www\\shop_hoa-master\\admin\\views\\v_index.tpl',
      1 => 1513942260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3cedfc19fa60_13458961 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp\\www\\shop_hoa-master\\admin\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-comments"></i>
          </div>
          <div class="mr-5"><?php echo $_smarty_tpl->tpl_vars['dem_tin_tuc']->value->dem;?>
 tin tức</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="tin_tuc.php">
          <span class="float-left">Xem chi tiết</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-list"></i>
          </div>
          <div class="mr-5"><?php echo $_smarty_tpl->tpl_vars['dem_hoa']->value->dem;?>
 sản phẩm đang bán</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="hoa.php">
          <span class="float-left">Xem chi tiết</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-support"></i>
          </div>
          <div class="mr-5" style="font-size: 14px">12 đơn hàng chưa duyệt</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#chua_duyet">
          <span class="float-left">Xem chi tiết</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-shopping-cart"></i>
          </div>
          <div class="mr-5"><?php echo $_smarty_tpl->tpl_vars['so_hoa_don_trong_ngay']->value->count;?>
 hóa đơn ngày <?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</div>
        </div>
      </div>
    </div>
  </div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i>Số lượng bán theo ngày</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
      </div>
      <div class="container">
        <div class="card mb-3" id="chua_duyet">
          <div class="card-header">
            <i class="fa fa-table"></i> Danh sách hóa đơn chưa xử lý</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Mã đơn hàng</th>
                    <th>Khách hàng</th>
                    <th>Ngày đặt</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa_don']->value, 'hoa_don');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa_don']->value) {
?>
                  <tr id="delete<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>
">
                    <td>
                      <a href="chi_tiet_hoa_don.php?ma_hoa_don=<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>
" title="Xem chi tiết đơn hàng" target="_blank">
                        <?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>

                      </a>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ten_khach_hang;?>
</td>
                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['hoa_don']->value->ngay_dat,'%d-%m-%Y');?>
</td>
                    <td><?php echo number_format($_smarty_tpl->tpl_vars['hoa_don']->value->tong_thanh_tien);?>
 đ</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->trang_thai;?>
</td>
                    <td>
                        <button type="button" onclick="updateAjax(<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>
)" class="btn btn-success">Xử lý</button>
                        <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>
)" class="btn btn-danger">Xóa</button>
                    </td>
                  </tr>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                </tbody>
              </table>
            </div>
          </div>
        </div>
      <!-- Example Bar Chart Card-->
      <div class="row">
        <div class="col-sm-8">  <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i>Doanh thu theo tuần</div>
            <div class="card-body">
                  <canvas id="myBarChart" width="100" height="50"></canvas>
        </div></div></div>
        <div class="col-sm-4"> <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-pie-chart"></i>Số lượng hoa theo loại</div>
          <div class="card-body">
            <canvas id="myCanvas" width="50%" height="50" ></canvas>
          </div>
        </div>
      </div>
    </div>
	<?php echo '<script'; ?>
 src="public/js/ajax/ajax_update_hoa_don.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/ajax/ajax_delete_hoa_don.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/Chart.min.js"><?php echo '</script'; ?>
><?php }
}

<?php
/* Smarty version 3.1.30, created on 2017-12-08 12:03:37
  from "C:\wamp\www\shop_hoa\admin\views\v_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2a71898ce7c8_79604232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c4a16a277ddd39608b956972f980df1b2ec9e61' => 
    array (
      0 => 'C:\\wamp\\www\\shop_hoa\\admin\\views\\v_index.tpl',
      1 => 1512650359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2a71898ce7c8_79604232 (Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Icon Cards-->
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
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">2 đơn hàng mới</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="hoa_don.php">
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
            <a class="card-footer text-white clearfix small z-1" href="hoa_don.php">
              <span class="float-left">Xem chi tiết</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
<!-- Area Chart Example-->
          <canvas id="myAreaChart" width="100%" height="30" style="display:none"></canvas>
      <div class="row">
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Thống kê sản phẩm</div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12 my-auto">
                  <canvas id="myBarChart" width="100" height="45"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> Thống kê đơn hàng</div>
            <div class="card-body">
              <canvas id="myPieChart" width="100%" height="100"></canvas>
            </div>
          </div>
          <!-- Example Notifications Card-->
        </div>
<?php }
}

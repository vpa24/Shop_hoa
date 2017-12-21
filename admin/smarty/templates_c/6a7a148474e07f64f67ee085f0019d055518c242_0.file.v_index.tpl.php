<?php
/* Smarty version 3.1.30, created on 2017-12-21 07:53:53
  from "C:\wamp64\www\shop_hoa-master\admin\views\v_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3b68911a5d02_18789861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a7a148474e07f64f67ee085f0019d055518c242' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\v_index.tpl',
      1 => 1513842831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3b68911a5d02_18789861 (Smarty_Internal_Template $_smarty_tpl) {
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
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i>Số lượng bán theo ngày</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
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
<?php }
}

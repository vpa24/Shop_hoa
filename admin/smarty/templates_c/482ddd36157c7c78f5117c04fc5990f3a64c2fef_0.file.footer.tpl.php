<?php
/* Smarty version 3.1.30, created on 2017-12-08 12:03:37
  from "C:\wamp\www\shop_hoa\admin\smarty\templates\layouts\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2a71899a04b1_35304309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '482ddd36157c7c78f5117c04fc5990f3a64c2fef' => 
    array (
      0 => 'C:\\wamp\\www\\shop_hoa\\admin\\smarty\\templates\\layouts\\footer.tpl',
      1 => 1512724578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2a71899a04b1_35304309 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- Bootstrap core JavaScript-->
    <?php echo '<script'; ?>
 src="public/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <!-- Core plugin JavaScript-->
    <?php echo '<script'; ?>
 src="public/vendor/jquery-easing/jquery.easing.min.js"><?php echo '</script'; ?>
>
    <!-- Page level plugin JavaScript-->
    <?php echo '<script'; ?>
 src="public/vendor/chart.js/Chart.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/vendor/datatables/jquery.dataTables.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/vendor/datatables/dataTables.bootstrap4.js"><?php echo '</script'; ?>
>
    <!-- Custom scripts for all pages-->
    <?php echo '<script'; ?>
 src="public/js/sb-admin.min.js"><?php echo '</script'; ?>
>
    <!-- Custom scripts for this page-->
    <?php echo '<script'; ?>
 src="public/js/sb-admin-datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    // Chart.js scripts
    // -- Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';
    // -- Bar Chart Example
    var ctx = document.getElementById("myBarChart");
    var myLineChart = new Chart(ctx, {
    type: 'bar',
    data: {
    labels: ["Hoa bó", "Hoa hộp", "Hoa cắm giỏ"],
    datasets: [{
    label: "Revenue",
    backgroundColor: "rgba(2,117,216,1)",
    borderColor: "rgba(2,117,216,1)",
    data: [49, 11, 15],
    }],
    },
    options: {
    scales: {
    xAxes: [{
      time: {
        unit: 'month'
      },
      gridLines: {
        display: false
      },
      ticks: {
        maxTicksLimit: 3
      }
    }],
    yAxes: [{
      ticks: {
        min: 0,
        max: 100,
        maxTicksLimit: 5
      },
      gridLines: {
        display: true
      }
    }],
    },
    legend: {
    display: false
    }
    }
    });
    // -- Pie Chart Example
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
    labels: ["Thành công", "Trả hàng", "Hủy hàng"],
    datasets: [{
    data: [70, 15.58, 11.25],
    backgroundColor: ['#28a745', '#dc3545', '#ffc107'],
    }],
    },
    });

    <?php echo '</script'; ?>
>
  </div>
</body>

</html>
<?php }
}

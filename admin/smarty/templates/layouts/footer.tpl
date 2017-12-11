    <!-- Bootstrap core JavaScript-->
    <script src="public/vendor/jquery/jquery.min.js"></script>
    <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="public/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="public/vendor/chart.js/Chart.min.js"></script>
    <script src="public/vendor/datatables/jquery.dataTables.js"></script>
    <script src="public/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="public/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="public/js/sb-admin-datatables.min.js"></script>
    <script>
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

    </script>
  </div>
</body>

</html>

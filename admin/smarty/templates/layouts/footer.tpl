<script src="public/js/jquery.number.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="public/js/sb-admin.min.js"></script>
  <!-- Custom scripts for this page-->
  <script src="public/js/sb-admin-datatables.min.js"></script>
  <script src="public/js/Chart.min.js"></script>
  <script src="public/js/app.js"></script>
  <script src="public/js/so_luong_ban_theo_ngay.js"></script>
  <script src="public/js/doanh_thu_theo_tuan.js"></script>
  <script src="public/js/sl_theo_tuan.js"></script>
  <script src="public/js/accounting.min.js"></script>

  <script>
    $('#price').number(true);
    $('#gia_khuyen_mai').number(true);
  </script>
  <script>
  $(document).ready(function () {

    $("#dt1").datepicker({
        dateFormat: "dd-M-yy",
        minDate: 0,
        onSelect: function (date) {
            var dt2 = $('#dt2');
            var startDate = $(this).datepicker('getDate');
            var minDate = $(this).datepicker('getDate');
            dt2.datepicker('setDate', minDate);
            startDate.setDate(startDate.getDate() + 30);
            //sets dt2 maxDate to the last day of 30 days window
            dt2.datepicker('option', 'maxDate', startDate);
            dt2.datepicker('option', 'minDate', minDate);
            $(this).datepicker('option', 'minDate', minDate);
        }
    });
    $('#dt2').datepicker({
        dateFormat: "dd-M-yy"
    });
});
  </script>
  </div>
</body>

</html>

<script src="public/js/jquery.number.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="public/js/sb-admin.min.js"></script>
  <!-- Custom scripts for this page-->
  <script src="public/js/sb-admin-datatables.min.js"></script>
  <script src="public/js/Chart.min.js"></script>
  <script src="public/js/app.js"></script>
  <script src="public/js/doanh_thu_theo_ngay.js"></script>
  <script src="public/js/doanh_thu_theo_tuan.js"></script>
  <script src="public/js/doanh_thu_theo_thang.js"></script>
  <script src="public/js/doanh_thu_theo_quy.js"></script>
  <script src="public/js/sl_theo_tuan.js"></script>
  <script src="public/js/accounting.min.js"></script>
  <script src="public/js/cbpFWTabs.js"></script>
  <script>
    (function() {

      [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
        new CBPFWTabs( el );
      });

    })();
  </script>
  <script>
    $('#price').number(true);
    $('#gia_khuyen_mai').number(true);
  </script>
<script>
if ($('.container').hasClass('auto_refresh')) {
      setTimeout(function(){
      window.location.reload(1);
  }, 60 *1000);
}
</script>
  </div>
</body>

</html>

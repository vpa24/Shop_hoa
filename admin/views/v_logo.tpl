<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i>Logo</div>
  <div class="card-body">
    <div class="table-responsive">
    {include file="views/logo/v_hien_thi_logo.tpl"}
    </div>
  </div>
  {if isset($smarty.session.thongBao)}
    <script>swal("{$smarty.session.thongBao}");</script>
  {/if}
  {if isset($smarty.session.thongBaoThanhCong)}
    <script>
        swal({
          title: "Thành công!",
          text: "{$smarty.session.thongBaoThanhCong}!",
          icon: "success"
          }).then(function() {
              window.location = "logo.php";
          });
    </script>
  {/if}

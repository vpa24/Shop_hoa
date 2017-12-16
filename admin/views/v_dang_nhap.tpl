<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Đăng nhập</div>
      <div class="card-body">
        <form method="POST" action="dang_nhap.php" autocomplete="off">
          <div class="form-group">
            <input class="form-control" name="tai_khoan" id="taiKhoan" type="text" 
            min="6" max="50"
            placeholder="Nhập tài khoản" value="{if isset($smarty.post.btn_dang_nhap)}{$smarty.post.tai_khoan}{/if}" autocomplete="off" required>
          </div>
          <div class="form-group">
            <input class="form-control" name="mat_khau" id="matKhau" type="password" 
            min="6" max="50"
            placeholder="Nhập mật khẩu" autocomplete="off" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="btn_dang_nhap">Đăng nhập</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="../index.php">Quay về trang chủ</a>
        </div>
      </div>
    </div>
  </div>
  {if isset($smarty.session.thongBao)}
    <script>swal("{$smarty.session.thongBao}");</script>
  {/if}
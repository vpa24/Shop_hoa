<?php
    session_start();
    include("kiem_tra_session.php");
    class C_dang_xuat
    {
        public function trang_dang_xuat()
        {
            unset($_COOKIE['id']);
            unset($_COOKIE['hoTen']);
            unset($_COOKIE['taiKhoan']);
            header("location:dang_nhap.php");
        }
    }

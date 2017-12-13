<?php
session_start();
if (isset($_SESSION['id'])) {
    header('Location: index.php');
}
class C_dang_nhap
{
    function hien_thi_trang_dang_nhap(){
        //Model
        if(isset($_POST["btn_dang_nhap"]))
		{
			$taiKhoan=$_POST["tai_khoan"];
            $matKhau=$_POST["mat_khau"];
			$this->luu_dang_nhap($taiKhoan,$matKhau);
        }
        if(isset($_SESSION['id'])){
            header("Location: index.php");
        }
        //View
        include("Smarty_admin.php");
        $smarty = new Smarty_Admin();
        $view = "views/v_dang_nhap.tpl";
        $title = "Đăng nhập";
        $smarty->assign("title",$title);
        $smarty->assign("view",$view);
        $smarty->display("layout_dang_nhap.tpl");
    }

    function luu_dang_nhap($taiKhoan, $matKhau){
        include("models/m_dang_nhap.php");
        $m_dang_nhap=new M_dang_nhap();
        $user=$m_dang_nhap->kt_dang_nhap($taiKhoan,$matKhau);
        if($user){
            $_SESSION['id']=$user->ID;
            $_SESSION['hoTen']=$user->HoTen;
            $_SESSION['taiKhoan']=$user->TaiKhoan;
        }else{
            echo "<script>
            alert('Tên tài khoản hoặc mật khẩu không chính xác');
            </script>";
        }
    }
}
?>
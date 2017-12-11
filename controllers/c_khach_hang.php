<?php
session_start();
class C_khach_hang
{
    function them_khach_hang(){
        if(isset($_POST['luu'])){      
          include("models/m_khach_hang.php");
          $m_khach_hang=new M_khach_hang();
          $ten=$_POST['ten_kh'];
          $phai=$_POST['phai'];
          $email=$_POST['email'];
          $dia_chi=$_POST['dia_chi'];
          $dien_thoai=$_POST['dien_thoai'];
          $kq=$m_khach_hang->Them_khach_hang($ten,$phai,$email,$dia_chi,$dien_thoai);
          $_SESSION['ma_kh']=$kq;
          header('Location: ' . 'dh_thanh_cong.php');
        }
        //View
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $view = "views/v_khach_hang.tpl";
        $smarty->assign('title', "Thông tin khách hàng");
        $smarty->assign('view', $view);
        $smarty->display("khach_hang/layout.tpl");
    }
}
?>

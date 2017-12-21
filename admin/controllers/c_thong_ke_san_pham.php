<?php
session_start();
include("kiem_tra_session.php");
class C_thong_ke_san_pham
{
    function hien_thi_thong_ke_san_pham(){

        //Controller
        include("Smarty_admin.php");
        $smarty = new  Smarty_Admin();
        $view = "views/v_thong_ke_san_pham.tpl";
        $title = "Thống kê sản phẩm";
        $smarty->assign("title",$title);
        $smarty->assign("view", $view);
        $smarty->display("layout.tpl");
    }
    function json_sl_theo_tuan(){
      include("models/m_thong_ke_san_pham.php");
      $m_thong_ke_san_pham = new M_thong_ke_san_pham();
      $sl_theo_tuan=$m_thong_ke_san_pham->theo_ngay();
      print json_encode($sl_theo_tuan, JSON_UNESCAPED_UNICODE);
    }
}
?>

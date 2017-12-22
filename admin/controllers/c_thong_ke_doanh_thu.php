<?php
session_start();
include("kiem_tra_session.php");
class C_thong_ke_doanh_thu
{
    function hien_thi_thong_ke_doanh_thu(){
      include("models/m_thong_ke_doanh_thu.php");
      $m_thong_ke_doanh_thu = new M_thong_ke_doanh_thu();
      $theo_sp=$m_thong_ke_doanh_thu->theo_san_pham();
        //Controller
        include("Smarty_admin.php");
        $smarty = new  Smarty_Admin();
        $view = "views/v_thong_ke_doanh_thu.tpl";
        $title = "Thống kê theo doanh thu";
        $smarty->assign("theo_sp",$theo_sp);
        $smarty->assign("title",$title);
        $smarty->assign("view", $view);
        $smarty->display("layout.tpl");
    }
    function json_doanh_theo_theo_thang(){
      include("models/m_thong_ke_doanh_thu.php");
      $m_thong_ke_doanh_thu = new M_thong_ke_doanh_thu();
      $theo_thang=$m_thong_ke_doanh_thu->theo_thang();
      print json_encode($theo_thang, JSON_UNESCAPED_UNICODE);
    }
}
?>

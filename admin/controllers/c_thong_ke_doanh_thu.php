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
    public function json_theo_quy()
      {
        include("models/m_thong_ke_doanh_thu.php");
        $m_thong_ke_doanh_thu = new M_thong_ke_doanh_thu();
        $quy1=$m_thong_ke_doanh_thu->theo_quy_1();
        $quy2=$m_thong_ke_doanh_thu->theo_quy_2();
        $quy3=$m_thong_ke_doanh_thu->theo_quy_3();
        $quy4=$m_thong_ke_doanh_thu->theo_quy_4();

        $mang[0] = array('quy' => 1,'tong_tt'=>$quy1->tong_tt );
        $mang[1] = array('quy' => 2,'tong_tt'=>$quy2->tong_tt );
        $mang[2] = array('quy' => 3,'tong_tt'=>$quy3->tong_tt );
        $mang[3] = array('quy' => 4,'tong_tt'=>$quy4->tong_tt );
        print json_encode($mang, JSON_UNESCAPED_UNICODE);
      }
}
?>

<?php
class C_tin_tuc {
    function hien_thi_ct_tin_tuc(){
      if(isset($_GET['ma_tin'])){
          $ma_tin = $_GET['ma_tin'];
      }
        //Model
        include("models/m_tin_tuc.php");
        $m_tin_tuc = new M_tin_tuc();
        $tin_tuc = $m_tin_tuc->chi_tiet_tt($ma_tin);

        //View
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $view = "views/v_chi_tiet_tin_tuc.tpl";
        $title = $tin_tuc->TenTT;
        $smarty->assign('title', $title);
        $smarty->assign('tin_tuc', $tin_tuc);
        $smarty->assign('view', $view);
        $smarty->display("chi_tiet_tin_tuc/layout.tpl");
    }
}
?>

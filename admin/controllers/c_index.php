<?php
class C_index {
    function hien_thi_trang_index(){
        //Model
        include("models/m_index.php");
        $m_index = new M_index();
        $dem_tin_tuc = $m_index->dem_tin_tuc();
        $dem_hoa = $m_index->dem_hoa();
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_Admin();
        $view = "views/v_index.tpl";
        $title = "Trang quản lý";
        $smarty->assign("title",$title);
        $smarty->assign("dem_tin_tuc",$dem_tin_tuc);
        $smarty->assign("dem_hoa",$dem_hoa);
        $smarty->assign("view", $view);
        $smarty->display("layout.tpl");
    }
}
?>
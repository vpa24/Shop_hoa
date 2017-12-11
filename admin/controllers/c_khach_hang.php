<?php
class C_khach_hang 
{
    function hien_thi_khach_hang(){
        //Model
        include("models/m_khach_hang.php");
        $m_khach_hang = new M_khach_hang();
        $doc_khach_hang = $m_khach_hang->doc_tat_ca_khach_hang();
        //Controller
        include("Smarty_admin.php");
        $smarty = new  Smarty_Admin();
        $view = "views/v_khach_hang.tpl";
        $title = "Khách hàng";
        $smarty->assign("title",$title);
        $smarty->assign("doc_khach_hang", $doc_khach_hang);
        $smarty->assign("view", $view);
        $smarty->display("layout.tpl");
    }
}
?>
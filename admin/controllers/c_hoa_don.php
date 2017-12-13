<?php
session_start();
include("kiem_tra_session.php");
class C_hoa_don 
{
    function hien_thi_hoa_don(){
        //Model

        //Controller
        include("Smarty_admin.php");
        $smarty = new  Smarty_Admin();
        $view = "views/v_hoa_don.tpl";
        $title = "Danh sách hóa đơn";
        $smarty->assign("title",$title);
        $smarty->assign("view", $view);
        $smarty->display("layout.tpl");
    }
}
?>
<?php
class C_dang_nhap
{
    function hien_thi_trang_dang_nhap(){
        //Model

        //View
        include("Smarty_admin.php");
        $smarty = new Smarty_Admin();
        $view = "views/v_dang_nhap.tpl";
        $title = "Đăng nhập";
        $smarty->assign("title",$title);
        $smarty->assign("view",$view);
        $smarty->display("layout_dang_nhap.tpl");
    }
}
?>
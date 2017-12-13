<?php
class C_gioi_thieu
{
    function hien_thi_trang_gioi_thieu(){
        //Model

        //View
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $title = "Giới thiệu";
        $view = "views/v_gioi_thieu.tpl";
        $smarty->assign('view', $view);
        $smarty->assign('title', $title);
        $smarty->display("gioi_thieu/layout.tpl");
    }
}
?>
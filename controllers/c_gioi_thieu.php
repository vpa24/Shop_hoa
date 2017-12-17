<?php
session_start();
class C_gioi_thieu
{
    public function hien_thi_trang_gioi_thieu()
    {
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $title = "Giới thiệu";
        $view = "views/v_gioi_thieu.tpl";
        $smarty->assign('view', $view);
        $smarty->assign('title', $title);
        $smarty->display("gioi_thieu/layout.tpl");
    }
}

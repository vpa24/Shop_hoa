<?php
class C_lien_he
{
    public function hien_thi_trang_lien_he()
    {
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $title = "Liên hệ";
        $smarty->assign('title', $title);
        $view = "views/v_lien_he.tpl";
        $smarty->assign('view', $view);
        $smarty->display("gioi_thieu/layout.tpl");
    }
}

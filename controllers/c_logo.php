<?php
session_start();
class C_logo
{
    public function hien_thi_logo()
    {
      include("models/m_logo.php");
      $m_logo = new M_logo();
      $logo=$m_logo->hien_thi();
      include("Smarty_shop_hoa.php");
      $smarty = new Smarty_Shop_Hoa();
      $smarty->assign('logo', $logo);
      $view_header = "views/v_header.tpl";
      $smarty->assign('view_header', $view_header);
      $smarty->display("layout_trang_chu.tpl");
    }
}

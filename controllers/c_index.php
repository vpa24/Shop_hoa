<?php
class C_index
{
    function hien_thi_trang_index(){
        //Model
          //doc hoa
        include("models/m_index.php");
        $m_index = new M_index();
        $doc_hoa = $m_index->doc_tat_ca_hoa();
          //doc tin_tuc
        include("models/m_tin_tuc.php");
        $m_tin_tuc=new M_tin_tuc();
        $tin_tuc=$m_tin_tuc->doc_tat_ca_su_kien();
        //make url
        include("URL.php");
        //View
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $view = "views/v_index.tpl";
        $title = "Trang chủ";
        $smarty->assign('title', $title);
        $smarty->assign('doc_hoa', $doc_hoa);
        $smarty->assign('tin_tuc', $tin_tuc);
        $smarty->assign('view', $view);
        $smarty->display("layout.tpl");
    }
}
?>

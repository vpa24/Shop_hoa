<?php
class C_hoa 
{
    function hien_thi_hoa(){
        //Model
        include("models/m_hoa.php");
        $m_hoa = new M_hoa();
        $doc_hoa = $m_hoa->doc_tat_ca_hoa();
        //Controller
        include("Smarty_admin.php");
        $smarty = new  Smarty_Admin();
        $view = "views/v_hoa.tpl";
        $title = "Danh sách hoa";
        $smarty->assign("title",$title);
        $smarty->assign("doc_hoa", $doc_hoa);
        $smarty->assign("view", $view);
        $smarty->display("layout.tpl");
    }
}
?>
<?php
class C_tin_tuc 
{
    function hien_thi_tin_tuc(){
        //Model
        include("models/m_tin_tuc.php");
        $m_tin_tuc = new M_tin_tuc();
        $doc_tin_tuc = $m_tin_tuc->doc_tat_ca_tin_tuc();
        //Controller
        include("Smarty_admin.php");
        $smarty = new  Smarty_Admin();
        $view = "views/v_tin_tuc.tpl";
        $title = "Danh sách tin tức";
        $smarty->assign("title",$title);
        $smarty->assign("doc_tin_tuc", $doc_tin_tuc);
        $smarty->assign("view", $view);
        $smarty->display("layout.tpl");
    }
}
?>
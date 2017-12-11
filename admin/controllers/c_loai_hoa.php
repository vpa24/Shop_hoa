<?php
class C_loai_hoa 
{
    function hien_thi_loai_hoa(){
        //Model
        include("models/m_loai_hoa.php");
        $m_loai_hoa = new M_loai_hoa();
        $doc_loai_hoa = $m_loai_hoa->doc_tat_ca_loai_hoa();
        if(isset($_POST['btn_update'])){
            $tenLoai = $_POST['ten_loai'];
            $maLoai = $_POST['ma_loai'];
            print_r($tenLoai);
            $update = $m_loai_hoa->update_loai_hoa($tenLoai,$maLoai);
        }
        //Controller
        include("Smarty_admin.php");
        $smarty = new  Smarty_Admin();
        $view = "views/v_loai_hoa.tpl";
        $title = "Danh sách loại hoa";
        $smarty->assign("title",$title);
        $smarty->assign("doc_loai_hoa",$doc_loai_hoa);
        $smarty->assign("view", $view);
        $smarty->display("layout.tpl");
    }
}
?>
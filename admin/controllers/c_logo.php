<?php
session_start();
include("kiem_tra_session.php");
class C_logo
{
    function hien_thi_logo(){
        //Model
        unset($_SESSION['thongBao']);
        unset($_SESSION['thongBaoThanhCong']);
        include("models/m_logo.php");
        $m_logo = new M_logo();
        $doc_logo = $m_logo->doc_tat_ca_logo();
        $this->Sua();
        //Controller
        include("Smarty_admin.php");
        $smarty = new  Smarty_Admin();
        $view = "views/v_logo.tpl";
        $title = "Logo";
        $smarty->assign("title",$title);
        $smarty->assign("doc_logo", $doc_logo);
        $smarty->assign("view", $view);
        $smarty->display("layout.tpl");
    }
    public function Sua(){
      if(isset($_POST['btn_update_logo'])){
        $m_logo = new M_logo();
        $id = $_POST['id'];
        $ChieuCao = $_POST['cao'];
        $DoRong = $_POST['rong'];
        include("UploadFile.php");
        $hinh=UploadFile($m_logo->doc_theo_ma($id)->Hinh,'logo');
        $update = $m_logo->update_logo($hinh,$ChieuCao,$DoRong,$id);
        if ($update) {
            $_SESSION['thongBaoThanhCong']="Cập nhật sản phẩm thành công";
        }
      }
    }
}
?>

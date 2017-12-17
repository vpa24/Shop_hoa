<?php
session_start();
include("kiem_tra_session.php");
class C_quang_cao 
{
    function hien_thi_quang_cao(){
        unset($_SESSION['thongBao']);
        unset($_SESSION['thongBaoThanhCong']);
        //Model
        include("models/m_quang_cao.php");
        $m_quang_cao = new M_quang_cao();
        $doc_quang_cao = $m_quang_cao->doc_tat_ca_quang_cao();
        $them_quang_cao = $m_quang_cao->them_quang_cao();
        if(isset($_POST['btn_update'])){
            $id = $_POST['id'];
            $tieuDe = $_POST['tieu_de'];
            $duongDan = $_POST['duong_dan'];

             //update hinh
             $target_dir = "../public/images/quang_cao/";
             $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
             $uploadOk = 1;
             $hinh = "";
             $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
             $xuat = $m_quang_cao->doc_quang_cao_theo_id($id);
             if(!empty($_FILES['hinh']['name'])){
                 if($_FILES["hinh"]["size"] > 500000){
                     $_SESSION['thongBao'] = "File không được lớn hơn 5MB";
                     $uploadOk = 0;
                 }
                 if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                 && $imageFileType != "gif" ){
                     $_SESSION['thongBao'] = "Không phải file hình";
                     $uploadOk = 0;
                 }
                 if ($uploadOk == 0) {
                     $_SESSION['thongBao'] = "Upload ảnh bị lỗi";
                 }else{
                     if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                         $hinh = $_FILES["hinh"]["name"];
                     }else{
                         $_SESSION['thongBao'] = "Lỗi upload file"; 
                     }
                 }
             }else{
                 $hinh = $xuat->Hinh;
                 $update = $m_quang_cao->update_quang_cao($tieuDe,$hinh,$duongDan,$id);
                 if($update){
                     $_SESSION['thongBaoThanhCong']="Cập nhật quảng cáo thành công";
                 }
             }
             if($hinh != ""){
                $update = $m_quang_cao->update_quang_cao($tieuDe,$hinh,$duongDan,$id);
                 if($update){
                     $_SESSION['thongBaoThanhCong']="Cập nhật quảng cáo thành công";
                 }
             }
        }
        //Controller
        include("Smarty_admin.php");
        $smarty = new  Smarty_Admin();
        $view = "views/v_quang_cao.tpl";
        $title = "Danh sách slider";
        $smarty->assign("title",$title);
        $smarty->assign("doc_quang_cao",$doc_quang_cao);
        $smarty->assign("view", $view);
        $smarty->display("layout.tpl");
    }
}
?>
<?php
session_start();
include("kiem_tra_session.php");
class C_tin_tuc 
{
    function hien_thi_tin_tuc(){
        //Model
        include("models/m_tin_tuc.php");
        $m_tin_tuc = new M_tin_tuc();
        $doc_tin_tuc = $m_tin_tuc->doc_tat_ca_tin_tuc();
        $doc_loai_tin = $m_tin_tuc->doc_loai_tin();
        $them_tin_tuc = $m_tin_tuc->them_tin_tuc();
        if(isset($_POST['btn_update'])){
            $maTT = $_POST['ma_tt'];
            $tenTT = $_POST['ten_tt'];
            $noiDung = $_POST['noi_dung'];
            $maLoaiTin = $_POST['loai_tin'];
            //update hinh
            $target_dir = "../public/images/tin_tuc/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            $uploadOk = 1;
            $hinh = "";
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $xuat = $m_tin_tuc->doc_tin_tuc_theo_ma($maTT);
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
                $update = $m_tin_tuc->update_tin_tuc($tenTT,$noiDung,$hinh,$maLoaiTin,$maTT);
                if($update){
                    $_SESSION['thongBaoThanhCong']="Cập nhật tin tức thành công";
                }
            }
            if($hinh != ""){
                $update = $m_tin_tuc->update_tin_tuc($tenTT,$noiDung,$hinh,$maLoaiTin,$maTT);
                if($update){
                    $_SESSION['thongBaoThanhCong']="Cập nhật tin tức thành công";
                }
            }
        }
        //Controller
        include("Smarty_admin.php");
        $smarty = new  Smarty_Admin();
        $view = "views/v_tin_tuc.tpl";
        $title = "Danh sách tin tức";
        $smarty->assign("title",$title);
        $smarty->assign("doc_tin_tuc", $doc_tin_tuc);
        $smarty->assign("doc_loai_tin", $doc_loai_tin);
        $smarty->assign("view", $view);
        $smarty->display("layout.tpl");
    }
}
?>
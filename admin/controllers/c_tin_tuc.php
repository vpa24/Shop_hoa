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
                    echo "<script>
                    alert('File không được quá 5MB');
                    </script>";
                    $uploadOk = 0;
                }
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ){
                    echo "<script>
                    alert('Không phải file hình');
                    </script>";
                    $uploadOk = 0;
                }
                if ($uploadOk == 0) {
                    echo "<script>
                    alert('Update ảnh bị lỗi');
                    </script>";
                }else{
                    if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                        $hinh = $_FILES["hinh"]["name"];
                    }else{
                        echo "<script>
                        window.alert('Lỗi upload file')
                        </script>";  
                    }
                }
            }else{
                $hinh = $xuat->Hinh;
                $update = $m_tin_tuc->update_tin_tuc($tenTT,$noiDung,$hinh,$maLoaiTin,$maTT);
                if($update){
                    header('Location: tin_tuc.php');
                }
            }
            if($hinh != ""){
                $update = $m_tin_tuc->update_tin_tuc($tenTT,$noiDung,$hinh,$maLoaiTin,$maTT);
                if($update){
                    header('Location: tin_tuc.php');
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
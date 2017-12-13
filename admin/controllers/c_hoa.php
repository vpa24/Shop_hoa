<?php
session_start();
include("kiem_tra_session.php");
class C_hoa 
{
    function hien_thi_hoa(){
        //Model
        include("models/m_hoa.php");
        $m_hoa = new M_hoa();
        $doc_hoa = $m_hoa->doc_tat_ca_hoa();
        $them_hoa = $m_hoa->them_hoa();
        include("models/m_loai_hoa.php");
        $m_loai_hoa = new M_loai_hoa();
        $doc_loai_hoa = $m_loai_hoa->doc_tat_ca_loai_hoa();
        if(isset($_POST['btn_update'])){
            $maHoa = $_POST['ma_hoa'];
            $tenHoa = $_POST['ten_hoa'];
            $gia = $_POST['gia'];
            $thanhPhan = $_POST['thanh_phan'];
            $noiDung = $_POST['noi_dung'];
            $maLoai = $_POST['loai_hoa'];

            //update hinh
            $target_dir = "../public/images/hoa/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            $uploadOk = 1;
            $hinh = "";
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $xuat = $m_hoa->doc_hoa_theo_ma($maHoa);
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
                $update = $m_hoa->update_hoa($tenHoa,$gia,$thanhPhan,$noiDung,$hinh,$maLoai,$maHoa);
                if($update){
                    header('Location: hoa.php');
                }
            }
            if($hinh != ""){
                $update = $m_hoa->update_hoa($tenHoa,$gia,$thanhPhan,$noiDung,$hinh,$maLoai,$maHoa);
                if($update){
                    header('Location: hoa.php');
                }
            }
        }
        //Controller
        include("Smarty_admin.php");
        $smarty = new  Smarty_Admin();
        $view = "views/v_hoa.tpl";
        $title = "Danh sách hoa";
        $smarty->assign("title",$title);
        $smarty->assign("doc_hoa", $doc_hoa);
        $smarty->assign("doc_loai_hoa",$doc_loai_hoa);
        $smarty->assign("view", $view);
        $smarty->display("layout.tpl");
    }
}
?>
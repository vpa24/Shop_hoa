<?php
require_once("database.php");
class M_thong_tin extends database
{
    function doc_tat_ca_thong_tin(){
        $sql = "select * from thong_tin ORDER BY ThoiGian DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function doc_thong_tin_theo_id($id){
        $sql = "SELECT * FROM thong_tin WHERE id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    function update_thong_tin($tieuDe,$hinh,$duongDan,$hanhDong,$id){
        $sql = "UPDATE thong_tin SET TieuDe=?,Hinh=?,DuongDan=?,HanhDong=?,ThoiGian=now() WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($tieuDe,$hinh,$duongDan,$hanhDong,$id));
    }
    public function them_thong_tin(){
        if (isset($_POST["btn_add"])) 
        {
            $tieuDe = $_POST['tieu_de'];
            $duongDan = $_POST['duong_dan'];
            $hanhDong = $_POST['hanh_dong'];

            //upload hình
            $target_dir = "../public/images/banner/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            $uploadOk = 1;
            $hinh = "";
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            if (isset($_FILES['hinh']))
            {
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
                    if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                        $hinh = $_FILES["hinh"]["name"];
                        $sql = "INSERT INTO thong_tin(TieuDe,Hinh,DuongDan,HanhDong,ThoiGian) VALUES ('$tieuDe', '$hinh', '$duongDan','$hanhDong', now())";
                        $this->setQuery($sql);
                        $this->execute();
                        if($this){
                            $_SESSION['thongBaoThanhCong']="Thêm thông tin thành công";
                        }
                    } else{
                        $_SESSION['thongBao'] = "Lỗi upload file"; 
                    }
                }
            }
            else{
                echo 'Bạn chưa chọn file upload';
            }
        }
    }
}
?>
<?php
require_once("database.php");
class M_hoa extends database
{
    
    function doc_tat_ca_hoa(){
        if(isset($_GET['loai_hoa'])){
            $sql = "select h.*, lh.TenLoai from hoa h INNER JOIN loai_hoa lh on lh.MaLoai = h.MaLoai where h.Maloai =".$_GET['loai_hoa'];
            $sql .= " ORDER BY h.ThoiGian DESC";
        }else{
            $sql = "select h.*, lh.TenLoai from hoa h INNER JOIN loai_hoa lh on lh.MaLoai = h.MaLoai ORDER BY ThoiGian DESC";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function update_hoa($tenHoa,$gia,$thanhPhan,$noiDung,$hinh,$maLoai,$maHoa){
        $sql = "UPDATE hoa SET TenHoa=?,Gia=?,ThanhPhan=?,NoiDung=?,Hinh=?,MaLoai=?,ThoiGian=now() WHERE MaHoa=?";
        $this->setQuery($sql);
        return $this->execute(array($tenHoa,$gia,$thanhPhan,$noiDung,$hinh,$maLoai,$maHoa));
    }
    function doc_hoa_theo_ma($maHoa){
        $sql = "SELECT * FROM hoa WHERE MaHoa=?";
        $this->setQuery($sql);
        return $this->loadRow(array($maHoa));
    }
    public function them_hoa(){
        if (isset($_POST["btn_add"])) 
        {
            $tenHoa = $_POST['ten_hoa'];
            $gia = $_POST['gia'];
            $thanhPhan = $_POST['thanh_phan'];
            $noiDung = $_POST['noi_dung'];
            $maLoai = $_POST['loai_hoa'];

            //upload hình
            $target_dir = "../public/images/hoa/";
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
                        $sql = "INSERT INTO hoa(TenHoa,Gia,ThanhPhan,NoiDung,Hinh,MaLoai,ThoiGian) VALUES ('$tenHoa', '$gia', '$thanhPhan', '$noiDung', '$hinh', '$maLoai', now())";
                        $this->setQuery($sql);
                        $this->execute();
                        if($this){
                            $_SESSION['thongBaoThanhCong']="Thêm sản phẩm thành công";
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
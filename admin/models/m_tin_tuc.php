<?php
require_once("database.php");
class M_tin_Tuc extends database
{
    function doc_tat_ca_tin_tuc(){
        $sql = "select tt.*, lt.TenLoaiTin from tin_tuc tt INNER JOIN loai_tin lt ON lt.MaLoaiTin = tt.MaLoaiTin ORDER BY tt.ThoiGian DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function update_tin_tuc($tenTT,$noiDung,$hinh,$maLoaiTin,$maTT){
        $sql = "UPDATE tin_tuc SET TenTT=?,NoiDung=?,Hinh=?,ThoiGian=now(),MaLoaiTin=? WHERE MaTT=?";
        $this->setQuery($sql);
        return $this->execute(array($tenTT,$noiDung,$hinh,$maLoaiTin,$maTT));
    }
    function doc_loai_tin(){
        $sql = "SELECT * FROM loai_tin";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function doc_tin_tuc_theo_ma($maTT){
        $sql = "SELECT * FROM tin_tuc WHERE MaTT=?";
        $this->setQuery($sql);
        return $this->loadRow(array($maTT));
    }
    public function them_tin_tuc(){
        if (isset($_POST["btn_add"])) 
        {
            $tenTT = $_POST['ten_tt'];
            $noiDung = $_POST['noi_dung'];
            $loaiTin = $_POST['loai_tin'];

            //upload hình
            $target_dir = "../public/images/tin_tuc/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            $uploadOk = 1;
            $hinh = "";
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            if (isset($_FILES['hinh']))
            {
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
                    alert('Upload ảnh bị lỗi');
                    </script>";
                }else{
                    if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                        $hinh = $_FILES["hinh"]["name"];
                        $sql = "INSERT INTO tin_tuc(TenTT,NoiDung,Hinh,ThoiGian,MaLoaiTin) VALUES ('$tenTT', '$noiDung', '$hinh', now(), '$loaiTin')";
                        $this->setQuery($sql);
                        $this->execute();
                        if($this){
                            header('Location: tin_tuc.php');
                        }
                    } else{
                            echo "<script>
                        window.alert('Lỗi upload file')
                        </script>";  
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
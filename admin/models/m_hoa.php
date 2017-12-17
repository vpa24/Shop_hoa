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
    function update_hoa($tenHoa,$tenHoaURL,$gia,$giakm,$thanhPhan,$noiDung,$hinh,$maLoai,$maHoa){
        $sql = "UPDATE shop_hoa.hoa SET TenHoa='$tenHoa', TenHoa_URL='$tenHoaURL',
         Gia='$gia',GiaKhuyenMai='$giakm', ThanhPhan='$thanhPhan', NoiDung='$noiDung',
         Hinh='$hinh', MaLoai='$maLoai',ThoiGian=now() WHERE MaHoa='$maHoa'";
        $this->setQuery($sql);
        return $this->execute();
    }
    function doc_hoa_theo_ma($maHoa){
        $sql = "SELECT * FROM hoa WHERE MaHoa=?";
        $this->setQuery($sql);
        return $this->loadRow(array($maHoa));
    }
    public function them_hoa($tenHoa, $gia, $thanhPhan, $noiDung, $hinh, $maLoai){
      $sql = "INSERT INTO hoa(TenHoa,Gia,ThanhPhan,NoiDung,Hinh,MaLoai,ThoiGian) VALUES ('$tenHoa', '$gia', '$thanhPhan', '$noiDung', '$hinh', '$maLoai', now())";
      $this->setQuery($sql);
      return $this->execute();
    }
}
?>

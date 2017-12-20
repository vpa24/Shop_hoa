<?php
require_once("database.php");
class M_hoa extends database
{
    function doc_tat_ca_hoa($vt=-1,$limit=-1){
        if(isset($_GET['loai_hoa'])){
            $sql = "select * from hoa where Maloai =".$_GET['loai_hoa'];
        }else{
            $sql = "select * from hoa";
        }
        if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function doc_ten_loai_hoa($ma_loai){
      $sql="select * from loai_hoa where MaLoai=".$ma_loai;
      $this->setQuery($sql);
      return $this->loadRow();
    }
    function doc_loai_hoa(){
        $sql = "select * from loai_hoa";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function doc_hoa_theo_ma($maHoa){
        $sql = "SELECT * FROM hoa WHERE MaHoa=?";
        $this->setQuery($sql);
        return $this->loadRow(array($maHoa));
    }
    function CapNhapSoLuongHoa($sl,$mahoa){
      $sql = "UPDATE hoa SET SoLuongSP='$sl' WHERE MaHoa='$mahoa'";
      $this->setQuery($sql);
      return $this->execute();
    }
}
?>

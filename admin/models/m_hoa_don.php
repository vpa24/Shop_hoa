<?php
require_once("database.php");
class M_hoa_don extends database
{
    public function xem_hoa_don(){
        $sql="SELECT * FROM hoa_don inner join khach_hang on khach_hang.ma_khach_hang=hoa_don.ma_khach_hang";
		    $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function Chi_Tiet($ma_hoa_don){
      $sql="SELECT * FROM hoa_don inner join chi_tiet_hoa_don on hoa_don.ma_hoa_don=chi_tiet_hoa_don.ma_hoa_don inner join khach_hang on khach_hang.ma_khach_hang=hoa_don.ma_khach_hang where hoa_don.ma_hoa_don=$ma_hoa_don limit 1";
      $this->setQuery($sql);
      return $this->loadRow();
    }
    public function SanPhamTheoMaHoaDon($ma_hoa_don){
      $sql="SELECT * FROM chi_tiet_hoa_don inner join hoa on chi_tiet_hoa_don.MaHoa=hoa.MaHoa where ma_hoa_don=$ma_hoa_don";
      $this->setQuery($sql);
      return $this->loadAllRows();
    }
}
?>

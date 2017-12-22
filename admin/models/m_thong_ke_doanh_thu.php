<?php
require_once("database.php");
class M_thong_ke_doanh_thu extends database
{
    function theo_san_pham(){
        $sql = "SELECT hoa.*,sum(tong_thanh_tien) as tong_tt FROM shop_hoa.chi_tiet_hoa_don inner join hoa_don on hoa_don.ma_hoa_don=chi_tiet_hoa_don.ma_hoa_don inner join hoa on hoa.MaHoa=chi_tiet_hoa_don.MaHoa group by hoa.MaHoa";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function theo_thang(){
      $sql="SELECT month(ngay_dat)as thang,sum(tong_thanh_tien) as tong_tt FROM shop_hoa.chi_tiet_hoa_don inner join hoa_don on hoa_don.ma_hoa_don=chi_tiet_hoa_don.ma_hoa_don WHERE MONTH(ngay_dat) = MONTH(CURRENT_DATE())
AND YEAR(ngay_dat) = YEAR(CURRENT_DATE()) group by month(ngay_dat)";
      $this->setQuery($sql);
      return $this->loadAllRows();
    }

}

?>

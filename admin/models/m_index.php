<?php
require_once("database.php");
class M_index extends database
{
    function dem_tin_tuc(){
        $sql = "select COUNT(*) as dem from tin_tuc";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    function dem_hoa(){
        $sql = "select COUNT(*) as dem from hoa";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    function So_luong_loai_hoa(){
      $sql="SELECT TenLoai, count(hoa.MaLoai) as so_luong FROM shop_hoa.loai_hoa inner join shop_hoa.hoa on hoa.MaLoai=loai_hoa.MaLoai group by hoa.MaLoai";
      $this->setQuery($sql);
      return $this->loadAllRows();
    }
    function so_luong_hoa_ban(){
      $sql="SELECT ngay_dat,sum(so_luong) as so_luong_ban FROM shop_hoa.chi_tiet_hoa_don inner join hoa_don on hoa_don.ma_hoa_don=chi_tiet_hoa_don.ma_hoa_don WHERE MONTH(ngay_dat) = MONTH(CURRENT_DATE())
AND YEAR(ngay_dat) = YEAR(CURRENT_DATE()) group by ngay_dat";
      $this->setQuery($sql);
      return $this->loadAllRows();
    }
    function doanh_thu_theo_tuan(){
      $sql="SELECT week(ngay_dat)as tuan,sum(tong_thanh_tien) as tong_tt FROM shop_hoa.chi_tiet_hoa_don inner join hoa_don on hoa_don.ma_hoa_don=chi_tiet_hoa_don.ma_hoa_don WHERE MONTH(ngay_dat) = MONTH(CURRENT_DATE())
AND YEAR(ngay_dat) = YEAR(CURRENT_DATE()) group by week(ngay_dat)";
      $this->setQuery($sql);
      return $this->loadAllRows();
    }
}
?>

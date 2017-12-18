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
}
?>

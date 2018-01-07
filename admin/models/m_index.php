<?php
require_once("database.php");
class M_index extends database
{
    public function dem_tin_tuc()
    {
        $sql = "select COUNT(*) as dem from tin_tuc";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function dem_hoa()
    {
        $sql = "select COUNT(*) as dem from hoa";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function So_luong_loai_hoa()
    {
        $sql="SELECT TenLoai, count(hoa.MaLoai) as so_luong FROM shop_hoa.loai_hoa inner join shop_hoa.hoa on hoa.MaLoai=loai_hoa.MaLoai group by hoa.MaLoai";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    
    public function so_hoa_don_da_dat_trong_ngay($day)
    {
        $sql = "select COUNT(*) as count from hoa_don  WHERE day(ngay_dat) = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($day));
    }
    public function so_hoa_don_chua_duyet_trong_ngay($day)
    {
        $sql = "select COUNT(*) as count from hoa_don WHERE day(ngay_dat) = ? and trang_thai = 'Chưa xử lý'";
        $this->setQuery($sql);
        return $this->loadRow(array($day));
    }
}

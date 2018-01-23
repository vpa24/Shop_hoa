
<?php
require_once("database.php");
class M_khach_hang extends database
{
    function doc_tat_ca_khach_hang(){
        $sql = "SELECT *,sum(tong_thanh_tien) as tong_chi_tieu,count(ma_hoa_don) as don_hang,max(ma_hoa_don) as don_hang_gan_nhat  fROM khach_hang inner join hoa_don on hoa_don.ma_khach_hang =khach_hang.ma_khach_hang group by hoa_don.ma_khach_hang";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>
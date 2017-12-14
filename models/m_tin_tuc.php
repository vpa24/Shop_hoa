<?php
require_once("database.php");
class M_tin_tuc extends database
{
    public function doc_tat_ca_su_kien()
    {
        $sql = "select * from tin_tuc limit 0,4";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function chi_tiet_tt($ma_tin)
    {
        $sql="select * from tin_tuc where MaTT=?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_tin));
    }
}

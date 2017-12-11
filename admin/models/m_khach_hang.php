<?php
require_once("database.php");
class M_khach_hang extends database
{
    function doc_tat_ca_khach_hang(){
        $sql = "select * from khach_hang";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>
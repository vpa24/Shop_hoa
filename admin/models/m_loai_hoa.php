<?php
require_once("database.php");
class M_loai_hoa extends database
{
    function doc_tat_ca_loai_hoa(){
        $sql = "select * from loai_hoa";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>
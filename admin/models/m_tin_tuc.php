<?php
require_once("database.php");
class M_tin_Tuc extends database
{
    function doc_tat_ca_tin_tuc(){
        $sql = "select * from tin_tuc";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>
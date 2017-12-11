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
}
?>

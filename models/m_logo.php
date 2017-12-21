<?php
require_once("database.php");
class M_logo extends database
{
    function hien_thi(){
        $sql = "select * form logo";
        $this->setQuery($sql);
        return $this->loadRow();
    }
}

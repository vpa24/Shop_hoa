<?php
require_once("database.php");
class M_logo extends database
{
    function doc_tat_ca_logo(){
        $sql = "select * from logo";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    function doc_theo_ma($id){
        $sql = "SELECT * FROM logo WHERE idlogo=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    function update_logo($hinh,$cao,$rong,$id){
        $sql = "UPDATE logo SET Hinh=?,ChieuCao=?,DoRong=? WHERE idlogo=?";
        $this->setQuery($sql);
        return $this->execute(array($hinh,$cao,$rong,$id));
    }
}
?>

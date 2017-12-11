<?php
require_once("database.php");
class M_hoa extends database
{
    function doc_tat_ca_hoa(){
        if(isset($_GET['loai_hoa'])){
            $sql = "select h.*, lh.TenLoai from hoa h INNER JOIN loai_hoa lh on lh.MaLoai = h.MaLoai where h.Maloai =".$_GET['loai_hoa'];
        }else{
            $sql = "select h.*, lh.TenLoai from hoa h INNER JOIN loai_hoa lh on lh.MaLoai = h.MaLoai";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>
<?php
require_once("database.php");
class M_chi_tiet_hoa extends database
{

    function doc_theo_ma_hoa($id)
    {
        $sql="select * from hoa where MaHoa=?";
        $this->setQuery($sql);
        $param=array($id);
        return $this->loadRow($param);
    }
    function doc_hoa_cung_loai($maLoai, $id){
        $sql = "select * from hoa where MaLoai = ? and MaHoa != ? ";
        $this->SetQuery($sql);
        return $this->loadAllRows(array($maLoai,$id));
    }
}
?>
<?php
require_once("database.php");
class M_hoa_don extends database
{
    function luu_hoa_don($maKH,$ngaydat)
    {
        $sql="INSERT INTO  hoa_don values(?,?,?,?)";
        $this->setQuery($sql);
        $param=array(NULL,$maKH,$ngaydat,'chưa xử lý');
        $result = $this->execute($param);
        if($result)
          return $this->getLastId();
    }
    function luu_chi_tiet_hoa_don($maHoa,$sl,$maHoaDon){
      $sql="INSERT INTO  chi_tiet_hoa_don values(?,?,?,?)";
      $this->setQuery($sql);
      $param=array(NULL,$maHoa,$sl,$maHoaDon);
      return $this->execute($param);
    }
}
?>

<?php
require_once("database.php");
class M_khach_hang extends database
{
  public function Them_khach_hang($ten_kh,$phai,$email,$dia_chi,$dien_thoai){
    $sql="INSERT INTO  khach_hang values(?,?,?,?,?,?)";
    $this->setQuery($sql);
    $param=array(NULL,$ten_kh,$phai,$email,$dia_chi,$dien_thoai);
    $result= $this->execute($param);
    if($result)
       return $this->getLastId();
  }

}
?>

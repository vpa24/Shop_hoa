<?php
session_start();
include("kiem_tra_session.php");
include("RandomColor.php");
use \Colors\RandomColor;
class C_index {
    function hien_thi_trang_index(){
      include("models/m_index.php");
        $m_index = new M_index();
        $dem_tin_tuc = $m_index->dem_tin_tuc();
        $dem_hoa = $m_index->dem_hoa();
        //Hóa đơn chưa xử lý
        include("models/m_hoa_don.php");
        $m_hoa_don=new M_hoa_don();
        $doc_hoa_don=$m_hoa_don->xem_hoa_don_chua_xu_ly();
        //Hóa đơn trong ngày
        $day = date("d");
        $so_hoa_don_trong_ngay  = $m_index->so_hoa_don_trong_ngay($day);
        $so_hoa_don_chua_duyet = $m_index->so_hoa_don_chua_duyet($day);

        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_Admin();
        $view = "views/v_index.tpl";
        $title = "Trang quản lý";
        $smarty->assign("title",$title);
        $smarty->assign("dem_tin_tuc",$dem_tin_tuc);
        $smarty->assign("dem_hoa",$dem_hoa);
        $smarty->assign("doc_hoa_don",$doc_hoa_don);
        $smarty->assign("day",$day);
        $smarty->assign("so_hoa_don_trong_ngay",$so_hoa_don_trong_ngay);
        $smarty->assign("so_hoa_don_chua_duyet",$so_hoa_don_chua_duyet);
        $smarty->assign("view", $view);
        $smarty->display("layout.tpl");
    }
    function json_so_luong_loai_hoa(){

      include("models/m_index.php");
      $m_index = new M_index();
      $so_luong_loai_hoa=$m_index->So_luong_loai_hoa();
      $mang_color=array('color' => RandomColor::one(array('luminosity'=>'dark')) );
      $i=0;
      foreach ($so_luong_loai_hoa as $sl) {
         $mang[$i]= array('TenLoai' =>$sl->TenLoai ,'so_luong'=>$sl->so_luong,'mau'=> RandomColor::one(array('format'=>'hex')));
         $i++;
      }
      print json_encode($mang, JSON_UNESCAPED_UNICODE);
    }
    function json_so_luong_hoa_ban(){
      include("models/m_index.php");
      $m_index = new M_index();
      $so_luong_hoa_ban=$m_index->so_luong_hoa_ban();
      print json_encode($so_luong_hoa_ban, JSON_UNESCAPED_UNICODE);
    }
    function getStartAndEndDate($week, $year)
    {
        $time = strtotime("1 January $year", time());
        $day = date('w', $time);
        $time += ((7*$week)+1-$day)*24*3600;
        $return[0] = date('Y-n-j', $time);
        $return[0]=date("d/m", strtotime($return[0]));
        $time += 6*24*3600;
        $return[1] = date('Y-n-j', $time);
        $return[1]=date("d/m", strtotime($return[1]));
        return $return;
    }
    function json_doanh_thu_theo_tuan(){
      include("models/m_index.php");
      $m_index = new M_index();
      $doanh_thu_theo_tuan=$m_index->doanh_thu_theo_tuan();
      $i=0;
      foreach ($doanh_thu_theo_tuan as $doanh_thu) {
        $ngaybd=$this->getStartAndEndDate($doanh_thu->tuan,date('Y'))[0];
        $ngaykt=$this->getStartAndEndDate($doanh_thu->tuan,date('Y'))[1];
        $mang[$i] = array('tongtt'=>$doanh_thu->tong_tt,'ngay_trong_tuan'=>"$ngaybd - $ngaykt");
        $i++;
      }
      print json_encode($mang, JSON_UNESCAPED_UNICODE);
    }
}
?>

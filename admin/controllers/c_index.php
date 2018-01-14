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
        $doc_hoa_don=$m_hoa_don->xem_hoa_don_chua_xu_ly_hom_nay();
        //Hóa đơn trong ngày
        $day = date("d");
        $so_hoa_don_trong_ngay  = $m_index->so_hoa_don_da_dat_trong_ngay($day);
        $so_hoa_don_chua_duyet = $m_index->so_hoa_don_chua_duyet_trong_ngay($day);

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
    // function json_so_luong_loai_hoa(){

    //   include("models/m_index.php");
    //   $m_index = new M_index();
    //   $so_luong_loai_hoa=$m_index->So_luong_loai_hoa();
    //   $mang_color=array('color' => RandomColor::one(array('luminosity'=>'dark')) );
    //   $i=0;
    //   foreach ($so_luong_loai_hoa as $sl) {
    //      $mang[$i]= array('TenLoai' =>$sl->TenLoai ,'so_luong'=>$sl->so_luong,'mau'=> RandomColor::one(array('format'=>'hex')));
    //      $i++;
    //   }
    //   print json_encode($mang, JSON_UNESCAPED_UNICODE);
    // }
}
?>

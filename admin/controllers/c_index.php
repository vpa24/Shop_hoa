<?php
session_start();
include("kiem_tra_session.php");
class C_index {
    function hien_thi_trang_index(){
        include("models/m_index.php");
        $m_index = new M_index();
        if(isset($_POST['hien_thi'])){
            $day = date("d");
            $so_hoa_don_trong_ngay  = $m_index->so_hoa_don_da_dat_trong_ngay($day)->count;
            $so_hoa_don_chua_duyet = $m_index->so_hoa_don_chua_duyet_trong_ngay($day)->count;
            $mang_hoa_don = array($so_hoa_don_chua_duyet , $so_hoa_don_trong_ngay );
            return json_encode($mang_hoa_don);
        }
        if($_COOKIE['permission']==2){
            $hoa=$m_index->ds_hoa_het_hang();
            $dem_hoa = $m_index->dem_hoa()->count;
            $dem_loai_hoa = $m_index->dem_loai_hoa()->count;
            $hoa_het_hang= $m_index->hoa_het_hang()->count;
        }
        include("Smarty_admin.php");
        $smarty = new Smarty_Admin();
        $view = "views/v_index.tpl";
        $title = "Trang quản lý";
        $smarty->assign("title",$title);
        $smarty->assign("view", $view);
         if($_COOKIE['permission']==2){
            $smarty->assign("dshoa", $hoa);
            $smarty->assign("dem_hoa", $dem_hoa);
            $smarty->assign("dem_loai_hoa", $dem_loai_hoa);
            $smarty->assign("hoa_het_hang", $hoa_het_hang);
         }
        $smarty->display("layout.tpl");
    }
    public function hoa_don_chua_xu_ly()
    {
        if(isset($_POST['hien_thi'])){
            include("models/m_hoa_don.php");
            $m_hoa_don=new M_hoa_don();
            $doc_hoa_don=$m_hoa_don->xem_hoa_don_chua_xu_ly_hom_nay();
            include("Smarty_admin.php");
            $smarty = new Smarty_Admin();
            $smarty->assign("doc_hoa_don",$doc_hoa_don);
            $smarty->display("views/index/v_ds_hoa_don_chua_duyet.tpl");
        }
    }
    public function sua_sl_hoa()
    {
        if(isset($_POST['btn_update'])){
            $maHoa=$_POST['ma_hoa'];
            $sl=$_POST['sl'];
            include("models/m_index.php");
            $m_index = new M_index();
            $update = $m_index->sua_sl($maHoa, $sl);
          if ($update) {
              header('Location: index.php');
          }
        }
    }
}
?>

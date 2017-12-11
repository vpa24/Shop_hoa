<?php
@session_start();
class C_gio_hang{
    function them_gio_hang(){
      if(isset($_GET['MaHoa'])){
        $id=$_GET['MaHoa'];
        if(isset($_POST['them'])){
          $sl=$_POST['so_luong'];
        }
        if(isset($_POST['them_index'])){
          $sl=1;
        }
        if(isset($_SESSION["giohang"])){
          foreach($_SESSION["giohang"] as $k=>$value){
            if($k==$id){
              $value+=$sl;
              $_SESSION["giohang"][$id]=$value;
            }else{
              $_SESSION["giohang"][$id]=$sl;
            }
          }
        }
        if($_SESSION["giohang"]==null){
            $_SESSION["giohang"][$id]=$sl;
        }
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      }

    }
    function xem_gio_hang(){
     include("models/m_hoa.php");
     $m_hoa=new M_hoa();
     $hoa=$m_hoa->doc_tat_ca_hoa();
     // Cập nhật lại số lượng hàng
     if(isset($_POST["btnCapnhat"])){
       $sl=$_POST["sl"];
       $i=0;
       foreach($_SESSION["giohang"] as $k=>$value){
           $_SESSION["giohang"][$k]=$sl[$i];
           $i++;
       }
     }
     $giohang=$_SESSION["giohang"];
     include("URL.php");
     include("Smarty_shop_hoa.php");
     $smarty = new Smarty_Shop_Hoa();
     $view = "views/v_xem_gio_hang.tpl";
     $smarty->assign('title', 'Giỏ hàng của bạn');
     $smarty->assign('giohang', $giohang);
     $smarty->assign('hoa', $hoa);
     $smarty->assign('view', $view);
     $smarty->display("gio_hang/layout.tpl");
   }
    function luu_gio_hang() {
      $MaKH= $_SESSION['ma_kh'];
      $ngay_dat = date('Y-m-d');
      include("models/m_hoa_don.php");
      $m_hoa_don=new M_hoa_don();
      $ma_hoa_don=$m_hoa_don->luu_hoa_don($MaKH,$ngay_dat);
      foreach($_SESSION["giohang"] as $k=>$value){
        $kq=$m_hoa_don->luu_chi_tiet_hoa_don($k,$value,$ma_hoa_don);
      }
      include("Smarty_shop_hoa.php");
      $smarty = new Smarty_Shop_Hoa();
      $view = "views/v_dh_thanh_cong.tpl";
      $smarty->assign('title', 'Đặt hàng thành công');
      $smarty->assign('view', $view);
      $smarty->display("gio_hang/layout.tpl");
    }
}
 ?>

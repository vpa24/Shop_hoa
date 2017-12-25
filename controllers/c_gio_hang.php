<?php
@session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class C_gio_hang
{
    public function them_gio_hang()
    {
        if (isset($_GET['MaHoa']) && isset($_GET['sl'])||(isset($_GET['MaHoa']))) {
            $id=$_GET['MaHoa'];
            $sl=1;
            if (isset($_GET['sl'])) {
                $sl=$_GET['sl'];
            }
            if (isset($_SESSION["giohang"])) {
                foreach ($_SESSION["giohang"] as $k=>$value) {
                    if ($k==$id) {
                        $value+=$sl;
                        $_SESSION["giohang"][$id]=$value;
                    } else {
                        $_SESSION["giohang"][$id]=$sl;
                    }
                }
            }
            if ($_SESSION["giohang"]==null) {
                $_SESSION["giohang"][$id]=$sl;
            }
            $_SESSION['tong_gio_hang']=count($_SESSION['giohang']);
            //header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
    public function xem_gio_hang()
    {
        include("c_data_contact.php");
        if (isset($_SESSION['giohang'])) {
            include("models/m_hoa.php");
            $m_hoa=new M_hoa();
            $hoa=$m_hoa->doc_tat_ca_hoa();
            include("models/m_chi_tiet_hoa.php");
            $m_chi_tiet_hoa=new M_chi_tiet_hoa();
            $tongtt=0;
            if (isset($_POST["btnCapnhat"])) {
                $sl=$_POST["sl"];
                $i=0;
                foreach ($_SESSION["giohang"] as $k=>$value) {
                    $_SESSION["giohang"][$k]=$sl[$i];
                    $i++;
                }
            }
            foreach ($_SESSION["giohang"] as $k=>$value) {
              $ct_hoa=$m_chi_tiet_hoa->doc_theo_ma_hoa($k);
              $tongtt+=$value*$ct_hoa->Gia;
            }
            $_SESSION['tong_gio_hang']=count($_SESSION['giohang']);
            $_SESSION['tongtt']=$tongtt;
            $giohang=$_SESSION["giohang"];
        } else {
            $giohang=[];
            $hoa=[];
        }
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $view = "views/v_xem_gio_hang.tpl";
        $title ="Giỏ hàng của bạn";
        include("c_smarty_info.php");
        $smarty->assign('giohang', $giohang);
        $smarty->assign('hoa', $hoa);
        $smarty->display("layout.tpl");
    }
      public function DatHangThanhCong()
      {
        include("c_data_contact.php");
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $title ="Đặt hàng thành công";
        $view = "views/v_dh_thanh_cong.tpl";
        include("c_smarty_info.php");
        $smarty->display("layout.tpl");
      }
}

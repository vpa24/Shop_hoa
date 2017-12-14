<?php
@session_start();
class C_gio_hang
{
    public function them_gio_hang()
    {
        if (isset($_GET['MaHoa']) && isset($_POST['them'])||(isset($_GET['MaHoa']))) {
            $id=$_GET['MaHoa'];
            if (isset($_POST['them'])) {
                $sl=$_POST['so_luong'];
            } else {
                $sl=1;
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
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
    public function xem_gio_hang()
    {
        if (isset($_SESSION['giohang'])) {
            include("models/m_hoa.php");
            $m_hoa=new M_hoa();
            $hoa=$m_hoa->doc_tat_ca_hoa();
            include("models/m_chi_tiet_hoa.php");
            $m_chi_tiet_hoa=new M_chi_tiet_hoa();
            if (isset($_POST["btnCapnhat"])) {
                $sl=$_POST["sl"];
                $i=0;
                foreach ($_SESSION["giohang"] as $k=>$value) {
                    $_SESSION["giohang"][$k]=$sl[$i];
                    $i++;
                }
            }
            $tongtt=0;
            foreach ($_SESSION["giohang"] as $k=>$value) {
                $ct_hoa=$m_chi_tiet_hoa->doc_theo_ma_hoa($k);
                $tongtt+=$value*$ct_hoa->Gia;
            }
            $_SESSION['tong_gio_hang']=count($_SESSION['giohang']);
            $_SESSION['tongtt']=$tongtt;
            include("URL.php");
            $giohang=$_SESSION["giohang"];
        } else {
            $giohang=[];
            $hoa=[];
        }
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $view = "views/v_xem_gio_hang.tpl";
        $smarty->assign('title', 'Giỏ hàng của bạn');
        $smarty->assign('giohang', $giohang);
        $smarty->assign('hoa', $hoa);
        $smarty->assign('view', $view);
        $smarty->display("gio_hang/layout.tpl");
    }
    public function luu_gio_hang()
    {
        $MaKH= $_SESSION['ma_kh'];
        $ngay_dat = date('Y-m-d');
        include("models/m_hoa_don.php");
        $m_hoa_don=new M_hoa_don();
        $ma_hoa_don=$m_hoa_don->luu_hoa_don($MaKH, $ngay_dat, $_SESSION['tongtt']);
        foreach ($_SESSION["giohang"] as $k=>$value) {
            $kq=$m_hoa_don->luu_chi_tiet_hoa_don($k, $value, $ma_hoa_don);
        }
        $_SESSION['tong_gio_hang']=0;
        session_destroy();
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $view = "views/v_dh_thanh_cong.tpl";
        $smarty->assign('title', 'Đặt hàng thành công');
        $smarty->assign('view', $view);
        $smarty->display("gio_hang/layout.tpl");
    }
}

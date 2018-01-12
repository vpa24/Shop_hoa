<?php
@session_start();

class C_gio_hang
{
    public function them_gio_hang()
    {
        if (isset($_POST['MaHoa']) && isset($_POST['sl'])) {
            $id=$_POST['MaHoa'];
            $sl=$_POST['sl'];
            if(isset($_SESSION['tong_gio_hang']))
            {
              $_SESSION['tong_gio_hang']++;
            }
            $vong=1;
            if (isset($_SESSION["giohang"])) {
                foreach ($_SESSION["giohang"] as $k=>$value) {
                    if ($k == $id) {
                        $value+=$sl;
                        $_SESSION["giohang"][$id]=$value;
                        break;
                    } else {
                        $_SESSION["giohang"][$id]=$sl;
                    }
                }
            } else {
                $_SESSION["giohang"][$id]=$sl;
                $_SESSION['tong_gio_hang']=1;
            }
        }
    }
    public function hien_gio_hang()
    {
        if (isset($_POST['showcart'])) {
            include("models/m_hoa.php");
            $m_hoa=new M_hoa();
            $hoa=$m_hoa->doc_tat_ca_hoa();
            $tong_tt=0;
            $tong_sl=0;
            foreach ($_SESSION["giohang"] as $k=>$value) {
                foreach ($hoa as $sp) {
                    if ($k==$sp->MaHoa) {
                        $tong_tt+=$value*$sp->GiaKhuyenMai;
                        $tong_sl+=$value;
                        echo "<li class='product' id='delete$sp->MaHoa'><div class='product-image'>";
                        echo "<img src='public/images/hoa/$sp->Hinh' ></div>";
                        echo "<div class='product-details'><h3>$sp->TenHoa</h3></div>";
                        echo "<div class='actions'><a id='xoa_$sp->MaHoa' onclick='xoagiohang($sp->MaHoa,$value,$sp->GiaKhuyenMai*$value)' href='javascript:void(0)'  class='delete-item'>Xóa</a></div>";
                        if ($value==1) {
                            echo "<div class='thu_nho tru' id='tru_$sp->MaHoa' onclick='xoagiohang($sp->MaHoa,$value,$sp->GiaKhuyenMai*$value)'><i class='fa fa-minus' aria-hidden='true'></i></div>";
                        } else {
                            echo "<div class='thu_nho tru' id='tru_$sp->MaHoa' onclick='giam($sp->MaHoa)'><i class='fa fa-minus' aria-hidden='true'></i></div>";
                        }
                        echo "<div class='so_luong khung' id='gio_hang$sp->MaHoa'>$value</div>";
                        echo "<div class='thu_nho cong' onclick='tang($sp->MaHoa)'><i class='fa fa-plus' aria-hidden='true'></i></div>";
                        echo "<div class='price' id='tong_$sp->MaHoa'>".number_format($sp->GiaKhuyenMai*$value)." đ </div></li>";
                    }
                }
            }
            $_SESSION['tong_gio_hang']=$tong_sl;
            $_SESSION['tong_tt']=$tong_tt;
        }
    }
    public function tang_giam_sl()
    {
        if (isset($_POST["mahoa"])) {
            include("models/m_hoa.php");
            $m_hoa=new M_hoa();
            $id=$_POST['mahoa'];
            $hoa=$m_hoa->doc_hoa_theo_ma($id);
            foreach ($_SESSION["giohang"] as $k=>$value) {
                if ($k == $id) {
                    if (isset($_POST['tang'])) {
                        $value++;
                    } elseif (isset($_POST['giam'])) {
                        $value--;
                    }
                    $_SESSION["giohang"][$id]=$value;
                    $tong_tt=$hoa->GiaKhuyenMai*$value;
                    $mang=array('sl'=>$value,'tongTienTheoMaHoa'=>$tong_tt);
                }
            }
            echo json_encode($mang);
        }
    }
    public function xoa_gio_hang()
    {
        if (isset($_POST["mahoa"])) {
            $id=$_POST["mahoa"];
            unset($_SESSION["giohang"][$id]);
            if (count($_SESSION["giohang"])==0) {
                session_destroy();
            }
        }
    }
    public function cap_nhap_tong_tt()
    {
        include("models/m_hoa.php");
        $m_hoa=new M_hoa();
        $hoa=$m_hoa->doc_tat_ca_hoa();
        $tong_tt=0;
        $tong_sl=0;
        foreach ($_SESSION["giohang"] as $k=>$value) {
            foreach ($hoa as $sp) {
                if ($k==$sp->MaHoa) {
                    $tong_tt+=$value*$sp->GiaKhuyenMai;
                    $tong_sl+=$value;
                }
            }
        }
        $_SESSION['tong_gio_hang']=$tong_sl;
        echo $_SESSION['tong_tt']=$tong_tt;
    }
}

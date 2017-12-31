<?php
@session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class C_gio_hang
{
    public function them_gio_hang()
    {
        if (isset($_POST['MaHoa']) && isset($_POST['sl'])) {
            $id=$_POST['MaHoa'];
            $sl=$_POST['sl'];
            $tong_sl=0;
            if (isset($_SESSION["giohang"])) {
                foreach ($_SESSION["giohang"] as $k=>$value) {
                    $tong_sl+=$value;
                    if ($k==$id) {
                        $value+=$sl;
                        $_SESSION["giohang"][$id]=$value;
                    } else {
                        $_SESSION["giohang"][$id]=$sl;
                    }
                }
            } else {
                $_SESSION["giohang"][$id]=$sl;
            }
            $_SESSION['tong_gio_hang']=$tong_sl;
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
                        echo "<div class='actions'><a onclick='xoagiohang($sp->MaHoa,$value,$sp->GiaKhuyenMai*$value)' href='javascript:void(0)'  class='delete-item'>Xóa</a></div>";
                        echo "<div class='quantity'>Số lượng: $value</div>";
                        echo "<div class='price'>".number_format($sp->GiaKhuyenMai*$value)." đ </div></li>";
                    }
                }
            }
            $_SESSION['tong_gio_hang']=$tong_sl;
            $_SESSION['tong_tt']=$tong_tt;
        }
    }
    public function tong_thanh_tien()
    {
        if (isset($_POST['tong_tt'])) {
            echo  $_SESSION['tong_tt'];
        }
    }
    public function xoa_gio_hang()
    {
        if (isset($_POST["id"])) { // Xóa một
            include("models/m_hoa.php");
            $m_hoa=new M_hoa();
            $hoa=$m_hoa->doc_tat_ca_hoa();
            $id=$_POST["id"];
            unset($_SESSION["giohang"][$id]);
            if (count($_SESSION["giohang"])==0) {
                session_destroy();
            } else {
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
                $_SESSION['tong_tt']=$tong_tt;
            }
        }
    }
}

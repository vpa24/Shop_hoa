<?php
@session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';
class C_khach_hang
{
    public function khach_hang()
    {
        include("c_data_contact.php");
        include("models/m_hoa.php");
        $m_hoa=new M_hoa();
        $hoa=$m_hoa->doc_tat_ca_hoa();
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $title = "Thông tin khách hàng";
        $view = "views/v_khach_hang.tpl";
        include("c_smarty_info.php");
        $smarty->assign('hoa', $hoa);
        $smarty->display("layout.tpl");
    }
    public function luu_khach_hang(){
      if (isset($_POST['luu'])) {
            include("models/m_khach_hang.php");
            $m_khach_hang=new M_khach_hang();
            $_SESSION['ten']=$_POST['ten_kh'];
            $phai=$_POST['phai'];
            $_SESSION['email']=$_POST['email'];
            $dia_chi=$_POST['dia_chi'];
            $_SESSION['dien_thoai']=$_POST['dien_thoai'];
            $ma_kh=$m_khach_hang->Them_khach_hang($_SESSION['ten'], $phai,$_SESSION['email'], $dia_chi, $_SESSION['dien_thoai']);
            return $ma_kh;
          }
    }
    public function luu_gio_hang($ma_kh)
    {
        include("models/m_hoa_don.php");
        $m_hoa_don=new M_hoa_don();
        $ma_hoa_don=$m_hoa_don->luu_hoa_don($ma_kh, $_SESSION['tong_tt']);
        foreach ($_SESSION["giohang"] as $k=>$value) {
            $m_hoa_don->luu_chi_tiet_hoa_don($k, $value,$ma_hoa_don);
        }
        return $ma_hoa_don;
    }
    public function CapNhapSoLuongGioHang(){
      include("models/m_hoa.php");
      $m_hoa=new M_hoa();
      foreach ($_SESSION["giohang"] as $k=>$value) {
          $sl_hoa_db=$m_hoa->doc_hoa_theo_ma($k)->SoLuongSP;
          $sl=$sl_hoa_db-$value;
          $m_hoa->CapNhapSoLuongHoa($sl,$k);
      }
    }
    public function GuiMail($ma_hoa_don){
      $mail = new PHPMailer();
      $mail->IsSMTP(); // Chứng thực SMTP
    	$mail->SMTPAuth=TRUE;
      $mail->Host = 'tls://smtp.gmail.com:587';
      $mail->SMTPOptions = array(
         'ssl' => array(
           'verify_peer' => false,
           'verify_peer_name' => false,
           'allow_self_signed' => true
          )
      );
      $mail->CharSet="utf-8";
    	$mail->Port=465;
    	$mail->SMTPSecure="ssl";
        $mail->Username = 'vuphuonganh020497@gmail.com';                 // SMTP username
        $mail->Password = '02041997vpa';                           // SMTP password
        $mail->setFrom('vuphuonganh020497@gmail.com', 'ShopHoa');
        $mail->addAddress($_SESSION['email']);     // Add a recipient
        $mail->Subject = "Đơn hàng $ma_hoa_don đã sẵn sàng giao đến quý khách" ;
        $noidung="<h3 style='font-size:13px;font-weight:bold;color:#02acea;text-transform:uppercase;margin:20px 0 5px 0'>
        Thông tin đơn hàng $ma_hoa_don</h3>";
        $noidung.="<div style='margin:0 0 5px 0'><b>Thông tin thanh toán</b></div><div style='margin:0 0 5px 0'>".
          $_SESSION['ten']."</div><div style='margin:0 0 5px 0'>".$_SESSION['email']."</div><div style='margin:0 0 5px 0'>".$_SESSION['dien_thoai']."</div>";
        $noidung.="<div style='margin:0 0 5px 0'><b>Tổng giá trị đơn hàng</b></div>";
        $noidung.="<div style='margin:0 0 5px 0'>".number_format($_SESSION['tong_tt'])."đ </div>";
        $mail->MsgHTML($noidung);
        $mail->isHTML(true);
      if(!$mail->Send()) {
  		echo "Mailer Error: " . $mail->ErrorInfo;
  	 }

    }
    public function luu_du_lieu(){
      $ma_kh=$this->luu_khach_hang();
      $ma_hoa_don=$this->luu_gio_hang($ma_kh);
      $this->CapNhapSoLuongGioHang();
      $this->GuiMail($ma_hoa_don);
      session_destroy();
      include("c_data_contact.php");
      include("Smarty_shop_hoa.php");
      $smarty = new Smarty_Shop_Hoa();
      $title ="Đặt hàng thành công";
      $view = "views/v_dh_thanh_cong.tpl";
      include("c_smarty_info.php");
      $smarty->display("layout.tpl");

    }
}

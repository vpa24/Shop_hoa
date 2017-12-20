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
        include("models/m_hoa.php");
        $m_hoa=new M_hoa();
        $hoa=$m_hoa->doc_tat_ca_hoa();
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $view = "views/v_khach_hang.tpl";
        $smarty->assign('title', "Thông tin khách hàng");
        $smarty->assign('hoa', $hoa);
        $smarty->assign('view', $view);
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
            $dien_thoai=$_POST['dien_thoai'];
            $ma_kh=$m_khach_hang->Them_khach_hang($_SESSION['ten'], $phai,$_SESSION['email'], $dia_chi, $dien_thoai);
            return $ma_kh;
          }
    }
    public function luu_gio_hang($ma_kh)
    {
        include("models/m_hoa_don.php");
        $m_hoa_don=new M_hoa_don();
        $_SESSION['mahoadon']=$m_hoa_don->luu_hoa_don($ma_kh, $_SESSION['tongtt']);
        foreach ($_SESSION["giohang"] as $k=>$value) {
            $m_hoa_don->luu_chi_tiet_hoa_don($k, $value,$_SESSION['mahoadon']);
        }
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
    public function GuiMail(){

      //Server settings
       $mail = new PHPMailer(); // create a new object // enable SMTP
        $mail->Username = 'vuphuonganh020497@gmail.com';                 // SMTP username
        $mail->Password = '02041997vpa';                           // SMTP password

        //Recipients
        $mail->setFrom('yeudoiyeunguoiyeutele@gmail.com', 'Mailer');
        $mail->addAddress('yeudoiyeunguoiyeutele@gmail.com');     // Add a recipient

        //Attachments
        //Content
                                         // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';


      if(!$mail->Send()) {
  		echo "Mailer Error: " . $mail->ErrorInfo;
  	 } else {
  		echo "Message has been sent";
  	 }

    }
    public function luu_du_lieu(){
      $ma_kh=$this->luu_khach_hang();
      $this->luu_gio_hang($ma_kh);
      $this->CapNhapSoLuongGioHang();
      //$this->GuiMail();
      session_destroy();
      header('Location: dh_thanh_cong.php');

    }
}

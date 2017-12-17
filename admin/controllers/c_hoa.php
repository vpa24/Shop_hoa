<?php
session_start();
include("kiem_tra_session.php");

class C_hoa
{
    public function hien_thi_hoa()
    {
        unset($_SESSION['thongBao']);
        unset($_SESSION['thongBaoThanhCong']);
        //Model
        include("models/m_hoa.php");
        $m_hoa = new M_hoa();
        $doc_hoa = $m_hoa->doc_tat_ca_hoa();
        include("models/m_loai_hoa.php");
        $m_loai_hoa = new M_loai_hoa();
        $doc_loai_hoa = $m_loai_hoa->doc_tat_ca_loai_hoa();
        $this->ThemHoa();
        $this->SuaHoa();
        //Controller
        include("Smarty_admin.php");
        $smarty = new  Smarty_Admin();
        $view = "views/v_hoa.tpl";
        $title = "Danh sách hoa";
        $smarty->assign("title", $title);
        $smarty->assign("doc_hoa", $doc_hoa);
        $smarty->assign("doc_loai_hoa", $doc_loai_hoa);
        $smarty->assign("view", $view);
        $smarty->display("layout.tpl");
    }
    public function ThemHoa(){
      if (isset($_POST["btn_add"]))
      {
          $m_hoa = new M_hoa();
          $tenHoa = $_POST['ten_hoa'];
          $gia = $_POST['gia'];
          $thanhPhan = $_POST['thanh_phan'];
          $noiDung = $_POST['noi_dung'];
          $maLoai = $_POST['loai_hoa'];
          $hinh=$this->UploadFile("");
          $them = $m_hoa->them_hoa($tenHoa, $gia, $thanhPhan, $noiDung, $hinh, $maLoai);
          if ($them) {
              $_SESSION['thongBaoThanhCong']="Cập nhật sản phẩm thành công";
          }
      }
    }
    public function SuaHoa(){
      if (isset($_POST['btn_update'])) {
          $m_hoa = new M_hoa();
          $maHoa = $_POST['ma_hoa'];
          $tenHoa = $_POST['ten_hoa'];
          $gia = $_POST['gia'];
          $thanhPhan = $_POST['thanh_phan'];
          $noiDung = $_POST['noi_dung'];
          $maLoai = $_POST['loai_hoa'];
          $hoa = $m_hoa->doc_hoa_theo_ma($maHoa);
          //update hinh
          $hinh=$this->UploadFile($hoa->hinh);
          $update = $m_hoa->update_hoa($tenHoa, $gia, $thanhPhan, $noiDung, $hinh, $maLoai, $maHoa);
          if ($update) {
              $_SESSION['thongBaoThanhCong']="Cập nhật sản phẩm thành công";
          }
        }
        //header('Location:hoa.php');
    }
    public function UploadFile($hinh_sua){
      $target_dir = "../public/images/hoa/";
      $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
      $hinh = $_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:$hinh_sua;
      $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
      if (!empty($hinh))
      {
          if ($_FILES["hinh"]["size"] > 500000)
          {
              $_SESSION['thongBao'] = "File không được lớn hơn 5MB";
          }
          if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          && $imageFileType != "gif")
          {
              $_SESSION['thongBao'] = "Không phải file hình";
          }
          else
          {
              move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
          }
      }
      else {
         $_SESSION['thongBao'] = "Lỗi upload file";
      }
      return $hinh;
    }
}

<?php
class C_tin_tuc
{
  public function hien_thi_tin_tuc(){
    include("models/m_tin_tuc.php");
    $m_tin_tuc = new M_tin_tuc();
    $tin_tuc = $m_tin_tuc->doc_tat_ca_su_kien();
    include("Smarty_shop_hoa.php");
    include("URL.php");
    $smarty = new Smarty_Shop_Hoa();
    $view = "views/v_tin_tuc.tpl";
    $title = "Trang tin tức";
    $smarty->assign('title', $title);
    $smarty->assign('tin_tuc', $tin_tuc);
    $smarty->assign('view', $view);
    $smarty->display("layout.tpl");
  }
    public function hien_thi_ct_tin_tuc()
    {
        if (isset($_GET['ma_tin'])) {
            $ma_tin = $_GET['ma_tin'];
        }
        include("models/m_tin_tuc.php");
        $m_tin_tuc = new M_tin_tuc();
        $tin_tuc = $m_tin_tuc->chi_tiet_tt($ma_tin);
        $MaLoaiTin = $tin_tuc->MaLoaiTin;
        $tin_cung_loai = $m_tin_tuc->doc_tin_tuc_cung_loai($MaLoaiTin,$ma_tin);
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $view = "views/v_chi_tiet_tin_tuc.tpl";
        $title = $tin_tuc->TenTT;
        $smarty->assign('title', $title);
        $smarty->assign('tin_tuc', $tin_tuc);
        $smarty->assign('tin_cung_loai', $tin_cung_loai);
        $smarty->assign('view', $view);
        $smarty->display("layout.tpl");
    }
}

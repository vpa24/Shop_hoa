<?php
session_start();
class C_chi_tiet_hoa
{
    public function hien_thi_trang_chi_tiet_hoa()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        include("models/m_chi_tiet_hoa.php");
        $m_chi_tiet_hoa = new M_chi_tiet_hoa();
        $hoa = $m_chi_tiet_hoa->doc_theo_ma_hoa($id);
        $maLoai = $hoa->MaLoai;
        $hoa_cung_loai = $m_chi_tiet_hoa->doc_hoa_cung_loai($maLoai, $id);
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $view = "views/v_chi_tiet_hoa.tpl";
        $title = $hoa->TenHoa;
        $smarty->assign('title', $title);
        $smarty->assign('hoa', $hoa);
        $smarty->assign('hoa_cung_loai', $hoa_cung_loai);
        $smarty->assign('view', $view);
        $smarty->display("layout.tpl");
    }
}

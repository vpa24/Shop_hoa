<?php
class C_chi_tiet_hoa
{
    function hien_thi_trang_chi_tiet_hoa(){
        //Model
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        include("models/m_chi_tiet_hoa.php");
        $m_chi_tiet_hoa = new M_chi_tiet_hoa();
        //Đọc tất cả hoa
        $hoa = $m_chi_tiet_hoa->doc_theo_ma_hoa($id);
        //Đọc hoa cùng loại
        $maLoai = $hoa->MaLoai;
        $hoa_cung_loai = $m_chi_tiet_hoa->doc_hoa_cung_loai($maLoai, $id);
        //make url
        include("URL.php");
        //View
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $view = "views/v_chi_tiet_hoa.tpl";
        $title = $hoa->TenHoa;
        $smarty->assign('title', $title);
        $smarty->assign('hoa', $hoa);
        $smarty->assign('hoa_cung_loai', $hoa_cung_loai);
        $smarty->assign('view', $view);
        $smarty->display("chi_tiet_hoa/layout.tpl");
    }
}
?>

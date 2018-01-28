<?php
session_start();
class C_chi_tiet_hoa
{
    public function hien_thi_trang_chi_tiet_hoa()
    {
        include("c_data_contact.php");
        //model
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        include("models/m_chi_tiet_hoa.php");
        $m_chi_tiet_hoa = new M_chi_tiet_hoa();
        $hoa = $m_chi_tiet_hoa->doc_theo_ma_hoa($id);
        $maLoai = $hoa->MaLoai;
        $hoa_cung_loai = $m_chi_tiet_hoa->doc_hoa_cung_loai($maLoai, $id);

        if(isset($_SESSION['makh'])){
            $ma_kh=$_SESSION['makh'];
            include("models/m_lich_su.php");
            $m_lich_su = new M_lich_su();
            $ds_lich_su=$m_lich_su->xem_tat_ca($ma_kh);
            $hoa_dau=reset($ds_lich_su);
            if($hoa_dau->ma_hoa != $id){
                foreach ($ds_lich_su as $item) {
                    if($item->ma_hoa == $id){
                        $m_lich_su->xoa($id,$ma_kh);
                        break;
                    }
                }
                $m_lich_su->them($id,$ma_kh);
            }
            $ds_lich_su=$m_lich_su->xem($ma_kh);
        }
      
        //view
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $view = "views/v_chi_tiet_hoa.tpl";
        $title = $hoa->TenHoa;
        include("URL.php");
        include("c_smarty_info.php");
        $smarty->assign('hoa', $hoa);
        $smarty->assign('hoa_cung_loai', $hoa_cung_loai);
        if(isset($_SESSION['makh'])){
            $smarty->assign('ds_lich_su', $ds_lich_su);
        }
        $smarty->display("layout.tpl");
    }
}

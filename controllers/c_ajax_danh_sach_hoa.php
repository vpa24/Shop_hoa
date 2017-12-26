<?php
class C_ajax_danh_sach_hoa
{
    public function ds_hoa()
    {
      include("models/m_hoa.php");
      $m_hoa = new M_hoa();
      $doc_hoa = $m_hoa->doc_tat_ca_hoa();
      $page=$_POST['page'];
      if(isset($_POST['maloai'])){
        $ma_loai=$_POST['maloai'];
        $doc_hoa = $m_hoa->doc_ds_loai_hoa($ma_loai);
      }
      elseif(isset($_POST['gia1']) && isset($_POST['gia2'])){
        $gia_1=$_POST['gia1'];
        $gia_2=$_POST['gia2'];
        $doc_hoa=$m_hoa->doc_theo_gia($gia_1,$gia_2);
      }
      elseif(isset($_POST['maloaigia']) && isset($_POST['loaigia1']) && isset($_POST['loaigia2'])){
        $ma_loai=$_POST['maloaigia'];
        $gia_1=$_POST['loaigia1'];
        $gia_2=$_POST['loaigia2'];
        $doc_hoa=$m_hoa->doc_theo_ma_loai_gia($ma_loai,$gia_1,$gia_2);
      }
      $limit=9;
      $tong=count($doc_hoa);
      $vt=($page-1)*$limit;
        if(isset($_POST['maloai'])){
          $doc_hoa = $m_hoa->doc_ds_loai_hoa($ma_loai,$vt,$limit);

        }
        elseif(isset($_POST['gia1']) && isset($_POST['gia2'])){
          $doc_hoa=$m_hoa->doc_theo_gia($gia_1,$gia_2,$vt,$limit);
        }
        elseif(isset($_POST['maloaigia']) && isset($_POST['loaigia1']) && isset($_POST['loaigia2'])){
          $doc_hoa=$m_hoa->doc_theo_ma_loai_gia($ma_loai,$gia_1,$gia_2,$vt,$limit);
        }
        else{
          $doc_hoa = $m_hoa->doc_tat_ca_hoa($vt,$limit);
        }
      $phan_trang=ceil($tong/$limit);
      include("URL.php");
      include("Smarty_shop_hoa.php");
      $smarty = new Smarty_Shop_Hoa();
      $smarty->assign('doc_hoa', $doc_hoa);
      $smarty->assign('phan_trang', $phan_trang);
      $smarty->display("views/hoa/v_danh_sach_hoa.tpl");
  }
}

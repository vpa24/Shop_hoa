<?php
class C_hoa
{
    function hien_thi_trang_hoa(){
        //Model
        include("models/m_hoa.php");
        $m_hoa = new M_hoa();
        $doc_hoa = $m_hoa->doc_tat_ca_hoa();
        $doc_loai_hoa = $m_hoa->doc_loai_hoa();
        //Phân trang
        if(count($doc_hoa)>9){
          include("Pager.php");
          $p=new pager();
          $limit=9;
          $count=count($doc_hoa);
          $pages=$p->findPages($count,$limit);
          $vt=$p->findStart($limit);
          $curpage=$_GET["page"];
          $phan_trang=$p->pageList($curpage,$pages);
          $doc_hoa = $m_hoa->doc_tat_ca_hoa($vt,$limit);
        }
        include("URL.php");
        //View
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $view = "views/v_hoa.tpl";
        $title = "Danh sách hoa";
        $smarty->assign('title', $title);
        $smarty->assign('doc_hoa', $doc_hoa);
        $smarty->assign('doc_loai_hoa', $doc_loai_hoa);
        $smarty->assign('phan_trang', $phan_trang);
        $smarty->assign('view', $view);
        $smarty->display("hoa/layout.tpl");
    }
}
?>

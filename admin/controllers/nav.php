<?php
include("models/m_nav.php");
$m_nav = new M_nav();
$hien_thi_thong_bao = $m_nav->hien_thi_hoa_don();
$sl= count($hien_thi_thong_bao);
$smarty->assign('thong_bao', $hien_thi_thong_bao);        
    
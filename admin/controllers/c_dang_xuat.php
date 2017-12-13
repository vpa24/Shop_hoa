<?php
    session_start();
    include("kiem_tra_session.php");
    class C_dang_xuat{
        function trang_dang_xuat(){
        //models
        include("models/m_dang_xuat.php");
        $m_dang_xuat = new M_dang_xuat();
        $m_dang_xuat->dang_xuat();
    }
}
?>
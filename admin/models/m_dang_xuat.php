<?php
require_once("database.php");
class M_dang_xuat extends database
{
    function dang_xuat(){
        session_destroy();
		header("location:dang_nhap.php");
    }
}
?>

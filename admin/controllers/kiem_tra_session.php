<?php
if (isset($_COOKIE['id'])==false) {
    header('Location: dang_xuat.php');
}
else{
  if(isset($_COOKIE['checked'])){
    setcookie('checked', true, time() + (60*60));
    setcookie('id', $_COOKIE['id'] , time() + (60*2));
    setcookie('hoTen',$_COOKIE['hoTen'], time() + (60*2));
    setcookie('taiKhoan',$_COOKIE['taiKhoan'], time() + (60*2));
    setcookie('permission', $_COOKIE['permission'] , time() + (60*2));
  }
}

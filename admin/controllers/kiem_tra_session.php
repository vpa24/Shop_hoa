<?php
if (isset($_COOKIE['id'])==false) {
    header('Location: dang_nhap.php');
}
else{
  if(isset($_COOKIE['checked'])){
    setcookie('checked', true, time() + 10);
    setcookie('id', $_COOKIE['id'] , time() + 10);
    setcookie('hoTen',$_COOKIE['hoTen'], time() + (60*2));
    setcookie('taiKhoan',$_COOKIE['taiKhoan'], time() + (60*2));
  }
}

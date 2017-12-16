<?php
session_start();
if(isset($_POST["id"])) // Xóa một
{
	$id=$_POST["id"];
	unset($_SESSION["giohang"][$id]);
	if(count($_SESSION["giohang"])==0)
	{
		header("location:.");
	}
}
?>

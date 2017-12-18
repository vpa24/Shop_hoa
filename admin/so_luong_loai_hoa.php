
<?php
header('Content-Type: text/html; charset=UTF-8');
include("controllers/c_index.php");
$c_index = new C_index();
$c_index->json();
?>

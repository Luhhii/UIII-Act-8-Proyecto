<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'bd_luhi_muebleria'
) or die(mysqli_error($mysqli));

?>

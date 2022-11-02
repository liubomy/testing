<?php
session_start();

$conn = mysqli_connect(
  'us-east-2.rds.amazonaws.com',
  'root',
  'password123',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>

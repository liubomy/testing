<?php
session_start();

$conn = mysqli_connect(
  'cruddb.cxxahj2wricq.us-east-2.rds.amazonaws.com',
  'root',
  'password123',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>

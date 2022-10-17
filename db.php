<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'rootadmin',
  'SecPassworDED',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>

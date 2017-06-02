<?php session_start();
error_reporting(0);
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('school') or die(mysql_error());
?>
<?php date_default_timezone_set('Asia/Calcutta'); ?>

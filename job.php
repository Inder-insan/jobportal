<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_job = "localhost";
$database_job='job';
$username_job = "root";
$password_job = "";
$job;
$database_job = mysqli_connect($hostname_job, $username_job, $password_job,"job") or trigger_error(mysqli_error($con),E_USER_ERROR);
?>
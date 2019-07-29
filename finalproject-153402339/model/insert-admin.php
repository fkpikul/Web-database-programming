<?php
include "../database/config.php";

$admin_name = $_POST['admin_name'];
$admin_pass = md5($_POST['admin_pass']);
$query = "insert into admininfo(admin_name, admin_pass) values('$admin_name','$admin_pass')";
mysqli_query($myconn,$query);

header("location:../index.php");
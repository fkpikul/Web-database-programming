<?php
session_start();
$admin_name=$_SESSION['admin_name'];
if(!isset($admin_name)){
    header("location:login-form.php");
}

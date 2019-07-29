<?php
include "../database/config.php";
session_start();
$admin_name=$_POST['admin_name'];// store the input field value from loginform
$admin_pass=md5($_POST['admin_pass']);// store the input field value from loginform
$query="SELECT * FROM admininfo WHERE admin_name='$admin_name' AND admin_pass='$admin_pass'";//query for checking valid user from
$result=mysqli_query($myconn,$query);
$count=mysqli_num_rows($result);
if($count===1){
    $_SESSION['admin_name']=$admin_name;
    header("location:../index.php");
}
else{
    echo 'invalid login information<br><a href="../login-form.php">try again</a>';
    //header("location:login.php");
}
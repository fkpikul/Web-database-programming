<?php
include "../database/config.php";
$router_id=$_POST['router_id'];
$router_name = $_POST['router_name'];
$router_price = $_POST['router_price'];
$query = "update router set router_id='$router_id', router_name='$router_name', router_price='$router_price' where router_id='$router_id'";
mysqli_query($myconn,$query);

header("location:../index.php");
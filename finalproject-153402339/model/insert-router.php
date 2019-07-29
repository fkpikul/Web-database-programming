<?php
include "../database/config.php";
$router_name = $_POST['router_name'];
$router_price = $_POST['router_price'];
$query = "insert into router(router_name, router_price) values('$router_name','$router_price')";
mysqli_query($myconn,$query);

header("location:../index.php");
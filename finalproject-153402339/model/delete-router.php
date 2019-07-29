<?php
include "../database/config.php";

$router_id=$_GET['routerid'];

$query="delete from router where router_id='$router_id'";

mysqli_query($myconn,$query);
header("location:../index.php");
<?php
$db_host = "localhost";
$db_username = "root";

$db_password = "";
$db_name = "routerdb";


$myconn = mysqli_connect("$db_host", "$db_username", "$db_password", "$db_name");


if (mysqli_connect_error()) {
    echo mysqli_connect_erro();
    exit();
}
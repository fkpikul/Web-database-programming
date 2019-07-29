<?php
include "database/config.php";

$query="select * from router";
$result=mysqli_query($myconn,$query);
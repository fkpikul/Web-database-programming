<?php
include "config.php";
$create_table = "create table if not exists admininfo(
                            admin_id int not null auto_increment,
                            primary key(admin_id),
                            admin_name varchar(50) not null,
                            admin_pass varchar(255) not null
)";
mysqli_query($myconn,$create_table);
$query = mysqli_query($myconn, $create_table);

if ($query === TRUE) {
    echo "<h3>Admin table created OK :) </h3>";
} else {
    echo "<h3>Admin table NOT created :( </h3>";
}

$create_table = "create table if not exists router(
                            router_id int not null auto_increment,
                            primary key(router_id),
                            router_name varchar(50) not null,
                            router_price int(11) not null
)";
$query = mysqli_query($myconn, $create_table);

if ($query === TRUE) {
    echo "<h3>Router table created OK :) </h3>";
} else {
    echo "<h3>RouterT table NOT created :( </h3>";
}
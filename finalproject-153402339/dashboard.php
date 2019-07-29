<?php
//include "model/session.php";
include "database/config.php";
include "model/fetch-router.php";
echo '

<table class="table table-bordered">
    <thead>
      <tr>
        <th>Router ID</th>
        <th>Router Name</th>
        <th>Router Price</th>
        <th>Action</th>
      </tr>
    </thead>
';

while ($row=mysqli_fetch_array($result)){
    $router_id=$row['router_id'];
   $router_name=$row['router_name'];
   $router_price=$row['router_price'];

    echo '
    <tbody>
      <tr>
        <td>'.$router_id.'</td>
        <td>'.$router_name.'</td>
        <td>'.$router_price.'</td>
        <td>
        <button class="btn btn-info" type="submit"><a href="model/edit-router.php?routerid='.$router_id.'">Edit</a></button>
        <button class="btn btn-danger" type="submit"><a href="model/delete-router.php?routerid='.$router_id.'">Delete</a></button>
    </td>
    </tbody>
    ';
}
echo '</table>';
?>


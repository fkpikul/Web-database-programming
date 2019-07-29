<?php
include "../database/config.php";

$router_id=$_GET['routerid'];

$query="select * from router where router_id='$router_id'";

$result=mysqli_query($myconn,$query);
while ($row=mysqli_fetch_array($result)){
    $router_id=$row['router_id'];
    $router_name=$row['router_name'];
    $router_price=$row['router_price'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <form action="insert-edited-product.php" method="post">
        <div class="form-group">
            <input type="hidden" class="form-control" id="router_id" name="router_id" value="<?php echo $router_id?>">
        </div>
        <div class="form-group">
            <label for="router_name">Router Name:</label>
            <input type="text" class="form-control" id="router_name" name="router_name" value="<?php echo $router_name?>">
        </div>
        <div class="form-group">
            <label for="router_price">Price:</label>
            <input type="number" class="form-control" id="router_price" name="router_price" value="<?php echo $router_price?>">
        </div>
        <div>
            <button class="btn btn-info" type="submit">Update Router</button>
            <a class="btn btn-danger" href="../index.php" role="button">Cancel</a>
        </div>
    </form>
</div>
</body>
</html>

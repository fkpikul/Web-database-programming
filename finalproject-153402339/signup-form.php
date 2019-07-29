<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Router.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2>Sign Up</h2>
<p>Please Fill Up The Form Below</p>
<form action="model/insert-admin.php" method="post">
    <div class="form-group">
        <label for="admin_name">User Name:</label>
        <input type="text" class="form-control" id="admin_name" name="admin_name" placeholder="enter your username">
    </div>
    <div class="form-group">
        <label for="admin_pass">Password:</label>
        <input type="password" class="form-control" id="admin_pass" name="admin_pass" placeholder="enter your password">
    </div>
    <div>
        <button class="btn btn-info" type="submit">Sign Up</button>
        <p>Already have an account?<a href="login-form.php">Login Now</a></p>
    </div>
</form>
</div>
</body>
</html>

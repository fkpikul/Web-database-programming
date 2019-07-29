<?php
include "model/session.php";
include "database/config.php";
include "header.php";
?>
<form action="model/insert-router.php" method="post">
    <div class="form-group">
        <label for="router_name">Router Name:</label>
        <input type="text" class="form-control" id="router_name" name="router_name" placeholder="enter router name">
    </div>
    <div class="form-group">
        <label for="router_price">Price:</label>
        <input type="number" class="form-control" id="router_price" name="router_price" placeholder="enter router price">
    </div>
    <div>
        <button class="btn btn-info" type="submit">Add Router</button>
        <a class="btn btn-danger" href="index.php" role="button">Cancel</a>
    </div>
</form>
<?php
include "footer.php";
?>

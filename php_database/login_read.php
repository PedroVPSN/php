<?php 
    $database = mysqli_connect("localhost", "root", "", "login_app");

    if($database) {
        echo "connected";
    }
    else {
        die("Connection failed");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Login Read</title>
</head>
<body>
    <div class="card text-white bg-light mb-3" style="max-width: 18rem;">
        <div class="card-body">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <pre>
                <?php
                print_r($row);
                ?>
                </pre>
                <?php
            }   
            ?>
        </div>
    </div>
</body>
</html>
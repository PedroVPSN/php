<?php 
    include "db.php";
    include "database_functions.php";
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
            <pre>
            <?php readRows(); ?>
            </pre>
            </div>  
        </div>
    </div>
</body>
</html>
<?php 
    include "db.php";
    include "database_functions.php";   
?>
<?php 
    if(isset($_POST["submit"])) {
        deleteRow();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Login Update</title>
</head>
<body>
<div class="container">
    <div class="col-xs-6">
        <form action="login_delete.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <select name="id" id="">

                <?php 
                    fetchData();
                ?>
                    
                </select>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">DELETE</button>
        </form>
        <div>
            <a href="login_create.php" class="badge badge-primary">Sign Up Page</a>
        </div>
    </div>

    </div>
</body>
</html>
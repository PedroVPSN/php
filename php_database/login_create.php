<?php include "db.php";

    if (isset($_POST["submit"])) {
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "INSERT INTO users(username, password)";
        $query .= "VALUES ('$username', '$password')";
        $result = mysqli_query($database, $query);

        if(!$result) {
            die("Query FAILED" . mysqli_error());
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <div class="col-xs-6">
            <form action="login_create.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
            </form>
        </div>
        <div>
            <a href="login_update.php" class="badge badge-success">Update Username or Password</a>
        </div>
    </div>
</body>
</html>
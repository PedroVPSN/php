<?php 
    if (isset($_POST["submit"])) {
        $userName = $_POST["username"];
        $password = $_POST["password"];

        $name = ["Pedro", "Lucy", "John", "Micheal", "Jane"];

        $min = 5;
        $max = 10;

        // echo "User Name: " . $userName . "<br>";
        // echo "User Password: " . $password;
        if (strlen($userName) < $min || strlen($userName) > $max ) {
            echo "Username most to be between 5 and 10 characters";
        }

        if (!in_array($userName, $name)) {
            echo "Please, register first.";
        }
        else {
            echo "Welcome";
        }
    };
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="form.php" method="post">
        <input type="text" name="username" placeholder="Enter Username">
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
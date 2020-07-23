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
            echo "Please, sign up.";
        }
        else {
            echo "Welcome" . " " . $userName;
        }
    };
    
?>
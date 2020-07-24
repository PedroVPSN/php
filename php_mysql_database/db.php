<?php 
    $database = mysqli_connect("localhost", "root", "", "login_app");

    if(!$database) {

        die("Connection failed");
    }
?>
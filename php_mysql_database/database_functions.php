<?php 
    include "db.php";
?>

<?php 

function createRow() {

    if (isset($_POST["submit"])) {
        global $database;
        $username = $_POST["username"];
        $password = $_POST["password"];

        $username = mysqli_real_escape_string($database, $username);
        $password = mysqli_real_escape_string($database, $password);

        $query = "INSERT INTO users(username, password)";
        $query .= "VALUES ('$username', '$password')";
        $result = mysqli_query($database, $query);

        if(!$result) {
            die("Query FAILED" . mysqli_error());
        }
        else {
            echo "User Created";
        }
    }
}

function fetchData() {
    global $database;

    $query = "SELECT * FROM users";

    $result = mysqli_query($database, $query);

    if(!$result) {
        die("Query FAILED" . mysqli_error());
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        echo "<option value='$id'>id: $id</option>";
    }
}

function updateTable() {
    global $database;
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id"];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($database, $query);

    if(!$result) {
        die("QUERY FAIL" . mysqli_error($database));
    }
}

function deleteRow() {
    global $database;
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id"];

    $query = "DELETE FROM users ";
    
    $query .= "WHERE id = $id ";

    $result = mysqli_query($database, $query);

    if(!$result) {
        die("QUERY FAIL" . mysqli_error($database));
    }
}

function readRows() {
    global $database;
    $query = "SELECT * FROM users";
    $result = mysqli_query($database, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }
        
    while($row = mysqli_fetch_assoc($result)) {
        
        print_r($row);
    }  
}

?>
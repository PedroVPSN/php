<?php 
    include "db.php";
?>

<?php 

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

?>
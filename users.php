<?php
// Connect to database
$conn = mysqli_connect('localhost', 'root', '', 'ajax_demo', 3307);

if (!$conn) {
    die('Connection Failed! ' . mysqli_connect_error());
}

$sql = "SELECT * FROM users";

$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo json_encode($users);

mysqli_close($conn);

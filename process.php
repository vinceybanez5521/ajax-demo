<?php
// Connect to database
$conn = mysqli_connect('localhost', 'root', '', 'ajax_demo', 3307);

if (!$conn) {
    die('Connection Failed! ' . mysqli_connect_error());
}

// echo "Processing...";

// Check for GET Variable
if (isset($_GET['name'])) {
    echo 'GET: Your name is ' . $_GET['name'];
}

// Check for POST Variable
if (isset($_POST['name'])) {
    // echo 'POST: Your name is ' . $_POST['name'];

    $name = htmlspecialchars($_POST['name']);

    $sql = "INSERT INTO users(name) VALUES('$name')";

    if (mysqli_query($conn, $sql)) {
        echo "User Added!";
    } else {
        echo "User Not Added! " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

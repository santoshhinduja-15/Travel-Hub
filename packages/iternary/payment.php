<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mahesh_it";

    // Check Connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn)
    {
    die("Connection failed: " . mysqli_connect_error());
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $user_date = $_POST["userDate"];
    $user_room = $_POST["userRoom"];
    $traveller_number = $_POST["travellerno"];
    $total_amount = 42000 * $user_room;

    // Prepare SQL statement
    $sql = "INSERT INTO booking (date, rooms, traveller, total_amount) VALUES ('$user_date', '$user_room', '$traveller_number', '$total_amount')";
    $result = mysqli_query($conn, $sql);

    // Close the Connection
    mysqli_close($conn);
    }
?>
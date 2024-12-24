<?php
// Include database connection
include 'db_connect.php';

// Start session
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // for Get user input
    $student_id = $_POST['student_id'];
    $password = $_POST['password'];

    // Prepare SQL query to validate credentials
    $query = "SELECT * FROM students WHERE student_id = ? AND password = ?";
    $stmt = $conn->prepare($query);

    if ($stmt === false) {
        die("Database query failed: " . $conn->error);
    }

    $stmt->bind_param("ss", $student_id, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // if Login successful
        $user = $result->fetch_assoc();
        $_SESSION['student_id'] = $user['student_id'];
        $_SESSION['student_name'] = $user['student_name'];
        header("Location: profiles.php");
        exit();
    } else {
        // if Login failed, redirect with an error
        $error = urlencode("Invalid Student ID or Password!");
        header("Location: index.php?error=$error");
        exit();
    }
}
?>

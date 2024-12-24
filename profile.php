<?php
// Connect to the database
include 'db_connect.php';

// Fetch student details based on ID
$student_id = $_GET['student_id'];
$query = "SELECT * FROM students WHERE student_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $student_id);
$stmt->execute();
$result = $stmt->get_result();
$student = $result->fetch_assoc();

if (!$student) {
    die("Student not found!");
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link rel="icon" type="image/x-icon" href="./assets/uitmlogo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <div class="container mt-5">
        <div class="profile-card">
            <h3>Student Profile</h3>
            <table class="table table-bordered">
                <tr>
                    <th>Student ID</th>
                    <td><?= htmlspecialchars($student['student_id']) ?></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><?= htmlspecialchars($student['student_name']) ?></td>
                </tr>
                <tr>
                    <th>Email Student</th>
                    <td><?= htmlspecialchars($student['email_student']) ?></td>
                </tr>
                <tr>
                    <th>Semester</th>
                    <td><?= htmlspecialchars($student['semester']) ?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?= htmlspecialchars($student['address']) ?></td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td><?= htmlspecialchars($student['phone_number']) ?></td>
                </tr>
                <tr>
                    <th>CGPA</th>
                    <td><?= htmlspecialchars($student['cgpa']) ?></td>
                </tr>
                <tr>
                    <th>Advisor Name</th>
                    <td><?= htmlspecialchars($student['advisor']) ?></td>
                </tr>
                <tr>
                    <th>Residence / Non-Residence</th>
                    <td><?= htmlspecialchars($student['residence_nr']) ?></td>
                </tr>
                <tr>
                    <th>Programme</th>
                    <td><?= htmlspecialchars($student['programme']) ?></td>
                </tr>
            </table>
        </div>
    </div><br><br><br><br><br>

    <!------------ Footer ----------->
    <div class="footer">
        <p>&copy; 2024 UiTM e-Profile. All rights reserved.</p>
    </div>
</body>
</html>
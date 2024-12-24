<?php
// Connect to the database
include 'db_connect.php';

// Fetch all student profiles
$query = "SELECT student_id, student_name, programme FROM students";
$result = mysqli_query($conn, $query);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profiles</title>
    <link rel="icon" type="image/x-icon" href="./assets/uitmlogo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/profiles.css">
</head>
<body>
    <div class="container mt-5">
        <div class="table-container">
            <h2>List of Student Profiles</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Programme</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['student_id']) ?></td>
                            <td><?= htmlspecialchars($row['student_name']) ?></td>
                            <td><?= htmlspecialchars($row['programme']) ?></td>
                            <td>
                                <a href="profile.php?student_id=<?= $row['student_id'] ?>" class="btn btn-primary btn-sm">View Profile</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div><br><br>

        <!------------ Footer ----------->
    <div class="footer">
        <p>&copy; 2024 UiTM e-Profile. All rights reserved.</p>
    </div>
</body>
</html>
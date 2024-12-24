<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UiTM Student Login</title>
	<link rel="icon" type="image/x-icon" href="./assets/uitmlogo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/stylelogin.css">

</head>
<body>
    <div class="bg-gradient">
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="card shadow-lg p-4" style="width: 400px;">
                <!------------- UiTM Logo ------------->
                <div class="text-center mb-4">
                    <img src="./assets/uitmlogo.png" alt="UiTM Logo" style="width: 120px;">
                </div>
                <h2 class="text-center mb-4 text-primary">Login</h2>

                <!-------------- Show Error Message -------------->
                <?php if (isset($_GET['error'])): ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <?php echo htmlspecialchars($_GET['error']); ?>
                    </div>
                <?php endif; ?>

                <!-------------- Login Form -------------->
                <form id="loginForm" method="POST" action="login_process.php">
                    <div class="mb-3">
                        <label for="studentid" class="form-label">Student ID</label>
                        <input type="text" class="form-control" id="studentid" name="student_id" placeholder="Enter your student ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>

    <!-------------- Footer --------------->
    <div class="footer">
        <p>&copy; 2024 UiTM e-Profile. All rights reserved.</p>
    </div>
</body>
</html>

        

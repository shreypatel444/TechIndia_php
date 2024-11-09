<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="" method="POST">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <a href="index.php"><button type="submit" class="button" name="save_btn">Login</button></a>
            <div class="switch-page">
                <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['save_btn'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO login (email, password) VALUES ('$email', '$password')";
        $data = mysqli_query($con, $query);
        if ($data) {
            echo "<script>alert('Form submitted successfully!');</script>";
        } else {
            echo "<script>alert('Form submission failed. Please try again.');</script>";
        }
    }
    ?>
</body>
</html>

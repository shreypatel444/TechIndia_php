<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../css/register.css">
</head>

<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form action="" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="input-group">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob" required min="1900-01-01" max="2010-12-31">
            </div>
            <a href="index.php"><button type="submit" class="button"  name="save_btn">Sign Up</button></a>
            <div class="switch-page">
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </div>
        </form>
    </div>
    <?php
    if (isset($_POST['save_btn'])) {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $dob = $_POST['dob'];

        $query = "INSERT INTO signup (username, email, password, dob) VALUES ('$username', '$email', '$password', '$dob')";
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
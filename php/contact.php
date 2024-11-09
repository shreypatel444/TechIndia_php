<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - E-Learning Platform</title>
    <link rel="stylesheet" href="../css/contact.css">
</head>

<body>

    <!-- Header -->
    <header>
        <a href="index.php" class="logo">TechIndia</a>
        <nav>
        <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="video.php">Courses</a>
            <a href="courses.php">Enroll</a>
            <a href="pdf.php">Roadmaps</a>
            <a href="contact.php">Contact</a>
            <a href="signup.php">Register</a>
            <a href="payment.php">Payment</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="contact-page">
        <section class="contact-hero">
            <h1>Contact Us</h1>
            <p>We would love to hear from you! Reach out to us with any questions, feedback, or suggestions.</p>
        </section>

        <section class="contact-form">
            <h2>Get in Touch</h2>
            <form action="" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="6" required></textarea>

                <a href="index.php"><button type="submit" class="button"  name="save_btn">Send Message</button></a>
            </form>
            <?php
            if (isset($_POST['save_btn'])) {

                $name = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];

                $query = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
                $data = mysqli_query($con, $query);
                if ($data) {
                    echo "<script>alert('Form submitted successfully!');</script>";
                } else {
                    echo "<script>alert('Form submission failed. Please try again.');</script>";
                }
            }
            ?>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>2023 TechIndia. All rights reserved.</p>
        <nav>
            <a href="#">Terms of Service</a>
            <a href="#">Privacy</a>
        </nav>
    </footer>


</body>

</html>
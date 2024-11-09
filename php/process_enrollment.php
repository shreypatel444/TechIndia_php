<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $course_id = $_POST['course_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $subject = "Welcome to Your Course at TechIndia!";

    $message = "

Welcome to Your Course at TechIndia!

Hi $name,

Congratulations on your enrollment!

We’re pleased to inform you that you have successfully enrolled in your chosen course on the TechIndia platform. Starting today, you have full access to all the course materials, lessons, and resources. Simply log into your account to begin your learning journey.

We’re confident that this course will be a valuable experience, and we hope you’ll enjoy every part of it. If you have any questions, please don’t hesitate to reach out to us at 'support@techindia.com' or visit our Help Center on the website.

Wishing you success and an engaging learning experience!

Warm regards,
The TechIndia Team

";

    $check = mail($email, $subject, $message, "From: shreympatel1712@gmail.com");
    if ($check) {
        echo "mail sent successfully";
    } else {
        echo "mail not sent";
    }


    echo "<p>Thank you, $name! You have successfully enrolled in the course.</p>";
    echo "<p>We will send a confirmation email to $email.</p>";

    header("Refresh: 6; url=courses.php");
    exit;
}
?>
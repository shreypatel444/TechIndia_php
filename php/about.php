<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - E-Learning Platform</title>
    <link rel="stylesheet" href="../css/about.css">
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
    <main class="about-page">
        <section class="about-hero">
            <h1>About Us</h1>
            <p>We believe in accessible education for everyone, everywhere. Our platform empowers learners with high-quality courses to help them achieve their goals.</p>
        </section>

        <section class="about-mission">
            <h2>Our Mission</h2>
            <p>Our mission is to provide accessible, high-quality learning experiences for people around the world. We partner with industry experts and educators to create engaging, practical courses that help students succeed.</p>
        </section>

        <section class="about-values">
            <h2>Our Values</h2>
            <ul>
                <li><strong>Quality Education:</strong> We strive to deliver top-notch content that adds real value to our students' lives.</li>
                <li><strong>Accessibility:</strong> Learning should be accessible to everyone, regardless of location or background.</li>
                <li><strong>Innovation:</strong> We continuously innovate to provide the most effective and engaging learning experiences.</li>
            </ul>
        </section>

        <section class="about-team">
            <h2>Meet the Team</h2>
            <div class="team-members">
                <?php
                // Example team members
                $teamMembers = [
                    ["name" => "Shrey", "role" => "CEO & Founder", "bio" => "Shrey is passionate about education and has over 15 years of experience in online learning."],
                    ["name" => "Jay", "role" => "CTO", "bio" => "Jay is a tech enthusiast who leads the platform's technical development and innovation."],
                    ["name" => "Vrushal", "role" => "Head of Content", "bio" => "Vrushal ensures our courses meet the highest quality standards and are engaging for learners."],
                    ["name" => "Tarang", "role" => "Head of Marketing", "bio" => "Tarang drives our marketing efforts, bringing creative strategies to expand our reach and impact."]
                ]
                
                ?>

                <?php foreach ($teamMembers as $member): ?>
                    <div class="team-member-card">
                        <h3><?php echo $member["name"]; ?></h3>
                        <p><strong><?php echo $member["role"]; ?></strong></p>
                        <p><?php echo $member["bio"]; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
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

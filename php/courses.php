<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses - E-Learning Platform</title>
    <link rel="stylesheet" href="../css/courses.css">
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
    <main class="courses-page">
        <section class="courses-hero">
            <h1>Our Courses</h1>
            <p>Browse our selection of high-quality courses designed to help you learn and grow.</p>
            
            <!-- Search Form -->
            <form method="GET" class="search-form">
                <input type="text" name="search" placeholder="Search for courses..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                <button type="submit">Search</button>
            </form>
        </section>

        <section class="courses-list">
            <?php
            // Example course data array (you could replace this with a database connection)
            $courses = [
                ["id" => 1, "title" => "Introduction to Programming", "description" => "Learn the basics of programming using Python.", "duration" => "4 Weeks", "level" => "Beginner"],
                ["id" => 2, "title" => "Data Structures and Algorithms", "description" => "Master data structures and algorithms.", "duration" => "6 Weeks", "level" => "Intermediate"],
                ["id" => 3, "title" => "Web Development", "description" => "Build dynamic websites with HTML, CSS, JavaScript.", "duration" => "8 Weeks", "level" => "Beginner to Intermediate"],
                ["id" => 4, "title" => "Machine Learning", "description" => "Learn machine learning concepts and techniques.", "duration" => "10 Weeks", "level" => "Advanced"],
                ["id" => 5, "title" => "Mobile App Development", "description" => "Create mobile applications for iOS and Android.", "duration" => "8 Weeks", "level" => "Intermediate"],
                ["id" => 6, "title" => "Database Management Systems", "description" => "Understand how databases work, including SQL and NoSQL.", "duration" => "6 Weeks", "level" => "Intermediate"],
                ["id" => 7, "title" => "Digital Marketing", "description" => "Explore SEO, social media marketing, Google Ads.", "duration" => "4 Weeks", "level" => "Beginner"],
                ["id" => 8, "title" => "Cloud Computing with AWS", "description" => "Learn cloud fundamentals and AWS services.", "duration" => "8 Weeks", "level" => "Intermediate"],
                ["id" => 9, "title" => "Cybersecurity Essentials", "description" => "Learn cybersecurity principles and network security.", "duration" => "6 Weeks", "level" => "Beginner to Intermediate"],
                ["id" => 10, "title" => "Data Science with Python", "description" => "Dive into data science concepts and machine learning.", "duration" => "8 Weeks", "level" => "Intermediate"],
                ["id" => 11, "title" => "Artificial Intelligence with Python", "description" => "Understand AI concepts like neural networks and NLP.", "duration" => "10 Weeks", "level" => "Advanced"],
                ["id" => 12, "title" => "UI/UX Design Fundamentals", "description" => "Learn UI/UX design, wireframing, and prototyping.", "duration" => "4 Weeks", "level" => "Beginner"],
                ["id" => 13, "title" => "Game Development with Unity", "description" => "Create 2D and 3D games with Unity.", "duration" => "8 Weeks", "level" => "Intermediate"],
                ["id" => 14, "title" => "DevOps Essentials", "description" => "Learn DevOps principles, CI/CD, Docker, Kubernetes.", "duration" => "6 Weeks", "level" => "Intermediate"],
                ["id" => 15, "title" => "Blockchain Development", "description" => "Learn blockchain architecture and smart contracts.", "duration" => "10 Weeks", "level" => "Advanced"]
            ];

            // Get the search term from the query string if available
            $searchTerm = isset($_GET['search']) ? strtolower($_GET['search']) : '';

            // Filter the courses array based on the search term
            $filteredCourses = array_filter($courses, function ($course) use ($searchTerm) {
                return strpos(strtolower($course["title"]), $searchTerm) !== false ||
                       strpos(strtolower($course["description"]), $searchTerm) !== false;
            });

            // Display filtered courses
            if (empty($filteredCourses)) {
                echo '<p>No courses found matching your search.</p>';
            } else {
                foreach ($filteredCourses as $course) {
                    echo '<div class="course-card">';
                    echo '<h2>' . htmlspecialchars($course["title"]) . '</h2>';
                    echo '<p>' . htmlspecialchars($course["description"]) . '</p>';
                    echo '<p><strong>Duration:</strong> ' . htmlspecialchars($course["duration"]) . '</p>';
                    echo '<p><strong>Level:</strong> ' . htmlspecialchars($course["level"]) . '</p>';
                    echo '<a href="enroll.php?course_id=' . urlencode($course["id"]) . '" class="enroll-btn"><button>Enroll Now</button></a>';
                    echo '</div>';
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

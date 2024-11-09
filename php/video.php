<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="../css/video.css">
</head>

<body>

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

    <section class="course-cards">
        <section class="courses-hero">
            <h1>Our Courses</h1>
            <p>Browse our selection of high-quality courses designed to help you learn and grow.</p>

            <!-- Search Form -->
            <form method="GET" class="search-form">
                <input type="text" name="search" placeholder="Search for courses..."
                    value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                <button type="submit">Search</button>
            </form>
        </section>
        
        <div class="card-container">
            <?php
            // Array of courses
            $courses = [
                ["title" => "Java", "image" => "../img/java.jpg", "link" => "https://www.youtube.com/watch?v=yRpLlJmRo2w&list=PLfqMhTWNBTe3LtFWcvwpqTkUSlB32kJop"],
                ["title" => "C++", "image" => "../img/cpp.png", "link" => "https://www.youtube.com/watch?v=WQoB2z67hvY&list=PLDzeHZWIZsTryvtXdMr6rPh4IDexB5NIA"],
                ["title" => "Python", "image" => "../img/python.jpg", "link" => "https://www.youtube.com/watch?v=t2_Q2BRzeEE&list=PLGjplNEQ1it8-0CmoljS5yeV-GlKSUEt0"],
                ["title" => "Artificial Intelligence", "image" => "../img/ai.jpg", "link" => "https://www.youtube.com/watch?v=saNiKk06f1Y&list=PLPIwNooIb9vgB1DQEftkKA3qOdeC4vonA"],
                ["title" => "Blockchain", "image" => "../img/blockchain.jpg", "link" => "https://www.youtube.com/watch?v=mfSr-c9sAjI&list=PLYwpaL_SFmcDFRupamGc-9zc-vQqvkQnn"],
                ["title" => "Cyber Security", "image" => "../img/cc.jpg", "link" => "https://www.youtube.com/watch?v=lpa8uy4DyMo&list=PL9ooVrP1hQOGPQVeapGsJCktzIO4DtI4_"],
                ["title" => "Database", "image" => "../img/db.png", "link" => "https://www.youtube.com/watch?v=6Iu45VZGQDk&list=PLBlnK6fEyqRi_CUQ-FXxgzKQ1dwr_ZJWZ"],
                ["title" => "Data Structures", "image" => "../img/dsa.png", "link" => "https://www.youtube.com/watch?v=5_5oE5lgrhw&list=PLu0W_9lII9ahIappRPN0MCAgtOu3lQjQi"],
                ["title" => "Machine Learning", "image" => "../img/ml.png", "link" => "https://www.youtube.com/watch?v=Nl3NJB3IJwo&list=PLjVLYmrlmjGe-xLyoCdDrt8Nil1Alg_L3"],
                ["title" => "Node.js", "image" => "../img/node.png", "link" => "https://www.youtube.com/watch?v=ohIAiuHMKMI&list=PLinedj3B30sDby4Al-i13hQJGQoRQDfPo"],
                ["title" => "ReactJs", "image" => "../img/react.png", "link" => "https://www.youtube.com/watch?v=-mJFZp84TIY&list=PLu0W_9lII9agx66oZnT6IyhcMIbUMNMdt"],
                ["title" => "App Development", "image" => "../img/app.jpg", "link" => "https://www.youtube.com/watch?v=InigFUSiPl8&list=PLu0W_9lII9aiL0kysYlfSOUgY5rNlOhUd"],
                ["title" => "Cloud Computing", "image" => "../img/cloud.jpg", "link" => "https://www.youtube.com/watch?v=2LaAJq1lB1Q&list=PL9ooVrP1hQOFtZ5oAAeOgi_nH-txMcDMu"],
                ["title" => "Ui/UX", "image" => "../img/ux2.jpg", "link" => "https://www.youtube.com/watch?v=O5IXf8qB9U4&list=PLdvOfoe7PXT0ouChAnR1nHlT8BJIo5hP_"],
                ["title" => "DevOps", "image" => "../img/dev2.png", "link" => "https://www.youtube.com/watch?v=SOTamWNgDKc&list=PLWKjhJtqVAbkzvvpY12KkfiIGso9A_Ixs"]
            ];

            // Get the search term from the URL, if set
            $searchTerm = isset($_GET['search']) ? strtolower($_GET['search']) : '';

            // Filter courses based on the search term
            $filteredCourses = array_filter($courses, function ($course) use ($searchTerm) {
                return strpos(strtolower($course["title"]), $searchTerm) !== false;
            });

            // Display filtered courses
            foreach ($filteredCourses as $course) {
                echo "<div class='card'>";
                echo "<img src='{$course['image']}' alt='{$course['title']}'>";
                echo "<h3>{$course['title']}</h3>";
                echo "<a href='{$course['link']}' target='_blank'>Go to Course</a>";
                echo "</div>";
            }
            ?>
        </div>
    </section>

    <footer>
        <p>2023 TechIndia. All rights reserved.</p>
        <nav>
            <a href="#">Terms of Service</a>
            <a href="#">Privacy</a>
        </nav>
    </footer>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Platform</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <?php
    $courses = [
        [
            "id" => 1,
            "title" => "Introduction to Programming",
            "description" => "Learn the basics of programming using Python, focusing on syntax, logic, and problem-solving techniques.",
        ],
        [
            "id" => 2,
            "title" => "Data Structures and Algorithms",
            "description" => "Master data structures like arrays, stacks, queues, and advanced algorithms for optimized problem-solving.",
        ],
        [
            "id" => 3,
            "title" => "Web Development",
            "description" => "Build dynamic websites with HTML, CSS, JavaScript, and modern frameworks like React.js.",
        ],
    ];

    $pdfs = [
        [
            "id" => 1,
            "title" => "Introduction to Programming",
            "description" => "Learn the basics of programming using Python, focusing on syntax, logic, and problem-solving techniques.",
            "path" => "pdf/python.pdf"
        ],
        [
            "id" => 2,
            "title" => "Data Structures and Algorithms",
            "description" => "Master data structures like arrays, stacks, queues, and advanced algorithms for optimized problem-solving.",
            "path" => "pdf/datastructures-and-algorithms.pdf"
        ],
        [
            "id" => 3,
            "title" => "Web Development",
            "description" => "Build dynamic websites with HTML, CSS, JavaScript, and modern frameworks like React.js.",
            "path" => "pdf/full-stack.pdf"

        ],
    ];

    $searchTerm = isset($_GET['search']) ? strtolower($_GET['search']) : '';
    $filteredCourses = array_filter($courses, function ($course) use ($searchTerm) {
        return strpos(strtolower($course["title"]), $searchTerm) !== false;
    });
    ?>

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

    <main>
        <section class="hero">
            <h1>Learn Anything, Anywhere</h1>
            <p>Explore our vast library of courses and start learning today.</p>
            <button>Start Learning</button>
            <a href="courses.php"><button>Explore Courses</button></a>
        </section>

        <section class="search-courses">
            <h2>Search Courses</h2>
            <form method="get">
                <input type="text" name="search" placeholder="Search courses..."
                    value="<?php echo htmlspecialchars($searchTerm); ?>">
                <button type="submit">Search</button>
            </form>
            <div class="courses">
                <?php foreach ($filteredCourses as $course): ?>
                    <div class="card">
                        <h3><?php echo $course["title"]; ?></h3>
                        <p><?php echo $course["description"]; ?></p>
                        <a href="enroll.php?course_id=<?php echo $course["id"]; ?>" class="enroll-btn"><button>Enroll
                                Now</button></a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="go_to_courses">
                <a href="courses.php"><button>View All Courses </button></a>
            </div>
        </section>

        <section class="popular-courses">
            <h2>Roadmaps</h2>
            <div class="courses">
                <?php foreach ($pdfs as $pdf): ?>
                    <div class="card">
                        <h3><?php echo $pdf["title"]; ?></h3>
                        <p><?php echo $pdf["description"]; ?></p>
                        <a href="<?php echo $pdf["path"]; ?>" download> <button>Download</button> </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="go_to_courses">
                <a href="pdf.php"><button>View All Roadmaps</button></a>
            </div>
        </section>

        <section class="testimonials">


            <form action="" method="POST" class="enrollment-form">

                <label for="nameform">Your Name:</label>
                <input type="text" id="nameform" name="nameform" required placeholder="Enter your name...">

                <label for="courseform">Course:</label>
                <select id="courseform" name="courseform" required>
                    <option value="">Select a Course</option>
                    <option value="Introduction to Programming">Introduction to Programming</option>
                    <option value="Data Structures and Algorithms">Data Structures and Algorithms</option>
                    <option value="Web Development">Web Development</option>
                    <option value="Machine Learning">Machine Learning</option>
                    <option value="Mobile App Development">Mobile App Development</option>
                    <option value="Database Management Systems">Database Management Systems</option>
                    <!-- Add more course options as needed -->
                </select>

                <label for="experience">Your Experience:</label>
                <textarea id="experience" name="experience" rows="4" required
                    placeholder="Describe your experience..."></textarea>

                <button type="submit">Submit</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Capture form data
                $name = htmlspecialchars($_POST['nameform']);
                $course = htmlspecialchars($_POST['courseform']);
                $experience = htmlspecialchars($_POST['experience']);

                // Display the submitted data in a card
                echo '<div class="cardformmain">';
                echo '<div class="cardform">';
                echo '<h2>Enrollment Details</h2>';
                echo '<p><strong>Name:</strong> ' . $name . '</p>';
                echo '<p><strong>Course:</strong> ' . $course . '</p>';
                echo '<p><strong>Experience:</strong> ' . nl2br($experience) . '</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>

        </section>
    </main>

    <footer>
        <p>2023 TechIndia. All rights reserved.</p>
        <nav>
            <a href="#">Terms of Service</a>
            <a href="#">Privacy</a>
        </nav>
    </footer>
</body>

</html>
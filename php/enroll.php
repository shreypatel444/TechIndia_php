<?php
// Sample courses array (replace with your database or array)
$courses = [
    [
        "id" => 1,
        "title" => "Introduction to Programming",
        "description" => "Learn the basics of programming using Python, focusing on syntax, logic, and problem-solving techniques.",
        "duration" => "4 Weeks",
        "level" => "Beginner"
    ],
    [
        "id" => 2,
        "title" => "Data Structures and Algorithms",
        "description" => "Master data structures like arrays, stacks, queues, and advanced algorithms for optimized problem-solving.",
        "duration" => "6 Weeks",
        "level" => "Intermediate"
    ],
    [
        "id" => 3,
        "title" => "Web Development",
        "description" => "Build dynamic websites with HTML, CSS, JavaScript, and modern frameworks like React.js.",
        "duration" => "8 Weeks",
        "level" => "Beginner to Intermediate"
    ],
    [
        "id" => 4,
        "title" => "Machine Learning",
        "description" => "Learn core machine learning concepts such as supervised learning, unsupervised learning, and deep learning models.",
        "duration" => "10 Weeks",
        "level" => "Advanced"
    ],
    [
        "id" => 5,
        "title" => "Mobile App Development",
        "description" => "Create mobile applications for iOS and Android using Swift and Kotlin. Learn about app architecture and UI/UX design.",
        "duration" => "8 Weeks",
        "level" => "Intermediate"
    ],
    [
        "id" => 6,
        "title" => "Database Management Systems",
        "description" => "Understand how databases work, including SQL, relational databases, and NoSQL databases.",
        "duration" => "6 Weeks",
        "level" => "Intermediate"
    ],
    [
        "id" => 7,
        "title" => "Digital Marketing",
        "description" => "Explore SEO, social media marketing, Google Ads, and content strategy to boost online presence and brand awareness.",
        "duration" => "4 Weeks",
        "level" => "Beginner"
    ],
    [
        "id" => 8,
        "title" => "Cloud Computing with AWS",
        "description" => "Learn cloud fundamentals, AWS services, and how to build scalable applications in the cloud.",
        "duration" => "8 Weeks",
        "level" => "Intermediate"
    ],
    [
        "id" => 9,
        "title" => "Cybersecurity Essentials",
        "description" => "Get an introduction to cybersecurity, network security, encryption, and penetration testing.",
        "duration" => "6 Weeks",
        "level" => "Beginner to Intermediate"
    ],
    [
        "id" => 10,
        "title" => "Data Science with Python",
        "description" => "Dive into data science concepts, data cleaning, visualization, and machine learning using Python.",
        "duration" => "8 Weeks",
        "level" => "Intermediate"
    ],
    [
        "id" => 11,
        "title" => "Artificial Intelligence with Python",
        "description" => "Understand AI concepts like neural networks, reinforcement learning, and natural language processing.",
        "duration" => "10 Weeks",
        "level" => "Advanced"
    ],
    [
        "id" => 12,
        "title" => "UI/UX Design Fundamentals",
        "description" => "Learn the principles of user interface and user experience design, wireframing, and prototyping.",
        "duration" => "4 Weeks",
        "level" => "Beginner"
    ],
    [
        "id" => 13,
        "title" => "Game Development with Unity",
        "description" => "Create 2D and 3D games using the Unity engine, including physics, scripting, and animation.",
        "duration" => "8 Weeks",
        "level" => "Intermediate"
    ],
    [
        "id" => 14,
        "title" => "DevOps Essentials",
        "description" => "Learn the principles of DevOps, continuous integration, and deployment pipelines with tools like Docker and Kubernetes.",
        "duration" => "6 Weeks",
        "level" => "Intermediate"
    ],
    [
        "id" => 15,
        "title" => "Blockchain Development",
        "description" => "Understand blockchain architecture, smart contracts, and how to build decentralized applications (dApps).",
        "duration" => "10 Weeks",
        "level" => "Advanced"
    ]
];


// Check if 'course_id' is set in the URL
if (isset($_GET['course_id'])) {
    $course_id = $_GET['course_id'];

    // Find the course based on the course_id
    $course = null;
    foreach ($courses as $c) {
        if ($c['id'] == $course_id) {
            $course = $c;
            break;
        }
    }

    // If course not found, show error
    if ($course === null) {
        echo "<p>Course not found.</p>";
        exit;
    }
} else {
    echo "<p>No course selected.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll in <?php echo $course['title']; ?> - E-Learning Platform</title>
    <link rel="stylesheet" href="../css/enroll.css"> <!-- Include the CSS file -->
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

    <main class="enroll-page">
        <section class="course-info">
            <h1 class="course_title" name="course_title">Enroll in <?php echo $course['title']; ?></h1>
            <p><strong>Description:</strong> <?php echo $course['description']; ?></p>
            <!-- Enrollment Form -->
            <form action="process_enrollment.php" method="POST">
                <input type="hidden" name="course_id" value="<?php echo $course['id']; ?>">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>

                <button type="submit">Enroll Now</button>
            </form>
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

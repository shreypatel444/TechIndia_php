<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Downloadable PDFs</title>
    <link rel="stylesheet" href="../css/pdf.css">
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

<h1>Downloadable Roadmaps</h1>
<div class="card-container">
    <?php
    $pdfs = [
        [
            "id" => 1,
            "title" => "Introduction to Programming",
            "description" => "Learn the basics of programming using Python, focusing on syntax, logic, and problem-solving techniques.",
            "path" => "../pdf/python.pdf"
        ],
        [
            "id" => 2,
            "title" => "Data Structures and Algorithms",
            "description" => "Master data structures like arrays, stacks, queues, and advanced algorithms for optimized problem-solving.",
            "path" => "../pdf/datastructures-and-algorithms.pdf"
        ],
        [
            "id" => 3,
            "title" => "Web Development",
            "description" => "Build dynamic websites with HTML, CSS, JavaScript, and modern frameworks like React.js.",
            "path" => "../pdf/full-stack.pdf"
        
        ],
        [
            "id" => 4,
            "title" => "Machine Learning",
            "description" => "Learn core machine learning concepts such as supervised learning, unsupervised learning, and deep learning models.",
            "path" => "../pdf/mlops.pdf"
        ],
        [
            "id" => 5,
            "title" => "Mobile App Development",
            "description" => "Create mobile applications for iOS and Android using Swift and Kotlin. Learn about app architecture and UI/UX design.",
           "path" => "../pdf/android.pdf"
        ],
        [
            "id" => 6,
            "title" => "Database Management Systems",
            "description" => "Understand how databases work, including SQL, relational databases, and NoSQL databases.",
           "path" => "../pdf/sql.pdf"
        ],
        [
            "id" => 7,
            "title" => "Digital Marketing",
            "description" => "Explore SEO, social media marketing, Google Ads, and content strategy to boost online presence and brand awareness.",
            "path" => "../pdf/product-manager.pdf"
        ],
        [
            "id" => 8,
            "title" => "Cloud Computing with AWS",
            "description" => "Learn cloud fundamentals, AWS services, and how to build scalable applications in the cloud.",
            "path" => "../pdf/aws.pdf"
         ],
        [
            "id" => 9,
            "title" => "Cybersecurity Essentials",
            "description" => "Get an introduction to cybersecurity, network security, encryption, and penetration testing.",
            "path" => "../pdf/cyber-security.pdf"
        ],
        [
            "id" => 10,
            "title" => "Data Science with Python",
            "description" => "Dive into data science concepts, data cleaning, visualization, and machine learning using Python.",
           "path" => "../pdf/ai-data-scientist.pdf"
        ],
        [
            "id" => 11,
            "title" => "Artificial Intelligence with Python",
            "description" => "Understand AI concepts like neural networks, reinforcement learning, and natural language processing.",
            "path" =>"../pdf/ai-engineer.pdf"
        ],
        [
            "id" => 12,
            "title" => "UI/UX Design Fundamentals",
            "description" => "Learn the principles of user interface and user experience design, wireframing, and prototyping.",
            "path" =>"../pdf/ux-design.pdf"
        ],
        [
            "id" => 13,
            "title" => "Game Development with Unity",
            "description" => "Create 2D and 3D games using the Unity engine, including physics, scripting, and animation.",
            "path" =>"../pdf/game-developer.pdf"
        ],
        [
            "id" => 14,
            "title" => "DevOps Essentials",
            "description" => "Learn the principles of DevOps, continuous integration, and deployment pipelines with tools like Docker and Kubernetes.",
            "path" =>"../pdf/devops.pdf"
        ],
        [
            "id" => 15,
            "title" => "Blockchain Development",
            "description" => "Understand blockchain architecture, smart contracts, and how to build decentralized applications (dApps).",
            "path" =>"../pdf/blockchain.pdf"
        ]
    ];

    foreach ($pdfs as $pdf) {
        echo "<div class='pdf-card'>";
        echo "<h3>" . htmlspecialchars($pdf['title']) . "</h3>";
        echo "<p>" . htmlspecialchars($pdf['description']) . "</p>";
        echo "<a href='" . htmlspecialchars($pdf['path']) . "' download>Download</a>";
        echo "</div>";
    }
    ?>
</div>
<footer>
        <p>2023 TechIndia. All rights reserved.</p>
        <nav>
            <a href="#">Terms of Service</a>
            <a href="#">Privacy</a>
        </nav>
    </footer>

</body>
</html>

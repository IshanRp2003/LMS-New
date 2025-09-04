<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS Landing Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Welcome to the LMS</h1>
    </header>
    <main>
        <h2>Courses</h2>
        <div class="course-list">
            <?php
            $courses_dir = 'courses';
            if (is_dir($courses_dir)) {
                $courses = scandir($courses_dir);
                foreach ($courses as $course) {
                    if ($course != '.' && $course != '..') {
                        echo '<div class="course-item">';
                        echo '<h3>' . htmlspecialchars($course) . '</h3>';
                        echo '<a href="' . $courses_dir . '/' . rawurlencode($course) . '">Go to course</a>';
                        echo '</div>';
                    }
                }
            } else {
                echo '<p>No courses available at the moment.</p>';
            }
            ?>
        </div>
    </main>
    <footer>
        <p>&copy; 2025 LMS</p>
    </footer>
</body>
</html>

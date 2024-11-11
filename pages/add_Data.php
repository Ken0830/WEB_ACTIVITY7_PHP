<?php
session_start();

if (!isset($_SESSION['students'])) {
    $_SESSION['students'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $campus = $_POST['campus'];
    $college = $_POST['college'];

    $_SESSION['students'][] = [
        'name' => $name,
        'age' => $age,
        'gender' => $gender,
        'course' => $course,
        'campus' => $campus,
        'college' => $college
    ];

    header('Location: showdata.php'); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title> 
    <?php include('../layout/style.php'); ?>
</head>
<style>
    .container-fluid {
        max-width: 500px; 
        margin: auto;
    }
    .card-header {
        font-size: 1rem;
        padding: 0.5rem 1rem;
    }
    .form-label, .form-control, select, button {
        font-size: 0.875rem; 
    }
    .mb-3 {
        margin-bottom: 0.75rem;
    }
    .btn {
        font-size: 0.875rem; 
        padding: 0.375rem 0.75rem; 
    }
    .breadcrumb, .mt-4 {
        font-size: 0.875rem;
        margin-bottom: 0.5rem;
    }
</style>

<body class="sb-nav-fixed">
    <?php include('../layout/header.php'); ?>

    <div id="layoutSidenav">
        <?php include('../layout/navigation.php'); ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4"><b>Add Student</b></h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"></li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-plus-circle me-1"></i>
                            Add New Student Data
                        </div>
                        <div class="card-body">
                            <form action="add_data.php" method="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="age" class="form-label">Age:</label>
                                    <input type="number" class="form-control" id="age" name="age" required>
                                </div>
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender:</label>
                                    <select class="form-control" id="gender" name="gender" required>
                                        <option value="" disabled selected>Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="course" class="form-label">Course:</label>
                                    <select class="form-control" id="course" name="course" required>
                                        <option value="" disabled selected>Select Course</option>
                                        <option value="Bachelor of Science in Information System">Bachelor of Science in Information System</option>
                                        <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                                        <option value="Bachelor of Science in Business Administration">Bachelor of Science in Business Administration</option>
                                        <option value="Bachelor of Science in Tourism Management">Bachelor of Science in Tourism Management</option>
                                        <option value="Bachelor of Science in Nursing">Bachelor of Science in Nursing</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="campus" class="form-label">Campus:</label>
                                    <select class="form-control" id="campus" name="campus" required>
                                        <option value="" disabled selected>Select Campus</option>
                                        <option value="Main Campus">Main Campus</option>
                                        <option value="Santa Cruz Campus">Santa Cruz Campus</option>
                                        <option value="Torrijos Campus">Torrijos Campus</option>
                                        <option value="Gasan Campus">Gasan Campus</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="college" class="form-label">College:</label>
                                    <select class="form-control" id="college" name="college" required>
                                        <option value="" disabled selected>Select College</option>
                                        <option value="College of Information and Computing Sciences">College of Information and Computing Sciences</option>
                                        <option value="College of Engineering">College of Engineering</option>
                                        <option value="College of Business and Accountancy">College of Business and Accountancy</option>
                                        <option value="College of Governance">College of Governance</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <?php include('../layout/footer.php'); ?>
        </div>
    </div>
    <?php include('../layout/script.php'); ?>
</body>
</html>

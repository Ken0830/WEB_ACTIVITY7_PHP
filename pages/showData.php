<?php
    session_start();
    if(!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
        header('Location:../');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Show Data</title>
        <?php include('../layout/style.php');?>
    </head>
    <body class="sb-nav-fixed">

        <?php include('../layout/header.php');?>

        <div id="layoutSidenav">
            <?php include('../layout/navigation.php');?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Show Data</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Show Data</li>
                        </ol>
                
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Course</th>
                                        <th>Campus</th>
                                        <th>College</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($_SESSION['students'])) {
                                        foreach ($_SESSION['students'] as $student) {
                                            echo "<tr>
                                                <td>{$student['name']}</td>
                                                <td>{$student['age']}</td>
                                                <td>{$student['gender']}</td>
                                                <td>{$student['course']}</td>
                                                <td>{$student['campus']}</td>
                                                <td>{$student['college']}</td>
                                            </tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>No data available</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
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



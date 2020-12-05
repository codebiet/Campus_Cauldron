<?php
@session_start();
include 'include/security.php'
?>

<?php
if (isset($_POST['submit'])) {
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    extract($_FILES);
    $images = time() . $image['name'];

    if (empty($question)) {
        echo " <div class='alert alert-danger'><strong>ERROR</strong> - Empty fields are not allowed !</div>";
    } else {
        $con = mysqli_connect("localhost", "root", "");

        if (!$con) {
            die();
        }

        mysqli_select_db($con, "campus_cauldron");
        $location = "faq/";
        $tmp = $image['tmp_name'];
        move_uploaded_file($tmp, $location . $images);

        $query = "INSERT INTO faq(question, answer) VALUES ('$question', '$answer')";
        if (mysqli_query($con, $query)) {
            echo "<script type='text/javascript'>alert('New FAQ has been successfully added.'); window.location.href = 'index.php';</script>";
        } else {
            echo "error";
        }

        // echo "<script>location.href='addevent.php </script";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add FAQ</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include 'include/sidebar.php'
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include 'include/topbar.php'
                ?>
                <!-- NAVBAR -->
                <nav class="navbar navbar-expand-lg navbar-dark my-bg">
                    <a class="navbar-brand" href="index.php">Campus Cauldron</a>
                </nav>

                <div class="container" style="margin-top:50px;">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-5 d-none d-lg-block "></div>
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Add FAQ</h1>
                                        </div>

                                        <form class="user" method="POST" action="#" enctype="multipart/form-data" name="upload">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="" name="question" placeholder="Question" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="" placeholder="Answer" name="answer" required>
                                            </div>

                                            <button href="add_notice.php" class="btn btn-primary btn-user btn-block" name="submit" type="submit">
                                                Submit</button>
                                            <hr>

                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->


                <?php
                include 'include/scripts.php'
                ?>
</body>

</html>
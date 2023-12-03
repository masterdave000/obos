<?php 

$title = "Add Admin";
include './../includes/side-header.php';
$fullname = $_SESSION['fullname'];

?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <?php
            if (isset($_SESSION['pass_not_match'])) //Checking whether the session is set or not
            {	//DIsplaying session message
                echo $_SESSION['pass_not_match'];
                //Removing session message
                unset($_SESSION['pass_not_match']);
            }

            if (isset($_SESSION['add'])) //Checking whether the session is set or not
            {	//DIsplaying session message
                echo $_SESSION['add'];
                //Removing session message
                unset($_SESSION['add']);
            }
        ?>

        <?php require './../includes/top-header.php'?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?php echo $title?></h1>

        </div>


        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-4 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><?php echo $title?></h1>
                                    </div>
                                    <form action="./controller/create.php" method="POST" class="user">
                                        <div class="form-group">
                                            <input type="text" name="fullname" class="form-control form-control-user"
                                                id="exampleInputfullname" aria-describedby="fullnameHelp"
                                                placeholder="Enter Fullname...">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="exampleInputusername" aria-describedby="usernameHelp"
                                                placeholder="Enter Username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password1"
                                                class="form-control form-control-user" id="exampleInputPassword1"
                                                placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password2"
                                                class="form-control form-control-user" id="exampleInputPassword2"
                                                placeholder="Confirm Password">
                                        </div>

                                        <input type="submit" name="submit" class="btn btn-primary btn-user btn-block"
                                            value="Add">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- End of Main Content -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<?php 
    
    require './../modals/logout.php';
    require './../includes/footer.php';
    
    ?>
</body>

</html>
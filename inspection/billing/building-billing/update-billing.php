<?php

$title = "Edit Building Billing";
include './../../includes/side-header.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $clean_bldg_billing_id = filter_var($_GET['bldg_billing_id'], FILTER_SANITIZE_NUMBER_INT);
    $bldg_billing_id = filter_var($clean_bldg_billing_id, FILTER_VALIDATE_INT);

    $buildingBilling = "SELECT * FROM building_billing WHERE bldg_billing_id = :bldg_billing_id";
    $buildingStatement = $pdo->prepare($buildingBilling);
    $buildingStatement->bindParam(':bldg_billing_id', $bldg_billing_id);
    $buildingStatement->execute();

    $building = $buildingStatement->fetch(PDO::FETCH_ASSOC);
}
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <?php

        if (isset($_SESSION['udapte'])) //Checking whether the session is set or not
        {    //DIsplaying session message
            echo $_SESSION['udapte'];
            //Removing session message
            unset($_SESSION['udapte']);
        }

        if (isset($_SESSION['duplicate'])) //Checking whether the session is set or not
        {    //DIsplaying session message
            echo $_SESSION['duplicate'];
            //Removing session message
            unset($_SESSION['duplicate']);
        }
        ?>

        <?php require './../../includes/top-header.php' ?>

        <!-- Outer Row -->
        <div class="row d-flex align-items-center justify-content-center overflow-hidden" style="height: 90%;">
            <div class="col-xl-6 col-lg-8 col-md-11 col-sm-11 p-3">
                <div class="card card-body o-hidden shadow-lg p-4">
                    <!-- Nested Row within Card Body -->
                    <div class="d-flex flex-column justify-content-center col-lg-12">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4"><?php echo $title ?></h1>
                        </div>
                        <form action="./controller/update.php" method="POST" class="user" enctype="multipart/form-data">

                            <div class="form-group d-flex flex-column flex-md-grow-1">
                                <label for="section">Section <span class="text-danger">*</span>
                                </label>
                                <div class="d-flex align-items-center justify-content-center select-container">
                                    <select name="section" class="form-control form-select px-3">
                                        <option selected hidden value="<?= $building['bldg_section'] ?>"><?= $building['bldg_section'] ?></option>
                                        <option value="Division A-1 and A-2">Division A-1 and A-2</option>
                                        <option value="Division B-1/D-1, 2, 3/E-1, 2, 3/F-1/G-1, 2, 3, 4, 5/H-1, 2, 3, 4/ and I-1, Commercial, Industrial Institutional Buildings, and Appendages">Division B-1/D-1, 2, 3/E-1, 2, 3/F-1/G-1, 2, 3, 4, 5/H-1, 2, 3, 4/ and I-1, Commercial, Industrial Institutional Buildings, and Appendages</option>
                                        <option value="Divisions C-1, 2, Amusement Houses, and Gymnasia">Divisions C-1, 2, Amusement Houses, and Gymnasia</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col col-12 p-0 form-group">
                                <label for="property-attribute">Property Attribute <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="property_attribute" class="form-control p-4" id="property-attribute" placeholder="Enter Property Attribute..." value="<?= $building['bldg_property_attribute'] ?>" required>
                            </div>

                            <div class="col col-12 p-0 form-group">
                                <label for="fee">Fee <span class="text-danger">*</span>
                                </label>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">₱</span>
                                    </div>

                                    <input type="number" name="fee" class="form-control p-4" id="fee" placeholder="Enter Fee..." step="0.01" min="0.00" value="<?= $building['bldg_fee'] ?>" required>
                                </div>
                            </div>

                            <input type="hidden" name="bldg_billing_id" value="<?= $bldg_billing_id ?>">

                            <input type="submit" name="submit" class="btn btn-primary btn-user btn-block mt-3" value="Edit">
                        </form>
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

<?php require './../../includes/footer.php'; ?>
</body>

</html>
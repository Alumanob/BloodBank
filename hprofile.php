<?php
require 'file/connection.php';
session_start();
if (!isset($_SESSION['hid'])) {
    header('location:login.php');
} else {
    if (isset($_SESSION['hid'])) {
        $id = $_SESSION['hid'];
        $sql = "SELECT * FROM hospital WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
    }
}
?>

<!DOCTYPE html>
<html>
<?php $title = "BloodBank| Hospital Profile"; ?>
<?php require 'head.php'; ?>
<?php require 'header.php'; ?>

<body>
    <?php require 'message.php'; ?>

    <section class="container mt-5 pt-2"  style="height: 852px;">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                <div class="card card_hp bg-danger text-light mt-5">
                    <div class="mt-4 d-flex justify-content-center">
                        <img src="images/icons/hospital.png" alt="profile" width="60" height="60">
                    </div>
                    <div class="card-body">
                        <form action="file/updateprofile.php" method="post">
                            <label class="font-weight-bold">Name</label>
                            <input type="text" name="hname" value="<?php echo $row['hname']; ?>" class="form-control mb-3">

                            <label class="font-weight-bold">Email</label>
                            <input type="email" name="hemail" value="<?php echo $row['hemail']; ?>" class="form-control mb-3">

                            <label class="font-weight-bold">Password</label>
                            <input type="text" name="hpassword" value="<?php echo $row['hpassword']; ?>" class="form-control mb-3">

                            <label class="font-weight-bold">Phone Number</label>
                            <input type="text" name="hphone" value="<?php echo $row['hphone']; ?>" class="form-control mb-3">

                            <label class="font-weight-bold">City</label>
                            <input type="text" name="hcity" value="<?php echo $row['hcity']; ?>" class="form-control mb-3">

                            <input type="submit" name="update" class="text-dark container btn btn-warning mt-4" value="Update">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<?php require 'footer.php'; ?>

</html>
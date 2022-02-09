<?php
require 'file/connection.php';
session_start();
if (!isset($_SESSION['uid'])) {
    header('location:login.php');
} else {
    if (isset($_SESSION['uid'])) {
        $id = $_SESSION['uid'];
        $sql = "SELECT * FROM user WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
    }
}
?>

<!DOCTYPE html>
<html>
<?php $title = "BloodLink | Receiver Profile"; ?>
<?php require 'head.php'; ?>
<?php require 'header.php'; ?>

<body>
    <?php require 'message.php'; ?>

    <section class="container mt-5 pt-2" style="height: 852px;">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                <div class="card card_hp bg-danger text-light mt-5">
                    <div class="mt-4 d-flex justify-content-center">
                        <img src="images/icons/user.png" alt="profile" width="60" height="60">
                    </div>
                    <div class="card-body">
                        <form action="file/updateprofile.php" method="post">
                            <label class="font-weight-bold">Name</label>
                            <input type="text" name="uname" value="<?php echo $row['uname']; ?>" class="form-control mb-3">

                            <label class="font-weight-bold">Email</label>
                            <input type="email" name="uemail" value="<?php echo $row['uemail']; ?>" class="form-control mb-3">

                            <label class="font-weight-bold">Password</label>
                            <input type="text" name="upassword" value="<?php echo $row['upassword']; ?>" class="form-control mb-3">

                            <label class="font-weight-bold">Phone Number</label>
                            <input type="text" name="uphone" value="<?php echo $row['uphone']; ?>" class="form-control mb-3">

                            <label class="font-weight-bold">City</label>
                            <input type="text" name="ucity" value="<?php echo $row['ucity']; ?>" class="form-control mb-3">

                            <label class="font-weight-bold">Blood Group</label>
                            <input type="text" readonly class="form-control-plaintext bg-light rounded ps-3" id="staticEmail" name="bg" value="<?php echo $row['ubg']; ?>" class="form-control mb-3">
                            <input type="submit" name="update" class="btn btn-block btn-warning mt-4 container" value="Update">
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
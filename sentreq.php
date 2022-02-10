<?php
require 'file/connection.php';
session_start();
if (!isset($_SESSION['uid'])) {
    header('location:login.php');
} else {
    $uid = $_SESSION['uid'];
    $sql = "select bloodrequest.*, hospital.* from bloodrequest, hospital where uid='$uid' && bloodrequest.hid=hospital.id";
    $result = mysqli_query($conn, $sql);
?>

    <!DOCTYPE html>
    <html>
    <?php $title = "BloodBank | Sent Requests"; ?>
    <?php require 'head.php'; ?>
    <?php require 'header.php'; ?>


    <body>
        <?php require 'message.php'; ?>
        <section class="container pt-5 pb-5">
            <h3 class="text-center py-3">Sent Requests</h3>
            <div class="table-responsive" style="height:714px">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>City</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>B.Group</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <div>
                        <?php
                        if ($result) {
                            $row = mysqli_num_rows($result);
                            if ($row) {
                            } else echo '<b style="text-align:center;color:white;background-color:#e84545;padding:7px;">You have not requested yet. </b>';
                        }
                        ?>
                    </div>
                    <?php while ($row = mysqli_fetch_array($result)) { ?>
                        <tbody>
                            <tr>
                                <td><?php echo ++$counter; ?></td>
                                <td><?php echo $row['hname']; ?></td>
                                <td><?php echo $row['hemail']; ?></td>
                                <td><?php echo $row['hcity']; ?></td>
                                <td><?php echo $row['hphone']; ?></td>
                                <td><?php echo $row['bg']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td><?php if ($row['status'] == 'Accepted') { ?>
                                    <?php } else { ?>
                                        
                                        <a href="file/cancel.php?reqid=<?php echo $row['reqid']; ?>">
                                            <input type="submit" name="request" class="btn btn-info" value="Cancle">
                                        </a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                </table>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
    <?php require 'footer.php'; ?>

    </html>
<?php } ?>
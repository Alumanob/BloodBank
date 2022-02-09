<?php
require 'file/connection.php';
session_start();
if (!isset($_SESSION['hid'])) {
    header('location:login.php');
} else {
    $hid = $_SESSION['hid'];
    $sql = "select bloodrequest.*, user.* from bloodrequest, user where hid='$hid' && bloodrequest.uid=user.id";
    $result = mysqli_query($conn, $sql);
?>
    <!DOCTYPE html>
    <html>
    <?php $title = "BloodBank | Blood Requests"; ?>
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
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>

                    <div>
                        <?php
                        if ($result) {
                            $row = mysqli_num_rows($result);
                            if ($row) { //echo "<b> Total ".$row." </b>";
                            } else echo '<b style="color:white;background-color:red;padding:7px;">No one has requested yet. </b>';
                        }
                        ?>
                    </div>

                    <?php while ($row = mysqli_fetch_array($result)) { ?>

                        <tbody>
                            <tr>
                                <td><?php echo ++$counter; ?></td>
                                <td><?php echo $row['uname']; ?></td>
                                <td><?php echo $row['uemail']; ?></td>
                                <td><?php echo $row['ucity']; ?></td>
                                <td><?php echo $row['uphone']; ?></td>
                                <td><?php echo $row['bg']; ?></td>
                                <td><?php echo 'You have ' . $row['status']; ?></td>
                                <td><?php if ($row['status'] == 'Accepted') { ?> <a href=""><input type="submit" class="btn btn-success disabled" value="Accepted"> </a>
                                    <?php } else { ?>
                                        <a href="file/accept.php?reqid=<?php echo $row['reqid']; ?>">
                                            <input type="submit" class="btn btn-success" value="Accept">
                                        </a>
                                    <?php } ?>
                                </td>
                                <td><?php if ($row['status'] == 'Rejected') { ?> <a href=""><input type="submit" class="btn btn-danger disabled" value="Rejected"></a> <?php } else { ?>
                                        <a href="file/reject.php?reqid=<?php echo $row['reqid']; ?>">
                                            <input type="submit" class="btn btn-danger" value="Reject">
                                        </a>
                                    <?php } ?>
                                </td>

                            </tr>
                        </tbody>
                    <?php } ?>

                </table>

        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>

    <?php require 'footer.php'; ?>

    </html>
<?php } ?>
<?php
require 'file/connection.php';
session_start();
if (!isset($_SESSION['hid'])) {
    header('location:login.php');
} else {
?>
    <!DOCTYPE html>
    <html>
    <?php $title = "BloodBank | Add blood samples"; ?>
    <?php require 'head.php'; ?>
    <?php require 'header.php'; ?>

    <body>
        <section class="container pt-5 pb-5">
                <div class="row col-lg-8 col-md-8 col-sm-12 m-5">
                    <form action="file/infoAdd.php" method="post">
                        <label class="font-weight-bolder">Select Blood Group:</label>
                        <select class="form-control" name="bg" required>
                            <option selected></option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select><br>
                        <input type="submit" name="add" class="btn btn-info" value="Add">
                    </form>
                </div>

            <?php if (isset($_SESSION['hid'])) {
                $hid = $_SESSION['hid'];
                $sql = "select * from bloodinfo where hid='$hid'";
                $result = mysqli_query($conn, $sql);
            }
            ?>

            <h3 class="text-center">Blood Bank</h3>
            <div class="table-responsive" style="height: 542px;" >
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Blood Group</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <div>
                        <?php
                        if ($result) {
                            $row = mysqli_num_rows($result);
                            if ($row) { 
                            } else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">Nothing to show.</b>';
                        }
                        ?>
                    </div>
                    <?php $counter=0; ?>
                    <?php while ($row = mysqli_fetch_array($result)) { ?>
                        <tbody>
                            <tr>
                                <td><?php echo ++$counter; ?></td>
                                <td><?php echo $row['bg']; ?></td>
                                <td>
                                    <a href="file/delete.php?bid=<?php echo $row['bid']; ?>">
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>

        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
    <?php require 'footer.php' ?>

    </html>
<?php } ?>
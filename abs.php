<?php 
session_start();
require 'file/connection.php';
if(isset($_GET['search'])){
    $searchKey = $_GET['search'];
    $sql = "select bloodinfo.*, hospital.* from bloodinfo, hospital where bloodinfo.hid=hospital.id && bg LIKE '%$searchKey%'";
}else{
    $sql = "select bloodinfo.*, hospital.* from bloodinfo, hospital where bloodinfo.hid=hospital.id";
}
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php $title="BloodBank | Available Blood Samples"; ?>
<?php require 'head.php'; ?>
<?php require 'header.php'; ?>
<body>
<?php require 'message.php'; ?>
    <main>
        <section class="container pt-5 pb-5">
                <div class="row col-lg-8 col-md-8 col-sm-12 m-5">
                    <form style="margin-top:-20px; ">
                        <label class="font-weight-bolder">Select Blood Group:</label>
                        <select name="search" class="form-control">
                            <option><?php echo @$_GET['search']; ?></option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select><br>
                        <a href="abs.php" class="btn btn-info mr-4"> Reset</a>
                        <input type="submit" name="submit" class="btn btn-info" value="search">
                    </form>
                </div>
                
            <h3 class="text-center">Available Blood Samples in Hospitals</h3>
            <div class="table-responsive" style="height:546px">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>City</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>B.Group</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <div>
                        <?php
                        if ($result) {
                            $row =mysqli_num_rows( $result);
                            if ($row) { //echo "<b> Total ".$row." </b>";
                        }else echo '<b style="color:black; font-size: 25px; text-align:center;padding:10px;">Nothing to show.</b>';
                    }
                    ?>
                    </div>

                    <?php while($row = mysqli_fetch_array($result)) { ?>

                    <tbody>
                        <tr>
                            <td><?php echo ++$counter;?></td>
                            <td><?php echo $row['hname'];?></td>
                            <td><?php echo ($row['hcity']); ?></td>
                            <td><?php echo ($row['hemail']); ?></td>
                            <td><?php echo ($row['hphone']); ?></td>
                            <td><?php echo ($row['bg']); ?></td>

                            <?php $bid= $row['bid'];?>
                            <?php $hid= $row['hid'];?>
                            <?php $bg= $row['bg'];?>
                            <form action="file/request.php" method="post">
                                <input type="hidden" name="bid" value="<?php echo $bid; ?>">
                                <input type="hidden" name="hid" value="<?php echo $hid; ?>">
                                <input type="hidden" name="bg" value="<?php echo $bg; ?>">

                            <?php if (isset($_SESSION['hid'])) { ?>
                            <td><a href="javascript:void(0);" class="btn btn-info hospital">Request Sample</a></td>
                            <?php } else {(isset($_SESSION['uid']))  ?>
                            <td><input type="submit" name="request" class="btn btn-info" value="Request Sample"></td>
                        <?php } ?>
                        </form>
                        </tr>
                    </tbody>
                <?php } ?>
                </table>

        </section>
    </main>
    
    <!-- Bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

<?php require 'footer.php' ?>

<script type="text/javascript">
    $('.hospital').on('click', function(){
        alert("Hospital user can't request for blood.");
    });
</script>


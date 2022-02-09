<?php
session_start();
if (isset($_SESSION['hid'])) {
    header("location:reqblood.php");
} elseif (isset($_SESSION['uid'])) {
    header("location:sentreq.php");
} else {
?>

    <!DOCTYPE html>
    <html>
    <?php $title = "BloodBank | Register"; ?>
    <?php require 'head.php'; ?>
    <?php include 'header.php'; ?>

    <body>
        <section>
            <div class="section">
                <div class="container pt-3">
                    <div class="row full-height justify-content-center" style="height: 884px">
                        <div class="col-12 text-center align-self-center py-5">
                            <div class="section pb-5 pt-5 pt-sm-2 text-center">
                                <h6 class="mb-0 pb-3 d-flex justify-content-between justify-content-md-evenly justify-content-lg-evenly">
                                    <span>Hospital</span>
                                    <span>User</span>
                                </h6>
                                <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                                <label for="reg-log"></label>
                                <div class="card-3d-wrap mx-auto">
                                    <div class="card-3d-wrapper">
                                        <div class="card-front">
                                            <div class="center-wrap">
                                                <form action="file/hospitalReg.php" method="post" enctype="multipart/form-data">
                                                    <div class="section text-center">
                                                        <h4 class="mb-4 pb-3 text-white">Hospital Registration</h4>
                                                        <div>
                                                            <input type="email" name="hemail" class="form-style" placeholder="Email" id="logemail" autocomplete="on" required>

                                                        </div>
                                                        <div class="mt-2">
                                                            <input type="text" name="hname" class="form-style" placeholder="Name" id="logname" autocomplete="on" required>

                                                        </div>
                                                        <div class="mt-2">
                                                            <input type="text" name="hcity" class="form-style" placeholder="City" id="logcity" autocomplete="on" required>

                                                        </div>
                                                        <div class="mt-2">
                                                            <input type="tel" name="hphone" class="form-style" placeholder="Phone Number" id="logphone" autocomplete="on" required>

                                                        </div>
                                                        <div class="mt-2">
                                                            <input type="password" name="hpass" class="form-style" placeholder="Password" id="logpass" autocomplete="on" required>

                                                        </div>
                                                        <div class="d-grid gap-2 col-6 mx-auto mt-4">
                                                            <button class="btn btn-warning" name="hregister" type="submit">Submit</button>
                                                        </div>
                                                        <p class="mb-0 mt-4 text-center"><a href="login.php" class="link">Already
                                                                have account? LOGIN</a></p>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card-back">
                                            <div class="center-wrap">
                                                <form action="file/userReg.php" method="post" enctype="multipart/form-data">
                                                    <div class="section text-center">
                                                        <h4 class="mb-4 pb-3 text-white">User Registration</h4>
                                                        <div class="mt-2">
                                                            <input type="email" name="uemail" class="form-style" placeholder="Email" id="logemail" autocomplete="on" required>

                                                        </div>
                                                        <div class="mt-2">
                                                            <input type="text" name="uname" class="form-style" placeholder="Name" id="logname" autocomplete="on" required>

                                                        </div>
                                                        <div class="mt-2">
                                                            <input type="text" name="ucity" class="form-style" placeholder="City" id="logcity" autocomplete="on" required>

                                                        </div>
                                                        <div class="mt-2">
                                                            <select name="ubg" class="form-style" required>
                                                                <option disabled="" selected="">Blood Group</option>
                                                                <option value="A+">A+</option>
                                                                <option value="A-">A-</option>
                                                                <option value="B+">B+</option>
                                                                <option value="B-">B-</option>
                                                                <option value="AB+">AB+</option>
                                                                <option value="AB-">AB-</option>
                                                                <option value="O+">O+</option>
                                                                <option value="O-">O-</option>
                                                            </select>
                                                        </div>
                                                        <div class="mt-2">
                                                            <input type="tel" name="uphone" class="form-style" placeholder="Phone Number" id="logphone" autocomplete="on" required>

                                                        </div>
                                                        <div class="mt-2">
                                                            <input type="password" name="upass" class="form-style" placeholder="Password" id="logpass" autocomplete="on" required>

                                                        </div>
                                                        <div class="d-grid gap-2 col-6 mx-auto mt-4">
                                                            <button class="btn btn-warning" name="uregister" type="submit">Submit</button>
                                                        </div>
                                                        <p class="mb-0 mt-4 text-center"><a href="login.php" class="link">Already
                                                                have account? LOGIN</a></p>
                                                    </div>
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
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    </body>

    <?php require 'footer.php' ?>

    </html>
<?php } ?>
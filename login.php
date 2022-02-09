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
    <?php $title = "BloodBank | Login"; ?>
    <?php require 'head.php'; ?>
    <?php require 'header.php'; ?>

    <body>
        <?php require 'message.php'; ?>
        <main>
            <section class="container">
                <div class="row justify-content-center" style="height: 884px">
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
                                            <form action="file/hospitalLogin.php" method="post">
                                                <div class="text-center" id="hospital">
                                                    <h4 class="mb-4 pb-3 text-white">Hospital Login</h4>
                                                    <div class="form-group">
                                                        <input type="email" name="hemail" class="form-style" placeholder="Your Email" id="hemail" autocomplete="on" required>

                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="password" name="hpass" class="form-style" placeholder="Your Password" id="hpass" autocomplete="on" required>

                                                    </div>
                                                    <div class="d-grid gap-2 col-6 mx-auto mt-4">
                                                        <button class="btn btn-warning" name="hlogin" value="Login" type="submit">Submit</button>
                                                    </div>
                                                    <p class="mb-0 mt-4 text-center"><a href="registration.php" class="link">Don't
                                                            have account? REGISTER </a></p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-back">
                                        <div class="center-wrap" id="user">
                                            <form action="file/userLogin.php" method="post">
                                                <div class="text-center">
                                                    <h4 class="mb-4 pb-3 text-white">User Login</h4>
                                                    <div class="form-group mt-2">
                                                        <input type="email" name="uemail" class="form-style" placeholder="Your Email" id="umail" autocomplete="on" required>

                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="password" name="upass" class="form-style" placeholder="Your Password" id="upass" autocomplete="on" required>

                                                    </div>
                                                    <div class="d-grid gap-2 col-6 mx-auto mt-4">
                                                        <button class="btn btn-warning" name="ulogin" value="Login" type="submit">Submit</button>
                                                    </div>
                                                    <p class="mb-0 mt-4 text-center"><a href="registration.php" class="link">Don't
                                                            have account? REGISTER </a></p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php require 'footer.php' ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

    </html>
<?php } ?>
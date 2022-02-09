<?php 
session_start();
require 'file/connection.php';
?>

<!DOCTYPE html>
<html>

<?php $title="BloodBank | About Us"; ?>
<?php require 'head.php'; ?>

<body>
  <?php require 'header.php'; ?>

    <main>

        <section>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-none d-sm-none d-md-block d-lg-block d-xl-block">
                        <img src="images/bg/header.svg" class="img-fluid" alt="...">
                    </div>
                    <div class="d-block d-sm-block d-md-none d-lg-none d-xl-none">
                        <img src="images/bg/preloader-bg.webp" class="img-fluid" alt="...">
                    </div>
                    <div class="carousel-caption d-md-block p-1 p-lg-5">
                        <h1>About Us</h1>
                    </div>
                </div>
        </section>

        <section class="mt-5">
            <div class="text-center mb-5">
                <h1>Objective</h1>
                <p>I created This website for a easier blood bank management system between a user and a Hospital.</p>
                <p>In this website an user can know the available blood samples.</p>
                <p>The user request for blood from anywhere.</p>
                <p>Hospilat can donate blood.</p>
            </div>
        </section>

        <h1 class="text-center mt-5">For any query contact</h1>
        <section class="d-flex justify-content-center pb-5 mb-5">
            <div class="container d-flex flex-wrap justify-content-center mt-2">
                <div class="card d-flex align-items-center border-0 " style="width: 18rem;">
                    <img src="images/bg/alu.jpg" class="card-img img-fluid" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">MD Alamin Islam</h5>
                        <p>ID: 2044851053 </p>
                        <p>2044851053@uits.edu.bd</p>
                        <p>+8801628654568</p>
                    </div>
                </div>
            </div>
        </section>
    </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

  <?php require 'footer.php'; ?>

</body>
</html>

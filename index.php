<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<?php $title="BloodBank | home page"; ?>
<?php require 'head.php'; ?>

<head>
    <?php require 'header.php'; ?>
</head>

<body>
    
    <main>

        <section class="pt-5">
            <div class="carousel-inner pt-2">
                <div class="carousel-item active">
                    <div class="d-none d-sm-none d-md-block d-lg-block d-xl-block">
                        <img src="images/bg/header.svg" class="img-fluid" alt="...">
                    </div>
                    <div class="d-block d-sm-block d-md-none d-lg-none d-xl-none">
                        <img src="images/bg/preloader-bg.webp" class="img-fluid" alt="...">
                    </div>
                    <div class="carousel-caption d-md-block p-1 p-lg-5">
                        <h1>Save Life Connect</h1>
                        <p>Connecting blood donors with recipients.</p>
                        <button type="button" class="btn btn-outline-light btn-lg px-4 text-dark fw-bold">Book
                            Now</button>
                    </div>
                </div>
        </section>



        <section class="mt-5">
            <div class="text-center">
                <h1>We Saves Lives</h1>
                <p>Find blood donors near your location and make a blood request in less than 5 minutes.</p>
            </div>
        </section>

        <section class="d-flex justify-content-center mt-5">
            <div class="container d-flex flex-wrap justify-content-center mt-5">
                <div class="card d-flex align-items-center border-0 " style="width: 18rem;">
                    <img src="images/icons/features/blood.svg" class="card-img img-fluid w-25" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Find Blood</h5>
                        <p>Find blood donors near your location and request the needed blood type.</p>
                    </div>
                </div>
                <div class="card d-flex align-items-center border-0" style="width: 18rem;">
                    <img src="images/icons/features/free.svg" class="card-img img-fluid w-25" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Find Blood</h5>
                        <p>Find blood donors near your location and request the needed blood type.</p>
                    </div>
                </div>
                <div class="card d-flex align-items-center border-0" style="width: 18rem;">
                    <img src="images/icons/features/notifications.svg" class="card-img img-fluid w-25" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Find Blood</h5>
                        <p>Find blood donors near your location and request the needed blood type.</p>
                    </div>
                </div>
            </div>
        </section>



        <section>

            <div class="text-center mt-5">
                <h1>Join the Cause</h1>
                <p>Join our cause and help us save more lives. Everyone should have the right to get a blood
                    transfusion.</p>
            </div>

            <section>
                <div class="container">
                    <div class="row d-flex flex-column flex-lg-row flex-md-row flex-column-reverse">
                        <div class="col d-flex flex-column justify-content-center">
                            <h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                                Find Donors in your Area
                            </h1>
                            <p>Get connected in a matter of minutes at zero cost. Our App ships with a smart system that
                                finds the closest blood donors. Our automated blood donation system works efficiently
                                whenever someone needs a blood transfusion.</p>
                        </div>
                        <div class="col">
                            <img class="img-fluid" style="width: 500px;" src="images/logo/localisation.svg" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row d-flex flex-column flex-lg-row flex-md-row">
                        <div class="col">
                            <img class="img-fluid" style="width: 500px;" src="images/logo/connect.svg" alt="">
                        </div>
                        <div class="col d-flex flex-column justify-content-center">
                            <h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-clock">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                Answer to Emergencies
                            </h1>
                            <p>As soon as a new blood request is raised, it is routed among our local volunteer blood
                                donors. We know time matters! So we keep you updated with real-time notifications sent
                                directly to you via SMS (text message) or the installed mobile app</p>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row d-flex flex-column flex-lg-row flex-md-row flex-column-reverse">
                        <div class="col d-flex flex-column justify-content-center">
                            <h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-smartphone">
                                    <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                                    <line x1="12" y1="18" x2="12" y2="18"></line>
                                </svg>
                                Made for Everyone
                            </h1>
                            <p>All you need to do is send a text message to 8655, "blood need (blood-group) in
                                (your-city)", in any language you want. Our system is smart enough to understand
                                anything you write and helps you find a donor within minutes if not seconds.</p>
                        </div>
                        <div class="col">
                            <img class="img-fluid" style="width: 500px;" src="images/logo/emergency.svg" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row d-flex flex-column flex-lg-row flex-md-row">
                        <div class="col">
                            <img class="img-fluid" style="width: 500px;" src="images/logo/savelife.svg" alt="">
                        </div>
                        <div class="col d-flex flex-column justify-content-center">
                            <h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-award">
                                    <circle cx="12" cy="8" r="7"></circle>
                                    <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                                </svg>
                                You are someone's Hero
                            </h1>
                            <p>In as little as few minutes, you can become someone's unnamed, unknown, but all-important
                                Hero. Saving a life is a noble work that starts very simply and easily. Donate Blood or
                                donate Money, every form of contribution you make is important, valued and essential in
                                our shared mission to save lives.</p>
                        </div>
                    </div>
                </div>
            </section>
        </section>



        <section>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-none d-sm-none d-md-block d-lg-block d-xl-block">
                        <img src="images/bg/footer.png" class="img-fluid" alt="...">
                    </div>
                    <div class="d-block d-sm-block d-md-none d-lg-none d-xl-none">
                        <img src="images/bg/preloader-bg.webp" class="img-fluid" alt="...">
                    </div>
                    <div class="carousel-caption p-1 mt-md-5 mb-lg-2">
                        <h1>Start Saving Lives</h1>
                        <p>Become a donor or request for blood and help save lives.</p>
                        <button type="button"
                            class="btn btn-outline-light btn-lg px-4 text-dark fw-bold rounded-pill">Register</button>
                    </div>
                </div>
        </section>

    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

<?php require 'footer.php';?>

</html>
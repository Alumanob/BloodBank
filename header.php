<nav class="navbar navbar-expand-lg navbar-dark nav_bg fixed-top">
    <div class="container fw-bolder">
        <a class="navbar-brand" href="index.php">Blood Bank</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <?php if (isset($_SESSION['hid'])) { ?>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="abs.php">Available Blood</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addblood.php">Add Blood</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reqblood.php">Blood Request</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="hprofile.php?id=<?php echo $_SESSION['hid']; ?>" class="nav-link"><span><?php echo $_SESSION['hname']; ?></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            
            <?php } elseif (isset($_SESSION['uid'])) { ?>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="abs.php">Available Blood</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sentreq.php">Find Blood</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="uprofile.php?id=<?php echo $_SESSION['uid']; ?>" class="nav-link"><span><?php echo $_SESSION['uname']; ?></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>

            <?php }  else { ?>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="abs.php">Available Blood</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>

            <?php } ?>
        </div>
    </div>
</nav>
<!DOCTYPE html>

<html>
<head>
  <?php include("_partial/html_head.php"); ?>
</head>

<body>
    <?php session_start(); ?>
    <?php include("_partial/svg.php"); ?>

    <div class="preloader">
        <div class="loader"></div>
    </div>

    <header id="header">
        <?php include("_partial/menu_one.php"); ?>
        <?php include("_partial/menu_two.php"); ?>
    </header>

    <div class="container-fluid padding-side padding-small">
        <div class="row">
            <div class="col-lg-8">
                <h4 class="fw-normal">Sign up to our newsletter to receive latest news.</h4>
                <form action="proses_subscribe.php" method="POST">
                    <div class="row mb-3">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input name='nama' type="text" class="form-control" id="inputName" placeholder ='Your name'>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputMessage" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name='email' type="email" class="form-control" id="inputMessage" placeholder ='example@email.com'>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="subscribe">Subscribe Now</button>
                </form>
            </div>
            <div class="col-lg-4">
                <h4 class="fw-normal">Our Info</h4>
                <ul class="nav flex-column">
                    <li class="location text-capitalize d-flex align-items-center">
                        <svg class="color me-1" width="20" height="20">
                            <use xlink:href="#location"></use>
                        </svg>
                        <span>Marshmallow Mellow & resort</span>
                    </li>
                    <li class="text-capitalize ms-4">
                        <span>123 Serenity Avenue</span>
                    </li>
                    <li class="text-capitalize ms-4">
                        <span>state Road 12 Canada,</span>
                    </li>
                    <li class="text-capitalize ms-4">
                        <span>Toronto land</span>
                    </li>
                    <li class="phone text-capitalize d-flex align-items-center mt-2">
                        <svg class="color me-1" width="20" height="20">
                            <use xlink:href="#phone"></use>
                        </svg>
                        <span>+62 8888 1111, +127 1000 2888</span>
                    </li>
                    <li class="email text-capitalize d-flex align-items-center mt-2">
                        <svg class="color me-1" width="20" height="20">
                            <use xlink:href="#email"></use>
                        </svg>
                        <span>Marshmallowmellow@gmail.com</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php include("_partial/html_footer.php"); ?>
    <?php include("_partial/html_script.php"); ?>
</body>
</html>
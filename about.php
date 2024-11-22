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
    
    <div class="container-fluid padding-side">
        <!-- INI UNTUK BAGIAN BAGI JADI 2 COLUMN -->
        <div class="row">
            <div class="col-12">
                <h2>About us</h2>
            </div>
            <div class="col-md-8 col-lg-8">
                <div class="border p-1">testing column 1 </div> 
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="">
                    <h4 class="display-6 fw-normal">Our Info</h4>
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
    </div>
    
    <?php include("_partial/html_footer.php"); ?>
    <?php include("_partial/html_script.php"); ?>
</body>
</html>
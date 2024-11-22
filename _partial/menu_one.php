<nav class="header-top bg-secondary py-1">
    <div class="container-fluid padding-side">
        <div class="d-flex flex-wrap justify-content-between align-items-center">
            <ul class="info d-flex flex-wrap list-unstyled m-0">
                <li class="location text-capitalize d-flex align-items-center me-4" style="font-size: 14px;">
                    <svg class="color me-1" width="15" height="15">
                    <use xlink:href="#location"></use>
                    </svg>State Road 12 Canada,Toronto
                </li>
                <li class="phone d-flex align-items-center me-4" style="font-size: 14px;">
                    <svg class="color me-1" width="15" height="15">
                    <use xlink:href="#phone"></use>
                    </svg>+62 8888 1111
                </li>
                <li class="time d-flex align-items-center me-4" style="font-size: 14px;">
                    <svg class="color me-1" width="15" height="15">
                        <use xlink:href="#email"></use>
                    </svg>Marshmallowmellow@gmail.com
                </li>
            </ul>
            <ul class="social-links d-flex flex-wrap list-unstyled m-0 ">
                
                <?php if(!empty($_SESSION['userid'])): ?>
                    <li class="d-flex align-items-center me-4" style="font-size: 14px;">
                        <?= $_SESSION['username']; ?>
                    </li>
                    <li class="d-flex align-items-center me-4" style="font-size: 14px;">
                        <a href="process_logout.php">Logout</a> 
                    </li>
                <?php else: ?>
                    <li class="d-flex align-items-center me-4" style="font-size: 14px;">
                        <a href="login.php">
                            <svg class="color me-1" width="16" height="16">
                                <use xlink:href="#login"></use>
                            </svg>Login
                        </a>
                    </li>
                <?php endif; ?>
                <!-- <li class="social">
                    <a href="#">
                    <svg class="social" width="16" height="16">
                        <use xlink:href="#facebook"></use>
                    </svg>
                    </a>
                </li> -->
                <!-- <li class="social ms-4">
                    <a href="#">
                    <svg class="social" width="16" height="16">
                        <use xlink:href="#twitter"></use>
                    </svg>
                    </a>
                </li>
                <li class="social ms-4">
                    <a href="#">
                    <svg class="social" width="16" height="16">
                        <use xlink:href="#linkedin"></use>
                    </svg>
                    </a>
                </li>
                <li class="social ms-4">
                    <a href="#">
                    <svg class="social" width="16" height="16">
                        <use xlink:href="#instagram"></use>
                    </svg>
                    </a>
                </li>
                <li class="social ms-4">
                    <a href="#">
                    <svg class="social" width="16" height="16">
                        <use xlink:href="#youtube"></use>
                    </svg>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>
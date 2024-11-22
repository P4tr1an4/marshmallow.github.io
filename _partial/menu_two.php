<nav id="primary-header" class="navbar navbar-expand-lg py-4">
    <div class="container-fluid padding-side">
        <div class="d-flex justify-content-between align-items-center w-100">
            <a class="navbar-brand" href="index.php">
                <img src="images/main-logo.png" class="logo img-fluid">
            </a>
            <button class="navbar-toggler border-0 d-flex d-lg-none order-3 p-2 shadow-none" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false">
                <svg class="navbar-icon" width="60" height="60">
                    <use xlink:href="#navbar-icon"></use>
                </svg>
            </button>

            <div class="header-bottom offcanvas offcanvas-end " id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
                <div class="offcanvas-header px-4 pb-0">
                    <button type="button" class="btn-close btn-close-black mt-2" data-bs-dismiss="offcanvas"
                        aria-label="Close" data-bs-target="#bdNavbar"></button>
                </div>
                <div class="offcanvas-body align-items-center justify-content-center">
                    <!-- <div class="search d-block d-lg-none m-5">
                        <form class=" position-relative">
                            <input type="text" class="form-control bg-secondary border-0 rounded-5 px-4 py-2"
                                placeholder="Search...">
                            <a href="#" class="position-absolute top-50 end-0 translate-middle-y p-1 me-3">
                                <svg class="" width="20" height="20">
                                    <use xlink:href="#search"></use>
                                </svg>
                            </a>
                        </form>
                    </div> -->
                    <ul class="navbar-nav align-items-center mb-2 mb-lg-0 align-items-right">
                        <li class="nav-item px-3">
                            <a class="nav-link active p-0" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link p-0" href="rooms.php">Rooms</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link p-0" href="services.php">Services</a>
                        </li>
                        <?php if(!empty($_SESSION['userid'])): ?>
                            <li class="nav-item px-3">
                                <a class="nav-link p-0" href="users_list.php">Users</a>
                            </li>
                        <?php endif; ?>
                        <!-- <li class="nav-item px-3">
                            <a class="nav-link p-0" href="blog.php">Blog</a>
                        </li> -->
                        <li class="nav-item px-3">
                            <a class="nav-link p-0" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link p-0" href="about.php">About</a>
                        </li>
                        <!-- <li class="nav-item px-3 dropdown">
                            <a class="nav-link p-0 dropdown-toggle text-center " data-bs-toggle="dropdown" href="#" role="button"
                            aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu dropdown-menu-end animate slide mt-3 border-0 shadow">
                            <li><a href="about.php" class="dropdown-item ">About <span class="badge bg-primary">Pro</span></a>
                            </li>
                            <li><a href="room.html" class="dropdown-item ">Room <span class="badge bg-primary">Pro</span></a>
                            </li>
                            <li><a href="room-details.html" class="dropdown-item">Room-Details
                                <span class="badge bg-primary">Pro</span></a></li>
                            <li><a href="blog.html" class="dropdown-item ">Blog <span class="badge bg-primary">Pro</span></a>
                            </li>
                            <li><a href="blog-single.html" class="dropdown-item ">Blog-Single <span
                                    class="badge bg-primary">Pro</span></a></li>
                            <li><a href="services.php" class="dropdown-item ">Services <span
                                    class="badge bg-primary">Pro</span></a></li>
                            <li><a href="service-details.html" class="dropdown-item ">Service-Details
                                <span class="badge bg-primary">Pro</span></a></li>
                            <li><a href="booking.html" class="dropdown-item ">Booking <span
                                    class="badge bg-primary">Pro</span></a></li>
                            <li><a href="gallery.html" class="dropdown-item ">Gallery <span
                                    class="badge bg-primary">Pro</span></a></li>
                            <li><a href="contact.html" class="dropdown-item ">Contact <span
                                    class="badge bg-primary">Pro</span></a></li>
                            <li><a href="team.html" class="dropdown-item ">Team <span class="badge bg-primary">Pro</span></a>
                            </li>
                            <li><a href="review.html" class="dropdown-item ">Reviews <span
                                    class="badge bg-primary">Pro</span></a></li>
                            <li><a href="faq.html" class="dropdown-item ">FAQs <span class="badge bg-primary">Pro</span></a>
                            </li>
                            </ul>
                        </li> -->
                        <!-- <li class="nav-item px-3">
                            <a class="nav-link p-0 fw-bold text-uppercase"
                            href="https://templatesjungle.gumroad.com/l/mellow-hotel-bootstrap-html-website-template"
                            target="_blank">Get Pro</a>
                        </li> -->
                    </ul>
                </div>
            </div>
            <!-- <div class="search d-lg-block d-none">
                <form class=" position-relative">
                    <input type="text" class="form-control bg-secondary border-0 rounded-5 px-4 py-2" placeholder="Search...">
                    <a href="#" class="position-absolute top-50 end-0 translate-middle-y p-1 me-3">
                    <svg class="" width="20" height="20">
                        <use xlink:href="#search"></use>
                    </svg>
                    </a>
                </form>
            </div> -->
        </div>
    </div>
</nav>
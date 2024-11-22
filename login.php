<!DOCTYPE html>

<html>
    <head>
        <?php include("_partial/html_head.php"); ?>
    </head>

    <body>
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
                    <h4 class="fw-normal">Input Username and password to login</h4>
                    <form action="process_login.php" method="POST">
                        <div class="row mb-3">
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input name='username' type="text" class="form-control" id="inputName">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input name='password' type="password" class="form-control" id="inputPassword">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </form>
                </div>
            </div>
        </div>

        <?php include("_partial/html_footer.php"); ?>
        <?php include("_partial/html_script.php"); ?>
    </body>
</html>
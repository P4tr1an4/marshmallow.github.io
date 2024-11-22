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

    <?php
        include("_config/database.php");

        // kalau tidak ada id di query string
        if( !isset($_GET['id']) ){
            header('Location: list_users.php');
        }

        //ambil id dari query string
        $id = $_GET['id'];

        // buat query untuk ambil data dari database
        $sql = "SELECT * FROM users WHERE userid=$id";
        $query = mysqli_query($db, $sql);
        $user = mysqli_fetch_assoc($query);

        // jika data yang di-edit tidak ditemukan
        if( mysqli_num_rows($query) < 1 ){
            die("data tidak ditemukan...");
        }
    ?>

    <div class="container-fluid padding-side padding-small">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="fw-normal">Merubah data user.</h4>
                <form action="process_user_edit.php" method="POST">
                    <input type="hidden" name="id" value="<?= $user['userid']; ?>" />
                    <div class="row mb-3">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input name='nama' type="text" class="form-control" id="inputName" value="<?= $user['name']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input name='password' type="password" class="form-control" id="inputPassword" value="<?= $user['password']; ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <?php include("_partial/html_footer.php"); ?>
    <?php include("_partial/html_script.php"); ?>
</body>
</html>
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
        <nav>
            <a href="user_add.php">[+] Tambah Users</a>
        </nav>

        <br>

        <?php include("_config/database.php"); ?>

        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover table-sm">
            <thead  class="thead-light">
                <tr>
                    <th scope="col">UserID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Password</th>
                    <th scope="col">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM users where isadmin=0";
                    $query = mysqli_query($db, $sql);
                    // $users =  mysqli_fetch_array($query);
                ?>
                <?php while($users = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th scope="row"><?= $users['userid']; ?></td>
                        <td><?= $users['name']; ?></td>
                        <td><?= $users['password']; ?></td>
                        <td>
                            <a href='users_edit.php?id="<?= $users['userid']; ?>"'>Edit</a> |
                            <a href='process_user_delete.php?id="<?=$users['userid']; ?>"'>Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>

    <?php include("_partial/html_footer.php"); ?>
    <?php include("_partial/html_script.php"); ?>
</body>
</html>
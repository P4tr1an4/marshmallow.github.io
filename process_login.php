<?php
include("_config/database.php");

session_start();
// require "init.php";

if(isset($_POST['login'])){
    // Ambil data dari formulir
    $nama = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    // Buat query untuk ambil data dari database
    // Perhatikan penggunaan tanda kutip untuk string dalam query SQL
    $sql = "SELECT userid, name, password FROM users WHERE name='$nama'";

    // Jalankan query
    $query = mysqli_query($db, $sql);
    
    if(mysqli_num_rows($query) < 1){
        die("Data tidak ditemukan...");
    } else {
        // Ambil data user
        $user = mysqli_fetch_assoc($query);

        // Verifikasi password (gunakan password_verify jika kamu menggunakan hashing)
        if($password == $user['password']) {
            // Set session
            $_SESSION['userid'] = $user['userid'];
            $_SESSION['username'] = $user['name'];

            // Redirect ke halaman setelah login sukses
            header("Location: index.php");
            exit;
        } else {
            die("Password salah...");
        }
    }
}
?>

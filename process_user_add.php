<?php

include("_config/database.php");

// cek apakah tombol daftar sudah diklik atau blum?

if(isset($_POST['daftar'])){
    // ambil data dari formulir
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    // buat query
    $sql = "INSERT INTO `users`( `name`, `password`) VALUES ('$nama', '$password')";

    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: users_list.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: users_list.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>

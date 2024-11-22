<?php

include("_config/database.php");

// cek apakah tombol daftar sudah diklik atau blum?

if(isset($_POST['subscribe'])){
    // ambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    // buat query
    $sql = "INSERT INTO subscribe (name, email) VALUE ('$nama', '$email')";

    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>

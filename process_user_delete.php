<?php

include("_config/database.php");

if( isset($_GET['id']) ){
    // ambil id dari query string
    $id = $_GET['id'];
    // buat query hapus
    $sql = "DELETE FROM users WHERE userid=$id";
    $query = mysqli_query($db, $sql);
    // apakah query hapus berhasil?
    if( $query ){
        header('Location: users_list.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>

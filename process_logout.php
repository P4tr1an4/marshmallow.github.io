<?php
    // Mulai session
    session_start();

    // Hapus semua data session
    session_unset();  // Menghapus semua variabel session

    // Hancurkan session
    session_destroy();  // Menghancurkan session

    // Menghapus cookie session (opsional, jika Anda ingin logout secara menyeluruh)
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
    }

    // Redirect ke halaman login atau halaman lain setelah logout
    header("Location: index.php");  // Ubah dengan halaman yang sesuai
    exit;
?>

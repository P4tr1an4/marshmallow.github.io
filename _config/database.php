<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "marshmallow";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>

<!-- <php
define(constant_name: 'DB_SERVER', value: 'localhost');
define(constant_name: 'DB_USERNAME', value: 'root');
define(constant_name: 'DB_PASSWORD', value: '');
define(constant_name: 'DB_NAME', value: 'student'); $conn = mysqli_connect
(hostname: DB_SERVER, username: DB_USERNAME, password: DB_PASSWORD, database: DB_NAME);
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?> -->


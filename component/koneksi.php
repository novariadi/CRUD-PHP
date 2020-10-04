<?php

$localhost = 'localhost';
$user = 'root';
$password = '';
$db = 'logistik';

$koneksi = mysqli_connect($localhost, $user, $password, $db);

if (!$koneksi) {
    die('Koneksi gagal:' . mysqli_connect_error());
} else {
    echo 'Koneksi berhasil';
}

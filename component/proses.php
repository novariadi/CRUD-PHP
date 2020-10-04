<?php

require_once('koneksi.php');

// proses input data barang
if (isset($_POST['input_barang'])) {
    $id = uniqid();
    $kode = $_POST['kode_barang'];
    $nama = $_POST['nama_barang'];
    $produsen = $_POST['produsen'];
    $harga = $_POST['harga'];

    $query_input = mysqli_query($koneksi, "INSERT INTO barang VALUES(md5('$id'),'$kode','$nama','$produsen','$harga')");

    // die($query_input);

    if ($query_input) {
        echo '<script>alert("Data Berhasil diinput") 
            window.location.href="../index.php";
        </script>';
    } else {
        echo 'ERROR';
    }
}

?>



<?php
// Proses Hapus data barang
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query_delete = mysqli_query($koneksi, "DELETE FROM barang WHERE id_barang='$id'") or die($query_delete);

    if ($query_delete) {
        echo '<script>alert("Data Berhasil dihapus") 
        window.location.href="../index.php";
    </script>';
    } else {
        echo 'ERROR';
    }
}

?>



<?php

// proses update data barang

if (isset($_POST['update_barang'])) {
    $id = $_POST['id_barang'];
    $kode = $_POST['kode_barang'];
    $nama = $_POST['nama_barang'];
    $produsen = $_POST['produsen'];
    $harga = $_POST['harga'];

    $query_update = mysqli_query($koneksi, "UPDATE barang SET kode_barang='$kode', nama_barang='$nama', produsen='$produsen', harga='$harga' WHERE id_barang='$id' ") or die($query_update);

    if ($query_update) {
        echo '<script>alert("Data berhasil di Update")
        window.location.href="../index.php";
        </script>';
    } else {
        echo '<script>alert("Data gagal Di Update")
        window.location.href="../index.php";
        </script>';
    }
}

?>
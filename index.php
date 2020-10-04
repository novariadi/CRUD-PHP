<?php

require_once('component/koneksi.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
</head>

<body>

    <div class="container">
        <div class="header">
            <h1>Logistik Base</h1>
        </div>
    </div>

    <div class="content">
        <div class="content-input">
            <form action="component/proses.php" method="POST">
                <div class="row">
                    <div class="column left">
                        <label>Kode Barang</label>
                    </div>
                    <div class="column right">
                        <input type="text" name="kode_barang" placeholder="Kode barang" required>
                    </div>
                </div>
                <div class="row">
                    <div class="column left">
                        <label>Nama Barang</label>
                    </div>
                    <div class="column right">
                        <input type="text" name="nama_barang" placeholder="Nama barang" required>
                    </div>
                </div>
                <div class="row">
                    <div class="column left">
                        <label>Produsen</label>
                    </div>
                    <div class="column right">
                        <input type="text" name="produsen" placeholder="Produsen" required>
                    </div>
                </div>
                <div class="row">
                    <div class="column left">
                        <label>Harga</label>
                    </div>
                    <div class="column right">
                        <input type="number" name="harga" placeholder="Harga" required>
                    </div>
                </div>
                <div class="row">
                    <div class="column left">
                        <button class="" type="submit" name="input_barang">Simpan</button>
                    </div>
                </div>
            </form>
        </div>

        <div>
            <table id="customers">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama barang</th>
                        <th>Produsen</th>
                        <th>Harga</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $show_query = mysqli_query($koneksi, "SELECT * FROM barang");

                    if (mysqli_num_rows($show_query) == 0) {
                        echo '<tr><td colspan="6">Tidak ada data</td></tr>';
                    } else {
                        $id = 1;
                        while ($data = mysqli_fetch_assoc($show_query)) {;
                    ?>

                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $data['kode_barang']; ?></td>
                                <td><?php echo $data['nama_barang']; ?></td>
                                <td><?php echo $data['produsen']; ?></td>
                                <td><?php echo $data['harga']; ?></td>
                                <td>
                                    <a href="component/edit.php?id=<?php echo $data['id_barang']; ?>">Edit</a> |
                                    <a href="component/proses.php?id=<?php echo $data['id_barang']; ?>" onclick="return confirm('Apakah anda yakin menghapus ?')">Hapus</a>
                                </td>
                            </tr>
                    <?php
                            $id++;
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>






</body>

</html>
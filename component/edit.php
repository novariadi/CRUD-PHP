<?php
include 'koneksi.php';


// Proses menampilkan form edit/update

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query_show = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id'") or die($query_show);

    while ($data = mysqli_fetch_array($query_show)) {

        $id = $data['id_barang'];
        $kode = $data['kode_barang'];
        $nama = $data['nama_barang'];
        $produsen = $data['produsen'];
        $harga = $data['harga'];
?>
        <div class="container">
            <div class="header">
                <h1>Logistik Base</h1>
            </div>
        </div>

        <div class="content">
            <div class="content-input">
                <form action="proses.php" method="POST">
                    <div class="row">
                        <div>
                            <input type="hidden" name="id_barang" value="<?php echo $id; ?>">
                        </div>
                        <div class="column left">
                            <label>Kode Barang</label>
                        </div>
                        <div class="column right">
                            <input type="text" name="kode_barang" placeholder="Kode barang" value="<?php echo $kode; ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column left">
                            <label>Nama Barang</label>
                        </div>
                        <div class="column right">
                            <input type="text" name="nama_barang" placeholder="Nama barang" value="<?php echo $nama; ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column left">
                            <label>Produsen</label>
                        </div>
                        <div class="column right">
                            <input type="text" name="produsen" placeholder="Produsen" value="<?php echo $produsen; ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column left">
                            <label>Harga</label>
                        </div>
                        <div class="column right">
                            <input type="number" name="harga" placeholder="Harga" value="<?php echo $harga; ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column left">
                            <button class="" type="submit" name="update_barang">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>



    <?php
    }
}
    ?>
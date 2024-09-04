<?php
require_once __DIR__ . "/functions/CRUD.php";

if (isset($_GET['input'])) {
    $namabarang = $_GET['namabarang'];
    $kategori = $_GET['kategori'];
    $harga = $_GET['harga'];

    $data = template($namabarang, $kategori, $harga);
    if (createData($data)) header("Location: index.php?hal=create&m=is");
    else echo '<script>alert("gagal")</script>';
}
?>

<?php
if (isset($_GET['m'])) {
    if ($_GET['m'] == "is") {

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Input Berhasil!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
}
?>

<form class="form form-vertical" action="Create.php" method="get">
    <div class="form-body">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="namabarang">Nama Barang</label>
                    <input type="text" id="namabarang" class="form-control"
                        name="namabarang" placeholder="Nama Barang" autocapitalize="words" required autofocus>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" id="kategori" class="form-control"
                        name="kategori" placeholder="Kategori" autocapitalize="words" required>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" inputmode="numeric" id="harga" class="form-control"
                        name="harga" placeholder="Harga" autocapitalize="words" required>
                </div>
            </div>

            <div class="col-12 d-flex justify-content-start">
                <button type="submit" name="input" value="true" class="btn btn-primary me-1 mb-1">Submit</button>
                <button type="reset"
                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
            </div>
        </div>
    </div>
</form>
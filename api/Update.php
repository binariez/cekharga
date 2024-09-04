<?php
require_once __DIR__ . "/functions/CRUD.php";

// proses
if (isset($_GET['submitUpdate'])) {
    $id = $_GET['_id'];
    $namabarang = $_GET['namabarang'];
    $kategori = $_GET['kategori'];
    $harga = $_GET['harga'];

    $template = template($namabarang, $kategori, $harga);
    $filter = ["_id" => new MongoDB\BSON\ObjectId($id)];
    $update = ['$set' => $template];
    if (updateData($filter, $update)) header("Location: index.php?hal=data&m=us");
    else echo '<script>alert("gagal")</script>';
}

// ambil data
if (isset($_GET['hal']) == "update") {
    $id = $_GET['id'];
    $filter = ["_id" => new MongoDB\BSON\ObjectId($id)];
    $options = [];
    $result = readData($filter, $options);

?>

    <form class="form form-vertical" action="update.php" method="get">
        <div class="form-body">
            <div class="row">

                <?php foreach ($result as $key) {
                ?>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="namabarang">Nama Barang</label>
                            <input type="text" id="namabarang" class="form-control" value="<?= $key['nama_barang'] ?>"
                                name="namabarang" placeholder="Nama Barang" autocapitalize="words" required autofocus>
                            <input type="hidden" name="_id" value="<?= $id ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" id="kategori" class="form-control" value="<?= $key['kategori'] ?>"
                                name="kategori" placeholder="Kategori" autocapitalize="words" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" inputmode="numeric" id="harga" class="form-control" value="<?= $key['harga'] ?>"
                                name="harga" placeholder="Harga" autocapitalize="words" required>
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-start">
                        <button type="submit" name="submitUpdate" value="true" class="btn btn-primary me-1 mb-1">Submit</button>
                        <button type="reset"
                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                    </div>

                <?php } ?>

            </div>
        </div>
    </form>

<?php }
?>
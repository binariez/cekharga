<?php
if (isset($_GET['m'])) {

    if (($_GET['m']) == "us") {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Update Berhasil!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
    if (($_GET['m']) == "ds") {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Dihapus!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
}
?>

<div class="table-responsive">
    <table class="table table-striped display nowrap" style="width:100%" id="tblBarang">
        <thead>
            <tr>
                <th>Barang</th>
                <th>Harga</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $data = $db->harga->find();

            foreach ($data as $d) {
            ?>
                <tr>
                    <td><?= ucwords($d['nama_barang']) ?></td>
                    <td>Rp<?= number_format($d['harga']) ?></td>
                    <td><?= ucwords($d['kategori']) ?></td>

                    <td >
                        <a href="?hal=update&id=<?= $d['_id'] ?>"><button class="btn btn-sm btn-warning">Update</button></a>
                        <a href="delete.php?id=<?= $d['_id'] ?>"><button class="btn btn-sm btn-danger" onclick="return confirm('Hapus barang terkait?')">Hapus</button></a>
                    </td>
                </tr>
            <?php
            } ?>
        </tbody>
    </table>
</div>
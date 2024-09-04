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

<table class="table table-striped" id="table1">
    <thead>
        <tr>
            <th>Barang</th>
            <th>Kategori</th>
            <th>Harga</th>
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
                <td><?= ucwords($d['kategori']) ?></td>
                <td>Rp<?= number_format($d['harga']) ?></td>

                <td class="d-flex flex-row gap-1">
                    <a href="?hal=update&id=<?= $d['_id'] ?>"><button class="btn btn-sm btn-warning">Update</button></a>
                    <a href="delete.php?id=<?= $d['_id'] ?>"><button class="btn btn-sm btn-danger" onclick="return confirm('Hapus barang terkait?')">Hapus</button></a>
                </td>
            </tr>
        <?php
        } ?>
    </tbody>
</table>
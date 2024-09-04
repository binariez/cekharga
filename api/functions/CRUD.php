<?php
require_once __DIR__ . "/Connection.php";

function template($namabarang, $kategori, $harga)
{
    $arr = array(
        "nama_barang"   => $namabarang,
        "kategori"      => $kategori,
        "harga"         => $harga
    );
    return $arr;
}

function createData($data)
{
    global $db;
    return $db->harga->insertOne($data);
}

function readData($filter, $options)
{
    global $db;
    return $db->harga->find($filter, $options);
}

function updateData($filter, $update)
{
    global $db;
    return $db->harga->updateOne($filter, $update);
}

function deleteData($filter)
{
    global $db;
    return $db->harga->deleteOne($filter);
}

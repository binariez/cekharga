<?php
require_once __DIR__ . "/functions/CRUD.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $filter = ["_id" => new MongoDB\BSON\ObjectId($id)];
    if (deleteData($filter)) header("Location: index.php?hal=data&m=ds");
    else echo '<script>alert("gagal")</script>';
}

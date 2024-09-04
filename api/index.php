<?php
require_once __DIR__ . "/functions/CRUD.php";

$judul = "Data Barang";
$page = __DIR__ . "/Read.php";

if (isset($_GET['hal'])) {
    switch ($_GET['hal']) {
        case "create":
            $judul = "Input Data";
            $page = __DIR__ . "/Create.php";
            break;
        case "update":
            $judul = "Update Data";
            $page = __DIR__ . "/Update.php";
            break;
        case "delete":
            $page = __DIR__ . "/Delete.php";
            break;
        default:
            $judul = "Data Barang";
            $page = __DIR__ . "/Read.php";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?></title>

    <link rel="stylesheet" href="../public/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../public/table-datatable-jquery.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/compiled/css/app.css">

</head>

<body>
    <div id="app">
        <?php include_once "sidebar.php" ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3><?= $judul ?></h3>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            include_once $page;
                            ?>
                        </div>
                    </div>
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2024 &copy; Azhar</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/compiled/js/app.js"></script>

    <script src="../public/jquery.min.js"></script>
    <script src="../public/jquery.dataTables.min.js"></script>
    <script src="../public/dataTables.bootstrap5.min.js"></script>
    <script src="../public/datatables.js"></script>
</body>

</html>
<?php
include "komponen/header.php";
?>
<link href="../css/dashboard.css" rel="stylesheet">
<div class="container-fluid">
    <div class="row">
        <?php include "komponen/nav.php" ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard Data Pemesanan</h1>
            </div>
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="table">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">Nama Pemesan</th>
                                            <th rowspan="2">Jenis Kelamin</th>
                                            <th rowspan="2">No Identitas</th>
                                            <th rowspan="2">Tipe Kamar</th>
                                            <th rowspan="2">Harga</th>
                                            <th rowspan="2">Tanggal Reservasi</th>
                                            <th rowspan="2">Lama Menginap</th>
                                            <th rowspan="2">Termasuk Breakfast</th>
                                            <th rowspan="2">Total Harga</th>
                                        </tr>
                                        <tr>
                                            <td>Proses</td>
                                            <td>Edit</td>
                                            <td>Hapus</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>Adhitya Maulana WIjaya</td>
                                                <td>Laki-laki</td>
                                                <td>3208010863720001</td>
                                                <td>Executive Room</td>
                                                <td>4.500.000</td>
                                                <td>12-01-2025</td>
                                                <td>3 Hari</td>
                                                <td>Ya</td>
                                                <td>4.580.000</td>
                                                <td>
                                                    <input type="hidden" name="id" value="">
                                                    <input type="hidden" name="status" value="">
                                                    <span class="btn btn-sm btn-success"><i class="bi bi-check2-square"></i></span>

                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>

                                                </td>
                                                <td>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="id" value="">
                                                        <input type="hidden" name="table" value="pemesanan">
                                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')"><i class="bi bi-trash"></i></button>
                                                    </form>

                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
<link rel="stylesheet" href="../css/datatables.min.css">
</html>
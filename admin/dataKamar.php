<?php
include "komponen/header.php";
?>
<link rel="stylesheet" href="../css/datatables.min.css">
<div class="container-fluid">
    <div class="row">

        <?php include "komponen/nav.php" ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Data Kamar Hotel</h1>

            </div>
            <div class="card">
                <div class="card-body">
                    <a href="tambahpaketWisata.php" class="btn btn-primary">Tambah Data Kamar</a>
                    <div class="table-responsive">
                        <table class="table table-striped" id="table">
                            <thead>
                                <tr>
                                    <th>Nama Kamar</th>
                                    <th>Harga Kamar</th>
                                    <th>Gambar</th>
                                    <th>act</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Superior Room</td>
                                    <td>Rp 1.200.000</td>
                                    <td><img src="../gambar/superior-kamar.jpg" alt="" width="200" height="200"></td>
                                    <td>
                                        <div class="col-auto">
                                            <form action="komponen/data/hapus.php" method="post">
                                                <input type="hidden" name="id" value="">
                                                <input type="hidden" name="table" value="paket_wisata">
                                                <a href="editpaketWisata.php" class="btn btn-success btn-sm">Edit</a>
                                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <td>Deluxe Room</td>
                                    <td>Rp 2.500.000</td>
                                    <td><img src="../gambar/deluxe-kamar.jpeg" alt="" width="200" height="200"></td>
                                    <td>
                                        <div class="col-auto">
                                            <form action="komponen/data/hapus.php" method="post">
                                                <input type="hidden" name="id" value="">
                                                <input type="hidden" name="table" value="paket_wisata">
                                                <a href="editpaketWisata.php" class="btn btn-success btn-sm">Edit</a>
                                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <td>Executive Room</td>
                                    <td>Rp 4.500.000</td>
                                    <td><img src="../gambar/eksekutife-kamar.jpg" alt="" width="200" height="200"></td>
                                    <td>
                                        <div class="col-auto">
                                            <form action="komponen/data/hapus.php" method="post">
                                                <input type="hidden" name="id" value="">
                                                <input type="hidden" name="table" value="paket_wisata">
                                                <a href="editpaketWisata.php" class="btn btn-success btn-sm">Edit</a>
                                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <td>Junior Suite</td>
                                    <td>Rp 6.000.000</td>
                                    <td><img src="../gambar/junior-suite.jpeg" alt="" width="200" height="200"></td>
                                    <td>
                                        <div class="col-auto">
                                            <form action="komponen/data/hapus.php" method="post">
                                                <input type="hidden" name="id" value="">
                                                <input type="hidden" name="table" value="paket_wisata">
                                                <a href="editpaketWisata.php" class="btn btn-success btn-sm">Edit</a>
                                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <td>Luxury Suite</td>
                                    <td>Rp 8.000.000</td>
                                    <td><img src="../gambar/luxury-suite.jpeg" alt="" width="200" height="200"></td>
                                    <td>
                                        <div class="col-auto">
                                            <form action="komponen/data/hapus.php" method="post">
                                                <input type="hidden" name="id" value="">
                                                <input type="hidden" name="table" value="paket_wisata">
                                                <a href="editpaketWisata.php" class="btn btn-success btn-sm">Edit</a>
                                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <td>Presidential</td>
                                    <td>Rp 10.000.000</td>
                                    <td><img src="../gambar/presidential-kamar.jpg" alt="" width="200" height="200"></td>
                                    <td>
                                        <div class="col-auto">
                                            <form action="komponen/data/hapus.php" method="post">
                                                <input type="hidden" name="id" value="">
                                                <input type="hidden" name="table" value="paket_wisata">
                                                <a href="editpaketWisata.php" class="btn btn-success btn-sm">Edit</a>
                                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="../js/datatables.min.js"></script>
<script>
    $("#table").dataTable()
</script>

</body>

</html>
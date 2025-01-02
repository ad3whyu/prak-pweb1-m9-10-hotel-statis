<?php
include "komponen/header.php";
?>
<link rel="stylesheet" href="../assets/css/datatables.min.css">
<div class="container-fluid">
    <div class="row">

        <?= include "komponen/nav.php" ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Fasilitas Hotel</h1>

            </div>
            <div class="card">
                <div class="card-body">
                    <a href="tambahfasilitasWisata.php" class="btn btn-primary">Tambah Fasilitas Hotel</a>
                    <div class="table-responsive">
                        <table class="table table-striped" id="table">
                            <thead>
                                <tr>
                                    <th>Fasilitas Hotel</th>
                                    <th>Gambar</th>
                                    <th>Act</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>Safari dan Eksplorasi Satwa</td>
                                        <td><img src="../gambar/safari-new.jpg" alt="" width="200" height="200"></td>
                                        <td>
                                            <div class="col-auto">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="id" value="">
                                                    <input type="hidden" name="table" value="fasilitas_wisata">
                                                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Camping dan Glamping</td>
                                        <td><img src="../gambar/glamping.jpeg" alt="" width="200" height="200"></td>
                                        <td>
                                            <div class="col-auto">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="id" value="">
                                                    <input type="hidden" name="table" value="fasilitas_wisata">
                                                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Aeril Adventure</td>
                                        <td><img src="../gambar/aeril.jpeg" alt="" width="200" height="200"></td>
                                        <td>
                                            <div class="col-auto">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="id" value="">
                                                    <input type="hidden" name="table" value="fasilitas_wisata">
                                                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Private Pool</td>
                                        <td><img src="../gambar/private-pool.jpg" alt="" width="200" height="200"></td>
                                        <td>
                                            <div class="col-auto">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="id" value="">
                                                    <input type="hidden" name="table" value="fasilitas_wisata">
                                                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Main Pool</td>
                                        <td><img src="../gambar/main-pool.jpg" alt="" width="200" height="200"></td>
                                        <td>
                                            <div class="col-auto">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="id" value="">
                                                    <input type="hidden" name="table" value="fasilitas_wisata">
                                                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kids Pool</td>
                                        <td><img src="../gambar/kids-pool.jpeg" alt="" width="200" height="200"></td>
                                        <td>
                                            <div class="col-auto">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="id" value="">
                                                    <input type="hidden" name="table" value="fasilitas_wisata">
                                                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mature Pool</td>
                                        <td><img src="../gambar/kolam-dewasa.jpeg" alt="" width="200" height="200"></td>
                                        <td>
                                            <div class="col-auto">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="id" value="">
                                                    <input type="hidden" name="table" value="fasilitas_wisata">
                                                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rooftop Pool</td>
                                        <td><img src="../gambar/rofttoop-pool.jpeg" alt="" width="200" height="200"></td>
                                        <td>
                                            <div class="col-auto">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="id" value="">
                                                    <input type="hidden" name="table" value="fasilitas_wisata">
                                                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lap Pool</td>
                                        <td><img src="../gambar/lap-pool.jpg" alt="" width="200" height="200"></td>
                                        <td>
                                            <div class="col-auto">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="id" value="">
                                                    <input type="hidden" name="table" value="fasilitas_wisata">
                                                    <a href="#" class="btn btn-success btn-sm">Edit</a>
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
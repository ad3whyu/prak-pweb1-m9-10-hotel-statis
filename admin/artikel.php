<?php
include "komponen/header.php";
?>
<link rel="stylesheet" href="../css/datatables.min.css">
<div class="container-fluid">
    <div class="row">

        <?= include "komponen/nav.php" ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Artikel Hotel</h1>

            </div>
            <div class="card">
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Edit Artikel Hotel</a>
                    <div class="table-responsive">
                        <table class="table table-striped" id="table">
                            <thead>
                                <tr>
                                    <th>Artikel</th>
                                    <th>Gambar</th>
                                    <th>Act</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 300px; word-wrap: break-word; white-space: normal;">Welcome to Aurum Vista, a five-star sanctuary of elegance in the heart of South Jakarta. 
                                        Designed to blend luxury with modern sophistication, our hotel offers beautifully appointed rooms, exceptional dining experiences, and world-class amenities. Whether you're visiting for business or leisure, 
                                        Aurum Vista promises an unforgettable stay where every detail is crafted to perfection.</td>
                                    <td><img src="../gambar/tampak-depan.jpg" alt="" width="300" height="200"></td>
                                    <td>
                                        <div class="col-auto">
                                            <form action="komponen/data/hapus.php" method="post">
                                                <input type="hidden" name="id" value="">
                                                <input type="hidden" name="table" value="obyek_wisata">
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
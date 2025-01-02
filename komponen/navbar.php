<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Aurum Vista Hotel</title>
</head>
<body>
    <!-- Header -->
    <section class="header container-fluid">
        <div class="header-content row text-white py-4">
            <h1 class="my-auto ps-5">Aurum Vista Hotel</h1>
        </div>
    </section>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0">
                    <li class="nav-item"><a class="nav-link <?php echo (str_contains($_SERVER['REQUEST_URI'], "index.php")) ? "active" : "" ?>" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo (str_contains($_SERVER['REQUEST_URI'], "kamar.php")) ? "active" : "" ?>" href="kamar.php">Kamar</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="fasilitasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Fasilitas</a>
                        <ul class="dropdown-menu" aria-labelledby="fasilitasDropdown">
                            <li><a class="dropdown-item" href="petualanganAlam.php">Petualangan Alam</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="kolam_renang.php">Kolam Renang Anak & Dewasa</a>
                            </li>
                            <li><a class="dropdown-item" href="pusat_kebugaran.php">Pusat Kebugaran</a></li>
                            <li><a class="dropdown-item" href="ruang_rapat.php">Ruang Rapat</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mb-0"><a class="nav-link <?php echo (str_contains($_SERVER['REQUEST_URI'], "pemesanan.php")) ? "active" : "" ?>" href="pemesanan.php">Pesan Sekarang</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <li class="nav-item">
                                <a href="login.php" class="nav-link <?php echo (str_contains($_SERVER['REQUEST_URI'], "login.php")) ? "active" : "" ?>">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="registrasi.php" class="nav-link <?php echo (str_contains($_SERVER['REQUEST_URI'], "registrasi.php")) ? "active" : "" ?>">Registrasi</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a href="logout.php" onclick="return confirm('apakah anda ingin logout?')" class="nav-link">Logout</a>
                            </li>
                            <li class="nav-item">
                                <a href="profile.php" class="nav-link <?php echo (str_contains($_SERVER['REQUEST_URI'], "profile.php")) ? "active" : "" ?>"> Hai <?= $_SESSION['nama']; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
            </div>
        </div>
    </nav>
</body>
</html>
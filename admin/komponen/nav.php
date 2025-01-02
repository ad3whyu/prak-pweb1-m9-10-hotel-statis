<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php echo (str_contains($_SERVER['REQUEST_URI'], "index.php") || str_contains($_SERVER['REQUEST_URI'], "index.php")) ? "active" : "" ?> " aria-current="page" href="index.php">
                    <i class="bi bi-house-fill"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo (str_contains($_SERVER['REQUEST_URI'], "artikel.php")) ? "active" : "" ?> " href="artikel.php">
                    <i class="bi bi-backpack-fill"></i>
                    Artikel
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo (str_contains($_SERVER['REQUEST_URI'], "dataKamar.php")) ? "active" : "" ?> " href="dataKamar.php">
                    <i class="bi bi-building-fill"></i>
                    Kamar
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo (str_contains($_SERVER['REQUEST_URI'], "fasilitas.php")) ? "active" : "" ?> " href="fasilitas.php">
                    <i class="bi bi-box-fill"></i>
                    Fasilitas
                </a>
            </li>
        </ul>
    </div>
</nav>
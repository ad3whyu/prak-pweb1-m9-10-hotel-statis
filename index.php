<?php 
include "komponen/navbar.php";
?>
<section class="hero-section my-5" id="aboutHotel">
  <div class="container">
    <div class="row align-items-center">
      <!-- Deskripsi Tentang Diri -->
      <div class="col-lg-6 col-md-12 mt-5 mb-5 hero-text text-center text-lg-start">
        <h6>
          <a href="#">About Us</a>
        </h6>
        <h2 class="fst-italic">Where Elegance Meets Comfort</h1>
        <p>
        Welcome to <b>Aurum Vista</b>, a five-star sanctuary of elegance in the heart of <b>South Jakarta</b>. 
        Designed to blend luxury with modern sophistication, our hotel offers beautifully appointed rooms, exceptional dining experiences, and world-class amenities. Whether you're visiting for business or leisure, 
        Aurum Vista promises an unforgettable stay where every detail is crafted to perfection.</p>
        <!-- Button Project -->
        <div class="hero-buttons mb-4">
          <a class="btn <?php echo (str_contains($_SERVER['REQUEST_URI'], "kamar.php")) ? "active" : "" ?>" href="kamar.php">
            Cari kamar <i class="bi bi-house-add-fill"></i>
          </a>
        </div>
      </div>
      <!-- Gambar Profil -->
      <div class="col-lg-6 col-md-12 text-center">
        <img alt="Profile Image" src="gambar/tampak-depan.jpg" class="img-fluid" style="max-width: 450px;">
      </div>
    </div>
  </div>
</section>
<?php 
include "komponen/footer.php";
?>


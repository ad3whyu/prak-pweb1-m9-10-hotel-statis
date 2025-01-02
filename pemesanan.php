<?php include "komponen/navbar.php"; ?>

<div class="container mt-3">
  <div class="row">
    <!-- Form Pemesanan (Kiri) -->
    <div class="col-md-8">
      <div class="card mb-5">
        <div class="card-header text-center">
          <h5>Reservasi Aurum Vista Hotel</h5>
        </div>
        <div class="card-body">
          <form name="form2">
            <!-- Nama Pemesan -->
            <div class="row mb-3">
              <label for="nama" class="col-sm-3 col-form-label text-start">Nama Pemesan:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama Lengkap" required />
              </div>
            </div>

            <!-- Jenis Kelamin -->
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label text-start">Jenis Kelamin:</label>
              <div class="col-sm-9">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="jkL" name="jkelamin" value="L" />
                  <label class="form-check-label" for="jkL">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="jkP" name="jkelamin" value="P" />
                  <label class="form-check-label" for="jkP">Perempuan</label>
                </div>
              </div>
            </div>

            <!-- Nomor Identitas -->
            <div class="row mb-3">
              <label for="identitas" class="col-sm-3 col-form-label text-start">Nomor Identitas:</label>
              <div class="col-sm-9">
                <input type="number" class="form-control form-control-sm" id="identitas" name="identitas" placeholder="Nomor Identitas 16 Digit" required />
              </div>
            </div>

            <!-- Tipe Kamar -->
            <div class="row mb-3">
            <label for="tipeKamar" class="col-sm-3 col-form-label text-start">Tipe Kamar:</label>
            <div class="col-sm-9">
              <select class="form-select form-select-sm" id="tipeKamar" name="tipeKamar" onchange="lihatHarga()">
                <option value="-">--Pilih--</option>
                <option value="Superior">Superior</option>
                <option value="Deluxe">Deluxe</option>
                <option value="Executive">Executive</option>
                <option value="Junior Suite">Junior Suite</option>
                <option value="Luxury Suite">Luxury Suite</option>
                <option value="Presidential Suite">Presidential Suite</option>
              </select>
            </div>
          </div>

            <!-- Harga -->
            <div class="row mb-3">
              <label for="harga" class="col-sm-3 col-form-label text-start">Harga:</label>
              <div class="col-sm-9">
                <input type="number" class="form-control form-control-sm" id="harga" name="harga" readonly />
              </div>
            </div>

            <!-- Tanggal Pesan -->
            <div class="row mb-3">
              <label for="tgl_pesan" class="col-sm-3 col-form-label text-start">Tanggal Pesan:</label>
              <div class="col-sm-9">
                <input type="date" class="form-control form-control-sm" id="tgl_pesan" name="tgl_pesan" />
              </div>
            </div>

            <!-- Durasi Menginap -->
            <div class="row mb-3">
              <label for="durasi" class="col-sm-3 col-form-label text-start">Lama Menginap:</label>
              <div class="col-sm-9">
                <input type="number" class="form-control form-control-sm" id="durasi" name="durasi" placeholder="Isi dengan Angka" />
              </div>
            </div>

            <!-- Breakfast -->
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label text-start">Termasuk Breakfast:</label>
              <div class="col-sm-9">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="BreakfastYa" name="Breakfast" value="ya" checked />
                  <label class="form-check-label" for="BreakfastYa">Ya</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="BreakfastTidak" name="Breakfast" value="tidak" />
                  <label class="form-check-label" for="BreakfastTidak">Tidak</label>
                </div>
              </div>
            </div>

            <!-- Total Harga -->
            <div class="row mb-3">
              <label for="totalHarga" class="col-sm-3 col-form-label text-start">Total Harga:</label>
              <div class="col-sm-9">
                <input type="number" class="form-control form-control-sm" id="totalHarga" name="totalHarga" readonly />
              </div>
            </div>

            <!-- Tombol Simpan dan Reset -->
            <div class="row mb-3">
              <div class="col-sm-8 offset-sm-4">
                <button type="button" class="btn-primary btn-sm" onclick="hitungHarga()">Simpan</button>
                <button type="reset" class="btn-danger btn-sm">Batal</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Rangkuman Reservasi (Kanan) -->
    <div class="col-md-4">
      <div class="card">
        <div class="card-header text-uppercase text-center">
          <h5>Rangkuman Reservasi</h5>
        </div>
        <div class="card-body">
          <div id="resume" class="border p-2" style="height: 100%; overflow-y: auto;"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="js/dataPesan.js"></script>
<?php 
include "komponen/footer.php";
?>

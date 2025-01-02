function lihatHarga() {
  const typeKamar = document.getElementById("tipeKamar").value;
  let harga = 0;

  if (typeKamar === "Superior") {
      harga = 1200000; // Superior Room price
  } else if (typeKamar === "Deluxe") {
      harga = 2500000; // Deluxe Room price
  } else if (typeKamar === "Executive") {
      harga = 4500000; // Executive Room price
  } else if (typeKamar === "Junior Suite") {
      harga = 6000000; // Junior Suite price
  } else if (typeKamar === "Luxury Suite") {
      harga = 8000000; // Luxury Suite price
  } else if (typeKamar === "Presidential Suite") {
      harga = 10000000; // Presidential Suite price
  }

  document.getElementById("harga").value = harga;
}

  function validasiIdentitas() {
    const input = document.getElementById("identitas").value;

    if (!/^\d{16}$/.test(input)) {
      alert("Isian Nomor Identitas salah, harus 16 digit.");
      return false;
    }
    return true;
  }

  function validasiDurasi() {
    const input = document.getElementById("durasi").value;

    if (!/^\d+$/.test(input)) {
      alert("Durasi menginap harus diisi dengan angka.");
      return false;
    }
    return true;
  }

  function hitungHarga() {
    validasiIdentitas();
    validasiDurasi();
    
    const hargaAwal = parseInt(document.form2.harga.value);
    const durasi = parseInt(document.getElementById("durasi").value);
    const breakFast = document.getElementById("BreakfastYa").checked;
    let totalHarga = hargaAwal;
  
    if (durasi > 3) {
      totalHarga -= totalHarga * 0.1;
    }
  
    if (breakFast) {
      totalHarga += 80000;
    }
  
    document.form2.totalHarga.value = totalHarga;
  
    // Menampilkan Rangkuman Reservasi
    resume();
  }
  
  function resume() {
    let resume = `
    <pre>
      Nama Pemesan       = ${document.form2.nama.value}
      Jenis Kelamin      = ${document.form2.jkL.checked ? 'Laki-laki' : 'Perempuan'}
      Nomor Identitas    = ${document.form2.identitas.value}
      Tipe Kamar         = ${document.form2.tipeKamar.value}
      Harga              = Rp ${document.form2.harga.value}
      Tanggal Pesan      = ${document.form2.tgl_pesan.value}
      Lama Menginap      = ${document.form2.durasi.value} hari
      Termasuk Breakfast = ${document.form2.BreakfastYa.checked ? 'Ya' : 'Tidak'}
      ==================================
      Total Harga        = Rp ${document.form2.totalHarga.value}
    </pre>
      `;
    document.getElementById("resume").innerHTML = resume;
  }
  
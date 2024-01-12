<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Alutsista</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav class="navbar-brand">
    <div class="logo">
      <img src="../asset/icons/logo-alutsista.png" alt="Logo">
    </div>
    <div class="search-box">
      <input type="text" placeholder="Cari">
    </div>
    <ul class="nav">
      <li>Beranda</li>
      <li>Aset</li>
      <li>Tentang Alutsista</li>
      <li>
          <a class="navbar-brand getstarted scrollto">
              <img src="../asset/icons/user.png" alt="user" style="width: 20px; height: 20px;">
              <?php echo $_SESSION['first_name']; ?>
          </a>                      
      </li>
      <li><a class="navbar-link getstarted scrollto" href="logout.php">Logout</a></li>
  </ul>    
  </nav>

  <section class="container">
    <h1>Detail Alutsista</h1>
    <div class="img-container">
        <img src="../asset/images/Rectangle 55.png" alt="">
    </div>
    <div class="content">
        <ul id="product">
            <li><a href="">Informasi Umum</a></li>
            <li><a href="">Spesifik Alat</a></li>
            <li><a href="">Riwayat Akutsista</a></li>
        </ul>
        <ul id="action">
            <li><a href="../editdata/editdata.html">Edit</a></li>
            <li><button id="hapus" onclick="openModal()">Hapus</button></li>
        </ul>

        <div class="modal" id="deleteConfirmationModal">
            <div class="modal-content">
              <img src="../asset/images/Featured icon.png" alt="">
              <h3>Hapus data ini?</h3>
              <p>Apakah anda yakin akan menghapus data ini? Aksi ini tidak daat dibatalkan.</p>
              <button id="modal-close" onclick="closeModal()">Batal</button>
              <button id="modal-delete" onclick="deleteData()">Hapus</button>
            </div>
          </div>          
    </div>
    <div class="data">
        <ul>
            <li>
                <label id="tittle">Nomor Seri</label>
                <label id="text-fill">A1234</label>
            </li>
            <li>
                <label id="tittle">Nama Aset</label>
                <label id="text-fill">Pesawat Tempur</label>
            </li>
            <li>
                <label id="tittle">Status Kondisi</label>
                <label id="text-fill">Baik</label>
            </li>
            <li>
                <label id="tittle">Kategori</label>
                <label id="text-fill">Kendaraan tempur</label>
            </li>
        </ul>
    </div>
    <div class="footer-content">
        <h3>Panduan Pengguna</h3>
        <div class="content-list">
            <h4>Deskripsi panduan ini mencakup informasi yang sangat penting bagi pengguna pesawat tempur dan dapat mencakup hal-hal seperti:</h4>
            <ol id="list">
                <li>
                    <h4>Prosedur Operasional: </h4>
                    <ul>
                        <li>Langkah-langkah untuk pra-penerbangan, termasuk checklist pra-penerbangan, pemeriksaan pesawat, dan persiapan sebelum lepas landas.</li>
                        <li>Panduan operasional saat penerbangan, termasuk prosedur lepas landas, navigasi, manuver, dan pendaratan.33.</li>
                    </ul>
                </li>
                <li>
                    <h4>Prosedur Darurat dan Keselamatan: </h4>
                    <ul>
                        <li>Tindakan yang harus diambil dalam situasi darurat, termasuk prosedur evakuasi, penanganan kegagalan sistem, atau situasi bencana lainnya.</li>
                        <li>Instruksi terkait keselamatan dan penggunaan peralatan keselamatan pribadi.</li>
                    </ul>
                </li>
            </ol>
        </div>
    </div>
  </section>

  <div class="footer">
    Copyright © PT Perdana Indo 2023
  </div>

  <script>
    function openModal() {
      document.getElementById('deleteConfirmationModal').style.display = 'block';
    }
  
    function closeModal() {
      document.getElementById('deleteConfirmationModal').style.display = 'none';
    }
  
    function deleteData() {
      // Add your delete logic here
      // For now, let's just close the modal
      closeModal();
    }
  </script>
  
</body>

</html>

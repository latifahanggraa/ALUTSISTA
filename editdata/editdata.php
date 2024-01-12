<?php 
        include "../koneksi.php";
        $items = "select * from item_alutsista"; 
        $data_alutsista = $conn->query($items);

        $select_alutsista = "select * from item_alutsista where no_seri = ".$_GET['no_seri'];
        foreach($conn->query($select_alutsista) as $value){
        $data_select_alutsista = $value;
        } ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=!, initial-scale=1.0">
    <link rel="stylesheet" href="editdata.css">
    <title>Edit Data</title>
</head>
<body>

    
    <nav class="navbar-brand">
        <div class="logo">
          <img src="../asset/logo.svg" alt="Logo">
        </div>
    
        <ul class="nav">
          <li>Beranda</li>
          <li>Aset</li>
          <li>Tentang Alutsista</li>
          <li>
              <a class="navbar-brand getstarted scrollto">
                  <img src="../asset/icons/user.png" alt="user" style="width: 20px; height: 20px;">
                  <?php echo $_SESSION['nama']; ?>
              </a>                      
          </li>
          <li><a class="navbar-link getstarted scrollto" href="login.php">Keluar</a></li>
      </ul>    
      </nav>
<section class="content">

    <form action="../editdata.php" method="post" enctype="multipart/form-data">
        <div class="input-data">
            <h1>EDIT ALUTSISTA</h1><br>
            <label for="">No Seri</label>
            <input type="text" name="no_seri" value="<?php echo $data_select_alutsista['no_seri'] ?>">
    
            <label for="kategori">Kategori </label>
            <select id="kategori" name="kategori" >
                <option value="senjata">Senjata</option>
                <option value="pesawat">Pesawat</option>
                <option value="kapal">Kapal</option>
                <option value="munisi">Munisi</option>
                <option value="kendaraan_tempur">Kendaraan Tempur</option>
                <option value="alat_optik">Alat Optik</option>
            </select>
    
            <label for="">Nama Item</label>
            <input type="text" name="nama" value="<?php echo $data_select_alutsista['nama_item'] ?>">

            <label for="kondisi">Kondisi </label>
            <select id="kondisi" name="kondisi" value="<?php echo $data_select_alutsista['kondisi'] ?>">
                <option value="siap">Siap Digunakan</option>
                <option value="aktif">Sedang Digunakan</option>
                <option value="perbaikan">Dalam Perbaikan</option>
                <option value="disimpan">Dalam Penyimpanan</option>
            </select>
    
            <label for="">Panduan Penggunaan</label>
            <textarea name="panduan" value="<?php echo $data_select_alutsista['panduan_penggunaan'] ?>"></textarea>
    
            <label for="">Deskripsi</label>
            <textarea name="deskripsi" value="<?php echo $data_select_alutsista['deskripsi'] ?>"></textarea>
    
            
        </div>
    
        <div  class="input-data">
            <h1>EDIT RIWAYAT ALUTSISTA</h1><br>
            
                <label for="">Tanggal Masuk</label>
                <input type="date" name="tanggal" value="<?php echo $data_select_alutsista['tanggal_masuk'] ?>">
    
                <label for="">Lokasi Terkini</label>
                <input type="alamat" name="lokasi" value="<?php echo $data_select_alutsista['lokasi_terkini'] ?>">
    
                <label for="">Riwayat Penggunaan</label>
                <input type="text" name="riwayat_penggunaan" value="<?php echo $data_select_alutsista['riwayat_penggunaan'] ?>">

                <label for="">Riwayat Perawatan</label>
                <input type="text" name="riwayat_perawatan" value="<?php echo $data_select_alutsista['riwayat_perawatan'] ?>">
    
                <label for="">Stok</label>
                <input type="text" name="stok" value="<?php echo $data_select_alutsista['stok'] ?>">
    
                <input type="hidden" name="foto_lama" value="<?php echo $data_select_alutsista['gambar']; ?>">
                <label for="">Gambar</label>
                <input type="file" name="gambar" value="<?php echo $data_select_alutsista['gambar'] ?>">
    
                     
        </div>
        <button type="submit">Simpan</button>
    </form>

</section>
    
</body>
</html>
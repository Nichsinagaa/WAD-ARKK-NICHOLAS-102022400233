<?php
// **********************  1  **************************
// Inisialisasi variabel
$nama = $email = $nomor = $pilih = $jumlah = "";
$namaErr = $emailErr = $nomorErr = $pilihErr = $jumlahErr = "";



// **********************  2  **************************
// Jika form disubmit


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // **********************  3  **************************
    $nama = trim($_POST["nama"]);
    if (empty($nama)){
      $namaErr = "nama Wajib Diisi";   
    } 

    // **********************  4  **************************
     $email = trim($_POST["email"]);
    if (empty($email)) {
        $emailErr = "Email wajib diisi";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Format email tidak valid";
    }



    // **********************  5  **************************
     $nomor = trim($_POST["nomor"]);
    if (empty($nomor)) {
        $nomorErr = "nomor telepon wajib diisi";
    } elseif (!ctype_digit($nomor)) { 
        $nomorErr = "nomor telepon hanya boleh angka";
    }


    // **********************  6  **************************
   $pilih = $_POST["film"] ?? "";
    if (empty($pilih)) {
        $pilihErr = "Pilih Film";
    }


    // **********************  7  **************************
    $jumlah = trim($_POST["jumlah"]);
    if (empty($jumlah)) {
        $jumlahErr = "Jumlah Tiket Wajib Diisi";
    }



}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Pemesanan Tiket Bioskop</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="form-container">
  <!-- **********************  8  **************************
       Tambahkan nilai atribut di dalam src dengan nama file gambar logo bioskop
  -->
  <img src="EAD.png" alt="Logo Bioskop EAD" class="logo">

  <h2>Form Pemesanan Tiket Bioskop</h2>
  <form method="post" action="">
    <!-- Isi atribut value untuk menampilkan nilai variabel di dalam (...)-->
     <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>">
                <span class="error"><?php echo $namaErr ? "* $namaErr" : ""; ?></span>
            </div>

    <!-- Isi atribut value untuk menampilkan nilai variabel di dalam (...)-->
     <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>">
                <span class="error"><?php echo $emailErr ? "* $emailErr" : ""; ?></span>
            </div>
 

    <!-- Isi atribut value untuk menampilkan nilai variabel di dalam (...)-->
     <div class="form-group">
                <label for="nomor">Nomor HP:</label>
                <input type="text" id="nomor" name="nomor" value="<?php echo $nomor; ?>">
                <span class="error"><?php echo $nomorErr ? "* $nomorErr" : ""; ?></span>
            </div>
 

    <label>Pilih Film:</label>
    <select name="film">
      <option value="">-- Pilih Film --</option>
      <option value="Interstellar">Interstellar</option>
      <option value="Inception">Inception</option>
      <option value="Oppenheimer">Oppenheimer</option>
      <option value="Avengers: Endgame">Avengers: Endgame</option>
    </select>
    <span class="error"><?php echo $pilihErr; ?></span>

    <!-- Isi atribut value untuk menampilkan nilai variabel di dalam (...)-->
     <div class="form-group">
                <label for="jumlah">Jumlah Tiket:</label>
                <input type="text" id="jumlah" name="jumlah" value="<?php echo $jumlah; ?>">
                <span class="error"><?php echo $jumlahErr ? "* $jumlahErr" : ""; ?></span>
            </div>

    <button type="submit">Pesan Tiket</button>
  </form>
  
  <!-- **********************  9  ************************** -->
  
  <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !$namaErr && !$emailErr && !$nomorErr && !$pilihErr && !$jumlahErr) { ?>
    <div class="container">
        <h3>Data Pemesanan:</h3>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th width="15%">Nama</th>
                        <th width="20%">Email</th>
                        <th width="15%">Nomor HP</th>
                        <th width="15%">Pilih Film</th>
                        <th width="15%">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pilih; ?></td>
                        <td><?php echo $jumlah; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php } ?>
</div>
</body>
</html>

<html>
<head>
  <title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
  <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.40.1/dist/full.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <h1>Data Siswa</h1>
  <a href="form_simpan.php" class='btn btn-success'>+ Tambah Data</a><br><br>
  <div class="overflow-x-auto">
  <table border="1" class="table w-full">
  <tr>
    <th>Foto</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Telepon</th>
    <th>Alamat</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM siswa");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
    echo "<td>".$data['nis']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['jenis_kelamin']."</td>";
    echo "<td>".$data['telp']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."' class='btn btn-info'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."' class='btn btn-danger'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</div>
</body>
</html>
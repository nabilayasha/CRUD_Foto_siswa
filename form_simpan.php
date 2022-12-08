<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
  <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.40.1/dist/full.css" rel="stylesheet" type="text/css" />
</head>
<body class="flex justify-center flex-col h-screen items-center">
<div class="card w-96 bg-neutral text-neutral-content">
  <div class="card-body items-center text-center">
  <h1>Tambah Data Siswa</h1>
  <div class="form-control">
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>NIS</td>
    <td><input type="text" name="nis"></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama"></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>
    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
    </td>
  </tr>
  <tr>
    <td>Telepon</td>
    <td><input type="text" name="telp"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><textarea name="alamat"></textarea></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td><input type="file" name="foto"></td>
  </tr>
  </table>
  
  <hr>
  <button type="submit" class="btn btn-primary" value="Daftar">Daftar</button>
  <a href="index.php"><input type="button" class="btn btn-danger" value="Batal"></a>
  </form>
  </div>
  </div>
</div>
</body>
</html>
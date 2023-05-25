<!DOCTYPE html>
<html lang="en">
<head>
  <title>input paket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Form Input paket</h2>
  <form action="" method="post">
    <div class="mb-3 mt-3">
      <label >kode Paket:</label>
      <input type="text" class="form-control"  placeholder="Kode paket" name="kode" required>
    </div>
    <div class="mb-3">
      <label >Nama Paket:</label>
      <input type="text" class="form-control" placeholder="Nama paket" name="nama" required>
    </div>
    <div class="mb-3">
      <label >Harga:</label>
      <input type="number" class="form-control"  placeholder="Harga" name="harga" required>
    </div>
	<div class="mb-3">
      <label for="hargajual">Status:</label>
<select class="form-control" name="status">
  <option>ADA</option>
  <option>KOSONG</option>
</select>
    </div>
	<div class="mb-3">
      <label for="tanggaljual">Jumlah:</label>
      <input type="number" class="form-control"  name="jumlah" required>
    </div>
    <button type="submit" class="btn btn-primary" name="tombolSimpan">Simpan Rekord Paket</button> <a href="index.php" class="btn btn-danger"> Kembali</a>
  </form>
  <?php if (isset($_POST['tombolSimpan'])) {
  $kon = mysqli_connect("localhost","root","","sim_restorant");
  $kode=filter_var($_POST['kode'],FILTER_SANITIZE_STRING);
  $nama=filter_var($_POST['nama'],FILTER_SANITIZE_STRING);
  $harga=filter_var($_POST['harga'],FILTER_SANITIZE_STRING);
  $status=filter_var($_POST['status'],FILTER_SANITIZE_STRING);
  $jumlah=filter_var($_POST['jumlah'],FILTER_SANITIZE_STRING);
$ex=mysqli_query($kon,"INSERT INTO paket_makanan VALUES ('$kode','$nama','$harga','$status','$jumlah'); ");
if($ex>0):

echo "Record Berhasil ditambah";

else:
  echo "Record Gagal ditambah";

endif;
 }
  ?>
</div>

</body>
</html>
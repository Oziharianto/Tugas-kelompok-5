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
      <label >Nomer meja:</label>
      <input type="text" class="form-control"  placeholder="Nomer Meja" name="nomer" required>
    </div>
    <div class="mb-3">
      <label >Nama Pemesan:</label>
      <input type="text" class="form-control" placeholder="Nama Pemesan" name="nama" required>
    </div>
    <div class="mb-3">
      <label >Kode Paket</label>
      <input type="number" class="form-control"  placeholder="Kode Paket" name="kodep" required>
    </div>
	<div class="mb-3">
      <label for="tanggaljual">Jumlah:</label>
      <input type="number" class="form-control"  name="jumlah" required>
    </div>
    <button type="submit" class="btn btn-primary" name="tombolSimpan">Simpan Rekord Paket</button> <a href="pembeli.php" class="btn btn-danger"> Kembali</a>
  </form>
  <?php if (isset($_POST['tombolSimpan'])) {
  $kon = mysqli_connect("localhost","root","","sim_restorant");
  $nomer=filter_var($_POST['nomer'],FILTER_SANITIZE_STRING);
  $nama=filter_var($_POST['nama'],FILTER_SANITIZE_STRING);
  $kode=filter_var($_POST['kodep'],FILTER_SANITIZE_STRING);
  $jumlah=filter_var($_POST['jumlah'],FILTER_SANITIZE_STRING);
  $cekpaket=mysqli_query($kon,"SELECT * FROM paket_makanan WHERE kode_paket='$kode'");
  if($cekpaket->num_rows<1):
  echo 'Paket Tidak Tersediah, Data gagal Ditambah';
  die();
  endif;
$ex=mysqli_query($kon,"INSERT INTO pembeli VALUES ('$nama','$kode','$jumlah','$nomer'); ");
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
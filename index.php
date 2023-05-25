<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIM Restorant Bunda </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css?<?= time(); ?>">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link link_aktif" href="#"  >Stok Paket Masakan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pembeli.php" target="frmutama">Pembeli</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
<a class="nav-link link_tombol" href="input_paket.php" >Tambah Paket </a>
<table  width="100%" cellspacing="0" cellpadding="10">
  <tr>
    <th>NO</th>
    <th>Nama</th>
    <th>Nomer Paket</th>
    <th>Harga</th>
    <th>Status</th>
    <th>Jumlah</th>
  </tr>
  <?php $kon = mysqli_connect("localhost","root","","sim_restorant");
  $query=mysqli_query($kon,"SELECT * FROM paket_makanan");
  $i=1;
while ($row=mysqli_fetch_assoc($query)):
   ?>

  <tr>
    <td><?=$i; ?></td>
    <td><?=$row['nama_paket']; ?></td>
    <td><?=$row['kode_paket']; ?></td>
    <td><?='Rp.'.$row['harga']; ?></td>
    <td><?=$row['status']; ?></td>
    <td><?=$row['jumlah']; ?></td>
  </tr>
<?php endwhile; ?>
</table>

</body>
</html>
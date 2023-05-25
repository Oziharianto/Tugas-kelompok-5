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
          <a class="nav-link " href="index.php"  >Stok Paket Masakan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link_aktif" href="#" >Pembeli</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
<a class="nav-link link_tombol" href="input_record_pembeli.php" >Tambah Record pembeli </a>
<table  width="100%" cellspacing="0" cellpadding="10">
  <tr>
    <th>NO</th>
    <th>Nomer Meja</th>
    <th>Nama Pemesan</th>
    <th>Kode Paket</th>
    <th>Jumlah</th>
    <th>Total Bayar</th>
  </tr>
  <?php $kon = mysqli_connect("localhost","root","","sim_restorant");
  $query=mysqli_query($kon,"SELECT * FROM pembeli");
  $i=1;
while ($row=mysqli_fetch_assoc($query)):
   ?>

  <tr>
    <td><?=$i; ?></td>
    <td><?=$row['nomer_meja']; ?></td>
    <td><?=$row['nama_pemesan']; ?></td>
    <td><?=$row['kode_paket']; ?></td>
    <td><?=$row['jumlah']; ?></td>
    <?php 
        $k=$row['kode_paket'];
    $q=mysqli_query($kon,"SELECT * FROM paket_makanan WHERE kode_paket='$k'");  
    $r=mysqli_fetch_assoc($q);
    ?>
    <td><?= 'Rp.'.$row['jumlah']*$r['harga'];?></td>
  </tr>
<?php endwhile; ?>
</table>

</body>
</html>
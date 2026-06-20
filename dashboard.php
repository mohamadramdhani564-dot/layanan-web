<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: ../login.php");
}

include 'config/koneksi.php';
?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/sidebar.php'; ?>

<div class="content-wrapper p-4">
  <h3>Dashboard</h3>

  <?php
  // HITUNG DATA
  $jml_mobil = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) as total FROM mobil"))['total'];
  $jml_pelanggan = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) as total FROM pelanggan"))['total'];
  $jml_penjualan = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) as total FROM penjualan"))['total'];
  $jml_servis = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) as total FROM servis"))['total'];
  ?>

  <div class="row">

    <!-- MOBIL -->
    <div class="col-lg-3 col-6">
      <div class="small-box bg-info">
        <div class="inner">
          <h3><?= $jml_mobil ?></h3>
          <p>Total Data Mobil</p>
        </div>
        <a href="pages/mobil.php" class="small-box-footer">Lihat Data</a>
      </div>
    </div>

    <!-- PELANGGAN -->
    <div class="col-lg-3 col-6">
      <div class="small-box bg-success">
        <div class="inner">
          <h3><?= $jml_pelanggan ?></h3>
          <p>Total Data Pelanggan</p>
        </div>
        <a href="pages/pelanggan.php" class="small-box-footer">Lihat Data</a>
      </div>
    </div>

    <!-- PENJUALAN -->
    <div class="col-lg-3 col-6">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3><?= $jml_penjualan ?></h3>
          <p>Total Transaksi Penjualan</p>
        </div>
        <a href="pages/penjualan.php" class="small-box-footer">Lihat Data</a>
      </div>
    </div>

    <!-- SERVIS -->
    <div class="col-lg-3 col-6">
      <div class="small-box bg-danger">
        <div class="inner">
          <h3><?= $jml_servis ?></h3>
          <p>Total Data Servis</p>
        </div>
        <a href="pages/servis.php" class="small-box-footer">Lihat Data</a>
      </div>
    </div>

  </div>
</div>

<?php include 'partials/footer.php'; ?>
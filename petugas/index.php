<?php
include "header.php";
include "navbar.php";
?>
<style>
	body{
		background-image: url('../assets/bg.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		font-style: italic;
	}

</style>

	<div class="card-body container" style="margin-top: 120px;">
		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body bg-success-subtle">
						Data Barang
						<?php
						include '../koneksi.php';
						$data_produk = mysqli_query($koneksi,"SELECT * FROM produk");
						$jumlah_produk = mysqli_num_rows($data_produk);
						?>
						<h3><?php echo $jumlah_produk; ?></h3>
						<a href="data_barang.php" class="btn btn-outline-primary btn-sm">Detail</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body bg-danger-subtle">
						Data Pembelian
						<?php
						include '../koneksi.php';
						$data_penjualan = mysqli_query($koneksi,"SELECT * FROM penjualan");
						$jumlah_penjualan = mysqli_num_rows($data_penjualan);
						?>
						<h3><?php echo $jumlah_penjualan; ?></h3>
						<a href="pembelian.php" class="btn btn-outline-primary btn-sm">Detail</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="card mt-2 container">
	<div class="card-body">
		<p>Selamat datang dihalaman administrator, silahkan anda bisa mengakses beberapa fitur</p>
	</div>
</div>
<div style="margin-top: 260px;">
<?php
include "footer.php";
?>
</div>
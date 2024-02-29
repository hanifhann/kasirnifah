
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
	header("location:../index.php?pesan=gagal");
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="text.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<!-- Data Tables -->
	<link rel="stylesheet" type="text/css" href="datatables/datatables.css">
	<script type="text/javascript" src="datatables/datatables.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<!-- Data Tables -->

</head>


<style>
	body{
		background-image: url('../assets/bg.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		font-style: italic;
	}

</style>
<div class="card" style="margin-top: 120px;">
	<div class="card-body">
		  <table id="hanifah" class="table align-middle table cell-border table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>ID Pelanggan</th>
					<th>Nama Pelanggan</th>
					<th>No. Telepon</th>
					<th>Alamat</th>
					<th>Total Pembayaran</th>
					
				</tr>
			</thead>
			<tbody>
			<?php
include '../koneksi.php';
$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM pelanggan INNER JOIN penjualan ON pelanggan.PelangganID=penjualan.PelangganID");
while ($d = mysqli_fetch_array($data)) {
    if ($d['TotalHarga'] != 0) {
        ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                </td>
                <td>
                    <?php echo $d['PelangganID']; ?>
                </td>
                <td>
                    <?php echo $d['NamaPelanggan']; ?>
                </td>
                <td>
                    <?php echo $d['NomorTelepon']; ?>
                </td>
                <td>
                    <?php echo $d['Alamat']; ?>
                </td>
                <td>Rp.
                <?php echo number_format($d['TotalHarga'], 0, ',', '.') ?>
                </td>
            </tr>
            <?php
}
}?>
			</tbody>
		</table>
	</div>
</div>
<h6 style="margin-top: 20px;  margin-left: 450px">Pariaman,
                    <script>var today = new Date();
                        var dd = String(today.getDate()).padStart(2, '0');
                        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                        var yyyy = today.getFullYear();

                        today = dd + '-' + mm + '-' + yyyy;
                        document.write(today);</script>
                </h6>
                <h6 style="margin-left: 450px">Kepala Toko</h6>
                <h6 style="margin-top: 60px;  margin-left: 450px">Hanifah Mardhiyah Rahmadhani</h6>



<script>
 window.print();
 </script>

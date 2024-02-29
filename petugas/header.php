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
	<title>Halaman Administrator</title>
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
<script type="text/javascript">
	$(document).ready(function () {
		$('#hanifah').DataTable();
	});
</script>


<body>
	<div class="">
		<div class="content">
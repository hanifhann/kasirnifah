<!DOCTYPE html>
<html>
<head>
	<title>UKK KASIR</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<style>
		* {
		margin: 0;
		padding: 0;
		outline: 0;
		font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
		}
		body {
		height: 100vh;
		background-image: url(assets/tr.png);
		background-size: cover;
		background-repeat: no-repeat;
		font-style: italic;
		}

		.container {
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
		padding: 20px 25px;
		width: 300px;
		height: 400px;
		background-color: rgba(255, 250, 250, 0.7);
		box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
		}

		.container h2 {
		text-align: center;
		color: #b6895b;
		margin-bottom: 20px;
		text-transform: uppercase;
		}
		.container label {
		text-align: left;
		color: #b6895b;
		margin-left: 10px;
		}
		
		.container form input {
			width: calc(100% - 20px);
			padding: 8px 10px;
			margin-bottom: 15px;
			margin-left: 10px;
			border: none;
			border-bottom: 2px solid #b6895b;
			font-size: 20px;
		}
		
		.text{
			background-color: transparent;
			color: #b6895b;
		}

		.tombollogin {
		width: 100%;
		padding: 10px;
		border: none;
		background-color: #b6895b;
		font-size: 18px;
		color: #fff;
		margin-top: 30px;
		cursor: pointer;
		}
	</style>
	<div class="container">
							<h2 class="text-center mt-2">LOGIN</h2>
							<?php 
if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
        echo "<script type='text/javascript'>alert('Username dan Password tidak sesuai!');</script>";
    }
}
?>
							<form method="post" action="cek_login.php">
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" class="text" id="username">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" class="text" id="password">
								</div>
								<div class="form-group mt-3">
								<input type="submit" name="login" class="tombollogin" value="LOGIN">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
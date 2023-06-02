<!DOCTYPE html>
<html>
<head>
	<title>Edit Reservasi</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			background-color: #f2f2f2;
		}

		.container {
			width: 400px;
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			margin-top: 80px; /* Add margin to the top to create space below the navbar */
		}

		h2 {
			text-align: center;
			color: blue;
		}

		table {
			width: 95%;
		}

		td {
			padding: 10px 0;
		}

		input[type="date"],
		input[type="text"],
		input[type="submit"] {
			width: 100%;
			padding: 5px;
			border-radius: 3px;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			cursor: pointer;
		}

		a {
			text-decoration: none;
			color: blue;
			display: block;
			text-align: center;
			margin-top: 10px;
		}

		.navbar {
			display: flex;
			background-color: rgb(110, 184, 237);
			color: white;
			justify-content: space-around;
			height: 60px;
			align-items: center;
			font-family: Verdana, Geneva, Tahoma, sans-serif;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			z-index: 999;
		}

		.navbar .logo {
			color: rgb(114, 24, 198);
			text-decoration: none;
			font-style: bold;
			font-size: 21px;
			font-weight: 700;
		}

		.navbar ul {
			display: flex;
			list-style: none;
			width: 37%;
			justify-content: space-between;
		}

		.navbar ul li a {
			color: var(--color-main);
			text-decoration: none;
			font-size: 15px;
		}

		.navbar ul li a:hover {
			border-style: solid;
			color: white;
			background-color: rgb(110, 184, 237);
			border-radius: 33px;
			padding: 4px;
			transition: 0.2s;
		}
	</style>
</head>
<body>
	<nav class="navbar">
		<a href="#" class="logo">EventSpace Solutions</a>
		<ul>
			<li><a class="aktif" href="landing.php">Home</a></li>
			<li><a href="pilihan_gedung.php">Pilihan Gedung</a></li>
			<li><a href="aboutus.php">About us</a></li>
			<li><a href="FAQ.php">FAQ</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="katalog.php">Logout</a></li>
		</ul>
		<div class="menu-toggle">
				<span></span>
				<span></span>
				<span></span>
			</div>
	</nav>
	<div class="container">
		<h2>EDIT RESERVASI</h2>
		<br/>
		<a href="CRUD.php">KEMBALI</a>
		<br/>
		<?php
		include 'conect.php';
		$id = $_GET['id'];
		$data = mysqli_query($conect,"SELECT * FROM event WHERE id_pemesanan='$id'");
		while($d = mysqli_fetch_array($data)){
			?>
			<form method="POST" action="ubah.php">
				<table>
					<tr>			
						<td>Tanggal Pemesanan</td>
						<td>
							<input type="hidden" name="id_pemesanan" value="<?php echo $d['id_pemesanan']; ?>">
							<input type="date" name="tgl" value="<?php echo $d['tgl_pemesanan']; ?>">
						</td>
					</tr>
					<tr>
						<td>Nama Customer</td>
						<td><input type="text" name="nama" value="<?php echo $d['nama_cust']; ?>"></td>
					</tr>
					<tr>
						<td>Tanggal Awal Sewa</td>
						<td><input type="text" name="tglAwal" value="<?php echo $d['tgl_awalsewa']; ?>"></td>
					</tr>
					<tr>
						<td>Tanggal Akhir Sewa</td>
						<td><input type="text" name="tglAkhir" value="<?php echo $d['tgl_akhirsewa']; ?>"></td>
					</tr>
					<tr>
						<td>Pilihan Gedung</td>
						<td><input type="text" name="pilihan" value="<?php echo $d['pilihan_gedung']; ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" value="SIMPAN">
							<br> 
							<button type="button" style="width: 225px;height: 30px;margin-top: 10px;margin-bottom: 10px; background-color : green; color : white;" onclick="cetakLaporan()"><i data-feather="file-text"></i> Cetak Laporan</button>
						</td>
					</tr>		
				</table>
			</form>
			<?php 
		}
		?>
	</div>
	<script>
		function cetakLaporan() {
			window.print();
		}
	</script>
</body>
</html>

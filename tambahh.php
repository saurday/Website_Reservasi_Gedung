<!DOCTYPE html>
<html>
<head>
	<style>
		body {
			font-family: Arial, sans-serif;
			display: flex;
			flex-direction: column; /* Added to stack navbar and table vertically */
			align-items: center;
			height: 100vh;
			margin: 0; /* Added to remove default margin */
		}

		.container {
			margin-top: 80px; /* Added margin-top to create space between navbar and container */
		}

		.card {
			width: 300px;
			border: 1px solid #ccc;
			border-radius: 5px;
			padding: 20px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}

		h3 {
			color: blue;
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}

		td {
			padding: 5px;
		}

		input[type="date"],
		input[type="text"],
		input[type="submit"] {
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
		}

		.navbar {
			display: flex;
			background-color: rgb(110, 184, 237);
			color: white;
			justify-content: space-around;
			height: 60px;
			align-items: center;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			z-index: 999;
			width: 100%; /* Added to make the navbar full width */
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
		<a href="#" class="logo">EventSpace Solutions</BR></a>
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
		<div class="card">
			<a href="CRUD.php">KEMBALI</a>
			<br/>
			<br/>
			<h3>FORM RESERVASI GEDUNG</h3>
			<form method="post" action="tambah_aksi.php">
				<table>
					<tr>
						<td>Tanggal Pemesanan</td>
						<td><input type="date" name="tgl" required></td>
					</tr>
					<tr>			
						<td>Nama Customer</td>
						<td><input type="text" name="nama" required></td>
					</tr>
					<tr>
						<td>Tanggal Awal Sewa</td>
						<td><input type="date" name="tglAwal" required></td>
					</tr>
					<tr>			
						<td>Tanggal Akhir Sewa</td>
						<td><input type="date" name="tglAkhir" required></td>
					</tr>
		            <tr>			
						<td>Pilihan Gedung</td>
						<td><input type="text" name="pilihan" required></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="SIMPAN"></td>
					</tr>		
				</table>
			</form>
		</div>
	</div>
</body>
</html>

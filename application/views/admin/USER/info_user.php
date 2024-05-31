<!DOCTYPE html>
<html>

<head>
	<title>Halaman User</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			line-height: 1.6;
			margin: 0;
			padding: 20px;
			background-color: #f4f4f4;
		}

		h1 {
			text-align: center;
			color: #333;
		}

		.container {
			max-width: 700px;
			margin: 0 auto;
			background-color: #fff;
			padding: 30px;
			border-radius: 5px;
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
		}

		.info {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			margin-bottom: 20px;
		}

		.info p {
			flex-basis: 48%;
			margin-bottom: 10px;
		}

		.logout-btn {
			display: flex;
			justify-content: flex-end;
			margin-top: 10px;
		}

		input[type="submit"] {
			background-color: #333;
			color: #fff;
			border: 0;
			padding: 8px 20px;
			border-radius: 5px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #444;
		}
	</style>
</head>

<body>
	<h1>Selamat datang di halaman user</h1>
	<div class="container">
		<?php
		// Cek apakah user sudah login
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		if (isset($_SESSION['id_user'])) {
			// Load database
			$this->load->database(); // memuat koneksi database
			// Ambil informasi user dari database
			$id_user = $_SESSION['id_user'];
			$query = $this->db->get_where('customer', array('id_user' => $id_user));
			$row = $query->row();
			if ($row) {
				echo "<h2>Informasi User:</h2>";
				echo "<div class='info'>";
				echo "<p>ID User: " . $row->id_user . "</p>";
				echo "<p>Nama Lengkap: " . $row->namaawal . " " . $row->namaakhir . "</p>";
				echo "<p>Kewarganegaraan: " . $row->kewarganegaraan . "</p>";
				echo "<p>No. Identitas: " . $row->no_identitas . "</p>";
				echo "<p>Tanggal Lahir: " . $row->dob . "</p>";
				echo "<p>Alamat: " . $row->alamat_nasabah . "</p>";
				echo "<p>Jenis Pekerjaan: " . $row->jenis_pekerjaan . "</p>";
				echo "<p>Nama Instansi: " . $row->nama_instansi . "</p>";
				echo "<p>Kota: " . $row->kota . "</p>";
				echo "<p>Provinsi: " . $row->provinsi . "</p>";
				echo "<p>Saldo: Rp." . number_format($row->saldo, 0, ',', '.') . "</p>";
			} else {
				echo "User not found.";
			}
			// tambahkan tombol untuk menuju halaman transfer
			echo '<form action="' . base_url('/oprec/user_transfer_login') . '" method="post"><input type="submit" name="submit" value="Transfer"></form>';
			// tambahkan tombol untuk melihat transaksi history
			echo '<form action="' . base_url('/oprec/user_history') . '" method="post"><input type="submit" name="submit" value="History"></form>';
		} else {
			// Alihkan ke halaman login jika user belum login
			header("Location: " . base_url('/oprec/user_home'));
		}
		?>
		<a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
			<i class="si si-logout mr-5"></i> Sign Out
		</a>
</body>

</html>
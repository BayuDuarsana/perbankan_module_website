<!DOCTYPE html>
<html>

<head>
	<title>Transfer History</title>
</head>
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

	table {
		margin: 0 auto;
		border-collapse: collapse;
		width: 50%;
		margin-bottom: 20px;
	}

	th,
	td {
		padding: 12px;
		text-align: middle;
		border: 1px solid #ccc;
	}

	th {
		background-color: #333;
		color: #fff;
	}

	.back-btn {
		display: flex;
		justify-content: flex-end;
		margin-top: 10px;
		padding-right: 25%;
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

<body>
	<h1>Transfer History</h1>
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

			// Mengecek apakah user sudah login
			if (isset($_SESSION['id_user'])) {
				// Jika user sudah login, ambil id user dari session
				$id_user = $_SESSION['id_user'];
				// Koneksi ke database
				$conn = mysqli_connect("localhost", "root", "", "manlan");
				// Query untuk menampilkan riwayat transfer dari user yang login
				$sql = "SELECT * FROM transaksi WHERE id_pengirim='$id_user' OR id_penerima='$id_user' ORDER BY tanggal DESC";
				$result = mysqli_query($conn, $sql);

				// Jika ada riwayat transfer, tampilkan dalam bentuk tabel
				if (mysqli_num_rows($result) > 0) {
					echo "<table border='1'>";
					echo "<tr><th>Transaction ID</th><th>Sender ID User</th><th>Recipient ID User</th><th>Amount</th><th>Timestamp</th></tr>";

					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr><td>" . $row['id'] . "</td><td>" . $row['id_pengirim'] . "</td><td>" . $row['id_penerima'] . "</td><td>Rp." . number_format($row['jumlah'], 0, ',', '.') . "</td><td>" . $row['tanggal'] . "</td></tr>";
					}

					echo "</table>";
				} else {
					// Jika tidak ada riwayat transfer, tampilkan pesan
					echo "Tidak ada riwayat transfer ditemukan";
				}

				// Tutup koneksi database
				mysqli_close($conn);
				// Tampilkan tombol "Back" untuk kembali ke halaman sebelumnya
				echo '<form action="' . base_url('/oprec/user_info_user') . '" class="back-btn" method="post"><input type="submit" name="back" value="Back"></form>';
			} else {
				// Jika user belum login, redirect ke halaman login
				header("Location: " . base_url('/oprec/user_login'));
			}
		}
	}
	?>
</body>

</html>

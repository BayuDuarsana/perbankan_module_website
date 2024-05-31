<!DOCTYPE html>
<html>

<head>
	<title>Transaksi</title>
</head>

<body>
	<!-- Main Container Transaksi-->
	<main id="main-container">
		<div class="content">
			<nav class="breadcrumb bg-white push">
				<a class="breadcrumb-item" href="">Perbankan</a>
				<span class="breadcrumb-item active">TL</span>
				<span class="breadcrumb-item active">Transfer</span>
			</nav>

			<!-- Transfer -->
			<div class="block block-rounded">
				<div class="block-content">
					<h2 class="text-left">Transfer</h2>
					<form action="" method="post">
						<div class="form-group">
							<label for="id_pengirim">Nomor rekening pengirim :</label>
							<select name="id_pengirim" class="form-control" required>
								<option value="">Rekening</option>
								<?php foreach ($data as $row) { ?>
									<option value="<?php echo $row['nomor_rekening'] ?>">
										<?php echo $row['nomor_rekening'] ?>
									</option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="id_penerima">Nomor rekening penerima :</label>
							<select name="id_penerima" class="form-control" required>
								<option value="">Rekening</option>
								<?php foreach ($data as $row) { ?>
									<option value="<?php echo $row['nomor_rekening'] ?>">
										<?php echo $row['nomor_rekening'] ?>
									</option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="jumlah_transfer">Jumlah Transfer:</label>
							<input type="number" name="jumlah_transfer" class="form-control"
								placeholder="Masukkan jumlah transfer" required>
						</div>
						<div class="form-group">
							<input type="submit" name="submit_transfer" value="Kirim" class="btn btn-primary">
						</div>
					</form>

					<?php if (isset($_POST['submit_transfer'])) {
						$id_pengirim = $_POST['id_pengirim'];
						$id_penerima = $_POST['id_penerima'];
						$jumlah_transfer = $_POST['jumlah_transfer'];
						$tanggal = date('Y-m-d H:i:s'); // Get the current date

						$sql = "SELECT saldo FROM (SELECT nomor_rekening, saldo FROM rekening_individu UNION ALL SELECT nomor_rekening, saldo FROM rekening_perusahaan) AS rek WHERE nomor_rekening='$id_pengirim'";
						$result = $this->db->query($sql);
						$saldo = 0;
						if ($result->num_rows() > 0) {
							$row = $result->row_array();
							$saldo = $row['saldo'];
						}

						if ($jumlah_transfer > $saldo) {
							echo "<div class='alert alert-danger'>Jumlah transfer melebihi saldo!</div>";
						} else {
							$sql1 = "UPDATE rekening_individu SET saldo=saldo-$jumlah_transfer WHERE nomor_rekening='$id_pengirim'";
							$sql2 = "UPDATE rekening_perusahaan SET saldo=saldo-$jumlah_transfer WHERE nomor_rekening='$id_pengirim'";
							$sql3 = "UPDATE rekening_individu SET saldo=saldo+$jumlah_transfer WHERE nomor_rekening='$id_penerima'";
							$sql4 = "UPDATE rekening_perusahaan SET saldo=saldo+$jumlah_transfer WHERE nomor_rekening='$id_penerima'";
							$sql5 = "INSERT INTO ttransaksi (id_transaksi, kode_transaksi, nomor_rekening, jumlah, tanggal_waktu, staff, status, keterangan, gl_debet, gl_credit) VALUES (NULL,'TRF','$id_pengirim',$jumlah_transfer,'$tanggal','Teller','Transfer','Transfer dari $id_pengirim ke $id_penerima', '$id_pengirim', '$id_penerima')";
							$this->db->query($sql1);
							$this->db->query($sql2);
							$this->db->query($sql3);
							$this->db->query($sql4);
							$this->db->query($sql5);
							// set nilai variabel
							$kode_transaksi = 'TRF';
							$tanggal = date('Y-m-d');
							$nomor_rekening = $id_pengirim;
							$keterangan = 'Transfer dari ' . $id_pengirim . ' ke ' . $id_penerima;
							$gl_debet = $id_pengirim;
							$gl_credit = $id_penerima;
							$jumlah = $jumlah_transfer;

							// tampilkan hasil transaksi
							echo "<div class='block block-rounded'>";
							echo "<div class='block-content'>";
							echo "<div class='alert alert-success'>";
							echo "<p>Kode Transaksi: " . $kode_transaksi . "</p>";
							echo "<p>Tanggal: " . $tanggal . "</p>";
							echo "<p>Nomor Bukti: " . $nomor_rekening . "</p>";
							echo "<p>Keterangan: " . $keterangan . "</p>";
							echo "<p>G.L Debet: " . $gl_debet . "</p>";
							echo "<p>G.L Credit: " . $gl_credit . "</p>";
							echo "<p>Jumlah: " . $jumlah . "</p>";
							echo "</div>";
							echo "</div>";
							echo "</div>";
						}
					} ?>

				</div>
			</div>
		</div>
	</main>
	<!-- END Main Container -->

</body>

</html>

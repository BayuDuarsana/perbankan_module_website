<!DOCTYPE html>
<html>

<head>
	<title>Setor Tunai</title>
</head>

<body>
	<!-- Main Container Setor Tunai-->
	<main id="main-container">
		<div class="content">
			<nav class="breadcrumb bg-white push">
				<a class="breadcrumb-item" href="">Perbankan</a>
				<span class="breadcrumb-item active">TL</span>
				<span class="breadcrumb-item active">Setor Tunai</span>
			</nav>

			<!-- Setor Tunai -->
			<div class="block block-rounded">
				<div class="block-content">
					<h2 class="text-left">Setor Tunai</h2>
					<?php
					$this->load->database(); // memuat koneksi database
					$query = $this->db->query('SELECT nomor_rekening, saldo FROM rekening_individu UNION ALL SELECT nomor_rekening, saldo FROM rekening_perusahaan');
					$data = $query->result_array(); // mengambil hasil query dalam bentuk array
					?>
					<form action="" method="post">
						<div class="form-group">
							<label for="id_pengirim">Nomor rekening</label>
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
							<label for="jumlah">Jumlah:</label>
							<input type="number" name="jumlah" class="form-control" step="0.01" required>
						</div>
						<div class="form-group">
							<input type="submit" name="submit_setor" value="Setor Tunai" class="btn btn-primary">
						</div>
					</form>

					<?php echo $success_message; ?>
				</div>
			</div>
		</div>
	</main>
	<!-- END Main Container -->
</body>

</html>

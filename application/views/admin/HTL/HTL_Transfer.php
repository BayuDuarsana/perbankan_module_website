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
				<span class="breadcrumb-item active">HTL</span>
				<span class="breadcrumb-item active">Transfer</span>
			</nav>

			<!-- Transfer -->
			<div class="block block-rounded">
				<div class="block-content">
					<h2 class="text-left">Transfer</h2>
					<?php if (isset($result_message)): ?>
    <div class='alert alert-success'>
        <p>Kode Transaksi: <?php echo $result_message['kode_transaksi']; ?></p>
        <p>Tanggal: <?php echo $result_message['tanggal']; ?></p>
        <p>Nomor Bukti: <?php echo $result_message['nomor_rekening']; ?></p>
        <p>Keterangan: <?php echo $result_message['keterangan']; ?></p>
        <p>G.L Debet: <?php echo $result_message['gl_debet']; ?></p>
        <p>G.L Credit: <?php echo $result_message['gl_credit']; ?></p>
        <p>Jumlah: <?php echo $result_message['jumlah']; ?></p>
    </div>
<?php endif; ?>


					<form action="" method="post">
						<div class="form-group">
							<label for="id_pengirim">Nomor rekening pengirim :</label>
							<select name="id_pengirim" class="form-control" required>
								<option value="">Rekening</option>
								<?php foreach ($rekenings as $row): ?>
									<option value="<?php echo $row['nomor_rekening']; ?>">
										<?php echo $row['nomor_rekening']; ?> (Saldo: <?php echo $row['saldo']; ?>)
									</option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label for="id_penerima">Nomor rekening penerima :</label>
							<select name="id_penerima" class="form-control" required>
								<option value="">Rekening</option>
								<?php foreach ($rekenings as $row): ?>
									<option value="<?php echo $row['nomor_rekening']; ?>">
										<?php echo $row['nomor_rekening']; ?> (Saldo: <?php echo $row['saldo']; ?>)
									</option>
								<?php endforeach; ?>
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
				</div>
			</div>
		</div>
	</main>
	<!-- END Main Container -->
</body>
</html>

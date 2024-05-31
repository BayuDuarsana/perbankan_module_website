<main id="main-container">
	<div class="content">
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Perbankan</a>
			<span class="breadcrumb-item active">HTL</span>
			<span class="breadcrumb-item active">Daftar Perbaikan Transaksi
			</span>
			<span class="breadcrumb-item active">
			</span>
		</nav>
		<!-- Tabel Transaksi -->
		<div class="block block-rounded">
            <div class="block-content">
		<div class="block block-rounded">
			<div class="block-content">
			<div class="table-responsive">
                            <table class="table table-bordered table-striped table-vcenter" id="tabel-peserta">
                                <thead>
						<tr>
							<th>Kode</th>
							<th>Nomor Rekening</th>
							<th>Jumlah</th>
							<th>Tanggal & Waktu</th>
							<th>Staff</th>
							<th>Status</th>
							<th>Keterangan</th>
							<th>GL Debet</th>
							<th>GL Credit</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result as $row) { ?>
							<tr>
								<td>
									<?php echo $row["kode_transaksi"]; ?>
								</td>
								<td>
									<?php echo $row["nomor_rekening"]; ?>
								</td>
								<td>Rp <?php echo number_format($row["jumlah"], 0, ',', '.'); ?></td>
								<td>
									<?php echo $row["tanggal_waktu"]; ?>
								</td>
								<td>
									<?php echo $row["staff"]; ?>
								</td>
								<td>
									<?php echo $row["status"]; ?>
								</td>
								<td>
									<?php echo $row["keterangan"]; ?>
								</td>
								<td>
									<?php echo $row["gl_debet"]; ?>
								</td>
								<td>
									<?php echo $row["gl_credit"]; ?>
								</td>
								<td>
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary" data-toggle="modal"
										data-target="#editModal<?php echo $row['id_transaksi']; ?>"
										data-id_transaksi="<?php echo $row['id_transaksi']; ?>"
										data-jumlah="<?php echo $row['jumlah']; ?>">
										Edit
									</button>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
						</div>
						</div>
			</div>
		</div>
	</div>
	</div>
	<!-- Edit Modal -->
	<?php foreach ($result as $row) { ?>
		<div class="modal fade" id="editModal<?php echo $row['id_transaksi']; ?>" tabindex="-1" role="dialog"
			aria-labelledby="editModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="editModalLabel">Edit Transaksi</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="" method="post">
						<div class="modal-body">
							<input type="hidden" name="id_transaksi" value="<?= $row['id_transaksi'] ?>">
							<input type="hidden" name="jumlah_lama" value="<?= $row['jumlah'] ?>">
							<input type="hidden" name="gl_debet" value="<?= $row['gl_debet'] ?>">
							<input type="hidden" name="gl_credit" value="<?= $row['gl_credit'] ?>">
							<div class="form-group">
								<label for="jumlah_baru">Jumlah Baru:</label>
								<input type="number" name="jumlah_baru" id="jumlah_baru" class="form-control"
									placeholder="Masukkan jumlah baru" value="<?= $row['jumlah'] ?>" required>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" name="edit" class="btn btn-primary">Save changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php } ?>


</main>
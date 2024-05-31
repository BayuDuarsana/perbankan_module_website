<!-- Main Container -->
<main id="main-container">
	<div class="content">
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Perbankan</a>
			<span class="breadcrumb-item active">HTL</span>
			<span class="breadcrumb-item active">Pemeliharaan Bunga</span>
			<span class="breadcrumb-item active">
			</span>
		</nav>
		<div class="block block-rounded">
			<div class="block-content">
				<div class="block block-rounded">
					<div class="block-content">
						<?php ?>
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-vcenter" id="tabel-peserta">
								<thead>
									<!-- ini table nya -->
									<tr class="table-active">
										<th class="text-center" style="width: 25%;"><b>jenis_pemilik_rekening</b></th>
										<th class="text-center" style="width: 25%;"><b>nomor_rekening</b></th>
										<th class="text-center" style="width: 25%;"><b>saldo</b></th>
										<th class="text-center" style="width: 25%;"><b>bunga</b></th>
										<th class="text-center" style="width: 5%;"><b>Aksi</b></th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($data as $detail):
										?>
										<tr>
											<td>
												<!-- jenis_pemilik_rekening -->
												<?= $detail['jenis_pemilik_rekening'] ?>
											</td>
											<td>
												<!-- nomor_rekening -->
												<?= $detail['nomor_rekening'] ?>
											</td>
											<td>
												<!-- Saldo -->
												<?= "Rp " . number_format($detail['saldo'], 0, ',', '.') ?>
											</td>
											<td>
												<!-- bunga -->
												<?= $detail['bunga'] ?>
											</td>
											<td>
												<!-- aksi -->
												<button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
													data-target="#edit<?= $detail['nomor_rekening'] ?>">Edit</button>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<!-- END Main Container -->


<!-- modal edit -->
<?php foreach ($data as $detail): ?>
	<div class="modal fade" id="edit<?= $detail['nomor_rekening'] ?>" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="" method="post">
					<div class="modal-body">
						<div class="form-group">
							<label>Bunga</label>
							<select name="bunga" class="form-control">
								<option value="5%" <?= $detail['bunga'] == '5%' ? 'selected' : '' ?>>5%</option>
								<option value="10%" <?= $detail['bunga'] == '10%' ? 'selected' : '' ?>>10%</option>
								<option value="15%" <?= $detail['bunga'] == '15%' ? 'selected' : '' ?>>15%</option>
								<option value="20%" <?= $detail['bunga'] == '20%' ? 'selected' : '' ?>>20%</option>
							</select>
						</div>
						<input type="hidden" name="nomor_rekening" value="<?= $detail['nomor_rekening'] ?>">
						<input type="hidden" name="jenis_pemilik_rekening" value="<?= $detail['jenis_pemilik_rekening'] ?>">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach; ?>
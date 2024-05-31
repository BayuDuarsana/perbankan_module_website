<!-- Main Container -->
<main id="main-container">
	<!-- Page Content -->
	<d class="content">
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Perbankan</a>
			<span class="breadcrumb-item active">CS</span>
			<span class="breadcrumb-item active">Daftar Rekening Perusahaan</span>
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
										<th class="text-center" style="width: 20%;"><b>penanggung_jawab_ktp</b></th>
										<th class="text-center" style="width: 20%;"><b>kewarganegaraan</b></th>
										<th class="text-center" style="width: 20%;"><b>provinsi</b></th>
										<th class="text-center" style="width: 20%;"><b>kota</b></th>
										<th class="text-center" style="width: 20%;"><b>nama_perusahaan</b></th>
										<th class="text-center" style="width: 20%;"><b>jenis_rekening</b></th>
										<th class="text-center" style="width: 20%;"><b>bunga</b></th>
										<th class="text-center" style="width: 20%;"><b>status rekening</b></th>
										<th class="text-center" style="width: 20%;"><b>nomor_rekening</b></th>
										<th class="text-center" style="width: 20%;"><b>saldo</b></th>
										<th class="text-center" style="width: 20%;"><b>tanggal_pembukaan</b></th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($data as $detail):
										?>
										<tr>
											<td>
												<!-- penanggung_jawab_ktp -->
												<?= $detail['penanggung_jawab_ktp'] ?>
											</td>
											<td>
												<!-- kewarganegaraan -->
												<?= $detail['kewarganegaraan'] ?>
											</td>
											<td>
												<!-- provinsi -->
												<?= $detail['provinsi'] ?>
											</td>
											<td>
												<!-- kota -->
												<?= $detail['kota'] ?>
											</td>
											<td>
												<!-- nama_perusahaan -->
												<?= $detail['nama_perusahaan'] ?>
											</td>
											<td>
												<!-- jenis_rekening -->
												<?= $detail['jenis_rekening'] ?>
											</td>
											<td>
												<!-- bunga -->
												<?= $detail['bunga'] ?>
											</td>
											<td>
												<!-- status_rekening -->
												<?= $detail['status_rekening'] ?>
											</td>
											<td>
												<!-- status_rekening -->
												<?= $detail['nomor_rekening'] ?>
											</td>
											<td>
												<!-- jenis_rekening -->
												<?= $detail['saldo'] ?>
											</td>
											<td>
												<!-- bunga -->
												<?= $detail['tanggal_pembukaan'] ?>
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
	</d>
	<!-- END Page Content -->
</main>
<!-- END Main Container -->
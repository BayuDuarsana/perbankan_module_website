<?php
// connect to database
$this->load->database(); // memuat koneksi database

$query = $this->db->query("SELECT nomor_rekening, saldo, status_rekening, jenis_rekening, jenis_pemilik_rekening FROM rekening_perusahaan
                            UNION ALL
                            SELECT nomor_rekening, saldo, status_rekening, jenis_rekening, jenis_pemilik_rekening FROM rekening_individu"); // menjalankan query
$data = $query->result_array(); // mengambil hasil query dalam bentuk array
?>
<!-- Main Container -->
<main id="main-container">
	<!-- Page Content -->
	<div class="content">

		<!-- ini file berkas nya yang staff -->
		<!-- Staff -->
		<!-- ini panel atas nya -->
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Perbankan</a>
			<span class="breadcrumb-item active">CSO</span>
			<span class="breadcrumb-item active">Daftar Rekening</span>
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
										<th class="text-center" style="width: 25%;"><b>Nomor Rekening</b></th>
										<th class="text-center" style="width: 25%;"><b>Saldo</b></th>
										<th class="text-center" style="width: 25%;"><b>Status Rekening</b></th>
										<th class="text-center" style="width: 25%;"><b>Jenis Rekening</b></th>
										<th class="text-center" style="width: 25%;"><b>rekening</b></th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($data as $detail): ?>
									<tr>
										<td>
											<!-- Nomor Rekening -->
											<?= $detail['nomor_rekening'] ?>
										</td>
										<td>
											<!-- Saldo -->
											<?= "Rp " . number_format($detail['saldo'], 0, ',', '.') ?>
										</td>
										<td>
											<!-- Status Rekening -->
											<?= $detail['status_rekening'] ?>
										</td>
										<td>
											<!-- Jenis Rekening -->
											<?= $detail['jenis_rekening'] ?>
										</td>
										<td>
											<!-- Rekening -->
											<?= $detail['jenis_pemilik_rekening'] ?>
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
	<!-- END Page Content -->
</main>
<!-- END Main Container -->
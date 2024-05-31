<!-- Main Container -->
<main id="main-container">
	<div class="content">
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Perbankan</a>
			<span class="breadcrumb-item active">CS</span>
			<span class="breadcrumb-item active">Daftar Nasabah individu</span>
		</nav>
		<div class="block block-rounded">
			<div class="block-content">
				<div class="block block-rounded">
					<div class="block-content">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-vcenter" id="tabel-peserta">
								<thead>
									<tr class="table-active">
										<th class="text-center" style="width: 20%;"><b>Nama</b></th>
										<th class="text-center" style="width: 20%;"><b>No. Identitas KTP</b></th>
										<th class="text-center" style="width: 20%;"><b>Tanggal Lahir</b></th>
										<th class="text-center" style="width: 20%;"><b>Alamat</b></th>
										<th class="text-center" style="width: 20%;"><b>Nomor Telepon</b></th>
										<th class="text-center" style="width: 20%;"><b>Action</b></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($individu as $individu): ?>
										<tr>
											<td>
												<?= $individu['nama'] ?>
											</td>
											<td>
												<?= $individu['no_identitas_ktp'] ?>
											</td>
											<td>
												<?= $individu['tanggal_lahir'] ?>
											</td>
											<td>
												<?= $individu['alamat'] ?>
											</td>
											<td>
												<?= $individu['nomor_telpon'] ?>
											</td>
											<td class="text-center">
												<button type="button" class="btn btn-primary" data-toggle="modal"
													data-target="#edit<?= $individu['no_identitas_ktp'] ?>">Show
													Rekening</button>
											</td>
										</tr>
										<!-- Modal Edit -->
										<div class="modal fade" id="edit<?= $individu['no_identitas_ktp'] ?>" tabindex="-1"
											role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
														<button type="button" class="close" data-dismiss="modal"
															aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<form action="<?= base_url('Cs/update_rekening_individu') ?>"
														method="post">
														<div class="modal-body">
															<?php
															$rekening_list = $this->db->get_where('rekening_individu', array('no_identitas_ktp' => $individu['no_identitas_ktp']))->result_array();
															foreach ($rekening_list as $rekening): ?>
																<div class="form-group">
																	<label>Rekening
																		<?= $rekening['nomor_rekening'] ?> | Saldo
																		<?= number_format($rekening['saldo'], 2, ',', '.') ?>
																	</label>
																</div>
															<?php endforeach; ?>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary"
																data-dismiss="modal">Close</button>
														</div>
													</form>
												</div>
											</div>
										</div>
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
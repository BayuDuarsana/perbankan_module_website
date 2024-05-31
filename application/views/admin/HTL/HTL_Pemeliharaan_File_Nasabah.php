<!-- Main Container -->
<main id="main-container">
	<!-- Page Content -->
	<div class="content">
		<!-- Daftar Perusahaan -->
		<div id="daftar-perusahaan">
			<nav class="breadcrumb bg-white push">
				<a class="breadcrumb-item" href="">Perbankan</a>
				<span class="breadcrumb-item active">HTL</span>
				<span class="breadcrumb-item active">pemeliharaan file nasabah</span>
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
											<th class="text-center" style="width: 20%;"><b>npwp</b></th>
											<th class="text-center" style="width: 20%;"><b>nib</b></th>
											<th class="text-center" style="width: 20%;"><b>nama perusahaan</b></th>
											<th class="text-center" style="width: 20%;"><b>penanggung jawab ktp</b></th>
											<th class="text-center" style="width: 20%;"><b>Show Rekening</b></th>
											<th class="text-center" style="width: 20%;"><b>Action</b></th>
										</tr>
									</thead>
									<tbody>
										<?php
										foreach ($data as $detail):
											?>
											<tr>
												<td>
													<!-- npwp -->
													<?= $detail['npwp'] ?>
												</td>
												<td>
													<!-- nib -->
													<?= $detail['nib'] ?>
												</td>
												<td>
													<!-- nama_perusahaan -->
													<?= $detail['nama_perusahaan'] ?>
												</td>
												<td>
													<!-- penanggung_jawab_ktp -->
													<?= $detail['penanggung_jawab_ktp'] ?>
												</td>
												<td class="text-center">
													<button type="button" class="btn btn-primary" data-toggle="modal"
														data-target="#edit<?= $detail['penanggung_jawab_ktp'] ?>">Show
														Rekening</button>
												</td>
												<td class="text-center">
													<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
														data-target="#deleteModal<?= $detail['penanggung_jawab_ktp'] ?>">Hapus</button>
												</td>
											</tr>
											<!-- Modal Delete -->
											<div class="modal fade" id="deleteModal<?= $detail['penanggung_jawab_ktp'] ?>"
												tabindex="-1" role="dialog"
												aria-labelledby="deleteModalLabel<?= $detail['penanggung_jawab_ktp'] ?>"
												aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<form action="" method="post">
															<div class="modal-header">
																<h5 class="modal-title"
																	id="deleteModalLabel<?= $detail['penanggung_jawab_ktp'] ?>">
																	Hapus
																	Rekening</h5>
																<button type="button" class="close" data-dismiss="modal"
																	aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																Apakah anda yakin ingin menghapus rekening ini?
															</div>
															<div class="modal-footer">
																<input type="hidden" name="penanggung_jawab_ktp"
																	value="<?= $detail['penanggung_jawab_ktp'] ?>">
																<button type="button" class="btn btn-secondary"
																	data-dismiss="modal">Batal</button>
																<button type="submit" name="hapus"
																	class="btn btn-primary">Hapus</button>
															</div>
														</form>
													</div>
												</div>
											</div>

											<div class="modal fade" id="edit<?= $detail['penanggung_jawab_ktp'] ?>"
												tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
												aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLongTitle">Data Rekening
															</h5>
															<button type="button" class="close" data-dismiss="modal"
																aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<?php
															$rekening_list = $this->db->get_where('rekening_perusahaan', array('penanggung_jawab_ktp' => $detail['penanggung_jawab_ktp']))->result_array(); foreach ($rekening_list as $rekening):
																?>
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


			<!-- Daftar individu -->
			<div id="daftar-individu">
				<nav class="breadcrumb bg-white push">
					<a class="breadcrumb-item" href="">Perbankan</a>
					<span class="breadcrumb-item active">CS</span>
					<span class="breadcrumb-item active">Daftar individu</span>
				</nav>
				<div class="block block-rounded">
					<div class="block-content">
						<div class="block block-rounded">
							<div class="block-content">
								<div class="table-responsive">
									<!-- Tabel Individu -->
									<!-- ... -->
									<table class="table table-bordered table-striped table-vcenter" id="tabel-peserta">
										<thead>
											<tr class="table-active">
												<th class="text-center" style="width: 20%;"><b>Nama</b></th>
												<th class="text-center" style="width: 20%;"><b>No. Identitas KTP</b>
												</th>
												<th class="text-center" style="width: 20%;"><b>Tanggal Lahir</b></th>
												<th class="text-center" style="width: 20%;"><b>Alamat</b></th>
												<th class="text-center" style="width: 20%;"><b>Nomor Telepon</b></th>
												<th class="text-center" style="width: 20%;"><b>Show Rekening</b></th>
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
												<div class="modal fade" id="edit<?= $individu['no_identitas_ktp'] ?>"
													tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
													aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLongTitle">Edit Data
																</h5>
																<button type="button" class="close" data-dismiss="modal"
																	aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<form action="<?= base_url('Cs/update_rekening_individu') ?>"
																method="post">
																<div class="modal-body">
																	<?php
																	$rekening_list = $this->db->get_where('rekening_individu', array('no_identitas_ktp' => $individu['no_identitas_ktp']))->result_array(); foreach ($rekening_list as $rekening): ?>
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
																	<button type="submit" class="btn btn-primary">Save
																		changes</button>
																</div>
															</form>
														</div>
													</div>
																	</div>
												<!-- Modal Edit -->
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
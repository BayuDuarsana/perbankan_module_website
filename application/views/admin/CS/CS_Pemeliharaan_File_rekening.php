<main id="main-container">
	<div class="content">
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Perbankan</a>
			<span class="breadcrumb-item active">CS</span>
			<span class="breadcrumb-item active">Pemeliharaan File Rekening</span>
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
										<th class="text-center" style="width: 20%;"><b>Nomor Rekening</b></th>
										<th class="text-center" style="width: 20%;"><b>Saldo</b></th>
										<th class="text-center" style="width: 20%;"><b>Status Rekening</b></th>
										<th class="text-center" style="width: 20%;"><b>Jenis Rekening</b></th>
										<th class="text-center" style="width: 20%;"><b>bunga</b></th>
										<th class="text-center" style="width: 20%;"><b>Rekening</b></th>
										<th class="text-center" style="width: 20%;"><b>Action</b></th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($data as $detail):
										?>
										<tr>
											<td>
												<?= $detail['nomor_rekening'] ?>
											</td>
											<td>
												<?= "Rp " . number_format($detail['saldo'], 0, ',', '.') ?>
											</td>
											<td>
												<?= $detail['status_rekening'] ?>
											</td>
											<td>
												<?= $detail['jenis_rekening'] ?>
											</td>
											<td>
												<?= $detail['bunga'] ?>
											</td>
											<td>
												<?= $detail['jenis_pemilik_rekening'] ?>
											</td>
											<td class="text-center">
												<button type="button" class="btn btn-primary" data-toggle="modal"
													data-target="#edit<?= $detail['nomor_rekening'] ?>">Edit</button>
											</td>
										</tr>
										<div class="modal fade" id="edit<?= $detail['nomor_rekening'] ?>" tabindex="-1"
											role="dialog" aria-labelledby="editModalLabel<?= $detail['nomor_rekening'] ?>"
											aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<form action="" method="post">
														<div class="modal-header">
															<h5 class="modal-title"
																id="editModalLabel<?= $detail['nomor_rekening'] ?>">Edit
																Data Rekening</h5>
															<button type="button" class="close" data-dismiss="modal"
																aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="row justify-content-center">
																<div class="col-md-12">
																	<div class="form-group row">
																		<div class="col-md-6">
																			<input type="hidden" name="nomor_rekening"
																				value="<?= $detail['nomor_rekening'] ?>">
																			<label for="bunga">bunga</label>
																			<select class="form-control" name="bunga"
																				id="bunga">
																				<option value="5%" <? if ($detail['bunga'] == "5%") {
																					echo "selected";
																				} ?>>5%</option>
																				<option value="10%" <? if ($detail['bunga'] == "10%") {
																					echo "selected";
																				} ?>>10%</option>
																				<option value="15%" <? if ($detail['bunga'] == "15%") {
																					echo "selected";
																				} ?>>15%</option>
																				<option value="20%" <? if ($detail['bunga'] == "20%") {
																					echo "selected";
																				} ?>>20%</option>
																			</select>
																		</div>
																		<div class="col-md-6">
																			<label for="jenis_rekening">Jenis
																				Rekening</label>
																			<select class="form-control"
																				name="jenis_rekening" id="jenis_rekening">
																				<option value="Giro" <? if (
																					$detail['jenis_rekening'] == "Giro"
																				) {
																					echo "selected";
																				} ?>>Giro
																				</option>
																				<option value="Tabungan" <? if (
																					$detail['jenis_rekening'] == "Tabungan"
																				) {
																					echo "selected";
																				} ?>>
																					Tabungan</option>
																				<option value="Deposito" <? if (
																					$detail['jenis_rekening'] == "Deposito"
																				) {
																					echo "selected";
																				} ?>>
																					Deposito </option>
																			</select>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary"
																data-dismiss="modal">Close</button>
																<?php
																if (isset($_POST['submit'])) {
																	header('Location: ' . base_url() . 'Cs/CS_Pemeliharaan_File_Rekening/');
																}
																?>
															<input type="submit" name="submit" class="btn btn-primary"
																value="Simpan">
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
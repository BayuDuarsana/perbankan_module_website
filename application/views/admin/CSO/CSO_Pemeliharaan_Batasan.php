<main id="main-container">
	<div class="content">
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Perbankan</a>
			<span class="breadcrumb-item active">CSO</span>
			<span class="breadcrumb-item active">Pemeliharaan Batasan</span>
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
										<th class="text-center" style="width: 20%;"><b>ID User</b></th>
										<th class="text-center" style="width: 20%;"><b>Email</b></th>
										<th class="text-center" style="width: 20%;"><b>Nama</b></th>
										<th class="text-center" style="width: 20%;"><b>Sebagai</b></th>
										<!-- <th class="text-center" style="width: 20%;"><b>nama login</b></th> -->
										<th class="text-center" style="width: 5%;"><b>Aksi</b></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as $detail): ?>
										<tr>
											<td>
												<?= $detail['id_user'] ?>
											</td>
											<td>
												<?= $detail['email'] ?>
											</td>
											<td>
												<?= $detail['nama'] ?>
											</td>
											<td>
												<?= $detail['sebagai'] ?>
											</td>
											<!-- <td>
												<?= $detail['npm'] ?>
											</td> -->
											<td>
												<button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
													data-target="#edit<?= $detail['id_user'] ?>">Edit</button>
											</td>
										</tr>
										<!-- modal edit -->
										<div class="modal fade" id="edit<?= $detail['id_user'] ?>" tabindex="-1"
											role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Edit Data Admin</h5>
														<button type="button" class="close" data-dismiss="modal"
															aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<form method="post">
															<div class="form-group">
																<label for="id_user" class="col-form-label">ID User:</label>
																<input type="text" class="form-control" id="id_user"
																	name="id_user" value="<?= $detail['id_user'] ?>"
																	readonly>
															</div>
															<div class="form-group">
																<label for="email" class="col-form-label">Email:</label>
																<input type="text" class="form-control" id="email"
																	name="email" value="<?= $detail['email'] ?>">
															</div>
															<div class="form-group">
																<label for="nama" class="col-form-label">Nama:</label>
																<input type="text" class="form-control" id="nama"
																	name="nama" value="<?= $detail['nama'] ?>">
															</div>
															<div class="form-group">
																<label for="sebagai" class="col-form-label">Sebagai:</label>
																<select class="form-control" id="sebagai" name="sebagai">
																	<option value="teller" <?php if ($detail['sebagai'] == 'teller')
																		echo 'selected'; ?>>
																		Teller</option>
																	<option value="headteller" <?php if ($detail['sebagai'] == 'headteller')
																		echo 'selected'; ?>>Head Teller</option>
																	<option value="customerservice" <?php if ($detail['sebagai'] == 'customerservice')
																		echo 'selected'; ?>>Customer Service</option>
																	<option value="cashoficer" <?php if ($detail['sebagai'] == 'cashoficer')
																		echo 'selected'; ?>>Cash Officer</option>
																	<option value="admin" <?php if ($detail['sebagai'] == 'admin')
																		echo 'selected'; ?>>
																		Admin</option>
																	<option value="staff" <?php if ($detail['sebagai'] == 'staff')
																		echo 'selected'; ?>>
																		Staff</option>
																</select>
															</div>
															<div class="modal-footer">
																<button type="submit" class="btn btn-primary"
																	name="submit">Simpan</button>
																<button type="button" class="btn btn-secondary"
																	data-dismiss="modal">Close</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
										<!-- end modal edit -->
									<?php endforeach; ?>
								</tbody>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

	<div class="content">
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Perbankan</a>
			<span class="breadcrumb-item active">CS</span>
			<span class="breadcrumb-item active">Pendaftaran Nasabah Perusahaan</span>
			<span class="breadcrumb-item active">
			</span>
		</nav>
		<div class="block block-rounded">
			<div class="block-content">
				<div class="block block-rounded">
					<div class="block-content">
					<?php
if (isset($_POST['submit'])) {
    echo "<div class='alert alert-success'>Data berhasil diinput</div>";
}
?>


						<form action="" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="npwp">NPWP</label>
										<input type="number" name="npwp" id="npwp" class="form-control"
											placeholder="Masukkan NPWP" required>
									</div>
									<div class="form-group">
										<label for="nib">NIB</label>
										<input type="number" name="nib" id="nib" class="form-control"
											placeholder="Masukkan NIB" required>
									</div>
									<div class="form-group">
										<label for="nama_perusahaan">Nama Perusahaan</label>
										<input type="text" name="nama_perusahaan" id="nama_perusahaan"
											class="form-control" placeholder="Masukkan Nama Perusahaan" required
											pattern="[A-Za-z\s]+">
									</div>
									<div class="form-group">
										<label for="no_identitas_ktp">No Identitas KTP</label>
										<input type="number" name="no_identitas_ktp" id="no_identitas_ktp"
											class="form-control" placeholder="Masukkan No Identitas KTP" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="penanggung_jawab_ktp									">Penanggung Jawab KTP</label>
										<input type="number" name="penanggung_jawab_ktp" id="penanggung_jawab_ktp"
											class="form-control" placeholder="Masukkan Penanggung Jawab KTP" required>
									</div>
									<div class="form-group">
										<button type="submit" name="submit" class="btn btn-primary">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
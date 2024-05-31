<!-- Main Container -->
<main id="main-container">
	<div class="content">
		<nav class="breadcrumb bg-white push">
			<a class="breadcrumb-item" href="">Perbankan</a>
			<span class="breadcrumb-item active">CS</span>
			<span class="breadcrumb-item active">Pendaftaran Nasabah Individu</span>
			<span class="breadcrumb-item active">
			</span>
		</nav>
		<div class="block block-rounded">
			<div class="block-content">
				<div class="block block-rounded">
					<div class="block-content">
						<?php
						if ($this->session->flashdata('success')) {
							echo "<div class='alert alert-success'>".$this->session->flashdata('success')."</div>";
						}
						?>
						<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
						<form action="<?php echo site_url('Cs/CS_Pendaftaran_Nasabah_Individu'); ?>" method="post">
							<div class="row">
								<div class="col-md-6">
								<div class="form-group">
									<label for="nama">Nama Lengkap</label>
									<input type="text" name="nama" id="nama" class="form-control"
										placeholder="Masukkan Nama Lengkap" value="<?php echo set_value('nama'); ?>" required pattern="[A-Za-z\s]+">
									<?php echo form_error('nama'); ?>
								</div>
									<div class="form-group">
										<label for="no_identitas_ktp">No Identitas KTP</label>
										<input type="number" name="no_identitas_ktp" id="no_identitas_ktp"
											class="form-control" placeholder="Masukkan No Identitas KTP" value="<?php echo set_value('no_identitas_ktp'); ?>" required>
									</div>
									<div class="form-group">
										<label for="tanggal_lahir">Tanggal Lahir</label>
										<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"
											placeholder="Masukkan Tanggal Lahir" value="<?php echo set_value('tanggal_lahir'); ?>" required>
									</div>
									<div class="form-group">
										<label for="alamat">Alamat</label>
										<input type="text" name="alamat" id="alamat" class="form-control"
											placeholder="Masukkan Alamat" value="<?php echo set_value('alamat'); ?>" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="nama_ibu_kandung">Nama Ibu Kandung</label>
										<input type="text" name="nama_ibu_kandung" id="nama_ibu_kandung"
											class="form-control" placeholder="Masukkan Nama Ibu Kandung" value="<?php echo set_value('nama_ibu_kandung'); ?>" required>
									</div>
									<div class="form-group">
										<label for="nomor_telpon">Nomor Telepon</label>
										<input type="number" name="nomor_telpon" id="nomor_telpon" class="form-control"
											placeholder="62+" value="<?php echo set_value('nomor_telpon'); ?>" required>
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

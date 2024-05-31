<!-- Main Container -->
<main id="main-container">
    <div class="content">
        <nav class="breadcrumb bg-white push">
            <a class="breadcrumb-item" href="">Perbankan</a>
            <span class="breadcrumb-item active">CS</span>
            <span class="breadcrumb-item active">Pembukaan Rekening Individu</span>
            <span class="breadcrumb-item active"></span>
        </nav>
        <div class="block block-rounded">
            <div class="block-content">
                <div class="block block-rounded">
                    <div class="block-content">
                                                                                            <!-- Output message -->
                                                                                            <div class="form-group alert-container">
                                        <?php if (isset($output_message)) { ?>
                                            <div class="alert <?php echo $output_class; ?>">
                                                <?php echo $output_message; ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <!-- End output message -->
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="no_identitas_ktp">No Identitas KTP</label>
                                        <input type="number" name="no_identitas_ktp" id="no_identitas_ktp"
                                            class="form-control" placeholder="Masukkan No Identitas KTP" required
                                            minlength="8" maxlength="16">
                                    </div>
									<div class="form-group">
										<label for="kewarganegaraan">Kewarganegaraan</label>
										<select name="kewarganegaraan" id="kewarganegaraan" class="form-control"
											required>
											<option value="WNI">WNI</option>
											<option value="WNA">WNA</option>
										</select>
									</div>
									<div class="form-group">
										<label for="provinsi">Provinsi</label>
										<input type="text" name="provinsi" id="provinsi" class="form-control"
											placeholder="Masukkan provinsi" required pattern="[A-Za-z\s]+">
									</div>
									<div class="form-group">
										<label for="kota">Kota</label>
										<input type="text" name="kota" id="kota" class="form-control"
											placeholder="Masukkan kota" required pattern="[A-Za-z\s]+">
									</div>
									<div class="form-group">
										<label for="pekerjaan">Pekerjaan</label>
										<select name="pekerjaan" id="pekerjaan" class="form-control" required>
											<option value="">-- Pilih Pekerjaan --</option>
											<option value="Pegawai Swasta">Pegawai Swasta</option>
											<option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
											<option value="Wiraswasta">Wiraswasta</option>
											<option value="Mahasiswa/Pelajar">Mahasiswa/Pelajar</option>
											<option value="Lainnya">Lainnya</option>
										</select>
									</div>
									<div class="form-group">
										<label for="nama_instansi">Nama Instansi</label>
										<input type="text" name="nama_instansi" id="nama_instansi" class="form-control"
											placeholder="Masukkan nama_instansi" required pattern="[A-Za-z\s]+">
									</div>
									<div class="form-group">
										<label for="jenis_rekening">Jenis Rekening</label>
										<select name="jenis_rekening" id="jenis_rekening" class="form-control" required>
											<option value="">Pilih Jenis Rekening</option>
											<option value="tabungan">Tabungan</option>
											<option value="deposito">Deposito</option>
											<option value="giro">Giro</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="bunga">Bunga</label>
										<select name="bunga" id="bunga" class="form-control" required>
											<option value="5%">5%</option>
											<option value="10%">10%</option>
											<option value="15%">15%</option>
											<option value="20%">20%</option>
										</select>
									</div>
									<div class="form-group">
										<label for="status_rekening">Status Rekening</label>
										<select name="status_rekening" id="status_rekening" class="form-control"
											required>
											<option value="Aktif" selected>Aktif</option>
											<option value="Non Aktif">Non Aktif</option>
										</select>
									</div>
									<div class="form-group">
										<label for="nomor_rekening">Nomor Rekening</label>
										<input type="number" name="nomor_rekening" id="nomor_rekening"
											class="form-control" placeholder="Masukkan nomor_rekening"
											value="<?php echo rand(100000000, 00000001); ?>" required>
									</div>
									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" name="password" id="password" class="form-control"
											placeholder="Masukkan password" required>
									</div>
									<div class="form-group">
										<label for="saldo">Saldo</label>
										<input type="number" step="0.01" name="saldo" id="saldo" class="form-control"
											placeholder="Masukkan saldo" required>
									</div>
									<div class="form-group">
										<label for="tanggal_pembukaan">Tanggal Pembukaan</label>
										<input type="date" name="tanggal_pembukaan" id="tanggal_pembukaan"
											value="<?php echo date('Y-m-d'); ?>" class="form-control"
											placeholder="Masukkan tanggal_pembukaan" required min="1950-01-01">
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
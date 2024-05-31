<!-- Main Container -->
<main id="main-container">
    <div class="content">
        <nav class="breadcrumb bg-white push">
            <a class="breadcrumb-item" href="">Perbankan</a>
            <span class="breadcrumb-item active">CS</span>
            <span class="breadcrumb-item active">Pembukaan Rekening Perusahaan</span>
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
                                        <label for="penanggung_jawab_ktp">Penanggung Jawab KTP</label>
                                        <input type="number" name="penanggung_jawab_ktp" id="penanggung_jawab_ktp" class="form-control" placeholder="Masukkan Penanggung Jawab KTP" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kewarganegaraan">Kewarganegaraan</label>
                                        <select name="kewarganegaraan" id="kewarganegaraan" class="form-control" required>
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi">Provinsi</label>
                                        <input type="text" name="provinsi" id="provinsi" class="form-control" placeholder="Masukkan Provinsi" required pattern="[A-Za-z\s]+">
                                    </div>
                                    <div class="form-group">
                                        <label for="kota">Kota</label>
                                        <input type="text" name="kota" id="kota" class="form-control" placeholder="Masukkan Kota" required pattern="[A-Za-z\s]+">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_perusahaan">Nama Perusahaan</label>
                                        <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control" placeholder="Masukkan Nama Perusahaan" required pattern="[A-Za-z\s]+">
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
                                    <div class="form-group">
                                        <label for="bunga">Bunga</label>
                                        <select name="bunga" id="bunga" class="form-control" required>
                                            <option value="5%">5%</option>
                                            <option value="10%">10%</option>
                                            <option value="15%">15%</option>
                                            <option value="20%">20%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status_rekening">Status Rekening</label>
                                        <select name="status_rekening" id="status_rekening" class="form-control" required>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Non Aktif">Non Aktif</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor_rekening">Nomor Rekening</label>
                                        <input type="number" name="nomor_rekening" id="nomor_rekening" class="form-control" placeholder="Masukkan Nomor Rekening" value="<?php echo rand(100000000, 00000001); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="saldo">Saldo</label>
                                        <input type="number" step="0.01" name="saldo" id="saldo" class="form-control" placeholder="Masukkan Saldo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_pembukaan">Tanggal Pembukaan</label>
                                        <input type="date" name="tanggal_pembukaan" id="tanggal_pembukaan" value="<?php echo date('Y-m-d'); ?>" class="form-control" placeholder="Masukkan Tanggal Pembukaan" required>
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

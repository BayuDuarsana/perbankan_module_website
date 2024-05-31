<main id="main-container">
    <div class="content">
        <nav class="breadcrumb bg-white push">
            <a class="breadcrumb-item" href="">Perbankan</a>
            <span class="breadcrumb-item active">TL</span>
            <span class="breadcrumb-item active">Daftar Mutasi</span>
        </nav>

        <!-- Mutasi -->
        <div class="block block-rounded">
            <div class="block-content">
                <h2 class="text-left">Mutasi</h2>

                <form action="" method="post">
                    <div class="form-group">
                        <label for="tanggal_awal">Tanggal Awal:</label>
                        <input type="date" name="tanggal_awal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_akhir">Tanggal Akhir:</label>
                        <input type="date" name="tanggal_akhir" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit_filter" value="Tampilkan Mutasi" class="btn btn-primary">
                    </div>
                </form>

                <?php if (isset($error)) { ?>
                    <div class="alert alert-info"><?php echo $error; ?></div>
                <?php } elseif (isset($result)) { ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID Transaksi</th>
                                <th>Kode Transaksi</th>
                                <th>Nomor Rekening</th>
                                <th>Jumlah</th>
                                <th>Tanggal Waktu</th>
                                <th>Staff</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                                <th>GL Debet</th>
                                <th>GL Credit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $row) { ?>
                                <tr>
                                    <td><?php echo $row['id_transaksi']; ?></td>
                                    <td><?php echo $row['kode_transaksi']; ?></td>
                                    <td><?php echo $row['nomor_rekening']; ?></td>
                                    <td><?php echo $row['jumlah']; ?></td>
                                    <td><?php echo $row['tanggal_waktu']; ?></td>
                                    <td><?php echo $row['staff']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td><?php echo $row['keterangan']; ?></td>
                                    <td><?php echo $row['gl_debet']; ?></td>
                                    <td><?php echo $row['gl_credit']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } ?>
            </div>
        </div>
    </div>
</main>

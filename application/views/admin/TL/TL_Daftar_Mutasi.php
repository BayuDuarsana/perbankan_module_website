<!DOCTYPE html>
<html>

<head>
    <title>Mutasi</title>
</head>

<body>
    <!-- Main Container Mutasi-->
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

                    <?php if ($table): ?>
                        <?php echo $table; ?>
                    <?php else: ?>
                        <div class='alert alert-info'>Tidak ada data mutasi pada rentang tanggal yang diberikan.</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
    <!-- END Main Container -->
</body>

</html>

<!-- Main Container -->
<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <nav class="breadcrumb bg-white push">
            <a class="breadcrumb-item" href="">Perbankan</a>
            <span class="breadcrumb-item active">TL</span>
            <span class="breadcrumb-item active">Daftar Mutasi User Setor</span>
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
                                        <th class="text-center" style="width: 20%;"><b>Jumlah</b></th>
                                        <th class="text-center" style="width: 20%;"><b>Tanggal</b></th>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data as $detail):
                                        ?>
                                        <tr>
                                            <td>
                                                <!-- Nomor Rekening -->
                                                <?= $detail['nomor_rekening'] ?>
                                            </td>
                                            <td>
                                                <!-- Jumlah -->
                                                <?= $detail['jumlah'] ?>
                                            </td>
                                            <td>
                                                <!-- tanggal -->
                                                <?= $detail['tanggal_waktu'] ?>
                                            </td>
                                        </tr>
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
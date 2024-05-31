<!-- Main Container -->
<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <nav class="breadcrumb bg-white push">
            <a class="breadcrumb-item" href="">Perbankan</a>
            <span class="breadcrumb-item active">CS</span>
            <span class="breadcrumb-item active">Daftar Nasabah Perusahaan</span>
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
                                        <th class="text-center" style="width: 20%;"><b>npwp</b></th>
                                        <th class="text-center" style="width: 20%;"><b>nib</b></th>
                                        <th class="text-center" style="width: 20%;"><b>nama_perusahaan</b></th>
                                        <th class="text-center" style="width: 20%;"><b>no_identitas_ktp</b></th>
                                        <th class="text-center" style="width: 20%;"><b>penanggung_jawab_ktp</b></th>
                                        <th class="text-center" style="width: 20%;"><b>action</b></th>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($perusahaan as $perusahaan) :
                                    ?>
                                        <tr>
                                            <td>
                                                <!-- npwp -->
                                                <?= $perusahaan['npwp'] ?>
                                            </td>
                                            <td>
                                                <!-- nib -->
                                                <?= $perusahaan['nib'] ?>
                                            </td>
                                            <td>
                                                <!-- nama_perusahaan -->
                                                <?= $perusahaan['nama_perusahaan'] ?>
                                            </td>
                                            <td>
                                                <!-- no_identitas_ktp -->
                                                <?= $perusahaan['no_identitas_ktp'] ?>
                                            </td>
                                            <td>
                                                <!-- penanggung_jawab_ktp -->
                                                <?= $perusahaan['penanggung_jawab_ktp'] ?>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#edit<?= $perusahaan['penanggung_jawab_ktp'] ?>">Show
                                                    Rekening</button>
                                            </td>
                                        </tr>
                                        <!-- Modal Edit -->
                                        <div class="modal fade" id="edit<?= $perusahaan['penanggung_jawab_ktp'] ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="<?= base_url('Cs/update_rekening_perusahaan') ?>"
                                                        method="post">
                                                        <div class="modal-body">
                                                            <?php
                                                            $rekening_list = $this->db->get_where('rekening_perusahaan', array('penanggung_jawab_ktp' => $perusahaan['penanggung_jawab_ktp']))->result_array();
                                                            foreach ($rekening_list as $rekening) : ?>
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
    <!-- END Page Content -->
</main>
<!-- END Main Container -->

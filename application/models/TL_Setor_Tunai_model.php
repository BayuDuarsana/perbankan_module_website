<?php
class TL_Setor_Tunai_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function checkRekeningType($nomor_rekening)
    {
        $query = $this->db->query("SELECT * FROM rekening_perusahaan WHERE nomor_rekening = '$nomor_rekening'");
        if ($query->num_rows() > 0) {
            return 'perusahaan';
        } else {
            return 'individu';
        }
    }

    public function getNama($tipe_rekening, $nomor_rekening)
    {
        if ($tipe_rekening == 'perusahaan') {
            $query = $this->db->query("SELECT nama_perusahaan FROM perusahaan WHERE penanggung_jawab_ktp = (SELECT penanggung_jawab_ktp FROM rekening_perusahaan WHERE nomor_rekening = '$nomor_rekening')");
            if ($query->num_rows() > 0) {
                $row = $query->row();
                return $row->nama_perusahaan;
            }
        } else {
            $query = $this->db->query("SELECT nama FROM individu WHERE no_identitas_ktp = (SELECT no_identitas_ktp FROM rekening_individu WHERE nomor_rekening = '$nomor_rekening')");
            if ($query->num_rows() > 0) {
                $row = $query->row();
                return $row->nama;
            }
        }
    
        return '';
    }
    

    public function updateSaldo($tipe_rekening, $nomor_rekening, $jumlah)
    {
        if ($tipe_rekening == 'perusahaan') {
            $this->db->query("UPDATE rekening_perusahaan SET saldo = saldo + $jumlah WHERE nomor_rekening = '$nomor_rekening'");
        } else {
            $this->db->query("UPDATE rekening_individu SET saldo = saldo + $jumlah WHERE nomor_rekening = '$nomor_rekening'");
        }
    }

    public function insertTtransaksi($kode_transaksi, $nomor_rekening, $jumlah, $tanggal_waktu, $staff, $status, $keterangan, $gl_debet, $gl_credit)
    {
        $this->db->query("INSERT INTO ttransaksi (kode_transaksi, nomor_rekening, jumlah, tanggal_waktu, staff, status, keterangan, gl_debet, gl_credit)
            VALUES ('$kode_transaksi', '$nomor_rekening', '$jumlah', '$tanggal_waktu', '$staff', '$status', '$keterangan', '$gl_debet', '$gl_credit')");
    }
}
?>

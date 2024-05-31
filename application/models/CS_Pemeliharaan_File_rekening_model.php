<?php
class CS_Pemeliharaan_File_rekening_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function updateRekeningData($nomor_rekening, $bunga, $jenis_rekening)
    {
        // Update data rekening_perusahaan
        $this->db->set('bunga', $bunga);
        $this->db->set('jenis_rekening', $jenis_rekening);
        $this->db->where('nomor_rekening', $nomor_rekening);
        $this->db->update('rekening_perusahaan');

        // Update data rekening_individu
        $this->db->set('bunga', $bunga);
        $this->db->set('jenis_rekening', $jenis_rekening);
        $this->db->where('nomor_rekening', $nomor_rekening);
        $this->db->update('rekening_individu');
    }

    public function getRekeningData()
    {
        $query = $this->db->query("SELECT nomor_rekening, saldo, status_rekening, jenis_rekening, bunga, jenis_pemilik_rekening FROM rekening_perusahaan
                                    UNION ALL
                                    SELECT nomor_rekening, saldo, status_rekening, jenis_rekening, bunga, jenis_pemilik_rekening FROM rekening_individu");
        return $query->result_array();
    }
}
?>

<?php
class TL_Daftar_Mutasi_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getMutasiData($tanggal_awal, $tanggal_akhir)
    {
        $query = $this->db->query("SELECT * FROM ttransaksi WHERE tanggal_waktu BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
        return $query->result_array();
    }
}
?>

<?php
class CS_Daftar_Nasabah_Perusahaan_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getPerusahaanData()
    {
        $query = $this->db->get('perusahaan');
        return $query->result_array();
    }
}
?>

<?php
class CS_Daftar_Rekening_Perusahaan_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getRekeningPerusahaanData()
    {
        $query = $this->db->get('rekening_perusahaan');
        return $query->result_array();
    }
}
?>

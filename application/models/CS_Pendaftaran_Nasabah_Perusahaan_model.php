<?php
class CS_Pendaftaran_Nasabah_Perusahaan_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insertPerusahaanData($data)
    {
        return $this->db->insert('perusahaan', $data);
    }
}
?>

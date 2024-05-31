<?php
class CS_Daftar_Nasabah_Individu_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getIndividuData()
    {
        $query = $this->db->get('individu');
        return $query->result_array();
    }
}
?>

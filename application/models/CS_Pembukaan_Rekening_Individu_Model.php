<?php
class CS_Pembukaan_Rekening_Individu_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function checkNoIdentitasKTP($no_identitas_ktp)
    {
        $query = $this->db->query("SELECT * FROM individu WHERE no_identitas_ktp = '$no_identitas_ktp'");
        return $query->num_rows() > 0;
    }

    public function insertRekeningIndividu($data)
    {
        $this->db->insert('rekening_individu', $data);
    }
}
?>

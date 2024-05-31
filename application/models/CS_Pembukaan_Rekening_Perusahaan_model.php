<?php
class CS_Pembukaan_Rekening_Perusahaan_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function checkPenanggungJawabKTP($penanggung_jawab_ktp)
    {
        $query = $this->db->query("SELECT * FROM perusahaan WHERE penanggung_jawab_ktp = '$penanggung_jawab_ktp'");
        return $query->num_rows() > 0;
    }

    public function insertRekeningPerusahaan($data)
    {
        $this->db->insert('rekening_perusahaan', $data);
    }
}
?>

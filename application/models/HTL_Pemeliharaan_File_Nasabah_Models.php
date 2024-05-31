<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HTL_Pemeliharaan_File_Nasabah_Models extends CI_Model {

    public function getPerusahaanData() {
        $query = $this->db->get('perusahaan');
        return $query->result_array();
    }

    public function getIndividuData() {
        $query = $this->db->get('individu');
        return $query->result_array();
    }

    public function hapusPerusahaan($penanggung_jawab_ktp) {
        $this->db->where('penanggung_jawab_ktp', $penanggung_jawab_ktp);
        $this->db->delete('perusahaan');
    }

    public function hapusIndividu($no_identitas_ktp) {
        $new_no_identitas_ktp = 0; // Berikan nilai default atau tentukan nilai baru sesuai kebutuhan

        // Update associated accounts first
        $this->db->where('no_identitas_ktp', $no_identitas_ktp);
        $this->db->update('rekening_individu', array('no_identitas_ktp' => $new_no_identitas_ktp));

        $this->db->where('no_identitas_ktp', $no_identitas_ktp);
        $this->db->delete('individu');
    }
}

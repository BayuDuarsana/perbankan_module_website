<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HTL_Pemeliharaan_File_Rekening_Models extends CI_Model {

    public function updateRekening($nomor_rekening, $status_rekening, $jenis_rekening) {
        $this->db->set('status_rekening', $status_rekening);
        $this->db->set('jenis_rekening', $jenis_rekening);
        $this->db->where('nomor_rekening', $nomor_rekening);
        $this->db->update('rekening_perusahaan');

        $this->db->set('status_rekening', $status_rekening);
        $this->db->set('jenis_rekening', $jenis_rekening);
        $this->db->where('nomor_rekening', $nomor_rekening);
        $this->db->update('rekening_individu');
    }

    public function hapusRekening($nomor_rekening) {
        $this->db->where('nomor_rekening', $nomor_rekening);
        $this->db->delete('rekening_perusahaan');

        $this->db->where('nomor_rekening', $nomor_rekening);
        $this->db->delete('rekening_individu');
    }

    public function getRekeningData() {
        $query = $this->db->query("SELECT nomor_rekening, saldo, status_rekening, jenis_rekening, jenis_pemilik_rekening FROM rekening_perusahaan
                                    UNION ALL
                                    SELECT nomor_rekening, saldo, status_rekening, jenis_rekening, jenis_pemilik_rekening FROM rekening_individu");
        return $query->result_array();
    }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HTL_Status_Jenis_Bunga_Models extends CI_Model {

    public function getRekeningData() {
        $query = $this->db->query("SELECT 'perusahaan' as jenis_pemilik_rekening, nomor_rekening, saldo, status_rekening, jenis_rekening, bunga FROM rekening_perusahaan
                                    UNION ALL
                                    SELECT 'individu' as jenis_pemilik_rekening, nomor_rekening, saldo, status_rekening, jenis_rekening, bunga FROM rekening_individu");
        return $query->result_array();
    }

    public function updateBunga($nomor_rekening, $jenis_pemilik_rekening, $bunga) {
        $data = array('bunga' => $bunga);
        $this->db->where('nomor_rekening', $nomor_rekening);

        // Update tabel berdasarkan jenis pemilik rekening (perusahaan atau individu)
        if ($jenis_pemilik_rekening == 'perusahaan') {
            $this->db->update('rekening_perusahaan', $data);
        } else {
            $this->db->update('rekening_individu', $data);
        }
    }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HTL_Daftar_Mutasi_Models extends CI_Model {

    public function getMutasiData($tanggal_awal, $tanggal_akhir) {
        $this->db->where('tanggal_waktu >=', $tanggal_awal);
        $this->db->where('tanggal_waktu <=', $tanggal_akhir);
        $query = $this->db->get('ttransaksi');
        return $query->result_array();
    }

}

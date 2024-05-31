<?php
// ! CS_Daftar_Nasabah_Perusahaan
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan_model extends CI_Model {

    public function insert_data($data) {
        return $this->db->insert('perusahaan', $data);
    }
}

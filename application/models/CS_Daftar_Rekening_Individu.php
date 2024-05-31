<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CS_Daftar_Rekening_Individu extends CI_Model
{
    public function insert_data($data)
    {
        return $this->db->insert('rekening_individu', $data);
    }

    public function get_all_data()
    {
        return $this->db->get('rekening_individu')->result_array();
    }
}

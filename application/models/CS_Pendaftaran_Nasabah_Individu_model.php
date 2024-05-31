<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CS_Pendaftaran_Nasabah_Individu_model extends CI_Model
{
    public function insert_data($data)
    {
        return $this->db->insert('individu', $data);
    }

    public function get_individu_by_no_identitas_ktp($no_identitas_ktp)
    {
        return $this->db->get_where('individu', ['no_identitas_ktp' => $no_identitas_ktp])->row();
    }
}




// // ! CS_Daftar_Nasabah_Individu
//     public function get_all_data()
// 	{
// 		$this->db->select('*');
// 		$this->db->from('individu');
// 		$query = $this->db->get();
// 		return $query->result_array();
// 	}
// }

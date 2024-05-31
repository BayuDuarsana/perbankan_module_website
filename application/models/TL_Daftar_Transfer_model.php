<?php
class TL_Daftar_Transfer_model extends CI_Model
{
    public function getTtransaksiByKodeTransaksi($kode_transaksi)
    {
        $query = $this->db->get_where('ttransaksi', array('kode_transaksi' => $kode_transaksi));
        return $query->result_array();
    }
}
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HTL_Daftar_Perbaikan_Transaksi_Models extends CI_Model {

    public function getTransaksiData() {
        $query = $this->db->get('ttransaksi');
        return $query->result_array();
    }

    public function updateTransaksi($id_transaksi, $jumlah_lama, $jumlah_baru, $gl_debet, $gl_credit) {
        // Cari tahu apakah rekening adalah individu atau perusahaan
        $this->db->where("nomor_rekening", $gl_debet);
        $query_rekening = $this->db->get("rekening_individu");
        $rekening_jenis = $query_rekening->num_rows() > 0 ? 'individu' : 'perusahaan';

        $table_name = $rekening_jenis == 'individu' ? 'rekening_individu' : 'rekening_perusahaan';

        // Balikkan transaksi lama
        $this->db->set("saldo", "saldo + $jumlah_lama", FALSE);
        $this->db->where("nomor_rekening", $gl_debet);
        $result1 = $this->db->update($table_name);

        $this->db->set("saldo", "saldo - $jumlah_lama", FALSE);
        $this->db->where("nomor_rekening", $gl_credit);
        $result2 = $this->db->update($table_name);

        // Masukkan transaksi baru
        $this->db->set("saldo", "saldo - $jumlah_baru", FALSE);
        $this->db->where("nomor_rekening", $gl_debet);
        $result3 = $this->db->update($table_name);

        $this->db->set("saldo", "saldo + $jumlah_baru", FALSE);
        $this->db->where("nomor_rekening", $gl_credit);
        $result4 = $this->db->update($table_name);

        // Update jumlah dalam tabel ttransaksi
        $this->db->set("jumlah", $jumlah_baru, FALSE);
        $this->db->where("id_transaksi", $id_transaksi);
        $result5 = $this->db->update("ttransaksi");

        return ($result1 && $result2 && $result3 && $result4 && $result5);
    }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HTL_Transfer_Models extends CI_Model {

    public function getRekenings() {
        $query = $this->db->query('SELECT nomor_rekening, saldo FROM rekening_individu UNION ALL SELECT nomor_rekening, saldo FROM rekening_perusahaan');
        return $query->result_array();
    }

    public function transfer($id_pengirim, $id_penerima, $jumlah_transfer) {
        $tanggal = date('Y-m-d H:i:s'); // Dapatkan tanggal dan waktu saat ini
    
        $sql = "SELECT saldo FROM (SELECT nomor_rekening, saldo FROM rekening_individu UNION ALL SELECT nomor_rekening, saldo FROM rekening_perusahaan) AS rek WHERE nomor_rekening='$id_pengirim'";
        $result = $this->db->query($sql);
        $saldo = 0;
        if ($result->num_rows() > 0) {
            $row = $result->row_array();
            $saldo = $row['saldo'];
        }
    
        if ($jumlah_transfer > $saldo) {
            return 'Jumlah transfer melebihi saldo!';
        } else {
            $this->db->trans_start(); // Mulai transaksi
    
            $this->db->set('saldo', "saldo-$jumlah_transfer", FALSE)->where('nomor_rekening', $id_pengirim)->update('rekening_individu');
            $this->db->set('saldo', "saldo-$jumlah_transfer", FALSE)->where('nomor_rekening', $id_pengirim)->update('rekening_perusahaan');
            $this->db->set('saldo', "saldo+$jumlah_transfer", FALSE)->where('nomor_rekening', $id_penerima)->update('rekening_individu');
            $this->db->set('saldo', "saldo+$jumlah_transfer", FALSE)->where('nomor_rekening', $id_penerima)->update('rekening_perusahaan');
    
            $data = array(
                'kode_transaksi' => 'TRF',
                'nomor_rekening' => $id_pengirim,
                'jumlah' => $jumlah_transfer,
                'tanggal_waktu' => $tanggal, // Menggunakan kolom tanggal_waktu sebagai pengganti kolom tanggal
                'keterangan' => "Transfer dari $id_pengirim ke $id_penerima",
                'gl_debet' => $id_pengirim,
                'gl_credit' => $id_penerima
            );
            $this->db->insert('ttransaksi', $data);
    
            $this->db->trans_complete(); // Selesaikan transaksi
    
            if ($this->db->trans_status() === FALSE) {
                return 'Terjadi kesalahan saat melakukan transfer!';
            } else {
                $output = array(
                    'kode_transaksi' => 'TRF',
                    'tanggal' => date('Y-m-d'), // Menggunakan format tanggal yang sama seperti sebelumnya
                    'nomor_rekening' => '01212',
                    'keterangan' => "Transfer dari $id_pengirim ke $id_penerima",
                    'gl_debet' => $id_pengirim,
                    'gl_credit' => $id_penerima,
                    'jumlah' => $jumlah_transfer
                );
    
                return $output;
            }
        }
    }
    

}

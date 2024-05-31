<?php
class TL_Transfer_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getRekeningData()
    {
        $query = $this->db->query('SELECT nomor_rekening, saldo FROM rekening_individu UNION ALL SELECT nomor_rekening, saldo FROM rekening_perusahaan');
        return $query->result_array();
    }

    public function transfer($id_pengirim, $id_penerima, $jumlah_transfer, $tanggal)
    {
        $sql = "SELECT saldo FROM (SELECT nomor_rekening, saldo FROM rekening_individu UNION ALL SELECT nomor_rekening, saldo FROM rekening_perusahaan) AS rek WHERE nomor_rekening='$id_pengirim'";
        $result = $this->db->query($sql);
        $saldo = 0;
        if ($result->num_rows() > 0) {
            $row = $result->row_array();
            $saldo = $row['saldo'];
        }

        if ($jumlah_transfer > $saldo) {
            return "Jumlah transfer melebihi saldo!";
        } else {
            $sql1 = "UPDATE rekening_individu SET saldo=saldo-$jumlah_transfer WHERE nomor_rekening='$id_pengirim'";
            $sql2 = "UPDATE rekening_perusahaan SET saldo=saldo-$jumlah_transfer WHERE nomor_rekening='$id_pengirim'";
            $sql3 = "UPDATE rekening_individu SET saldo=saldo+$jumlah_transfer WHERE nomor_rekening='$id_penerima'";
            $sql4 = "UPDATE rekening_perusahaan SET saldo=saldo+$jumlah_transfer WHERE nomor_rekening='$id_penerima'";
            $sql5 = "INSERT INTO ttransaksi (id_transaksi, kode_transaksi, nomor_rekening, jumlah, tanggal_waktu, staff, status, keterangan, gl_debet, gl_credit) VALUES (NULL,'TRF','$id_pengirim',$jumlah_transfer,'$tanggal','Teller','Transfer','Transfer dari $id_pengirim ke $id_penerima', '$id_pengirim', '$id_penerima')";
            $this->db->query($sql1);
            $this->db->query($sql2);
            $this->db->query($sql3);
            $this->db->query($sql4);
            $this->db->query($sql5);

            // Set nilai variabel yang akan dikembalikan
            $kode_transaksi = 'TRF';
            $nomor_rekening = $id_pengirim;
            $keterangan = 'Transfer dari ' . $id_pengirim . ' ke ' . $id_penerima;
            $gl_debet = $id_pengirim;
            $gl_credit = $id_penerima;
            $jumlah = $jumlah_transfer;

            return compact('kode_transaksi', 'tanggal', 'nomor_rekening', 'keterangan', 'gl_debet', 'gl_credit', 'jumlah');
        }
    }
}
?>

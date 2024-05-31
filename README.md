# Langkah Penginstalan

1. Masuk ke folder xampp/htdocs kemudian extrack
2. Buka browser ketik localhost/phpmyadmin
3. Buat database baru dengan nama manlan
4. Import database yang ada di

# Oprec

## Header

Untuk mengubah sidebar dan menambahkan lokasi php file sidebar, ubah file
`application\views\admin\oprec\include\header.php`

## Controller

Untuk mengatur lokasi file agar ketika di ketik tidak 404 not found, ubah file
`application\controllers\Oprec.php`

## Database

Pengaturan database untuk mengokeneksi ke database, ubah file application
`application\config\database.php`

# header

'''

<li>
<a class="active" href="<?= base_url('/oprec/usr_home') ?>"><i
class="si si-folder-alt"></i><span class="sidebar-mini-hide">Home</span></a>
</li>
'''

# oprec

'''
public function usr_home()
{
check_not_login();
$this->load->view('admin/oprec/include/header');
$this->load->view('admin/oprec/usr/usr_home');
$this->load->view('admin/oprec/include/footer');
}
'''

role user
customer service (cs)
[x] cspembukaanrekening
[x] csinfonomorrekening
[x] csinfonasabah
[x] csdaftarrekening
[x] csupdatebunga

Teller (tl)
[x] tltransaksi
[x] tldaftarmutasi
[x] tltariktunai
[x] tlsetorantunai

headteller (htl)
[x] htlpemeliharaanfilenasabah
[x] htlpemeliharaanfilerekening
[x] htlstatusjenisbunga
[x] htldaftarrekeperbaikantransaksining

cashofficer (cso)
[x] csopemeliharaanbatasan
[x] csorekening
[x] csootoritastransaksi
[x] csppemeliharaanbunga
[x] cspsimpanan

user (usr)
[x] usrhistorytransferuser
[x] usrhistorytariktunaiuser
[x] usrinfouser
[x] usrtransferuser

DB Manlan

CREATE TABLE `individu` (

data diri
`nama` varchar(50) NOT NULL,
`no_identitas_ktp` varchar(50) NOT NULL PRIMARY KEY,
`tanggal_lahir` date NOT NULL,
`alamat` text NOT NULL,
`nama_ibu_kandung` varchar(50) NOT NULL,
`nomor_telpon` varchar(20) NOT NULL
)

CREATE TABLE `rekening_individu` (

data diri
`no_identitas_ktp` varchar(50) NOT NULL,

data lokasi
`kewarganegaraan` varchar(50) NOT NULL,
`provinsi` varchar(50) NOT NULL,
`kota` varchar(50) NOT NULL,

pekerjaan
`pekerjaan` varchar(50) NOT NULL,
`nama_instansi` varchar(50) NOT NULL,

rekening
`jenis_rekening` varchar(20) NOT NULL,
`bunga` varchar(5) NOT NULL DEFAULT '0%',
`status_rekening` varchar(20) NOT NULL DEFAULT 'aktif',
`nomor_rekening` varchar(50) NOT NULL PRIMARY KEY,
`password` varchar(50) NOT NULL,
`saldo` DECIMAL(12,2) NOT NULL DEFAULT 0,
`tanggal_pembukaan` date NOT NULL DEFAULT CURRENT_DATE,
FOREIGN KEY (`no_identitas_ktp`) REFERENCES `individu` (`no_identitas_ktp`)
)

CREATE TABLE `rekening_perusahaan` (

data diri
`penanggung_jawab_ktp varchar(50) NOT NULL,(primay key)

data lokasi
`kewarganegaraan` varchar(50) NOT NULL,
`provinsi` varchar(50) NOT NULL,
`kota` varchar(50) NOT NULL,

rekening
`jenis_rekening` varchar(20) NOT NULL,
`bunga` varchar(5) NOT NULL DEFAULT '0%',
`status_rekening` varchar(20) NOT NULL DEFAULT 'aktif',
`nomor_rekening` varchar(50) NOT NULL,
`password` varchar(50) NOT NULL,
`saldo` int(11) NOT NULL DEFAULT 0,
`tanggal_pembukaan` date NOT NULL DEFAULT curdate()
)

CREATE TABLE `perushaan` (

data diri
`npwp` varchar(50) NOT NULL,
`nib` varchar(50) NOT NULL,
`nama_perusahaan ` varchar(50) NOT NULL,
`no_identitas_ktp` varchar(50) NOT NULL,
`penanggung_jawab_ktp varchar(50) NOT NULL,(primay key)
)

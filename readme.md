# Sistem Informasi Menajemen Poliklinik
----------------------------------------------------

## System Requirements :
* Bahasa Utama :
  - php
  - Version 7

* Framework :
  - CodeIgniter 3

* Database :
  - Mysql (phpmyadmin)

* Library :
  - Indo Tanggal (Tanggal Indonesia)
  - Template (UI Applikasi)
  - REST Controller (API)

* Template :
  - Admin Pro + (Gradient Design)

* Services :
  - Docker
  - docker-compose

----------------------------------------------------

## Progres Pembuatan & Pengembangan

### Michael :
* Minggu 28 Juli 2019
  - Buat Project Local sim_rs [Solved]
  - Migrasi database dan konfigurasi ke applikasi (application/config/config.php) [Solved]
  - Menambahkan Template dan Konfigurasi base Template utama [Solved]
  - Menambahkan Controller dan Model Pasien (controllers/Pasien.php)(models/M_pasien.php) [Solved]
  - Menambahkan Controller dan Model Pegawai (controllers/Pegawai.php)(models/M_pegawai.php) [Solved]

* Rabu 31 Juli 2019
  - Menambahkan Controller dan Model data induk (controllers/Data_induk.php)(models/M_induk) [Solved]
  - Menambahkan Libraby Grocery CRUD [Solved]
  - Menambahkan Fungsi CRUD dan Class pada controller data induk (controllers/Data_induk.php) [Solved]
  - Menambahkan CRUD untuk view (Departemen, poliklinik, spesialis, jabatan, agama) [Solved]

* Kamis 1 Agustus 2019
  - Memperbaiki Controller dan Model Pasien [Solved]
  - Menambahkan Fungsi CRUD pada Controller dan Modul Pasien [Solved]
  - Memperbaiki Base template utama [Solved]
  - Menambahkan Controller dan Model Perisa (controllers/periksa.php) (models/M_periksa.php) [Solved]
  - Menambahkan Controller dan Model Polik (controllers/polik.php) (models/M_polik.php) [Solved]
  - Menambahkan Controller dan Model Users (controllers/Users.php) (models/M_users.php) [Solved]
  - Memperbaiki Fungsi CRUD pada Controller dan Model Pasien.php [Solved]
  - Memperbaiki Fungsi CRUD pada controller dan Model Periksa.php [Not Solved]
  - Menambahkan view login dan file JS,CSS (assets/login) [Solved]
  - Menambahkan Fungsi Login dan Logout pada controllers Users.php [Solved]
  - Menambahkan View menu_level.php pada view (views/menu_level.php) [Solved]
  - Meperbaiki base template MasterAdmin [Solved]

* Jumat 2 Agustus 2019
  - Menambahkan Librabry BaseController.php Untuk User Level (Libraries/BaseController.php) [Solved]
  - Memperbaiki menu_level.php [Solved]
  - Memperbaiki Fungsi pada Controller dan Model Periksa (controllers/Periksa.php)(models/M_periksa.php) [Solved]
  - Menambahkan file update_status pada view Periksa (Periksa/update_status) [Solved]
  - Memperbaiki base template MasterAdmin [Solved]

* Sabtu 3 Agustus 2019
  - Menambahkan Controller dan Model dokter.php [Solved]
  - Menambahkan Function CRUD Dokter.php [Solved]
  - Memperbaiki menu_level.php [Solved]
  - Memperbaiki CRUD Controller dan Modul dokter.php [Solved]
  - Memperbaiki CRUD Controller dan Modul Pasien [Solved]

* Minggu 4 Agustus 2019
  - Menambahkan Function CRUD Pegwai pada controller data_induk.php [NotSolved]
  - Membuat Folder edit dan tambah pada folder datainduk (views/datainduk/edit)(views/datainduk/tambah) [Solved]
  - Menambahkan Function CRUD Pegawai pada model M_induk.php [Not Solved]
  - Meperbaiki dan Menambahkan Function tanggal dan waktu controller Periksa.php [Solved]
  - Memperbaiki dan Menambahkan view data-periksa.php (tanggal dan waktu) [Solved]

* Senin 5 Agustus 2019
  - Menambahkan Field diagnosa pada tbl_periksa [Solved]
  - Memeperbaiki query pasien pada Model pasien.php [Solved]
  - Memperbaiki View data-pasien.php [Solved]
  - Memperbaiki View data-periksa.php [Solved]
  - Menambahkan Function update_diagnosa_proses pada controller periksa.php untuk Field Diagnosa [Not Solved]

* Selasa 6 Agustus 2019
  - Memperbaiki View Login.php (views/login.php) [Solved]
  - Menambahkan View diagnosa.php (dokter/diagnosa.php) [Not Solved]

* Kamis 8 Agustus 2019
  - Menambahkan Controller dan Model Apotik (controllers/Apotik.php)(models/M_apotik.php) [Solved]
  - Menambahkan Function CRUD pada Controller dan Model Apotik [Solved]
  - Memperbaiki View MasterAdmin.php [Solved]
  - Menambahkan Function kode otomatis pada Model Apotik [Solved]

* Jumat 9 Agustus 2019
  - Menambahkan Function CRUD satuan pada Controller dan Model Apotik [Solved]
  - Memperbaiki view menu_level.php [Solved]

* Minggu 12 Agustus 2019
  - Menambahkan Controller dan Model Lab (controller/lab.php)(model/M_lab.php) [Solved]
  - Menambahkan Fungsi CRUD jenis pemeriksaan pada Controller dan Model lab [Solved]
  - Menambahkan View CRUD jenis pemeriksaan untuk controller dan model lab [Solved]
  - Menambahkan Controller dan Model users (controller/users.php)(model/M_user.php) [Solved]
  - Memperbaiki Controller dan Model auth [Solved]
  - Memperbaiki view menu_level.php [Solved]
  - Menghapus Library Grocery CRUD [Solved]

* Rabu 14 Agustus 2019
  - Menambahkan Function CRUD Periksa Lab pada Controller dan Model lab [Solved]
  - Menambahkan Function CRUD Hasil Pemeksaan Lab pada Controller dan Model Lab [Solved]
  - Menambahkan Function detail Hasil Pemekriksaan Lab [Solved]
  - Memperbaiki Controller dan Model Lab [Solved]
  - Memperbaiki Layout Menu_level [Solved]
  - Memperbaiki Layout MasterAdmin [Solved]

* Kamis 15 Agustus 2019
  - Menambahkan Function Cetak Detail Hasil Lab [Solved]
  - Menambahkan View cetak_detial (lab/pasien/cetak_detial.php) [Solved]

* Minggu 25 Agustus 2019
  - Menanbahkan Function CRUD Poliklinik

* Selasa 27 Agustus 2019
  - Merubah Pattern MVC menajd HMVC [Solved]
  - Merubah Modul Lab [Solved]

* Senin 2 September 2019
  - Menambahkan Modul api [Solved]
  - Merubah Menu_level.php [Solved]
  - Menambahkan tbl_menu, tbl_sub_menu [Solved]
  - Menambahkan Library Indo_tanggal.php [Solved]
  - Merubah Alur Pemeriksaan Lab dari Pasien ke Pasien Periksa Dokter (Polik) [Solved]
  - Merubah Cetak Hasil Laboratorium [Solved]

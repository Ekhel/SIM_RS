-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2019 at 06:35 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim_rs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agama`
--

CREATE TABLE `tbl_agama` (
  `id_agama` int(11) NOT NULL,
  `agama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agama`
--

INSERT INTO `tbl_agama` (`id_agama`, `agama`) VALUES
(1, 'ISLAM'),
(2, 'KRISTEN'),
(3, 'HINDU'),
(4, 'BUDHA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bidang`
--

CREATE TABLE `tbl_bidang` (
  `id_bidang` int(11) NOT NULL,
  `nama_bidang` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bidang`
--

INSERT INTO `tbl_bidang` (`id_bidang`, `nama_bidang`) VALUES
(1, 'BIDANG 1'),
(2, 'BIDANG 2'),
(3, 'bidang 33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departemen`
--

CREATE TABLE `tbl_departemen` (
  `id_departemen` int(11) NOT NULL,
  `nama_departemen` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_departemen`
--

INSERT INTO `tbl_departemen` (`id_departemen`, `nama_departemen`) VALUES
(1, 'DEPARTEMEN 1'),
(2, 'kemanan'),
(3, 'KEUANGAN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `id_dokter` int(10) NOT NULL,
  `nama_dokter` varchar(128) NOT NULL,
  `jekel` varchar(20) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_agama` int(10) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_kontak_dokter` varchar(13) NOT NULL,
  `id_spesialis` int(10) NOT NULL,
  `no_izin_praktek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`id_dokter`, `nama_dokter`, `jekel`, `tmp_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `no_kontak_dokter`, `id_spesialis`, `no_izin_praktek`) VALUES
(1, 'Albertson Rabagreri', 'L', 'Serui', '1977-03-09', 2, 'Kota Raja Furia', '082455686739', 2, 'SK-001K-2293'),
(3, 'Liliana', 'P', 'Kulon Progo', '1985-04-17', 1, 'Waena Perumnas III', '082455686739', 1, 'SK-001K-9900');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'JABATAN 1'),
(2, 'JABATAN 2'),
(3, 'penanggung jawab lab');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenisperiksa`
--

CREATE TABLE `tbl_jenisperiksa` (
  `id_jenisperiksa` int(10) NOT NULL,
  `nama_periksa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenisperiksa`
--

INSERT INTO `tbl_jenisperiksa` (`id_jenisperiksa`, `nama_periksa`) VALUES
(1, 'Periksa Darah'),
(3, 'Periksa Darah Lengkap');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenjang`
--

CREATE TABLE `tbl_jenjang` (
  `kode_jenjang` varchar(10) NOT NULL,
  `nama_jenjang` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenjang`
--

INSERT INTO `tbl_jenjang` (`kode_jenjang`, `nama_jenjang`) VALUES
('J1', 'JENJANG 1'),
('J2', 'JENJANG 2'),
('j4', 'jenjang 4'),
('j5', 'JENJANG 34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenjang_pendidikan`
--

CREATE TABLE `tbl_jenjang_pendidikan` (
  `id_jenjang_pendidikan` int(11) NOT NULL,
  `jenjang_pendidikan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenjang_pendidikan`
--

INSERT INTO `tbl_jenjang_pendidikan` (`id_jenjang_pendidikan`, `jenjang_pendidikan`) VALUES
(1, 'SD'),
(2, 'SMP'),
(3, 'SMA'),
(4, 'D3'),
(5, 'D4'),
(6, 'S1'),
(7, 'S2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obatalkes`
--

CREATE TABLE `tbl_obatalkes` (
  `id_barang` int(20) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(150) NOT NULL,
  `kategori` enum('obat','alkes') NOT NULL,
  `id_satuan` int(10) NOT NULL,
  `harga` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_obatalkes`
--

INSERT INTO `tbl_obatalkes` (`id_barang`, `kode_barang`, `nama_barang`, `kategori`, `id_satuan`, `harga`) VALUES
(2, 'BR508082019001', 'Betadin', 'obat', 1, '17000'),
(3, 'BR508082019002', 'Amoxilin Tablet', 'obat', 3, '9000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id_pasien` int(10) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_kontak` varchar(13) NOT NULL,
  `date_created` date NOT NULL,
  `petugas` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id_pasien`, `nama_pasien`, `jenis_kelamin`, `golongan_darah`, `tempat_lahir`, `tanggal_lahir`, `nama_ibu`, `alamat`, `no_kontak`, `date_created`, `petugas`) VALUES
(1, 'MICHAEL KARAFIR', 'L', 'B', 'Jayapura', '1991-04-06', 'Fransina', 'Doyo Grand Sentani', '082199537593', '0000-00-00', 'Michael'),
(2, 'DAN CALVIN KARAFIR', 'L', 'O', 'Jayapura', '1997-12-04', 'Fransina Monim', 'Waena Perumnas III', '082199537593', '0000-00-00', 'Michael'),
(3, 'YANIKE ', 'P', 'B', 'Sorong', '0000-00-00', 'Yomima', 'Polimak III', '082199537595', '0000-00-00', 'Michael'),
(4, 'MARGARETHA FONATABA', 'P', 'A', 'Serui', '1971-09-05', '-', 'Kamp. Waibron', '081344567890', '2019-08-05', 'Michael');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `nik` int(20) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `jekel` enum('L','P') NOT NULL,
  `pend_terahir` varchar(20) NOT NULL,
  `npwp` varchar(25) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`nik`, `nama_pegawai`, `jekel`, `pend_terahir`, `npwp`, `tmp_lahir`, `tgl_lahir`, `id_jabatan`) VALUES
(1129002944, 'Oktovianus Kabagaimu, S.Kep', 'L', 'S1', '12203 9948558', 'Merauke', '1989-05-21', '2'),
(1129002945, 'Martina Koibur, Amd.Kep', 'P', 'D3', '12445 9948558', 'Biak', '1985-07-24', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `no_registrasi` varchar(10) NOT NULL,
  `no_rawat` varchar(18) NOT NULL,
  `no_rekamedis` varchar(6) NOT NULL,
  `cara_masuk` varchar(30) NOT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `kode_dokter_penanggung_jawab` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `nama_penanggung_jawab` varchar(30) NOT NULL,
  `hubungan_dengan_penanggung_jawab` varchar(30) NOT NULL,
  `alamat_penanggung_jawab` text NOT NULL,
  `id_jenis_bayar` int(11) NOT NULL,
  `asal_rujukan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`no_registrasi`, `no_rawat`, `no_rekamedis`, `cara_masuk`, `tanggal_daftar`, `kode_dokter_penanggung_jawab`, `id_poli`, `nama_penanggung_jawab`, `hubungan_dengan_penanggung_jawab`, `alamat_penanggung_jawab`, `id_jenis_bayar`, `asal_rujukan`) VALUES
('0002', '2017/12/04/0002', '000003', 'RAWAT JALAN', '2017-12-04 00:00:00', 2, 1, 'reza', 'saudara kandung', 'jl kenangan no 40', 2, 'pukesmas langsa'),
('0003', '2017/12/04/0003', '000002', 'RAWAT JALAN', '2017-12-04 00:00:00', 8, 1, 'reza husein', 'saudara kandung', 'sample text', 2, 'rs dustira'),
('0004', '2017/12/04/0004', '000004', 'RAWAT JALAN', '2017-12-04 00:00:00', 3, 1, 'LENI', 'saudara kandung', 'BANDUNG', 1, 'MEDAN'),
('0005', '2017/12/04/0005', '000005', 'RAWAT JALAN', '2017-12-04 00:00:00', 5, 1, 'HUSAINI', 'saudara kandung', 'BANDUNG', 1, 'MEDAN'),
('0006', '2017/12/04/0006', '000007', 'RAWAT JALAN', '2017-12-04 00:00:00', 4, 1, 'RENI', 'saudara kandung', 'MEDAN', 1, 'MEDAN'),
('0007', '2017/12/04/0007', '000006', 'RAWAT JALAN', '2017-12-04 00:00:00', 2, 1, 'LIA', 'saudara kandung', 'MEDAN', 1, 'MEDAN'),
('0001', '2017/12/05/0001', '000001', 'RAWAT JALAN', '2017-12-05 00:00:00', 2, 1, 'nuris akbar', 'saudara kandung', 'cimahi', 1, 'pukesmas seragen'),
('0002', '2017/12/05/0002', '000002', 'RAWAT INAP', '2017-12-05 00:00:00', 2, 1, 'nuris akbar', 'saudara kandung', 'cimahi', 1, 'rs seragen'),
('0004', '2017/12/05/0004', '000001', 'RAWAT JALAN', '2017-12-05 00:00:00', 2, 1, 'ewewe', 'saudara kandung', 'ewew', 1, 'wewe'),
('0005', '2017/12/05/0005', '000003', 'RAWAT INAP', '2017-12-05 00:00:00', 5, 1, 'nuris akbar', 'saudara kandung', 'cimahi', 1, 'seragen'),
('0006', '2017/12/05/0006', '000001', 'RAWAT INAP', '2017-12-05 00:00:00', 8, 1, 'nuris akbar', 'saudara kandung', 'cimahi', 1, 'rs dustira'),
('0001', '2017/12/17/0001', '000001', 'RAWAT JALAN', '2017-12-19 00:00:00', 2, 1, 'Ujang', 'saudara kandung', 'Kp Berung no 32', 1, 'KLINIK CIBABAT'),
('0001', '2017/12/18/0001', '000001', 'RAWAT JALAN', '2017-12-18 00:00:00', 2, 1, 'NURIS AKBAR', 'saudara kandung', 'KP CITAMAN RT 04 RW 16', 1, 'RS LANGSA'),
('0001', '2017/12/20/0001', '000001', 'RAWAT JALAN', '2017-12-20 00:00:00', 2, 1, 'Nuris Akbar', 'saudara kandung', 'Kp CItaman rt 03', 1, 'bandung'),
('0001', '2017/12/21/0001', '000002', 'RAWAT JALAN', '2017-12-21 00:00:00', 5, 1, 'NURIS AKBAR', 'saudara kandung', 'kp citaman rt 04', 1, 'rs bandung'),
('0001', '24/11/2017/0001', '000001', 'rawat jalan', '2017-11-25 00:00:00', 2, 1, 'nuris akbar', 'kakak', 'jl pahlawan no 301 gedubang lama', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_periksa`
--

CREATE TABLE `tbl_periksa` (
  `id_periksa` int(20) NOT NULL,
  `id_pasien` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `id_poliklinik` int(10) NOT NULL,
  `status` enum('sudah','belum','tidak hadir') NOT NULL,
  `diagnosa` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_periksa`
--

INSERT INTO `tbl_periksa` (`id_periksa`, `id_pasien`, `tanggal`, `id_poliklinik`, `status`, `diagnosa`) VALUES
(1, 1, '2019-08-01', 1, 'sudah', ''),
(2, 2, '2019-08-01', 4, 'sudah', ''),
(3, 1, '2019-08-03', 1, 'sudah', ''),
(4, 3, '2019-08-03', 3, 'sudah', ''),
(5, 3, '2019-08-04', 4, 'sudah', ''),
(6, 4, '2019-08-05', 9, 'sudah', ''),
(7, 2, '2019-08-05', 1, 'sudah', ''),
(8, 3, '2019-08-11', 2, 'sudah', 'coba catatan diagnosa'),
(9, 4, '2019-08-11', 4, 'sudah', 'tesss catatab');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_poliklinik`
--

CREATE TABLE `tbl_poliklinik` (
  `id_poliklinik` int(11) NOT NULL,
  `nama_poliklinik` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_poliklinik`
--

INSERT INTO `tbl_poliklinik` (`id_poliklinik`, `nama_poliklinik`) VALUES
(1, 'POLI GIGI'),
(2, 'POLI ANAK'),
(3, 'POLI JANTUNG'),
(4, 'POLI MATA'),
(5, 'POLI THT'),
(6, 'POLI LAKTASI'),
(7, 'POLI ORTHOPEDI'),
(8, 'POLI BEDAH'),
(9, 'POLI SARAF');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_praktek`
--

CREATE TABLE `tbl_praktek` (
  `id_jadwal` int(10) NOT NULL,
  `id_dokter` int(10) NOT NULL,
  `id_poliklinik` int(10) NOT NULL,
  `jadwal` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `is_active` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_praktek`
--

INSERT INTO `tbl_praktek` (`id_jadwal`, `id_dokter`, `id_poliklinik`, `jadwal`, `jam`, `is_active`) VALUES
(1, 3, 5, 'Senin, Rabu, kamis', '07.00 - 12.00', 'aktif'),
(2, 1, 2, 'Senin, Rabu, Jumat', '07.00 - 12.00', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profil_rumah_sakit`
--

CREATE TABLE `tbl_profil_rumah_sakit` (
  `id` int(11) NOT NULL,
  `nama_rumah_sakit` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `propinsi` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profil_rumah_sakit`
--

INSERT INTO `tbl_profil_rumah_sakit` (`id`, `nama_rumah_sakit`, `alamat`, `propinsi`, `kabupaten`, `no_telpon`, `logo`) VALUES
(1, 'RS CUT MEUTIA LANGSA', 'JL LANGSA KOTA NO 13 KOTA LANGSA', 'ACEH', 'LANGSA', '021-32432323', 'logo-rs1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_satuan`
--

CREATE TABLE `tbl_satuan` (
  `id_satuan` int(10) NOT NULL,
  `satuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_satuan`
--

INSERT INTO `tbl_satuan` (`id_satuan`, `satuan`) VALUES
(1, 'Botoll'),
(2, 'Pak'),
(3, 'Plastik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spesialis`
--

CREATE TABLE `tbl_spesialis` (
  `id_spesialis` int(11) NOT NULL,
  `spesialis` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_spesialis`
--

INSERT INTO `tbl_spesialis` (`id_spesialis`, `spesialis`) VALUES
(1, 'THT'),
(2, 'KULIT'),
(4, 'KELAMIN'),
(5, 'KANDUGAN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(14) NOT NULL,
  `status` enum('aktif','blok') CHARACTER SET utf8 NOT NULL,
  `nama` varchar(250) CHARACTER SET utf8 NOT NULL,
  `nik` int(50) NOT NULL,
  `sandi` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sandi_deskripsi` varchar(50) NOT NULL,
  `level` int(10) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nama_lengkap` varchar(50) CHARACTER SET utf8 NOT NULL,
  `kontak` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `status`, `nama`, `nik`, `sandi`, `sandi_deskripsi`, `level`, `email`, `nama_lengkap`, `kontak`) VALUES
(1, 'aktif', 'Michael', 1129002944, '82bc8f5141a48dd57bb43d91a5faae88', 'ekhel123', 1, 'blackmanskill@gmail.com', 'Michael Karafir', '082199557593'),
(2, 'aktif', 'ekhel', 1129002945, '82bc8f5141a48dd57bb43d91a5faae88', 'ekhel123', 2, 'michaelkarafir@gmail.com', 'ekhel karafir', '081344367764');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_level`
--

CREATE TABLE `tb_user_level` (
  `id_level` int(10) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_level`
--

INSERT INTO `tb_user_level` (`id_level`, `level`) VALUES
(1, 'Administrator'),
(2, 'Super Users');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tbl_departemen`
--
ALTER TABLE `tbl_departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_jenisperiksa`
--
ALTER TABLE `tbl_jenisperiksa`
  ADD PRIMARY KEY (`id_jenisperiksa`);

--
-- Indexes for table `tbl_jenjang`
--
ALTER TABLE `tbl_jenjang`
  ADD PRIMARY KEY (`kode_jenjang`);

--
-- Indexes for table `tbl_jenjang_pendidikan`
--
ALTER TABLE `tbl_jenjang_pendidikan`
  ADD PRIMARY KEY (`id_jenjang_pendidikan`);

--
-- Indexes for table `tbl_obatalkes`
--
ALTER TABLE `tbl_obatalkes`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`no_rawat`);

--
-- Indexes for table `tbl_periksa`
--
ALTER TABLE `tbl_periksa`
  ADD PRIMARY KEY (`id_periksa`);

--
-- Indexes for table `tbl_poliklinik`
--
ALTER TABLE `tbl_poliklinik`
  ADD PRIMARY KEY (`id_poliklinik`);

--
-- Indexes for table `tbl_praktek`
--
ALTER TABLE `tbl_praktek`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_profil_rumah_sakit`
--
ALTER TABLE `tbl_profil_rumah_sakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_satuan`
--
ALTER TABLE `tbl_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `tbl_spesialis`
--
ALTER TABLE `tbl_spesialis`
  ADD PRIMARY KEY (`id_spesialis`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_user_level`
--
ALTER TABLE `tb_user_level`
  ADD PRIMARY KEY (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_departemen`
--
ALTER TABLE `tbl_departemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `id_dokter` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_jenisperiksa`
--
ALTER TABLE `tbl_jenisperiksa`
  MODIFY `id_jenisperiksa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_jenjang_pendidikan`
--
ALTER TABLE `tbl_jenjang_pendidikan`
  MODIFY `id_jenjang_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_obatalkes`
--
ALTER TABLE `tbl_obatalkes`
  MODIFY `id_barang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `id_pasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_periksa`
--
ALTER TABLE `tbl_periksa`
  MODIFY `id_periksa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_poliklinik`
--
ALTER TABLE `tbl_poliklinik`
  MODIFY `id_poliklinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_praktek`
--
ALTER TABLE `tbl_praktek`
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_satuan`
--
ALTER TABLE `tbl_satuan`
  MODIFY `id_satuan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_spesialis`
--
ALTER TABLE `tbl_spesialis`
  MODIFY `id_spesialis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_user_level`
--
ALTER TABLE `tb_user_level`
  MODIFY `id_level` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

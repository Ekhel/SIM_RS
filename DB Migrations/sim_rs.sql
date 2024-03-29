-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 04:07 PM
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
-- Table structure for table `tbl_hasil_lab`
--

CREATE TABLE `tbl_hasil_lab` (
  `id_hasil` int(10) NOT NULL,
  `id_periksa` int(10) NOT NULL,
  `id_jenisperiksa` int(10) NOT NULL,
  `id_sub_jenis` int(10) NOT NULL,
  `hasil` varchar(10) NOT NULL,
  `nilai_rujukan` varchar(10) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `id_dokter` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `nama_periksa` varchar(50) NOT NULL,
  `harga_jenis` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenisperiksa`
--

INSERT INTO `tbl_jenisperiksa` (`id_jenisperiksa`, `nama_periksa`, `harga_jenis`) VALUES
(1, 'Periksa Darah', '15200'),
(2, 'Periksa Darah Lengkap', '45000'),
(3, 'Periksa Gula', '50000'),
(4, 'Golongan Darah', '80000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_periksalab`
--

CREATE TABLE `tbl_jenis_periksalab` (
  `id_jenis_pasien` int(10) NOT NULL,
  `id_periksa_lab` int(10) NOT NULL,
  `id_pasien` int(10) NOT NULL,
  `id_jenisperiksa` int(10) NOT NULL,
  `id_sub_jenis` int(10) NOT NULL,
  `hasil` varchar(50) NOT NULL,
  `nr` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `hasil_ket` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis_periksalab`
--

INSERT INTO `tbl_jenis_periksalab` (`id_jenis_pasien`, `id_periksa_lab`, `id_pasien`, `id_jenisperiksa`, `id_sub_jenis`, `hasil`, `nr`, `tanggal`, `hasil_ket`) VALUES
(27, 18, 2, 2, 1, '14.5', '35 - 47', '2019-10-24', '-'),
(28, 18, 2, 2, 2, '40.59', '112 - 13.5', '2019-10-24', '-'),
(29, 18, 2, 2, 3, '117', '117 - 15.5', '2019-10-24', '-'),
(30, 22, 6, 2, 1, '117 - 15.5', '35 - 47', '2019-10-26', '-'),
(31, 22, 6, 2, 2, '14.5', '177 - 21', '2019-10-26', '-'),
(32, 23, 5, 2, 1, '17.5', '23', '2019-10-28', '-'),
(33, 23, 5, 2, 2, '17.5', '23', '2019-10-28', '-'),
(34, 24, 5, 2, 1, '14.5', '177 - 21', '2019-11-03', '-'),
(35, 24, 5, 2, 2, '117 - 15.5', '177 - 21', '2019-11-03', '-'),
(36, 24, 5, 2, 3, '40.59', '177 - 21', '2019-11-03', '-'),
(37, 26, 2, 2, 1, '44.78', '177 - 21', '2019-11-08', '-'),
(38, 26, 2, 2, 2, '117 - 15.5', '177 - 21', '2019-11-08', '-'),
(39, 26, 2, 2, 3, '117', '177 - 21', '2019-11-08', '-'),
(40, 26, 2, 2, 4, '40.59', '177 - 21', '2019-11-08', '-'),
(41, 26, 2, 2, 5, '14.5', '177 - 21', '2019-11-08', '-'),
(42, 26, 2, 2, 6, '40.59', '177 - 21', '2019-11-08', '-');

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
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(10) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `kode_menu` varchar(10) NOT NULL,
  `status_menu` enum('aktif','nonaktif') NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `menu`, `kode_menu`, `status_menu`, `icon`) VALUES
(1, 'Data Induk', '01', 'aktif', 'fa big-icon fa-desktop'),
(2, 'Data Master', '02', 'aktif', 'fa big-icon fa-book'),
(3, 'Registrasi', '03', 'aktif', 'fa big-icon fa-check-square-o'),
(4, 'Instalasi Farmasi', '04', 'aktif', 'fa big-icon fa-flask'),
(5, 'Laboratorium', '05', 'aktif', 'fa big-icon fa-bar-chart-o'),
(6, 'Pengguna', '06', 'aktif', 'fa big-icon fa-users'),
(7, 'Pengaturan', '07', 'aktif', 'fa big-icon fa-cogs'),
(8, 'Laporan', '08', 'nonaktif', 'fa big-icon fa-calendar'),
(9, 'Utility', '09', 'aktif', 'fa big-icon fa-exchange');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_level`
--

CREATE TABLE `tbl_menu_level` (
  `id_menu_level` int(10) NOT NULL,
  `id_level` int(10) NOT NULL,
  `id_menu` int(10) NOT NULL,
  `id_sub_menu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu_level`
--

INSERT INTO `tbl_menu_level` (`id_menu_level`, `id_level`, `id_menu`, `id_sub_menu`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 2),
(3, 1, 1, 3),
(4, 1, 1, 4),
(5, 1, 1, 20),
(6, 1, 1, 21),
(7, 1, 2, 5),
(8, 1, 2, 6),
(9, 1, 3, 7),
(10, 1, 3, 8),
(11, 1, 4, 9),
(12, 1, 4, 10),
(13, 1, 4, 11),
(14, 1, 4, 24),
(15, 1, 5, 13),
(16, 1, 5, 22),
(17, 1, 4, 23),
(18, 1, 6, 16),
(19, 1, 6, 15),
(21, 1, 7, 18),
(22, 1, 7, 19),
(23, 1, 7, 27),
(24, 1, 7, 17),
(25, 1, 9, 25),
(26, 1, 9, 26),
(28, 4, 5, 22),
(29, 4, 5, 23),
(30, 4, 5, 13),
(31, 3, 3, 28),
(32, 5, 4, 24),
(33, 5, 4, 9),
(34, 5, 4, 10),
(35, 5, 4, 11);

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
(3, 'BR508082019002', 'Amoxilin Tablet', 'obat', 3, '9000'),
(4, 'BR514082019003', 'Ampicilin', 'obat', 1, '13500'),
(5, 'BR503092019004', 'Cefadroxin', 'obat', 4, '8700'),
(6, 'BR503092019005', 'daxer', 'obat', 4, '21300');

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
(4, 'MARGARETHA FONATABA', 'P', 'A', 'Serui', '1971-09-05', '-', 'Kamp. Waibron', '081344567890', '2019-08-05', 'Michael'),
(5, 'YOHANIS FENENTRUMA', 'L', 'A', 'Sorong', '1995-02-14', '-', 'Jl.XXX Cobaa', '082199537595', '0000-00-00', ''),
(6, 'WILLY BRODUS WALLY', 'L', 'AB', 'Sentani', '1991-02-26', 'Dorkas', 'Distrik Waibu Sentani', '082244821098', '2019-09-02', 'Michael');

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
  `pd` varchar(50) NOT NULL,
  `status` enum('sudah','belum','tidak hadir') NOT NULL,
  `diagnosa` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_periksa`
--

INSERT INTO `tbl_periksa` (`id_periksa`, `id_pasien`, `tanggal`, `id_poliklinik`, `pd`, `status`, `diagnosa`) VALUES
(39, 6, '2019-11-09', 4, '', 'sudah', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_periksa_lab`
--

CREATE TABLE `tbl_periksa_lab` (
  `id_periksa_lab` int(10) NOT NULL,
  `id_periksa` int(10) NOT NULL,
  `id_pasien` int(10) NOT NULL,
  `id_poliklinik` int(10) NOT NULL,
  `kode_pemeriksaan` varchar(50) NOT NULL,
  `status_lab` enum('sudah','belum') NOT NULL DEFAULT 'belum',
  `tanggal_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(8, 'POLI BEDAH');

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
-- Table structure for table `tbl_profil`
--

CREATE TABLE `tbl_profil` (
  `id_org` int(10) NOT NULL,
  `nama_org` varchar(128) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `no_telfon` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profil`
--

INSERT INTO `tbl_profil` (`id_org`, `nama_org`, `alamat`, `provinsi`, `kabupaten`, `no_telfon`, `email`, `logo`) VALUES
(1, 'Poliklinik RSUD Biak', 'Jl.xxx.xxx', 'Papua', 'Biak', '-', '-', 'biak.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resep`
--

CREATE TABLE `tbl_resep` (
  `id_resep` int(10) NOT NULL,
  `id_periksa` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `eticket` varchar(150) NOT NULL,
  `waktu_minum` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, 'Plastik'),
(4, 'papan');

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
-- Table structure for table `tbl_sub_jenis_periksa`
--

CREATE TABLE `tbl_sub_jenis_periksa` (
  `id_sub_jenis` int(10) NOT NULL,
  `id_jenisperiksa` int(10) NOT NULL,
  `nama_jenis` varchar(150) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `nilai_rujukan` varchar(50) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_jenis_periksa`
--

INSERT INTO `tbl_sub_jenis_periksa` (`id_sub_jenis`, `id_jenisperiksa`, `nama_jenis`, `satuan`, `nilai_rujukan`, `keterangan`) VALUES
(1, 2, 'Hemoglobin', 'g/dL', '', '-'),
(2, 2, 'Hematrokit', '%', '', '-'),
(3, 2, 'Eritrosit', '10^6uL', '', '-'),
(4, 2, 'MCV', 'fL', '', '-'),
(5, 2, 'MCH', 'pg', '', '-'),
(6, 2, 'MCHC', 'g/dL', '', '-'),
(7, 2, 'RDW-CV', '%', '', '-'),
(8, 2, 'Trombosit', '10^3uL', '', '-'),
(9, 2, 'Leukosit', '10^3uL', '', '-'),
(10, 2, 'LED', 'mm/jam', '', '-'),
(11, 3, 'Gula Darah', '%', '', '-'),
(12, 3, 'Gula Normal', '%', '', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_menu`
--

CREATE TABLE `tbl_sub_menu` (
  `id_sub_menu` int(10) NOT NULL,
  `id_menu` int(10) NOT NULL,
  `sub_menu` varchar(100) NOT NULL,
  `modul` varchar(100) NOT NULL,
  `function` varchar(100) DEFAULT NULL,
  `kode_sub_menu` varchar(100) NOT NULL,
  `status_sub` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_menu`
--

INSERT INTO `tbl_sub_menu` (`id_sub_menu`, `id_menu`, `sub_menu`, `modul`, `function`, `kode_sub_menu`, `status_sub`) VALUES
(1, 1, 'Agama', 'Data_induk', 'Agama', '01', 'aktif'),
(2, 1, 'Jabatan', 'Data_induk', 'jabatan', '02', 'aktif'),
(3, 1, 'Departemen', 'Data_induk', 'departemen', '03', 'nonaktif'),
(4, 1, 'Spesialis', 'Data_induk', 'spesialis', '04', 'aktif'),
(5, 2, 'Dokter', 'Dokter', '', '05', 'aktif'),
(6, 2, 'Jadwal Praktek', 'Jadwal', '', '06', 'aktif'),
(7, 3, 'Pasien', 'Pasien', '', '07', 'aktif'),
(8, 3, 'Periksa', 'Periksa', '', '08', 'aktif'),
(9, 4, 'Satuan', 'Apotik', 'Satuan', '09', 'aktif'),
(10, 4, 'Obat & Alkes', 'Apotik', '', '10', 'aktif'),
(11, 4, 'Supplier', 'Apotik', 'supplier', '11', 'aktif'),
(12, 4, 'Pengembalian', 'Apotik', '', '12', 'nonaktif'),
(13, 5, 'Pemeriksaan', 'Lab', '', '13', 'aktif'),
(15, 6, 'Level Akses', 'Users', 'level_user', '15', 'aktif'),
(16, 6, 'Pengguna', 'Users', '', '16', 'aktif'),
(17, 7, 'Profil', 'Settings', 'update/1', '17', 'aktif'),
(18, 7, 'Menu', 'Menu', '', '18', 'aktif'),
(19, 7, 'Sub Menu', 'Menu', 'Sub_menu', '19', 'aktif'),
(20, 1, 'Poliklinik', 'Data_induk', 'Poliklinik', '20', 'aktif'),
(21, 1, 'Pegawai', 'Data_induk', 'Pegawai', '21', 'aktif'),
(22, 5, 'Sub Pemeriksaan', 'Lab', 'sub_periksa_lab', '22', 'aktif'),
(23, 5, 'Pasien Lab', 'Lab', 'pasien_periksa_lab', '14', 'aktif'),
(24, 4, 'e - Resep', 'Resep', '', '23', 'aktif'),
(25, 9, 'Backup', 'Backup', '', '15', 'aktif'),
(26, 9, 'Restore', 'Restore', '', '17', 'aktif'),
(27, 7, 'Menu Level', 'Menu/Menu_level', '', '16', 'aktif'),
(28, 3, 'Periksa Polik', 'Periksa', 'poliklinik', '21', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `kode_supplier` varchar(6) NOT NULL,
  `nama_supplier` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`kode_supplier`, `nama_supplier`, `alamat`, `no_telpon`) VALUES
('001', 'Kimia Farma', 'Jl. Tes 2', '0957 332181');

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
  `id_poliklinik` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `status`, `nama`, `nik`, `sandi`, `sandi_deskripsi`, `level`, `email`, `id_poliklinik`) VALUES
(1, 'aktif', 'Michael', 1129002944, '82bc8f5141a48dd57bb43d91a5faae88', 'ekhel123', 1, 'michaelkarafir@gmail.com', 0),
(6, 'aktif', 'laboratorium', 1129002947, '081c49b8c66a69aad79f4bca8334e0ef', 'lab123', 4, '-', 0),
(7, 'aktif', 'Oktovianus', 1129002946, '2c7ef1a8805f4896ddb73f3b4269b437', 'adminpolik', 3, '-', 4),
(8, 'aktif', 'Martina', 1129002948, 'c7a45b45815f012b4923d12b9b63aaab', 'adminpolik1', 3, '-', 6),
(9, 'aktif', 'Errick', 1129002949, '554a81890fb2d074276956e1c1e72f9e', 'errick123', 3, '-', 2),
(10, 'aktif', 'Leni', 1129002941, 'aa4e063cd78ff95f69eea78e2f84fb78', 'leni123', 3, '-', 1),
(11, 'aktif', 'apotik', 1129002942, '748278f1231c3df3e162ca362930df24', 'apotik123', 5, '-', 0);

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
(2, 'Super Users'),
(3, 'Polik'),
(4, 'Laboratorium'),
(5, 'apotik');

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
-- Indexes for table `tbl_hasil_lab`
--
ALTER TABLE `tbl_hasil_lab`
  ADD PRIMARY KEY (`id_hasil`);

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
-- Indexes for table `tbl_jenis_periksalab`
--
ALTER TABLE `tbl_jenis_periksalab`
  ADD PRIMARY KEY (`id_jenis_pasien`);

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
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tbl_menu_level`
--
ALTER TABLE `tbl_menu_level`
  ADD PRIMARY KEY (`id_menu_level`);

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
-- Indexes for table `tbl_periksa_lab`
--
ALTER TABLE `tbl_periksa_lab`
  ADD PRIMARY KEY (`id_periksa_lab`);

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
-- Indexes for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  ADD PRIMARY KEY (`id_org`);

--
-- Indexes for table `tbl_resep`
--
ALTER TABLE `tbl_resep`
  ADD PRIMARY KEY (`id_resep`);

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
-- Indexes for table `tbl_sub_jenis_periksa`
--
ALTER TABLE `tbl_sub_jenis_periksa`
  ADD PRIMARY KEY (`id_sub_jenis`);

--
-- Indexes for table `tbl_sub_menu`
--
ALTER TABLE `tbl_sub_menu`
  ADD PRIMARY KEY (`id_sub_menu`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`kode_supplier`);

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
-- AUTO_INCREMENT for table `tbl_hasil_lab`
--
ALTER TABLE `tbl_hasil_lab`
  MODIFY `id_hasil` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_jenisperiksa`
--
ALTER TABLE `tbl_jenisperiksa`
  MODIFY `id_jenisperiksa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_jenis_periksalab`
--
ALTER TABLE `tbl_jenis_periksalab`
  MODIFY `id_jenis_pasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tbl_jenjang_pendidikan`
--
ALTER TABLE `tbl_jenjang_pendidikan`
  MODIFY `id_jenjang_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_menu_level`
--
ALTER TABLE `tbl_menu_level`
  MODIFY `id_menu_level` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tbl_obatalkes`
--
ALTER TABLE `tbl_obatalkes`
  MODIFY `id_barang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `id_pasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_periksa`
--
ALTER TABLE `tbl_periksa`
  MODIFY `id_periksa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `tbl_periksa_lab`
--
ALTER TABLE `tbl_periksa_lab`
  MODIFY `id_periksa_lab` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_poliklinik`
--
ALTER TABLE `tbl_poliklinik`
  MODIFY `id_poliklinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_praktek`
--
ALTER TABLE `tbl_praktek`
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_resep`
--
ALTER TABLE `tbl_resep`
  MODIFY `id_resep` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_satuan`
--
ALTER TABLE `tbl_satuan`
  MODIFY `id_satuan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_spesialis`
--
ALTER TABLE `tbl_spesialis`
  MODIFY `id_spesialis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_sub_jenis_periksa`
--
ALTER TABLE `tbl_sub_jenis_periksa`
  MODIFY `id_sub_jenis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_sub_menu`
--
ALTER TABLE `tbl_sub_menu`
  MODIFY `id_sub_menu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_user_level`
--
ALTER TABLE `tb_user_level`
  MODIFY `id_level` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

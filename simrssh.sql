-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 01:18 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simrssh`
--

-- --------------------------------------------------------

--
-- Table structure for table `arisans`
--

CREATE TABLE `arisans` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('Sudah','Belum') NOT NULL,
  `setoran` int(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kritik_saran` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_feedback` date NOT NULL,
  `feedback` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `nama`, `no_hp`, `tanggal`, `alamat`, `kritik_saran`, `tgl_feedback`, `feedback`, `created_at`, `updated_at`) VALUES
(4, 'testing666', '85642596666', '2018-01-01', 'Sragen66', 'Kurang pelan66', '2018-01-01', 'Dicepetin66', '2018-01-30 04:08:52', '2018-01-30 04:08:52'),
(5, 'naadkjB', '0215824125', '2018-01-24', 'SADF', 'FASAFS', '2018-01-26', 'AFSAFS', '2018-01-30 04:10:51', '2018-01-30 04:10:51'),
(6, 'AFDS', '08558232330', '2018-01-10', 'AFS', 'AFS', '2018-01-18', 'AFDS', '2018-01-30 04:11:17', '2018-01-30 04:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `cutis`
--

CREATE TABLE `cutis` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `cuti` enum('tahunan','hamil','menikah','melahirkan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` int(11) NOT NULL,
  `id_unit_kerja` int(11) NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cutis`
--

INSERT INTO `cutis` (`id`, `id_karyawan`, `cuti`, `hari`, `id_unit_kerja`, `keterangan`, `created_at`, `updated_at`) VALUES
(5, 1, 'melahirkan', 5, 6, 'leren', '2018-01-29 06:51:13', '2018-01-30 01:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `humas`
--

CREATE TABLE `humas` (
  `id` int(10) UNSIGNED NOT NULL,
  `surat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `humas`
--

INSERT INTO `humas` (`id`, `surat`, `tanggal`, `keterangan`, `created_at`, `updated_at`) VALUES
(5, '75/PKS/DIR/RSSH/I/2018', '2018-01-30', 'BUDHA', '2018-01-30 07:01:07', '2018-01-30 07:01:07'),
(6, '74/PO/DIR/RSSH/I/2018', '2018-01-30', 'PO Fingerprint', '2018-01-30 07:03:04', '2018-01-30 07:03:04');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` enum('box','lembar','lusin','pcs','biji','buah','meter','cm','kg','gram','roll','botol','kodi','rim') COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `nama`, `harga`, `satuan`, `stok`, `description`, `created_at`, `updated_at`) VALUES
(1, 'A4 Sidu 70g', 46000, 'rim', 12, 'Ready', '2018-01-24 13:00:25', '2018-01-24 13:00:25');

-- --------------------------------------------------------

--
-- Table structure for table `jabatans`
--

CREATE TABLE `jabatans` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatans`
--

INSERT INTO `jabatans` (`id`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Manajer Keperawatan', '2018-01-24 12:57:42', '2018-01-24 12:57:42'),
(2, 'Manajer Adm Umum dan Keuangan', '2018-01-26 11:11:48', '2018-01-26 11:11:48'),
(3, 'Koordinator IT', '2018-01-26 11:12:03', '2018-01-26 11:12:03'),
(4, 'Kepala Ruang IGD', '2018-01-26 11:12:40', '2018-01-26 11:12:40'),
(5, 'Kepala Ruang Radiologi', '2018-01-26 11:12:55', '2018-01-26 11:12:55'),
(6, 'Kepala Instalasi', '2018-01-26 11:13:12', '2018-01-26 11:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `karyawans`
--

CREATE TABLE `karyawans` (
  `id` int(11) NOT NULL,
  `nama_karyawan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmp_lahir` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `pendidikan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` enum('Islam','Kristen','Khatolik','Hindu','Budha') NOT NULL,
  `status` enum('Single','Menikah','Janda','Duda') NOT NULL,
  `no_hp` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_unit_kerja` int(11) NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawans`
--

INSERT INTO `karyawans` (`id`, `nama_karyawan`, `tmp_lahir`, `tgl_lahir`, `gender`, `pendidikan`, `agama`, `status`, `no_hp`, `id_unit_kerja`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Dede Widianti', 'Sragen', '1992-01-02', 'L', '', 'Islam', 'Single', '087647837682', 3, 'Sragen Wetan, Sragen, Jawa Tengah', NULL, NULL),
(4, 'Aji Guruh Prasetyo', 'Sragen', '1992-07-04', 'L', '', 'Islam', 'Menikah', '085888134146', 1, 'Sragen Dok, Sragen Wetan Sragen', '2018-01-26 04:27:28', '2018-01-26 04:27:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_17_042044_create_items_table', 1),
(4, '2018_01_17_042226_create_roles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'Display Role Listing', 'See only Listing Of Role', '2018-01-24 02:59:08', '2018-01-24 02:59:08'),
(2, 'role-create', 'Create Role', 'Create New Role', '2018-01-24 02:59:08', '2018-01-24 02:59:08'),
(3, 'role-edit', 'Edit Role', 'Edit Role', '2018-01-24 02:59:08', '2018-01-24 02:59:08'),
(4, 'role-delete', 'Delete Role', 'Delete Role', '2018-01-24 02:59:08', '2018-01-24 02:59:08'),
(5, 'item-list', 'Display Item Listing', 'See only Listing Of Item', '2018-01-24 02:59:08', '2018-01-24 02:59:08'),
(6, 'item-create', 'Create Item', 'Create New Item', '2018-01-24 02:59:08', '2018-01-24 02:59:08'),
(7, 'item-edit', 'Edit Item', 'Edit Item', '2018-01-24 02:59:08', '2018-01-24 02:59:08'),
(8, 'item-delete', 'Delete Item', 'Delete Item', '2018-01-24 02:59:08', '2018-01-24 02:59:08'),
(9, 'humas-list', 'Display Humas Listing', 'See only Listing Of Humas', '2018-01-24 02:59:08', '2018-01-24 02:59:08'),
(10, 'humas-create', 'Create Humas', 'Create New Humas', '2018-01-24 02:59:08', '2018-01-24 02:59:08'),
(11, 'humas-edit', 'Edit Humas', 'Edit Humas', '2018-01-24 02:59:08', '2018-01-24 02:59:08'),
(12, 'humas-delete', 'Delete Humas', 'Delete Humas', '2018-01-24 02:59:08', '2018-01-24 02:59:08'),
(13, 'unit_kerja-list', 'Display Unit Kerja Listing', 'See only Listing Of Unit Kerja', '2018-01-24 04:32:20', '2018-01-24 04:32:20'),
(14, 'unit_kerja-create', 'Create Unit Kerja', 'Create New Unit Kerja', '2018-01-24 04:32:20', '2018-01-24 04:32:20'),
(15, 'unit_kerja-edit', 'Edit Unit Kerja', 'Edit Unit Kerja', '2018-01-24 04:32:20', '2018-01-24 04:32:20'),
(16, 'unit_kerja-delete', 'Delete Unit Kerja', 'Delete Unit Kerja', '2018-01-24 04:32:20', '2018-01-24 04:32:20'),
(17, 'jabatan-list', 'Display Jabatan Listing', 'See only Listing Of Jabatan', '2018-01-24 08:24:41', '2018-01-24 08:24:41'),
(18, 'jabatan-create', 'Create Jabatan', 'Create New Jabatan', '2018-01-24 08:24:41', '2018-01-24 08:24:41'),
(19, 'jabatan-edit', 'Edit Jabatan', 'Edit Jabatan', '2018-01-24 08:24:41', '2018-01-24 08:24:41'),
(20, 'jabatan-delete', 'Delete Jabatan', 'Delete Jabatan', '2018-01-24 08:24:41', '2018-01-24 08:24:41'),
(21, 'complaint-list', 'Display Complaint Listing', 'See only Listing Of Complaint', '2018-01-24 13:23:21', '2018-01-24 13:23:21'),
(22, 'complaint-create', 'Create Complaint', 'Create New Complaint', '2018-01-24 13:23:21', '2018-01-24 13:23:21'),
(23, 'complaint-edit', 'Edit Complaint', 'Edit Complaint', '2018-01-24 13:23:21', '2018-01-24 13:23:21'),
(24, 'complaint-delete', 'Delete Complaint', 'Delete Complaint', '2018-01-24 13:23:21', '2018-01-24 13:23:21'),
(25, 'karyawan-list', 'Display Karyawan Listing', 'See only Listing Of Karyawan', '2018-01-26 02:17:00', '2018-01-26 02:17:00'),
(26, 'karyawan-create', 'Create Karyawan', 'Create New Karyawan', '2018-01-26 02:17:00', '2018-01-26 02:17:00'),
(27, 'karyawan-edit', 'Edit Karyawan', 'Edit Karyawan', '2018-01-26 02:17:00', '2018-01-26 02:17:00'),
(28, 'karyawan-delete', 'Delete Karyawan', 'Delete Karyawan', '2018-01-26 02:17:00', '2018-01-26 02:17:00'),
(29, 'humas-download', 'Download Humas', 'Download Humas', '2018-01-26 11:24:18', '2018-01-26 11:24:18'),
(30, 'humas-laporan', 'Laporan Humas', 'Laporan Humas', '2018-01-27 00:51:04', '2018-01-27 00:51:04'),
(31, 'complaint-download', 'Download Complaint', 'Download Complaint', '2018-01-27 02:54:08', '2018-01-27 02:54:08'),
(32, 'complaint-laporan', 'Laporan Complaint', 'Laporan Complaint', '2018-01-27 02:54:08', '2018-01-27 02:54:08'),
(33, 'cuti-list', 'Display Cuti Listing', 'See only Listing Of Cuti', '2018-01-29 01:24:13', '2018-01-29 01:24:13'),
(34, 'cuti-create', 'Create Cuti', 'Create New Cuti', '2018-01-29 01:24:13', '2018-01-29 01:24:13'),
(35, 'cuti-edit', 'Edit Cuti', 'Edit Cuti', '2018-01-29 01:24:13', '2018-01-29 01:24:13'),
(36, 'cuti-delete', 'Delete Cuti', 'Delete Cuti', '2018-01-29 01:24:13', '2018-01-29 01:24:13'),
(37, 'arisan-list', 'Display Arisan Listing', 'See only Listing Of Arisan', '2018-02-06 04:19:00', '2018-02-06 04:19:00'),
(38, 'arisan-create', 'Create Arisan', 'Create New Arisan', '2018-02-06 04:19:00', '2018-02-06 04:19:00'),
(39, 'arisan-edit', 'Edit Arisan', 'Edit Arisan', '2018-02-06 04:19:00', '2018-02-06 04:19:00'),
(40, 'arisan-delete', 'Delete Arisan', 'Delete Arisan', '2018-02-06 04:19:00', '2018-02-06 04:19:00'),
(41, 'ppi-list', 'Display Ppi Listing', 'See only Listing Of Ppi', '2018-04-16 04:00:42', '2018-04-16 04:00:42'),
(42, 'ppi-create', 'Create Ppi', 'Create New Ppi', '2018-04-16 04:00:42', '2018-04-16 04:00:42'),
(43, 'ppi-edit', 'Edit Ppi', 'Edit Ppi', '2018-04-16 04:00:42', '2018-04-16 04:00:42'),
(44, 'ppi-delete', 'Delete Ppi', 'Delete Ppi', '2018-04-16 04:00:42', '2018-04-16 04:00:42'),
(45, 'pmkp-list', 'Display Pmkp Listing', 'See only Listing Of Pmkp', '2018-04-16 06:33:40', '2018-04-16 06:33:40'),
(46, 'pmkp-create', 'Create Pmkp', 'Create New Pmkp', '2018-04-16 06:33:40', '2018-04-16 06:33:40'),
(47, 'pmkp-edit', 'Edit Pmkp', 'Edit Pmkp', '2018-04-16 06:33:40', '2018-04-16 06:33:40'),
(48, 'pmkp-delete', 'Delete Pmkp', 'Delete Pmkp', '2018-04-16 06:33:40', '2018-04-16 06:33:40'),
(50, 'ppi-download', 'Download Ppi', 'Download Ppi', '2018-04-16 06:55:52', '2018-04-16 06:55:52'),
(51, 'ppi-laporan', 'Laporan Ppi', 'Laporan Ppi', '2018-04-16 06:55:52', '2018-04-16 06:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 3),
(10, 1),
(10, 3),
(11, 1),
(11, 3),
(12, 1),
(12, 3),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(21, 3),
(22, 1),
(22, 3),
(23, 1),
(23, 3),
(24, 1),
(24, 3),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(29, 3),
(30, 1),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(50, 1),
(51, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pmkps`
--

CREATE TABLE `pmkps` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori_pmkp` enum('Indikator Area Klinis','Indikator Area Manajemen','Indikator Area Keselamatan Pasien','International Library','Indikator Mutu Lainnya','Indikator Mutu Unit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pmkp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ind_mutu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `def_oprs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_jawab` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kbjkan_mutu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_pemikiran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `numerator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `denominator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formula` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `k_inklusi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `k_eksklusi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metode` enum('Concurrent','Retrospective') COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Input','Proses','Outcome') COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_monitor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `w_lapor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_analisa` enum('Hari','Minggu','Bulan','Triwulan','Semester','Tahun') COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_standar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_kerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_sampel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_komunikasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_unit_kerja` int(10) UNSIGNED NOT NULL,
  `unitkerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capaian` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pmkps`
--

INSERT INTO `pmkps` (`id`, `kategori_pmkp`, `kode_pmkp`, `nama_ind_mutu`, `def_oprs`, `p_jawab`, `kbjkan_mutu`, `d_pemikiran`, `numerator`, `denominator`, `formula`, `k_inklusi`, `k_eksklusi`, `metode`, `type`, `area_monitor`, `w_lapor`, `p_analisa`, `n_standar`, `t_kerja`, `j_sampel`, `h_komunikasi`, `created_at`, `updated_at`, `id_unit_kerja`, `unitkerja`, `capaian`) VALUES
(1, 'Indikator Area Klinis', 'DT/IV/UND/I/2018', '	ANGKA KELENGKAPAN FORMULIR LAYANAN HOLISTIC HEALTH CARE', 'Angka kelengkapan dalam pengisian form 70 tentang Layanan Holistic Care dibandingkan dengan jumlah semua pengisian formulir yang ada pada waktu tertentu.', 'Karu Anak', 'Hak dan Kewajiban Pasien', 'UU No. 44 Tahun 2009 tentang Rumah Sakit, Hak-hak pasien salah satunya adalah hak menjalankan ibadah sesuai agama atau kepercayaan yang dianutnya selama hal itu tidak mengganggu pasien lainnya. Rumah sakit menjamin pasien untuk mendapatkan santunan ruhani selambat-lambatnya 2x24 jam.', 'Jumlah form 70 yang lengkap', 'Jumlah form 70 pada semua pasien', 'Jumlah form 70 yang lengkap\r\n-------------------------------------------------- x 100%\r\nJumlah form 70 pada semua pasien', 'Pasien yang dirawat lebih dari 2x24 jam', 'Pasien yang dirawat kurang dari 2x24 jam', 'Retrospective', 'Input', 'Unit Rawat Inap', 'April, Juli, Oktober, Januari', 'Triwulan', '100 %', '> 70 %', 'Semua pasien', 'Rapat Pelayanan, SMART Pro PKU', NULL, NULL, 24, 'Farmasi', '90%');

-- --------------------------------------------------------

--
-- Table structure for table `ppis`
--

CREATE TABLE `ppis` (
  `id` int(10) UNSIGNED NOT NULL,
  `ruang_id` int(10) UNSIGNED DEFAULT NULL,
  `jml_pasien_rawat` int(11) NOT NULL,
  `jml_tirah_baring` int(11) NOT NULL,
  `total_operasi` int(11) NOT NULL,
  `hsl_kultur` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ivc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vm` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ett` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plebitis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isk` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dekubitus` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ido` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ppis`
--

INSERT INTO `ppis` (`id`, `ruang_id`, `jml_pasien_rawat`, `jml_tirah_baring`, `total_operasi`, `hsl_kultur`, `created_at`, `updated_at`, `ivc`, `uc`, `vm`, `ett`, `plebitis`, `isk`, `vap`, `hap`, `dekubitus`, `ido`, `ruang`) VALUES
(16, NULL, 0, 1, 0, 'Bagus', '2018-04-11 07:41:29', '2018-04-11 07:41:29', '1', '1', '0', '1', '0', '1', '0', '1', '0', '1', 'Farmasi'),
(18, NULL, 1, 1, 1, '1', '2018-04-15 08:20:04', '2018-04-15 08:20:04', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'Anak');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'SU', 'Super User', 'Super User', NULL, NULL),
(2, 'Purchasing', 'Purchasing', 'Purchasing', '2018-01-24 03:47:07', '2018-01-24 03:47:07'),
(3, 'Humas', 'Humas', 'Hukum Masyarakat', '2018-01-24 03:58:17', '2018-01-24 03:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 3),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ruangs`
--

CREATE TABLE `ruangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_ruang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruangs`
--

INSERT INTO `ruangs` (`id`, `nama_ruang`, `created_at`, `updated_at`) VALUES
(1, 'Perinatologi', NULL, NULL),
(2, 'Anak', NULL, '2018-04-05 06:13:15'),
(5, 'IGD', NULL, NULL),
(7, 'Farmasi', NULL, NULL),
(8, 'Perinatologi', NULL, NULL),
(9, 'Fisioterapi', NULL, NULL),
(10, 'IGD', NULL, NULL),
(11, 'ICU', NULL, NULL),
(12, 'IBS', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unit_kerjas`
--

CREATE TABLE `unit_kerjas` (
  `id` int(11) NOT NULL,
  `unit_kerja` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_kerjas`
--

INSERT INTO `unit_kerjas` (`id`, `unit_kerja`, `created_at`, `updated_at`, `keterangan`) VALUES
(1, 'IGD', '2018-01-24 06:28:31', '2018-01-24 06:28:31', 'Instalasi Gawat Darurat'),
(3, 'IT', '2018-01-24 06:35:03', '2018-01-24 07:06:48', 'Informasi Teknologi'),
(4, 'VK', '2018-01-25 04:31:51', '2018-01-25 04:31:51', 'Bidan'),
(5, 'Kasir RI', '2018-01-25 04:32:06', '2018-01-25 04:32:06', 'Kasir Rawat Inap'),
(6, 'Poli', '2018-01-25 04:32:30', '2018-01-25 04:32:30', 'Poliklinik'),
(7, 'Lab', '2018-01-25 04:32:49', '2018-01-25 04:32:49', 'Laboratorium'),
(8, 'Admin', '2018-01-25 04:33:04', '2018-01-25 04:33:04', 'Administrasi'),
(9, 'Apotik', '2018-01-25 04:33:26', '2018-01-25 04:33:26', 'Apotik Farmasi'),
(10, 'Fisio', '2018-01-25 04:33:58', '2018-01-25 04:33:58', 'Fisioterapi'),
(11, 'Supir', '2018-01-25 04:34:16', '2018-01-25 04:34:16', 'Driver'),
(12, 'CS', '2018-01-25 04:34:31', '2018-01-25 04:34:31', 'Cleaning Service'),
(13, 'Kasir RJ', '2018-01-25 04:39:43', '2018-01-25 04:39:43', 'Kasir Rawat Jalan'),
(14, 'RM', '2018-01-25 04:40:12', '2018-01-25 04:40:12', 'Rekam Medis'),
(15, 'Kebidanan', '2018-01-25 04:40:24', '2018-01-25 04:40:24', 'Kebidanan'),
(16, 'Perina', '2018-01-25 04:40:40', '2018-01-25 04:40:40', 'Perinatologi'),
(17, 'CSSD', '2018-01-25 04:41:02', '2018-01-25 04:41:02', 'CSSD'),
(18, 'IBS', '2018-01-25 04:41:25', '2018-01-25 04:41:25', 'Instalasi Bedah Sentral'),
(19, 'Gizi', '2018-01-25 04:41:40', '2018-01-25 04:41:40', 'Gizi'),
(20, 'Anak', '2018-01-25 04:42:59', '2018-01-25 04:42:59', 'Anak'),
(21, 'IPCN', '2018-01-25 04:43:10', '2018-01-25 04:43:10', 'IPCN'),
(22, 'ICU', '2018-01-25 04:43:34', '2018-01-25 04:43:34', 'Intensive Care Unit'),
(23, 'Dewasa', '2018-01-29 00:57:13', '2018-01-29 00:57:13', 'Bangsal Dewasa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aji Guruh P', 'aji@rssh.id', '$2y$10$OQhSPbDHHg391luwY0c8RedDOzaW.IJHXCAz7uTKrQQKUTGksz.d2', '2T9LKGu4rrmmrLXyGNduXoBJYIYnCLPoyweuq53qAlduddPomHuug5uGZE97', '2018-01-24 02:57:23', '2018-01-24 02:57:23'),
(2, 'Anisa', 'anisa@rssh.id', '$2y$10$yIfhAn.0dSr1h.6Ope9PpOmRc4/TdopDkmp2e/hl8cmGUP2CLb7cq', 'RzDOOecguhZ36MJq2u6pkZ5iVmhZfnZ4oLa4c5r3YfKJqzgcFhzfGlnzwJTn', '2018-01-24 03:59:46', '2018-01-24 03:59:46'),
(3, 'Dita Chaniago', 'dita@rssh.id', '$2y$10$0Z8af4rqCSp4lUt4U9uq1uUE0CpIjcuzXzr0wPGCigMWyxVM33bfS', NULL, '2018-01-24 04:00:24', '2018-01-24 04:00:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arisans`
--
ALTER TABLE `arisans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cutis`
--
ALTER TABLE `cutis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_karyawan_fk` (`id_karyawan`),
  ADD KEY `id_unit_kerja_fk` (`id_unit_kerja`);

--
-- Indexes for table `humas`
--
ALTER TABLE `humas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fk_unit_kerja` (`id_unit_kerja`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `pmkps`
--
ALTER TABLE `pmkps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pmkps_id_unit_kerja_foreign` (`id_unit_kerja`);

--
-- Indexes for table `ppis`
--
ALTER TABLE `ppis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ppis_ruang_id_foreign` (`ruang_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `ruangs`
--
ALTER TABLE `ruangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_kerjas`
--
ALTER TABLE `unit_kerjas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arisans`
--
ALTER TABLE `arisans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cutis`
--
ALTER TABLE `cutis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `humas`
--
ALTER TABLE `humas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `pmkps`
--
ALTER TABLE `pmkps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ppis`
--
ALTER TABLE `ppis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ruangs`
--
ALTER TABLE `ruangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `unit_kerjas`
--
ALTER TABLE `unit_kerjas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cutis`
--
ALTER TABLE `cutis`
  ADD CONSTRAINT `id_karyawan_fk` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_unit_kerja_fk` FOREIGN KEY (`id_unit_kerja`) REFERENCES `unit_kerjas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawans`
--
ALTER TABLE `karyawans`
  ADD CONSTRAINT `id_fk_unit_kerja` FOREIGN KEY (`id_unit_kerja`) REFERENCES `unit_kerjas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

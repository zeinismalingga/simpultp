-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 01, 2020 at 04:50 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `simbul`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id_bulan` int(11) NOT NULL,
  `nama_bulan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `nama_bulan`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `cek_mutu_pangan`
--

CREATE TABLE `cek_mutu_pangan` (
  `id_cek_mutu_pangan` int(11) NOT NULL,
  `id_komoditi` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `jumlah_benih` int(11) NOT NULL,
  `memenuhi_standar_perkilo` int(11) NOT NULL,
  `memenuhi_standar_persen` float(10,2) NOT NULL,
  `dibawah_standar_perkilo` int(11) NOT NULL,
  `dibawah_standar_persen` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cek_mutu_pangan`
--

INSERT INTO `cek_mutu_pangan` (`id_cek_mutu_pangan`, `id_komoditi`, `id_bulan`, `jumlah_benih`, `memenuhi_standar_perkilo`, `memenuhi_standar_persen`, `dibawah_standar_perkilo`, `dibawah_standar_persen`) VALUES
(2, 1, 1, 100000, 100000, 93.26, 100000, 6.74);

-- --------------------------------------------------------

--
-- Table structure for table `input_lab_apbd`
--

CREATE TABLE `input_lab_apbd` (
  `id_input_lab_apbd` int(11) NOT NULL,
  `id_tu_apbd` int(11) NOT NULL,
  `no_asal` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_lab_apbd`
--

INSERT INTO `input_lab_apbd` (`id_input_lab_apbd`, `id_tu_apbd`, `no_asal`) VALUES
(1, 4, 'TM. 01'),
(2, 1, 'TM. 00');

-- --------------------------------------------------------

--
-- Table structure for table `input_lab_apbn`
--

CREATE TABLE `input_lab_apbn` (
  `id_input_lab_apbn` int(11) NOT NULL,
  `id_tu_apbn` int(11) NOT NULL,
  `no_asal` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_lab_apbn`
--

INSERT INTO `input_lab_apbn` (`id_input_lab_apbn`, `id_tu_apbn`, `no_asal`) VALUES
(2, 5, 'TM. 01'),
(3, 6, 'TM. 02'),
(4, 7, 'TM. 00'),
(5, 8, 'TM. 00'),
(6, 9, 'TM. 00'),
(7, 10, 'TM. 00');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_pengedar`
--

CREATE TABLE `inventaris_pengedar` (
  `id_inventaris_pengedar` int(11) NOT NULL,
  `no_rekomendasi` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `nama_pimpinan` varchar(50) NOT NULL,
  `alamat_lokasi_usaha` text NOT NULL,
  `alamat_pimpinan` text NOT NULL,
  `bentuk_usaha` varchar(50) NOT NULL,
  `id_jenis_varietas` int(11) DEFAULT NULL,
  `id_kelas_benih` int(11) DEFAULT NULL,
  `tgl_inventaris_pengedar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventaris_pengedar`
--

INSERT INTO `inventaris_pengedar` (`id_inventaris_pengedar`, `no_rekomendasi`, `nama_perusahaan`, `nama_pimpinan`, `alamat_lokasi_usaha`, `alamat_pimpinan`, `bentuk_usaha`, `id_jenis_varietas`, `id_kelas_benih`, `tgl_inventaris_pengedar`) VALUES
(1, '14/100.Pgd/BB/UPTD PSBTPH/10.2019', 'PT. RAJAWALI NUSINDO', 'IRANINGSIH HASAN', 'JL. MT Haryono RT.30 No. 06 Kec. Balikpapan Selatan', 'JL. MT Haryono RT.30 No. 06 Kec. Balikpapan Selatan', 'PT/Persero', 1, 2, '2020-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_produsen`
--

CREATE TABLE `inventaris_produsen` (
  `id_inventaris_pangan` int(11) NOT NULL,
  `nama_produsen` varchar(50) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `nama_pimpinan` varchar(50) NOT NULL,
  `luas_lahan` int(11) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `lamanya_usaha` int(11) NOT NULL,
  `modal_kerja` int(11) NOT NULL,
  `kapasitas_produksi` int(11) NOT NULL,
  `kemampuan_produksi` int(11) NOT NULL,
  `bumn` int(11) NOT NULL,
  `diperta_prov` int(11) NOT NULL,
  `diperta_kab` int(11) NOT NULL,
  `swasta` int(11) NOT NULL,
  `produksi_benih` int(11) NOT NULL,
  `ijin_produksi` varchar(50) NOT NULL,
  `mendapat_bantuan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventaris_produsen`
--

INSERT INTO `inventaris_produsen` (`id_inventaris_pangan`, `nama_produsen`, `desa`, `id_kecamatan`, `id_kota`, `nama_pimpinan`, `luas_lahan`, `no_hp`, `lamanya_usaha`, `modal_kerja`, `kapasitas_produksi`, `kemampuan_produksi`, `bumn`, `diperta_prov`, `diperta_kab`, `swasta`, `produksi_benih`, `ijin_produksi`, `mendapat_bantuan`) VALUES
(2, 'KPB Gapoktan', 'Cipta Graha', 198, 2, 'Waluyo', 30, '081347298088', 8, 300, 300, 350, 0, 1, 1, 0, 30, '01.92.Prod/BB.UPTD. PSBTPH/2,2019', 2016);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tanaman`
--

CREATE TABLE `jenis_tanaman` (
  `id_jenis_tanaman` int(11) NOT NULL,
  `nama_jenis_tanaman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_tanaman`
--

INSERT INTO `jenis_tanaman` (`id_jenis_tanaman`, `nama_jenis_tanaman`) VALUES
(1, 'Padi'),
(2, 'Palawija');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_varietas`
--

CREATE TABLE `jenis_varietas` (
  `id_jenis_varietas` int(11) NOT NULL,
  `id_jenis_tanaman` int(11) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_varietas`
--

INSERT INTO `jenis_varietas` (`id_jenis_varietas`, `id_jenis_tanaman`, `nama_jenis`) VALUES
(1, 1, 'padi inbrida'),
(2, 1, 'padi hibrida'),
(3, 1, 'jagung komposit'),
(4, 1, 'jagung hibrida'),
(5, 1, 'kedelai'),
(6, 1, 'kacang tanah'),
(7, 1, 'kacang hijau'),
(8, 2, 'ubi kayu'),
(9, 2, 'ubi jalar'),
(10, 2, 'gandum'),
(11, 2, 'sorghum'),
(12, 1, 'kacang merah'),
(13, 2, 'talas'),
(14, 1, 'padi lokal');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `id_kota`, `nama_kecamatan`) VALUES
(142, 1, 'Balikpapan Barat'),
(143, 1, 'Balikpapan Kota'),
(144, 1, 'Balikpapan Selatan'),
(145, 1, 'Balikpapan Selatan'),
(146, 1, 'Balikpapan Tengah'),
(147, 1, 'Balikpapan Timur'),
(148, 1, 'Balikpapan Utara'),
(149, 8, 'Batu Putih'),
(150, 8, 'Biatan'),
(151, 8, 'Biduk-Biduk'),
(152, 8, 'Derawan (Pulau Derawan)'),
(153, 8, 'Gunung Tabur'),
(154, 8, 'Kelay'),
(155, 8, 'Maratua'),
(156, 8, 'Sambaliung'),
(157, 8, 'Segah'),
(158, 8, 'Tabalar'),
(159, 8, 'Talisayan'),
(160, 8, 'Tanjung Redeb'),
(161, 8, 'Teluk Bayur'),
(198, 2, 'Anggana'),
(199, 2, 'Kembang Janggut'),
(200, 2, 'Kenohan'),
(201, 2, 'Kota Bangun'),
(202, 2, 'Loa Janan'),
(203, 2, 'Loa Kulu'),
(204, 2, 'Marang Kayu'),
(205, 2, 'Muara Badak'),
(206, 2, 'Muara Jawa'),
(207, 2, 'Muara Kaman'),
(208, 2, 'Muara Muntai'),
(209, 2, 'Muara Wis'),
(210, 2, 'Samboja (Semboja)'),
(211, 2, 'Sanga-Sanga'),
(212, 2, 'Sebulu'),
(213, 2, 'Tabang'),
(214, 2, 'Tenggarong'),
(215, 2, 'Tenggarong Seberang'),
(216, 6, 'Bontang Barat'),
(217, 6, 'Bontang Selatan'),
(218, 6, 'Bontang Utara'),
(219, 4, 'Barong Tongkok'),
(220, 4, 'Bentian Besar'),
(221, 4, 'Bongan'),
(222, 4, 'Damai'),
(223, 4, 'Jempang'),
(224, 4, 'Linggang Bigung'),
(225, 4, 'Long Iram'),
(226, 4, 'Melak'),
(227, 4, 'Mook Manaar Bulatn'),
(228, 4, 'Muara Lawa'),
(229, 4, 'Muara Pahu'),
(230, 4, 'Nyuatan'),
(231, 4, 'Penyinggahan'),
(232, 4, 'Sekolaq Darat'),
(233, 4, 'Siluq Ngurai'),
(234, 4, 'Tering'),
(235, 7, 'Batu Ampar'),
(236, 7, 'Bengalon'),
(237, 7, 'Busang'),
(238, 7, 'Kaliorang'),
(239, 7, 'Karangan'),
(240, 7, 'Kaubun'),
(241, 7, 'Kongbeng'),
(242, 7, 'Long Mesangat (Mesengat)'),
(243, 7, 'Muara Ancalong'),
(244, 7, 'Muara Bengkal'),
(245, 7, 'Muara Wahau'),
(246, 7, 'Rantau Pulung'),
(247, 7, 'Sandaran'),
(248, 7, 'Sangatta Selatan'),
(249, 7, 'Sangatta Utara'),
(250, 7, 'Sangkulirang'),
(251, 7, 'Telen'),
(252, 7, 'Teluk Pandan'),
(253, 5, 'Laham'),
(254, 5, 'Long Apari'),
(255, 5, 'Long Bagun'),
(256, 5, 'Long Hubung'),
(257, 5, 'Long Pahangai'),
(258, 9, 'Batu Engau'),
(259, 9, 'Batu Sopang'),
(260, 9, 'Kuaro'),
(261, 9, 'Long Ikis'),
(262, 9, 'Long Kali'),
(263, 9, 'Muara Komam'),
(264, 9, 'Muara Samu'),
(265, 9, 'Pasir Belengkong'),
(266, 9, 'Tanah Grogot'),
(267, 9, 'Tanjung Harapan'),
(268, 10, 'Babulu'),
(269, 10, 'Penajam'),
(270, 10, 'Sepaku'),
(271, 10, 'Waru'),
(272, 3, 'Loa Janan Ilir'),
(273, 3, 'Palaran'),
(274, 3, 'Samarinda Ilir'),
(275, 3, 'Samarinda Kota'),
(276, 3, 'Samarinda Seberang'),
(277, 3, 'Samarinda Ulu'),
(278, 3, 'Samarinda Utara'),
(279, 3, 'Sambutan'),
(280, 3, 'Sungai Kunjang'),
(281, 3, 'Sungai Pinang');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_benih`
--

CREATE TABLE `kelas_benih` (
  `id_kelas_benih` int(11) NOT NULL,
  `nama_kelas_benih` varchar(20) NOT NULL,
  `singkatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_benih`
--

INSERT INTO `kelas_benih` (`id_kelas_benih`, `nama_kelas_benih`, `singkatan`) VALUES
(2, 'benih dasar', 'BD'),
(3, 'benih pokok', 'BP'),
(4, 'benih sebar', 'BR'),
(5, 'benih penjenis', 'BS');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_benih2`
--

CREATE TABLE `kelas_benih2` (
  `id_kelas_benih2` int(11) NOT NULL,
  `nama_kelas_benih2` varchar(20) NOT NULL,
  `singkatan2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_benih2`
--

INSERT INTO `kelas_benih2` (`id_kelas_benih2`, `nama_kelas_benih2`, `singkatan2`) VALUES
(2, 'benih dasar', 'BD'),
(3, 'benih pokok', 'BP'),
(4, 'benih sebar', 'BR'),
(5, 'benih penjenis', 'BS');

-- --------------------------------------------------------

--
-- Table structure for table `komoditi`
--

CREATE TABLE `komoditi` (
  `id_komoditi` int(11) NOT NULL,
  `nama_komoditi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komoditi`
--

INSERT INTO `komoditi` (`id_komoditi`, `nama_komoditi`) VALUES
(1, 'Benih Padi Non Hibrida'),
(2, 'Benih Padi Hibrida'),
(3, 'Benih Jagung Komposit'),
(4, 'Benih Jagung Hibrida'),
(5, 'Benih Kedelai'),
(6, 'Benih Kacang Tanah'),
(7, 'Benih Kacang Hijau'),
(8, 'Benih Komoditi Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
(1, 'balikpapan'),
(2, 'kutai kartanegara'),
(3, 'samarinda'),
(4, 'kutai barat'),
(5, 'mahakam ulu'),
(6, 'bontang'),
(7, 'kutai timur'),
(8, 'berau'),
(9, 'paser'),
(10, 'penajam paser utara');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `id_lab` int(11) NOT NULL,
  `id_lab_anggaran` int(11) NOT NULL,
  `no_lab` varchar(11) NOT NULL,
  `kadar_air` float(10,1) DEFAULT NULL,
  `metode_ka` varchar(100) NOT NULL,
  `berat_cnth_kerja` float(10,2) DEFAULT NULL,
  `benih_murni` float(10,1) DEFAULT NULL,
  `benih_tan_lain` float(10,1) DEFAULT NULL,
  `kotoran_benih` varchar(11) DEFAULT NULL,
  `metode_kemurnian` varchar(100) NOT NULL,
  `benih_gulma_gr` float(10,4) NOT NULL,
  `benih_gulma_persen` float(10,1) NOT NULL,
  `jangka_waktu_pengujian` int(11) DEFAULT NULL,
  `kecambah_normal` int(11) DEFAULT NULL,
  `kecambah_abnormal` int(11) DEFAULT NULL,
  `benih_keras` int(11) DEFAULT NULL,
  `benih_segar` int(11) DEFAULT NULL,
  `benih_mati` int(11) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `suhu` varchar(50) DEFAULT NULL,
  `media` varchar(50) DEFAULT NULL,
  `abnormalis` varchar(50) DEFAULT NULL,
  `catatan` varchar(50) NOT NULL,
  `tgl_pengujian` date DEFAULT NULL,
  `tgl_selesai_pengujian` date DEFAULT NULL,
  `hasil` int(11) NOT NULL DEFAULT '0',
  `anggaran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`id_lab`, `id_lab_anggaran`, `no_lab`, `kadar_air`, `metode_ka`, `berat_cnth_kerja`, `benih_murni`, `benih_tan_lain`, `kotoran_benih`, `metode_kemurnian`, `benih_gulma_gr`, `benih_gulma_persen`, `jangka_waktu_pengujian`, `kecambah_normal`, `kecambah_abnormal`, `benih_keras`, `benih_segar`, `benih_mati`, `ket`, `suhu`, `media`, `abnormalis`, `catatan`, `tgl_pengujian`, `tgl_selesai_pengujian`, `hasil`, `anggaran`) VALUES
(9, 10, 'S.01', 12.0, 'metode', 1.00, 1.0, 1.0, '1', '1', 1.0000, 1.0, 1, 1, 1, 1, 1, 1, 'ok', '20', 'media', '-', '-', '2020-05-07', '2020-05-31', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lab_apbd`
--

CREATE TABLE `lab_apbd` (
  `id_lab_apbd` int(11) NOT NULL,
  `id_tu_apbd` int(11) NOT NULL,
  `nomor` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lab_apbn`
--

CREATE TABLE `lab_apbn` (
  `id_lab_apbn` int(11) NOT NULL,
  `id_tu_apbn` int(11) NOT NULL,
  `nomor` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_apbn`
--

INSERT INTO `lab_apbn` (`id_lab_apbn`, `id_tu_apbn`, `nomor`) VALUES
(10, 9, '01');

-- --------------------------------------------------------

--
-- Table structure for table `musim_tanam`
--

CREATE TABLE `musim_tanam` (
  `id_musim_tanam` int(11) NOT NULL,
  `tahun_mt` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `musim_tanam`
--

INSERT INTO `musim_tanam` (`id_musim_tanam`, `tahun_mt`) VALUES
(1, '2019'),
(2, '2019/2020'),
(3, '2020'),
(4, '2020/2021'),
(5, '2021');

-- --------------------------------------------------------

--
-- Table structure for table `pelabelan_benih`
--

CREATE TABLE `pelabelan_benih` (
  `id_pelabelan_benih` int(11) NOT NULL,
  `id_sertifikasi` int(11) NOT NULL,
  `no_awal` int(11) NOT NULL,
  `no_akhir` int(11) NOT NULL,
  `berat_kemasan` int(11) NOT NULL,
  `jml_lembar` int(11) NOT NULL,
  `total_terlabel` int(11) NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `jenis_anggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelabelan_benih`
--

INSERT INTO `pelabelan_benih` (`id_pelabelan_benih`, `id_sertifikasi`, `no_awal`, `no_akhir`, `berat_kemasan`, `jml_lembar`, `total_terlabel`, `tgl_kadaluarsa`, `jenis_anggaran`) VALUES
(2, 21, 1, 20, 22, 33, 44, '2020-05-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sertifikasi`
--

CREATE TABLE `sertifikasi` (
  `id_sertifikasi` int(11) NOT NULL,
  `id_varietas` int(11) NOT NULL,
  `id_musim_tanam` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `no_induk` varchar(30) NOT NULL,
  `nomor_sumber` varchar(30) NOT NULL,
  `pemohon` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas` int(11) NOT NULL,
  `id_jenis_tanaman` int(11) NOT NULL,
  `id_jenis_varietas` int(11) NOT NULL,
  `id_kelas_benih` int(11) NOT NULL,
  `tgl_tanam` date NOT NULL,
  `blok` varchar(30) DEFAULT NULL,
  `kampung` varchar(100) DEFAULT NULL,
  `desa` varchar(100) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `jenis_tanaman` varchar(20) NOT NULL,
  `produsen_benih` varchar(100) NOT NULL,
  `asal_benih` varchar(100) NOT NULL,
  `id_kelas_benih2` int(11) NOT NULL,
  `jumlah_benih` int(11) NOT NULL,
  `no_kelompok_benih` varchar(30) DEFAULT NULL,
  `jenis_anggaran` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `nama_pbt` varchar(50) DEFAULT NULL,
  `tgl_pemlap_pendahuluan` date DEFAULT NULL,
  `kesimpulan_pemlap_pendahuluan` varchar(100) DEFAULT NULL,
  `tgl_kesimpulan` date DEFAULT NULL,
  `tgl_semai` date DEFAULT NULL,
  `tgl_pemlap_1` date DEFAULT NULL,
  `cvl_pemlap_1` float DEFAULT NULL,
  `luas_pemlap_1` int(11) DEFAULT NULL,
  `lulus_1` int(11) DEFAULT NULL,
  `tgl_pemlap_2` date DEFAULT NULL,
  `cvl_pemlap_2` float DEFAULT NULL,
  `luas_pemlap_2` int(11) DEFAULT NULL,
  `lulus_2` int(11) DEFAULT NULL,
  `tgl_pemlap_3` date DEFAULT NULL,
  `cvl_pemlap_3` float DEFAULT NULL,
  `luas_pemlap_3` int(11) DEFAULT NULL,
  `lulus_3` int(11) DEFAULT NULL,
  `tgl_pemeriksaan_alat_panen` date DEFAULT NULL,
  `tgl_panen` date DEFAULT NULL,
  `produksi` int(11) DEFAULT NULL,
  `tgl_permohonan_pengambilan_cb` date DEFAULT NULL,
  `tgl_pengambilan_contoh_benih` date DEFAULT NULL,
  `tgl_pengiriman_contoh_benih` date DEFAULT NULL,
  `jml_wadah` int(11) NOT NULL,
  `jml_sample` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sertifikasi`
--

INSERT INTO `sertifikasi` (`id_sertifikasi`, `id_varietas`, `id_musim_tanam`, `status`, `no_induk`, `nomor_sumber`, `pemohon`, `alamat`, `luas`, `id_jenis_tanaman`, `id_jenis_varietas`, `id_kelas_benih`, `tgl_tanam`, `blok`, `kampung`, `desa`, `id_kecamatan`, `id_kabupaten`, `jenis_tanaman`, `produsen_benih`, `asal_benih`, `id_kelas_benih2`, `jumlah_benih`, `no_kelompok_benih`, `jenis_anggaran`, `tgl_surat`, `nama_pbt`, `tgl_pemlap_pendahuluan`, `kesimpulan_pemlap_pendahuluan`, `tgl_kesimpulan`, `tgl_semai`, `tgl_pemlap_1`, `cvl_pemlap_1`, `luas_pemlap_1`, `lulus_1`, `tgl_pemlap_2`, `cvl_pemlap_2`, `luas_pemlap_2`, `lulus_2`, `tgl_pemlap_3`, `cvl_pemlap_3`, `luas_pemlap_3`, `lulus_3`, `tgl_pemeriksaan_alat_panen`, `tgl_panen`, `produksi`, `tgl_permohonan_pengambilan_cb`, `tgl_pengambilan_contoh_benih`, `tgl_pengiriman_contoh_benih`, `jml_wadah`, `jml_sample`) VALUES
(21, 298, 2, 1, 'Pdn AP/PSB. 01', 'KPB. Sido Maju / Suharno', 'KPB. KUTAI RAYA', 'Ds. Sumber Sari, SP IV Kota Bangun', 23, 1, 1, 3, '2019-12-16', 'Supar', 'Kerta Buana', 'Kerta Buana', 198, 2, 'Padi sawah', 'KPB Tani Jaya', 'Ds. Sido Mukti, Muara Kaman', 2, 20, 'Pdn FFP / PSB.107', 1, '2019-12-05', 'hadi kusnan', '2020-12-02', 'ok', '2020-10-25', '2019-12-07', '2020-12-02', 0, 0, 0, '2020-12-02', 0, 0, 0, '2020-11-30', 0, 0, 0, '2019-12-06', '2019-12-04', 10, '2019-12-05', '2019-12-03', '2019-12-08', 43, 12),
(23, 298, 2, 1, 'Pdn AP/PSB. 02', 'KPB. Mandiri Benih / Asabur', 'KPB. MADEP MANTEP', 'Ds. Sari Nadi, SP V Kota Bangun', 1, 1, 1, 2, '2020-10-11', 'Sukimo', 'Sari Nadi', 'Sari Nadi', 201, 2, 'Padi sawah', 'KPB. MADEP MANTEP', 'Ds. Bangun Rejo, Tenggarong Seberang', 2, 1, 'Pdn OHD/PSB. 173', 1, '2020-10-01', 'Hadi Kusnan', '2020-10-02', '', '0000-00-00', '2020-10-03', '2020-11-01', 0, 1, 0, '2020-12-03', 0.3, 1, 0, '2021-01-01', 0.4, 1, 0, '0000-00-00', '2020-11-12', 20000, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sertifikasi_apbd`
--

CREATE TABLE `sertifikasi_apbd` (
  `id_sertifikasi` int(11) NOT NULL,
  `nomor` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sertifikasi_apbn`
--

CREATE TABLE `sertifikasi_apbn` (
  `id_sertifikasi` int(11) NOT NULL,
  `nomor` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sertifikasi_apbn`
--

INSERT INTO `sertifikasi_apbn` (`id_sertifikasi`, `nomor`) VALUES
(21, '01');

-- --------------------------------------------------------

--
-- Table structure for table `stok_pangan`
--

CREATE TABLE `stok_pangan` (
  `id_stok_pangan` int(11) NOT NULL,
  `id_komoditi` int(11) NOT NULL,
  `id_varietas` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `id_kelas_benih` int(11) NOT NULL,
  `sisa_stok_bln_lalu` float(10,2) NOT NULL,
  `produksi_benih` float(10,2) NOT NULL,
  `pengadaan_luar_prov` float(10,2) NOT NULL,
  `penyaluran_luar_prov` float(10,2) NOT NULL,
  `subsidi_benih` float(10,2) NOT NULL,
  `nonsubsidi_benih` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stok_pangan`
--

INSERT INTO `stok_pangan` (`id_stok_pangan`, `id_komoditi`, `id_varietas`, `id_bulan`, `id_kota`, `id_kelas_benih`, `sisa_stok_bln_lalu`, `produksi_benih`, `pengadaan_luar_prov`, `penyaluran_luar_prov`, `subsidi_benih`, `nonsubsidi_benih`) VALUES
(1, 1, 298, 1, 2, 3, 30.01, 30.00, 30.00, 30.00, 20.00, 10.00),
(2, 1, 299, 1, 2, 2, 20.00, 30.00, 30.00, 30.00, 20.00, 10.00),
(3, 1, 298, 1, 3, 3, 20.00, 30.00, 30.00, 2.00, 1.00, 2.00),
(5, 1, 300, 1, 5, 2, 20.00, 20.00, 40.00, 40.00, 40.00, 10.00);

-- --------------------------------------------------------

--
-- Table structure for table `tu_apbd`
--

CREATE TABLE `tu_apbd` (
  `id_tu_apbd` int(11) NOT NULL,
  `id_sertifikasi` int(11) NOT NULL,
  `no_tu` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tu_apbn`
--

CREATE TABLE `tu_apbn` (
  `id_tu_apbn` int(11) NOT NULL,
  `id_sertifikasi` int(11) NOT NULL,
  `no_tu` varchar(11) NOT NULL,
  `kadar_air` int(11) DEFAULT NULL,
  `kemurnian` int(11) DEFAULT NULL,
  `daya_berkecambah` int(11) DEFAULT NULL,
  `tgl_tu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tu_apbn`
--

INSERT INTO `tu_apbn` (`id_tu_apbn`, `id_sertifikasi`, `no_tu`, `kadar_air`, `kemurnian`, `daya_berkecambah`, `tgl_tu`) VALUES
(9, 21, 'TKS.01', 1, 1, 0, '2020-10-29'),
(10, 22, 'TKS.02', 1, 0, 0, '2020-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','sertifikasi','tu','lab','wasar') NOT NULL DEFAULT 'sertifikasi',
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `level`, `last_login`) VALUES
(1, 'admin', '$2y$10$oGsTbrQ1LsuXpyvQR0Tv5OHgAU3UPU7f6wohs1.Lwe14BtuLK9i5y', 'admin', '2020-11-01 07:58:56'),
(4, 'lab123', '$2y$10$6WjlOqqNnzobpT7tuHBOde4cDFAgvrtZVN4RhzoIO4D1qsBJhUyTa', 'lab', '2019-12-18 08:46:03'),
(5, 'sertifikasi', '$2y$10$3l0DLP7yQM7hSz9RTmE5R.BfEi/H5Hq5bVk/hRXFEan2OZo2x2b6e', 'sertifikasi', '2019-12-18 10:06:46'),
(6, 'tu123', '$2y$10$3eodP1O/C/8LdgPLlICLhekaB84nOiCMJ/TVJqnZDO1veqgbqucAu', 'tu', '2020-10-23 08:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `varietas`
--

CREATE TABLE `varietas` (
  `id_varietas` int(11) NOT NULL,
  `nama_varietas` varchar(100) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `varietas`
--

INSERT INTO `varietas` (`id_varietas`, `nama_varietas`, `kode`, `jenis`) VALUES
(298, ' Pelita I 1 ', ' PdnA ', 1),
(299, ' Pelita I 2 ', ' PdnB ', 1),
(300, ' PB 5 ', ' PdnC ', 1),
(301, ' C4 63 Gb ', ' PdnD ', 1),
(302, ' PB 20 ', ' PdnE ', 1),
(303, ' PB 26 ', ' PdnF ', 1),
(304, ' PB 28 ', ' PdnG ', 1),
(305, ' PB 30 ', ' PdnH ', 1),
(306, ' PB 32 ', ' PdnI ', 1),
(307, ' PB 36 ', ' PdnJ ', 1),
(308, ' PB 38 ', ' PdnK ', 1),
(309, ' Asahan ', ' PdnL ', 1),
(310, ' Brantas ', ' PdnM ', 1),
(311, ' Citarum ', ' PdnN ', 1),
(312, ' Serayu ', ' PdnO ', 1),
(313, ' Semeru ', ' PdnP ', 1),
(314, ' Cisadane ', ' PdnQ ', 1),
(315, ' Cimandiri ', ' PdnR ', 1),
(316, ' Ayung  ', ' PdnS ', 1),
(317, ' PB 42 ', ' PdnT ', 1),
(318, ' PB 50 ', ' PdnU ', 1),
(319, ' PB 52 ', ' PdnV ', 1),
(320, ' PB 54 ', ' PdnW ', 1),
(321, ' Cipunegara ', ' PdnX ', 1),
(322, ' Barito ', ' PdnY ', 1),
(323, ' Krueng Aceh ', ' PdnZ ', 1),
(324, ' Batang Agam ', ' PdnAA ', 1),
(325, ' PB 56 ', ' PdnBA ', 1),
(326, ' Sadang ', ' PdnCA ', 1),
(327, ' Sentani ', ' PdnDA ', 1),
(328, ' Atomita 1 ', ' PdnEA ', 1),
(329, ' Mahakam ', ' PdnFA ', 1),
(330, ' Atomita 2 ', ' PdnGA ', 1),
(331, ' Bahbolon ', ' PdnHA ', 1),
(332, ' Tondano ', ' PdnIA ', 1),
(333, ' Klara ', ' PdnJA ', 1),
(334, ' Bogowonto ', ' PdnKA ', 1),
(335, ' IR 46 ', ' PdnLA ', 1),
(336, ' Citanduy ', ' PdnMA ', 1),
(337, ' Porong ', ' PdnNA ', 1),
(338, ' Singkarak ', ' PdnOA ', 1),
(339, ' Batang Ombilin ', ' PdnPA ', 1),
(340, ' Kapuas ', ' PdnQA ', 1),
(341, ' Ranau ', ' PdnRA ', 1),
(342, ' Arias ', ' PdnSA ', 1),
(343, ' Cikapundung ', ' PdnTA ', 1),
(344, ' Cisokan ', ' PdnUA ', 1),
(345, ' Progo ', ' PdnVA ', 1),
(346, ' Cimanuk ', ' PdnWA ', 1),
(347, ' Bahbutong ', ' PdnXA ', 1),
(348, ' Tuntang ', ' PdnYA ', 1),
(349, ' Batang Pane ', ' PdnZA ', 1),
(350, ' Maninjau ', ' PdnAB ', 1),
(351, ' Tajum ', ' PdnBB ', 1),
(352, ' Cisanggarung ', ' PdnCB ', 1),
(353, ' IR 64 ', ' PdnDB ', 1),
(354, ' IR 65 ', ' PdnEB ', 1),
(355, ' IR 48 ', ' PdnFB ', 1),
(356, ' Nagara ', ' PdnGB ', 1),
(357, ' Alabio ', ' PdnHB ', 1),
(358, ' Tapus ', ' PdnIB ', 1),
(359, ' Danau Bawah ', ' PdnJB ', 1),
(360, ' Dodokan ', ' PdnKB ', 1),
(361, ' Jangkok ', ' PdnLB ', 1),
(362, ' Batur ', ' PdnMB ', 1),
(363, ' Danau Atas ', ' PdnNB ', 1),
(364, ' Ciliwung ', ' PdnOB ', 1),
(365, ' Musi ', ' PdnPB ', 1),
(366, ' Poso ', ' PdnQB ', 1),
(367, ' IR 66 ', ' PdnRB ', 1),
(368, ' IR 70 ', ' PdnSB ', 1),
(369, ' IR 72 ', ' PdnTB ', 1),
(370, ' Walanae ', ' PdnUB ', 1),
(371, ' Batang Sumani ', ' PdnVB ', 1),
(372, ' Lusi ', ' PdnWB ', 1),
(373, ' Laut Tawar ', ' PdnXB ', 1),
(374, ' Way Seputih ', ' PdnYB ', 1),
(375, ' C 22 ', ' PdnZB ', 1),
(376, ' Barumun ', ' PdnAC ', 1),
(377, ' Atomita 3 ', ' PdnBC ', 1),
(378, ' Atomita 4 ', ' PdnCC ', 1),
(379, ' Lematang ', ' PdnDC ', 1),
(380, ' Sei Lilin ', ' PdnEC ', 1),
(381, ' Danau Tempe ', ' PdnFC ', 1),
(382, ' Cenranae ', ' PdnGC ', 1),
(383, ' Lariang ', ' PdnHC ', 1),
(384, ' Situgintung ', ' PdnIC ', 1),
(385, ' Bengawan Solo ', ' PdnJC ', 1),
(386, ' IR-68 ', ' PdnKC ', 1),
(387, ' Kalimutu ', ' PdnLC ', 1),
(388, ' Jatiluhur ', ' PdnMC ', 1),
(389, ' Gajah Mungkur ', ' PdnNC ', 1),
(390, ' Way Rarem ', ' PdnOC ', 1),
(391, ' Cibodas ', ' PdnPC ', 1),
(392, ' Memberamo ', ' PdnQC ', 1),
(393, ' Cilosari ', ' PdnRC ', 1),
(394, ' Digul ', ' PdnSC ', 1),
(395, ' Maros ', ' PdnTC ', 1),
(396, ' Batang Anai ', ' PdnUC ', 1),
(397, ' Cilamaya Muncul ', ' PdnVC ', 1),
(398, ' Cirata ', ' PdnWC ', 1),
(399, ' Banyuasin ', ' PdnXC ', 1),
(400, ' Lalan ', ' PdnYC ', 1),
(401, ' Way Apo Buru ', ' PdnZC ', 1),
(402, ' Widas ', ' PdnAD ', 1),
(403, ' Ketonggo ', ' PdnBD ', 1),
(404, ' Batanghari ', ' PdnCD ', 1),
(405, ' Dendang ', ' PdnDD ', 1),
(406, ' Limboto ', ' PdnED ', 1),
(407, ' Towuti ', ' PdnFD ', 1),
(408, ' Tukad Unda ', ' PdnGD ', 1),
(409, ' Tukad Petanu ', ' PdnHD ', 1),
(410, ' Tukad Balian ', ' PdnID ', 1),
(411, ' Cisantana ', ' PdnJD ', 1),
(412, ' Ciherang ', ' PdnKD ', 1),
(413, ' Indragiri ', ' PdnLD ', 1),
(414, ' Punggur ', ' PdnMD ', 1),
(415, ' Sintanur ', ' PdnND ', 1),
(416, ' Bondoyudo ', ' PdnOD ', 1),
(417, ' Kalimas ', ' PdnPD ', 1),
(418, ' Siak Raya ', ' PdnQD ', 1),
(419, ' Air Tenggulang ', ' PdnRD ', 1),
(420, ' Margasari ', ' PdnSD ', 1),
(421, ' Martapura ', ' PdnTD ', 1),
(422, ' Cimelati ', ' PdnUD ', 1),
(423, ' Konawe ', ' PdnVD ', 1),
(424, ' Singkil ', ' PdnWD ', 1),
(425, ' Celebes 1 ', ' PdnXD ', 1),
(426, ' Meraoke ', ' PdnYD ', 1),
(427, ' Woyla ', ' PdnZD ', 1),
(428, ' Wera ', ' PdnAE ', 1),
(429, ' Ciujung ', ' PdnBE ', 1),
(430, ' Angke ', ' PdnCE ', 1),
(431, ' Conde ', ' PdnDE ', 1),
(432, ' Batutugi ', ' PdnEE ', 1),
(433, ' Danau Gaung ', ' PdnFE ', 1),
(434, ' Mendawak ', ' PdnGE ', 1),
(435, ' Situgonggo ', ' PdnHE ', 1),
(436, ' Lambur ', ' PdnIE ', 1),
(437, ' Batang Gadis ', ' PdnJE ', 1),
(438, ' Sunggal ', ' PdnKE ', 1),
(439, ' Winongo ', ' PdnLE ', 1),
(440, ' Kahayan ', ' PdnME ', 1),
(441, ' Cigeulis ', ' PdnNE ', 1),
(442, ' Gilirang ', ' PdnOE ', 1),
(443, ' Rojolele ', ' PdnPE ', 1),
(444, ' Luk Ulo ', ' PdnQE ', 1),
(445, ' Situ Patenggang ', ' PdnRE ', 1),
(446, ' Situ Bagendit ', ' PdnSE ', 1),
(447, ' Diah Suci ', ' PdnTE ', 1),
(448, ' Setail ', ' PdnUE ', 1),
(449, ' Cibogo ', ' PdnVE ', 1),
(450, ' Ciapus ', ' PdnYE ', 1),
(451, ' Pepe ', ' PdnZE ', 1),
(452, ' Batang Lembang ', ' PdnAF ', 1),
(453, ' Batang Piaman ', ' PdnBF ', 1),
(454, ' Fatmawati ', ' PdnCF ', 1),
(455, ' Logawa ', ' PdnDF ', 1),
(456, ' Pandan Wangi ', ' PdnEF ', 1),
(457, ' Mekongga     ', ' PdnFF ', 1),
(458, ' Yuwono ', ' PdnGF ', 1),
(459, ' Mayang ', ' PdnHF ', 1),
(460, ' Ciasem ', ' PdnIF ', 1),
(461, ' Sarinah ', ' PdnJF ', 1),
(462, ' Mira-1 ', ' PdnKF ', 1),
(463, ' Aek Sibundong ', ' PdnLF ', 1),
(464, ' Anak Daro ', ' PdnMF ', 1),
(465, ' Inpari 1 ', ' PdnNF ', 1),
(466, ' Inpari 2 ', ' PdnOF ', 1),
(467, ' Inpari 3 ', ' PdnPF ', 1),
(468, ' Inpari 4 ', ' PdnQF ', 1),
(469, ' Inpari 5 Merawu ', ' PdnRF ', 1),
(470, ' Inpari 6 Jete ', ' PdnSF ', 1),
(471, ' Inpara 1 ', ' PdnTF ', 1),
(472, ' Bestari ', ' PdnUF ', 1),
(473, ' Inpara 2 ', ' PdnVF ', 1),
(474, ' Inpara 3 ', ' PdnWF ', 1),
(475, ' Siam Saba ', ' PdnXF ', 1),
(476, ' Siam Mutiara ', ' PdnYF ', 1),
(477, ' Pare Wangi ', 'PdnAG', 1),
(478, ' Segreng Handayani ', 'PdnBG', 1),
(479, ' Mandel Handayani ', 'PdnCG', 1),
(480, ' Junjuang ', 'PdnDG', 1),
(481, ' Kuriak Kusuik ', 'PdnEG', 1),
(482, ' Inpari 7 Lanrang ', 'PdnFG', 1),
(483, ' Inpari 8 ', 'PdnGG', 1),
(484, ' Inpari 9 Elo ', 'PdnHG', 1),
(485, ' Inpari 10 Laeya ', 'PdnIG', 1),
(486, ' Inpago 1 SHS ', 'PdnJG', 1),
(487, ' Inpago 2 SHS ', 'PdnKG', 1),
(488, ' Inpago 3 SHS ', 'PdnLG', 1),
(489, ' Inpara 4 ', 'PdnMG', 1),
(490, ' Inpara 5 ', 'PdnNG', 1),
(491, ' Caredek Merah ', 'PdnOG', 1),
(492, ' Inpari 11 ', 'PdnPG', 1),
(493, ' Inpari 12 ', 'PdnQG', 1),
(494, ' Inpari 13 ', 'PdnRG', 1),
(495, ' Inpago 4 ', 'PdnSG', 1),
(496, ' Inpago 5 ', 'PdnTG', 1),
(497, ' Inpago 6 ', 'PdnUG', 1),
(498, ' IPB 1R Dadahup ', 'PdnVG', 1),
(499, ' IPB 2R Bakumpai ', 'PdnWG', 1),
(500, ' Inpara 6 ', 'PdnXG', 1),
(501, ' Pandanputri ', 'PdnYG', 1),
(502, ' Inpari 14 Pakuan ', 'PdnZG', 1),
(503, ' Inpari 15 Parahyangan ', 'PdnAH', 1),
(504, ' Inpari 16 Pasundan ', 'PdnBH', 1),
(505, ' Inpari Sidenuk ', 'PdnCH', 1),
(506, ' Inpago 7 ', 'PdnDH', 1),
(507, ' Inpago 8 ', 'PdnEH', 1),
(508, ' Inpari 17 ', 'PdnFH', 1),
(509, ' Inpari 18 ', 'PdnGH', 1),
(510, ' Inpari 19 ', 'PdnHH', 1),
(511, ' Inpari 20 ', 'PdnIH', 1),
(512, ' Inpago Unram 1 ', 'PdnJH', 1),
(513, ' Inpago Unsoed 1 ', 'PdnKH', 1),
(514, ' Saganggam Panuah ', 'PdnLH', 1),
(515, ' Cekau Pelalawan ', 'PdnMH', 1),
(516, ' Karya Pelalawan ', 'PdnNH', 1),
(517, ' Inpari Mugibat ', 'PdnOH', 1),
(518, ' Inpari 21 Batipuah ', 'PdnPH', 1),
(519, ' Inpari 22 ', 'PdnQH', 1),
(520, ' Inpari 23 Bantul ', 'PdnRH', 1),
(521, ' Inpari 24 Gabusan ', 'PdnSH', 1),
(522, ' Inpari 25 Opak Jawa ', 'PdnTH', 1),
(523, ' Inpari 26 ', 'PdnUH', 1),
(524, ' Inpari 27 ', 'PdnVH', 1),
(525, ' Inpari 28 Kerinci ', 'PdnWH', 1),
(526, ' Inpari 29 Rendaman ', 'PdnXH', 1),
(527, ' Inpari 30 Ciherang Sub 1 ', 'PdnYH', 1),
(528, ' Suluttan Unsrat 1 ', 'PdnZH', 1),
(529, ' Suluttan Unsrat 2 ', 'PdnAI', 1),
(530, ' Pak Tiwi 1 ', 'PdnBI', 1),
(531, ' Pak Tiwi 2 ', 'PdnCI', 1),
(532, ' Inpara 7 ', 'PdnDI', 1),
(533, ' Inpara IPB Kapuas 7R ', 'PdnEI', 1),
(534, ' Inpago LIPIGO 1 ', 'PdnFI', 1),
(535, ' Inpago LIPIGO 2 ', 'PdnGI', 1),
(536, ' Inpago 9 ', 'PdnHI', 1),
(537, ' IPB 3S ', 'PdnII', 1),
(538, ' IPB 4S ', 'PdnJI', 1),
(539, ' IPB Batola 5R ', 'PdnKI', 1),
(540, ' IPB Batola 6R ', 'PdnLI', 1),
(541, ' Inpari Blas ', 'PdnMI', 1),
(542, ' Inpari HDB ', 'PdnNI', 1),
(543, ' Buyung ', 'PdnOI', 1),
(544, ' Inpari 31 ', 'PdnPI', 1),
(545, ' Inpari 32 ', 'PdnQI', 1),
(546, ' Inpari 33 ', 'PdnRI', 1),
(547, ' Siarang ', 'PdnSI', 1),
(548, ' Sigudang ', 'PdnTI', 1),
(549, ' Inpago LIPIGO 4 ', 'PdnUI', 1),
(550, ' Inpago 10 ', 'PdnVI', 1),
(551, ' Bawaan ', 'PdnWI', 1),
(552, ' Inpago IPB 8G ', 'PdnXI', 1),
(553, ' Pare Lallodo ', 'PdnYI', 1),
(554, ' Pare Bau ', 'PdnZI', 1),
(555, ' Pare Lea ', 'PdnAJ', 1),
(556, ' Pare Ambo ', 'PdnBJ', 1),
(557, ' Pare Kombong ', 'PdnCJ', 1),
(558, ' Inpari 35 Salin Agritan ', 'PdnDJ', 1),
(559, ' Inpari 34 Salin Agritan ', 'PdnEJ', 1),
(560, ' Inpari Unsoed 79 Agritan ', 'PdnFJ', 1),
(561, ' Inpara 8 Agritan ', 'PdnGJ', 1),
(562, ' Inpara 9 Agritan ', 'PdnHJ', 1),
(563, ' Lampai Kuniang ', 'PdnIJ', 1),
(564, ' Inpari 36 Lanrang ', 'PdnJJ', 1),
(565, ' Inpari 37 Lanrang ', 'PdnKJ', 1),
(566, ' Tropiko ', 'PdnLJ', 1),
(567, ' Inpari 38 T, Hujan Agritan ', 'PdnMJ', 1),
(568, ' Inpari 39 T, Hujan Agritan ', 'PdnNJ', 1),
(569, ' Inpari 40 T, Hujan Agritan ', 'PdnOJ', 1),
(570, ' Inpari 41 T, Hujan Agritan ', 'PdnPJ', 1),
(571, ' Inpago 11 Agritan ', 'PdnQJ', 1),
(572, ' Inpari 42 Agritan GSR ', 'PdnRJ', 1),
(573, ' Inpari 43 Agritan GSR ', 'PdnSJ', 1),
(574, ' Inpari 44 Agritan ', 'PdnTJ', 1),
(575, ' Sigambiri Putih ', 'PdnUJ', 1),
(576, ' Sigambiri Merah ', 'PdnVJ', 1),
(577, ' M 400 ', 'PdnWJ', 1),
(578, ' M 70 D ', 'PdnXJ', 1),
(579, ' Ponelo ', 'PdnYJ', 1),
(580, ' Terabas ', 'PdnZJ', 1),
(581, ' Ampek Angkek ', 'PdnAK', 1),
(582, ' Harum Solok ', 'PdnBK', 1),
(583, ' Bujang Merantau ', 'PdnCK', 1),
(584, ' Inpago 12 Agritan ', 'PdnDK', 1),
(585, ' IPB 9 G ', 'PdnEK', 1),
(586, ' Unsoed Parimas ', 'PdnFK', 1),
(587, ' Mustaban Agritan ', 'PdnGK', 1),
(588, ' Mendol Pelalawan ', '', 1),
(589, ' Inpara Pelalawan ', '', 1),
(590, ' Bono Pelalawan ', '', 1),
(591, ' Rindang 1 ', '', 1),
(592, ' Rindang 2 ', '', 1),
(593, ' Luhur 1 ', '', 1),
(594, ' Luhur 2 ', '', 1),
(595, ' Intani 1 ', ' PdhA ', 2),
(596, ' Intani 2 ', ' PdhB ', 2),
(597, ' Maro ', ' PdhC ', 2),
(598, ' Rokan ', ' PdhD ', 2),
(599, ' Miki 1 ', ' PdhE ', 2),
(600, ' Miki 2 ', ' PdhF ', 2),
(601, ' Miki 3 ', ' PdhG ', 2),
(602, ' Hibrindo R 1 ', ' PdhH ', 2),
(603, ' Hibrindo R 2 ', ' PdhI ', 2),
(604, ' Long Ping Pusaka 1 ', ' PdhJ ', 2),
(605, ' Long Ping Pusaka 2 ', ' PdhK ', 2),
(606, ' Batang Kampar ', ' PdhL ', 2),
(607, ' Batang Samo ', ' PdhM ', 2),
(608, ' HIPA 3 ', ' PdhN ', 2),
(609, ' HIPA 4 ', ' PdhO ', 2),
(610, ' Manis 4 ', ' PdhP ', 2),
(611, ' Manis 5 ', ' PdhQ ', 2),
(612, ' Mapan P.02 ', ' PdhR ', 2),
(613, ' Mapan P.05 ', ' PdhS ', 2),
(614, ' SL 8 SHS ', ' PdhT ', 2),
(615, ' SL 11 SHS ', ' PdhU ', 2),
(616, ' PP 1 ', ' PdhV ', 2),
(617, ' Adi Rasa 1 ', ' PdhW ', 2),
(618, ' Segara Anak ', ' PdhX ', 2),
(619, ' PP 2 ', ' PdhY ', 2),
(620, ' Adirasa 64 ', ' PdhZ ', 2),
(621, ' Brang Biji ', ' PdhAA ', 2),
(622, ' Bernas Prima ', ' PdhBA ', 2),
(623, ' Bernas Super ', ' PdhCA ', 2),
(624, ' Hipa 5 Ceva ', ' PdhDA ', 2),
(625, ' Hipa 6 Jete ', ' PdhEA ', 2),
(626, ' Sembada B 3 ', ' PdhFA ', 2),
(627, ' Sembada B 5 ', ' PdhGA ', 2),
(628, ' Sembada B 8 ', ' PdhHA ', 2),
(629, ' Sembada B 9 ', ' PdhIA ', 2),
(630, ' Intani 301 ', 'PdhJA', 2),
(631, ' Intani 602 ', 'PdhKA', 2),
(632, ' Hipa 7 ', 'PdhLA', 2),
(633, ' Hipa 8 Pioneer ', 'PdhMA', 2),
(634, ' WM 2 SHS ', 'PdhNA', 2),
(635, ' WM 3 SHS ', 'PdhOA', 2),
(636, ' WM 4 SHS ', 'PdhPA', 2),
(637, ' WM 5 SHS ', 'PdhQA', 2),
(638, ' DG 1 SHS ', 'PdhRA', 2),
(639, ' DG 2 SHS ', 'PdhSA', 2),
(640, ' BSHS 1H ', 'PdhTA', 2),
(641, ' BSHS 3H ', 'PdhUA', 2),
(642, ' BSHS 6H ', 'PdhVA', 2),
(643, ' H6444 ', 'PdhWA', 2),
(644, ' TEJ ', 'PdhXA', 2),
(645, ' Bernas Super 2 ', 'PdhYA', 2),
(646, ' Bernas Prima 2 ', 'PdhZA', 2),
(647, ' Bernas Prima 3 ', 'PdhAB', 2),
(648, ' Bernas Prima 5 ', 'PdhBB', 2),
(649, ' Sembada 168 ', 'PdhCB', 2),
(650, ' Sembada 101 ', 'PdhDB', 2),
(651, ' DR 1 ', 'PdhEB', 2),
(652, ' DR 2 ', 'PdhFB', 2),
(653, ' Hipa 9 ', 'PdhGB', 2),
(654, ' Hipa 10 ', 'PdhHB', 2),
(655, ' Hipa 11 ', 'PdhIB', 2),
(656, ' Hipa 12 SBU ', 'PdhJB', 2),
(657, ' Hipa 13 ', 'PdhKB', 2),
(658, ' Hipa 14 SBU ', 'PdhLB', 2),
(659, ' Hipa Jatim 1 ', 'PdhMB', 2),
(660, ' Hipa Jatim 2 ', 'PdhNB', 2),
(661, ' Hipa Jatim 3 ', 'PdhOB', 2),
(662, ' Rejo 1 ', 'PdhPB', 2),
(663, ' Rejo 3 ', 'PdhQB', 2),
(664, ' LPHT 6 ', 'PdhRB', 2),
(665, ' LPHT 8 ', 'PdhSB', 2),
(666, ' LOPP11 Pertani ', 'PdhTB', 2),
(667, ' PAC 801 ', 'PdhUB', 2),
(668, ' PAC 809 ', 'PdhVB', 2),
(669, ' Lestari 3 ', 'PdhWB', 2),
(670, ' Lestari 5 ', 'PdhXB', 2),
(671, ' Lestari 6 ', 'PdhYB', 2),
(672, ' DG 5 SHS ', 'PdhZB', 2),
(673, ' BS 88 SHS ', 'PdhAC', 2),
(674, ' BS 99 SHS ', 'PdhBC', 2),
(675, ' Pramitha ', 'PdhCC', 2),
(676, ' Chandra ', 'PdhDC', 2),
(677, ' HS 06 5 AML ', 'PdhEC', 2),
(678, ' PP 3 ', 'PdhFC', 2),
(679, ' Manna 2 ', 'PdhGC', 2),
(680, ' Damai 3 ', 'PdhHC', 2),
(681, ' SL 1 ', 'PdhIC', 2),
(682, ' Hipa 18 ', 'PdhJC', 2),
(683, ' Hipa 19 ', 'PdhKC', 2),
(684, ' H6444 Gold ', 'PdhLC', 2),
(685, ' Prima ', 'PdhMC', 2),
(686, ' Sembada 188 ', 'PdhNC', 2),
(687, ' Sembada 626 ', 'PdhOC', 2),
(688, ' Sembada 989 ', 'PdhPC', 2),
(689, ' Suppadi 56 ', 'PdhQC', 2),
(690, ' Suppadi 89 ', 'PdhRC', 2),
(691, ' SHRI Siung ', 'PdhSC', 2),
(692, ' SHRI Runcit ', 'PdhTC', 2),
(693, ' Harapan Baru ', ' JgbA ', 3),
(694, ' Arjuna ', ' JgbB ', 3),
(695, ' Parikesit  ', ' JgbC ', 3),
(696, ' Abimanyu ', ' JgbD ', 3),
(697, ' Nakula ', ' JgbE ', 3),
(698, ' Sadewa ', ' JgbF ', 3),
(699, ' Kalingga ', ' JgbG ', 3),
(700, ' Wiyasa ', ' JgbH ', 3),
(701, ' Rama ', ' JgbI ', 3),
(702, ' Antasena ', ' JgbJ ', 3),
(703, ' Bayu ', ' JgbK ', 3),
(704, ' Bisma ', ' JgbL ', 3),
(705, ' Wisanggeni ', ' JgbM ', 3),
(706, ' Legaligo ', ' JgbN ', 3),
(707, ' Surya ', ' JgbO ', 3),
(708, ' Kresna ', ' JgbP ', 3),
(709, ' Lamuru ', ' JgbQ ', 3),
(710, ' Gumarang ', ' JgbR ', 3),
(711, ' Srikandi ', ' JgbS ', 3),
(712, ' Palaka ', ' JgbT ', 3),
(713, ' Sukmaraga ', ' JgbU ', 3),
(714, ' Srikandi Putih-1 ', ' JgbV ', 3),
(715, ' Srikandi Kunig-1 ', ' JgbW ', 3),
(716, ' Anoman 1  ', ' JgbX ', 3),
(717, ' Piet Kuning ', ' JgbY ', 3),
(718, ' Motoro Kiki ', 'JgbZ', 3),
(719, ' Talango ', 'JgbAA', 3),
(720, ' Guluk-Guluk ', 'JgbBA', 3),
(721, ' Manding ', 'JgbCA', 3),
(722, ' Manado Kuning ', 'JgbDA', 3),
(723, ' Provit A1 ', 'JgbEA', 3),
(724, ' Provit A2 ', 'JgbFA', 3),
(725, ' Pulut URI 1 ', 'JgbGA', 3),
(726, ' Pulut URI 2 ', 'JgbHA', 3),
(727, ' URI 4 ', 'JgbIA', 3),
(728, ' Srikandi Depu 1', 'JgbJA', 3),
(729, ' C 1 ', ' JghA ', 4),
(730, ' Pioneer 1 ', ' JghB ', 4),
(731, ' CPI 1 ', ' JghC ', 4),
(732, ' IPB 4 ', ' JghD ', 4),
(733, ' Pioneer 2 ', ' JghE ', 4),
(734, ' C 2 ', ' JghF ', 4),
(735, ' C 3 ', ' JghG ', 4),
(736, ' Semar 1 ', ' JghH ', 4),
(737, ' Semar 2 ', ' JghI ', 4),
(738, ' CPI 2 ', ' JghJ ', 4),
(739, ' Pioneer 3 ', ' JghK ', 4),
(740, ' Pioneer 4 ', ' JghL ', 4),
(741, ' Pioneer 5 ', ' JghM ', 4),
(742, ' BISI 1 ', ' JghN ', 4),
(743, ' BISI 2 ', ' JghO ', 4),
(744, ' P 6 ', ' JghP ', 4),
(745, ' P 7 ', ' JghQ ', 4),
(746, ' P 8 ', ' JghR ', 4),
(747, ' P 9 ', ' JghS ', 4),
(748, ' Semar 3 ', ' JghT ', 4),
(749, ' BISI 3 ', ' JghU ', 4),
(750, ' BISI 4 ', ' JghV ', 4),
(751, ' C 4 ', ' JghW ', 4),
(752, ' C 5 ', ' JghX ', 4),
(753, ' C 6 ', ' JghY ', 4),
(754, ' Semar 4 ', ' JghZ ', 4),
(755, ' Semar 5 ', ' JghAA ', 4),
(756, ' C 7 ', ' JghBA ', 4),
(757, ' Semar 6 ', ' JghCA ', 4),
(758, ' Semar 7 ', ' JghDA ', 4),
(759, ' Semar 8 ', ' JghEA ', 4),
(760, ' Semar 9 ', ' JghFA ', 4),
(761, ' P 10 ', ' JghGA ', 4),
(762, ' P 11 ', ' JghHA ', 4),
(763, ' P 12 ', ' JghIA ', 4),
(764, ' P 13 ', ' JghJA ', 4),
(765, ' P 14 ', ' JghKA ', 4),
(766, ' BISI 5 ', ' JghLA ', 4),
(767, ' BISI 6 ', ' JghMA ', 4),
(768, ' BISI 7 ', ' JghNA ', 4),
(769, ' BISI 8 ', ' JghOA ', 4),
(770, ' A 4 ', ' JghPA ', 4),
(771, ' P 15 ', ' JghQA ', 4),
(772, ' C 8 ', ' JghRA ', 4),
(773, ' C 9 ', ' JghSA ', 4),
(774, ' C 10 ', ' JghTA ', 4),
(775, ' P 16 ', ' JghUA ', 4),
(776, ' P 17 ', ' JghVA ', 4),
(777, ' P 18 ', ' JghWA ', 4),
(778, ' P 19 ', ' JghXA ', 4),
(779, ' BISI 9 ', ' JghYA ', 4),
(780, ' BISI 10 ', ' JghZA ', 4),
(781, ' BISI 11 ', ' JghAB ', 4),
(782, ' BISI 12 ', ' JghBB ', 4),
(783, ' BISI 13 ', ' JghCB ', 4),
(784, ' BISI 14 ', ' JghDB ', 4),
(785, ' BISI 15 ', ' JghEB ', 4),
(786, ' Bima 1 ', ' JghFB ', 4),
(787, ' Semar 10 ', ' JghGB ', 4),
(788, ' NK 11 ', ' JghHB ', 4),
(789, ' Jaya 1 ', ' JghIB ', 4),
(790, ' Jaya 2 ', ' JghJB ', 4),
(791, ' Jaya 3 ', ' JghKB ', 4),
(792, ' SHS 1 ', ' JghLB ', 4),
(793, ' SHS 2 ', ' JghMB ', 4),
(794, ' NK 22 ', ' JghNB ', 4),
(795, ' NK 33 ', ' JghOB ', 4),
(796, ' NK 55 ', ' JghPB ', 4),
(797, ' NK 66 ', ' JghQB ', 4),
(798, ' NK 77 ', ' JghRB ', 4),
(799, ' P 20 ', ' JghSB ', 4),
(800, ' P 21 ', ' JghTB ', 4),
(801, ' NKRI ', ' JghUB ', 4),
(802, ' P 22 ', ' JghVB ', 4),
(803, ' P 23 ', ' JghWB ', 4),
(804, ' NK 81 ', ' JghXB ', 4),
(805, ' NK 82 ', ' JghYB ', 4),
(806, ' NK 88 ', ' JghZB ', 4),
(807, ' NK 99 ', ' JghAC ', 4),
(808, ' DK 2 ', ' JghBC ', 4),
(809, ' DK 3 ', ' JghCC ', 4),
(810, ' SHS 11 ', ' JghDC ', 4),
(811, ' SHS 12 ', ' JghEC ', 4),
(812, ' R 01 ', ' JghFC ', 4),
(813, ' BISI 16 ', ' JghGC ', 4),
(814, ' BISI 18 ', ' JghHC ', 4),
(815, ' NT 10 ', ' JghIC ', 4),
(816, ' N 35 ', ' JghJC ', 4),
(817, ' Harmoni 1 ', ' JghKC ', 4),
(818, ' Bima 2 Bantimurung  ', ' JghLC ', 4),
(819, ' B 88 ', ' JghMC ', 4),
(820, ' B 99 ', ' JghNC ', 4),
(821, ' Bima 3 Bantumurung ', ' JghOC ', 4),
(822, ' DK 979 ', ' JghPC ', 4),
(823, ' DK 9910 ', ' JghQC ', 4),
(824, ' PAC-984 ', ' JghRC ', 4),
(825, ' PAC-105 ', ' JghSC ', 4),
(826, ' AS 3 ', ' JghTC ', 4),
(827, ' AS 4 ', ' JghUC ', 4),
(828, ' AS 6 ', ' JghVC ', 4),
(829, ' Makmur 1 ', ' JghWC ', 4),
(830, ' Makmur 2 ', ' JghXC ', 4),
(831, ' Makmur 3 ', ' JghYC ', 4),
(832, ' A 1 ', ' JghZC ', 4),
(833, ' A 3 ', ' JghAD ', 4),
(834, ' A 5 ', ' JghBD ', 4),
(835, ' A 6 ', ' JghCD ', 4),
(836, ' SHS 3 ', ' JghDD ', 4),
(837, ' SHS 4 ', ' JghED ', 4),
(838, ' P 24 ', ' JghFD ', 4),
(839, ' P 25 ', ' JghGD ', 4),
(840, ' P 26 ', 'JghHD', 4),
(841, ' P 27 ', 'JghID', 4),
(842, ' Bima 4 ', 'JghJD', 4),
(843, ' Bima 5 ', 'JghKD', 4),
(844, ' Bima 6 ', 'JghLD', 4),
(845, ' B 89 ', 'JghMD', 4),
(846, ' B 50 ', 'JghND', 4),
(847, ' B 52 ', 'JghOD', 4),
(848, ' BISI 816 ', 'JghPD', 4),
(849, ' BISI 222 ', 'JghQD', 4),
(850, ' BISI 818 ', 'JghRD', 4),
(851, ' Pertiwi 1 ', 'JghSD', 4),
(852, ' Pertiwi 2 ', 'JghTD', 4),
(853, ' Pertiwi 3 ', 'JghUD', 4),
(854, ' AS 1 ', 'JghVD', 4),
(855, ' Makmur 4 ', 'JghWD', 4),
(856, ' DMI 1 ', 'JghXD', 4),
(857, ' DMI 2 ', 'JghYD', 4),
(858, ' DMI 3 ', 'JghZD', 4),
(859, ' NK 6226 ', 'JghAE', 4),
(860, ' NK 6325 ', 'JghBE', 4),
(861, ' NK 6326 ', 'JghCE', 4),
(862, ' NK 6645 ', 'JghDE', 4),
(863, ' DK 7711 ', 'JghEE', 4),
(864, ' DK 7722 ', 'JghFE', 4),
(865, ' P 28 ', 'JghGE', 4),
(866, ' P 29 ', 'JghHE', 4),
(867, ' JK 7 ', 'JghIE', 4),
(868, ' JK 8 ', 'JghJE', 4),
(869, ' P 31 ', 'JghKE', 4),
(870, ' PAC 224 ', 'JghLE', 4),
(871, ' PAC 759 ', 'JghME', 4),
(872, ' Bima 7 ', 'JghNE', 4),
(873, ' Bima 8 ', 'JghOE', 4),
(874, ' Bima 9 ', 'JghPE', 4),
(875, ' Bima 10 ', 'JghQE', 4),
(876, ' Bima 11 ', 'JghRE', 4),
(877, ' Bima 12 Q ', 'JghSE', 4),
(878, ' Bima 13 Q ', 'JghTE', 4),
(879, ' DK 85 ', 'JghUE', 4),
(880, ' DK 95 ', 'JghVE', 4),
(881, ' Bima 14 Batara ', 'JghWE', 4),
(882, ' Bima 15 Sayang ', 'JghXE', 4),
(883, ' Bima 16 ', 'JghYE', 4),
(884, ' RK 457 ', 'JghZE', 4),
(885, ' SHS 022 ', 'JghAF', 4),
(886, ' SHS 024 ', 'JghBF', 4),
(887, ' Bima 20 ', 'JghCF', 4),
(888, ' PAC 105S ', 'JghDF', 4),
(889, ' PAC 339 ', 'JghEF', 4),
(890, ' ADV 313 ', 'JghFF', 4),
(891, ' NT 104 ', 'JghGF', 4),
(892, ' NT 105 ', 'JghHF', 4),
(893, ' N 37 ', 'JghIF', 4),
(894, ' Pertiwi 6 ', 'JghJF', 4),
(895, ' Pertiwi 5 ', 'JghKF', 4),
(896, ' Bima Putih 1 ', 'JghLF', 4),
(897, ' Bima Putih 2 ', 'JghMF', 4),
(898, ' DK 6999 ', 'JghNF', 4),
(899, ' DK 6818 ', 'JghOF', 4),
(900, ' P 30 ', 'JghPF', 4),
(901, ' Bima 17 ', 'JghQF', 4),
(902, ' Bima 18 ', 'JghRF', 4),
(903, ' RK 45 ', 'JghSF', 4),
(904, ' RK 57 ', 'JghTF', 4),
(905, ' RK 58 ', 'JghUF', 4),
(906, ' Bima Provit A1 ', 'JghVF', 4),
(907, ' BR 2 ', 'JghWF', 4),
(908, ' BR 4 ', 'JghXF', 4),
(909, ' Supra 1 ', 'JghYF', 4),
(910, ' SP 1 ', 'JghZF', 4),
(911, ' SP 2 ', 'JghAG', 4),
(912, ' P 32 ', 'JghBG', 4),
(913, ' P 33 ', 'JghCG', 4),
(914, ' Bima 19 URI ', 'JghDG', 4),
(915, ' Bima 20 URI ', 'JghEG', 4),
(916, ' NK 99S ', 'JghFG', 4),
(917, ' NK 212 ', 'JghGG', 4),
(918, ' BISI 226 ', 'JghHG', 4),
(919, ' BISI 228 ', 'JghIG', 4),
(920, ' Kiat 24 ', 'JghJG', 4),
(921, ' Kiat 30 ', 'JghKG', 4),
(922, ' DK 6919 ', 'JghLG', 4),
(923, ' P35 ', 'JghMG', 4),
(924, ' HJ 21 Agritan ', 'JghNG', 4),
(925, ' HJ 22 Agritan ', 'JghOG', 4),
(926, ' Pulut Uri 3 H ', 'JghPG', 4),
(927, ' ADV 78 ', 'JghQG', 4),
(928, ' ADV 777 ', 'JghRG', 4),
(929, ' 8665 C ', 'JghSG', 4),
(930, ' NK 5113 ', 'JghTG', 4),
(931, ' NK 7328 ', 'JghUG', 4),
(932, ' Suwarna ', 'JghVG', 4),
(933, ' Bond ', 'JghWG', 4),
(934, ' Dragon ', 'JghXG', 4),
(935, ' 8639C ', 'JghYG', 4),
(936, ' NK 7328S ', 'JghZG', 4),
(937, ' JH 234 ', 'JghAH', 4),
(938, ' NK 212S ', 'JghBH', 4),
(939, ' B 54 ', 'JghCH', 4),
(940, ' JH 27 ', 'JghDH', 4),
(941, ' B 70 ', 'JghEH', 4),
(942, ' BISI 220 ', 'JghFH', 4),
(943, ' NK 6232 ', 'JghGH', 4),
(944, ' NK 6172 ', 'JghHH', 4),
(945, ' LG 501 ', 'JghIH', 4),
(946, ' LG 222 ', 'JghJH', 4),
(947, ' BETRAS 1 ', 'JghKH', 4),
(948, ' BETRAS 4 ', 'JghLH', 4),
(949, ' 6559 C ', 'JghMH', 4),
(950, ' 6133 C ', 'JghNH', 4),
(951, ' JH 45 ', 'JghOH', 4),
(952, ' JH 36 ', 'JghPH', 4),
(953, ' Orba ', ' KdlA ', 5),
(954, ' No. 29 ', ' KdlB ', 5),
(955, ' Galunggung ', ' KdlC ', 5),
(956, ' Wilis ', ' KdlD ', 5),
(957, ' Lokon ', ' KdlE ', 5),
(958, ' Guntur ', ' KdlF ', 5),
(959, ' Dempo ', ' KdlG ', 5),
(960, ' Kerinci ', ' KdlH ', 5),
(961, ' Merbabu ', ' KdlI ', 5),
(962, ' Raung ', ' KdlJ ', 5),
(963, ' Muria ', ' KdlK ', 5),
(964, ' Tidar ', ' KdlL ', 5),
(965, ' Rinjani ', ' KdlM ', 5),
(966, ' Lompo Batang ', ' KdlN ', 5),
(967, ' Tambora ', ' KdlO ', 5),
(968, ' Petek ', ' KdlP ', 5),
(969, ' Lumajang Bewok ', ' KdlQ ', 5),
(970, ' Lawu ', ' KdlR ', 5),
(971, ' Dieng ', ' KdlS ', 5),
(972, ' Tengger ', ' KdlT ', 5),
(973, ' Jayawijaya ', ' KdlU ', 5),
(974, ' Krakatau ', ' KdlV ', 5),
(975, ' Tampomas ', ' KdlW ', 5),
(976, ' Cikurai ', ' KdlX ', 5),
(977, ' Singgalang ', ' KdlY ', 5),
(978, ' Malabar ', ' KdlZ ', 5),
(979, ' Kipas Putih ', ' KdlAA ', 5),
(980, ' Slamet ', ' KdlBA ', 5),
(981, ' Sindoro ', ' KdlCA ', 5),
(982, ' Pangrango ', ' KdlDA ', 5),
(983, ' Bromo ', ' KdlEA ', 5),
(984, ' Kawi ', ' KdlFA ', 5),
(985, ' Leuser ', ' KdlGA ', 5),
(986, ' Argomulyo ', ' KdlHA ', 5),
(987, ' Meratus ', ' KdlIA ', 5),
(988, ' Manglayang ', ' KdlJA ', 5),
(989, ' Burangrang ', ' KdlKA ', 5),
(990, ' Kaba ', ' KdlLA ', 5),
(991, ' Sinabung ', ' KdlMA ', 5),
(992, ' Nanti ', ' KdlNA ', 5),
(993, ' Sibayak ', ' KdlOA ', 5),
(994, ' Tanggamus ', ' KdlPA ', 5),
(995, ' Anjasmoro ', ' KdlQA ', 5),
(996, ' Mahameru ', ' KdlRA ', 5),
(997, ' Menyapa ', ' KdlSA ', 5),
(998, ' Lawit ', ' KdlTA ', 5),
(999, ' Merubetiri ', ' KdlUA ', 5),
(1000, ' Baluran ', ' KdlVA ', 5),
(1001, ' Ijen ', ' KdlWA ', 5),
(1002, ' Panderman ', ' KdlXA ', 5),
(1003, ' Seulawah ', ' KdlYA ', 5),
(1004, ' Rajabasa ', ' KdlZA ', 5),
(1005, ' Ratai ', ' KdlAB ', 5),
(1006, ' Gumitir ', ' KdlBB ', 5),
(1007, ' Argopuro ', ' KdlCB ', 5),
(1008, ' Arjasari ', ' KdlDB ', 5),
(1009, ' Malikka ', ' KdlEB ', 5),
(1010, ' Gepak Ijo ', ' KdlFB ', 5),
(1011, ' Grobokan ', ' KdlGB ', 5),
(1012, ' Kipas Merah Bireun ', ' KdlHB ', 5),
(1013, ' Gepak Kuning ', ' KdlIB ', 5),
(1014, ' Mitani ', ' KdlJB ', 5),
(1015, ' Detam 1 ', 'KdlKB', 5),
(1016, ' Detam 2 ', 'KdlLB', 5),
(1017, ' Mutiara 1 ', 'KdlMB', 5),
(1018, ' Gema ', 'KdlNB', 5),
(1019, ' Dering 1 ', 'KdlOB', 5),
(1020, ' Gamasugen 1 ', 'KdlPB', 5),
(1021, ' Gamasugen 2 ', 'KdlQB', 5),
(1022, ' Detam 3 Prida ', 'KdlRB', 5),
(1023, ' Detam 4 Prida ', 'KdlSB', 5),
(1024, ' Mutiara 2 ', 'KdlTB', 5),
(1025, ' Mutiara 3 ', 'KdlUB', 5),
(1026, ' Demas 1 ', 'KdlVB', 5),
(1027, ' Dena 1 ', 'KdlWB', 5),
(1028, ' Dena 2 ', 'KdlXB', 5),
(1029, ' Devon 1 ', 'KdlYB', 5),
(1030, ' Dega-1 ', 'KdlZB', 5),
(1031, ' Devon 2 ', 'KdlAC', 5),
(1032, ' Detap 1 ', 'KdlBC', 5),
(1033, ' Deja 1 ', 'KdlCC', 5),
(1034, ' Deja 2 ', 'KdlDC', 5),
(1035, ' NS. Karawang ', '', 5),
(1036, ' Gajah  ', ' KctA ', 6),
(1037, ' Banteng ', ' KctB ', 6),
(1038, ' Kidang ', ' KctC ', 6),
(1039, ' Rusa ', ' KctD ', 6),
(1040, ' Anoa ', ' KctE ', 6),
(1041, ' Tupai ', ' KctF ', 6),
(1042, ' Pelanduk ', ' KctG ', 6),
(1043, ' Tapir ', ' KctH ', 6),
(1044, ' Kelinci ', ' KctI ', 6),
(1045, ' Jepara ', ' KctJ ', 6),
(1046, ' Landak ', ' KctK ', 6),
(1047, ' Mahesa ', ' KctL ', 6),
(1048, ' Badak ', ' KctM ', 6),
(1049, ' Komodo ', ' KctN ', 6),
(1050, ' Biawak ', ' KctO ', 6),
(1051, ' Trenggiling ', ' KctP ', 6),
(1052, ' Simpai ', ' KctQ ', 6),
(1053, ' Zebra ', ' KctR ', 6),
(1054, ' Macan ', ' KctS ', 6),
(1055, ' Panther ', ' KctT ', 6),
(1056, ' Jerapah ', ' KctU ', 6),
(1057, ' Singa ', ' KctV ', 6),
(1058, ' Kancil ', ' KctW ', 6),
(1059, ' Turangga ', ' KctX ', 6),
(1060, ' Sima ', ' KctY ', 6),
(1061, ' Bima ', ' KctZ ', 6),
(1062, ' Lokan Tuban ', ' KctAA ', 6),
(1063, ' Garuda Biga ', ' KctBA ', 6),
(1064, ' Garuda Dua ', ' KctCA ', 6),
(1065, ' Bison ', ' KctDA ', 6),
(1066, ' Domba ', ' KctEA ', 6),
(1067, ' Sandle ', ' KctFA ', 6),
(1068, ' Tigo Ampek ', ' KctGA ', 6),
(1069, ' DM 1 Situraja ', ' KctHA ', 6),
(1070, ' Talam 1 ', ' KctIA ', 6),
(1071, ' HypoMa 1 ', ' KctJA ', 6),
(1072, ' HypoMa 2 ', ' KctKA ', 6),
(1073, ' Takar 1 ', ' KctLA ', 6),
(1074, ' Takar 2 ', ' KctMA ', 6),
(1075, ' Litbang Garuda 2 ', ' KctNA ', 6),
(1076, ' Nolion 1 ', ' KctOA ', 6),
(1077, ' Nolion 2 ', ' KctPA ', 6),
(1078, ' Talam 2 ', ' KctQA ', 6),
(1079, ' Talam 3 ', ' KctRA ', 6),
(1080, ' Hypoma 3 ', ' KctSA ', 6),
(1081, ' Tala 1 ', ' KctTA ', 6),
(1082, ' Tala 2 ', ' KctUA ', 6),
(1083, ' Gundul Muarakata ', ' KctVA ', 6),
(1084, ' Katantan 1 ', '', 6),
(1085, ' No. 129 ', ' KchA ', 7),
(1086, ' Merak ', ' KchB ', 7),
(1087, ' Bhakti ', ' KchC ', 7),
(1088, ' Nuri ', ' KchD ', 7),
(1089, ' Manyar ', ' KchE ', 7),
(1090, ' Betet ', ' KchF ', 7),
(1091, ' Walet ', ' KchG ', 7),
(1092, ' Gelatik ', ' KchH ', 7),
(1093, ' Parkit ', ' KchI ', 7),
(1094, ' Merpati ', ' KchJ ', 7),
(1095, ' Camar ', ' KchK ', 7),
(1096, ' Sriti ', ' KchL ', 7),
(1097, ' Kenari ', ' KchM ', 7),
(1098, ' Perkutut ', ' KchN ', 7),
(1099, ' Murai ', ' KchO ', 7),
(1100, ' Sampeong ', ' KchP ', 7),
(1101, ' Kutilang ', ' KchQ ', 7),
(1102, ' Fore Belu ', ' KchR ', 7),
(1103, ' Vima 1 ', ' KchS ', 7),
(1104, ' Muri ', ' KchT ', 7),
(1105, ' Vima 2 ', ' KchU ', 7),
(1106, ' Vima 3 ', ' KchV ', 7),
(1107, ' Adira 1 ', ' UbkA ', 8),
(1108, ' Adira 2 ', ' UbkB ', 8),
(1109, ' Adira 4 ', ' UbkC ', 8),
(1110, ' Malang 1 ', ' UbkD ', 8),
(1111, ' Malang 2 ', ' UbkE ', 8),
(1112, ' Darul Hidayah ', ' UbkF ', 8),
(1113, ' Uj 5 ', ' UbkG ', 8),
(1114, ' Uj 3 ', ' UbkH ', 8),
(1115, ' Malang 4 ', ' UbkI ', 8),
(1116, ' Malang 6 ', ' UbkJ ', 8),
(1117, ' Litbang UK 2 ', ' UbkK ', 8),
(1118, ' UK 1 Agritan ', ' UbkL ', 8),
(1119, ' Prambanan ', ' UbjA ', 9),
(1120, ' Borobudur ', ' UbjB ', 9),
(1121, ' Mendut ', ' UbjC ', 9),
(1122, ' Kalasan ', ' UbjD ', 9),
(1123, ' Muara Takus ', ' UbjE ', 9),
(1124, ' Cangkuang ', ' UbjF ', 9),
(1125, ' Sewu ', ' UbjG ', 9),
(1126, ' Cilembu ', ' UbjH ', 9),
(1127, ' Sari ', ' UbjI ', 9),
(1128, ' Boko ', ' UbjJ ', 9),
(1129, ' Jago ', ' UbjK ', 9),
(1130, ' Kidal ', ' UbjL ', 9),
(1131, ' Sukuh ', ' UbjM ', 9),
(1132, ' Shiroyutaka ', ' UbjN ', 9),
(1133, ' Papua Solossa ', ' UbjO ', 9),
(1134, ' Papua Pattipi ', ' UbjP ', 9),
(1135, ' Sawentar ', ' UbjQ ', 9),
(1136, ' Nagara KB 1 ', ' UbjR ', 9),
(1137, ' Kuningan Merah ', ' UbjS ', 9),
(1138, ' Kuningan Putih ', ' UbjT ', 9),
(1139, ' Beta 1 ', ' UbjU ', 9),
(1140, ' Beta 2 ', ' UbjV ', 9),
(1141, ' Antin 1 ', ' UbjW ', 9),
(1142, ' Antin 2 ', ' UbjX ', 9),
(1143, ' Antin 3 ', ' UbjY ', 9),
(1144, ' Benindo ', ' UbjZ ', 9),
(1145, ' Beta 3 ', ' UbjAA ', 9),
(1146, 'Toyota UJ 4', 'UbjBA', 9),
(1147, 'ToyotaUJ 5', 'UbjCA', 9),
(1148, ' Timor ', ' GdmA ', 10),
(1149, ' Nias ', ' GdmB ', 10),
(1150, ' Selayar ', ' GdmC ', 10),
(1151, ' Dewata-DWR ', ' GdmD ', 10),
(1152, ' Guri 1 ', ' GdmE ', 10),
(1153, ' Guri 2 ', ' GdmF ', 10),
(1154, ' Ganesha ', ' GdmG ', 10),
(1155, ' Guri 3 Agritan ', ' GdmH ', 10),
(1156, ' Guri 4 Agritan ', ' GdmI ', 10),
(1157, ' Guri 5 Agritan ', ' GdmJ ', 10),
(1158, ' Guri 6 Unand ', ' GdmK ', 10),
(1159, ' Keris ', ' SgmA ', 11),
(1160, ' Badik ', ' SgmB ', 11),
(1161, ' Hegari Genjah ', ' SgmC ', 11),
(1162, ' Mandau ', ' SgmD ', 11),
(1163, ' Sangkur ', ' SgmE ', 11),
(1164, ' Numbu ', ' SgmF ', 11),
(1165, ' Kawali ', ' SgmG ', 11),
(1166, ' Pahat ', ' SgmH ', 11),
(1167, ' Super 1 ', ' SgmI ', 11),
(1168, ' Super 2 ', ' SgmJ ', 11),
(1169, ' Samurai 1 ', ' SgmK ', 11),
(1170, ' Samurai 2 ', ' SgmL ', 11),
(1171, ' Suri 3 Agritan ', ' SgmM ', 11),
(1172, ' Suri 4 Agritan ', ' SgmN ', 11),
(1173, ' EPL 1 ', ' SgmO ', 11),
(1174, ' Inerie Ngada ', ' KcmA ', 12),
(1175, ' Laksadi K ', ' TlsA ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `cek_mutu_pangan`
--
ALTER TABLE `cek_mutu_pangan`
  ADD PRIMARY KEY (`id_cek_mutu_pangan`);

--
-- Indexes for table `input_lab_apbd`
--
ALTER TABLE `input_lab_apbd`
  ADD PRIMARY KEY (`id_input_lab_apbd`);

--
-- Indexes for table `input_lab_apbn`
--
ALTER TABLE `input_lab_apbn`
  ADD PRIMARY KEY (`id_input_lab_apbn`);

--
-- Indexes for table `inventaris_pengedar`
--
ALTER TABLE `inventaris_pengedar`
  ADD PRIMARY KEY (`id_inventaris_pengedar`);

--
-- Indexes for table `inventaris_produsen`
--
ALTER TABLE `inventaris_produsen`
  ADD PRIMARY KEY (`id_inventaris_pangan`);

--
-- Indexes for table `jenis_tanaman`
--
ALTER TABLE `jenis_tanaman`
  ADD PRIMARY KEY (`id_jenis_tanaman`);

--
-- Indexes for table `jenis_varietas`
--
ALTER TABLE `jenis_varietas`
  ADD PRIMARY KEY (`id_jenis_varietas`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kelas_benih`
--
ALTER TABLE `kelas_benih`
  ADD PRIMARY KEY (`id_kelas_benih`);

--
-- Indexes for table `kelas_benih2`
--
ALTER TABLE `kelas_benih2`
  ADD PRIMARY KEY (`id_kelas_benih2`);

--
-- Indexes for table `komoditi`
--
ALTER TABLE `komoditi`
  ADD PRIMARY KEY (`id_komoditi`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id_lab`),
  ADD UNIQUE KEY `id_lab_anggaran` (`id_lab_anggaran`);

--
-- Indexes for table `lab_apbd`
--
ALTER TABLE `lab_apbd`
  ADD PRIMARY KEY (`id_lab_apbd`);

--
-- Indexes for table `lab_apbn`
--
ALTER TABLE `lab_apbn`
  ADD PRIMARY KEY (`id_lab_apbn`);

--
-- Indexes for table `musim_tanam`
--
ALTER TABLE `musim_tanam`
  ADD PRIMARY KEY (`id_musim_tanam`);

--
-- Indexes for table `pelabelan_benih`
--
ALTER TABLE `pelabelan_benih`
  ADD PRIMARY KEY (`id_pelabelan_benih`);

--
-- Indexes for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  ADD PRIMARY KEY (`id_sertifikasi`);

--
-- Indexes for table `sertifikasi_apbd`
--
ALTER TABLE `sertifikasi_apbd`
  ADD PRIMARY KEY (`id_sertifikasi`);

--
-- Indexes for table `sertifikasi_apbn`
--
ALTER TABLE `sertifikasi_apbn`
  ADD PRIMARY KEY (`id_sertifikasi`);

--
-- Indexes for table `stok_pangan`
--
ALTER TABLE `stok_pangan`
  ADD PRIMARY KEY (`id_stok_pangan`);

--
-- Indexes for table `tu_apbd`
--
ALTER TABLE `tu_apbd`
  ADD PRIMARY KEY (`id_tu_apbd`);

--
-- Indexes for table `tu_apbn`
--
ALTER TABLE `tu_apbn`
  ADD PRIMARY KEY (`id_tu_apbn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `varietas`
--
ALTER TABLE `varietas`
  ADD PRIMARY KEY (`id_varietas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id_bulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cek_mutu_pangan`
--
ALTER TABLE `cek_mutu_pangan`
  MODIFY `id_cek_mutu_pangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `input_lab_apbd`
--
ALTER TABLE `input_lab_apbd`
  MODIFY `id_input_lab_apbd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `input_lab_apbn`
--
ALTER TABLE `input_lab_apbn`
  MODIFY `id_input_lab_apbn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inventaris_pengedar`
--
ALTER TABLE `inventaris_pengedar`
  MODIFY `id_inventaris_pengedar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventaris_produsen`
--
ALTER TABLE `inventaris_produsen`
  MODIFY `id_inventaris_pangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_tanaman`
--
ALTER TABLE `jenis_tanaman`
  MODIFY `id_jenis_tanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_varietas`
--
ALTER TABLE `jenis_varietas`
  MODIFY `id_jenis_varietas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT for table `kelas_benih`
--
ALTER TABLE `kelas_benih`
  MODIFY `id_kelas_benih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelas_benih2`
--
ALTER TABLE `kelas_benih2`
  MODIFY `id_kelas_benih2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komoditi`
--
ALTER TABLE `komoditi`
  MODIFY `id_komoditi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `id_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lab_apbd`
--
ALTER TABLE `lab_apbd`
  MODIFY `id_lab_apbd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_apbn`
--
ALTER TABLE `lab_apbn`
  MODIFY `id_lab_apbn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `musim_tanam`
--
ALTER TABLE `musim_tanam`
  MODIFY `id_musim_tanam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelabelan_benih`
--
ALTER TABLE `pelabelan_benih`
  MODIFY `id_pelabelan_benih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  MODIFY `id_sertifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `stok_pangan`
--
ALTER TABLE `stok_pangan`
  MODIFY `id_stok_pangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tu_apbd`
--
ALTER TABLE `tu_apbd`
  MODIFY `id_tu_apbd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tu_apbn`
--
ALTER TABLE `tu_apbn`
  MODIFY `id_tu_apbn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `varietas`
--
ALTER TABLE `varietas`
  MODIFY `id_varietas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1176;

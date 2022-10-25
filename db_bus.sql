-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Okt 2022 pada 10.24
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_bus`
--

CREATE TABLE `kategori_bus` (
  `id_katbus` int(10) NOT NULL,
  `tipe_unit` varchar(25) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `seat` int(15) NOT NULL,
  `nopol` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_bus`
--

INSERT INTO `kategori_bus` (`id_katbus`, `tipe_unit`, `kategori`, `seat`, `nopol`) VALUES
(1, 'Small Bus', 'Hiace', 11, 'B7454FAA'),
(2, 'Medium Bus', 'Premium', 23, 'B7461FAA'),
(3, 'Big Bus', 'Luxury', 59, 'AB7892JN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(10) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `role`) VALUES
(1, 'Administrator'),
(2, 'Sales'),
(3, 'Finance');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maksud_sewa`
--

CREATE TABLE `maksud_sewa` (
  `id_sewa` int(5) NOT NULL,
  `jenis_sewa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `maksud_sewa`
--

INSERT INTO `maksud_sewa` (`id_sewa`, `jenis_sewa`) VALUES
(1, 'Wisata'),
(2, 'Ziarah'),
(3, 'Gathering/Outing'),
(4, 'Dinas'),
(5, 'Kedukaan'),
(6, 'Pernikahan'),
(7, 'Vaksin'),
(8, 'Syuting'),
(9, 'Sport'),
(10, 'TTG'),
(11, 'Others');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(5) NOT NULL,
  `nama_provinsi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'DKI Jakarta'),
(2, 'Jawa Barat'),
(3, 'Jawa Timur'),
(4, 'Jawa Tengah'),
(5, 'Sumatera Selatan'),
(6, 'Sumatera Barat'),
(7, 'Sumatera Utara'),
(8, 'Bali'),
(9, 'Lombok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute_tujuan`
--

CREATE TABLE `rute_tujuan` (
  `id_tujuan` int(5) NOT NULL,
  `rute_daerah` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rute_tujuan`
--

INSERT INTO `rute_tujuan` (`id_tujuan`, `rute_daerah`) VALUES
(1, 'Jakarta'),
(2, 'Cibubur'),
(3, 'Cimanggis'),
(4, 'Cibinong'),
(5, 'Sentul'),
(6, 'Bogor'),
(7, 'Bekasi'),
(8, 'Cikarang'),
(9, 'Depok'),
(10, 'Tanggerang'),
(11, 'Parung'),
(12, 'Puncak'),
(13, 'Ciawi'),
(14, 'Cibodas'),
(15, 'Cipanas'),
(16, 'Banten'),
(17, 'Karawang'),
(18, 'Sukabumi'),
(19, 'Serang'),
(20, 'Cilegon'),
(21, 'Merak'),
(22, 'Anyer'),
(23, 'Bandung'),
(24, 'Subang'),
(25, 'Lembang'),
(26, 'Ciater'),
(27, 'Pelabuhan Ratu'),
(28, 'Citarik'),
(29, 'Cianjur'),
(30, 'Kawah Putih'),
(31, 'Tanjung Lesung'),
(32, 'Situpatenggang'),
(33, 'Pengalengan'),
(34, 'Cirebon'),
(35, 'Kuningan'),
(36, 'Garut'),
(37, 'Ciamis'),
(38, 'Sumedang'),
(39, 'Pangandaran'),
(40, 'Cilacap'),
(41, 'Pekalongan'),
(42, 'Purwokerto'),
(43, 'Semarang '),
(44, 'Jogjakarta'),
(45, 'Solo'),
(46, 'Belitar'),
(47, 'Madiun'),
(48, 'Jember'),
(49, 'Banyuwangi'),
(50, 'Ngawi'),
(51, 'Kawah Ijen'),
(52, 'Kediri'),
(53, 'Malang'),
(54, 'Bromo'),
(55, 'Batu'),
(56, 'Tuban'),
(57, 'Lamongan'),
(58, 'Lampung'),
(59, 'Bengkulu'),
(60, 'Jambi'),
(61, 'Riau'),
(62, 'Medan'),
(63, 'Aceh'),
(64, 'Padang'),
(65, 'Bali'),
(66, 'Lombok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales`
--

CREATE TABLE `sales` (
  `id` int(5) NOT NULL,
  `no_reservasi` varchar(25) NOT NULL,
  `pic_sales` varchar(25) NOT NULL,
  `profit_center` varchar(15) NOT NULL,
  `nama_cmd` varchar(128) NOT NULL,
  `nama_instansi` varchar(128) NOT NULL,
  `booking_order` varchar(25) NOT NULL,
  `order_type` varchar(5) DEFAULT NULL,
  `jenis_bayar` varchar(15) NOT NULL,
  `invoice` varchar(8) NOT NULL,
  `spesifikasi` varchar(48) NOT NULL,
  `type_customer` varchar(15) NOT NULL,
  `source_data` varchar(28) NOT NULL,
  `group` varchar(15) NOT NULL,
  `cmd` varchar(25) NOT NULL,
  `pic_customer` varchar(48) DEFAULT NULL,
  `pic_contact` varchar(28) DEFAULT NULL,
  `type_unit` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `nopol` varchar(15) NOT NULL,
  `seat` int(8) NOT NULL,
  `driver` varchar(128) NOT NULL,
  `maksud_sewa` varchar(20) NOT NULL,
  `rute` varchar(48) NOT NULL,
  `alamat` varchar(64) NOT NULL,
  `provinsi` varchar(48) NOT NULL,
  `order_start` date NOT NULL,
  `order_end` date NOT NULL,
  `order_day` varchar(5) NOT NULL,
  `toll_parkir` varchar(18) DEFAULT NULL,
  `revenue_unit` int(30) DEFAULT NULL,
  `addcharge` int(30) DEFAULT NULL,
  `addcharge_ket` text DEFAULT NULL,
  `revenue_total` int(30) DEFAULT NULL,
  `price_list` int(30) DEFAULT NULL,
  `diskon` int(5) DEFAULT NULL,
  `id_payment` int(3) NOT NULL,
  `total_payment` int(48) DEFAULT NULL,
  `pph_23` int(18) DEFAULT NULL,
  `sel_payment` int(48) DEFAULT NULL,
  `ket_payment` text DEFAULT NULL,
  `id_upload` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sales`
--

INSERT INTO `sales` (`id`, `no_reservasi`, `pic_sales`, `profit_center`, `nama_cmd`, `nama_instansi`, `booking_order`, `order_type`, `jenis_bayar`, `invoice`, `spesifikasi`, `type_customer`, `source_data`, `group`, `cmd`, `pic_customer`, `pic_contact`, `type_unit`, `kategori`, `nopol`, `seat`, `driver`, `maksud_sewa`, `rute`, `alamat`, `provinsi`, `order_start`, `order_end`, `order_day`, `toll_parkir`, `revenue_unit`, `addcharge`, `addcharge_ket`, `revenue_total`, `price_list`, `diskon`, `id_payment`, `total_payment`, `pph_23`, `sel_payment`, `ket_payment`, `id_upload`) VALUES
(1, 'TRAC-5GSB7O7A143172', 'Ardi', 'UB01', 'B', 'Cemerlang Abadi', 'UB2120220830918192', 'B2B', 'IN Advanced', 'TIDAK', 'Personal', 'New', '4', 'NON-AFFCO', 'B', 'Tono', '0896753633623', 'Big Bus', 'Toilet', 'L7611UA', 31, 'Klaus', 'Wisata', 'Jakarta', 'Central Plaza, 3rd Floor, Jl.Jend.Sudirman Kav.47 Jakarta 12930', 'DKI Jakarta', '2022-10-28', '2022-10-29', '2', 'Exclude', 400000000, 40000, 'parkir', 400040000, 500000000, 20, 1, 50000000, 0, 350040000, 'ext;', 1),
(2, 'TRAC-5GSB7O7A143172', 'Ardi', 'UB01', 'B', 'Cerenti Subur', 'UB2120220830918192', 'B2B', 'IN Advanced', 'TIDAK', 'Personal', 'New', 'Whatsapp', 'NON-AFFCO', 'B', 'Tono', '0896753633623', 'Big Bus', 'Toilet', 'L7611UA', 31, 'Klaus', 'Wisata', 'Jakarta', 'Jl. Ir.H. Juanda III, No.29, Jakarta Pusat', 'DKI Jakarta', '2022-10-28', '2022-10-29', '2', 'Exclude', 400000000, 40000, 'Parkir,toll', 400040000, 500000000, 20, 2, 50000000, 0, 350040000, 'ext;', 2),
(3, 'TRAC-VZO6B4GJ142781', 'Henti', 'UB01', 'K', 'Citramandiri Widyanusa', 'UB0120220826914800', 'B2C', 'IN Advanced', 'TIDAK', 'Personal', 'New', 'Whatsapp', 'NON-AFFCO', 'K', 'Yudarwita', '021- 7398325', 'Small Bus', 'Cozy Bus', 'B7454FAA', 13, 'John', 'Wisata', 'Jakarta', '', 'DKI Jakarta', '2022-04-09', '2022-08-09', '5', 'Exclude', 11100000, 0, '', 1110000, 1110000, 18, 3, 1110000, 0, 0, 'Lunas Pembayaran', 3),
(4, 'TRAC-20220830610184292', 'Rani', 'UB01', 'J', 'Astra Agro lestari Tbk', 'UB0120220830918135', 'B2C', 'IN Advanced', 'TIDAK', 'TTG', 'New', '9', 'NON-AFFCO', 'J', 'Yunita Ardiana', '021-3448684', 'Medium Bus', 'Hiace', 'B7692FAA', 23, '-', 'Wisata', 'Jakarta', '', 'DKI Jakarta', '2022-02-09', '2022-02-09', '1', 'Exclude', 1013200, 0, '-', 0, 1233200, 18, 4, 1013200, 0, -1013200, 'Lunas Pembayaran', 4),
(5, 'TRAC-EAJKXDCA143439', 'Janner', 'UB01', 'I', 'Agro Indah Sembada', 'UB0120220831918846', 'B2C', 'PO', 'YA', '1', 'Existing', '3', 'AFFCO', 'I', 'Reza', '021-3448684', 'Big Bus', 'Toilet', 'L7611UA', 31, 'Tono', '4', 'Jakarta', '', 'DKI Jakarta', '2022-08-01', '2022-08-03', '4', 'Exclude', 2450000, 0, '', 2450000, 2450000, 0, 5, 0, 0, 2450000, 'Kurang Bayar', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales_payment`
--

CREATE TABLE `sales_payment` (
  `id_payment` int(3) NOT NULL,
  `pay_1` varchar(28) DEFAULT NULL,
  `pay_tgl_1` date DEFAULT NULL,
  `pay_nom_1` int(48) DEFAULT NULL,
  `pay_2` varchar(28) DEFAULT NULL,
  `pay_tgl_2` date DEFAULT NULL,
  `pay_nom_2` int(48) DEFAULT NULL,
  `pay_3` varchar(28) DEFAULT NULL,
  `pay_tgl_3` date DEFAULT NULL,
  `pay_nom_3` int(48) DEFAULT NULL,
  `pay_4` varchar(28) DEFAULT NULL,
  `pay_tgl_4` date DEFAULT NULL,
  `pay_nom_4` int(48) DEFAULT NULL,
  `pay_5` varchar(28) DEFAULT NULL,
  `pay_tgl_5` date DEFAULT NULL,
  `pay_nom_5` int(48) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sales_payment`
--

INSERT INTO `sales_payment` (`id_payment`, `pay_1`, `pay_tgl_1`, `pay_nom_1`, `pay_2`, `pay_tgl_2`, `pay_nom_2`, `pay_3`, `pay_tgl_3`, `pay_nom_3`, `pay_4`, `pay_tgl_4`, `pay_nom_4`, `pay_5`, `pay_tgl_5`, `pay_nom_5`) VALUES
(2, 'BCA', '2022-10-16', 4000000, 'BCA', '2022-10-17', 1000000, NULL, NULL, NULL, NULL, NULL, NULL, 'BCA', '2022-10-18', 4800000),
(3, 'Mandiri', '2022-08-31', 3330000, 'Mandiri', '2022-08-31', 7770000, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL),
(4, 'BCA Virtual Account', '2022-08-30', 1013200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'BNI', '2022-10-21', 400000, 'Mandiri', '2022-10-22', 2000000, 'BNI', '2022-10-23', 200000000, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Permata', '2022-08-30', 1013200, 'Permata', '2022-10-05', 7770000, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL),
(11, 'BNI', '2022-10-04', 400000, 'BNI', '2022-10-05', 400000, 'BNI', '2022-10-08', 1200000, 'BNI', '2022-10-11', 1500000, NULL, NULL, NULL),
(12, 'Mandiri', '2022-10-02', 1000000, 'Mandiri', '2022-10-07', 250000, 'Mandiri', '2022-10-08', 100000, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Mandiri', '2022-10-20', 5000000, 'Permata', '2022-10-22', 2000000, 'Mandiri', '2022-10-07', 1000000, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'BCA', '2022-09-09', 4000000, 'Permata', '2022-09-10', 2000000, 'BNI', '2022-09-11', 200000000, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales_unit`
--

CREATE TABLE `sales_unit` (
  `id_unit` int(3) NOT NULL,
  `nopol` varchar(15) NOT NULL,
  `type` varchar(28) NOT NULL,
  `kategori` varchar(28) NOT NULL,
  `seat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sales_unit`
--

INSERT INTO `sales_unit` (`id_unit`, `nopol`, `type`, `kategori`, `seat`) VALUES
(12, 'B7475FGA', 'Big', 'XHD', '31 Seat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales_upload`
--

CREATE TABLE `sales_upload` (
  `id_upload` int(3) NOT NULL,
  `upload_1` varchar(38) NOT NULL,
  `upload_2` varchar(38) DEFAULT NULL,
  `upload_3` varchar(38) DEFAULT NULL,
  `upload_4` varchar(38) DEFAULT NULL,
  `upload_5` varchar(38) DEFAULT NULL,
  `upload_6` varchar(38) DEFAULT NULL,
  `upload_7` varchar(38) DEFAULT NULL,
  `upload_8` varchar(38) DEFAULT NULL,
  `upload_9` varchar(38) DEFAULT NULL,
  `upload_10` varchar(38) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sales_upload`
--

INSERT INTO `sales_upload` (`id_upload`, `upload_1`, `upload_2`, `upload_3`, `upload_4`, `upload_5`, `upload_6`, `upload_7`, `upload_8`, `upload_9`, `upload_10`) VALUES
(1, '31/08/2022', '01/09/2022', '02/09/2022', '03/09/2022', '04/09/2022', '05/09/2022', '', '', '', ''),
(2, '31/08/2022', '', '', '', '', '', '', '', '2022-10-09', '2022-10-10'),
(3, '31/08/2022', '01/09/2022', '02/09/2022', '03/09/2022', '', '', '', '', '', ''),
(4, '30/08/2022', '', '', '', '', '', '', '', '', ''),
(5, '10/03/2022', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `source_data`
--

CREATE TABLE `source_data` (
  `id_source` int(5) NOT NULL,
  `jenis_source` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `source_data`
--

INSERT INTO `source_data` (`id_source`, `jenis_source`) VALUES
(1, 'Call In'),
(2, 'Walk In'),
(3, 'Whatsapp'),
(4, 'Whatsapp Official'),
(5, 'Sosmed'),
(6, 'Email Milis'),
(7, 'Email RCC'),
(8, 'Referral'),
(9, 'TTG'),
(10, 'Others');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spesifikasi`
--

CREATE TABLE `spesifikasi` (
  `id_spek` int(5) NOT NULL,
  `jenis_spek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spesifikasi`
--

INSERT INTO `spesifikasi` (`id_spek`, `jenis_spek`) VALUES
(1, 'Direct Sales'),
(2, 'Event Organizer'),
(3, 'Agent'),
(4, 'School'),
(5, 'Healthcare'),
(6, 'Oil & Gas'),
(7, 'Logistic Energy'),
(8, 'Government'),
(9, 'Food Procesing and Retail'),
(10, 'Financial Services'),
(11, 'Consultation and Real Estate'),
(12, 'Aviation and Maritim'),
(13, 'Automotives'),
(14, 'TTG'),
(15, 'Others');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tales`
--

CREATE TABLE `tales` (
  `id` int(3) NOT NULL,
  `nopol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tales`
--

INSERT INTO `tales` (`id`, `nopol`) VALUES
(1, 'B7454FAA'),
(2, 'L7612UA'),
(3, 'AB7891JN'),
(4, 'DK9022FC'),
(5, 'B7690FAA'),
(6, 'B7679FAA'),
(7, 'L7611UA'),
(8, 'B7769FAA'),
(9, 'B7790FAA'),
(10, 'B7475FGA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `type_unit`
--

CREATE TABLE `type_unit` (
  `id_unit` int(5) NOT NULL,
  `nama_unit` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `type_unit`
--

INSERT INTO `type_unit` (`id_unit`, `nama_unit`) VALUES
(1, 'Small Bus'),
(2, 'Medium Bus'),
(3, 'Big Bus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `id_level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `id_level`) VALUES
(1, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori_bus`
--
ALTER TABLE `kategori_bus`
  ADD PRIMARY KEY (`id_katbus`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `maksud_sewa`
--
ALTER TABLE `maksud_sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indeks untuk tabel `rute_tujuan`
--
ALTER TABLE `rute_tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- Indeks untuk tabel `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sales_payment`
--
ALTER TABLE `sales_payment`
  ADD PRIMARY KEY (`id_payment`) USING BTREE;

--
-- Indeks untuk tabel `sales_unit`
--
ALTER TABLE `sales_unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indeks untuk tabel `sales_upload`
--
ALTER TABLE `sales_upload`
  ADD PRIMARY KEY (`id_upload`);

--
-- Indeks untuk tabel `source_data`
--
ALTER TABLE `source_data`
  ADD PRIMARY KEY (`id_source`);

--
-- Indeks untuk tabel `spesifikasi`
--
ALTER TABLE `spesifikasi`
  ADD PRIMARY KEY (`id_spek`);

--
-- Indeks untuk tabel `tales`
--
ALTER TABLE `tales`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `type_unit`
--
ALTER TABLE `type_unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `maksud_sewa`
--
ALTER TABLE `maksud_sewa`
  MODIFY `id_sewa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `rute_tujuan`
--
ALTER TABLE `rute_tujuan`
  MODIFY `id_tujuan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `sales_payment`
--
ALTER TABLE `sales_payment`
  MODIFY `id_payment` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `sales_unit`
--
ALTER TABLE `sales_unit`
  MODIFY `id_unit` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `sales_upload`
--
ALTER TABLE `sales_upload`
  MODIFY `id_upload` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tales`
--
ALTER TABLE `tales`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `type_unit`
--
ALTER TABLE `type_unit`
  MODIFY `id_unit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

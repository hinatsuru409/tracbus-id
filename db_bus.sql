-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2022 pada 04.16
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
-- Struktur dari tabel `kategori_unit`
--

CREATE TABLE `kategori_unit` (
  `id_kategori` int(5) NOT NULL,
  `id_unit` int(5) NOT NULL,
  `jenis_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_unit`
--

INSERT INTO `kategori_unit` (`id_kategori`, `id_unit`, `jenis_kategori`) VALUES
(1, 1, 'Hiace'),
(2, 1, 'Coaster'),
(3, 1, 'Cozy Bus'),
(4, 2, 'Reguler'),
(5, 2, 'Elf'),
(6, 2, 'HDD'),
(7, 3, 'Luxury'),
(8, 3, 'Elf Jumbo'),
(9, 3, 'Premium'),
(10, 3, 'Toilet');

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
(10, 'Others');

-- --------------------------------------------------------

--
-- Struktur dari tabel `no_polisi_unit`
--

CREATE TABLE `no_polisi_unit` (
  `id_nopol` int(5) NOT NULL,
  `id_seat` int(5) NOT NULL,
  `nomor_plat` varchar(38) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `no_polisi_unit`
--

INSERT INTO `no_polisi_unit` (`id_nopol`, `id_seat`, `nomor_plat`) VALUES
(1, 1, 'B7454FAA'),
(2, 1, 'B7455FAA'),
(3, 1, 'B7456FAA'),
(4, 1, 'B7461FAA'),
(5, 2, 'L7612UA'),
(6, 2, 'AB7891JN'),
(7, 2, 'DK9022FC'),
(8, 2, 'B7690FAA'),
(9, 3, 'DK9024FC'),
(10, 3, 'DK9026FC'),
(11, 3, 'DK9028FC'),
(12, 3, 'B7678FAA'),
(13, 4, 'B7681FAA'),
(14, 4, 'B7692FAA'),
(15, 4, 'B7815FAA'),
(16, 4, 'B7816FAA'),
(17, 5, 'L7611UA'),
(18, 5, 'AB7892JN'),
(19, 5, 'B7768FAA'),
(20, 5, 'B7769FAA'),
(21, 6, 'B7771FAA'),
(22, 6, 'B7772FAA'),
(23, 6, 'B7790FAA'),
(24, 6, 'B7817FAA'),
(25, 7, 'B7909FAA'),
(26, 7, 'B7908FAA'),
(27, 7, 'B7911FAA'),
(28, 7, 'B7673FAA'),
(29, 8, 'B7674FAA'),
(30, 8, 'B7475FGA'),
(31, 8, 'B7476FGA'),
(32, 8, 'B7903FAA'),
(33, 9, 'B7477FGA'),
(34, 9, 'B7913FAA'),
(35, 9, 'B7910FAA'),
(36, 9, 'B7909FAA'),
(37, 10, 'B7908FAA'),
(38, 10, 'B7911FAA'),
(39, 10, 'L7811UA'),
(40, 10, 'L7813UA');

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
  `id_sales` int(5) NOT NULL,
  `no_reservasi` varchar(25) NOT NULL,
  `pic_sales` varchar(25) NOT NULL,
  `profit_center` varchar(15) NOT NULL,
  `nama_cmd` varchar(128) DEFAULT NULL,
  `nama_instansi` varchar(128) DEFAULT NULL,
  `booking_order` varchar(25) DEFAULT NULL,
  `order_type` varchar(5) DEFAULT NULL,
  `jenis_bayar` varchar(15) NOT NULL,
  `invoice` varchar(8) DEFAULT NULL,
  `spesifikasi` varchar(20) DEFAULT NULL,
  `type_customer` varchar(15) DEFAULT NULL,
  `source_data` varchar(28) DEFAULT NULL,
  `group` varchar(15) DEFAULT NULL,
  `cmd` varchar(25) DEFAULT NULL,
  `pic_customer` varchar(48) DEFAULT NULL,
  `pic_contact` varchar(28) DEFAULT NULL,
  `type_unit` varchar(20) DEFAULT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `nopol` varchar(15) DEFAULT NULL,
  `seat` int(8) DEFAULT NULL,
  `driver` varchar(128) DEFAULT NULL,
  `maksud_sewa` varchar(20) DEFAULT NULL,
  `rute` varchar(48) DEFAULT NULL,
  `provinsi` varchar(28) NOT NULL,
  `order_start` date DEFAULT NULL,
  `order_end` date DEFAULT NULL,
  `order_day` varchar(5) DEFAULT NULL,
  `toll_parkir` varchar(18) DEFAULT NULL,
  `revenue_unit` int(30) DEFAULT NULL,
  `addcharge` int(30) DEFAULT NULL,
  `addcharge_ket` text DEFAULT NULL,
  `revenue_total` int(30) DEFAULT NULL,
  `price_list` int(30) DEFAULT NULL,
  `diskon` int(5) DEFAULT NULL,
  `id_payment` int(3) DEFAULT NULL,
  `total_payment` int(48) DEFAULT NULL,
  `pph_col` varchar(8) DEFAULT NULL,
  `pph_23` int(18) DEFAULT NULL,
  `sel_payment` int(48) DEFAULT NULL,
  `ket_payment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sales`
--

INSERT INTO `sales` (`id_sales`, `no_reservasi`, `pic_sales`, `profit_center`, `nama_cmd`, `nama_instansi`, `booking_order`, `order_type`, `jenis_bayar`, `invoice`, `spesifikasi`, `type_customer`, `source_data`, `group`, `cmd`, `pic_customer`, `pic_contact`, `type_unit`, `kategori`, `nopol`, `seat`, `driver`, `maksud_sewa`, `rute`, `provinsi`, `order_start`, `order_end`, `order_day`, `toll_parkir`, `revenue_unit`, `addcharge`, `addcharge_ket`, `revenue_total`, `price_list`, `diskon`, `id_payment`, `total_payment`, `pph_col`, `pph_23`, `sel_payment`, `ket_payment`) VALUES
(21, 'TRAC-OZ3IJ6YM143357', 'Ardi', 'UB21', 'M', NULL, 'UB2120220830918192', 'B2C', 'IN ADVANCE', 'Tidak', 'Personal', 'New', 'Whatsapp', 'NON - AFFCO', NULL, 'Sugianto', NULL, 'Medium Bus', 'Premium', 'B7418FGA', 35, NULL, 'Wisata', 'Prigen', 'Jawa Timur', '2022-09-04', '2022-09-04', '1', 'Exclude', 2400000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'TRAC-QWQ4CC7K143358', 'Ardi', 'UB21', 'L', NULL, 'UB2120220830918195', 'B2C', 'IN ADVANCE', 'Tidak', 'School', 'New', 'Whatsapp', 'NON - AFFCO', NULL, 'Sugianto', NULL, 'Medium Bus', 'Premium', 'B7412FGA', 31, NULL, 'Wisata', 'Prigen', 'Jawa Timur', '2022-09-04', '2022-09-04', '1', 'Exclude', 2300000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'TRAC-VZO6B4GJ142781', 'Henti', 'UB01', 'K', NULL, 'UB0120220826914800', 'B2C', 'IN ADVANCE', 'Tidak', 'Healthcare', 'New', 'Whatsapp Official', 'Non- AFFCO', NULL, 'Yudarwita', NULL, 'Medium', 'Coaster', 'B7475FGA', 23, NULL, 'Wisata', 'Jogja', 'Jawa Tengah', '2022-09-04', '2022-09-08', '5', 'Exclude', 11100000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'TRAC-20220830610184292', 'Rani', 'UB01', 'J', NULL, 'UB0120220830918135', 'B2C', 'IN ADVANCE', 'Tidak', 'Oil&Gas', 'New', 'TTG', 'NON - AFFCO', NULL, 'Yunita Ardiana', NULL, 'Small Bus', 'Hiace', 'B7026FAB', 13, NULL, 'Wisata', 'Jakarta', 'DKI Jakarta', '2022-09-02', '2022-09-02', '1', 'Exclude', 1013000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'TRAC-EAJKXDCA143439', 'Janner', 'UB01', 'I', NULL, 'UB0120220831918846', 'B2B', 'PO', 'Iya', 'Direct Sales', 'Existing', 'Whatsapp', 'AFFCO', NULL, 'Reza', NULL, 'Medium Bus', 'Premium', 'L7795UA', 31, NULL, 'Dinas', 'Jakarta', 'DKI Jakarta', '2022-09-01', '2022-09-01', '1', 'Include', 2450000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'TRAC-5GSB7O7A143172', 'Janner', 'UB01', 'D', NULL, 'UB0120220829916993', 'B2C', 'IN ADVANCE', 'Tidak', 'Event Organizer', 'New', 'Whatsapp', 'NON - AFFCO', NULL, 'Sean', NULL, 'Small Bus', 'Elf Jumbo', 'B7908FGA', 16, NULL, 'Wisata', 'Dieng', 'Jawa Tengah', '2022-09-01', '2022-09-04', '5', 'Exclude', 4500000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'TRAC-5GSB7O7A143172', 'Janner', 'UB01', 'D', NULL, 'UB0120220829916992', 'B2C', 'IN ADVANCE', 'Tidak', 'Event Organizer', 'New', 'Whatsapp', 'NON - AFFCO', NULL, 'Sean', NULL, 'Small Bus', 'Elf Jumbo', 'B7911FGA', 16, NULL, 'Wisata', 'Dieng', 'Jawa Tengah', '2022-09-01', '2022-09-04', '4', 'Exclude', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'TRAC-5GSB7O7A143172', 'Janner', 'UB01', 'D', NULL, 'UB0120220829916991', 'B2C', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'TRAC-5GSB7O7A143172', 'Janner', 'UB01', 'D', NULL, 'UB0120220829916990', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'TRAC-5GSB7O7A143172', 'Janner', 'UB01', 'C', NULL, 'UB0120220829916989', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'TRAC-RA4P5PH3139145', 'Tiara', 'UB01', 'C', NULL, 'UB0120220803891656', 'B2C', 'IN ADVANCE', 'Tidak', 'Event Organizer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'TRAC-TMU3S0PY141410', 'Zaldi', 'UB01', 'B', NULL, 'UB0120220818906628', 'B2C', 'IN ADVANCE', 'Tidak', 'Agent', 'New', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'TRAC-JRT6J6AN140815', 'Nadya', 'UB01', 'A', NULL, 'UB0120220815903200', 'B2C', 'IN ADVANCE', 'Tidak', 'Direct Sales', 'New', 'Whatsapp', 'NON - AFFCO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales_payment`
--

CREATE TABLE `sales_payment` (
  `id_payment` int(3) NOT NULL,
  `pay_1` varchar(48) NOT NULL,
  `pay_tgl_1` date NOT NULL,
  `pay_nom_1` int(48) NOT NULL,
  `pay_2` varchar(48) DEFAULT NULL,
  `pay_tgl_2` date DEFAULT NULL,
  `pay_nom_2` int(48) DEFAULT NULL,
  `pay_3` varchar(48) DEFAULT NULL,
  `pay_tgl_3` date DEFAULT NULL,
  `pay_nom_3` int(48) DEFAULT NULL,
  `pay_4` varchar(48) DEFAULT NULL,
  `pay_tgl_4` date DEFAULT NULL,
  `pay_nom_4` int(48) DEFAULT NULL,
  `pay_5` varchar(48) DEFAULT NULL,
  `pay_tgl_5` date DEFAULT NULL,
  `pay_nom_5` int(48) DEFAULT NULL,
  `pay_6` varchar(48) DEFAULT NULL,
  `pay_tgl_6` date DEFAULT NULL,
  `pay_nom_6` int(48) DEFAULT NULL,
  `pay_7` varchar(48) DEFAULT NULL,
  `pay_tgl_7` date DEFAULT NULL,
  `pay_nom_7` int(48) DEFAULT NULL,
  `pay_8` varchar(48) DEFAULT NULL,
  `pay_tgl_8` date DEFAULT NULL,
  `pay_nom_8` int(48) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `seat_unit`
--

CREATE TABLE `seat_unit` (
  `id_seat` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `jmlh_seat` varchar(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `seat_unit`
--

INSERT INTO `seat_unit` (`id_seat`, `id_kategori`, `jmlh_seat`) VALUES
(1, 1, '13 Seat'),
(2, 2, '15 Seat'),
(3, 3, '23 Seat'),
(4, 4, '29 Seat'),
(5, 5, '31 Seat'),
(6, 6, '35 Seat'),
(7, 7, '59 Seat'),
(8, 8, '45 Seat'),
(9, 9, '48 Seat'),
(10, 10, '40 Seat'),
(11, 1, '11 Seat'),
(12, 2, '16 Seat'),
(13, 3, '25 Seat');

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
(9, 'TTG');

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
(13, 'Automotives');

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
-- Indeks untuk tabel `kategori_unit`
--
ALTER TABLE `kategori_unit`
  ADD PRIMARY KEY (`id_kategori`);

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
-- Indeks untuk tabel `no_polisi_unit`
--
ALTER TABLE `no_polisi_unit`
  ADD PRIMARY KEY (`id_nopol`);

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
  ADD PRIMARY KEY (`id_sales`);

--
-- Indeks untuk tabel `seat_unit`
--
ALTER TABLE `seat_unit`
  ADD PRIMARY KEY (`id_seat`);

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
-- AUTO_INCREMENT untuk tabel `kategori_unit`
--
ALTER TABLE `kategori_unit`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `maksud_sewa`
--
ALTER TABLE `maksud_sewa`
  MODIFY `id_sewa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `no_polisi_unit`
--
ALTER TABLE `no_polisi_unit`
  MODIFY `id_nopol` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
  MODIFY `id_sales` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `seat_unit`
--
ALTER TABLE `seat_unit`
  MODIFY `id_seat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `type_unit`
--
ALTER TABLE `type_unit`
  MODIFY `id_unit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

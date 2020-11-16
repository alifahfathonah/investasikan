-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Agu 2020 pada 04.15
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `investasi-ikan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(23) NOT NULL,
  `nama` varchar(23) NOT NULL,
  `nama_admin` varchar(23) NOT NULL,
  `password_admin` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `nama_admin`, `password_admin`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bagi_hasil`
--

CREATE TABLE `tbl_bagi_hasil` (
  `id_bagi_hasil` int(23) NOT NULL,
  `id_cart` int(23) NOT NULL,
  `kode_barang` varchar(14) NOT NULL,
  `nama_barang` varchar(23) NOT NULL,
  `harga` int(12) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pemilik` varchar(14) NOT NULL,
  `id_member` varchar(14) NOT NULL,
  `photo_url` text,
  `keterangan` text,
  `konfirmasi` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_balas_perbaruan`
--

CREATE TABLE `tbl_balas_perbaruan` (
  `id_balas_perbaruan` int(23) NOT NULL,
  `id_perbaruan` int(23) NOT NULL,
  `kode_barang` varchar(14) NOT NULL,
  `id_member` varchar(14) NOT NULL,
  `id_pemilik` varchar(14) NOT NULL,
  `tanggal_balas_perbaruan` date DEFAULT NULL,
  `isi_balas_perbaruan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `kode_barang` varchar(14) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `id_pemilik` varchar(10) NOT NULL,
  `harga` int(12) NOT NULL,
  `stok` int(3) NOT NULL,
  `gambar` text,
  `keterangan` text,
  `photo_url` text,
  `persetujuan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`kode_barang`, `nama_barang`, `id_pemilik`, `harga`, `stok`, `gambar`, `keterangan`, `photo_url`, `persetujuan`) VALUES
('KD.0002', 'Ikan ', 'Melani', 0, 0, NULL, '', 'SS Panduan.JPG', 'menyetujui persyaratan'),
('KD.0003', 'Ikan Piranha', 'Melani', 50000, 0, NULL, '', 'SS Salah login.JPG', 'menyetujui persyaratan'),
('KD.0004', 'Ikan Louhan', 'Melani', 200000, 0, NULL, '', 'SS Login register pengguna.JPG', 'menyetujui persyaratan'),
('KD.0005', 'Ikan Arwana', 'Melani', 30000, 0, NULL, '', 'gurami.jpg', 'menyetujui persyaratan'),
('KD.0006', 'Ikan Lele', 'Melani', 75000, 0, NULL, '', 'ikan lele.jpg', 'menyetujui persyaratan'),
('KD.0007', 'Ikan Lele 1kg', 'Melani', 75000, 0, NULL, '', '', 'menyetujui persyaratan'),
('KD.0008', 'Ikan Nila 1kg', 'evan', 50000, 0, NULL, '', 'nila.jpg', 'menyetujui persyaratan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(10) NOT NULL,
  `kode_barang` varchar(14) NOT NULL,
  `nama_barang` varchar(23) NOT NULL,
  `harga` int(12) NOT NULL,
  `jumlah_barang` varchar(12) NOT NULL,
  `id_member` varchar(14) NOT NULL,
  `photo_url` text,
  `total` int(12) NOT NULL,
  `konfirmasi` varchar(5) NOT NULL,
  `konfirmasi_pemilik` varchar(5) NOT NULL,
  `tanggal_belanja` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date` varchar(12) DEFAULT NULL,
  `kode_cart` varchar(14) NOT NULL,
  `tgl` varchar(14) NOT NULL,
  `area` varchar(77) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `kode_barang`, `nama_barang`, `harga`, `jumlah_barang`, `id_member`, `photo_url`, `total`, `konfirmasi`, `konfirmasi_pemilik`, `tanggal_belanja`, `date`, `kode_cart`, `tgl`, `area`) VALUES
(1, 'KD.0008', 'Ikan Nila 1kg', 50000, '1', '33', 'nila.jpg', 50000, '1', '', '2020-07-07 04:58:09', '070720', 'BBJ0002', '07', ''),
(2, 'KD.0008', 'Ikan Nila 1kg', 50000, '1', '33', 'nila.jpg', 50000, '1', '', '2020-07-07 05:03:28', '070720', 'BBJ0002', '07', ''),
(3, 'KD.0008', 'Ikan Nila 1kg', 50000, '1', '', 'nila.jpg', 50000, '', '', '2020-07-08 03:04:18', NULL, '', '08', ''),
(4, '', '', 0, '', '34', NULL, 0, '', '', '2020-07-10 01:15:37', NULL, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detailjual`
--

CREATE TABLE `tbl_detailjual` (
  `id_detailJual` int(23) NOT NULL,
  `kode_cart` varchar(14) NOT NULL,
  `jumlah_barang` varchar(23) NOT NULL,
  `total` varchar(23) NOT NULL,
  `tanggal` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_historycart`
--

CREATE TABLE `tbl_historycart` (
  `id_cart` int(10) NOT NULL,
  `kode_barang` varchar(14) NOT NULL,
  `nama_barang` varchar(23) NOT NULL,
  `harga` int(12) NOT NULL,
  `jumlah_barang` varchar(12) NOT NULL,
  `id_member` varchar(14) NOT NULL,
  `photo_url` text,
  `total` int(12) NOT NULL,
  `konfirmasi` varchar(5) NOT NULL,
  `tanggal_belanja` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date` varchar(12) DEFAULT NULL,
  `kode_cart` varchar(14) NOT NULL,
  `tgl` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_historyorder`
--

CREATE TABLE `tbl_historyorder` (
  `id_order` int(23) NOT NULL,
  `kode_cart` varchar(10) NOT NULL,
  `id_member` int(10) NOT NULL,
  `jumlah_barang` int(3) NOT NULL,
  `total` int(12) NOT NULL,
  `tanggal_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `konfirmasi` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konfirmasi`
--

CREATE TABLE `tbl_konfirmasi` (
  `id_konfirmasi` int(23) NOT NULL,
  `kode_cart` varchar(14) NOT NULL,
  `photo_url` text,
  `id_member` varchar(23) NOT NULL,
  `no_rekening` varchar(23) NOT NULL,
  `kode_transaksi` varchar(30) NOT NULL,
  `keterangan` text,
  `konfirmasi` varchar(3) DEFAULT NULL,
  `konfirmasi_pemilik` varchar(3) DEFAULT NULL,
  `persetujuan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id_member` int(10) NOT NULL,
  `nama_member` varchar(26) NOT NULL,
  `email_member` varchar(23) NOT NULL,
  `password_member` varchar(23) NOT NULL,
  `alamat` text,
  `no_hp` varchar(23) NOT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `bank` varchar(50) NOT NULL,
  `rekening` varchar(20) NOT NULL,
  `nama_rekening` varchar(100) NOT NULL,
  `foto_ktp` text,
  `persetujuan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `nama_member`, `email_member`, `password_member`, `alamat`, `no_hp`, `tanggal`, `bank`, `rekening`, `nama_rekening`, `foto_ktp`, `persetujuan`) VALUES
(33, 'edwin', 'edwin@yahoo.com', 'edwin', 'Purwokerto							\r\n							', '08237789876', '2016-04-12 18:39:26', '', '', '', NULL, NULL),
(34, 'shin tae yong', 'shin@gmail.com', 'admin', 'Ledug', '11222313123', '2020-07-10 01:15:37', 'BNI', '223123214', 'Shin', 'bug2.PNG', 'menyetujui persyaratan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(23) NOT NULL,
  `kode_cart` varchar(10) NOT NULL,
  `id_member` int(10) NOT NULL,
  `jumlah_barang` int(3) NOT NULL,
  `total` int(12) NOT NULL,
  `tanggal_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `konfirmasi` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `kode_cart`, `id_member`, `jumlah_barang`, `total`, `tanggal_order`, `konfirmasi`) VALUES
(0, 'BBJ0001', 33, 1, 50000, '2020-07-07 05:01:49', 0),
(0, 'BBJ0002', 33, 1, 50000, '2020-07-07 05:03:31', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pemilik`
--

CREATE TABLE `tbl_pemilik` (
  `id_pemilik` int(10) NOT NULL,
  `nama_pemilik` varchar(26) NOT NULL,
  `email_pemilik` varchar(23) NOT NULL,
  `password_pemilik` varchar(23) NOT NULL,
  `alamat` text,
  `no_hp` varchar(23) NOT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `bulan` varchar(23) NOT NULL,
  `tahun` varchar(23) NOT NULL,
  `status` varchar(1) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `rekening` varchar(20) NOT NULL,
  `nama_rekening` varchar(100) NOT NULL,
  `photo_ktp` text,
  `photo_siup` text,
  `photo_lainnya` text,
  `persetujuan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pemilik`
--

INSERT INTO `tbl_pemilik` (`id_pemilik`, `nama_pemilik`, `email_pemilik`, `password_pemilik`, `alamat`, `no_hp`, `tanggal`, `bulan`, `tahun`, `status`, `bank`, `rekening`, `nama_rekening`, `photo_ktp`, `photo_siup`, `photo_lainnya`, `persetujuan`) VALUES
(1, 'evan', 'evan@yahoo.com', 'evan', 'purwokerto								\r\n\r\n							', '08237789876', '2016-04-12 18:39:26', '04', '16', 'A', '', '', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_perbaruan`
--

CREATE TABLE `tbl_perbaruan` (
  `id_perbaruan` int(23) NOT NULL,
  `kode_barang` varchar(14) NOT NULL,
  `id_member` varchar(14) NOT NULL,
  `id_pemilik` varchar(14) NOT NULL,
  `tanggal_perbaruan` date DEFAULT NULL,
  `isi_perbaruan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_stok`
--

CREATE TABLE `tbl_stok` (
  `id_stok` int(23) NOT NULL,
  `kode_barang` varchar(14) NOT NULL,
  `jumlah_stok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_stok`
--

INSERT INTO `tbl_stok` (`id_stok`, `kode_barang`, `jumlah_stok`) VALUES
(1, 'KD.0008', 2),
(2, 'KD.0008', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_bagi_hasil`
--
ALTER TABLE `tbl_bagi_hasil`
  ADD PRIMARY KEY (`id_bagi_hasil`);

--
-- Indeks untuk tabel `tbl_balas_perbaruan`
--
ALTER TABLE `tbl_balas_perbaruan`
  ADD PRIMARY KEY (`id_balas_perbaruan`);

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indeks untuk tabel `tbl_detailjual`
--
ALTER TABLE `tbl_detailjual`
  ADD PRIMARY KEY (`id_detailJual`);

--
-- Indeks untuk tabel `tbl_historycart`
--
ALTER TABLE `tbl_historycart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indeks untuk tabel `tbl_historyorder`
--
ALTER TABLE `tbl_historyorder`
  ADD PRIMARY KEY (`kode_cart`);

--
-- Indeks untuk tabel `tbl_konfirmasi`
--
ALTER TABLE `tbl_konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`);

--
-- Indeks untuk tabel `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`kode_cart`);

--
-- Indeks untuk tabel `tbl_pemilik`
--
ALTER TABLE `tbl_pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indeks untuk tabel `tbl_perbaruan`
--
ALTER TABLE `tbl_perbaruan`
  ADD PRIMARY KEY (`id_perbaruan`);

--
-- Indeks untuk tabel `tbl_stok`
--
ALTER TABLE `tbl_stok`
  ADD PRIMARY KEY (`id_stok`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_bagi_hasil`
--
ALTER TABLE `tbl_bagi_hasil`
  MODIFY `id_bagi_hasil` int(23) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_balas_perbaruan`
--
ALTER TABLE `tbl_balas_perbaruan`
  MODIFY `id_balas_perbaruan` int(23) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_detailjual`
--
ALTER TABLE `tbl_detailjual`
  MODIFY `id_detailJual` int(23) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_historycart`
--
ALTER TABLE `tbl_historycart`
  MODIFY `id_cart` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_konfirmasi`
--
ALTER TABLE `tbl_konfirmasi`
  MODIFY `id_konfirmasi` int(23) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id_member` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tbl_pemilik`
--
ALTER TABLE `tbl_pemilik`
  MODIFY `id_pemilik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_perbaruan`
--
ALTER TABLE `tbl_perbaruan`
  MODIFY `id_perbaruan` int(23) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_stok`
--
ALTER TABLE `tbl_stok`
  MODIFY `id_stok` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

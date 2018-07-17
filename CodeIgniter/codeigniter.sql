-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jul 2018 pada 00.22
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoelektronik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `idBarang` int(11) NOT NULL,
  `idKategori` int(11) NOT NULL,
  `namaBarang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` float NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`idBarang`, `idKategori`, `namaBarang`, `deskripsi`, `warna`, `berat`, `jumlah`, `harga`, `foto`) VALUES
(24, 8, 'Samsung', '4g ', 'Cream', 1, 20, 2570000, '27.jpg'),
(25, 8, 'Lenovo', '4G/3G 3gb/32gb', 'Putih tulang', 1, 25, 1980000, '311.jpg'),
(26, 9, 'Kulkas', '2 pintu', 'merah', 15, 15, 3250000, '141.jpg'),
(27, 9, 'Samsung', '4 pintu 1dispenser ', 'Hitam', 25, 5, 12000000, '18.jpg'),
(28, 10, 'Samsung', 'Hdmi full hd 32\"', 'Hitam', 2, 100, 4700000, '151.jpg'),
(29, 10, 'Sharp', 'Slim 4khd', 'Hitam', 2, 15, 5070000, 'p12.jpg'),
(30, 9, 'Midea', '2 pintu', 'merah, putih, cream', 10, 50, 3800000, 'Sharp.JPG'),
(31, 11, 'Panasonic', 'Top loading', 'merah', 4, 10, 500000, '161.jpg'),
(32, 12, 'Asus', 'Intel inside, ram 4, Hdd 500', 'Hitam', 1, 50, 3750000, '23.jpg'),
(33, 12, 'Panasonic', 'Amd, hdd 500, ram 4', 'Merah', 1, 10, 2570000, '24.jpg'),
(34, 12, 'Predator R1', 'hdd 1T, ram 8', 'Hitam merah', 1, 100, 7500000, 'Predator.png'),
(35, 13, 'Anta', 'Anti air', 'Abu-abu', 0, 5, 150000, 'p10.jpg'),
(36, 14, 'Dazumba', '5.1 sound', 'Hitam ', 1, 5, 305000, '8.jpg'),
(37, 14, 'Lg', '5.1 sound', 'hitam', 1, 10, 570000, 'p13.jpg'),
(38, 15, 'Cross', 'anti air+mic', 'Merah', 500, 50, 75000, '9.jpg'),
(39, 15, 'X7', 'No kabel+ bluetooth', 'hitam', 500, 50, 450000, 'p2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `idKategori` int(11) NOT NULL,
  `namaKategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idKategori`, `namaKategori`) VALUES
(8, 'Handphone'),
(9, 'Kulkas'),
(10, 'Televisi'),
(11, 'Mesin Cuci'),
(12, 'Laptop'),
(13, 'Jam tangan'),
(14, 'Speaker'),
(15, 'Earphone');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjangbelanja`
--

CREATE TABLE `keranjangbelanja` (
  `idKeranjangBelanja` int(11) NOT NULL,
  `idBarang` int(11) NOT NULL,
  `idKategori` int(11) NOT NULL,
  `totalHarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keranjangbelanja`
--

INSERT INTO `keranjangbelanja` (`idKeranjangBelanja`, `idBarang`, `idKategori`, `totalHarga`) VALUES
(6, 24, 8, 2570000),
(8, 28, 10, 4700000),
(9, 28, 10, 4700000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `idLogin` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noTelp` int(11) NOT NULL,
  `kodePos` int(11) NOT NULL,
  `provinsi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`idLogin`, `nama`, `alamat`, `noTelp`, `kodePos`, `provinsi`, `kota`, `email`, `password`, `level`) VALUES
(2, 'arrizky', 'a', 10, 9, 'jatim', 'malang', 'arrizky@gmail.com', 'dcfc6768e76500dfb8e63a411eb1d5d7', ''),
(8, 'dsad', 'dsada', 123, 3213, 'dsaasd', 'dasd', 'sucigading10@gmail.com', '1234567890', 'user'),
(10, 'Arrizky', 'Jln Selorejo 38B Malang', 2147483647, 65141, 'Jawa TImur', 'Malang', 'arrizkyrama00@gmail.com', '123', 'admin'),
(11, 'Aji', 'Jln Sulfat', 2147483647, 65141, 'Jawa timur', 'Malang', 'aji@gmail.com', 'aji', 'user'),
(12, 'Admin', 'admin', 123, 123, 'Admin', 'admin', 'admin@gmail.com', 'admin', 'admin'),
(13, 'Rindu', 'Jln Sulfat', 81, 65141, 'Jawa timur', 'malang', 'Rindu@gmail.com', 'rindu', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`),
  ADD KEY `fk_barang_idKategori` (`idKategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `keranjangbelanja`
--
ALTER TABLE `keranjangbelanja`
  ADD PRIMARY KEY (`idKeranjangBelanja`),
  ADD KEY `fk_keranjangbelanja_barang` (`idBarang`),
  ADD KEY `fk_keranjangbelanja_kategori` (`idKategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLogin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `keranjangbelanja`
--
ALTER TABLE `keranjangbelanja`
  MODIFY `idKeranjangBelanja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_barang_idKategori` FOREIGN KEY (`idKategori`) REFERENCES `kategori` (`idKategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `keranjangbelanja`
--
ALTER TABLE `keranjangbelanja`
  ADD CONSTRAINT `fk_keranjangbelanja_barang` FOREIGN KEY (`idBarang`) REFERENCES `barang` (`idBarang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_keranjangbelanja_kategori` FOREIGN KEY (`idKategori`) REFERENCES `kategori` (`idKategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

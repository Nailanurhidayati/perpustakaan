-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 05:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `buku_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`buku_id`, `judul`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(4, 'Pemrograman Berorientasi Objek : Kompetensi Keahlian Rekayasa Perangkat', 'Priyatno', 'Bumi Aksara', '2112-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku`
--

CREATE TABLE `kategoribuku` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoribuku`
--

INSERT INTO `kategoribuku` (`kategori_id`, `nama_kategori`) VALUES
(2, 'PPLG'),
(3, ' PEMASARAN PRODUK DIGITAL');

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku_relasi`
--

CREATE TABLE `kategoribuku_relasi` (
  `kategori_buku_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `koleksipribadi`
--

CREATE TABLE `koleksipribadi` (
  `koleksi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `peminjaman_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_peminjaman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`peminjaman_id`, `user_id`, `buku_id`, `tanggal_peminjaman`, `tanggal_pengembalian`, `status_peminjaman`) VALUES
(1, 1, 4, '2024-02-28', '2024-03-01', 'SUKSES'),
(2, 1, 4, '2024-02-26', '2024-02-29', 'SUKSES');

-- --------------------------------------------------------

--
-- Table structure for table `ulasanbuku`
--

CREATE TABLE `ulasanbuku` (
  `ulasan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_lenkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `nama_lenkap`, `alamat`, `level`) VALUES
(1, 'Adi', 'adi123', 'adirostaman@gmail.com', 'Adi Roztaman', 'Tasikmalaya Kota', 3),
(2, 'Dede', '12345678', 'dede12@gmail.com', 'Dede Sutratna', 'Sodong', 1),
(3, 'Martin', '11111', 'martin33@gmail.com', 'Martin Sutisna', 'Depok', 2),
(4, 'werawg', 'eargr', 'reagare@dbfjsk.com', 'sfefeea', 'rdfafad', 3),
(7, 'SERWR', '11111', 'WT4WTSS', 'ETQT3T3T', '3T3QT3QT', 0),
(8, 'adirizki21', 'adirizki21', 'adirizki21@gmail.com', 'Adi Rizki Maulana', 'Tasikmalaya', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`buku_id`);

--
-- Indexes for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD PRIMARY KEY (`koleksi_id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`peminjaman_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `buku_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `peminjaman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

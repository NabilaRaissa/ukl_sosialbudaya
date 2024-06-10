-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jun 2024 pada 06.25
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sosialbudaya_ukl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `Id_event` int(11) NOT NULL,
  `nama_event` varchar(300) NOT NULL,
  `tanggal_event` date NOT NULL,
  `lokasi_event` varchar(200) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `jumlah_stok` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`Id_event`, `nama_event`, `tanggal_event`, `lokasi_event`, `deskripsi`, `foto`, `harga`, `jumlah_stok`) VALUES
(1, 'Pagelaran Wayang Kulit', '2024-06-20', 'Alun-Alun Sidoarjo, Jawa Timur', 'aaaaaaaaaaa', 'foto wayang.jpg', '150.000', '10'),
(2, 'Jember Fashion Carnival', '2024-08-02', 'Jember, Jawa Timur, Indonesia', 'bbbbbbbbbb', 'foto jfc.jpg', '100.000', '10'),
(3, 'Sendratari Ramayana', '2024-05-30', 'Candi Prambanan, Klaten, Jawa Tengah', 'ccccccccccc', 'foto sendratari.jpg', '100.000', '10'),
(4, 'Festival Lampion Waisak', '2024-05-23', 'Candi Borobudur, Magelang, Jawa Tengah', 'ddddddddd', 'foto lampion.jpg', '150.000', '10'),
(5, 'Tari Merak', '2024-06-08', 'Alun Alun Bandung, Jawa Barat', 'eeeeeeeeee', 'foto  merak.jpg', '75.000', '10'),
(6, 'Bunyi Angklung', '2024-06-09', 'Alun Alun Jakarta, Jawa Barat', 'ffffffffffff', 'foto angklung.jpg', '80.000', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_event`
--

CREATE TABLE `tiket_event` (
  `Id_tiket` int(11) NOT NULL,
  `Id_event` int(11) NOT NULL,
  `harga_tiket` varchar(50) NOT NULL,
  `jumlah_stok_tiket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tiket_event`
--

INSERT INTO `tiket_event` (`Id_tiket`, `Id_event`, `harga_tiket`, `jumlah_stok_tiket`) VALUES
(111, 1, '150.000', '10'),
(112, 2, '100.000', '10'),
(113, 3, '50.000', '10'),
(114, 4, '100.000', '10'),
(115, 5, '50.000', '10'),
(116, 6, '50.000', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `Id_transaksi` int(11) NOT NULL,
  `Id_event` int(11) NOT NULL,
  `tanggal_order` date NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `Id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Id_user`, `username`, `password`, `email`, `level`) VALUES
(17, 'arya', 'arya', 'arya@gmail.com', 'user'),
(18, 'tabina', 'tabina', 'tabina@gmail.com', 'user'),
(19, 'devan', 'devan', 'devan@gmail.com', 'user'),
(21, 'ana', 'ana', 'ana@gmail.com', 'user'),
(22, 'nanang', 'nanang', 'nanang@gmail.com', 'user'),
(23, 'raissa', 'raissa', 'raissa@gmail.com', 'user'),
(25, 'nabila', 'nabila', 'nabila@gmail.com', 'admin'),
(26, 'siti rochmana', '12345', 'arya@gmail.com', 'user'),
(27, 'selvi', '1234', 'selviana@gmail.com', 'user'),
(28, 'rezky', 'rezky', 'rezky@gmail.com', 'user'),
(29, 'bila', 'bila', 'bila@gmail.com', 'user'),
(30, 'dev', 'dev', 'dev@gmail.com', 'user'),
(31, 'bil', 'bil', 'bil@gmail.com', 'user'),
(32, 'bilbila', 'bilbila', 'bil@gmail.com', 'user'),
(33, 'halo', 'halo', 'halo@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Id_event`);

--
-- Indeks untuk tabel `tiket_event`
--
ALTER TABLE `tiket_event`
  ADD PRIMARY KEY (`Id_tiket`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`Id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `Id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `Id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tiket_event`
--
ALTER TABLE `tiket_event`
  ADD CONSTRAINT `id_event` FOREIGN KEY (`Id_event`) REFERENCES `event` (`Id_event`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

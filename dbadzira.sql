-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2020 pada 13.27
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbadzira`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_tentor` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` time NOT NULL,
  `mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `id_tentor`, `id_siswa`, `tanggal`, `hari`, `jam`, `mapel`) VALUES
(14, 7, 35, '2020-07-09', 'Senin', '23:20:00', 'Matematika'),
(15, 7, 37, '2020-07-15', 'Rabu', '15:30:00', 'Matematika Dasar'),
(16, 8, 36, '2020-07-21', 'Selasa', '01:30:00', 'Bhs Inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'Teguh', 'f5cd3a020bc94866049206a7cf14e266');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_tentor` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `mapel` varchar(25) NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_siswa`, `id_tentor`, `hari`, `mapel`, `jam`) VALUES
(24, 35, 7, 'Senin', 'Matematika Dasar', '07:00:00'),
(25, 35, 7, 'Selasa', 'IPA', '12:00:00'),
(26, 36, 8, 'Kamis', 'Bhs Jawa', '12:30:00'),
(27, 36, 9, 'Jumat', 'Matematika', '03:00:00'),
(28, 37, 7, 'Rabu', 'Fisika', '17:20:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kelas` int(3) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `tlp_ortu` varchar(12) NOT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `alamat`, `kelas`, `tgl_lahir`, `nama_ortu`, `tlp_ortu`, `image`) VALUES
(35, 'Rafif', 'Jl Werkudoro IV no 21, semarang', 5, '2020-07-03', 'Sugeng', '087700111111', 'siswa20-07-2020jam18-20-9019a75d1d2b9ef.jpg'),
(36, 'Angelina', 'Jl Jatingaleh selatan no 17', 3, '2020-07-11', 'juminten', '08770022222', 'foto20-07-2020-60542.png'),
(37, 'Dzimar', 'Jl Tanjung mas selatan, Semarang', 4, '2020-04-16', 'Sumini', '08770022222', 'foto20-07-2020-dae71.png'),
(38, 'Naura', 'Jl Palir ngaliyan no 15', 4, '2020-07-25', 'Dono', '087721345678', NULL),
(39, 'Nando', 'Jl Lintang Bujur ngaliyan no 65', 6, '2020-07-31', 'Anton', '08770022222', 'siswa20-07-2020-423ae.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentor`
--

CREATE TABLE `tentor` (
  `id_tentor` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `bidang_keahlian` varchar(50) DEFAULT NULL,
  `sekolah` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tentor`
--

INSERT INTO `tentor` (`id_tentor`, `nama`, `alamat`, `no_tlp`, `bidang_keahlian`, `sekolah`, `jurusan`, `semester`, `image`) VALUES
(7, 'Teguh', 'Jl Werkudoro IV no 21, semarang', '082234567891', 'Matematika', 'Udinus', 'Teknik Informatika', 6, 'tentor20-07-2020jam17-57-d2d8c7071710268.png'),
(8, 'Roy Kiyoshi', 'Jl Jalani aja dulu siapa tau jodoh', '082324564321', 'Bhs Arab', 'Unnes', 'Desain Komputer', 8, 'tentor20-07-2020-3dabc.jpg'),
(9, 'Rizky', 'Jl ayam goyeng buyung puyuh ', '082234876654', 'Bhs Planet', 'UNDIP', 'Sastra Bahasa', 8, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tentor`
--
ALTER TABLE `tentor`
  ADD PRIMARY KEY (`id_tentor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `tentor`
--
ALTER TABLE `tentor`
  MODIFY `id_tentor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

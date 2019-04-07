-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 Apr 2019 pada 19.57
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `file-proyek`
--

CREATE TABLE `file-proyek` (
  `no` int(11) NOT NULL,
  `id` varchar(20) NOT NULL,
  `jenis_file` varchar(15) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman-proyek`
--

CREATE TABLE `pengalaman-proyek` (
  `id` varchar(20) NOT NULL,
  `kode_buku` varchar(30) NOT NULL,
  `nama_proyek` text NOT NULL,
  `alamat_proyek` text NOT NULL,
  `tahun` year(4) NOT NULL,
  `jenis_pekerjaan` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `lingkup_pekerjaan` text NOT NULL,
  `volume_pekerjaan` text NOT NULL,
  `pemberi_kerja` text NOT NULL,
  `alamat_pemberi_kerja` text NOT NULL,
  `no_kontrak` varchar(30) NOT NULL,
  `tanggal_kontrak` date NOT NULL,
  `nilai_kontrak` bigint(11) NOT NULL,
  `nilai_kontrak_nonppn` bigint(11) NOT NULL,
  `nilai_final` bigint(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL,
  `konsultan` text NOT NULL,
  `penanggung_jawab` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengalaman-proyek`
--

INSERT INTO `pengalaman-proyek` (`id`, `kode_buku`, `nama_proyek`, `alamat_proyek`, `tahun`, `jenis_pekerjaan`, `lokasi`, `lingkup_pekerjaan`, `volume_pekerjaan`, `pemberi_kerja`, `alamat_pemberi_kerja`, `no_kontrak`, `tanggal_kontrak`, `nilai_kontrak`, `nilai_kontrak_nonppn`, `nilai_final`, `status`, `mulai`, `selesai`, `konsultan`, `penanggung_jawab`, `keterangan`) VALUES
('5ca9e56b3780d', '09/2016', 'Pembangunan Pabrik Steril PT. Pharma Health Care', 'Jababeka, Bekasi, Jawa Barat', 2016, 'Pabrik', 'Bekasi', 'Pekerjaan Struktur, Pekerjaan Arsitektur, Pekerjaan Sipil', '\'8.785 m2, 4 Lantai', 'PT. Pharma Health Care', 'Gedung Office 8 Lantai 26 Lot 26, Jl. Jend. Sudirman Kav. 52-53, Jakarta-Phone: (021) 29333 031-Fax: (021) 29333 053-PIC: Michael Wanandi (Direktur Utama) & Lim Soe/Antho (Direktur)', 'Kontrak No. TL/PTT/017/2016', '2016-08-22', 31750000000, 31750000000, 31750000000, 'Completed', '2016-08-22', '2017-04-18', '-', '-', '-'),
('5caa25f4cbc8c', '06/2016', 'Pembangunan Kantor dan Gudang PT. Tempo Cabang Jember', 'Jl. Wolter Monginsidi, Kel. Kranjingan, Kec. Sumbersari, Jember, Jawa Timur', 2016, '-', 'Jember', 'Pekerjaan Struktur, Pekerjaan Arsitektur, Pekerjaan Sipil, Pekerjaan Lainya', '-', 'PT. Tempo Land (PT. Tempo Nagadi Trading)', 'Jakarta', 'Kontrak No. TL/PTT/017/2016', '2016-08-22', 31750000000, 0, 0, 'Completed', '2016-08-22', '2017-04-08', '-', '-', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file-proyek`
--
ALTER TABLE `file-proyek`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pengalaman-proyek`
--
ALTER TABLE `pengalaman-proyek`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file-proyek`
--
ALTER TABLE `file-proyek`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

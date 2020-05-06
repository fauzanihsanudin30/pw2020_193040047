-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Apr 2020 pada 15.54
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040047`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `cover` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `kategori`, `author`, `penerbit`, `cover`) VALUES
(1, 'Habis Gelap Terbitlah Terang', 'Sejarah', 'Armijn Pane', 'Balai Pustaka', 'Habis.jpg'),
(2, 'R.A. KARTINI: Biografi Singkat 1879-1904', 'Sejarah', ' Imron Rosyadi', 'GARASI, Jogjakarta', 'RA.png'),
(3, 'Letters from Kartini', 'Sejarah', 'Monash Asia Institute', 'Monash University', 'LETFORM.png'),
(4, 'Letters of a Javanese Princess', 'Sejarah', 'Kartini (Raden Adjeng)', 'University Press of America', 'PRIN.png'),
(5, 'Realizing the Dream of R.A. Kartini: Her Sisters Letters from Colonial Java', 'Sejarah\r\n', 'Joost Cote', 'Ohio University Press', 'REALI.png'),
(6, 'On Feminism and Nationalism: Kartinis Letters to Stella Zeehandelaar, 1899-1903', 'Sejarah', 'Joost Cote', 'Monash Asia Institute, 2005', 'ON.png'),
(7, 'Kartini Kaleidoscope', 'Sejarah', 'Tempo Publishing', 'Tempo Publishing', 'KARTINI.png'),
(8, 'Raden Ajeng Kartini, pendekar wanita Indonesia ; oleh A. Soeroto', 'Sejarah', 'A. Soeroto', 'Djambatan, 1976', 'PENDEKAR.png'),
(9, 'Vietnam and the American Political Tradition', 'Politik', 'Randall B. Woods', 'Cambridge University Press', 'VIET.png'),
(10, 'The Politics of Elections in Southeast Asia', 'Politik', 'R. H. Taylor, Lee H. Hamilton', 'Cambridge University Press', 'ASIA.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

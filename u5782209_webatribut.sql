-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 21 Mar 2020 pada 20.38
-- Versi server: 10.2.30-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u5782209_webatribut`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kaos`
--

CREATE TABLE `kaos` (
  `nim` varchar(15) NOT NULL,
  `ukuran` varchar(5) NOT NULL,
  `lengan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Data Pemesanan Kaos';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pdh`
--

CREATE TABLE `pdh` (
  `nim` varchar(12) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `size` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Data Pemesanan PDH';

--
-- Dumping data untuk tabel `pdh`
--

INSERT INTO `pdh` (`nim`, `nickname`, `size`) VALUES
('A710190015', 'Vellai.', 'M'),
('A710190108', 'Dian Asahr Maruf', 'L'),
('E100180147', 'I H S A N  *(spasi o', 'XL'),
('L200180082', 'Alfamn', 'M'),
('L200180100', 'RAY.SMITH', 'S'),
('L200180120', 'k1ra', 'XL'),
('L200180151', 'Nameless', 'M'),
('L200180175', 'Ab.Skywalker', 'M'),
('L200180183', 'Nowayhouzei', 'M'),
('L200180187', 'Aviza', 'M'),
('L200180193', 'Bintang', 'S'),
('L200180207', 'Naura', 'M'),
('L200184033', 'Phynnn', 'S'),
('L200190002', 'ZORIN', 'XXXL'),
('L200190031', 'Dafyourbae', 'XXXL'),
('L200190033', 'mutiapn', 'S'),
('L200190040', 'Antaris.Veda', 'L'),
('L200190062', 'JJ`Tika', 'M'),
('L200190065', 'Tsuchie.exe', 'M'),
('L200190071', 'Shfynfsh', 'L'),
('L200190073', 'Puspa', 'M'),
('L200190076', 'danis.', 'XL'),
('L200190078', 'SaGNA_9', 'L'),
('L200190088', 'Nurama07', 'M'),
('L200190128', 'Asharr', 'L'),
('L200190129', 'Yosan ', 'L'),
('L200190130', 'olisuside', 'XL'),
('L200190134', 'TARRA', 'S'),
('L200190138', 'An_mistrz', 'L'),
('L200190143', 'SENOPATI', 'XL'),
('L200190160', 'zul_fans14', 'L'),
('L200190179', 'yazz', 'XL'),
('L200190192', 'Ahmad zami', 'XL'),
('L200190198', 'Ghee', 'M'),
('L200190199', 'Sofiyan', 'XL'),
('L200190211', 'Sherly', 'M'),
('L200190213', 'Alvito', 'L'),
('L200190215', 'Sekar Tyas', 'S'),
('L200190217', 'SURYA', 'M'),
('L200190223', 'Naning', 'S'),
('L200190227', 'Ksongstu', 'M'),
('L200190237', 'Emma', 'M'),
('L200190240', '\'till Jannah', 'S'),
('L200190254', 'Nila', 'M'),
('L200190261', 'LALA LAND', 'L'),
('L200190263', 'Alivia Rahma S.', 'S'),
('L200190265', 'INDAH', 'M'),
('L200194197', 'In', 'S');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `nim` varchar(15) NOT NULL,
  `pdh` varchar(6) NOT NULL,
  `idcard` varchar(6) NOT NULL,
  `kaos` varchar(6) NOT NULL,
  `total` text NOT NULL,
  `sp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Rekap Pembayaran';

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`nim`, `pdh`, `idcard`, `kaos`, `total`, `sp`) VALUES
('A710190015', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('A710190108', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('E100180147', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200180082', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200180100', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200180120', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200180151', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200180175', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200180183', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200180187', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200180193', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200180207', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200184033', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190002', 'Beli', 'Beli', 'Tidak', 'Rp. 125000,-', '-'),
('L200190031', 'Beli', 'Beli', 'Tidak', 'Rp. 125000,-', '-'),
('L200190033', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190040', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190062', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190065', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190071', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190073', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190076', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190078', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190088', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190128', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190129', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190130', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190134', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190138', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190143', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190160', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190179', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190192', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190198', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190199', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190211', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190213', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190215', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190217', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190223', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190227', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190237', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190240', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190254', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190261', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190263', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200190265', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-'),
('L200194197', 'Beli', 'Beli', 'Tidak', 'Rp. 120000,-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `angkatan` int(4) NOT NULL,
  `level` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Data User dan Password';

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `angkatan`, `level`) VALUES
('A710190015', 'LDKI2', 'Arif Rahman Darmawan', 2019, 'user'),
('A710190075', 'RTRY2', 'Benny Nur Farezi', 2019, 'user'),
('A710190108', 'VOAY3', 'Dian Ashar Ma’ruf', 2019, 'user'),
('bph', 'F0st!_2k20!!', 'Pengurus 2020', 2018, 'admin'),
('E100180147', 'GEHM9', 'Khansa Ihsan mahardika', 2019, 'user'),
('hubpub', '4dM!n1337', 'Divisi Hubungan Publik', 2018, 'admin'),
('keor', '4dM1!nGil3', 'Divisi Keorganisasian', 2018, 'admin'),
('L100180123', 'MLTO8', 'Sheila Rahmah El Wahda Razzaq', 2018, 'user'),
('L200170019', 'FYJC9', 'Afrizal Meka Mulyana', 2018, 'user'),
('L200170022', 'KFNF6', 'Happy Tri Miliarta', 2018, 'user'),
('L200170044', 'GXES8', 'Rima Dwi Novika', 2018, 'user'),
('L200170092', 'WZMK0', 'Rossanti Kusumadewi', 2018, 'user'),
('L200170114', 'ADWK7', 'Nafiah Nurrahmah', 2018, 'user'),
('L200170183', 'PLIY8', 'Ahmad Faizal Al Amin', 2018, 'user'),
('L200170184', 'GHLO3', 'Mochammad Itmamul Wafa', 2018, 'user'),
('L200180011', 'XJGK8', 'Faizal Wahyu Nuramdhan', 2018, 'user'),
('L200180014', 'LQYA4', 'Andika Wirapala Fathin Azfar', 2018, 'user'),
('L200180022', 'WSYC8', 'Mochammad Afrizal', 2018, 'user'),
('L200180025', 'EYUM8', 'Yusrina Khairin Rusydina', 2018, 'user'),
('L200180053', 'EKWV7', 'Suryo pramuda wicaksono', 2018, 'user'),
('L200180061', 'URUI5', 'MuchFatan Rahmadan', 2018, 'user'),
('L200180064', 'XFWY2', 'Dzaki Fadhlurrohman', 2018, 'user'),
('L200180065', 'AEZO27', 'Wahyu Setyaji Rama Dwijaya', 2018, 'user'),
('L200180079', 'UIYT4', 'Rahmat Beny Susanto', 2018, 'user'),
('L200180080', 'ZXSZ6', 'Afiq Tri Nugraha', 2018, 'user'),
('L200180082', 'EAMU3', 'Alif Al Amin', 2019, 'user'),
('L200180086', 'KUVU7', 'Huan Wendy Ariono', 2018, 'user'),
('L200180087', 'XCBL5', 'Reylian Prealdream Anareka', 2018, 'user'),
('L200180099', 'RHRK1', 'Nadya Ayu Widya', 2018, 'user'),
('L200180100', 'MYBW1', 'Rayhan Nurfalah Lukman', 2019, 'user'),
('L200180101', 'EDSH3', 'Rohmad Khoirudin', 2018, 'user'),
('L200180107', 'KGVM3', 'Berlian Vidia Puspa', 2018, 'user'),
('L200180112', 'SURY3', 'Muhammad Dharul Khadafie', 2018, 'user'),
('L200180114', 'JETW9', 'Arga Dwi Ardinata', 2018, 'user'),
('L200180116', 'OKEI7', 'Brian Aditya Hermansyah', 2018, 'user'),
('L200180118', 'EEPF6', 'Fandhitya Giovani', 2018, 'user'),
('L200180120', 'BVZM1', 'Maulana Alhif Ikhsan', 2019, 'user'),
('L200180123', 'GRUS4', 'Pasha Bhimasty', 2018, 'user'),
('L200180138', 'LYMJ2', 'Karina Muslimah', 2018, 'user'),
('L200180142', 'GTEF9', 'Naufal Randi Aldiansyah', 2018, 'user'),
('L200180146', 'EQYG5', 'Putri Siwi Utami', 2018, 'user'),
('L200180150', 'ZOEU2', 'Yudha Gana Prasetyo Wibowo', 2018, 'user'),
('L200180151', 'GQRX4', 'Arya Mukti A\'raafi Zha Putra', 2019, 'user'),
('L200180175', 'GRZD7', 'Afrialdy Asyura Buana', 2019, 'user'),
('L200180181', 'TUCA2', 'Muhammad Azka Nur Lutfi', 2018, 'user'),
('L200180183', 'QXEK2', 'Fakhar Swastika Al Baihaqi', 2019, 'user'),
('L200180187', 'HRNF5', 'Aviza ayuni wulan', 2019, 'user'),
('L200180192', 'OYMG4', 'Riska Meilina Puspa', 2018, 'user'),
('L200180193', 'VNZI4', 'Amartya Bintang Wijat Ranti', 2019, 'user'),
('L200180199', 'TAWT0', 'Ridho Malandi', 2018, 'user'),
('L200180205', 'VTLT0', 'Danang Ady Saputro Widodo', 2018, 'user'),
('L200180207', 'NMPY4', 'Naura Fikamelyalla', 2019, 'user'),
('L200180210', 'JUJG6', 'Cecylia Ivanka Hermanita', 2018, 'user'),
('L200183070', 'RMZW4', 'Aulia Septianingrum Revyana Nurcahyani', 2018, 'user'),
('L200183143', 'YCZK2', 'Fawwaz Haidar Abyansyah Kusuma', 2018, 'user'),
('L200183161', 'PMNG1', 'Donny Rizal Adhi Pratama', 2018, 'user'),
('L200183203', 'CRWV6', 'Ainayah syifa hendri', 2018, 'user'),
('L200184033', 'GGLN7', 'Kemas Muhamad Kevin', 2019, 'user'),
('L200184040', 'QOEL0', 'Aqshal Fatwa Ibrahim', 2018, 'user'),
('L200184137', 'YULR8', 'Nadhifah Chairunnisa', 2018, 'user'),
('L200184165', 'OKDT7', 'Muhammad Irfan', 2018, 'user'),
('L200184172', 'WGTY9', 'Hafshah Fitri Afifah', 2018, 'user'),
('L200190002', 'UQEQ8', 'Alfian Nur fathoni', 2019, 'user'),
('L200190031', 'CHKQ8', 'Daffa Putra Alwansyah', 2019, 'user'),
('L200190033', 'YBFZ6', 'Mutiara Putri Nugraheni', 2019, 'user'),
('L200190040', 'DCWS5', 'Candra Pramudya', 2019, 'user'),
('L200190062', 'PSCL1', 'Jihan Mustikasari', 2019, 'user'),
('L200190065', 'IKHD2', 'Arindra Hning Adhepta', 2019, 'user'),
('L200190071', 'AGWW8', 'Shofiya Nafisah', 2019, 'user'),
('L200190073', 'IZWH1', 'Puspa Dhewanti', 2019, 'user'),
('L200190076', 'YWSP6', 'Danis ardani', 2019, 'user'),
('L200190078', 'CKGE0', 'Shandika galih nur amin', 2019, 'user'),
('L200190088', 'NRIH5', 'Nur Rohmat Utamma', 2019, 'user'),
('L200190128', 'MEWS3', 'Muhammad Asharul Ma\'ali', 2019, 'user'),
('L200190129', 'LTYT2', 'Aditia riki pratama fani manggala putra', 2019, 'user'),
('L200190130', 'XUYW0', 'Edy Susilo', 2019, 'user'),
('L200190134', 'WJUA9', 'Adissa Tarra Istanarendra', 2019, 'user'),
('L200190138', 'GAVC3', 'Anas Ardiansyah', 2019, 'user'),
('L200190143', 'JMVJ2', 'Senopati Bekti Wicaksono', 2019, 'user'),
('L200190160', 'XAIX5', 'Muhamad Zulfan', 2019, 'user'),
('L200190179', 'IRJC1', 'Ilyas Muhlisin', 2019, 'user'),
('L200190192', 'VRVY7', 'Ahmad Zamzami', 2019, 'user'),
('L200190198', 'YIKI5', 'Afifah Ghaisani Imana', 2019, 'user'),
('L200190199', 'XUXU3', 'Muhammad Sofiyan Hadi', 2019, 'user'),
('L200190211', 'SFON4', 'Sherly Maycana Puspita Anwar', 2019, 'user'),
('L200190213', 'CLZK8', 'Calvin Alvito Dinova', 2019, 'user'),
('L200190215', 'KZKS2', 'Sekar Tyas Mawarni', 2019, 'user'),
('L200190217', 'YOCJ5', 'Surya sumirat', 2019, 'user'),
('L200190223', 'WJOS5', 'Siti Setyaningsih', 2019, 'user'),
('L200190227', 'DADO9', 'Asyam Daffa\' Tsaqif', 2019, 'user'),
('L200190237', 'CBIX1', 'Zaimatul Ummah', 2019, 'user'),
('L200190240', 'IELV2', 'Mutiara Aisya Harfi Putri', 2019, 'user'),
('L200190254', 'OPXC8', 'Nila Dwi Rahmawati', 2019, 'user'),
('L200190261', 'MQEG2', 'Laila Fadila Burhani', 2019, 'user'),
('L200190263', 'IAQL3', 'Alivia Rahma Sakina', 2019, 'user'),
('L200190265', 'WNKQ1', 'Indah Setia Rini', 2019, 'user'),
('L200194156', 'OZAQ6', 'Radin Mundingwangi Nurangga Prabasakti', 2019, 'user'),
('L200194197', 'XYOH8', 'Indira Febriyanti', 2019, 'user'),
('ristek', '4dM!nF0st1', 'Divisi Riset dan Teknologi', 2018, 'admin'),
('webjar', '4dM!nPr0__', 'Divisi Web dan Jaringan', 2018, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kaos`
--
ALTER TABLE `kaos`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `pdh`
--
ALTER TABLE `pdh`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

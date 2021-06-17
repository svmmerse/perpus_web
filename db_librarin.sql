-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2021 pada 06.05
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_librarin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` double NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` date NOT NULL,
  `foto1` text NOT NULL,
  `foto2` text NOT NULL,
  `foto3` text NOT NULL,
  `foto4` text NOT NULL,
  `foto5` text NOT NULL,
  `foto6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `id_user`, `id_kategori`, `nama`, `harga`, `jumlah`, `deskripsi`, `created_at`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`) VALUES
(1, 1, 1, 'Statiska', 50000, 140, 'Buku ini terdiri dari beberapa bab, bab pertama Pendahuluan, bab kedua Statistika Deskriptif, bab ketiga Statistika Inferensial, bab keempat Analisis Statistik Deskriptif, bab kelima Statistik Deskriptif dengan SPSS, bab keenam Uji Validitas dan Reliabilitas, bab ketujuh Hipotesis, bab kedelapan Transformasi Data Ordinal ke Data Interval dan bab terakhir  Contoh Soal dan Penyelesaiannya.', '2016-06-10', 'statistika.jpg', '', '', '', '', ''),
(2, 2, 2, 'The Power Of Habit', 70000, 192, 'The Power of Habit (2019) menjelaskan tentang dahsyatnya kebiasaan. Di dalam Pimtar ini Anda akan mempelajari tentang alasan kebiasaan terbentuk, unsur-unsur kebiasaan, dan cara mengubah kebiasaan pribadi, organisasi, maupun komunitas.', '2016-06-10', 'habit.png', '', '', '', '', ''),
(3, 2, 3, 'Laskar Pelangi', 64000, 200, 'Laskar Pelangi adalah novel pertama karya Andrea Hirata yang diterbitkan oleh Bentang Pustaka pada tahun 2005. Novel ini bercerita tentang kehidupan 10 anak dari keluarga miskin yang bersekolah (SD dan SMP) di sebuah sekolah Muhammadiyah di Belitung yang penuh dengan keterbatasan.', '2016-06-10', 'laskar_pelangi.jpg', '', '', '', '', ''),
(4, 2, 3, 'Sherlock Holmes', 63000, 185, 'Sejak muncul pertama kali tahun 1887, Sherlock Holmes menjadi tokoh fi ksi yang paling fenomenal. Dia menjadi jagoan klasik yang legendaris dan menginspirasi dalam budaya pop bahkan hingga abad ke-21. Bersama Dr. John Watson, Sherlock Holmes memecahkan kasus-kasus rumit berdasarkan kemampuannya menemukan petunjuk-petunjuk yang sering diabaikan orang lain.', '2018-06-08', 'sherlock.jpg', '', '', '', '', ''),
(5, 2, 2, 'Brand Relevance', 40000, 174, 'Brand Relevance (2010) menjelaskan cara mengeliminasi persaingan dan menjadi brand utama di market Anda. Di dalam Pimtar ini, Anda akan mempelajari konsep relevansi merek (brand relevance) melalui banyak studi kasus. Termasuk tentang bagaimana brand relevance mendorong dinamika pasar, menghasilkan peluang bagi brand Anda dan ancaman bagi persaingan.', '2016-06-10', 'Brand.jpg', '', '', '', '', ''),
(6, 1, 1, 'General Chemistry', 55000, 180, 'The overall goal of the authors with General Chemistry: Principles, Patterns, and Applications was to produce a text that introduces the students to the relevance and excitement of chemistry.', '2016-06-10', 'chemistry.jpg', '', '', '', '', ''),
(7, 7, 1, 'Fisika Dasar', 60000, 157, 'Fisika merupakan cabang utama sains karena prinsip-prinsipnya dijadikan dasar bagi cabang-cabang sains yang lain. Selain itu, fisika juga merupakan salah satu ilmu yang paling dasar dari ilmu pengetahuan. Buku ajar fisika dasar ini mencoba membantu memahami sistem fisika dasar yang diulas lebih sederhana, karena menambahkan aplikasi yang ada dalam setiap bab agar lebih mudah dipahami.', '2017-08-20', 'fisika.jpg', '', '', '', '', ''),
(8, 7, 1, 'Algoritma Pemrograman', 85000, 192, 'Buku ini membahas tentang bahasa pemrograman tingkat menengah yang sangat mudah untuk dipelajari dan dipahami. Buku ini akan membantu untuk mengenal bahasa pemrograman C++ beserta dengan contoh penyelesaian kasus sehingga bagi pemula dapat menguasai bahasa pemrograman ini dengan cepat dan mudah', '2019-07-11', 'algoritma.jpg', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Ilmiah'),
(2, 'Asing'),
(3, 'Campuran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_user`
--

CREATE TABLE `level_user` (
  `id` int(11) NOT NULL,
  `level_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level_user`
--

INSERT INTO `level_user` (`id`, `level_user`) VALUES
(1, 'Admin'),
(2, 'Pengguna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_level_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `nomor_telepon` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `id_level_user`, `nama`, `username`, `email`, `password`, `nomor_telepon`, `alamat`, `foto`, `cover`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '081331425162', 'Jember', 'gambar1.png', 'cover.jpg', '2021-06-14', '2021-06-17 05:12:24'),
(2, 2, 'ardi', 'ardi', '', 'a64c9589c54cb286438e1d55fd68549d', '0213144', 'Jember', 'gambar.png', 'cover.jpg', '2016-06-10', '2021-06-17 02:45:27'),
(7, 2, 'Mohammad Syafiq', 'syafiq', 'syafiq@gmail.com', 'e548904344bec0e8d2c3cb31641593ca', '0821728392', 'Banyuwangi', '17062021052750syafiq.jpg', '17062021052750cover.jpg', '2021-06-17', '2021-06-17 06:04:37');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `level_user`
--
ALTER TABLE `level_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nomor_telepon` (`nomor_telepon`),
  ADD KEY `id_level_user` (`id_level_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `level_user`
--
ALTER TABLE `level_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_level_user`) REFERENCES `level_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

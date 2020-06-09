-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2020 pada 15.52
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
-- Database: `db_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ketua` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `jenis_kelamin`, `id_ketua`, `created_at`, `updated_at`) VALUES
(1, 'Austen O\'Reilly', 'Perempuan', 10, NULL, NULL),
(2, 'Rosalia Towne', 'Laki-laki', 9, NULL, NULL),
(3, 'King Nader', 'Laki-laki', 10, NULL, NULL),
(4, 'Caleb Kutch', 'Laki-laki', 4, NULL, NULL),
(5, 'Nicole Stark Sr.', 'Laki-laki', 5, NULL, NULL),
(6, 'Prof. Alysson Koch IV', 'Laki-laki', 6, NULL, NULL),
(7, 'Kameron Hand', 'Perempuan', 6, NULL, NULL),
(8, 'Prof. Rhoda Okuneva', 'Perempuan', 2, NULL, NULL),
(9, 'Marion Von III', 'Laki-laki', 6, NULL, NULL),
(10, 'Eulah Green', 'Perempuan', 2, NULL, NULL),
(11, 'Mertie Green I', 'Perempuan', 1, NULL, NULL),
(12, 'Mr. Hyman Kessler DDS', 'Perempuan', 5, NULL, NULL),
(13, 'Lawrence Mante', 'Laki-laki', 7, NULL, NULL),
(14, 'Mrs. Danielle Zulauf IV', 'Perempuan', 7, NULL, NULL),
(15, 'Javier Haley', 'Perempuan', 7, NULL, NULL),
(16, 'Mrs. Miracle Emmerich', 'Laki-laki', 7, NULL, NULL),
(17, 'Prof. Jalon McClure DVM', 'Perempuan', 4, NULL, NULL),
(18, 'Miss Name Swift', 'Laki-laki', 3, NULL, NULL),
(19, 'Verlie Borer', 'Perempuan', 8, NULL, NULL),
(20, 'Prof. Kellie Ullrich Sr.', 'Perempuan', 10, NULL, NULL),
(21, 'Jadon Rice', 'Laki-laki', 6, NULL, NULL),
(22, 'Ms. Vergie Ward Sr.', 'Laki-laki', 10, NULL, NULL),
(23, 'Imani Wuckert MD', 'Perempuan', 4, NULL, NULL),
(24, 'Maurice Hamill', 'Laki-laki', 8, NULL, NULL),
(25, 'Wilbert Huels', 'Perempuan', 3, NULL, NULL),
(26, 'Florian Hyatt', 'Laki-laki', 9, NULL, NULL),
(27, 'Mac Denesik', 'Perempuan', 8, NULL, NULL),
(28, 'Candelario Mills', 'Perempuan', 1, NULL, NULL),
(29, 'Prof. Emmett Little', 'Perempuan', 8, NULL, NULL),
(30, 'Darby Erdman', 'Laki-laki', 2, NULL, NULL),
(31, 'Bailey Shanahan', 'Perempuan', 8, NULL, NULL),
(32, 'Hiram Weimann', 'Laki-laki', 5, NULL, NULL),
(33, 'Alessandro Nikolaus', 'Perempuan', 8, NULL, NULL),
(34, 'Dr. Milford Zulauf I', 'Laki-laki', 4, NULL, NULL),
(35, 'Miss Darlene Purdy', 'Perempuan', 10, NULL, NULL),
(36, 'Brooks Baumbach', 'Laki-laki', 9, NULL, NULL),
(37, 'Malinda Reichert DVM', 'Perempuan', 5, NULL, NULL),
(38, 'Prof. Napoleon Berge IV', 'Laki-laki', 4, NULL, NULL),
(39, 'Dr. Destini Schaden V', 'Perempuan', 6, NULL, NULL),
(40, 'Marcellus Luettgen', 'Perempuan', 1, NULL, NULL),
(41, 'Lucas Ward Sr.', 'Perempuan', 2, NULL, NULL),
(42, 'Iva Watsica Sr.', 'Laki-laki', 3, NULL, NULL),
(43, 'Leila Toy', 'Laki-laki', 9, NULL, NULL),
(44, 'Raymundo Senger V', 'Laki-laki', 4, NULL, NULL),
(45, 'Prof. Sebastian Bauch Sr.', 'Perempuan', 2, NULL, NULL),
(46, 'Prof. Prudence Jakubowski DDS', 'Perempuan', 7, NULL, NULL),
(47, 'Elyse Quigley', 'Perempuan', 3, NULL, NULL),
(48, 'Lolita Lindgren', 'Perempuan', 5, NULL, NULL),
(49, 'Mrs. Charity Kilback MD', 'Perempuan', 6, NULL, NULL),
(50, 'Amani Kuhlman', 'Laki-laki', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketua`
--

CREATE TABLE `ketua` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ketua`
--

INSERT INTO `ketua` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Miss Henriette Dietrich Jr.', NULL, NULL),
(2, 'Jerrold Mitchell MD', NULL, NULL),
(3, 'Mabel Shields', NULL, NULL),
(4, 'Giovani Kuhlman', NULL, NULL),
(5, 'Judge Hansen', NULL, NULL),
(6, 'Adrianna Hoeger', NULL, NULL),
(7, 'Tressa Kub', NULL, NULL),
(8, 'Davon Senger IV', NULL, NULL),
(9, 'Lizeth Cassin', NULL, NULL),
(10, 'Dr. Jayme Kemmer PhD', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_06_09_065707_create_ketua_table', 1),
(2, '2020_06_09_065740_create_anggota_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggota_id_ketua_foreign` (`id_ketua`);

--
-- Indeks untuk tabel `ketua`
--
ALTER TABLE `ketua`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `ketua`
--
ALTER TABLE `ketua`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_id_ketua_foreign` FOREIGN KEY (`id_ketua`) REFERENCES `ketua` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

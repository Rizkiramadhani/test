-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 13 Apr 2022 pada 13.49
-- Versi server: 10.5.12-MariaDB-cll-lve
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u580897319_disporaparhst`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_tb` int(11) NOT NULL,
  `id_pengunjung` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `lokal` int(11) NOT NULL DEFAULT 0,
  `turis` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`id_tb`, `id_pengunjung`, `tanggal`, `lokal`, `turis`) VALUES
(1, 'pariwisata1', '2022-03-10', 59, 59),
(2, 'pariwisata2', '2022-03-02', 56, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `id_tb` int(11) NOT NULL,
  `nama_agenda` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_agenda` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat_agenda` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_agenda` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_agenda` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_agenda` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `tanggal_agenda` date NOT NULL DEFAULT current_timestamp(),
  `waktu_agenda` time NOT NULL DEFAULT current_timestamp(),
  `pengelola_agenda` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_agenda` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_agenda` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `cp_agenda` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `facebook_agenda` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `instagram_agenda` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_agenda`
--

INSERT INTO `tb_agenda` (`id_tb`, `nama_agenda`, `lokasi_agenda`, `lat_agenda`, `long_agenda`, `deskripsi_agenda`, `kategori_agenda`, `tanggal_agenda`, `waktu_agenda`, `pengelola_agenda`, `thumb_agenda`, `youtube_agenda`, `cp_agenda`, `facebook_agenda`, `instagram_agenda`) VALUES
(1, 'Festival Parisj Van Borneo', 'Balai Rakyat Barabai', '-2.5855', '115.384004', 'Pameran dan bazar yang dibalut dalam festival tingkat Provinsi Kalsel ini juga menghadirkan berbagai macam produk pangan lokal, yaitu makanan basah dan kering, hingga berbagai kerajinan anyaman, mandau hingga sumpit.', 'Kesenian', '2022-03-27', '08:00:00', 'Disporapar HST', 'event.jpg', 'https://www.youtube.com/watch?v=YhbfJ5rhWuo', '082211112222', 'https://m.facebook.com/pr', 'https://www.instagram.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hotel`
--

CREATE TABLE `tb_hotel` (
  `id_tb` int(11) NOT NULL,
  `nama_hotel` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_hotel` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat_hotel` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_hotel` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_hotel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_hotel` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `jumlahkamar_hotel` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `kisaranbiaya_hotel` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengelola_hotel` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_hotel` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_hotel` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_hotel` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `facebook_hotel` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `instagram_hotel` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_hotel`
--

INSERT INTO `tb_hotel` (`id_tb`, `nama_hotel`, `lokasi_hotel`, `lat_hotel`, `long_hotel`, `deskripsi_hotel`, `kategori_hotel`, `jumlahkamar_hotel`, `kisaranbiaya_hotel`, `pengelola_hotel`, `fasilitas`, `thumb_hotel`, `youtube_hotel`, `cp_hotel`, `facebook_hotel`, `instagram_hotel`) VALUES
(1, 'Madani Hotel', 'Jl. Abdul Muis Redhani Barabai', '-2.5754222', '115.3919226', 'Madani Hotel adalah hotel yang berlokasi di Barabai, Kalimantan Selatan, menawarkan akomodasi yang nyaman dan dekat, dilengkapi dengan fasilitas modern dan pelayanan yang istimewa.', 'Hotel', '17 Kamar', 'Rp.350.000 - Rp.950.0000', 'Khairul Fahmi', 'Tempat Parkir&&WiFi&&Restoran&&Meeting Room', 'Madani-Hotel-Barabai.jpg', 'https://www.youtube.com/watch?v=9FeSWfyflI8', '(0517) 44005', 'https://m.facebook.com/profile.php?id=121253921385929', 'https://www.instagram.com/madani_hotelbarabai/?hl=id'),
(2, 'Grand Bhima', 'Jl. Lorong NU Barabai', '-2.5754222', '115.3919226', 'Belum Diinput', 'Hotel', '8 KAMAR', 'Rp.300.000 - Rp.350.0000', 'Hj. Faridah', 'Parkir', 'grand bhima.jpg', '-', '08123904958', '-', '-'),
(3, 'Bhima Syariah', 'Jl. Lorong NU Barabai', '-2.573064', '115.3904099', 'Belum Diinput', 'Hotel', '8 KAMAR', 'Rp.250.000 - Rp.280.0000', 'Belum Diinput', 'Parkir', 'grand bhimaa.jpg', '-', '(0517) 42012', '-', '-'),
(4, 'Bhima Residence', 'Jl. Lorong NU Barabai', '-2.573064', '115.3904099', 'Belum Diinput', 'Hotel', '8 KAMAR', ' Rp.250.000 - Rp.275.000 ', 'Firman', 'Parkir', 'image-not-found.png', '-', '(0517) 43999', '-', '-'),
(5, 'Bhima II ', 'Jl. Lorong NU Barabai', '-2.5850131', '115.3834656', 'Belum Diinput', 'Hotel', '24 KAMAR', 'Rp.150.000 - Rp.250.0000', 'Hj. Rehani', 'Parkir', 'image-not-found.png', '-', '(0517) 41171', '-', '-'),
(6, 'Bhima III', 'Jl. Ganesha ', '-2.573064', '115.3904099', 'Belum Diinput', 'Hotel', '7 KAMAR', ' Rp.180.000', 'Hj. Faridah', 'Parkir', 'image-not-found.png', '-', '(0517) 41172', '-', '-'),
(7, 'Guest La Tansa', 'Jl. Pangeran H. Muhammad. Noor Barabai', '-2.5854173', '115.383916', 'Belum Diinput', 'Guesthouse', '9 KAMAR', 'Rp.175.000 - Rp.250.0000', 'Hj. Fauziah', 'Parkir', 'La Tansa Guest House.jpg', '-', '(0517) 43580', '-', '-'),
(8, 'Bandung', 'Jl. Bhima Barabai', '-2.5854173', '115.383916', 'Belum Diinput', 'Hotel', '18 KAMAR', 'Rp.80.000 - Rp.100.0000', 'Hj. Norsyamiati', 'Parkir', 'image-not-found.png', '-', '(0517) 41550', '-', '-'),
(9, 'Shaza', 'Jl. Damanhuri Barabai ', '-2.5826451', '115.3843639', 'Belum Diinput', 'Guesthouse', '10 KAMAR', ' Rp.275.000 - Rp.500.000 ', 'H.Husni', 'Parkir', 'sazha.jpg', '-', '(0817) 41115', '-', '-'),
(10, 'Qiana inn', 'Jl. Brigjend H.Hasan Baseri', '-2.5898754', '115.3807428', 'Belum Diinput', 'Hotel', '20 KAMAR', 'Rp.150.000 - Rp.350.0000', 'Khairul Fahmi', 'Parkir', 'qiana inn brb.jpg', '-', '(0517) 43130', '-', '-'),
(11, 'Sudut Indah', 'Jl. Murakata Barabai ', '-2.5888051', '115.3743279', 'Belum Diinput', 'Hotel', '10 KAMAR', 'Rp.100.000 - Rp.200.0000', 'H. Hasan Basuni', 'Parkir', 'sudut indahh.jpg', '-', '(0517) 41202', '-', '-'),
(12, 'Green Mutiara', 'Jl. Kartini Barabai', '-2.5838029', '115.3859281', 'Belum Diinput', 'Hotel', '24 KAMAR', 'Rp.110.000 - Rp.350.0000', 'Ayu Andani Hariski', 'Parkir', 'green mutiara.jpg', '-', '(0517) 41224', '-', '-'),
(13, 'Bouraq Indah Permai', 'Jl. Pangeran H. Muhammad. Noor ', '-2.5843366', '115.3831886', 'Belum Diinput', 'Hotel', '12 KAMAR', 'Rp.150.000 - Rp.300.0000', 'Hj. Fathul Jannah', 'Parkir', 'bouraq.jpg', '-', '(0517) 41809', '-', '-'),
(14, 'Fusfa', 'Jl. Brigjend H.Hasan Baseri Barabai', '-2.5893147', '115.3807173', 'Belum Diinput', 'Hotel', '13 KAMAR', 'Rp.150.000 - Rp.280.0000', 'Drs. H. Fakhrurazie', 'Parkir', 'hotel fusfa.jpg', '-', '(0517) 41136', '-', '-'),
(15, 'Al Fata', 'Jl. Pangeran H. Muhammad. Noor ', '-2.5884507', '115.3802424', 'Belum Diinput', 'Hotel', '6 KAMAR', 'Rp.150.000 - Rp.280.0000', 'Zubaidah Mahdi', 'Parkir', 'al fata.jpg', '-', '(0517) 42645', '-', '-'),
(16, 'Hafia', 'Jl. H. Muhammad Syarkawi ', '-2.5851638', '115.3769223', 'Belum Diinput', 'Hotel', '9 KAMAR', 'Rp.80.000 - Rp.100.0000', 'H. Damanhuri', 'Parkir', 'hafia.jpg', '-', '(0517) 44316', '-', '-'),
(17, 'Pondok Wisata', 'Jl. TanjungPura Pagat Batu Benawa', '-2.573064', '115.3904099', 'Belum Diinput', 'Resort', '8 KAMAR', 'Belum Diinput', 'H. Jubair', 'Parkir', 'image-not-found.png', '-', '-', '-', '-'),
(18, 'Hotel Simpati', 'Jl. H. Muhammad Syarkawi ', '-2.573064', '115.3904099', 'Belum Diinput', 'Hotel', '10 KAMAR', 'Rp.80.000 - Rp.200.0000', 'Belum Diinput', 'Parkir', 'simpati.jpg', '-', '(0517) 43587', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_infoterbaru`
--

CREATE TABLE `tb_infoterbaru` (
  `id_tb` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `headline_infoterbaru` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_infoterbaru` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_infoterbaru` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_infoterbaru`
--

INSERT INTO `tb_infoterbaru` (`id_tb`, `tanggal`, `headline_infoterbaru`, `isi_infoterbaru`, `thumb_infoterbaru`) VALUES
(1, '2022-03-09', 'Pemilihan Putra Putri', 'Agenda wisata tersebut, antara lain Festival Bakuntau, pameran Anggrek, karya seni lukis dan seni rupa yang sudah selesaikan beberapa waktu lalu di Kabupaten HST, Provinsi Kalimantan Selatan (Kalsel).\r\n\r\nUntuk Februari ini, agendanya adalah pemilihan Putra Putri Pariwisata Kabupaten HST. Tahapannya, 4 Februari sampai 20 Februari masa pendaftaran.', 'par11.jpeg'),
(2, '2022-01-23', 'Bupati HST Tutup Festival', 'KBRN, Banjarmasin: Bupati Hulu Sungai Tengah (HST) H Aulia Oktafiandi menutup secara resmi Festival Bela Diri Tradisional Kuntau Tingkat Kab HST bertempat di Taman Wisata Pagat Kec Batu Benawa, Sabtu (22/1/2022).\r\n\r\nPanitia pelaksana H Ahmad Apandi yang juga Kabid Pemuda dan Olahraga Disporapar Kab HST mengatakan bahwa jumlah peserta atau perguruan Kuntau yang mengikuti Festival Kuntau ini adalah 30 Perguruan Kuntau yang tersebar di Kab HST.\r\n\r\n\"Jumlah Peserta yang luar biasa banyak ini tentu menjadi kebanggan kita bersama, bahwa acara ini mendapat apresiasi serta antusiame dari kawan-kawan pendekar Kuntau kita,\" katanya', 'kuntau.jpg'),
(3, '2022-03-05', 'Disporapar HST Angkat', 'Sejumlah personil Dinas Kepemudaan, Olahraga dan Pariwisata (Disporapar) Kabupaten Hulu Sungai Tengah (HST) bersama warga Desa Kindingan, Kecamatan Hantakan bersama-sama melakukan eksplorasi Wisata Air Terjun Siwalangan yang berada di desa itu.\r\n\r\nKegiatan tersebut dilakukan dalam rangka mengangkat potensi wisata masyarakat berbasis kerakyatan, serta mengenalkan berbagai kekayaan alam yang berada di Pegunungan Meratus setempat.', 'WhatsApp-Image-2022-03-05-at-00.52.32-768x513.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kuliner`
--

CREATE TABLE `tb_kuliner` (
  `id_tb` int(11) NOT NULL,
  `nama_kuliner` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_kuliner` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat_kuliner` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_kuliner` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_kuliner` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_kuliner` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `kapasitas_kuliner` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `jam_kuliner` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `pengelola_kuliner` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_kuliner` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_kuliner` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_kuliner` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `facebook_kuliner` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `instagram_kuliner` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_kuliner`
--

INSERT INTO `tb_kuliner` (`id_tb`, `nama_kuliner`, `lokasi_kuliner`, `lat_kuliner`, `long_kuliner`, `deskripsi_kuliner`, `kategori_kuliner`, `kapasitas_kuliner`, `jam_kuliner`, `pengelola_kuliner`, `fasilitas`, `thumb_kuliner`, `youtube_kuliner`, `cp_kuliner`, `facebook_kuliner`, `instagram_kuliner`) VALUES
(1, 'De Grand Resto & Cafe', 'Jl. Pangeran H. Muhammad. Noor', '-2.5818606', '115.3855973', 'Makan dan Minum ditempat, Bawa Pulang', 'Cafe', '-', '10:00 - 22:00 WITA', 'Ibu Alkartini / Ahmad Yan', 'Toilet&&Tempat Ibadah&&Wifi', 'de grand.jpg', '-', '-', '-', '-'),
(2, 'Hero', 'JL. Hevea baru', '-2.5862998', '115.3876692', 'Makan dan Minum di tempat, Bawa pulang ', 'Cafe', '-', 'Belum Diinput', 'Andika', 'Parkir&&Toilet', 'hero.jpg', '-', '-', '-', '-'),
(3, 'Momen kopi', 'Jl. H. Muhammad Syarkawi', '-2.5856093', '115.3765078', 'Makan dan Minum ditempat , Bawa pulang', 'Cafe', '-', 'Belum Diinput', 'Lutfhi Sanad', 'Toilet&&Tempat Parkir', 'momen kopi.jpg', '-', '-', '-', '-'),
(4, 'Cafe and Resto Oriental', 'Jl. H. Muhammad Syarkawi', '-2.5849471', '115.3764542', 'Makan ditempat, Bawa pulang', 'Cafe', '-', 'Belum Diinput', 'Ricky', 'Toilet', 'three oriental.jpg', '-', '-', '-', '-'),
(5, 'Janji Jiwa', 'Jl. Murakata', '-2.5898727', '115.3735516', 'Makan dan Minum ditempat, Bawa pulang', 'Cafe', '-', 'Belum Diinput', 'pangihutan siboro', 'Parkir&&Toilet', 'janji jiwaa.jpg', '-', '-', '-', '-'),
(6, 'Van Cafe', 'Jl. P Antasari', '-2.5818789', '115.3815739', 'Makan dan Minum ditempat, Bawa pulang', 'Cafe', '-', 'Belum Diinput', 'Muhammad akhda ferdian', 'Parkir&&Toilet', 'van cafe.jpg', '-', '-', '-', '-'),
(7, 'Kopi Dari Hati', 'Jl. P Antasari', '-2.5820277', '115.3813458', 'Belum Diinput', 'Cafe', '-', 'Belum Diinput', 'Ricky', 'Parkir&&Toilet', 'kopi dari hati.jpg', '-', '-', '-', '-'),
(8, 'Kedai Kopi Benih', 'Jl. P Antasari', '-2.5822973', '115.3809356', 'Belum Diinput', 'Cafe', '-', 'Belum Diinput', 'Syaiful Rahman', 'Toilet', 'image-not-found.png', '-', '-', '-', '-'),
(9, 'Cafe 140', 'Jl. A. Yani', '-2.5906132', '115.3730684', 'Belum Diinput', 'Cafe', '-', 'Belum Diinput', 'Rusma herdiyanto', 'Parkir&&Toilet', '140.jpg', '-', '-', '-', '-'),
(10, 'Ruang Rinduh', 'Jl.Brigjen H. Hasan Baseri', '-2.573064', '115.3904099', 'Belum Diinput', 'Cafe', '-', 'Belum Diinput', 'Bahar', 'Parkir', 'image-not-found.png', '-', '-', '-', '-'),
(11, 'Taman Langit', 'Jl. Abdul Muis Rhedani', '-2.5733984', '115.3833117', 'Belum Diinput', 'Cafe', '-', 'Belum Diinput', 'Fredy', 'Parkir&&Toilet', 'image-not-found.png', '-', '-', '-', '-'),
(12, 'Satu Agustus', 'Jl. Pangeran Antasari', '-2.5751381', '115.3736657', 'Belum Diinput', 'Cafe', '-', 'Belum Diinput', 'Fathan Noor', 'Parkir&&Toilet', 'satu agustus.jpg', '-', '-', '-', '-'),
(13, 'Titik Bumi', 'JL. Sarigading', '-2.5735906', '115.3736657', 'Belum Diinput', 'Cafe', '-', 'Belum Diinput', 'Andika Dwi octavianto', 'Parkir&&Toilet', 'titik bumi.jpg', '-', '-', '-', '-'),
(14, 'Co.as', 'JL. Sarigading', '-2.5734481', '115.3736657', 'Belum Diinput', 'Cafe', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir&&Toilet', 'image-not-found.png', '-', '-', '-', '-'),
(15, 'Kedai Pinggir Jalan', 'Jl. Keramat Manjang', '-2.5761359', '115.3612296', 'Belum Diinput', 'Cafe', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir&&Toilet', 'pinggir jalan.jpg', '-', '-', '-', '-'),
(16, 'The Serious', 'Jl. H. Sibli Imansyah', '-2.5809202', '115.3719937', 'Belum Diinput', 'Cafe', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'the serious.jpg', '-', '-', '-', '-'),
(17, 'Tradisional Cafe', 'Mandingin', '-2.5721627', '115.3835681', 'Belum Diinput', 'Cafe', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir&&Toilet', 'image-not-found.png', '-', '-', '-', '-'),
(18, 'Es Teh Indonesia', 'Jl. Murakata', '-2.5768295', '115.3735368', 'Belum Diinput', 'Cafe', '-', 'Belum Diinput', 'pangihutan siboro', 'Parkir', 'image-not-found.png', '-', '-', '-', '-'),
(19, 'Teduh Coffe', 'Jl. Kemasan tengah', '-2.587083', '115.3819109', 'Belum Diinput', 'Cafe', '-', 'Belum Diinput', 'Muhammad Abdillah', 'Parkir&&Toilet', 'image-not-found.png', '-', '-', '-', '-'),
(20, 'Helios', 'Jl. Pangeran Antasari', '-2.574291', '115.3826817', 'Belum Diinput', 'Cafe', '-', 'Belum Diinput', 'Fauzi & Anjas', 'Parkir&&Toilet', 'helios.jpg', '-', '-', '-', '-'),
(21, 'Sabanua Coffee', 'Mandingin ( seberang pom mandingin )', '-2.5738037', '115.3955139', 'Belum Diinput', 'Cafe', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir&&Toilet', 'image-not-found.png', '-', '-', '-', '-'),
(22, 'Anka Koffie', 'Jl. Kampung Arab', '-2.5767323', '115.3736657', 'Belum Diinput', 'Cafe', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'anka koffie.jpg', '-', '-', '-', '-'),
(23, 'Ayam Bakar wong solo', 'Jl. Abdul Muis Rhedani', '-2.5721627', '115.3835681', 'Makan dan  Minum ditempat, Bawa Pulang', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir&&Toilet', 'wongsolo.jpg', '-', '-', '-', '-'),
(24, 'Rumah Makan Janai', 'Jl. Tanjung Pura Pagat , Desa Pagat Kec. Batu Benawa', '-2.5956964', '115.3587066', 'Makan dan Minum ditempat, Bawa pulang', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir&&Toilet', 'rumah makan ibu Janai.jpg', '-', '-', '-', '-'),
(25, 'Kalijo', 'Jl.Brigjen H. Hasan Baseri', '-2.5791668', '115.3766591', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir&&Toilet', 'kalijo.jpg', '-', '-', '-', '-'),
(26, 'Ayam Penyet Azizah', 'Jl. Ahmad Yani', '-2.5755758', '115.3736657', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'penyet azizah.jpg', '-', '-', '-', '-'),
(27, 'Warung Lia', 'Jl. Ahmad Yani', '-2.5903554', '115.3524386', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'image-not-found.png', '-', '-', '-', '-'),
(28, 'Ayam Kremez Sabilal', 'Jl. Ahmad Yani', '-2.5734963', '115.3736657', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'image-not-found.png', '-', '-', '-', '-'),
(29, 'Warung Mama', 'Jl. Ahmad Yani', '-2.5793537', '115.3578569', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'image-not-found.png', '-', '-', '-', '-'),
(30, 'Rumah Makan Mak Janai', 'Jl. Abdul Muis Rhedani', '-2.5721627', '115.3835681', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'image-not-found.png', '-', '-', '-', '-'),
(31, 'Rumah Makan Rasai', 'Jl. Abdul Muis Rhedani', '-2.5721627', '115.3835681', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'image-not-found.png', '-', '-', '-', '-'),
(32, 'Kedai Sazukomo', 'Jl. Pangeran H. M. Noor', '-2.5799899', '115.3880787', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'image-not-found.png', '-', '-', '-', '-'),
(33, 'Goyang Lidah', 'Jl. Pangeran H. M. Noor', '-2.5764419', '115.3778615', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'image-not-found.png', '-', '-', '-', '-'),
(34, 'Rumah Makan Mama Dea', 'Jl. Antasari', '-2.5734481', '115.3736657', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'image-not-found.png', '-', '-', '-', '-'),
(35, 'Rumah makan Family', 'Jl. Antasari', '-2.5734481', '115.3736657', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'image-not-found.png', '-', '-', '-', '-'),
(36, 'Depot AR', 'Jl. Antasari', '-2.5810676', '115.3826572', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir&&Toilet', 'no-image-found-360x250.png', '-', '-', '-', '-'),
(37, 'Rumah Makan Yuyun', 'Jl. H. Muhammad. Syarkawi', '-2.5832346', '115.3795136', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'no-image-found-360x250.png', '-', '-', '-', '-'),
(38, 'Rumah Makan Serba Uwa', 'Jl. H. Muhammad. Syarkawi', '-2.5756071', '115.3612296', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'no-image-found-360x250.png', '-', '-', '-', '-'),
(39, 'Rocket Chicken,  Matang Ginalun', 'Jl. H. Muhammad. Syarkawi', '-2.5864791', '115.3759307', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir&&Toilet&&Wifi gratis', 'rocket.jpg', '-', '-', '-', '-'),
(40, 'Rocket Chicken,  Perintis Kemerdeka', 'Jl. perintis Kemerdekaan', '-2.5906353', '115.3886541', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir&&Toilet&&Wifi gratis', 'rocket.jpg', '-', '-', '-', '-'),
(41, 'Rumah Makan Aci', 'Jl. perintis Kemerdekaan', '-2.5763092', '115.3736657', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir&&Toilet', 'no-image-found-360x250.png', '-', '-', '-', '-'),
(42, 'Soto Nonah', 'Jl. perintis Kemerdekaan', '-2.5847045', '115.3699259', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'no-image-found-360x250.png', '-', '-', '-', '-'),
(43, 'Rumah Makan Bundo', 'Jl. Murakata', '-2.5741206', '115.3736657', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'no-image-found-360x250.png', '-', '-', '-', '-'),
(44, 'Banua Chicken', 'Jl. Murakata', '-2.5766118', '115.3736657', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'no-image-found-360x250.png', '-', '-', '-', '-'),
(45, 'RC Boy', 'Jl. Abdul Muis Rhedani', '-2.5733984', '115.3833117', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir&&Toilet', 'no-image-found-360x250.png', '-', '-', '-', '-'),
(46, 'Rumah Makan Hj. Ipat', 'Jl. Ganesha', '-2.576264', '115.3778615', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir&&Toilet', 'no-image-found-360x250.png', '-', '-', '-', '-'),
(47, 'Kulsum', 'Jl. Tanjung Pura Pagat ', '-2.5954774', '115.3586912', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'no-image-found-360x250.png', '-', '-', '-', '-'),
(48, 'Boyolali', 'Jl. Mahala', '-2.5832579', '115.3848976', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'no-image-found-360x250.png', '-', '-', '-', '-'),
(49, 'BFC Najwa', 'Jl. Mahala', '-2.5751086', '115.3736657', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'no-image-found-360x250.png', '-', '-', '-', '-'),
(50, 'Geprek Alif', 'Jl. Kemasan Tengah', '-2.5753123', '115.3736657', 'Belum Diinput', 'Rumah Makan', '-', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'no-image-found-360x250.png', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_objekwisata`
--

CREATE TABLE `tb_objekwisata` (
  `id_tb` int(11) NOT NULL,
  `nama_objekwisata` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `lokasi_objekwisata` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `lat_objekwisata` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-2.5856903',
  `long_objekwisata` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '115.3999585',
  `deskripsi_objekwisata` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `kondisi_objekwisata` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `status_objekwisata` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `jalurtransportasi_objekwisata` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `jarak_objekwisata` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `jam_objekwisata` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `biaya_objekwisata` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `pengelola_objekwisata` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `fasilitas` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `thumb_objekwisata` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'image-not-found.png',
  `youtube_objekwisata` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `cp_objekwisata` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `facebook_objekwisata` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `instagram_objekwisata` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_objekwisata`
--

INSERT INTO `tb_objekwisata` (`id_tb`, `nama_objekwisata`, `lokasi_objekwisata`, `lat_objekwisata`, `long_objekwisata`, `deskripsi_objekwisata`, `kondisi_objekwisata`, `status_objekwisata`, `jalurtransportasi_objekwisata`, `jarak_objekwisata`, `jam_objekwisata`, `biaya_objekwisata`, `pengelola_objekwisata`, `fasilitas`, `thumb_objekwisata`, `youtube_objekwisata`, `cp_objekwisata`, `facebook_objekwisata`, `instagram_objekwisata`) VALUES
(1, 'Pagat Batu Benawa', 'Batu Benawa', '-2.630925', '115.4222883', 'Objek wisata Pagat Batu Benawa terdiri atas bukit, sungai, dan gua yang dapat dijelajahi oleh wisatawan. Selain itu, terdapat mata air yang jernih di dalam gua yang berada di kaki Bukit Batu Bini. \r\n\r\nSetelah memasuki pintu masuk, kita dapat menemukan sebuah dinding yang menceritakan sejarah terjadinya Pagat Batu Banawa ini. Sungainya yang berarus sedang merupakan salah satu daya tarik objek wisata ini, sungainya yang lebar dan tidak terlalu deras membuatnya cukup aman untuk mandi apabila air sungai dalam kondisi yang normal. Terdapat penyewaan pelampung bebek untuk anak-anak yang ingin mandi di sini.', 'Baik', 'Buka', 'Darat (Roda 2 & 4)', '7 KM dari kota', '08:00 - 17:00 WITA', 'Rp.5000 Perorang', 'Disporapar HST', 'Toilet&&Tempat Ibadah&&Air Bersih&&Parkir&&Kedai Kopi', 'img-0629-5bfbd2eeaeebe16f556fd417.jpg', 'https://www.youtube.com/watch?v=8-adShzwsQM', '085215256708', '', 'https://www.instagram.com/wisatapagat/'),
(2, 'Goa Limbuhang Haliau', 'Haliau', '-2.6378838', '115.4258672', 'Objek wisata Alam di Kabupaten Hulu Sungai Tengah yang terpendam, kini kembali viral di media sosial, khususnya kalangan nitizen Bumi Murakata. Sebuah gua, di Desa Haliau, Kecamatan Hulu Sungai Tengah, menjadi ramai dikunjungi, lantaran keindahan dan keunikannya.\r\n\r\nGua yang berada di bawah bukit dengan ketinggian sekitar 50 meter tersebut, menawarkan kesejukan dari balik dinding batu, serta air telaga mini di bawahnya.', 'Baik', 'Buka', 'Kendaraan Bermotor', '8 KM dari Kota', '08:00 - 17:00 WITA', 'Rp.5000 Perorang', 'Haji Adi', 'Prasmanan&&Tempat Meeting&&Kolam&&Toilet&&Gazebo', '2019-11-26.jpg', '-', '08115159299', '-', '-'),
(3, 'Wisata Air Panas', 'Desa Murung B, Kec. Hantakan', '-2.7184564', '115.390142', 'Sampai saat ini air panas masih menjadi salah satu tujuan wisata yang tidak bisa dihindarkan. Suasananya yang tenang, dengan khasiatnya yang memang terbukti untuk tubuh, membuat banyak wisatawan yang menyempatkan diri berkunjung ke Banyu Panas Hantakan.', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '15 KM dari Kota', '08:00 - 17:00 WITA', 'Rp.5000 Perorang', '', 'Kolam Air Panas&&Kolam air biasa&&Toilet&&Gazebo&&Tempat Ibadah', 'wisata air panas.jpg', '-', '-', '-', '-'),
(4, 'Riam Bajandik', 'Desa Baru, Kec. Batu Benawa', '-2.647308', '115.4298742', 'Objek wisata Riam Bajandik adalah salah satu wisata alam yang berada di area Pegunungan Meratus, dan tempat yang pas untuk bersantai dengan keluarga atau teman- teman yang terdiri dari sungai, hutan, pemandangan perbukitan , dan beberapa spot foto yang di sediakan untuk para pengunjung.', 'Baik', 'Tutup', 'Mobil dan Sepeda Motor', '9.5 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Rp.3000 Perorang', 'Abd Rahman', 'Parkir', 'foto bajandik.jpg', '-', '-', '-', '-'),
(5, 'Pulau Mas', 'Desa Baru, Kec. Batu Benawa', '-2.647308', '115.4298742', 'Objek wisata Pulau Mas adalah salah satu wisata alam yang berada di area Pegunungan Meratus, dan tempat yang pas untuk bersantai dengan keluarga atau teman- teman yang terdiri dari sungai, hutan, pemandangan perbukitan , dan beberapa spot foto serta gazebo yang di sediakan untuk para pengunjung.', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '9.7 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Rp.5000 Perorang', 'Adi Nurul Huda', 'parkir&&toilet&&gazebo&&Warung', 'foto pulau mas..jpg', '-', '083104537872', '-', '-'),
(6, 'Air Terjun Rampah Pirua / Air Terjun 7 tingkat Kun', 'Desa Haruyan Dayak, Kec. Hanatakan', '-2.704', '115.463', 'Air Terjun kondan/ Rampah Pirua terdiri dari 7 air terjun\r\n', 'Baik', 'Buka', 'sepeda motor dan jalan kaki', '24.2 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'parkir', 'air terjun kondan.JPG', '-', '-', '-', '-'),
(7, 'Wisata Alam Tagur Hantu', 'Desa Murung B,  Kec. Hantakan', '2.647', '115.487', 'Tagur Hantu adalah wisata sungai meratus yang masih asri dan indah serta airnya yang dingin dan bersih', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '29.5 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Rp.3000 Perorang', 'Belum Diinput', 'parkir', 'foto tagur hantu.jpg', '-', '-', '-', '-'),
(8, 'River Tubbing Meratus', 'Desa Alat, Kec. Hantakan', '-2.6315042', '115.4727688', 'Wisata RTM ini  menawarkan jasa menantang adrenalin menyusuri sungai desa Alat dengan kegiatan arung jeram menggunakan ban karet', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '13.7 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Rp.30.000 - 50.000 perorang', 'Hijrianur', 'toilet&&warung&&bankaret', 'river tubbing desa alat.jpg', '-', '08134937116', '-', '-'),
(9, 'Manggasang', 'Desa Hantakan, Kec Hantakan', '-2.6412257', '115.4502619', 'Objek Wisata Manggasang adalah salah satu wisata lama yang berdiri di Kab. HST, dan merupakan wisata yang cocok berlibur bersama keluaraga', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '10.8  KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Rp.10.000 (sepeda motor)', 'Rifani', 'toilet&&parkir&&warung&&gazebo&&Villa', 'foto manggasan.jpg', '-', '085348753333', '-', '-'),
(10, 'Rampah Karamain', 'Desa Patikalain, Kec. Hantakan', '-2.697', '115.534', 'Rampah Karamain adalah salah satu wisata air di Kab. Hulu Sungai Tengah yang masih asri dan terjaga kelestariannya', 'Baik', 'Buka', 'Jalan kaki', '31.1  KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'parkir', 'air terjun karamain.jpg', '-', '-', '-', '-'),
(11, 'Air Terjun Mantarungin', 'Desa Hinas Kanan, Kec. Hantakan', '2.612', '115.515', 'Objek Wisata Air Terjun Mantarungin adalah salah satu tempat wisata di Kab. Hulu Sungai Tengah', 'Baik', 'Buka', 'Jalan kaki', '21.5 KM dari Kota Barabai', '08:00 - 17:00 WITA', '-2.5204729', 'Belum Diinput', 'Parkir', 'image-not-found.png', '-', '-', '-', '-'),
(12, 'Pantai Mangkiling (P2M)', 'Desa datar Ajab, Kec. Hantakan', '-2.6448972', '115.5305717', 'Objek Wisata Sungai yang menyediakan area camping ground dipinggiran sungainnya', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '23.5 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'parkir', 'pantai mangkilingg.jpg', '-', '085251608885', '-', '-'),
(13, 'Puncak Pagaran', 'Desa Pagaran, Kec. hantakan', '-2.6740179', '115.5134756', 'Objek Wisata Puncak Pagaran menyuguhkan keindahan pemandangan Pegunungan Meratus', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '29.5 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'parkir', 'puncak pagaran.jpg', '-', '-', '-', '-'),
(14, 'Puncak Titian Musang', 'Desa Pagaran, Kec. hantakan', '-2.6740055', '115.5156559', 'Objek Wisata Putimus menyuguhkan pemandangan pegunungan meratus yang indah serta menyediakan beberapa spot foto dan area camping ground', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '29.5 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Rp.5000 perorang', 'Agus', 'parkir&&toilet&&air bersih&&warung&&rental tenda', 'puncak titian musang..jpg', '-', '-', '-', '-'),
(15, 'Puncak Periuk', 'Desa datar Ajab, Kec. Hantakan', '-2.643', '115.552', 'Objek Wisata Puncak Periuk adalah salah satu wisata di Kab. Hulu Sungai Tengah dengan panorama alam dari puncak pegunungan meratus yang cocok bagi yang suka camping.', 'Baik', 'Buka', 'Jalan kaki', '50 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'puncak periuk.jpg', '-', '-', '-', '-'),
(16, 'Goa Pasting', 'Desa Pasting, Kec. Hantakan', '-2.671', '115.438', '-', 'Baik', 'Buka', 'Jalan kaki', '15.2 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'gua-berangin-desa-pasting-kecamatan-hantakan_2.jpg', '-', '-', '-', '-'),
(17, 'Air Terjun Rampah Tumaung', 'Desa Hinas Kanan, Kec. Hantakan', '-2.6553247', '115.5626113', 'Air terjun Rampah Tumaung memiliki tiga tingkatan yang dikelilingi dinding bebatuan dan lebatnya pepohonan dan sering disebut warga sekitar sebagai \"Tempat Pemandian Bidadari\"', 'Baik', 'Buka', 'Jalan kaki', '27.5 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'rampah tumaung.jpg', '-', '-', '-', '-'),
(20, 'Alai Rafting Meratus', 'Desa Nateh, Kec. Batang Alai Timur', '-2.524', '115.559', 'Dengan pemandangan alam yang indah serta panorama gunung kapur di sekelilingnya sungai Nateh berarus deras yang dipenuhi bebatuan sehingga sangat cocok  untuk olahraga arung jeram', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '28 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'wisata arung jeram nateh.JPG', '-', '-', '-', '-'),
(22, 'Air Terjun Sungai Karuh ', 'Desa Kiyu Hinas Kiri, Kec. Batang Alai Timur', '-2.676', '115.611', 'Hawa disekitar air terjun sangat sejuk karena pecahan butiran air terjun, dan kita bisa seru-seruan main air dan langsung berendam dibawah guyurannya atau menikmatinya saja, dan untuk berfoto kita bisa menaiki tebing batu dekat Air Terjun Sungai Karuh', 'Baik', 'Buka', 'Jalan kaki', '48.9 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'air terjun sungai karuh.jpg', '-', '-', '-', '-'),
(23, 'Gua Batu Sawar', 'Desa Nateh, Kec. Batang Alai Timur', '-', '-', 'Gua Batu Sawar berada di ketinggian sekitar 200 meter yang terletak di Bukit Sawar. Dinamakan Gua Batu Sawar oleh masyarakat setempat, karena Gua tersebut menjadi lahan panen pupuk dari  kotoran Kelelawar. Menuju ke Gua Batu Sawar, wisatawan harus menempuh jarak sejauh 1,14 Kilometer berjalan kaki.', 'Baik', 'Buka', 'Jalan kaki', '28 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'Goa Batu Sawer.jpg', '-', '-', '-', '-'),
(24, 'Bukit Rindang / Bukit Panyulingan', 'Desa Nateh, Kec. Batang Alai Timur', '-2.513', '115.554', 'Bukit Rindang termasuk ke dalam kawasan Desa Nateh, Kecamatan Batang Alai Timur, Lumayan jauh dari Kota Barabai, namun bentang alam cantik yang disuguhkan dari puncak bukit Rindang bisa mengurangi rasa lelahmu selama di perjalanan, kamu akan benar-benar dimanjakan oleh lukisan Tuhan yang sangat menawan. Dari puncak Bukit kamu bisa melihat suasana Desa Nateh serta keindahan Gunung Balu yang menjulang tinggi.', 'Baik', 'Buka', 'Jalan kaki', '28 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'Bukit-Rindang.jpg', '-', '-', '-', '-'),
(25, 'Gunung Halau-Halau', 'Desa Hinas Kiri, Kec. Batang Alai Timur', '-2.7043826', '115.6228329', 'Gunung Halau-halau atau sering disebut Gunung Besar merupakan gunung yang dikeramatkan bagi warga suku dayak Meratus. Gunung yang merupakan bagian dari puncak Pegunungan (seven summits) Meratus membelah tiga kabupaten, yaitu Kabupaten Hulu Sungai Tengah, Kabupaten Hulu Sungai Selatan dan Kabupaten Tanah Bumbu.', 'Baik', 'Buka', 'Jalan kaki', '50.8 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'halau halau.jpeg', '-', '-', '-', '-'),
(26, 'Log Laga Ria', 'Desa Sungai Harang, Kec. Haruyan', '-2.6969118', '115.3545676', 'Obyek wisata ini berada di kampung Mu’ui, Desa Sungai Harang, berjarak ±21 km dari kota Barabai. Lok Laga Ria adalah obyek wisata air terjun yang dikelilingi hutan. Aliran sunganya jernih dan terdapat riam-riam kecil sehingga menjadikan obyek wisata Loklaga menjadi tempat pemandian alam yang ideal. Anak-anak dapat belajar berenang pada tempat-tempat yang dangkal atau pada arus yang tidak terlalu deras.', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '19.2 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Rp.5000 perorang', 'Belum Diinput', 'Parkir', 'log laga ria.jpg', '-', '-', '-', '-'),
(27, 'Air Terjun Tagur Menanti', 'Desa Haruyan Sebrang, Kec. Hantakan', '-2.7165988', '115.4256966', 'Air Terjun Tagor Menanti.  Berada di Batuhabu Desa Haruyan Seberang Kecamatan Haruyan.\r\nAir terjun dua tingkat ini memiliki ketinggian -+10 meter, dan akan lebih indah disaksikan saat musim penghujan.', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '16.7 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'air-terjun-tagor-menanti-di-batuhabu-desa-haruyan-.jpg', '-', '-', '-', '-'),
(28, 'Goa Kukup', 'Desa Nateh, Kec. Batang Alai Timur', '-2.517', '115.553', 'Goa Kukup merupakan goa yang di bawahnya terdapat anak sungai yang airnya mengalir. Goa Kukup terletak di bawah kaki Bukit Kukup, mulut goa ini sangat luas dan bentuknya seperti sebuah terowongan. Karna terdapat anak sungai yang lumayan panjang maka untuk menjelajahi goa ini kemungkinan harus menelusuri jalur air. Menurut masyarakat sekitar goa ini dulunya adalah tempat pembuangan mayat, karna itu tekstur dan bentuk batu di sekitar goa agak terlihat menyeramkan. Goa Kukup merupakan salah satu goa mistis yang berada di Desa Nateh.', 'Baik', 'Buka', 'Jalan kaki', '28 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'parkir', 'Gua-Air-Kukup-4-Bukit-Luar-Goa.jpg', '-', '-', '-', '-'),
(29, 'Pemandangan Alam Desa Juhu', 'Desa Juhu, Kec. Batang Alai Timur', '-2.6760755', '115.6273131', 'Untuk menuju Desa Juhu, anda dapat memulainya dari Kota Barabai yang jaraknya 50 km. Pada 36 km yang pertama dapat anda tempuh menggunakan mobil ataupun sepeda motor, sedangkan sisanya 14 km harus anda tempuh dengan berjalan kaki melewati hutan selama 2 hari.u.\r\nWarga Desa Juhu sangat ramah pada siapa pun, termasuk wisatawan dari luar. Adat serta paguyuban masih kental di sana. \r\nLokasi yang berada di lereng Pegunungan Meratus itu memudahkan Anda untuk melihat hutan yang benar-benar masih perawan. Di sana juga masih ada rawa-rawa dan lahan gambut. \r\nKeunikan Desa Juhu salah satunya adalah karena permukaan tanahnya berumput semua.\r\nBanyak sekali batu-batuan di Desa Juhu yang membuat panorama alamnya kian artistik.', 'Baik', 'Buka', 'Jalan kaki', '50 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'parkir', 'juhu.jpg', '-', '-', '-', '-'),
(30, 'Gunung Kincir', 'Desa Nateh, Kec. Batang Alai Timur', '-2.52', '115.55', 'Gunung Kincir termasuk ke dalam kawasan Desa Nateh, Kecamatan Batang Alai Timur. Panorama alam cantik yang disuguhkan dari puncak Gunung Kincir bisa mengurangi rasa lelahmu selama di perjalanan, dari puncak Gunung Kincir kamu bisa melihat suasana Desa Nateh serta keindahan gunung-gunung lainnya yang menjulang tinggi.', 'Baik', 'Buka', 'Jalan kaki', '28 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'parkir', 'gunung kincir nateh.jpg', '-', '-', '-', '-'),
(31, 'Gunung Ugut', 'Desa Cukan Lipai, Kec. Batang Alai Selatan', '-2.572', '115.467', 'Objek Wisata Gunung ugut menyuguhkan keindahan pemandangan Pegunungan Meratus', 'Baik', 'Buka', 'Sepeda Motor', '11.3 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'parkir', 'cukan lipai.jpg', '-', '-', '-', '-'),
(32, 'Goa  Kudahaya', 'Desa Cukan Lipai, Kec. Batang Alai Selatan', '-2.569', '155.473', 'Goa Kudahaya ditemukan oleh HPI HST setelah mereka mendapatkan informasi dari media sosial bahwa di Bumi Murakata kembali ditemukan sebuah goa. Goa Kudahaya  sangat unik karena masih asli dan tidak pernah dijamah. Entah sejak kapan gua ini terbentuk, namun yang jelas tempat ini menyimpan banyak sejarah tentang perjuangan rakyat Hulu Sungai Tengah, melawan penjajah Belanda.', 'Baik', 'Buka', 'Jalan kaki', '11.3 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'parkir', 'goa kudahaya.jpg', '-', '-', '-', '-'),
(33, 'Bukit Titi', 'Desa Limpasu, Kec. Limpasu', '-2.5041875', '115.5260625', 'Gunung Titi merupakan bagian dari pegunungan meratus. Dilihat dari ketinggiannya sendiri kurang lebih 313 Mdpl. Memang tidak terlalu tinggi. Tetapi, tempat ini begitu dinikmati oleh semua kalangan. Bukit Titi ini mempunyai 2 buah puncak yang kontur tanahnya cukup landai, pas untuk bercamping ataupun kalian yang hobi ngetrail.', 'Baik', 'Buka', 'Jalan kaki dan Sepeda Mot', '22.4 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'parkir', 'bukit titi.jpg', '-', '-', '-', '-'),
(34, 'Air Terjun Mantawila', 'Desa Arangani, Kec. Hantakan', '-2.6384683', '115.5066007', 'Hawa disekitar air terjun Mantawila sangat sejuk karena pecahan butiran air terjun, dan kita bisa seru-seruan main air dan langsung berendam dibawah guyurannya, dan untuk berfoto kita bisa menaiki tebing batu  Air Terjun Mantawila.', 'Baik', 'Buka', 'Jalan kaki', '19.6 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'parkir', 'mantawila.jpg', '-', '-', '-', '-'),
(35, 'Air Terjun Riam Wangkui', 'Desa Maliringan, Kec. Batang Alai Timur', '-2.515', '115.631', 'Air Terjun Riam Wangkui salah satu tempat wisata yang berada di Desa Mariringan/Maliringan, Batang Alai Timur.\r\nAir Terjun Wangkui juga memiliki pemandangan yang eksotis, ditutupi rerimbunan pohon-pohon sehingga memiliki efek “ray of ligt” (cahaya matahari yang masuk ke tempat tersebut tidak terlalu banyak). Sejuk terasa kalau berada di tempat tersebut.', 'Baik', 'Buka', 'Jalan kaki', '50.9 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'parkir', 'riam wangkuy.jpg', '-', '-', '-', '-'),
(36, 'Air Terjun Andikian', 'Desa Tandilang, Kec. Batang Alai Timur', '-2.547', '115.533', 'Perjalanan ke air terjun Andikian diawali dengan pemandangan kebun karet warga. Kemuadian, di tengah perjalalan pemandangan didominasi rimbunya pohon bambu yang nenambah sejuk udara di sekitar. Untuk trip selanjutnya menjelang sampai ke lokasi, kita menembus hutan degan berbagai pepohonan khas pegunungan Meratus yang beragam.', 'Baik', 'Buka', 'Jalan kaki dan Sepeda Mot', '29.4 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'parkir', 'andikian.jpg', '-', '-', '-', '-'),
(37, 'Rampah Magalong', 'Desa Tandilang, Kec. Batang Alai Timur', '-2.558', '115.543', 'Jalan menuju Rampah Magalong sendiri tidak terlalu ekstrem, tetapi cukup menantang bagi kalian yang suka perjalanan di hutan gunung. \r\n Air terjun Rampah Magalong sendiri mempunyai ketinggian sekitar 10 meter. Dengan batu besar, dan arus airnya yang tidak terlalu deras.\r\nSelain itu, cerita masyarakat tentang jejak kaki kanan, yang tercetak di Batu di Rampah Magalong ternyata benar adanya. Lubang yang ada di batu tersebut sangat identik dengan jejak kaki telanjang manusia. Dan ukurannya mirip telapak kaki orang dewasa.', 'Baik', 'Buka', 'Jalan kaki', '29.4 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'parkir', 'rampah magalong.jpg', '-', '-', '-', '-'),
(38, 'Air Terjun Rampah Tarawe', 'Desa datar Ajab, Kec. Hantakan', '-2.66', '115.551', 'Air Terjun Rampah Tarawe yang berada di dalam hutan Pegunungan Meratus yang menawarkan keindahan alam yang masih asri.', 'Baik', 'Buka', 'Jalan kaki', '23.5 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'parkir', 'air terjun rampah tarawe.jpg', '-', '-', '-', '-'),
(39, 'Gua Liang Hadangan', 'Desa Murung A, Kec. Hantakan', '-2.634', '115.39', 'Gua Liang Hadangan berada di deretan ke empat ke arah barat dari Gunung Batu Benawa, yang memiliki panorama menakjubkan. Selain keindahan hutan di sekitar gua, juga gua ini memiliki keunikan tersendiri.\r\nGua yang mempunyai kisah zaman dahulu, kisah Raden Panganten anak durhaka yang disumpah Diang Ingsun ibunya sehingga menjadi batu.\r\nKisah ini dituturkan secara lisan mau pun dikemas dalam sebuah buku yang selalu melekat dalam masyarakat Tanah Banjar sampai sekarang ini. Sesungguhnya, Gua Liang Hadangan ini merupakan objek wisata yang sangat strategis bagi Kabupaten HST khususnya Kota Barabai dan Kalimantan Selatan umumnya.', 'Baik', 'Buka', 'Jalan kaki', '7.2 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'parkir', 'Gua-Liang-Hadangan-5.jpg', '-', '-', '-', '-'),
(40, 'Baruh Bunga', 'Desa Haliau, Kec. Batu Benawa', '-2.6367354', '115.4279651', 'Wisata Baruh Bunga bukan wisata baru di Desa Haliau Kecamatan Batu Benawa Kabupaten Hulu Sungai Tengah.\r\nMengusung tema outbound dan water park, Wisata Baruh bunga menawarkan hal yang berbeda dari wisata lainnya.\r\nJika, lokasi wisata yang ada di sepanjang aliran Sungai Pagat mengusung wisata air, Baruh Bunga merupakan wisata memacu adrenalin dengan mengusung outbound dan waterpark.', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '8.6 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Rp.5000 perorang', 'Belum Diinput', 'toilet&&waterpark&&wahanaoutbound&&gazebo&&balaiserbaguna', 'baruh bunga.jpg', '-', '-', '-', '-'),
(41, 'Kampoeng Bamboe Meratus', 'Desa Tandilang, Kec. Batang Alai Timur', '-2.5726881', '115.5353865', 'Berkunjung ke kawasan wisata ini bisa dilakukan kapan saja ataupun buat kalian yang mau bercamping. Namun, waktu terbaik untuk mengunjungi obyek wisata ini adalah pagi hari. Karena sinar matahari belum begitu terik. Sehingga, suasananya cocok dimanfaatkan untuk swafoto karena panorama di sekeliling Kampoeng Bamboe sangat menawan. Pengunjung bisa menyaksikan gugusan bukit di Pegunungan Meratus. Tak ketinggalan pula ada tebing curam eksotis yang dipenuhi kabut. Keasrian Kampoeng Bamboe tampak lebih terasa karena hutan yang mengelilinginya. Obyek wisata yang satu ini memang dilingkupi hutan-hutan lebat. Hutan belantara ini berisi pohon-pohon hijau yang menjulang tinggi.', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '33.7 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Rusian', 'parkir&&toilet&&homestay&&gazebo&&mushola&&warung&&spotfoto&&rentaltenda&&campingarea', 'kampoeng bamboe.jpg', '-', '-', '-', '-'),
(42, 'Bendungan Batang Alai', 'Desa Labuhan, Kec. Batang Alai Selatan', '-2.5440978', '115.5066614', 'Bendungan Batang Alai atau Sakutang yang terletak di desa Labuhan Kecamatan Batang Alai Selatan, bisa menjadi referensi anda saat liburan tiba. karena selain sebagai jaringan irigasi, bendungan Batang Alai sudah ditata rapi dan di bangun oleh kontraktor pelaksana menjadi objek wisata yang bisa dikunjungi oleh masyarakat dengan menikmati indahnya hawa pegunungan Meratus yang indah dan alami serta air terjun dari bendungan itu.', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '23.7 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'parkir&&mushalla&&toilet&&Pendopopertemuan&&', 'bendungan batang alai.jpg', '-', '-', '-', '-'),
(43, 'Desa Budaya Barikin', 'Desa Barikin, Kec. Haruyan', '-2.679', '115.324', 'Desa Barikin yang terletak di Kecamatan Haruyan Kabupaten Hulu Sungai Tengah, dijadikan sebuah desanya para seniman karena terpilih menjadi satu-satunya desa Se Kalsel dalam program seniman mengajar. Desa Barikin merupakan yang paling banyak melahirkan para seniman khususnya di Kabupaten HST. Bumi Murakata salah satu Kabupaten yang tidak hanya dikenal sebagai Kota Religius tetapi juga kota yang masyarakatnya masih menganut ragam budaya serta melestarikan adat istiadat.Terutama dalam bidang kesenian yang di wariskan secara turun temurun sehingga banyak melahirkan para seniman.', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '14.6 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'barikin.jpg', '-', '-', '-', '-'),
(44, 'Rumah Banjar Desa Pamangkih', 'Desa Pamangkih, Kec. Labuan Amas Utara', '-2.608', '115.269', 'Rumah Adat Balai Bini adalah salah satu dari rumah adat yang ada di Kab. Hulu Sungai Tengah. keberagaman dan megahnya sebuah bangunan menjadikan tempat ini layak untuk dikunjungi. Apalagi, nuansa klasik khas masa lalu langsung terasa saat kamu tiba disini. Yakin, masih berpikir-pikir untuk mengunjungi tempat ini?', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '14.5 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'desa pamangkih.jpg', '-', '-', '-', '-'),
(45, 'Kuliner Kue Cincin', 'Desa Muara Rintis, Kec. Batang Alai Utara', '-2.4985184', '115.3847473', 'Kue Cincin kini sedang tren di Kota Barabai, kue yang diproduksi langsung oleh masyarakat desa.\r\nHiasan payung warna-warni menghiasi pinggiran jalan lintas provinsi dari desa Maringgit hingga ke desa Muara Rintis Batang Alai Utara.\r\nKue cincin yang awalnya hanya satu varian rasa, kini sudah mulai ada beberapa varian rasa di antaranya rasa pandan dan durian.\r\nDitambah dengan penjaganya pun wanita yang berusia muda-muda sangat menarik pembeli untuk singgah membeli kue cincin.', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '11.6 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'pedagang-kue-cincin-di-desa-batung-muara-rintis.jpg', '-', '-', '-', '-'),
(46, 'Pasar Pujasera', 'Jl. Brigjen H. Hasan Basery, Kec. Barabai', '-2.5864063', '115.384158', 'PUJASERA adalah singkatan dari Pusat Jajanan Serba Ada. Pada malam hari di Pujasera, kita dapat menemukan jajanan murah yang serba ada, dari mulai gorengan, terang bulan, martabak, donat, soto banjar, bakso, nasi goreng, bahkan masakan Padang pun juga ada. Letak Pujasera yang strategis di pusat kota membuat tempat ini tak sepi pengunjung setiap malam.\r\nPada siang hari, tepatnya pada hari sabtu hari pasar di kota Barabai, di Pujasera dijadikan sebagai pasar tempat jual beli sepeda motor yang bekas maupun yang baru.', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '230 Meter dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'pujarera.jpg', '-', '-', '-', '-'),
(47, 'Lapangan Dwi Warna Barabai', 'Kelurahan Barabai Selatan', '-2.584913', '115.3854142', 'Lapangan Dwi Warna Barabai adalah lapangan yang terletak di Pusat Kota Barabai. Lapangan  Barabai ini dikelilingi oleh bangunan-bangunan perkantoran di antaranya Kantor Pemerintah Daerah, BKD, DPRD HST, \r\nLapangan ini juga sering digunakan untuk acara pemerintahan, hari jadi HST, Upacara Kemerdekaan. Lapangan Dwi Warna juga ramai dikunjungi oleh Masyarakat HST untuk berolahraga di antaranya senam, jogging, bersepeda, sepak bola, dan tersedia lapak seni dan wisata kuliner.', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '-2.5204729', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'lapangan-dwiwarna-barabai-hst-kalsel.jpg', '-', '-', '-', '-'),
(48, 'Mesjid Agung Riyadhus Shalihin', 'Kelurahan Barabai Utara', '-2.582108', '115.3826482', 'Masjid Agung Riyadusshalihin atau biasa disebut dengan nama Masjid Agung Hulu adalah sebuah masjid terbesar yang berada di kota Barabai. Masjid ini dibangun pada tahun 1962 dan merupakan salah satu wisata religius kebanggaan warga Barabai. Masjid ini sudah mendapatkan nomor ID dari Simas Kemenag dengan nomor ID 01.2.22.07.06.000001. Dengan luas bangunan 6400 meter persegi mampu menampung hingga 10 ribu Jemaah sekaligus. ', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '550 meter dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'Masjid-Agung-Riyadhus-Shalihin-Barabai.png', '-', '-', '-', '-'),
(49, 'Mesjid Keramat Palajau', 'Desa Palajau, Kec. Pandawan', '-2.582108', '115.3826482', 'Rumah Allah ini adalah salah satu masjid tertua di Kalsel. Masjid bersejarah ini berdiri di lahan seluas 400 meter persegi. Menurut riwayat, Masjid Palajau dibangun sejak abad 14 Masehi, saat kedatangan utusan Raden Patah dari Kerajaan Demak bersama pangerang dari Kerajaan Banjar.', 'Baik', 'Buka', 'Mobil dan Sepeda Motor', '3.9 KM dari Kota Barabai', '08:00 - 17:00 WITA', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'palajau-utamawm.jpg', '-', '-', '-', '-'),
(51, 'Mesjid Al a la Jatuh', 'Desa Jatuh, Kec. Pandawan', '-2.5448756', '115.3553111', 'Masjid Al A la berlokasi di Desa Jatuh Kecamatan Pandawan, merupakan salah satu masjid tua yang ada di Provinsi Kalimantan Selatan. Berdasarkan namanya, Masjid Al A la artinya dalam bahasa arab ( Tinggi ) karena bangunan masjid memiliki lantai dasar yang tingginya sekitar 1,5 meter. Karenanya pula, ada yang mengatakan, bahwa setiap tahun Masjid Al A la ini bertambah tinggi.\r\nMasjid Al A la diperkirakan telah berdiri sejak abad ke-17 Masehi. Hal tersebut didasarkan panji-panji (bendera bertuliskan huruf Arab) yang terdapat di masjid tersebut. Disebutkan panji-panji itu dikirim oleh Syarif dari Mekah melalui perantara seorang Sayyid untuk diberikan untuk mesjid Al A la. Namun fakta sejarah, menyebutkan bahwa panji-panji itu dikirim oleh seorang ulama dari Mekah ke Masjid Al A la.', 'baik', 'buka', 'Mobil dan Sepeda Motor', '8.5 KM dari Kota Barabai', 'Belum Diinput', 'Belum Diinput', 'Belum Diinput', 'Parkir&&Toilet', 'cc.jpg', '-', '-', '-', '-'),
(52, 'Makam Wali Katum', 'Desa Tabudarat Hilir, Kec. Labuan Amas Selatan', '-2.6596364', '115.3129155', 'Nama asli Wali Katum adalah Muhammad Ramli bin Anang Katutut. Nama saat masa kecil Artum Ali.\r\nAda yang unik dari Wali Katum. Beliau hidup apa adanya. Tidak bekerja. Makan, hanya bila ada makanan. Tapi bila tidak ada Wali Katum berpuasa. Kegiatan sehari-hari hanya untuk beribadah kepada Allah SWT. Walaupun hidup apa adanya. Wali Katum tidak pernah mengeluh sama sekali. Dia selalu bersyukur. Dia tidak pernah meminta-minta kepada orang lain. Beliau juga suka menyendiri dan selalu menutup diri dari orang lain. Karena itulah masyarakat memanggilnya Wali Katum. Katum dalam bahasa Arab artinya sembunyi.\r\nWali Katum selalu membaca Al Qur’an. Seakan Al Qur’an tak terpisahkan dengan dirinya. Kecuali ke kamar mandi atau ke toilet. Bahkan saat bepergian pun selalu Al Qur’an selalu dibawa. Beliau selalu menyempatkan waktu untuk membaca Al Qur’an. Karena sering dibaca Al-Qur’an milik Wali Katum tidak lagi persegi empat,  melainkan berbentuk lonjong karena sisi-sisinya sudah rusak lantaran sering dibaca.', 'baik', 'buka', 'Mobil dan Sepeda Motor', '13.5 KM dari Kota Barabai', 'Belum Diinput', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'makam Wali Katum.jpg', '-', '-', '-', '-'),
(53, 'Ponpes Ibnul Amin', 'Desa Pamangkih, Kec. Labuan Amas Utara', '-2.5657344', '115.3957888', 'Pondok Pesantren Putera Ibnul Amin adalah sebuah pondok pesantren yang terletak di desa Pamangkih, kecamatan Labuan Amas Utara. Pondok Pesantren Ibnul Amin Pamangkih didirikan secara resmi pada tanggal 11 Mei 1959 M / 22 Syawal 1378 H. Pendirinya adalah seorang ulama dari masyarakat Pamangkih yang bernama K.H.Mahfuz Amin bin Tuan Guru H. Muhammad Ramli bin Tuan Guru H. Muhammad Amin.', 'baik', 'buka', 'Mobil dan Sepeda Motor', '15.5 KM dari Kota Barabai', 'Belum Diinput', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'ponpes Ibnul Amin.jpg', '-', '-', '-', '-'),
(54, 'Makam Habib Muhammad bin Iberahim Al-Habsyi', 'Kuburan Muslimin Jl. Keramat Manjang Barabai', '-2.5849577', '115.3853988', 'Lahir di Seiwun Hadramaut Yaman pada tahun 1311 H. bertepatan dengan tahun 1893 M. Beliau datang ke Barabai bersama ayahnya yang bernama Habib Ibrahim Al-Habsyi (tidak diketahui dengan pasti tahun kedatangan beliau ke Barabai). Beliau seorang Hafizh (hafal) Al-Qur’an dan alim dalam berbagai bidang ilmu agama serta taat beribadah. Di masyarakat beliau dikenal sangat santun dan suka menolong. Keseharian beliau digunakan untuk mengajar ilmu agama dan menolong sesama juga tidak lupa berusaha untuk memenuhi kebutuhan hidup beliau dengan berjualan minyak wangi di berbagai pasar yang ada kabupaten Hulu Sungai Tengah Diceritakan beliau kalau pergi ke pasar untuk berjualan selalu naik sepeda, sambil mengendarai sepeda beliau menghafal Al-Qur’an. Beliau wafat di Barabai Kalimantan Selatan pada tanggal 21 Rabi’ul Akhir 1396 H / 1976 M dan dimakamkan di komplek kuburan muslimin Keramat Manjang Barabai. ', 'baik', 'buka', 'Mobil dan Sepeda Motor', '1.0 KM dari Kota Barabai', 'Belum Diinput', 'Belum Diinput', 'Belum Diinput', 'Parkir', '2012-06-14-459aa12(FILEminimizer).jpg', '-', '-', '-', '-'),
(55, 'Ponpes Nurul Muhibbin Kitun', 'Kelurahan Barabai Darat', '-2.5849577', '115.3853988', '-', 'baik', 'buka', 'Mobil dan Sepeda Motor', '1.0 KM dari Kota Barabai', 'Belum Diinput', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'ponpes nurul muhibbin kitun.jpg', '-', '-', '-', '-'),
(56, 'Pasar Agrobisnis', 'Kelurahan Barabai Utara', '-2.5851825', '115.369561', 'Pasar Agrobisnis terletak di kawasan Pasar Keramat Barabai. Pasar ini menjual kebutuhan pokok hasil pertanian dan perikanan. Baik itu dari Hulu Sungai Tengah maupun luar daerah. Pasar ini bahkan tak ada matinya. Alias aktif selama 24 jam.\r\nNamun, untuk perikanan biasanya penjual dengan jumlah besar akan memasok di waktu subuh. Sedangkan sayur mayur sudah ada sejak pagi hingga malam.', 'baik', 'buka', 'Mobil dan Sepeda Motor', '1.1 KM dari Kota Barabai', 'Belum Diinput', 'Belum Diinput', 'Belum Diinput', 'Parkir', 'pasar-agribisnis-barabaiii.jpg', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paketwisata`
--

CREATE TABLE `tb_paketwisata` (
  `id_tb` int(11) NOT NULL,
  `nama_paketwisata` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_paketwisata` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat_paketwisata` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_paketwisata` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_paketwisata` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rute_paketwisata` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `biaya_paketwisata` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `guide_paketwisata` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_paketwisata` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_paketwisata` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_paketwisata` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `facebook_paketwisata` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `instagram_paketwisata` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_paketwisata`
--

INSERT INTO `tb_paketwisata` (`id_tb`, `nama_paketwisata`, `lokasi_paketwisata`, `lat_paketwisata`, `long_paketwisata`, `deskripsi_paketwisata`, `rute_paketwisata`, `biaya_paketwisata`, `guide_paketwisata`, `fasilitas`, `thumb_paketwisata`, `youtube_paketwisata`, `cp_paketwisata`, `facebook_paketwisata`, `instagram_paketwisata`) VALUES
(1, 'Pesona Barabai Paket 2 Hari 1 Malam', 'Pagat - Limbuhang - Bajandik', '-2.5754222', '115.3897339', 'Selamat Datang di  PT. Trip Kuy Indonesia, a Wisata Bali Sempurna, segala informasi tentang Paket Wisata Bali, liburan di Bali, Paket Meeting, Voucher Hotel di Bali, Paket Tour Rombongan di Bali, Sewa mobil murah dan atraksi wisata di Bali lainnya dengan harga hemat. Tim Kami  100% Sudah di Vaksin Covid19.', 'Objek Wisata Pagat - Baruh Bunga - Goa Limbuhang - Putimus', 'Mulai Dari RP. 100000 Perorang', 'Datu Haji', '07.00 - 08.00 Penjemputan peserta tour dan makan pagi &&setelah itu melanjutkan perjalanan menuju Air Terjun Coban Rondo&&Tiba di Area Air terjun Coban Rondo bermain di Taman Labirin , Panahan , Flying Fox dan Paint ball serta menikmati Air Terjun Coban Rondo&&12.00 Makan siang di Resto lokal , setelah itu melanjutan perjalanan menuju Jatim Park 2 , tiba di Jatim park 2 , bermain dan mengunjungi secret zoo dan museum satwa selama kurang lebih 2 - 3 jam dan melanjutkan jalan - jalan di Alun - alun Kota Batu menikmati jajanan kota batu .&&dari Alun - alun peserta melanjutkan perjalanan ke rumah makan untuk makan malam setelah makan malam kembali ke Hotel / cek in / istirahat periapan ke Bromo.', 'bromo-family-2-1024x683.jpg', 'https://www.youtube.com/watch?v=6Q3LzWeNOu8', '081122223333', 'https://balitrip.co.id/?g', 'https://www.instagram.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pengelola` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`, `jenis`, `id_pengelola`) VALUES
(1, 'Admin', 'admin', 'admin', 'Administrator', 'Administrator', 'Administrator'),
(2, 'Pengelola', 'Pengelola', 'Pengelola', 'Pengelola', 'pariwisata', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan`
--

CREATE TABLE `ulasan` (
  `id_tb` int(11) NOT NULL,
  `id_rate` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `ulasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` float NOT NULL DEFAULT 5,
  `foto` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_tb`),
  ADD KEY `id_pengunjung` (`id_pengunjung`);

--
-- Indeks untuk tabel `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id_tb`);

--
-- Indeks untuk tabel `tb_hotel`
--
ALTER TABLE `tb_hotel`
  ADD PRIMARY KEY (`id_tb`);

--
-- Indeks untuk tabel `tb_infoterbaru`
--
ALTER TABLE `tb_infoterbaru`
  ADD PRIMARY KEY (`id_tb`),
  ADD KEY `headline_infoterbaru` (`headline_infoterbaru`(768));

--
-- Indeks untuk tabel `tb_kuliner`
--
ALTER TABLE `tb_kuliner`
  ADD PRIMARY KEY (`id_tb`);

--
-- Indeks untuk tabel `tb_objekwisata`
--
ALTER TABLE `tb_objekwisata`
  ADD PRIMARY KEY (`id_tb`);

--
-- Indeks untuk tabel `tb_paketwisata`
--
ALTER TABLE `tb_paketwisata`
  ADD PRIMARY KEY (`id_tb`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_tb`),
  ADD KEY `id_rate` (`id_rate`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_tb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `id_tb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_hotel`
--
ALTER TABLE `tb_hotel`
  MODIFY `id_tb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_infoterbaru`
--
ALTER TABLE `tb_infoterbaru`
  MODIFY `id_tb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kuliner`
--
ALTER TABLE `tb_kuliner`
  MODIFY `id_tb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `tb_objekwisata`
--
ALTER TABLE `tb_objekwisata`
  MODIFY `id_tb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `tb_paketwisata`
--
ALTER TABLE `tb_paketwisata`
  MODIFY `id_tb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_tb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

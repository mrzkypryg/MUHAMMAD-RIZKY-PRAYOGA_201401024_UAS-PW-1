-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2021 pada 19.39
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uaslabpw1'
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `link` varchar(200) NOT NULL,
  `jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id`, `gambar`, `judul`, `link`, `jenis`) VALUES
(1, 'https://asset.kompas.com/crops/5sJM9z6CSJgRhyR1Oio5lGCBruA=/0x0:0x0/750x500/data/photo/2021/05/21/60a7af3b99b3d.jpg', 'Pengakuan Dokter IW Jual Sinovac ke Warga Rp 250.000: Vaksin Saya Ambil Langsung dari Dinkes', 'https://regional.kompas.com/read/2021/05/22/063000978/pengakuan-dokter-iw-jual-sinovac-ke-warga-rp-250000-vaksin-saya-ambil?page=all', 'postbaru'),
(2, 'img/berita/amd.jpg', 'Asus Rilis Jajaran Laptop Gaming ROG dengan Prosesor AMD Ryzen 5000', 'https://tekno.kompas.com/read/2021/04/25/14290027/asus-rilis-jajaran-laptop-gaming-rog-dengan-prosesor-amd-ryzen-5000?page=all', 'postbaru'),
(3, 'img/berita/amd.jpg', 'AMD pindah ke soket LGA untuk AM5 ', 'https://balicitizen.com/rumor-amd-pindah-ke-soket-lga-untuk-am5-komputer-berita/', 'technology'),
(4, 'img/berita/covid1.jpg', 'Pasien Terus Bertambah, BOR ICU Covid-19 di Sumut Capai 60 Persen', 'https://sumut.inews.id/berita/pasien-terus-bertambah-bor-icu-covid-19-di-sumut-capai-60-persen', 'postbaru'),
(5, 'img/berita/recentpost1.jpeg', 'Tak Hanya di Medan, ASN Sumut Juga Vaksinasi COVID Ilegal di Jakarta', 'https://news.detik.com/berita/d-5578361/tak-hanya-di-medan-asn-sumut-juga-vaksinasi-covid-ilegal-di-jakarta', 'postbaru'),
(6, 'img/berita/recentpost2.jpg', 'BI: Bali Jangan Andalkan Lagi Wisatawan Mancanegara', 'https://id.berita.yahoo.com/bi-bali-jangan-andalkan-lagi-130006883.html', 'postbaru'),
(9, 'img/berita/covid2.jpg', 'UPDATE: Sebaran 5.907 Kasus Baru Covid-19, Jawa Barat Catat 1.420 Kasus  ', 'https://nasional.kompas.com/read/2021/05/24/17280671/update-sebaran-5907-kasus-baru-covid-19-jawa-barat-catat-1420-kasus?page=all', 'covid'),
(10, 'img/berita/covid3.jpg', 'Wamenkes Prediksi Kasus Covid-19 Akan Naik Beberapa Waktu ke Depan, Ini Penyebabnya', 'https://nasional.kompas.com/read/2021/05/24/16530241/wamenkes-prediksi-kasus-covid-19-akan-naik-beberapa-waktu-ke-depan-ini', 'covid'),
(11, 'img/berita/covid4.jpg', 'Kasus Covid-19 Meningkat Usai Libur Lebaran, Seluruh Provinsi Indonesia Bakal Terapkan PPKM Mikro', 'https://www.kompas.tv/article/177049/kasus-covid-19-meningkat-usai-libur-lebaran-seluruh-provinsi-indonesia-bakal-terapkan-ppkm-mikro', 'covid'),
(12, 'img/berita/covid5.jpg', 'Laporan Terbaru Teori Covid-19 Semakin Menyudutkan China, Mengapa?  ', 'https://www.kompas.com/global/read/2021/05/24/202420270/laporan-terbaru-teori-covid-19-semakin-menyudutkan-china-mengapa', 'covid'),
(13, 'img/berita/covid6.jpg', 'Pandemi COVID-19 Picu Harga Melon Premium Jepang Turun, Kini Hanya Rp 356 Juta', 'https://www.liputan6.com/global/read/4565299/pandemi-covid-19-picu-harga-melon-premium-jepang-turun-kini-hanya-rp-356-juta', 'covid'),
(14, 'img/berita/technology1.jpg', 'Berita Teknologi Terpopuler, dari Lego versi AR Snapchat hingga PUBG Mobile Season 19 Traverse', 'https://www.medcom.id/teknologi/news-teknologi/VNxgVe1K-berita-teknologi-terpopuler-dari-lego-versi-ar-snapchat-hingga-pubg-mobile-season-19-traverse', 'technology'),
(15, 'img/berita/technology2.jpg', 'Berita Teknologi Terpopuler, dari IFA Berlin 2021 hingga Huawei FreeBuds 4', 'https://www.medcom.id/teknologi/news-teknologi/9K5QdoyK-berita-teknologi-terpopuler-dari-ifa-berlin-2021-hingga-huawei-freebuds-4', 'technology'),
(16, 'img/berita/technology3.jpg', 'Mau Chat WhatsApp akan Otomatis Hilang Setelah 7 Hari? Ini Fitur Terbaru WA ', 'https://batam.tribunnews.com/2021/05/23/berita-teknologi-mau-chat-whatsapp-akan-otomatis-hilang-setelah-7-hari-ini-fitur-terbaru-wa', 'technology'),
(17, 'img/berita/technology4jpg.jpg', 'Besok Selasa 24 Mei Vivo V21 5G Resmi Masuk Indonesia, Ini Kelebihannya', 'https://batam.tribunnews.com/2021/05/23/berita-teknologi-besok-selasa-24-mei-vivo-v215g-resmi-masuk-indonesia-ini-kelebihannya', 'technology'),
(18, 'img/berita/lifestyle1.jpg', 'Warganet India Puji Kereta Indonesia dan Sebut Stasiun Gambir Seperti Bandara', 'https://www.liputan6.com/lifestyle/read/4565304/warganet-india-puji-kereta-indonesia-dan-sebut-stasiun-gambir-seperti-bandara', 'lifestyle'),
(19, 'img/berita/lifestyle2.jpg', 'Restoran Indonesia di Singapura Tutup Setelah Beroperasi Selama 24 Tahun', 'https://www.liputan6.com/lifestyle/read/4565031/restoran-indonesia-di-singapura-tutup-setelah-beroperasi-selama-24-tahun', 'lifestyle'),
(20, 'img/berita/lifestyle3.jpg', '3 Cara Kendalikan Mutasi Baru Masuk ke Indonesia', 'https://lifestyle.okezone.com/read/2021/05/24/612/2414806/3-cara-kendalikan-mutasi-baru-masuk-ke-indonesia', 'lifestyle'),
(21, 'img/berita/lifestyle4.jpg', 'Korea Selatan Sukses Tangani Korea, Dubes Indonesia Beberkan Caranya', 'https://www.fimela.com/lifestyle-relationship/read/4565153/korea-selatan-sukses-tangani-korea-dubes-indonesia-beberkan-caranya', 'lifestyle'),
(22, 'img/berita/lifestyle5.jpg', 'Mengenal Lebih Dekat Sophia Rogan, Miss Grand Indonesia 2021', 'https://www.liputan6.com/lifestyle/read/4564398/mengenal-lebih-dekat-sophia-rogan-miss-grand-indonesia-2021', 'lifestyle'),
(23, 'img/berita/politic1.jpg', 'Survei ARSC: Ini Lima Partai Politik Terkuat Jika Pileg Dilakukan Pada Hari Ini  ', 'https://www.tribunnews.com/nasional/2021/05/22/survei-arsc-ini-lima-partai-politik-terkuat-jika-pileg-dilakukan-pada-hari-ini', 'politik'),
(24, 'img/berita/politic2.jpg', 'Pengamat Politik: Mimpi Ganjar Pranowo Jadi Capres Bisa Tamat ', 'https://www.tribunnews.com/nasional/2021/05/23/pengamat-politik-mimpi-ganjar-pranowo-jadi-capres-bisa-tamat', 'politik'),
(25, 'img/berita/populer1.jpg', 'Anggota DPRD DKI Duga Alvin Wijaya Diberhentikan Anies karena Mafia Jabatan', 'https://news.detik.com/berita/d-5581293/anggota-dprd-dki-duga-alvin-wijaya-diberhentikan-anies-karena-mafia-jabatan?_ga=2.164568059.559465133.1621841007-1203977188.1619628254', 'populer'),
(26, 'img/berita/populer2.jpg', 'Penjara 9 Tahun Lamanya bagi DJ Vincentia', 'https://news.detik.com/berita/d-5581153/penjara-9-tahun-lamanya-bagi-dj-vincentia?_ga=2.169416933.559465133.1621841007-1203977188.1619628254', 'populer'),
(27, 'img/berita/populer3.jpg', 'Anggota TGUPP yang Diberhentikan Anies Adalah Alvin Wijaya', 'https://news.detik.com/berita/d-5581220/anggota-tgupp-yang-diberhentikan-anies-adalah-alvin-wijaya?_ga=2.169416933.559465133.1621841007-1203977188.1619628254', 'populer'),
(28, 'img/berita/populer4.jpg', 'Wanti-wanti Klaster Libur Lebaran Mulai Bermunculan di Sana-sini', 'https://news.detik.com/berita/d-5581310/wanti-wanti-klaster-libur-lebaran-mulai-bermunculan-di-sana-sini?_ga=2.169416933.559465133.1621841007-1203977188.1619628254', 'populer'),
(29, 'img/berita/populer5.jpg', 'Mencekam Rentetan Penembakan Renggut Selusin Nyawa di Paman Sam', 'https://news.detik.com/internasional/d-5581252/mencekam-rentetan-penembakan-renggut-selusin-nyawa-di-paman-sam?_ga=2.169416933.559465133.1621841007-1203977188.1619628254', 'populer'),
(30, 'img/berita/politic3.jpg', 'Menerka Panggung Politik PKS di Balik \'Zionis Nusantara\'', 'https://news.detik.com/berita/d-5577001/menerka-panggung-politik-pks-di-balik-zionis-nusantara', 'politik'),
(31, 'img/berita/politic4.jpg', 'Menilik Safari Politik Golkar dan PKS yang Diyakini Berbau Pilpres', 'https://news.detik.com/berita/d-5578430/menilik-safari-politik-golkar-dan-pks-yang-diyakini-berbau-pilpres', 'politik'),
(32, 'img/berita/politic5.jpg', 'Politik identitas \"menggurita\" akibatkan indeks demokrasi turun', 'antaranews.com/berita/2158478/politik-identitas-menggurita-akibatkan-indeks-demokrasi-turun', 'politik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

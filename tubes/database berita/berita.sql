-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 12:02 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `title`, `content`, `image`, `category`, `timestamp`) VALUES
(16, 'BERITA 1', 'Ketua Umum DPP PDI Perjuangan (PDIP) Megawati Soekarnoputri, menyatakan menaruh perhatian penuh terhadap hak cipta dan kekayaan intelektual karya anak bangsa. \r\n\r\nUntuk itu, dia mendorong agar hak cipta tersebut lebih dilindungi. Hal itu disampaikan Megawati seusai mendengarkan lagu dukungan kepada Calon Presiden, Ganjar Pranowo berjudul &#039;Njar Ji Njar Beh&#039; di Sekolah Partai, Lenteng Agung, Jakarta Selatan, Rabu (7/6/2023).\r\n\r\n&quot;Tolong disuarakan, diinformasikan, karena masih banyak para seniman kita begitu polos, dan bukan hanya seniman tapi rakyat yang telah membuat (karya), mempresentasikan hasilnya itu, karena polos, maka tidak tahu karena itu ada hak cipta dia. Maka seharusnya dengan hukumnya adalah HAKI, yaitu dipatenkan,&quot; kata Megawati.\r\n\r\nDia menjelaskan, Indonesia sudah punya undang-undang yang mengatur tentang hak cipta dan kekayaan intelektual untuk melindungi karya anak bangsa. Ini dibuktikan dengan kehadiran Hak Atas Kekayaan Intelektual (HAKI).\r\n\r\nOleh karenanya, Presiden Ke-5 RI itu mengaku sudah berbicara dengan Presiden Jokowi agar mendorong rakyat memiliki kesadaran mematenkan karya mereka. Dia mewanti-wanti agar semua hasil karya anak bangsa benar-benar didaftarkan ke HAKI.\r\n\r\n&quot;Banyak anak-anak muda kita, setelah saya jadi ketua dewan pengarah BRIN, itu kasihan sekali ya. Karena mencipatkan sesuatu, tapi karena dia butuh untuk kehidupannya, tanpa mengerti bahwa ada yang melindungi, yang namanya HAKI ini, terus (hak paten itu) dijual kepada orang lain. Itu menurut saya sangat disayangkan,&quot; ujarnya.\r\n\r\nSebagai Ketua Dewan Pengarah Badan Riset Nasional (BRIN), Megawati menyebut tak jarang dirinya sering menerima pertanyaan apakah mereka memiliki hak materi dari karya yang diciptakan.', '647f19830a995.jpeg', 'politik', '2023-06-06 11:33:23'),
(23, 'Klub Barunya Ternyata Juru Kunci MLS, Mampukah Messi Jadi Penyelamat?', 'Saga transfer Lionel Messi tak berlangsung lama usai resmi keluar dari PSG. Sang megabintang sudah memastikan akan bergabung dengan Inter Miami, klub Major League Soccer (MLS) di Amerika Serikat.\r\n&quot;Aku sudah memutuskan akan ke Miami,&quot; kata Messi kepada Diario Sport dan Mundo Deportivo, seperti dilansir detikSepakbola, Kamis (8/6/2023).\r\n\r\nMessi menyebut dirinya mendapatkan banyak tawaran dari klub-klub Eropa. Namun Messi menegaskan di Eropa, dirinya hanya mau bermain untuk Barcelona.\r\n\r\n&quot;Setelah juara Piala Dunia dan tak bisa ke Barca, sudah waktunya aku ke MLS untuk menjalankan kehidupan yang berbeda dalam sepakbola dan lebih menikmati hari-hariku,&quot; ujar peraih 7 gelar Ballon D&#039;or itu.\r\n\r\nKiprah Messi pun langsung dinanti-nanti. Apalagi klub barunya kini sedang terpuruk di MLS.\r\n\r\nKlub milik legenda Manchester United, David Beckham, itu sementara menjadi juru kunci klasemen MLS Wilayah Timur. Dari 15 tim di wilayah tersebut, Inter Miami berada di posisi buncit dengan raihan 15 poin dari 16 laga dari raihan 5 kali menang dan 11 kali kalah.\r\n\r\nMenilik klasemen MLS keseluruhan, yang juga berisikan tim-tim dari Wilayah Barat, posisi Inter Miami pun cuma sedikit lebih baik dengan berada di posisi ke-27 dari 29 tim. Cuma lebih baik ketimbang Colorado Rapids (13 poin) dan LA Galaxy (12 poin).\r\n\r\nSituasi itu pula yang membuat Inter Miami baru saja berpisah dengan pelatihnya, Phil Neville yang dipecat 1 Juni lalu. Neville digantikan Javier Morales selaku pelatih interim.\r\n\r\nDi sisi lain, La Pulga juga tak mau mengesankan dirinya ke Inter Miami cuma sekadar untuk &#039;liburan&#039; sehingga tetap memberi penegasan dirinya penuh komitmen dalam membantu tim meraih kemenangan. Dan Inter Miami memang sungguh butuh bantuan.\r\n\r\n&quot;Tentu saja aku juga akan tetap memikul penuh tanggung jawab dan hasrat menang, dan tampil dengan baik, tapi dengan perasaan yang lebih tenang,&quot; tutur megabintang asal Argentina tersebut.', '64848b276cc01.jpeg', 'olahraga', '2023-06-09 16:41:02');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `news_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `created_at`, `news_id`) VALUES
(10, 'Apapun klubnya Ronaldo tetap Goat ', '2023-06-09 16:41:47', 23);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'rafiakem', '$2y$10$7lKKYhRgOScBfTOpkDkApeUJCOspIU7Cz/fHk9C17qsyGjUauVR7.'),
(2, 'akem', '$2y$10$J.EWC2hWvtw/bypVrNNuCe.5d6xOIZHfLV4KpV.F3Sm.ZAw8.Iz3m'),
(4, 'ronaldo', '$2y$10$RoHOMx3tJLzs2D/FosWZRudJeVZAKK/z3gfiAErqtmVD0Zsnbbv5m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_USER` (`news_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_USER` FOREIGN KEY (`news_id`) REFERENCES `berita` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

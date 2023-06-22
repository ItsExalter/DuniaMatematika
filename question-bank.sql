-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 10:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dunia-matematika`
--

-- --------------------------------------------------------

--
-- Table structure for table `question-bank`
--

CREATE TABLE `question-bank` (
  `id` int(11) NOT NULL,
  `question_type` varchar(16) NOT NULL,
  `question` varchar(255) NOT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `d` varchar(255) NOT NULL,
  `e` varchar(255) NOT NULL,
  `true_answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question-bank`
--

INSERT INTO `question-bank` (`id`, `question_type`, `question`, `img_path`, `a`, `b`, `c`, `d`, `e`, `true_answer`) VALUES
(1, 'latihan', 'Diketahui titik A(−3,4). Pernyataan yang tepat mengenai posisi titik A pada bidang Kartesius adalah...', NULL, '3 satuan di atas sumbu x dan 4 satuan di kiri sumbu y', '4 satuan di atas sumbu x dan 3 satuan di kiri sumbu y', '3 satuan di bawah sumbu x dan 4 satuan di kanan sumbu y', '\r\n4 satuan di bawah sumbu x dan 3 satuan di kanan sumbu y', '4 satuan di bawah sumbu x dan 2 satuan di kanan sumbu ', 'b'),
(2, 'latihan', 'Perhatikan Gambar di atas!, Titik A dan E berturut-turut berkoordinat...', './assets/img/soal/img-1.png', '(0,2) dan (2, -4)', '(2,0) dan (4,-2)', '(0,2) dan (-4,2)', '(2,0) dan (-4,2)', '(2,0) dan (4,2)', 'a'),
(3, 'latihan', 'Perhatikan Gambar di atas!, Titik yang berjarak 3 satuan di atas sumbu x dan berjarak 5 satuan di kanan sumbu-y adalah ...', './assets/img/soal/img-1.png', 'A', 'B', 'C', 'D', 'E', 'b'),
(4, 'latihan', 'Perhatikan Gambar di atas!, Sebuah pesawat semula berada di titik A. Pesawat itu bergerak 3 satuan ke selatan, lalu belok ke arah barat sejauh 4 satuan, dan belok ke arah utara sejauh 2 satuan. Koordinat pesawat tersebut saat ini adalah ', './assets/img/soal/img-2.png', '(-3,-1)', '(3,-1)', '(-3,1)', '(5,-1)', '(4,1)', 'c'),
(5, 'latihan', 'Diketahui koordinat  P (4,4), Q(−2,4), R(4,−4), dan S(4,−2). Pasangan titik berikut yang bila dihubungkan menggunakan garis lurus membentuk garis yang sejajar dengan sumbu-X adalah ', NULL, 'P dan S\r\n\r\n', 'P dan R\r\n', 'P dan Q\r\n', 'R dan S', 'S dan Q', 'c'),
(6, 'latihan', 'Diketahui titik P(−2,3), Q(2,3), R(0,−3), dan S(−4,−3). Jika PQRS dihubungkan, maka terbentuk segi empat yang luasnya adalah ... satuan luas.', NULL, '20\r\n', '22', '24', '26', '27', 'c'),
(7, 'latihan', 'Perhatikan Gambar di atas!, Luas daerah yang diraster pada gambar di bawah adalah ... satuan luas.', './assets/img/soal/img-3.png', '13,5\r\n\r\n', '21,0\r\n', '23,5\r\n', '31,0\r\n', '30,0', 'd'),
(8, 'latihan', 'PQRS merupakan bangun trapesium siku-siku. Koordinat titik P, Q, dan R berturut-turut adalah (−3,2), (5,2), dan (2,−2). Titik S terletak pada koordinat ⋯⋅', NULL, '(−2,3)\r\n', '(2,-3)\r\n', '(2,3)\r\n', '(-3, -2)\r\n', '(3,2)', 'd'),
(9, 'latihan', 'Diketahui titik K(4,3) dan L(−5,3). Jika dibuat garis yang melalui kedua titik tersebut, maka kedudukan garis tersebut adalah ', NULL, 'berimpit dengan sumbu-Y\r\n\r\n', 'tegak lurus terhadap sumbu-X\r\n', 'sejajar dengan sumbu-Y\r\n', 'sejajar dengan sumbu-X\r\n', 'berimpit dengan sumbu X', 'd'),
(10, 'latihan', 'Diketahui titik K(5,3), L(2,3), M(−3,−1), N(−3,5), dan O(2,−2). Setiap dua titik dihubungkan menggunakan garis lurus. Pasangan garis yang saling berpotongan adalah ', NULL, 'KN dan LM\r\n\r\n', 'KM dan LN\r\n', 'MN dan LO\r\n', 'KL dan MN\r\n', 'MN dan KO', 'd'),
(11, 'evaluasi', 'Jarak titik A(10, 9) ke titik B (2, 3) adalah', NULL, '8\r\n', '9\r\n', '10\r\n', '11\r\n', '12\r\n', 'c'),
(12, 'evaluasi', 'Perhatikan Gambar di atas!, Jarak dari titik P ke titik Q adalah...', './assets/img/soal/img-4.png', '3 Satuan\r\n', '4 Satuan\r\n', '6 Satuan\r\n', '5 Satuan\r\n', '7 Satuan\r\n', 'a'),
(13, 'evaluasi', 'Perhatikan Gambar di atas!, Keliling bangun ABC adalah...', './assets/img/soal/img-4.png', '2 + √32 satuan\r\n', '3 + √34 satuan\r\n', '8 + √34 satuan\r\n', '5 + √35 satuan\r\n', '6 + √35 satuan', 'c'),
(14, 'evaluasi', 'Diketahui titik A(-2, 5), B(0, 4), C(2, -3), dan D(-3, 0). Titik yang jaraknya paling dekat dengan titik asal O adalah...', NULL, 'Titik A', 'Titik B', 'Titik C', 'Titik D', 'Titik E', 'd'),
(15, 'evaluasi', 'Jarak titik B(7, -6) terhadap sumbu X dan sumbu Y adalah...', NULL, 'Terletak di bawah sumbu x dan sebelah kiri sumbu y\r\n', 'Terletak di bawah sumbu x dan sebelah kanan sumbu y', 'Terletak di atas sumbu x dan sebelah kanan sumbu y\r\n\r\n', 'Terletak di atas sumbu x dan sebelah kiri sumbu y\r\n', 'Terletak di atas sumbu y dan sebelah kiri sumbu y', 'b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question-bank`
--
ALTER TABLE `question-bank`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question-bank`
--
ALTER TABLE `question-bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

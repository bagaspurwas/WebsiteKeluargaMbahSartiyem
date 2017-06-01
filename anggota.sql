-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2017 at 09:27 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `Cabang` varchar(64) NOT NULL,
  `Nama` varchar(8192) NOT NULL,
  `Jenis Kelamin` tinyint(1) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Domisili` varchar(8192) NOT NULL,
  `Tree` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--
/*SUMEDI*/
INSERT INTO `anggota` (`Cabang`, `Nama`, `Jenis Kelamin`, `Status`, `Domisili`, `Tree`) VALUES
('Sumedi', 'Sumedi', 1, 1, 'Tanggung Santren, Blitar, Jawa Timur', '0'),
('Sumedi', 'Sukatri', 0, 0, 'Tanggung Santren, Blitar, Jawa Timur', '0x'),
	('Sumedi', 'Agustina Yekti', 0, 1, 'Tanggung Santren, Blitar, Jawa Timur', '11'),
	('Sumedi', 'Soetiknar', 1, 1, 'Tanggung Santren, Blitar, Jawa Timur', '11x'),
		('Sumedi', 'Bagas Purwa Sentika', 1, 1, 'Tanggung Santren, Blitar, Jawa Timur', '21x1'),
		('Sumedi', 'Aris Budiaji Sentika', 1, 1, 'Tanggung Santren, Blitar, Jawa Timur', '21x2'),
/*SUMINGAH*/
('Sumingah', 'Sumingah', 0, 0, 'Kledan, Nglegok, Blitar, Jawa Timur', '0'),
('Sumingah', 'Supriyadi', 1, 1, 'Kledan, Nglegok, Blitar, Jawa Timur', '0x'),
	/*Sugito*/
	('Sumingah', 'Sugito', 1, 1, 'Sintang, Kalimantan Barat', '11'),
	('Sumingah', 'Suprihatin', 0, 1, 'Sintang, Kalimantan Barat', '11x'),
		('Sumingah', 'Siti Rohmawati', 0, 1, 'Surabaya, Jawa Timur', '21x1'),
		('Sumingah', 'Dedik Sanjaya', 1, 1, 'Surabaya, Jawa Timur', '21x1x'),
			('Sumingah', 'Vanya', 0, 1, 'Surabaya, Jawa Timur', '31x1x1'),
			('Sumingah', 'Jamil Avatan', 1, 1, 'Surabaya, Jawa Timur', '31x1x2'),
			('Sumingah', 'Rere', 0, 1, 'Surabaya, Jawa Timur', '31x1x3'),
		('Sumingah', 'Hadi Supriyono', 1, 1, 'Sintang, Kalimantan Barat', '21x2'),
	('Sumingah', 'Maryati', 0, 1, 'Sintang, Kalimantan Barat', '11y'),
		('Sumingah', 'Moyo Martono', 1, 1, 'Pinuh, Kalimantan Barat', '21y1'),
		('Sumingah', 'Suminda', 0, 1, 'Pinuh, Kalimantan Barat', '21y1x'),
			('Sumingah', 'Fadilah Pandu Aji', 1, 1, 'Pinuh, Kalimantan Barat', '21y1x1'),
		('Sumingah', 'Luki Martina', 0, 1, 'Sintang, Kalimantan Barat', '21y2'),
		('Sumingah', 'Murti Anjani', 0, 1, 'Pinuh, Kalimantan Barat', '21y3'),
		('Sumingah', 'Sasmito', 1, 1, 'Pinuh, Kalimantan Barat', '21y3x'),
		('Sumingah', 'Sungging Tawa', 1, 1, 'Sintang, Kalimantan Barat', '21y4'),
	('Sumingah', 'Sumi', 0, 1, 'Sintang, Kalimantan Barat', '11z'),
	/*Alkiyah*/
	('Sumingah', 'Alkiyah', 0, 1, 'Betek, Klojen, Malang, Jawa Timur', '12'),
	('Sumingah', 'Paidi', 1, 1, 'Betek, Klojen, Malang, Jawa Timur', '12x'),
		('Sumingah', 'Diah Kistinawati', 0, 1, 'Proboliggo, Jawa Timur', '22x1'),
		('Sumingah', 'Donald', 1, 1, 'Proboliggo, Jawa Timur', '22x1x'),
			('Sumingah', 'Alexandra Rafael Finalio Boy', 1, 1, 'Proboliggo, Jawa Timur', '32x1x1'),
		('Sumingah', 'Krisma Yusafet', 1, 1, 'Jakarta', '22x2'),
		('Sumingah', 'Sely', 0, 1, 'Jakarta', '22x2x'),
			('Sumingah', 'Cherisse Ivanata Yusafet', 0, 1, 'Jakarta', '32x2x1'),
			('Sumingah', '?--?', 0, 1, 'Jakarta', '32x2x2'),
		('Sumingah', 'Yustin Kristiana', 0, 1, 'Betek, Klojen, Malang, Jawa Timur', '22x3'),
		('Sumingah', 'Yustinus', 1, 1, 'Betek, Klojen, Malang, Jawa Timur', '22x3x'),
		('Sumingah', 'Semwah Yudho', 1, 1, 'Betek, Klojen, Malang, Jawa Timur', '22x4'),
	/*Ropiah*/
	('Sumingah', 'Ropiah', 0, 1, 'Surabaya, Jawa Timur', '13'),
	('Sumingah', 'Herman', 1, 1, 'Surabaya, Jawa Timur', '13x'),
		('Sumingah', 'Winda Mayasari', 0, 1, 'Surabaya, Jawa Timur', '23x1'),
		('Sumingah', 'Efendi', 1, 1, 'Surabaya, Jawa Timur', '23x1x'),
			('Sumingah', 'Barnabas Efendi', 1, 1, 'Surabaya, Jawa Timur', '33x1x1'),
		('Sumingah', 'Adit Sandono Putro', 1, 1, 'Surabaya, Jawa Timur', '23x2'),
		('Sumingah', 'Mari Pangestu', 1, 1, 'Surabaya, Jawa Timur', '23x3'),
		('Sumingah', 'Windi Antika Sari', 0, 1, 'Surabaya, Jawa Timur', '23x4'),
		('Sumingah', 'Ayu Puspita Sari', 0, 1, 'Surabaya, Jawa Timur', '23x5'),
		('Sumingah', 'Elok Pramesti', 0, 1, 'Surabaya, Jawa Timur', '23x6'),
		('Sumingah', 'Canggih Waluyo Jati', 1, 0, 'Surabaya, Jawa Timur', '23x7'),
		('Sumingah', 'Wilujeng Anggoro', 1, 1, 'Surabaya, Jawa Timur', '23x8'),
		('Sumingah', 'Dita Dwi Cahyati', 0, 1, 'Surabaya, Jawa Timur', '23x9'),
	/*Jumiati*/
	('Sumingah', 'Jumiati', 0, 1, 'Lamongan, Jawa Timur', '14'),
	('Sumingah', 'Ngatino', 1, 1, 'Lamongan, Jawa Timur', '14x'),
		('Sumingah', 'Anastasia Novita Dewi', 0, 1, 'Lamongan, Jawa Timur', '24x1'),
		('Sumingah', 'Valensia Dwi Kristiani', 0, 1, 'Lamongan, Jawa Timur', '24x2'),
		('Sumingah', 'Yosia Anugrah Pakerti', 1, 1, 'Lamongan, Jawa Timur', '24x3'),
	/*Nurhayati*/
	('Sumingah', 'Nurhayati', 0, 1, 'Surabaya, Jawa Timur', '15'),
	('Sumingah', 'Sunaryo', 1, 1, 'Surabaya, Jawa Timur', '15x'),
		('Sumingah', 'Gea Agustin Fransiska', 0, 1, 'Surabaya, Jawa Timur', '25x1'),
	/*Ahmad Sumaji*/
	('Sumingah', 'Ahmad Sumaji', 1, 1, 'Jurang Sembot, Sentul, Blitar, Jawa Timur', '16'),
	('Sumingah', 'Francisca Lenny Mahagia', 0, 1, 'Jurang Sembot, Sentul, Blitar, Jawa Timur', '16x'),
		('Sumingah', 'Sekar Anugrah Pakerti Mahagia', 0, 1, 'Jurang Sembot, Sentul, Blitar, Jawa Timur', '26x1'),
/*KASENO*/
('Kaseno', 'Kaseno', 1, 0, 'Sembot, Sentul, Blitar, Jawa Timur', '0'),
('Kaseno', 'Sarilah', 0, 1, ', Jawa Timur', '0x'),
	('Kaseno', 'Subroto', 1, 1, 'Pontianak, Kalimantan Barat', '11'),
	('Kaseno', 'Sumiati', 0, 1, 'Pontianak, Kalimantan Barat', '11x'),
		('Kaseno', 'Guntur Wicaksono', 1, 1, 'Pontianak, Kalimantan Barat', '21x1'),
		('Kaseno', 'Nugroho Wisnu Murti', 1, 1, 'Pontianak, Kalimantan Barat', '21x2'),
('Kaseno', 'Sutrimah', 0, 1, 'Sembot, Sentul, Blitar, Jawa Timur', '0y'),
	('Kaseno', 'Suharmiati', 0, 1, 'Sembot, Sentul, Blitar, Jawa Timur', '1y1'),
	('Kaseno', 'Muhajir', 1, 0, 'Sembot, Sentul, Blitar, Jawa Timur', '1y1x'),
		('Kaseno', 'Ira Nur Diana Azizah', 0, 1, 'Sembot, Sentul, Blitar, Jawa Timur', '21y1x1'),
		('Kaseno', 'M. Khamim', 1, 1, 'Sembot, Sentul, Blitar, Jawa Timur', '21y1x1x'),
			('Kaseno', 'Icha Lutfiana Sari', 0, 1, 'Sembot, Sentul, Blitar, Jawa Timur', '31y1x1x1'),
		('Kaseno', 'Fima Nur Ardiansyah', 0, 1, 'Sembot, Sentul, Blitar, Jawa Timur', '21y1x2'),
	('Kaseno', 'Suhendi Wibowo', 1, 1, 'Jatimalang, Sentul, Blitar, Jawa Timur', '1y2'),
	('Kaseno', 'Suliana (div)', 0, 1, '?', '1y2x'),
		('Kaseno', 'Tabah Adi Nugroho', 1, 1, '?, Jawa Barat', '22y2x1'),
	('Kaseno', 'Puji', 0, 1, 'Jatimalang, Sentul, Blitar, Jawa Timur', '1y2y'),
		('Kaseno', 'Nanda Febi Lita Karindra', 0, 1, 'Jatimalang, Sentul, Blitar, Jawa Timur', '22y2y1'),
		('Kaseno', 'Nanda Firman Yovi Anggraditya', 1, 1, 'Jatimalang, Sentul, Blitar, Jawa Timur', '22y2y2'),
('Kaseno', 'Kartumi', 0, 0, 'Sembot, Sentul, Blitar, Jawa Timur', '0z'),
/*SUKENI*/
('Sukeni', 'Sukeni', 1, 0, 'Sumatra', '0'),
('Sukeni', 'Tun', 0, 1, 'Sumatra', '0x'),
/*SUKARJI*/
('Sukarji', 'Sukarji', 1, 0, 'Tanggung Santren, Blitar, Jawa Timur', '0'),
('Sukarji', 'Mustipah', 0, 1, 'Tanggung Santren, Blitar, Jawa Timur', '0x'),
	('Sukarji', 'Yulaikah', 0, 1, 'Tanggung Santren, Blitar, Jawa Timur', '11'),
	('Sukarji', 'Eko Suwarsono', 1, 1, 'Tanggung Santren, Blitar, Jawa Timur', '11x'),
		('Sukarji', 'Gina Lutfiana', 0, 1, 'Tanggung Santren, Blitar, Jawa Timur', '21x1'),
		('Sukarji', 'Muhammad Irfan Rizaldi', 1, 1, 'Tanggung Santren, Blitar, Jawa Timur', '21x2'),
	('Sukarji', 'Lis Wulandari', 0, 1, 'Tanggung Santren, Blitar, Jawa Timur', '12'),
		('Sukarji', 'Anisa Indah Suryani', 0, 1, 'Tanggung Santren, Blitar, Jawa Timur', '22x1'),
		('Sukarji', 'Iqbal Abiyu Hazi', 1, 1, 'Tanggung Santren, Blitar, Jawa Timur', '22x2'),
	('Sukarji', 'Handri Yuniawan', 1, 1, 'Papungan, Blitar, Jawa Timur', '13'),
	('Sukarji', 'Titik Erfianti', 0, 1, 'Papungan, Blitar, Jawa Timur', '13x'),
		('Sukarji', 'Jasmine Khansa Putri Yuniawan', 0, 1, 'Papungan, Blitar, Jawa Timur', '23x1'),
/*SUHARTI*/
('Suharti', 'Suharti', 0, 1, 'Kademangan, Blitar, Jawa Timur', '0'),
('Suharti', 'Supingi', 1, 0, 'Kademangan, Blitar, Jawa Timur', '0x'),
	('Suharti', 'Suhardi', 1, 1, 'Udanawu, Blitar, Jawa Timur', '11'),
	('Suharti', 'Sulastri', 0, 1, 'Udanawu, Blitar, Jawa Timur', '11x'),
		('Suharti', 'Sevi Diana', 0, 1, 'Udanawu, Blitar, Jawa Timur', '21x1'),
	('Suharti', 'Suharmaji', 1, 1, 'Kledan, Blitar, Jawa Timur', '12'),
	('Suharti', 'Wiji (div)', 0, 1, 'Kledan, Blitar, Jawa Timur', '12x'),
		('Suharti', 'Hendra Agung Wijaya', 1, 1, 'Kledan, Blitar, Jawa Timur', '22x1'),
	('Suharti', 'Agustin', 0, 1, 'Kledan, Blitar, Jawa Timur', '12y'),
	('Suharti', 'Sri Hartatik', 0, 1, 'Surabaya, Jawa Timur', '13'),
	('Suharti', 'Winaji', 1, 1, 'Surabaya, Jawa Timur', '13x'),
		('Suharti', 'Gryshelda Winna Talya', 0, 1, 'Surabaya, Jawa Timur', '23x1'),
	('Suharti', 'Suhartanto', 1, 1, 'Kademangan, Blitar, Jawa Timur', '14'),
	('Suharti', 'Ratna', 0, 1, 'Kademangan, Blitar, Jawa Timur', '14x'),
		('Suharti', 'Mochammad Alfian', 1, 1, 'Kademangan, Blitar, Jawa Timur', '24x1'),
		('Suharti', 'Alfina Dwinata', 0, 1, 'Kademangan, Blitar, Jawa Timur', '24x2'),
/*RUJIMAN*/
('Rujiman', 'Rujiman', 1, 1, 'Kledan, Blitar, Jawa Timur', '0'),
('Rujiman', 'Linatun', 0, 1, 'Kledan, Blitar, Jawa Timur', '0x'),
	('Rujiman', 'Asprianto', 1, 1, 'Kledan, Blitar, Jawa Timur', '11'),
	('Rujiman', 'Likanah', 0, 1, 'Kledan, Blitar, Jawa Timur', '11x'),
		('Rujiman', 'Okky Arya Pratama', 1, 1, 'Kledan, Blitar, Jawa Timur', '21x1'),
		('Rujiman', 'Setiawan Dwi Apriliana Nanda', 1, 1, 'Kledan, Blitar, Jawa Timur', '21x2'),
		('Rujiman', 'Fadilla Aprilia Fernando', 1, 1, 'Kledan, Blitar, Jawa Timur', '21x3'),
	('Rujiman', 'Ruliana Susiana', 0, 1, 'Kledan, Blitar, Jawa Timur', '12'),
	('Rujiman', 'Moh. Shofwan Helmi', 1, 1, 'Kledan, Blitar, Jawa Timur', '12x'),
		('Rujiman', 'Nurul Intan Anugrah', 0, 1, 'Kledan, Blitar, Jawa Timur', '22x1'),
		('Rujiman', 'Helsi Tsurayya Kautsar', 0, 1, 'Kledan, Blitar, Jawa Timur', '22x2'),
		('Rujiman', 'Salva Aisha Prabaningrum', 0, 1, 'Kledan, Blitar, Jawa Timur', '22x3'),
		('Rujiman', 'Khusnul Khotimah', 0, 1, 'Kledan, Blitar, Jawa Timur', '22x4'),
/*SRINATUN*/
('Srinatun', 'Srinatun', 0, 0, 'Kledan, Blitar, Jawa Timur', '0'),
('Srinatun', 'Syukur', 1, 1, 'Kledan, Blitar, Jawa Timur', '0x'),
	('Srinatun', 'Ninik Sulistyani', 0, 0, 'Kledan, Blitar, Jawa Timur', '1x1'),
('Srinatun', 'Sukani', 1, 1, 'Kledan, Blitar, Jawa Timur', '0y'),
	('Srinatun', 'Iin Handayani', 0, 1, 'Kledan, Blitar, Jawa Timur', '1y1'),
	('Srinatun', 'Budiono', 1, 1, 'Kledan, Blitar, Jawa Timur', '1y1x'),
		('Srinatun', 'Anindita Retnowati', 0, 1, 'Kledan, Blitar, Jawa Timur', '21y1x1');




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

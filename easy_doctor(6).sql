-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Mei 2017 pada 12.45
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easy_doctor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_rs`
--

CREATE TABLE `admin_rs` (
  `id_hospital` int(11) NOT NULL,
  `hospital_name` text NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone_number` text NOT NULL,
  `street` varchar(24) NOT NULL,
  `city` text NOT NULL,
  `province` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(45) NOT NULL,
  `photo_rs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_rs`
--

INSERT INTO `admin_rs` (`id_hospital`, `hospital_name`, `email`, `phone_number`, `street`, `city`, `province`, `username`, `password`, `photo_rs`) VALUES
(1, '', 'pmi@bogor.com', '', '', '', '', 'pmibogor', 'pmu', 'img/3a82ded65f24dec0966e7d29dce0a70f.jpg'),
(2, 'siloam', 'siloam@gmail.com', '', '', '', '', 'siloam', 's', ''),
(3, 'hanum', 'a@a.com', '', 'a', 'a', 'a', 'hanum', 'a', 'img/'),
(4, 'siloam', 'siloam@gmail.com', '1', 's', 's', 's', 'siloam', 's', 'img/'),
(5, 'Siloam', 'siloam@gmail.com', '08783762718', 'meranti', 'Bogor', 'jawa barat', 'siloam', 'hehe', 'img/'),
(6, 'Rahayu', 'rahayu@gmail.com', '0859327841234', 'Subur', 'Kembang', 'jawa barat', 'admin_rahayu', 'haha', 'img/2560x1440-black-solid-color-background.jpg'),
(8, 'andhi', 'ankarayu@gmail.com', '1', '', '', '', '', '', ''),
(9, 'hah', 'rahayu@gmail.com', '1', '', '', '', '', '', ''),
(10, 'nori', 'nori@gmail.com', '1', 'meranti', 'Bogor', 'jawa barat', 'noriku', 'nori', 'img/haduh.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `booking_schedule` varchar(50) NOT NULL,
  `queue_number` int(10) NOT NULL,
  `status` int(1) NOT NULL,
  `patient_id` varchar(10) NOT NULL,
  `doctor_id` varchar(10) NOT NULL,
  `hospital_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `doctor`
--

CREATE TABLE `doctor` (
  `id_doctor` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number_doc` text NOT NULL,
  `photo_doctor` varchar(100) NOT NULL,
  `id_hospital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `doctor`
--

INSERT INTO `doctor` (`id_doctor`, `name`, `email`, `phone_number_doc`, `photo_doctor`, `id_hospital`) VALUES
(10, 'andhi', 'a@a.com', '1', '', 6),
(11, 'Bokep', 'ankarayu@gmail.com', '123', '', 5),
(24, 'andhi', 'ankarayu@gmail.com', '11', '', 2),
(29, 'hiks', 'andhi@gmail.com', '1', 'img/', 2),
(30, 'andhi', 'ankarayu@gmail.com', '123', 'img/', 1),
(31, 'aNN', 'ankarayu@gmail.com', '123', 'img/', 1),
(32, 'a', 'ankarayu@gmail.com', '1', 'img/', 1),
(33, 'a', 'a@a.com', '1', 'img/', 1),
(34, 'a', 'a@a.com', '1', 'img/', 1),
(35, 'a', 'ankarayu@gmail.com', '1', 'img/', 1),
(36, 'a', 'ankarayu@gmail.com', '1', 'img//', 1),
(37, '1', 'q@ed', '2', 'img//', 1),
(38, '1', 'a@we', '11', 'img//', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_dokter`
--

CREATE TABLE `jadwal_dokter` (
  `id_jadwal` varchar(10) NOT NULL,
  `id_doctor` varchar(10) NOT NULL,
  `senin` int(11) NOT NULL,
  `selasa` int(11) NOT NULL,
  `rabu` int(11) NOT NULL,
  `kamis` int(11) NOT NULL,
  `jumat` int(11) NOT NULL,
  `sabtu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `patient`
--

CREATE TABLE `patient` (
  `id_patient` int(13) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone_number` text NOT NULL,
  `birth_date` date NOT NULL,
  `password` varchar(45) NOT NULL,
  `other_password` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `photo_patient` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `patient`
--

INSERT INTO `patient` (`id_patient`, `username`, `name`, `email`, `phone_number`, `birth_date`, `password`, `other_password`, `address`, `photo_patient`) VALUES
(23, 'hehe', 'andhi', 'hehe@gmail.com', '$086756467543', '0000-00-00', 'hehe', '', 'pci broh', ''),
(24, 'eneng', 'eneng', 'hehe@gmail.com', '08374728246', '0000-00-00', 'hehe', '', 'hehe', 'img/'),
(25, 'a', 'a', 'a@a.com', '1', '0000-00-00', 'x', '', 'a', 'img/'),
(26, 'mamal', 'malika', 'mamal@gmail.com', '082', '0000-00-00', 'mamal', '', 'hehe', 'img/'),
(27, '', '', '', '', '0000-00-00', '', '', '', 'img/'),
(28, '', '', '', '', '0000-00-00', '', '', '', 'img/'),
(29, '', '', '', '', '0000-00-00', '', '', '', 'img/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `specialization`
--

CREATE TABLE `specialization` (
  `id_specialization` varchar(10) NOT NULL,
  `specialization_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_rs`
--
ALTER TABLE `admin_rs`
  ADD PRIMARY KEY (`id_hospital`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id_doctor`);

--
-- Indexes for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id_patient`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`id_specialization`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_rs`
--
ALTER TABLE `admin_rs`
  MODIFY `id_hospital` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id_doctor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id_patient` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

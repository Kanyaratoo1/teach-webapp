-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 05:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `classroom_id` int(11) NOT NULL,
  `classroom_no` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `no1` int(11) DEFAULT NULL,
  `date1` int(11) DEFAULT NULL,
  `no2` int(11) DEFAULT NULL,
  `date2` timestamp NULL DEFAULT NULL,
  `no3` int(11) DEFAULT NULL,
  `date3` timestamp NULL DEFAULT NULL,
  `no4` int(11) DEFAULT NULL,
  `date4` timestamp NULL DEFAULT NULL,
  `no5` int(11) DEFAULT NULL,
  `date5` timestamp NULL DEFAULT NULL,
  `no6` int(11) DEFAULT NULL,
  `date6` timestamp NULL DEFAULT NULL,
  `no7` int(11) DEFAULT NULL,
  `date7` timestamp NULL DEFAULT NULL,
  `no8` int(11) DEFAULT NULL,
  `date8` timestamp NULL DEFAULT NULL,
  `no9` int(11) DEFAULT NULL,
  `date9` timestamp NULL DEFAULT NULL,
  `no10` int(11) DEFAULT NULL,
  `date10` timestamp NULL DEFAULT NULL,
  `no11` int(11) DEFAULT NULL,
  `date11` timestamp NULL DEFAULT NULL,
  `no12` int(11) DEFAULT NULL,
  `date12` timestamp NULL DEFAULT NULL,
  `no13` int(11) DEFAULT NULL,
  `date13` timestamp NULL DEFAULT NULL,
  `no14` int(11) DEFAULT NULL,
  `date14` timestamp NULL DEFAULT NULL,
  `no15` int(11) DEFAULT NULL,
  `date15` timestamp NULL DEFAULT NULL,
  `no16` int(11) DEFAULT NULL,
  `date16` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(4) NOT NULL,
  `title` int(1) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_id` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `student_no` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `title`, `first_name`, `last_name`, `student_id`, `student_no`) VALUES
(1, 1, 'กัญญารัตน์', 'สร้อยสัมฤทธิ์', '1160102060028', 1),
(2, 2, 'ไววิทย์', 'สาธุธรรม', '1160102060044', 2),
(3, 3, 'ศิวภัทร ', 'พูลศิลป์', '1160102060051', 3),
(4, 4, 'กรรณิการ์', 'ุพันธ์ชมภู', '1160102060077', 4),
(5, 5, 'ธวัลพร', 'ชื่นเพ็ง', '1160102060101', 5),
(6, 6, 'ศุภกานต์', 'จิตประไพ', '1160102060119', 6),
(7, 7, 'โสภณวิชญ์', 'เนระแก', '1160102060127', 7),
(8, 8, 'นพรัตน์', 'อำพันศรี', '1160102060135', 8),
(9, 9, 'เบญญาภา', 'บุญยง', '1160102060143', 9),
(10, 10, 'อมรา', 'อมรึก', '1160102060150', 10),
(11, 11, 'สรวิชญ์', 'เกตุศีระ', '1160102060169', 11),
(12, 12, 'ธนวัฒน์ ', 'แนบชัยภูมิ', '1160102060176', 12),
(13, 13, 'ศุภรักษ์', 'อุดมแก้ว', '1160102060184', 13),
(14, 14, 'ณัฏฐณิชา', 'ทะเสนฮด', '1160102060192', 14),
(15, 15, 'วีรภัทร', 'รอดสิน', '1160102060218', 15),
(16, 16, 'ภาคภูมิ', 'เงินสมบัติ', '1160102060226', 16),
(17, 17, 'วิชิต', 'คชสุวรรณ', '1160102060234', 17),
(18, 18, 'กนกวรรณ', 'พ่วงศร', '1160102060259', 18),
(19, 19, 'นราธิป', 'พุฒิเสถียร', '1160102060267', 19),
(20, 20, 'พรธิรา ', 'ดวงพายัพ', '1160102060275', 20),
(21, 21, 'อนุชา', 'อินทร์ประเทือง', '1160102060309', 21),
(22, 22, 'ณัฐมล', 'ไม้ฝาก', '1160102060317', 22),
(23, 23, 'สหรัฐ', 'ร่มไทรทอง', '1160102060333', 23),
(24, 24, 'ศิวกร', 'คุณากันต์', '1160102060341', 24),
(25, 25, 'ธารา', 'ผลอุดม', '1160102060358', 25),
(26, 26, 'จิรัฐติพล', 'นาคทองดี', '1160102060366', 26),
(27, 27, 'ปวรุตม์', 'บุตรจันทรํ', '1160102060374', 28),
(29, 29, 'ณัฐกานต์', 'ทองสุทธิ์', '1160102060382', 29),
(30, 30, 'นพพล', 'และนุช', '1160102060390', 30),
(31, 31, 'ธีรพงษ์', 'บัวสุวรรณ', '1160102060408', 31),
(32, 32, 'ธนกร', 'กลางอรัญ', '1160102060424', 32),
(33, 33, 'ธนวัฒน์', 'รจนาสม', '1160102060432', 33),
(34, 34, 'วันใหม่', 'ศุภราทิตย์', '1160102060440', 34),
(35, 35, 'ณัฐพจน์', 'จันทร์รอด', '1160102060457', 35);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id_subject` int(3) NOT NULL,
  `number_subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject_name` text COLLATE utf8_unicode_ci NOT NULL,
  `class_room` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id_subject`, `number_subject`, `teacher_number`, `subject_name`, `class_room`, `class_time`) VALUES
(1, '023223201', '1', 'การสนับสนุนทางเทคนิค', 'ห้องปฏิบัติการคอมพิวเตอร์ ศษ2-304', '0000-00-00 00:00:00'),
(2, '023214151', '2', 'โครงงานเทคโนโลยีสารสนเทศการศึกษา', 'ห้องบรรยาย ศษ2-306', '0000-00-00 00:00:00'),
(3, '023233071', '3', 'เทคโนโลยีมัลติมีเดียและเเอนิเมชั่น', 'ห้องปฏิบัติการคอมพิวเตอร์ ศษ2-308', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(4) NOT NULL,
  `title` int(1) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `title`, `first_name`, `last_name`, `subject`) VALUES
(1, 1, 'ดร.กิติภูมิ', 'วิภาหัสน์', 23223201),
(2, 2, 'ดร.ปริญญา', 'บรรณเภสัช', 23214151),
(3, 3, 'ผศ.ดร.ปิยนันท์', 'ปานนิ่ม', 23233071);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`classroom_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id_subject`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classroom`
--
ALTER TABLE `classroom`
  MODIFY `classroom_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id_subject` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

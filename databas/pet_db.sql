-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 09:52 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_activity`
--

CREATE TABLE `tb_activity` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_activity`
--

INSERT INTO `tb_activity` (`id`, `picture`, `title`, `detail`, `date`) VALUES
(1, 'activity1.jpg', 'กิจกรรมประกวด น้องหมา', 'รายละเอียดกิจกรรม กิจกรรมประกวด น้องหมา สี่ขา', '2018-05-11 17:00:00'),
(2, 'activity2.jpg', 'กิจกรรมประกวด หมาแมว สุขภาพดี', 'รายละเอียด กิจกรรมประกวด หมาแมว สุขภาพดี ', '2018-05-11 17:00:00'),
(3, 'activity3.jpg', 'กิจกรรม หมาแมว แสนรู้ ร่วมบริจาค', 'รายละเอียดกิจกรรม กิจกรรม หมาแมว แสนรู้ ร่วมบริจาค', '2018-05-11 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_activity_user_like`
--

CREATE TABLE `tb_activity_user_like` (
  `id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_activity_user_like`
--

INSERT INTO `tb_activity_user_like` (`id`, `activity_id`, `user_id`) VALUES
(6, 3, 2),
(7, 2, 2),
(12, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `time_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_donate`
--

CREATE TABLE `tb_donate` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `type` enum('เงินสด','โอน') NOT NULL,
  `price` int(11) NOT NULL,
  `bill` varchar(255) NOT NULL,
  `status` enum('ยังไม่อนุมัติ','อนุมัติ') NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_donate`
--

INSERT INTO `tb_donate` (`id`, `user_id`, `first_name`, `last_name`, `type`, `price`, `bill`, `status`, `date`) VALUES
(7, 2, '-', '-', 'โอน', 200, '5aef3c98b56704.PNG', 'ยังไม่อนุมัติ', '2018-04-06 17:34:16'),
(8, 2, '-', '-', 'โอน', 2, '5aeffe14aaf923.PNG', 'ยังไม่อนุมัติ', '2018-05-07 07:19:48'),
(10, 2, '-', '-', 'โอน', 500, '5af05f3229f54-22-638.jpg', 'อนุมัติ', '2018-05-07 14:18:51'),
(11, 3, '-', '-', 'โอน', 2000, '5af0778f2833fK-Mobile-Banking-PLUS_Transfer-Success.jpg', 'อนุมัติ', '2018-05-12 12:41:30'),
(12, 3, '-', '-', 'โอน', 100, '5af078469e6fdK-Mobile-Banking-PLUS_Transfer-Success.jpg', 'อนุมัติ', '2018-03-07 16:01:53'),
(13, 3, '-', '-', 'โอน', 200, '5af07957862c5K-Mobile-Banking-PLUS_Transfer-Success.jpg', 'อนุมัติ', '2018-02-07 16:09:06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_find_home`
--

CREATE TABLE `tb_find_home` (
  `id` int(11) NOT NULL,
  `own_user_id` int(11) DEFAULT NULL COMMENT 'user เจ้าของสัตว์',
  `pick_user_id` int(11) DEFAULT '0' COMMENT 'user ของคนจอง',
  `picture1` varchar(255) DEFAULT NULL,
  `picture2` varchar(255) DEFAULT NULL,
  `picture3` varchar(255) DEFAULT NULL,
  `detail` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('ยังไม่รับ','รับแล้ว') DEFAULT 'ยังไม่รับ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_find_home`
--

INSERT INTO `tb_find_home` (`id`, `own_user_id`, `pick_user_id`, `picture1`, `picture2`, `picture3`, `detail`, `date`, `status`) VALUES
(4, 1, 2, '5aeeefc16d7821290701877.jpg', '5aeeefc16d78c1376016098-2-o.jpg', '5aeeefc16d7901417056656-1083369348-o.jpg', '<p>\r\n\r\n<b>เพื่อนสี่ขา-สารคาม</b><br>ซอยศุนย์ร่วมจิตร ตำบลตลาด อำเภอเมืองมหาสารคาม จังหวัดมหาสารคาม 44000 <br>FB : <a target="_blank" rel="nofollow" href="http://www.facebook.com/PheunsikhaSarakham">www.facebook.com/PheunsikhaSarakham</a> หรือ <a target="_blank" rel="nofollow" href="http://www.facebook.com/af4dog">www.facebook.com/af4dog</a> <br>Tel. 064-431-2031&nbsp;<br></p>', '2018-05-07 09:33:23', 'ยังไม่รับ'),
(11, 2, 2, '5aeeeeed814243.PNG', '5aeeeeed814304.PNG', '5aeeeeed8143615.jpg', '<p>\r\n\r\n<b>เพื่อนสี่ขา-สารคาม</b><br>ซอยศุนย์ร่วมจิตร ตำบลตลาด อำเภอเมืองมหาสารคาม จังหวัดมหาสารคาม 44000 <br>FB : <a target="_blank" rel="nofollow" href="http://www.facebook.com/PheunsikhaSarakham">www.facebook.com/PheunsikhaSarakham</a> หรือ <a target="_blank" rel="nofollow" href="http://www.facebook.com/af4dog">www.facebook.com/af4dog</a> <br>Tel. 064-431-2031<br></p>', '2018-05-07 15:29:52', 'รับแล้ว'),
(12, 2, 3, '5aef0f7365afd11.jpg', '5aef0f7365b084.PNG', '5aef0f7365b0c13.jpg', '<p>\r\n\r\n<b>เพื่อนสี่ขา-สารคาม</b><br>ซอยศุนย์ร่วมจิตร ตำบลตลาด อำเภอเมืองมหาสารคาม จังหวัดมหาสารคาม 44000 <br>FB : <a target="_blank" rel="nofollow" href="http://www.facebook.com/PheunsikhaSarakham">www.facebook.com/PheunsikhaSarakham</a> หรือ <a target="_blank" rel="nofollow" href="http://www.facebook.com/af4dog">www.facebook.com/af4dog</a> <br>Tel. 064-431-2031\r\n\r\n<br></p>', '2018-05-07 15:44:53', 'รับแล้ว'),
(13, 2, 3, '5af071e18843a31932849_1692750410773830_9029176086998548480_n.jpg', '5af071e18843fK-Mobile-Banking-PLUS_Transfer-Success.jpg', '5af071e188440K-Mobile-Banking-PLUS_Transfer-Success.jpg', '<p>xxx</p>', '2018-05-07 16:29:06', 'ยังไม่รับ'),
(14, 2, 0, '5af072aa02533K-Mobile-Banking-PLUS_Transfer-Success.jpg', '5af072aa0253831932849_1692750410773830_9029176086998548480_n.jpg', '5af072aa02539K-Mobile-Banking-PLUS_Transfer-Success.jpg', '<p>czczcz</p>', '2018-05-07 15:38:34', 'ยังไม่รับ'),
(16, 1, 0, '5af07bca3ff22K-Mobile-Banking-PLUS_Transfer-Success.jpg', '5af07bca3ff30K-Mobile-Banking-PLUS_Transfer-Success.jpg', '5af07bca3ff31K-Mobile-Banking-PLUS_Transfer-Success.jpg', '<p>hhghghghghgh</p>', '2018-05-07 16:16:10', 'ยังไม่รับ'),
(17, 1, 0, '5af07be5900bbK-Mobile-Banking-PLUS_Transfer-Success.jpg', '5af07be5900c0K-Mobile-Banking-PLUS_Transfer-Success.jpg', '5af07be5900c1K-Mobile-Banking-PLUS_Transfer-Success.jpg', '<p>abababababab</p>', '2018-05-07 16:16:37', 'ยังไม่รับ'),
(18, 1, 0, '5af07c0bd7e35K-Mobile-Banking-PLUS_Transfer-Success.jpg', '5af07c0bd7e3aK-Mobile-Banking-PLUS_Transfer-Success.jpg', '5af07c0bd7e3bK-Mobile-Banking-PLUS_Transfer-Success.jpg', '<p>xxxx</p>', '2018-05-07 16:17:15', 'ยังไม่รับ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_heal_pet`
--

CREATE TABLE `tb_heal_pet` (
  `id` int(11) NOT NULL,
  `find_home_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `detail` text,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_heal_pet`
--

INSERT INTO `tb_heal_pet` (`id`, `find_home_id`, `title`, `detail`, `date`) VALUES
(1, 18, 'รักษาโรคลำใส้', 'ตอนนี้รักษาหายดีแล้ว\r\nแต่ตามดูอาการต่อไป', '2018-05-09'),
(2, 17, 'รักษาโรคผิวหนัง', 'รักษาโรคผิวหนัง กำลังจะหาย\r\nตามดูอาการต่อไป', '2018-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_knowledge`
--

CREATE TABLE `tb_knowledge` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_knowledge`
--

INSERT INTO `tb_knowledge` (`id`, `picture`, `header`, `detail`) VALUES
(1, '5af70e11edd3dbg-h.png', 'โรงพยาบาลรักษาสัตว์ xxx', 'xxxxxxxx'),
(6, '5af718884c0a4bg-h.png', 'xxxxxxxxxxxxxx', '<p>xxxxxxxxxxxx</p>'),
(7, '5af720b23a071bg-h.png', 'xxxxxxxxxxxxxx', '<p>xxxxxxxxxxxxxxxxxxxxx</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_object`
--

CREATE TABLE `tb_object` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name_object` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_object`
--

INSERT INTO `tb_object` (`id`, `user_id`, `name_object`, `qty`, `first_name`, `last_name`, `date`) VALUES
(1, 2, 'ลูกบอลสุนัข', 5, '-', '-', '2018-05-06 17:06:09'),
(2, 0, 'อาหารแมว', 7, 'มอนจาส', 'มานจอส', '2018-05-07 12:47:34'),
(3, 1, 'ลูกบอลสุนัข', 3, '-', '-', '2018-05-07 11:52:31'),
(4, 0, 'ลูกบอลสุนัข', 5, 'ป', 'อ', '2018-05-07 12:43:23'),
(5, 0, 'ปอกคอ', 5, 'บี๋', 'เบียร์', '2018-05-07 15:51:01'),
(6, 0, 'จานข้าว', 10, 'บี๋', 'เบียร์', '2018-05-07 15:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_object_out`
--

CREATE TABLE `tb_object_out` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'user คนเบิกของ',
  `name_object` varchar(255) NOT NULL COMMENT 'id สิ่งของ',
  `detail` text NOT NULL,
  `qty` int(11) NOT NULL COMMENT 'จำนวน',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_object_out`
--

INSERT INTO `tb_object_out` (`id`, `user_id`, `name_object`, `detail`, `qty`, `date`) VALUES
(4, 1, 'ลูกบอลสุนัข', '...', 2, '2018-05-07 12:29:13'),
(8, 1, 'อาหารแมว', 'อาหารแมว ', 2, '2018-05-07 13:19:35'),
(9, 1, 'อาหารแมว', 'อาหารแมว ', 1, '2018-05-07 13:21:21'),
(10, 1, 'จานข้าว', 'เอาไปให้เจ้าด่าง อันนึงนะ', 2, '2018-05-07 16:23:26'),
(11, 1, 'จานข้าว', 'ปปป', 1, '2018-05-07 16:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pay_out`
--

CREATE TABLE `tb_pay_out` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'user คนเบิกเงิน',
  `detail` text NOT NULL,
  `money` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pay_out`
--

INSERT INTO `tb_pay_out` (`id`, `user_id`, `detail`, `money`, `date`) VALUES
(1, 1, 'ซื้อข้าว', 50, '2018-05-07 08:32:58'),
(2, 1, 'ซื้ออุปกรณ์', 2000, '2018-05-07 09:52:54'),
(5, 1, 'ค่าไฟ', 501, '2018-05-07 16:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `line` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `first_name`, `last_name`, `address`, `phone`, `facebook`, `email`, `line`) VALUES
(0, '-', '-', 'ไม่มี', '', '', '-', '-', '-', '-'),
(1, 'admin', '1234', 'admin', 'XD', '', '0812345678', 'facebook', 'xxx', 'line'),
(2, 'e1', 'e1', 'สมชาย', 'เทพประทาน', 'บ้านตอง 5 เลขที่ 555 บ้านหนองใส ต.หนองนาคำ อ.เมือง จ.อุดรธานี', 'xxxxxxxxx7', 'xxx', 'xxx', 'xxx'),
(3, 'e2', 'e2', 'สมหมาย', 'หมายปอง', '', '0900000000', 'FB-', 's@mail', 'LINE-'),
(4, 'x', 'x', 'x', 'x', 'xxxxx', 'xxxx', 'xxxx', 'xxx', 'xxx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_activity`
--
ALTER TABLE `tb_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_activity_user_like`
--
ALTER TABLE `tb_activity_user_like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_donate`
--
ALTER TABLE `tb_donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_find_home`
--
ALTER TABLE `tb_find_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_heal_pet`
--
ALTER TABLE `tb_heal_pet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_knowledge`
--
ALTER TABLE `tb_knowledge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_object`
--
ALTER TABLE `tb_object`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_object_out`
--
ALTER TABLE `tb_object_out`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pay_out`
--
ALTER TABLE `tb_pay_out`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_activity`
--
ALTER TABLE `tb_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_activity_user_like`
--
ALTER TABLE `tb_activity_user_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_donate`
--
ALTER TABLE `tb_donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_find_home`
--
ALTER TABLE `tb_find_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tb_heal_pet`
--
ALTER TABLE `tb_heal_pet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_knowledge`
--
ALTER TABLE `tb_knowledge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_object`
--
ALTER TABLE `tb_object`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_object_out`
--
ALTER TABLE `tb_object_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_pay_out`
--
ALTER TABLE `tb_pay_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

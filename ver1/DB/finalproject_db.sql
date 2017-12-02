-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Aug 24, 2017 at 05:54 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `equip_tb`
--

CREATE TABLE `equip_tb` (
  `equip_id` int(11) NOT NULL COMMENT 'รหัสอุปกรณ์',
  `equip_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่ออุปกรณ์',
  `equip_detail` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'รายละเอียดอุปกรณ์',
  `equip_num` int(4) NOT NULL,
  `equip_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รูปอุปกรณ์'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `equip_tb`
--

INSERT INTO `equip_tb` (`equip_id`, `equip_name`, `equip_detail`, `equip_num`, `equip_pic`) VALUES
(2, 'sdadssdads', 'sadsdadsddads', 200, '2.jpg'),
(3, 'หม้อ', 'ไว้ใส่แกง', 200, '3.jpg'),
(4, 'TestPic', 'sdcasccacsac', 2131, '4.jpg'),
(5, 'dasasda', 'sdasdasd', 0, '7XzdZq2oww');

-- --------------------------------------------------------

--
-- Table structure for table `his_tb`
--

CREATE TABLE `his_tb` (
  `his_id` int(11) NOT NULL COMMENT 'รหัสประวัติวัด',
  `his_topic` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'หัวข้อประวัติ',
  `his_detail` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'รายละเอียดประวัติ',
  `his_date` date NOT NULL COMMENT 'วดปที่เพิ่มข่าวสา',
  `his_pic` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รูปประวัติ'
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `his_tb`
--

INSERT INTO `his_tb` (`his_id`, `his_topic`, `his_detail`, `his_date`, `his_pic`) VALUES
(15, 'ขอบเขตวัด', 'วัดสุคันธาราม ตั้งอยู่เลขที่ 73 ถนนสุคันธาราม แขวงสวนจิตรลดา เขตดุสิต กรุงเทพมหานคร สำกัดคณะสงฆ์มหานิกาย มีที่ดินตั้งวัดเนื้อที่ 10 ไร่ 1 งาน 88 ตารางวา โฉนดที่ 4829 เลขที่ 3 ', '2017-05-02', '15.jpg'),
(16, 'อาณาเขตของวัด', '-ทิศเหนือยาว 137 เมตร ติดต่อกับคลองสามเสน \r\n\r\n-ทิศใต้ยาว 146 เมตร ติตต่อกับที่ดินส่วนทรัพย์สินพระมหากษัตริย์ \r\n\r\n-ทิศตะวันออกยาว 8 เมตร ติดต่อกับคลองสามเสนและที่ดินส่วนทรัพย์สินพระมหากษัตริย์ \r\n\r\n-ทิศตะวันตกยาว 133 เมตร ติดต่อกับคลองส้มป่อย พื้นที่ตั้งของวัด เป็นที่ราบลุ่มริม คลองสามเสน การคมนาคมสะดวก มีถนนสุคันธาราม แยกจากถนนพระรามที่ 5', '2017-05-02', '16.jpg'),
(17, 'ประวัติวัดสุคันธาราม', 'วัดสุคันธาราม สร้างเมื่อประมาณปี พ.ศ. 2450 โดยตระกูลสุวรรณมาลิกร่วมกับประชาชนช่วยกันดำเนินการก่อสร้างวัด และได้ขนานนามวัดว่า “วัดใหม่” เพราะเป็นวัดที่สร้างขึ้นหลังวัดอื่นๆ ที่อยู่ในบริเวณใกล้เคียง ต่อมาได้เปลี่ยนนามเป็น “วัดสุคันธาราม” เมื่อใดไม่ปรากฏแต่ก็ใช้กันมาจนถึงทุกวันนี้ การปฏิสังขรณ์เริ่มขึ้นประมาณ พ.ศ. 2488 เป็นต้นมาจนถึงปัจจุบัน วันสุคันธาราม ได้รับพระราชทานวิสุงคามสีมาประมาณ พ.ศ. 2461 หรือก่อนนี้ เขตวิสุงคามสีมากว้าง 15 เมตร ยาง 3 เมตร ได้ผูกพัทธสีมาเมื่อวันที่ 19 มีนาคม พ.ศ. 2463 วัดสุคันธารามได้เปิดสอนพระปริยัติธรรมเริ่มมาตั้งแต่ พ.ศ. 2501 มีห้องสมุด อนามัยของกรุงเทพมหานคร มาให้บริการเป็นประจำ และให้หน่วยราชการใช้ศาลาการเปรียญเป็นที่บริการด้านต่างๆ กับประชาชน ', '2017-05-02', '17.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `import_tb`
--

CREATE TABLE `import_tb` (
  `import_id` int(11) NOT NULL COMMENT 'รหัสสิ่งสำคัญ',
  `import_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อสิ่งสำคัญ',
  `import_detail` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'รายละเอียด',
  `import_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รูปสิ่งสำคัญ',
  `import_area` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'บริเวณที่ตั้ง',
  `import_ref` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ผู้ให้ข้อมูล'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `import_tb`
--

INSERT INTO `import_tb` (`import_id`, `import_name`, `import_detail`, `import_pic`, `import_area`, `import_ref`) VALUES
(4, 'ท้าวมังกรกัณฑ์', 'ยังหาข้อมูลไม่ได้', '4.jpg', 'ข้างสำนักงาน', 'http://watsukhan.blogspot.com/'),
(5, 'ท้าววิรุฬหก', 'ยังหาข้อมูลไม่ได้', '5.jpg', 'ข้างสำนักงาน', 'http://watsukhan.blogspot.com/'),
(6, 'พระปิยมหาราฃ', 'ยังไม่มีข้อมูล', '6.jpg', 'ข้างสำนักงาน', 'http://watsukhan.blogspot.com/'),
(8, 'testttt', 'dasdsadas', '2w4WmwtHrK', 'dadsdads', 'sdadsdsa');

-- --------------------------------------------------------

--
-- Table structure for table `inviequip_tb`
--

CREATE TABLE `inviequip_tb` (
  `inviequip_id` int(11) NOT NULL,
  `inviequip_date` date NOT NULL,
  `inviequip_place` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `inviequip_num` int(3) NOT NULL,
  `mem_id` int(3) NOT NULL,
  `equip_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inviequip_tb`
--

INSERT INTO `inviequip_tb` (`inviequip_id`, `inviequip_date`, `inviequip_place`, `inviequip_num`, `mem_id`, `equip_id`) VALUES
(2, '2017-08-24', 'วัด', 30, 5, 8),
(5, '2017-08-24', 'sadsds', 2, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `invimonk_tb`
--

CREATE TABLE `invimonk_tb` (
  `invimonk_id` int(11) NOT NULL,
  `invimonk_date` date NOT NULL,
  `invimonk_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `invimonk_nummonk` int(2) DEFAULT NULL,
  `monk_status` int(1) NOT NULL DEFAULT '1',
  `mem_id` int(3) DEFAULT NULL,
  `monk_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `invimonk_tb`
--

INSERT INTO `invimonk_tb` (`invimonk_id`, `invimonk_date`, `invimonk_place`, `invimonk_nummonk`, `monk_status`, `mem_id`, `monk_id`) VALUES
(10, '2017-08-23', 'csacasca', 2, 1, 3, 4),
(20, '2017-08-22', 'sdasd', NULL, 1, 4, 5),
(27, '2017-08-22', '[hko', NULL, 1, 5, 1),
(28, '2017-08-25', 'sddads', NULL, 1, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `invipav_tb`
--

CREATE TABLE `invipav_tb` (
  `invipav_id` int(11) NOT NULL,
  `invipav_datefirst` date NOT NULL,
  `invipav_datelast` date NOT NULL,
  `invi_status` int(1) DEFAULT '1',
  `mem_id` int(3) NOT NULL,
  `pav_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `invipav_tb`
--

INSERT INTO `invipav_tb` (`invipav_id`, `invipav_datefirst`, `invipav_datelast`, `invi_status`, `mem_id`, `pav_id`) VALUES
(3, '2017-08-22', '2017-08-25', 2, 1, 9),
(6, '2017-08-26', '2017-08-27', 1, 1, 9),
(7, '2017-08-29', '2017-08-30', 1, 1, 9),
(8, '2017-08-29', '2017-08-30', 1, 1, 9),
(9, '2017-08-30', '2017-08-31', 1, 1, 10),
(10, '2017-08-30', '2017-08-31', 1, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `member_tb`
--

CREATE TABLE `member_tb` (
  `mem_id` int(11) NOT NULL,
  `mem_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mem_tel` int(10) NOT NULL,
  `mem_add` text COLLATE utf8_unicode_ci NOT NULL,
  `mem_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member_tb`
--

INSERT INTO `member_tb` (`mem_id`, `mem_name`, `mem_tel`, `mem_add`, `mem_email`) VALUES
(1, 'dsada', 0, '12312313123', 'wdwdwa'),
(2, 'dasdasdas', 0, 'wqdqwdqwdwqdq', 'weqdwqdqd'),
(3, 'drirri', 2147483647, '9049k4f', 'efjemim'),
(4, 'efewf', 0, 'efefw', 'efwfw'),
(5, 'sdadsa', 0, 'sdadas', 'sdada');

-- --------------------------------------------------------

--
-- Table structure for table `monk_tb`
--

CREATE TABLE `monk_tb` (
  `monk_id` int(11) NOT NULL COMMENT 'รหัสพระ',
  `monk_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อพระ',
  `monk_rank` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ยศ',
  `monk_nick` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ฉายา',
  `monk_season` int(4) NOT NULL COMMENT 'จำนวนพรรษา',
  `monk_pos` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ตำแหน่ง',
  `monk_pic` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รูปพระ'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monk_tb`
--

INSERT INTO `monk_tb` (`monk_id`, `monk_name`, `monk_rank`, `monk_nick`, `monk_season`, `monk_pos`, `monk_pic`) VALUES
(1, 'TesTing', 'OG', 'OGG', 10, 'No', 'fefefee'),
(3, 'oatoat', 'oatja', 'oatja', 0, 'jaja', ''),
(4, 'Baowiw', '3', 'Fc', 10, '-', '4.jpg'),
(5, 'Baowiw', 'Glong', 'Fc', 10, '-', '2.jpg'),
(6, 'Testpicture', 'Testpicture', 'Testpicture', 21, 'Testpicture', 'BoGvrg4mwR');

-- --------------------------------------------------------

--
-- Table structure for table `pav_tb`
--

CREATE TABLE `pav_tb` (
  `pav_id` int(11) NOT NULL COMMENT 'รหัสศาลา',
  `pav_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อศาลา',
  `pav_detail` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'รายละเอียดศาลา',
  `pav_price` int(4) NOT NULL COMMENT 'ราคา',
  `pav_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รูปศาลา'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pav_tb`
--

INSERT INTO `pav_tb` (`pav_id`, `pav_name`, `pav_detail`, `pav_price`, `pav_pic`) VALUES
(9, 'สามัคคีราชวัตรสวัสดี', 'เป็นศาลาที่เก่าแก่ที่สุดภายในวัด', 1200, '9.jpg'),
(10, 'ดวงแก้ว', 'ศาลาที่พึ่งสร้างขึ้นมาใหม่', 2000, '10.jpg'),
(11, 'เสงี่ยม', 'เป็นศาลาที่พึ่งสร้างเพื่ออุทิศให้นายเสงี่ยม', 2000, '11.jpg'),
(12, 'ศาลา2', 'ยังไม่มีข้อมูล', 1200, '12.jpg'),
(13, 'ศาลาทดลอง', 'เป็นการทดลองการ Resize รูป', 1200, 'SguPW5voWX');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `user_id` int(3) NOT NULL,
  `mem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equip_tb`
--
ALTER TABLE `equip_tb`
  ADD PRIMARY KEY (`equip_id`);

--
-- Indexes for table `his_tb`
--
ALTER TABLE `his_tb`
  ADD PRIMARY KEY (`his_id`);

--
-- Indexes for table `import_tb`
--
ALTER TABLE `import_tb`
  ADD PRIMARY KEY (`import_id`);

--
-- Indexes for table `inviequip_tb`
--
ALTER TABLE `inviequip_tb`
  ADD PRIMARY KEY (`inviequip_id`),
  ADD UNIQUE KEY `equip_id` (`equip_id`),
  ADD UNIQUE KEY `user_id` (`mem_id`);

--
-- Indexes for table `invimonk_tb`
--
ALTER TABLE `invimonk_tb`
  ADD PRIMARY KEY (`invimonk_id`),
  ADD UNIQUE KEY `monk_id` (`monk_id`),
  ADD UNIQUE KEY `user_id` (`mem_id`);

--
-- Indexes for table `invipav_tb`
--
ALTER TABLE `invipav_tb`
  ADD PRIMARY KEY (`invipav_id`),
  ADD KEY `user_id` (`mem_id`),
  ADD KEY `pav_id` (`pav_id`);

--
-- Indexes for table `member_tb`
--
ALTER TABLE `member_tb`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `monk_tb`
--
ALTER TABLE `monk_tb`
  ADD PRIMARY KEY (`monk_id`);

--
-- Indexes for table `pav_tb`
--
ALTER TABLE `pav_tb`
  ADD PRIMARY KEY (`pav_id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equip_tb`
--
ALTER TABLE `equip_tb`
  MODIFY `equip_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสอุปกรณ์',AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `his_tb`
--
ALTER TABLE `his_tb`
  MODIFY `his_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสประวัติวัด',AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `import_tb`
--
ALTER TABLE `import_tb`
  MODIFY `import_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสิ่งสำคัญ',AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `inviequip_tb`
--
ALTER TABLE `inviequip_tb`
  MODIFY `inviequip_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `invimonk_tb`
--
ALTER TABLE `invimonk_tb`
  MODIFY `invimonk_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `invipav_tb`
--
ALTER TABLE `invipav_tb`
  MODIFY `invipav_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `member_tb`
--
ALTER TABLE `member_tb`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `monk_tb`
--
ALTER TABLE `monk_tb`
  MODIFY `monk_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสพระ',AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pav_tb`
--
ALTER TABLE `pav_tb`
  MODIFY `pav_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสศาลา',AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `invipav_tb`
--
ALTER TABLE `invipav_tb`
  ADD CONSTRAINT `invipav_tb_ibfk_1` FOREIGN KEY (`pav_id`) REFERENCES `pav_tb` (`pav_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

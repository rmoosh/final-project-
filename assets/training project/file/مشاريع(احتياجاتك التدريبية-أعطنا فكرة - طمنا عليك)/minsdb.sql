-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 أغسطس 2017 الساعة 21:10
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `minsdb`
--

-- --------------------------------------------------------

--
-- بنية الجدول `giveusidea`
--

CREATE TABLE IF NOT EXISTS `giveusidea` (
  `giveus_Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Emp_Id` bigint(20) NOT NULL,
  `giveus_type` varchar(10) NOT NULL,
  `giveus_title` varchar(50) NOT NULL,
  `giveus_topic` text NOT NULL,
  `giveus_Date` datetime NOT NULL,
  `giveus_status` int(11) NOT NULL,
  `email_status` int(11) NOT NULL,
  PRIMARY KEY (`giveus_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- إرجاع أو استيراد بيانات الجدول `giveusidea`
--

INSERT INTO `giveusidea` (`giveus_Id`, `Emp_Id`, `giveus_type`, `giveus_title`, `giveus_topic`, `giveus_Date`, `giveus_status`, `email_status`) VALUES
(1, 1, 'شكوى', 'اختبار شكوى', 'السلام عليكم \nاختبار شكوى اختبار شكوى اختبار شكوى اختبار شكوى\n\nاختبار شكوى اختبار شكوى اختبار شكوى اختبار شكوى', '2017-07-26 00:00:00', 0, 1),
(2, 1, 'إقتراح', 'اختبار اقتراح 2', 'السلام عليكم \r\nاختبار اقتراح اختبار اقتراح اختبار اقتراح اختبار اقتراح\r\nاختبار اقتراح اختبار اقتراح اختبار اقتراح اختبار اقتراح', '2017-07-26 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- بنية الجدول `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `Emp_Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Emp_name` text NOT NULL,
  `Email` text NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Level` int(11) NOT NULL,
  `Active` varchar(10) NOT NULL,
  PRIMARY KEY (`Emp_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- إرجاع أو استيراد بيانات الجدول `register`
--

INSERT INTO `register` (`Emp_Id`, `Emp_name`, `Email`, `Mobile`, `Password`, `Level`, `Active`) VALUES
(1, 'admin', 'admin@gmail.com', '0564475999', 'admin', 2, 'مفعل'),
(2, 'هدى', 'huda15@gmail.com', '0557884338', '1111', 1, 'مفعل'),
(3, 'نوال', 'naeal123@gmail.com', '0509953699', '1111', 1, 'مفعل'),
(4, 'الهنوف', 'alhonuf@hotmail.com', '0544085365', '1111', 1, 'مفعل'),
(5, 'خلود', 'hh2001@gmail.com', '0565656568', '1111', 1, 'غير مفعل');

-- --------------------------------------------------------

--
-- بنية الجدول `sendemail`
--

CREATE TABLE IF NOT EXISTS `sendemail` (
  `send_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Emp_Id` bigint(20) NOT NULL,
  `giveus_title` text NOT NULL,
  `giveus_topic` text NOT NULL,
  `email_from` text NOT NULL,
  `email_to` text NOT NULL,
  `email_date` datetime NOT NULL,
  `email_status` int(11) NOT NULL,
  PRIMARY KEY (`send_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- بنية الجدول `strategicplan`
--

CREATE TABLE IF NOT EXISTS `strategicplan` (
  `splan_Id` int(11) NOT NULL AUTO_INCREMENT,
  `strg_objective` text NOT NULL,
  `strg_general` text NOT NULL,
  PRIMARY KEY (`splan_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- بنية الجدول `strategicplandtl`
--

CREATE TABLE IF NOT EXISTS `strategicplandtl` (
  `splandtl_Id` int(11) NOT NULL AUTO_INCREMENT,
  `splan_Id` int(11) NOT NULL,
  `dept_name` text NOT NULL,
  `strg_detail` text NOT NULL,
  `strg_project` text NOT NULL,
  PRIMARY KEY (`splandtl_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------
-- --------------------------------------------------------


--
-- بنية الجدول `tellus`
--

CREATE TABLE IF NOT EXISTS `tellus` (
`ID` int(10) NOT NULL AUTO_INCREMENT,
 `attend_day` varchar(10) NOT NULL,
 `attend_date` date NOT NULL,
  `Emp_name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
 `dep_name` varchar(50) NOT NULL,
 `emp_type` varchar(10) NOT NULL,
  `attend_type` varchar(10) NOT NULL,
  `attend_why` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `tellus`
--

INSERT INTO `tellus` (`ID`,`attend_day`, `attend_date`, `Emp_name`, `Email`,`dep_name`,`emp_type`,`attend_type`, `attend_why`) VALUES
(1,'الأحد','2017-08-03','خلود','tt@hotmail.com','إدارة التنمية المهنية الأكاديمي','فني','تأخير','ازدحام مروري');

-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `register1` (
  `Emp_Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Emp_name` text NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Emp_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- إرجاع أو استيراد بيانات الجدول `register`
--

INSERT INTO `register1` (`Emp_Id`, `Emp_name`,  `Password` ) VALUES
(1, 'admin', 'admin');




-- --------------------------------------------------------

--
-- بنية الجدول `trainerneeds`
--

CREATE TABLE IF NOT EXISTS `trainerneeds` (
  `QsnID` bigint(20) NOT NULL AUTO_INCREMENT,
  `QsnName` text NOT NULL,
  `trainerneed` text NOT NULL,
  PRIMARY KEY (`QsnID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- إرجاع أو استيراد بيانات الجدول `trainerneeds`
--

INSERT INTO `trainerneeds` (`QsnID`, `QsnName`, `trainerneed`) VALUES
(1, 'هل تبدأ مشاريعك وتنجزها في الوقت المحدد لذلك؟', 'ادارة المشاريع'),
(2, 'هل سبق لك وقمتِ بادارة اجتماع وواجهتي صعوبات؟', 'ادارة الاجتماعات وفرق العمل'),
(3, 'هل تواجهين صعوبه في الحوار والمناقشة مع الاخرين ؟ ', 'الاتصال والعلاقات'),
(4, 'هل سبق لك وقمتي باستخدام خرائط جانت في عمل جدولة لوقتك؟ ', 'خرائط جانت للجدولة الزمنية'),
(5, 'هل لديك القدرة على تولي منصب اشرافي ؟', 'الاشراف والمتابعة'),
(6, 'هل أنتي قادرة على عمل الشي الصحيح بالطريقة الصحيحة؟ ', 'الجودة الشاملة'),
(7, 'هل تمتلكين مهارة تصميم حقيبة تعليمية ؟ ', 'تقييم وتصميم الحقائب'),
(8, 'هل لديك المهارات الاساسية لاستخدام برامج الحاسب ؟ ', 'الحاسب والتقنية'),
(9, 'هل لديك القدرة على إدارة مشروع والاتصال بأعضاء الفريق وإقناعهم بالمهام بسلاسه  ؟ ', 'الادارة والاقناع'),
(10, 'هل لديك قدرة على وضع خطة لعملك وتنفيذها ضمن الوقت المحدد ؟', 'التخطيط الاستراتيجي'),
(11, 'هل لديك القدرة على التعامل مع الاشخاص باختلاف طبائعهم وشخصياتهم؟ ', 'التنمية الذاتية');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

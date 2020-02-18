-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 11:37 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cias`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'code.png',
  `top_category` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `icon`, `top_category`) VALUES
(1, 'Database Development', 'database-development', 'code.png', 0),
(4, 'Cloud', 'cloud', 'code.png', 1),
(5, 'Media', 'media', 'data.png', 0),
(6, 'Photography', 'photography', 'code.png', 0),
(7, 'Big Data', 'big-data', 'code.png', 1),
(8, 'Design', 'design', 'code.png', 1),
(9, 'Linux', 'linux', 'code.png', 0),
(10, 'DevOps', 'devops', 'code.png', 1),
(12, 'ETL', 'etl', 'code.png', 0),
(13, 'Business Intelligence', 'business-intelligence', 'code.png', 1),
(14, 'Network & Security', 'network-security', 'code.png', 0),
(15, 'Software Testing', 'software-testing', 'code.png', 0),
(16, 'Development', 'development', 'code.png', 1),
(17, 'demo category', 'demo1-category', 'code.png', 0),
(18, 'node development', 'node-development', 'code.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL DEFAULT 'default_thumb.jpg',
  `description` longtext NOT NULL,
  `columnheading1` varchar(255) DEFAULT NULL,
  `columnheading2` varchar(255) DEFAULT NULL,
  `columnheading3` varchar(255) DEFAULT NULL,
  `columnheading4` varchar(255) DEFAULT NULL,
  `columntext1` varchar(255) DEFAULT NULL,
  `columntext2` varchar(255) DEFAULT NULL,
  `columntext3` varchar(255) DEFAULT NULL,
  `columntext4` varchar(255) DEFAULT NULL,
  `demo_video_url` varchar(255) DEFAULT NULL,
  `syllabus` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `slug`, `thumbnail`, `description`, `columnheading1`, `columnheading2`, `columnheading3`, `columnheading4`, `columntext1`, `columntext2`, `columntext3`, `columntext4`, `demo_video_url`, `syllabus`, `status`) VALUES
(1, 'Aws online training', 'aws-online-training', 'default_thumb.jpg', 'this is demo course  ', 'test', 'test2', 'test4', 'test', 'test1', 'test3', 'test', 'test', 'test url', '6fec5531a25ef024a49cf29d22338e02.pdf', 0),
(2, 'Angular js training', 'angular-js-training', 'default_thumb.jpg', 'Learn AngularJS Training in Chennai from the Besant Technologies which explains the features of AngularJS like the animation support, library support, HTTP service, materials, toolbar, auto-complete, menus, navigation, and browser support. AngularJS is the product of Google, which is gaining popularity due to the SPA design, RXJS version, responsive design, flexibility, bug fixes, performance, open-source and used for the multiple browser support.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, 'Learn python bootcamp', 'learn-python-bootcamp', 'default_thumb.jpg', 'this is demo courses', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 'Mysql Database', 'mysql-database', 'default_thumb.jpg', 'this is demo course', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 'Core Java Training in Salem', 'core-java-training-in-salem', 'default_thumb.jpg', 'Spark Databox Core Java Training in Salem is an excellent training program that covers the arrays, methods, and core concepts of Java and object-oriented programming like objects, classes, inheritance, polymorphism, and more.     ', '350+', '350+', '350+', '350+', 'Agile Professionals Trained', 'Workshops Every Month', 'Countries And Counting', 'Corporates Served', 'core-java-training-in-salem', '4999999df6f59203bfe07a571270327f.pdf', 0),
(6, 'SCALA Functional programming', 'scala-functional-programming', 'default_thumb.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus convallis, orci at volutpat iaculis, justo risus congue tortor, non dictum diam turpis eu ante. Suspendisse leo quam, fermentum nec laoreet in, blandit quis velit. Morbi nec suscipit tortor. Nullam nec pretium massa. Vestibulum viverra enim sodales eros finibus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, 'Learn node ', 'learn-node', 'default_thumb.jpg', 'hello world ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, 'Node Js Development', 'node-js-development', '8d2d7829ec5e76c8737d74b584a51b02.png', 'Make sure you\'re not replacing the container containing the actual modal window when you\'re doing the AJAX request, because Bootstrap will not be able to find a reference to it when you try to close it. In your Ajax complete handler remove the modal and then replace the data.  ', 'Salary', 'Students', 'Rating', 'Usage', '35K', '10K', '5', '60%', 'node-js-development', '28e8c3710516ae9a3549c6a7574e6260.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `course_id`, `category_id`) VALUES
(4, 1, 4),
(5, 1, 1),
(6, 1, 5),
(7, 2, 4),
(8, 2, 1),
(9, 3, 4),
(10, 3, 5),
(11, 3, 6),
(12, 3, 1),
(13, 3, 7),
(14, 3, 9),
(15, 4, 4),
(16, 4, 1),
(17, 4, 6),
(18, 4, 7),
(19, 4, 8),
(20, 4, 9),
(21, 5, 16),
(22, 5, 10),
(23, 5, 6),
(24, 5, 14),
(25, 5, 15),
(26, 8, 16),
(27, 8, 1),
(28, 8, 5),
(29, 8, 4),
(30, 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `course_sections`
--

CREATE TABLE `course_sections` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `sidebar_title` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'features.png',
  `ordering` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_sections`
--

INSERT INTO `course_sections` (`id`, `course_id`, `sidebar_title`, `heading`, `icon`, `ordering`) VALUES
(1, 1, 'About Course', 'Aws About Course edited', 'about.png', 0),
(2, 1, 'Key Features', 'Aws Key Features tested', 'features.png', 0),
(3, 1, 'Course Syllabus', 'Aws Course Syllabus', 'features.png', 0),
(4, 1, 'Certification', 'AWS Certification', 'features.png', 0),
(5, 1, 'Reviews', 'AWS Course Reviews', 'features.png', 0),
(6, 5, 'About Course', 'About Core Java Training in Salem', 'features.png', 2),
(7, 5, 'Course Content', 'Core Java Training in Salem Course Content', 'sylabus.png', 1),
(8, 5, 'Key Features', 'Core Java Training in Salem Key Features', 'features.png', 3),
(9, 5, 'FAQs', 'Frequently Asked Questions', 'features.png', 6),
(10, 5, 'Reviews', 'Course Reviews', 'review.png', 5),
(11, 5, 'Certification', 'Course Certificates', 'certificate.png', 4),
(15, 2, 'Key Features', 'course key features', 'features.png', 0),
(16, 6, 'Key Features', 'course key features', 'features.png', 0),
(17, 4, 'key features ', 'import features', 'features.png', 0),
(18, 8, 'About Course', 'About Node Js', 'about.png', 0),
(19, 8, 'Course Content', 'Node Js Contents', 'sylabus1.png', 0),
(20, 8, 'Certification', 'Node Js Certifications', 'certificate.png', 0),
(21, 8, 'Trainer Profile', 'Node Js Trainers', '3de8315543ef526af6e9d8717342b61c.png', 0),
(22, 8, 'Career Opportunities', 'Node Js Career', 'career.png', 0),
(23, 8, 'Key Features', 'Node Js Key Features', 'features.png', 0),
(24, 8, 'FAQ\'s', 'Node Js FAQ\'s', 'faq.png', 0),
(25, 8, 'Reviews', 'User Reviews', 'review.png', 0),
(26, 6, 'test', 'test', 'features.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_seo`
--

CREATE TABLE `course_seo` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `title` text,
  `description` text,
  `keywords` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_seo`
--

INSERT INTO `course_seo` (`id`, `course_id`, `title`, `description`, `keywords`) VALUES
(1, 1, 'test course title', 'test description', 'test keywords '),
(2, 5, 'Core Java Training in Salem', 'test course description', 'test meta course keywords'),
(3, 8, 'Node Js Development', 'Hello world', 'node js development web development');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT 'Spark Databox Courses',
  `sub_title` varchar(255) DEFAULT 'this is some demo text replace it from backend.Live online training and Self-paced video courses.',
  `widget_icon1` varchar(255) DEFAULT NULL,
  `widget_icon2` varchar(255) DEFAULT NULL,
  `widget_icon3` varchar(255) DEFAULT NULL,
  `widget_text1` varchar(255) DEFAULT 'Certified Trainers',
  `widget_text2` varchar(255) DEFAULT 'Certified Trainers',
  `widget_text3` varchar(255) DEFAULT 'Achieve Your Dreams',
  `snipet_title1` varchar(255) DEFAULT '1048 +',
  `snipet_title2` varchar(255) DEFAULT '350 +',
  `snipet_title3` varchar(255) DEFAULT '40 +',
  `snipet_title4` varchar(255) DEFAULT '100 +',
  `snipet_text1` varchar(255) DEFAULT 'Agile Professionals Trained',
  `snipet_text2` varchar(255) DEFAULT 'Workshops Every Month',
  `snipet_text3` varchar(255) DEFAULT 'Countries And Counting',
  `snipet_text4` varchar(255) DEFAULT 'Corporates Served'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `title`, `sub_title`, `widget_icon1`, `widget_icon2`, `widget_icon3`, `widget_text1`, `widget_text2`, `widget_text3`, `snipet_title1`, `snipet_title2`, `snipet_title3`, `snipet_title4`, `snipet_text1`, `snipet_text2`, `snipet_text3`, `snipet_text4`) VALUES
(1, 'Spark Databox Courses', 'test sub title', 'seminar.png', 'school.png', 'cup.png', 'Certified Trainers', 'Certified Trainers edit', 'Achieve Your Dreams', '1048 +', '350 +', '40 +', '100 +', 'Agile Professionals Trained', 'Workshops Every Month', 'Countries And Counting', 'Corporates Served');

-- --------------------------------------------------------

--
-- Table structure for table `key_feature`
--

CREATE TABLE `key_feature` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'staff.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `key_feature`
--

INSERT INTO `key_feature` (`id`, `heading`, `body`, `icon`) VALUES
(1, 'test ', 'feature', 'rocket.png'),
(2, 'key feature 2 ', 'this is demo text for key feature', 'staff.png'),
(3, 'key Feature 3', 'this is demo text for key feature', 'staff.png'),
(4, 'demo feature', 'this is demo text for key feature', 'staff.png');

-- --------------------------------------------------------

--
-- Table structure for table `pages_seo`
--

CREATE TABLE `pages_seo` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `title` text,
  `description` text,
  `keywords` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages_seo`
--

INSERT INTO `pages_seo` (`id`, `page_id`, `title`, `description`, `keywords`) VALUES
(1, 1, 'Spark Databox Courses', 'test des', 'test keywords ');

-- --------------------------------------------------------

--
-- Table structure for table `related_courses`
--

CREATE TABLE `related_courses` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `related_course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `related_courses`
--

INSERT INTO `related_courses` (`id`, `course_id`, `related_course_id`) VALUES
(3, 1, 2),
(4, 5, 2),
(5, 5, 3),
(6, 5, 4),
(7, 5, 1),
(8, 5, 6),
(9, 5, 7),
(10, 8, 2),
(11, 8, 1),
(12, 8, 7),
(13, 8, 4),
(14, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `rps`
--

CREATE TABLE `rps` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `designation` varchar(500) NOT NULL,
  `thumbnail` varchar(500) NOT NULL DEFAULT '200x200.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rps`
--

INSERT INTO `rps` (`id`, `username`, `designation`, `thumbnail`) VALUES
(1, 'shahmir', 'web developer at spark databox', '200x200.png'),
(2, 'asad ', 'tester', '200x200.png'),
(4, 'zubair', 'Software developer at microsoft', '200x200.png'),
(5, 'adnan safdar', 'Software developer at microsoft', '200x200.png'),
(6, 'someuser', 'Software developer', '200x200.png'),
(7, 'someuser2', 'Programmer', '200x200.png'),
(8, 'Suriyan', 'software engineer', '200x200.png'),
(9, 'adminer', 'Cloud Engineer', '200x200.png');

-- --------------------------------------------------------

--
-- Table structure for table `section_widgets`
--

CREATE TABLE `section_widgets` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_widgets`
--

INSERT INTO `section_widgets` (`id`, `course_id`, `section_id`, `type`, `ordering`) VALUES
(2, 1, 1, 'text', 0),
(3, 1, 1, 'text', 0),
(4, 1, 1, 'text', 0),
(19, 1, 2, 'question', 0),
(22, 1, 3, 'list', 0),
(23, 1, 3, 'list', 0),
(25, 1, 2, 'feature', 0),
(26, 1, 4, 'image', 0),
(27, 1, 5, 'review', 0),
(30, 1, 4, 'image', 0),
(31, 5, 6, 'text', 3),
(32, 5, 6, 'text', 1),
(33, 5, 6, 'text', 4),
(34, 5, 6, 'text', 2),
(35, 5, 7, 'list', 6),
(36, 5, 7, 'list', 7),
(37, 5, 7, 'list', 5),
(38, 5, 8, 'feature', 2),
(40, 5, 8, 'feature', 3),
(41, 5, 8, 'feature', 4),
(42, 5, 8, 'feature', 5),
(43, 5, 9, 'question', 0),
(44, 5, 10, 'review', 4),
(45, 5, 10, 'review', 1),
(46, 5, 10, 'review', 2),
(47, 5, 10, 'review', 3),
(48, 5, 11, 'image', 0),
(49, 5, 7, 'text', 2),
(50, 5, 7, 'text', 1),
(51, 5, 7, 'text', 3),
(54, 5, 7, 'list', 4),
(55, 5, 11, 'image', 0),
(56, 5, 10, 'review', 0),
(57, 2, 15, 'feature', 0),
(58, 2, 15, 'feature', 0),
(59, 2, 15, 'feature', 0),
(60, 5, 8, 'feature', 0),
(61, 5, 8, 'feature', 0),
(62, 5, 8, 'feature', 0),
(63, 6, 16, 'feature', 0),
(64, 6, 16, 'feature', 0),
(65, 6, 16, 'feature', 0),
(66, 6, 16, 'feature', 0),
(67, 4, 17, 'feature', 0),
(68, 4, 17, 'feature', 0),
(69, 4, 17, 'feature', 0),
(70, 4, 17, 'feature', 0),
(71, 8, 18, 'text', 0),
(72, 8, 18, 'text', 0),
(73, 8, 19, 'list', 0),
(74, 8, 20, 'image', 0),
(75, 8, 23, 'feature', 0),
(76, 8, 23, 'feature', 0),
(77, 8, 23, 'feature', 0),
(78, 8, 23, 'feature', 0),
(79, 8, 24, 'question', 0),
(80, 8, 25, 'review', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_last_login`
--

CREATE TABLE `tbl_last_login` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_last_login`
--

INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
(1, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2020-01-10 07:31:26'),
(2, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2020-01-10 09:24:54'),
(3, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-21 21:20:28'),
(4, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-21 21:58:01'),
(5, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-22 05:11:11'),
(6, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-23 21:22:00'),
(7, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Mobile Safari/537.36', 'Android', '2020-01-24 00:42:02'),
(8, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-24 19:03:32'),
(9, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-25 19:32:43'),
(10, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-25 22:30:23'),
(11, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-26 05:12:26'),
(12, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-27 04:23:51'),
(13, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-27 18:15:22'),
(14, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-28 00:39:36'),
(15, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-28 06:14:07'),
(16, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-28 09:57:40'),
(17, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-28 22:05:14'),
(18, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-29 21:41:04'),
(19, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-30 04:41:36'),
(20, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-01-31 03:59:43'),
(21, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-01-31 18:09:12'),
(22, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-01-31 22:31:25'),
(23, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-01 20:09:24'),
(24, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-02 22:53:09'),
(25, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-03 15:23:29'),
(26, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-03 22:19:21'),
(27, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-05 08:33:31'),
(28, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-05 23:12:55'),
(29, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-06 13:22:25'),
(30, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-07 09:18:48'),
(31, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-07 21:53:28'),
(32, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-08 09:32:07'),
(33, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-08 20:58:04'),
(34, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-09 06:24:11'),
(35, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-09 21:25:00'),
(36, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-09 22:25:15'),
(37, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-10 10:38:34'),
(38, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-10 11:46:03'),
(39, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-11 10:05:48'),
(40, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-02-11 21:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Manager'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@example.com', '$2y$10$6NOKhXKiR2SAgpFF2WpCkuRgYKlSqFJaqM0NgIM3PT1gKHEM5/SM6', 'System Administrator', '9890098900', 1, 0, 0, '2015-07-01 18:56:49', 1, '2018-01-05 05:56:34'),
(2, 'manager@example.com', '$2y$10$quODe6vkNma30rcxbAHbYuKYAZQqUaflBgc4YpV9/90ywd.5Koklm', 'Manager', '9890098900', 2, 0, 1, '2016-12-09 17:49:56', 1, '2018-01-12 07:22:11'),
(3, 'employee@example.com', '$2y$10$UYsH1G7MkDg1cutOdgl2Q.ZbXjyX.CSjsdgQKvGzAgl60RXZxpB5u', 'Employee', '9890098900', 3, 0, 1, '2016-12-09 17:50:22', 3, '2018-01-04 07:58:28'),
(9, 'sparkdatabox@gmail.com', '$2y$10$IuanhVQAqIkXx/cq34M.GuSQNEnSRSkZVCpu.cZCRiLDprtaMfLrS', 'Admin', '3338444015', 1, 0, 1, '2020-02-11 08:55:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video_testimonials`
--

CREATE TABLE `video_testimonials` (
  `id` int(11) NOT NULL,
  `url` varchar(500) NOT NULL DEFAULT '#',
  `thumbnail` varchar(500) NOT NULL DEFAULT '500x500.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_testimonials`
--

INSERT INTO `video_testimonials` (`id`, `url`, `thumbnail`) VALUES
(7, 'https://www.youtube.com/watch?v=8Wg1MYjOguI', '500x500.png'),
(8, 'https://www.youtube.com/watch?v=2iUZRSeqzz8', '500x500.png'),
(9, 'https://www.youtube.com/embed/rd2feDk9lxY', '500x500.png'),
(10, 'https://www.youtube.com/embed/mu-R0dQ3-Qo', '500x500.png');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `inquiry_popup` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `country`, `inquiry_popup`) VALUES
(3, '::1', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `widget_feature`
--

CREATE TABLE `widget_feature` (
  `id` int(11) NOT NULL,
  `widget_id` int(11) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `body` longtext NOT NULL,
  `icon` varchar(500) NOT NULL DEFAULT 'play.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `widget_feature`
--

INSERT INTO `widget_feature` (`id`, `widget_id`, `heading`, `body`, `icon`) VALUES
(2, 25, 'dasdasdas', 'this is sa sdasdsadasd', 'staff.png'),
(3, 38, 'Certified Placement', 'A well accredited Certified Placement Training center in Salem', 'play.png'),
(5, 40, 'Java Training Cost', 'Minimum Core Java Training Cost in Salem with Best Core Java training Practice', 'play.png'),
(6, 41, 'Demo Classes', 'The benefit of free demo classes', 'play.png'),
(7, 42, 'Minimal student batch', 'Minimal student batch volume to provide personalized attention to every candidate', 'play.png'),
(9, 57, 'test ', 'feature', 'rocket.png'),
(10, 58, 'key feature 2 ', 'this is demo text for key feature', 'staff.png'),
(11, 59, 'key Feature 3', 'this is demo text for key feature', 'staff.png'),
(12, 60, 'test ', 'feature', 'rocket.png'),
(13, 61, 'key feature 2 ', 'this is demo text for key feature', 'staff.png'),
(14, 62, 'key Feature 3', 'this is demo text for key feature', 'staff.png'),
(15, 63, 'test ', 'feature', 'rocket.png'),
(16, 64, 'key feature 2 ', 'this is demo text for key feature', 'staff.png'),
(17, 65, 'key Feature 3', 'this is demo text for key feature', 'staff.png'),
(18, 66, 'demo feature', 'this is demo text for key feature', 'staff.png'),
(19, 67, 'at this course level feature', 'feature', 'rocket.png'),
(20, 68, 'key feature 2 ', 'this is demo text for key feature', 'staff.png'),
(21, 69, 'key Feature 3', 'this is demo text for key feature', 'staff.png'),
(22, 70, 'demo feature', 'this is demo text for key feature', 'staff.png'),
(23, 75, 'test ', 'feature', 'rocket.png'),
(24, 76, 'key feature 2 ', 'this is demo text for key feature', 'staff.png'),
(25, 77, 'key Feature 3', 'this is demo text for key feature', 'staff.png'),
(26, 78, 'demo feature', 'this is demo text for key feature', 'staff.png');

-- --------------------------------------------------------

--
-- Table structure for table `widget_image`
--

CREATE TABLE `widget_image` (
  `id` int(11) NOT NULL,
  `widget_id` int(11) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `body` longtext NOT NULL,
  `icon` varchar(500) NOT NULL DEFAULT '500x500.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `widget_image`
--

INSERT INTO `widget_image` (`id`, `widget_id`, `heading`, `body`, `icon`) VALUES
(1, 26, 'Certification', 'this is demo ', '500x500.png'),
(2, 30, 'Section 2 Aws Data works edited', '', '500x500.png'),
(3, 48, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus convallis, orci at volutpat iaculis, justo risus congue tortor, non dictum diam turpis eu ante. Suspendisse leo quam, fermentum nec laoreet in, blandit quis velit. Morbi nec suscipit tortor. Nullam nec pretium massa. Vestibulum viverra enim sodales eros finibus, dictum maximus erat volutpat. Donec a ullamcorper leo. Ut varius orci et tincidunt ultricies. Maecenas laoreet nisi eu est lobortis, placerat laoreet orci ornare. Phasellus dapibus dapibus ex vitae egestas.', '500x500.png'),
(4, 55, 'like some demo certification ', 'this is course certificate', '500x500.png'),
(5, 74, '', 'The Spark Databox Core Java certification training in Salem is recognized by all major global companies worldwide. We provide this certification to new and corporate practitioners after successfully completing theoretical and practical sessions. This increases your resume value, and you can achieve leading job postings with the help of this certification in the world’s leading MNCs. Certification is issued only after the successful completion of our training and practice-based programs. Core Java Certification Training in Salem from Spark Databox is framed to help you understand the complexities of the technology in an easy way and prepare you for industrial demands.', '500x500.png');

-- --------------------------------------------------------

--
-- Table structure for table `widget_list`
--

CREATE TABLE `widget_list` (
  `id` int(11) NOT NULL,
  `widget_id` int(11) NOT NULL,
  `heading` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `widget_list`
--

INSERT INTO `widget_list` (`id`, `widget_id`, `heading`) VALUES
(1, 22, 'section 1 introduction to aws'),
(2, 23, 'Section 2 Aws Data works edited'),
(3, 35, 'INTRODUCTION'),
(4, 36, 'OOPS Concepts'),
(5, 37, 'JAVA String'),
(6, 54, 'electron '),
(7, 73, 'INTRODUCTION');

-- --------------------------------------------------------

--
-- Table structure for table `widget_list_items`
--

CREATE TABLE `widget_list_items` (
  `id` int(11) NOT NULL,
  `widget_list_id` int(11) NOT NULL,
  `item` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `widget_list_items`
--

INSERT INTO `widget_list_items` (`id`, `widget_list_id`, `item`) VALUES
(1, 1, 'hello aws edited'),
(2, 1, 'aws cloud '),
(4, 2, 'list item 1 '),
(5, 2, 'list item 2 '),
(6, 2, 'list item 3 edited'),
(14, 1, 'this is new list item '),
(15, 1, 'test new item'),
(16, 3, 'What is Java'),
(17, 3, 'Platform Independent'),
(18, 3, 'JRE'),
(19, 3, 'JDK & IDE '),
(20, 3, 'Details on JVM'),
(21, 3, 'Variables and Datatype'),
(22, 3, 'Package'),
(23, 4, 'Advantage of OOPS'),
(24, 4, 'Class'),
(25, 4, 'Methods'),
(26, 4, 'Object'),
(27, 4, 'Access Modifier'),
(28, 4, 'Encapsulation'),
(29, 4, 'Keywords- Static & This'),
(30, 4, 'Method Overloading'),
(31, 4, 'Inheritance '),
(32, 4, 'Object Class'),
(33, 4, 'Array'),
(34, 4, 'Keywords - Super & Final'),
(35, 4, 'Runtime Polymorphism'),
(36, 4, 'Overriding'),
(37, 4, 'Abstract Class '),
(38, 4, 'Abstract Class'),
(39, 4, 'Interface'),
(40, 5, 'Immutable String '),
(41, 5, 'String Comparison & Concatenation'),
(42, 5, 'Methods of String class'),
(43, 5, 'StringBuffer class'),
(44, 5, 'StringBuilder class'),
(45, 6, 'symbols '),
(46, 6, 'topic 2 '),
(47, 6, 'topic 3'),
(48, 6, 'topic 4'),
(49, 6, 'topic 5 '),
(50, 7, 'What is Java'),
(51, 7, 'Platform Independent'),
(52, 7, 'JRE, JDK & IDE'),
(53, 7, 'Details on JVM');

-- --------------------------------------------------------

--
-- Table structure for table `widget_question`
--

CREATE TABLE `widget_question` (
  `id` int(11) NOT NULL,
  `widget_id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `widget_question`
--

INSERT INTO `widget_question` (`id`, `widget_id`, `question`, `answer`) VALUES
(1, 43, 'How do I enroll in the Spark Databox Core Java Training in Salem?', 'You can contact + 91-4446311234 at any time or go directly to our Training Center in Salem to join our Core Java training in Salem.'),
(2, 43, 'What are the different training methods offered by Spark Databox? ', 'Spark Databox offers a range of training methods suitable for students:\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">Classroom training </span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">Fast track training </span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">One to one training </span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">Live Instructor LED Online Training</span></p> \r\n'),
(3, 43, 'How about corporate training discounts or group discounts for our crew? ', 'Yes, Spark Databox offers a group discount for its training plans. Based on group size, we offer discounts according to terms and conditions. For more details, visit our website, contact our support team, or leave a quick inquiry. '),
(4, 43, 'What are the available payment options?', 'We accept all primary types of payment options, such as Cash payment, Card payment (like Master, Visa, and Maestro), Net Banking, and more.'),
(5, 43, 'How does Spark Databox\'s refund policy work? ', 'If you are enrolled in classes and have paid, but wish to withdraw the registration for some reason, you can grasp it within the first three sessions of training. Kindly note that refunds will be made within 30 days of the prior request. '),
(8, 79, 'How do I enroll in the Spark Databox Core Java Training in Salem?', 'You can contact + 91-4446311234 at any time or go directly to our Training Center in Salem to join our Core Java training in Salem.\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">list item (add your text here)</span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">list item (add your text here)</span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">list item (add your text here)</span></p>'),
(9, 79, 'What are the different training methods offered by Spark Databox?', 'Spark Databox offers a range of training methods suitable for students:\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">list item (add your text here)</span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">list item (add your text here)</span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">list item (add your text here)</span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">list item (add your text here)</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `widget_review`
--

CREATE TABLE `widget_review` (
  `id` int(11) NOT NULL,
  `widget_id` int(11) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `body` longtext NOT NULL,
  `url` varchar(500) DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `widget_review`
--

INSERT INTO `widget_review` (`id`, `widget_id`, `heading`, `body`, `url`) VALUES
(1, 27, 'Shahmir', 'this is a testing review', '#'),
(2, 44, 'Shahmir ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus convallis, orci at volutpat iaculis, justo risus congue tortor, non dictum diam turpis eu ante. Suspendisse leo quam, fermentum nec laoreet in, blandit quis velit. Morbi nec suscipit tortor. Nullam nec pretium massa. Vestibulum viverra enim sodales eros finibus', 'https://www.linkedin.com/in/sh4mii/'),
(3, 45, 'Adnan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus convallis, orci at volutpat iaculis, justo risus congue tortor, non dictum diam turpis eu ante. Suspendisse leo quam, fermentum nec laoreet in, blandit quis velit. Morbi nec suscipit tortor. Nullam nec pretium massa. Vestibulum viverra enim sodales eros finibus', 'https://www.linkedin.com/in/sh4mii/'),
(4, 46, 'Asad', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus convallis, orci at volutpat iaculis, justo risus congue tortor, non dictum diam turpis eu ante. Suspendisse leo quam, fermentum nec laoreet in, blandit quis velit. Morbi nec suscipit tortor. Nullam nec pretium massa. Vestibulum viverra enim sodales eros finibus', 'https://www.linkedin.com/in/sh4mii/'),
(5, 47, 'zubair', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus convallis, orci at volutpat iaculis, justo risus congue tortor, non dictum diam turpis eu ante. Suspendisse leo quam, fermentum nec laoreet in, blandit quis velit. Morbi nec suscipit tortor. Nullam nec pretium massa. Vestibulum viverra enim sodales eros finibus', 'https://www.linkedin.com/in/sh4mii/'),
(6, 56, 'test ', 'this is demo review text', 'https://www.linkedin.com/in/sh4mii/'),
(7, 80, 'shahmir', 'hello worlds', 'www.celfic.com');

-- --------------------------------------------------------

--
-- Table structure for table `widget_text`
--

CREATE TABLE `widget_text` (
  `id` int(11) NOT NULL,
  `widget_id` int(11) NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `body` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `widget_text`
--

INSERT INTO `widget_text` (`id`, `widget_id`, `heading`, `body`) VALUES
(1, 2, 'testing heading', 'test sda testing'),
(2, 3, 'testing heading 2 ', 'test saddada 2 '),
(3, 4, 'text block 3 ', 'test multiple lines \r\nof text \r\nhello '),
(4, 31, '', 'Spark Databox Core Java Training in Salem is an excellent training program that covers the arrays, methods, and core concepts of Java and object-oriented programming like objects, classes, inheritance, polymorphism, and more. The Core Java training in Salem is administered by professional-trainers according to the most advanced IT industry\'s demands. You will gain a solid footing in Java by gaining experience in basic to advanced level techniques such as Core Java 8, Java Servlets, JDBC, etc. using industry use cases, and this will help you become an expert Java Professional. As part of the program, students will learn about Java FX and create a fantastic game utilizing the concepts. Spark Databox Core Java Course Training in Salem will be an excellent hands-on learning experience, stuffed with tasks, assessment tests, and activities.'),
(5, 32, 'Why learn Core Java? ', 'Core Java is considered one of the most beneficial programming languages, which provides excellent job opportunities. The primary features of Core java include:\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">Java is an object-oriented programming language which makes it easy for the learners to learn</span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">This software can work everywhere</span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">Java owns productive Application Programming Interface</span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">Core Java can give you a comprehensive set of open-source libraries </span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">Javadoc acts as the best documentation for Java</span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">Java provides robust development tools like NetBeans and Eclipse</span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">There is fantastic identity patron for Java professionals</span></p>'),
(6, 33, 'Who should take up this course? ', 'Spark Databox Core Java tutorial in Salem is designed for both students as well as for working professionals. And it is also suitable for:\r\n\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">Software graduates aspiring to start an IT career</span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">Java Programmer</span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">Java Development Engineer</span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">Database Administrators</span></p>'),
(7, 34, 'What are the prerequisites for taking up Core Java Training Course in Salem?', 'There are no such significant prerequisites for learning the Core Java live project training in Salem. Basic programming knowledge is more enough. However, familiarity with C or C++ language will be beneficial.'),
(8, 49, 'demo testing text widget', 'here is some demo text.  edited '),
(9, 50, '', 'this widget is without  heading'),
(10, 51, 'text list widget', 'this is a line of text \r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">list item 1</span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">list item 2</span></p>\r\n\r\nthere is a line of text '),
(11, 71, '', 'Spark Databox Core Java Training in Salem is an excellent training program that covers the arrays, methods, and core concepts of Java and object-oriented programming like objects, classes, inheritance, polymorphism, and more. The Core Java training in Salem is administered by professional-trainers according to the most advanced IT industry\'s demands. You will gain a solid footing in Java by gaining experience in basic to advanced level techniques such as Core Java 8, Java Servlets, JDBC, etc. using industry use cases, and this will help you become an expert Java Professional. As part of the program, students will learn about Java FX and create a fantastic game utilizing the concepts. Spark Databox Core Java Course Training in Salem will be an excellent hands-on learning experience, stuffed with tasks, assessment tests, and activities.'),
(12, 72, 'Why learn Core Java? ', 'Core Java is considered one of the most beneficial programming languages, which provides excellent job opportunities. The primary features of Core java include:\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">	Java is an object-oriented programming language which makes it easy for the learners to learn</span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">This software can work everywhere</span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">list item (add your text here)</span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">list item (add your text here)</span></p>\r\n<p class=\"list-item\"><i class=\"far fa-check-circle list-icon mr-2\"></i><span class=\"list-text\">list item (add your text here)</span></p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_sections`
--
ALTER TABLE `course_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_seo`
--
ALTER TABLE `course_seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `key_feature`
--
ALTER TABLE `key_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages_seo`
--
ALTER TABLE `pages_seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `related_courses`
--
ALTER TABLE `related_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rps`
--
ALTER TABLE `rps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_widgets`
--
ALTER TABLE `section_widgets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `video_testimonials`
--
ALTER TABLE `video_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_feature`
--
ALTER TABLE `widget_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_image`
--
ALTER TABLE `widget_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_list`
--
ALTER TABLE `widget_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_list_items`
--
ALTER TABLE `widget_list_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_question`
--
ALTER TABLE `widget_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_review`
--
ALTER TABLE `widget_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget_text`
--
ALTER TABLE `widget_text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `course_sections`
--
ALTER TABLE `course_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `course_seo`
--
ALTER TABLE `course_seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `key_feature`
--
ALTER TABLE `key_feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages_seo`
--
ALTER TABLE `pages_seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `related_courses`
--
ALTER TABLE `related_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rps`
--
ALTER TABLE `rps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `section_widgets`
--
ALTER TABLE `section_widgets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `video_testimonials`
--
ALTER TABLE `video_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `widget_feature`
--
ALTER TABLE `widget_feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `widget_image`
--
ALTER TABLE `widget_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `widget_list`
--
ALTER TABLE `widget_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `widget_list_items`
--
ALTER TABLE `widget_list_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `widget_question`
--
ALTER TABLE `widget_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `widget_review`
--
ALTER TABLE `widget_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `widget_text`
--
ALTER TABLE `widget_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.2-dev+20230319.5e0caaf099
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 07:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(2, 'ENTERTAINMENT'),
(4, 'BUSINESS'),
(5, 'RORAL'),
(6, 'SPORT');

-- --------------------------------------------------------

--
-- Table structure for table `customer_review`
--

CREATE TABLE `customer_review` (
  `id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `star` int(255) NOT NULL,
  `c_name` text NOT NULL,
  `c_review` varchar(1000) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `like_num` int(12) NOT NULL DEFAULT 0,
  `dislike_num` int(12) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_review`
--

INSERT INTO `customer_review` (`id`, `product_id`, `date`, `star`, `c_name`, `c_review`, `c_email`, `like_num`, `dislike_num`) VALUES
(58, 17, 'June 12,2023', 3, 'Sakibul Islam', 'Nice All', 'arif@gmail.com', 2, 0),
(59, 17, 'June 12,2023', 2, 'Ariful Islam', 'Tnx All??', 'arif@gmail.com', 1, 2),
(60, 11, 'June 12,2023', 3, 'Sakibul Islam', 'fchgjhkjl hjkl', 'ariful@gmail.com', 1, 0),
(61, 18, 'June 12,2023', 4, 'Sakibul Islam', 'dxgfg vghbjk gvjk', 'ariful@gmail.com', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_comment`
--

CREATE TABLE `news_comment` (
  `id` int(255) NOT NULL,
  `nid` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_comment`
--

INSERT INTO `news_comment` (`id`, `nid`, `name`, `email`, `comment`, `date`, `time`) VALUES
(6, 12, 'Rahul Das', 'arifulislam758143@gmail.com', 'very nice', 'November 27,2021', '01:00,AM'),
(7, 12, 'Mostafa Shikder', 'arifulislam758143@gmail.com', 'Hei', 'November 27,2021', '01:29,AM'),
(20, 11, 'Abdur Rahman', 'arifulislam758143@gmail.com', 'The Best', 'November 27,2021', '01:47,AM'),
(21, 11, 'Abdul Karim', '', 'Not bad', 'November 27,2021', '01:48,AM'),
(25, 18, 'Ariful islam', '', 'Outstanding', 'November 27,2021', '03:15,AM'),
(30, 12, 'Sazzad Hossain', '', 'Awesome', 'November 28,2021', '12:41,PM'),
(35, 12, 'Md Ariful Islam', 'ariful@gmail.com', 'Thanks a Lot', 'January 22,2023', '08:27,PM'),
(36, 18, 'Md Ariful Islam', 'Arif@gmail.com', 'Thanks Lion Club', 'January 22,2023', '08:32,PM'),
(38, 17, 'Md Ariful Islam', 'Arif@gmail.com', 'Thanks', 'January 22,2023', '09:36,PM'),
(39, 17, 'Sakibul Islam', '', 'outstanding', 'February 02,2023', '09:45,AM'),
(40, 18, 'Md Ariful Islam', 'arifulislam758143@gmail.com', 'Nice Works', 'June 07,2023', '10:52,PM');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(255) NOT NULL,
  `writer` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `cate_name` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_post` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `writer`, `date`, `title`, `description`, `cate_name`, `image`, `user_post`) VALUES
(11, 'Ariful Islam', '26/November/2021', 'Perhaps you are but donâ€™t yet know that thereâ€™s an initiative created just for people like you', 'Most colorful personalities and powerful institutions, as well as original commentary in the world When Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and', 2, 'IMG_20200112_103749,jpg', 1),
(12, 'Sakibul Islam', '26,November,2021', 'How to stay on top of market trends in a dynamic environment', 'In the past month, searches for â€œhow to make hand sanitizerâ€ have grown by 4,950% worldwide.1 Meanwhile, there has been a 600% increase in searches for â€œcan you get coronavirus twice.â€2 And searches for â€œgrocery delivery service near meâ€ have gone up 200% globally.3\r\n\r\nIn this dynamic environment, peopleâ€™s needs are changing constantly. To keep up with shifting behaviors, consider Google Trends, a free tool that provides access to actual search requests across Google Search, YouTube, Shopping, and Images. By entering a keyword or a topic, you can explore what the world is searching for in near real time.', 4, 'IMG_20200112_103749.jpg', 1),
(17, 'Sakibul Islam', 'November 27,2021', 'How to stay on top of market trends in a dynamic environment', 'n the past month, searches for â€œhow to make hand sanitizerâ€ have grown by 4,950% worldwide.1 Meanwhile, there has been a 600% increase in searches for â€œcan you get coronavirus twice.â€2 And searches for â€œgrocery delivery service near meâ€ have gone up 200% globally.3\r\n\r\nIn this dynamic environment, peopleâ€™s needs are changing constantly. To keep up with shifting behaviors, consider Google Trends, a free tool that provides access to actual search requests across Google Search, YouTube, Shopping, and Images. By entering a keyword or a topic, you can explore what the world is searching for in near real time.\r\n\r\nTo help you stay on top of these shifts, the Google News Lab is curating global trends related to the pandemic with an option to dive more deeply into any of 24 local markets.\r\n\r\nExplore country trends.\r\nTo help you find your own insights and get the most of the tool, here are 10 tips for using Google Trends.\r\n\r\nFilter across properties. You can now explore trends across Google Search, Image Search, News Search, Google Shopping, and YouTube Search.\r\nCompare your search terms and topics across languages, locations, and time periods.\r\nExplore by category. Words often have multiple meanings, so make sure to find the right version on Trends. For example, if you search for â€œmask,â€ you can add a category to indicate whether you mean protective health equipment or a type of beauty product.\r\nFind related searches. When you search for a term in Trends, you can also explore the top searches, rising searches, and searches related to your term.\r\nExport, embed, and cite Trends data. Once youâ€™ve found what youâ€™re looking for, you can then easily share your insights.\r\nLeverage Trends search tips. Use punctuation to refine trends, group search terms, and filter your results.\r\nUnderstand exactly what data is in your results, how trends data is pulled, and how it should be interpreted.\r\n', 6, '265852370_313222927331385_6441942635302995069_n.jpg', 1),
(18, 'Sakibul Islam', 'November 27,2021', ' learn, succeed: How a traditional Indian brand grew its business using automation', 'learn, succeed: How a traditional Indian brand grew its business using automation', 4, 'registration_page.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(124) NOT NULL,
  `email` varchar(123) NOT NULL,
  `pass` varchar(123) NOT NULL,
  `phone` varchar(123) NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user_name`, `email`, `pass`, `phone`, `dob`, `image`) VALUES
(1, 'Ariful Islam', 'Arif19', 'arifulislam758143@gmail.com', '1214278967', '01814578858', '2023-07-01', 'logo1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_review`
--
ALTER TABLE `customer_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_comment`
--
ALTER TABLE `news_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_review`
--
ALTER TABLE `customer_review`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `news_comment`
--
ALTER TABLE `news_comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

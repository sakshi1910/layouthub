-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 08, 2019 at 04:21 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `layoutshub`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `template_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `template_id`, `price`, `Total`, `user_id`) VALUES
(13, 14, 350, 0, 11),
(14, 17, 250, 0, 10),
(15, 23, 200, 0, 12),
(16, 17, 250, 0, 10),
(17, 24, 300, 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `cat_image` varchar(200) NOT NULL,
  `cat_status` int(1) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_image`, `cat_status`) VALUES
(1, 'Art and culture', 'images/arts.jpg', 1),
(2, 'Bussiness and services', 'images/businessandservices.jpg', 1),
(3, 'Education and Books', 'images/education.jpg', 1),
(4, 'Design and Photography', 'images/designandphotography.jpg', 1),
(5, 'Food and restuarant', 'images/food.jpg', 1),
(6, 'Animals and pets', 'images/animals.jpg', 1),
(7, 'Electronics', 'images/elec.jpg', 1),
(8, 'cars $ motorcycles', 'images/cars.jpg', 1),
(9, 'Sports,Outdoors $ Travel', 'images/sports.jpg', 1),
(10, 'Fashion $ beauty', 'images/beauty.jpg', 1),
(11, 'Computers $ internet', 'images/computers.jpg', 1),
(12, 'Home $ family', 'images/home.jpg', 1),
(13, 'Entertainment,Games $ nightlife', 'images/games.jpg', 1),
(14, 'Holidays,Gifts $ Flowers', 'images/gifts.jpg', 1),
(15, 'Society $ people', 'images/society.jpg', 1),
(16, 'Medical(Healthcare)', 'images/doctor.jpg', 1),
(17, 'Real Estate', 'images/estate.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`) VALUES
(1, 'neha', 'nehamadam@gmail.com', 'sxnsjxjkdjsk'),
(2, 'j', 'h', 'hvzhb'),
(3, 'Riya', 'suhejariya@gmail.com', 'u r doing exelent job');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(200) NOT NULL,
  `temp_id` int(11) NOT NULL,
  `payer_email` varchar(200) NOT NULL,
  `payment_amount` int(11) NOT NULL,
  `payment_status` varchar(300) NOT NULL,
  `payment_currency` varchar(200) NOT NULL,
  `txn_id` varchar(200) NOT NULL,
  `payment_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `item_name`, `temp_id`, `payer_email`, `payment_amount`, `payment_status`, `payment_currency`, `txn_id`, `payment_date`, `user_id`) VALUES
(1, 'animal and pets', 42, 'neham12345@gmail.com', 240, 'Completed', 'USD', '1WR889345D5764707', '2018-07-17', 9),
(2, 'animal', 43, 'neham12345@gmail.com', 250, 'Completed', 'USD', '1WR889345D5764707', '2018-07-17', 9),
(3, 'animal and pets', 42, 'neham12345@gmail.com', 240, 'Completed', 'USD', '1WR889345D5764707', '2018-07-17', 9),
(4, 'animal and pets', 42, 'neham12345@gmail.com', 240, 'Completed', 'USD', '1WR889345D5764707', '2018-07-17', 9),
(5, 'animal and pets', 42, 'neham12345@gmail.com', 240, 'Completed', 'USD', '1WR889345D5764707', '2018-07-17', 9),
(6, 'animal', 43, 'neham12345@gmail.com', 250, 'Completed', 'USD', '1WR889345D5764707', '2018-07-17', 9),
(7, 'animal and pets', 42, 'neham12345@gmail.com', 240, 'Completed', 'USD', '1WR889345D5764707', '2018-07-17', 9),
(8, 'animal and pets', 42, 'neham12345@gmail.com', 240, 'Completed', 'USD', '1WR889345D5764707', '2018-07-17', 9),
(9, 'animal and pets', 42, '', 240, '', '', '', '0000-00-00', 9),
(10, 'animal', 43, '', 250, '', '', '', '0000-00-00', 9),
(11, 'animal and pets', 42, '', 240, '', '', '', '0000-00-00', 9),
(12, 'animal and pets', 42, '', 240, '', '', '', '0000-00-00', 9),
(13, 'animal and pets', 42, 'neham12345@gmail.com', 240, 'Completed', 'USD', '0NA48512BH877840K', '2018-07-17', 9),
(14, 'animal', 43, 'neham12345@gmail.com', 250, 'Completed', 'USD', '0NA48512BH877840K', '2018-07-17', 9),
(15, 'animal and pets', 42, 'neham12345@gmail.com', 240, 'Completed', 'USD', '0NA48512BH877840K', '2018-07-17', 9),
(16, 'animal and pets', 42, 'neham12345@gmail.com', 240, 'Completed', 'USD', '0NA48512BH877840K', '2018-07-17', 9),
(17, 'animal and pets', 42, 'neham12345@gmail.com', 240, 'Completed', 'USD', '88851968HF845664G', '2018-07-17', 9),
(18, 'animal', 43, 'neham12345@gmail.com', 250, 'Completed', 'USD', '88851968HF845664G', '2018-07-17', 9),
(19, 'animal and pets', 42, 'neham12345@gmail.com', 240, 'Completed', 'USD', '88851968HF845664G', '2018-07-17', 9),
(20, 'animal and pets', 42, 'neham12345@gmail.com', 240, 'Completed', 'USD', '88851968HF845664G', '2018-07-17', 9),
(21, 'animal and pets', 42, 'neham12345@gmail.com', 240, 'Completed', 'USD', '88851968HF845664G', '2018-07-17', 9),
(22, 'animal and pets', 42, 'neham12345@gmail.com', 240, 'Completed', 'USD', '6F9731705N686540X', '2018-07-17', 9),
(23, 'animal', 43, 'neham12345@gmail.com', 250, 'Completed', 'USD', '6F9731705N686540X', '2018-07-17', 9),
(24, 'animal and pets', 42, 'neham12345@gmail.com', 240, 'Completed', 'USD', '6F9731705N686540X', '2018-07-17', 9),
(25, 'animal and pets', 42, 'neham12345@gmail.com', 240, 'Completed', 'USD', '6F9731705N686540X', '2018-07-17', 9),
(26, 'animal and pets', 42, 'neham12345@gmail.com', 240, 'Completed', 'USD', '6F9731705N686540X', '2018-07-17', 9),
(27, 'animal and pets', 42, 'neham12345@gmail.com', 240, 'Completed', 'USD', '6F9731705N686540X', '2018-07-17', 9);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `regid` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phoneno` int(10) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `profile_image` varchar(300) NOT NULL DEFAULT 'images/default.png',
  PRIMARY KEY (`regid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`regid`, `password`, `email`, `phoneno`, `state`, `country`, `city`, `fname`, `lname`, `profile_image`) VALUES
(1, '123', 'snehshine@gmail.com', 2147483647, 'Punjab', 'India', 'jalandhar', 'sneh', 'shine', 'images/fashion.jpg'),
(3, '12345', 'sakshi123@gmail.com', 8855, 'Punjab', 'india', 'jalandhar', 'neha', 'madaan', 'images/default.png'),
(4, '12345', 'tanvi123@gmail.com', 8855, 'Punjab', 'india', 'jalandhar', 'neha', 'madaan', 'images/default.png'),
(6, '123344', 'tanvi123@gmail.com', 8855, 'Punjab', 'India', 'jalandhar', 'neha', 'madaan', 'images/default.png'),
(7, '123345', 'snehshine@gmail.com', 8855, 'Punjab', 'india', 'jalandhar', 'neha', 'madaan', 'images/default.png'),
(8, '678777778', 'shittu@gmail.com', 666667878, 'Assam', 'India', 'mohali', 'shrishti', 'thakur', 'images/default.jpg'),
(9, '12345', 'nehamadaan148@gmail.com', 2147483647, 'Punjab', 'india', 'mohali', 'Neha', 'Madaan', 'images/a2.png'),
(10, '11111', 'sakshidhiman1910@gmail.com', 134003, 'Haryana', 'india', 'ambala', 'sakshi', 'dhiman', 'images/3aea85974e5bd495385b8c42b1fe1de9 1.jpg'),
(11, '12345', 'puneetdhiman10@gmail.com', 95444, 'Haryana', 'India', 'ambala city', 'puneet', 'dhiman', 'images/default.png'),
(12, 'kkkkkk', 'ii', 312456, 'Haryana', 'in', 'ambala', 'riya', 'suheja', 'images/2012-09-26 17.09.27.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE IF NOT EXISTS `subcategory` (
  `subcat_id` int(11) NOT NULL AUTO_INCREMENT,
  `subcat_name` varchar(200) NOT NULL,
  `subcat_image` varchar(200) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `subcat_name`, `subcat_image`, `cat_id`) VALUES
(1, 'Art', 'images/a.jpg', 1),
(2, 'Music', 'images/m.png', 1),
(3, 'Design', 'images/d.jpg', 4),
(4, 'Photography', 'images/p.jpg', 4),
(5, 'Museum', 'images/mu.jpg', 1),
(6, 'Movie', 'images/mo.jpg', 1),
(7, 'Theatre', 'images/t.jpg', 1),
(8, 'pets', 'images/pe.jpg', 6),
(9, 'Wild life', 'images/wild.jpg', 6),
(10, 'Zoo', 'images/zoo.jpg', 6),
(11, 'Architecture', 'images/ar.jpg', 4),
(12, 'Mobile store', 'images/mobilestore.jpg', 7),
(13, 'Electronics store', 'images/electronics.jpg', 7),
(14, 'Video', 'images/video.jpg', 7),
(15, 'Flowers', 'images/flowers.jpg', 14),
(16, 'Holidays', 'images/holiday.jpg', 14),
(17, 'gifts', 'images/gift.jpg', 14),
(18, 'Books', 'images/books.jpg', 3),
(19, 'education', 'images/edu.jpg', 3),
(20, 'Science', 'images/science.jpg', 3),
(21, 'consulting', 'images/consulting.jpg', 2),
(22, 'Industrial', 'images/industrial.jpg', 2),
(23, 'Law', 'images/law.jpg', 2),
(24, 'Cars', 'images/cars.jpg', 8),
(25, 'Motorcycles', 'images/motorcycle.jpg', 8),
(26, 'Sports', 'images/sports.jpg', 9),
(27, 'Travel', 'images/travels.jpg', 9),
(28, 'Hotels', 'images/hotel.jpg', 9),
(29, 'Fashion', 'images/fa.jpg', 10),
(30, 'Jewelry', 'images/jewelry.jpg', 10),
(31, 'Beauty', 'images/be.jpg', 10),
(32, 'Hosting', 'images/hosting.jpg', 11),
(33, 'Software', 'images/software.jpg', 11),
(34, 'Restauarant', 'images/res.jpg', 5),
(35, 'Food & Drinks', 'images/foodanddrink.jpg', 5),
(36, 'Cafe', 'images/cafe.jpg', 5),
(37, 'Personal pages', 'images/personal.jpg', 15),
(38, 'Dating', 'images/dating.jpg', 15),
(39, 'Religion', 'images/religion.jpg', 15),
(40, 'Charity', 'images/charity.jpg', 15),
(41, 'Wedding', 'images/wedding.jpg', 12),
(42, 'Interior & Furniture', 'images/interior.jpg', 12),
(43, 'Kids & children', 'images/kids.jpg', 12),
(44, 'Games', 'images/game.jpg', 13),
(45, 'Night club', 'images/night.jpg', 13),
(46, 'Online casino', 'images/online.jpg', 13),
(47, 'Radio', 'images/radio.jpg', 13),
(48, 'Real estate agency', 'images/real.jpg', 17),
(49, 'Mortgage', 'images/mortgage.jpg', 17),
(50, 'Land Broker', 'images/land.jpg', 17),
(51, 'Drug store', 'images/drug.jpg', 16),
(52, 'Dentist', 'images/dentist.jpg', 16),
(53, 'Herbal', 'images/herb.jpg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

DROP TABLE IF EXISTS `template`;
CREATE TABLE IF NOT EXISTS `template` (
  `template_id` int(11) NOT NULL AUTO_INCREMENT,
  `template_title` varchar(200) NOT NULL,
  `template_desc` varchar(200) NOT NULL,
  `template_price` int(11) NOT NULL,
  `template_type` varchar(100) NOT NULL,
  `template_files` varchar(100) NOT NULL,
  `template_image` varchar(200) NOT NULL,
  `template_tags` varchar(200) NOT NULL,
  `template_addedby` varchar(50) NOT NULL,
  `template_addedon` date NOT NULL,
  `tcat_id` int(11) NOT NULL,
  `tsubcat_id` int(11) NOT NULL,
  `template_quantity` int(11) NOT NULL,
  PRIMARY KEY (`template_id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`template_id`, `template_title`, `template_desc`, `template_price`, `template_type`, `template_files`, `template_image`, `template_tags`, `template_addedby`, `template_addedon`, `tcat_id`, `tsubcat_id`, `template_quantity`) VALUES
(1, 'EGO BEAUTY SALON ', 'HTML 5\r\nFixed Width, 2 Columns\r\nMixed', 0, 'free', 'files/fashion.zip', 'images/fashion1.jpg', '', '1', '2018-07-04', 10, 29, 0),
(2, 'HIGH FASHION', 'HTML 5\r\nResponsive, Mixed Columns\r\nDark on Light', 300, 'paid', 'files/fashion2.zip', 'images/fashion2.jpg', '', '2', '2018-07-16', 10, 29, 0),
(3, 'COUPON', 'HTML 5\r\nFixed Width, 2 Columns\r\nMixed', 0, 'free', 'files/fashion3.zip', 'images/fashion3.jpg', '', '2', '2018-03-13', 10, 29, 0),
(4, 'COOKING SCHOOL \r\n', 'Bootstrap Themes + Dorinel Nedelcu\r\nHTML 5\r\nResponsive, 4 Columns\r\nDark on Light', 200, 'paid', 'files/food1.zip', 'images/food1.jpg', 'cafe or restuarent,Food or drink,jquery,one page', '1', '2018-07-18', 5, 35, 0),
(5, 'FOODEE', 'FreeHTML5\r\nHTML 5\r\nResponsive, Mixed Columns\r\nMixed', 250, 'paid', 'files/food2.zip', 'images/food2.jpg', 'cafe or restuarants,food or drink,multipurpose', '3', '2018-07-24', 5, 35, 0),
(6, ' TRADITIONAL RESTAURANT ', 'TemplateMonster\r\nHTML 5\r\nFixed Width, 2 Columns\r\nDark on Light', 0, 'free', 'files/food3.zip', 'images/food3.jpg', 'services,food or  drink', '4', '2018-01-18', 5, 35, 0),
(7, 'PICXA ', 'Designstub\r\nHTML 5\r\nResponsive, 3 Columns\r\nDark on Light', 0, 'free', 'files/design1.zip', 'images/design1.jpg', 'bootstrap,bussiness,art and photography', '2', '2018-01-22', 4, 3, 0),
(8, 'GARLER ', 'OS Templates\r\nHTML 5\r\nResponsive, 4 Columns\r\nMixed', 200, 'paid', 'files/design2.zip', 'images/design2.jpg', 'art or photography,internet', '3', '2018-06-12', 4, 3, 0),
(9, 'PHOTO ', 'GetTemplates\r\nHTML 5\r\nResponsive, 4 Columns\r\nLight on Dark\r\nBlack IconWhite Icon', 250, 'paid', 'files/design3.zip', 'images/design3.jpg', 'bootstrap,personal,bootstrap', '3', '2018-01-30', 4, 3, 0),
(10, 'WPF ', 'WpFreeware\r\nHTML 5\r\nResponsive, 4 Columns\r\nDark on Light', 0, 'free', 'files/education1.zip', 'images/education1.jpg', 'jquery,services', '3', '2018-02-12', 3, 19, 0),
(11, 'VICTORYPRO', 'DreamTemplate\r\nXHTML 1.0 Transitional\r\nFixed Width, 2 Columns\r\nMixed', 250, 'paid', 'files/education2.zip', 'images/education2.jpg', 'Architecture,education,finance', '3', '2018-07-05', 3, 19, 0),
(12, 'MUSIC SCHOOL', 'FreshTemplates\r\nXHTML 1.0 Transitional\r\nFixed Width, 3 Columns\r\nDark on Light', 300, 'paid', 'files/education3.zip', 'images/education3.jpg', 'education,music,school', '2', '2018-04-16', 3, 19, 0),
(13, ' MyBiz', 'Bootstrap 3, Font-awesome, Flex-slider, jQuery Plugins', 350, 'paid', 'files/services1.zip', 'images/services1.png', 'services,bussiness', '1', '2017-12-13', 3, 0, 0),
(14, 'Sailor', 'Sailor is a responsive HTML5 site template for corporate business. ', 350, 'paid', 'files/services2.zip', 'images/services2.png', 'bussiness,bootstrap', '3', '2018-06-27', 3, 22, 0),
(15, ' Navigator', 'Navigator – free one page business template comes with all visitor loving components . ', 0, 'free', 'files/services3.zip', 'images/services3.jpg', 'bussiness,services', '1', '2018-07-04', 2, 22, 0),
(16, 'BRICKARY', 'OS Templates\r\nHTML 5\r\nResponsive, 3 Columns\r\nMixed', 200, 'free', 'files/art1.zip', 'images/art1.jpg', 'art,services', '1', '2017-11-22', 1, 1, 0),
(17, 'R STUDIO', 'Bootstrap Themes + Razib Biswas\r\nHTML 5\r\nResponsive, 3 Columns\r\nLight on Dar', 250, 'paid', 'files/art2.zip', 'images/art2.jpg', 'art or culture', '2', '2018-04-16', 1, 1, 0),
(18, 'PICXA', 'Designstub\r\nHTML 5\r\nResponsive, 3 Columns\r\nDark on Light', 300, 'paid', 'files/art3.zip', 'images/art3.jpg', 'art or culture,services', '1', '2018-07-24', 1, 1, 0),
(19, 'High fashion', 'HTML 5 Fixed Width, 2 Columns Mixed', 250, 'paid', 'files/beauty1.zip', 'imageS/beauty1.jpg', 'education,music,school', '3', '2017-07-18', 10, 31, 0),
(20, 'King-of-pasta', '', 300, 'paid', 'files/cafe1.zip', 'images/cafe1.jpg', 'education,music,school', '1', '2017-10-18', 5, 36, 0),
(21, 'decanter', '', 350, 'paid', 'files/drink1.zip', 'images/drink1.jpg', 'education,music,school', '1', '2018-02-14', 5, 35, 0),
(22, 'jewelery', '', 200, 'paid', 'files/jewelery1.zip', 'images/jewelery1.jpg', 'education,music,school', '2', '2018-04-17', 10, 30, 0),
(23, 'museum', '', 200, 'paid', 'files/museum1.zip', 'images/museum1.jpg', 'education,music,school', '3', '2018-06-02', 1, 5, 0),
(24, 'Music', '', 300, 'paid', 'files/music1.zip', 'images/music1.jpg', 'education,music,school', '2', '2018-04-11', 1, 2, 0),
(25, 'Science', '', 300, 'paid', 'files/science1.zip', 'images/science1.jpg', 'education,music,school', '3', '2018-02-22', 3, 20, 0),
(26, 'Wedding', '', 350, 'paid', 'files/wedding1.zip', 'images/wedding1.png', 'cafe or restuarent,Food or drink,jquery,one page', '3', '2018-07-10', 12, 49, 0),
(27, 'music', '', 200, 'paid', 'files/music2.zip', 'images/music2.jpg', 'cafe or restuarent,Food or drink,jquery,one page', '2', '2018-07-24', 1, 2, 0),
(28, 'realestate', '', 250, 'paid', 'files/realestate1.zip', 'images/real estate 1.jpg', 'cafe or restuarent,Food or drink,jquery,one page', '1', '2018-06-01', 17, 48, 0),
(29, 'realestate', '', 450, 'paid', 'files/realestate2.zip', 'images/real estate 2.jpg', 'cafe or restuarent,Food or drink,jquery,one page', '3', '2018-05-09', 17, 48, 0),
(30, 'realestate', '', 300, 'paid', 'files/realestate3.zip', 'images/real estate 3.jpg', 'cafe or restuarent,Food or drink,jquery,one page', '3', '2018-04-18', 17, 48, 0),
(31, 'herbal', '', 300, 'paid', 'files/herbal 1.zip', 'images/herbal 1.jpg', 'art or culture,services', '3', '2018-03-20', 16, 53, 0),
(32, 'herbal', '', 450, 'paid', 'files/herbal 2.zip', 'images/herbal 2.jpg', 'art or culture,services', '2', '2018-03-06', 16, 53, 0),
(33, 'herbal', '', 300, 'paid', 'files/herbal 3.zip', 'images/herbal 3.jpg', 'art or culture,services', '2', '2018-02-07', 16, 53, 0),
(34, 'dentist', '', 600, 'paid', 'files/dentistry 1.zip', 'images/dentistry 2.jpg', 'art or culture,services', '', '0000-00-00', 16, 52, 0),
(35, 'dentist', '', 0, 'free', 'files/dentistry 2.zip', 'images/dentistry 2.jpg', 'art or culture,services', '', '0000-00-00', 16, 52, 0),
(36, 'dentist', '', 0, 'free', 'files/dentistry 3.zip', 'images/desntistry 3.jpg', 'art or culture,services', '', '0000-00-00', 16, 52, 0),
(37, 'drug store', '', 800, 'paid', 'files/drug 1.zip', 'images/drug 1.jpg', 'art or culture,services', '', '0000-00-00', 16, 51, 0),
(39, 'drug store', '', 400, 'paid', 'files/drug 2.zip', 'images/drug 2.jpg', 'art or culture,services', '', '0000-00-00', 16, 51, 0),
(40, 'drug store', '', 350, 'paid', 'files/drug 3.zip', 'images/drug 3.jpg', 'art or culture,services', '', '0000-00-00', 16, 51, 0),
(41, 'animal and pets\r\n', '', 0, 'free', 'files/pet1.zip', 'images/pet1.jpg', 'art or culture,services', '1', '2018-03-14', 6, 8, 0),
(42, 'animal and pets', '', 240, 'paid', 'files/pet2.zip', 'images/pet2.jpg', 'art or culture,services', '4', '2018-04-04', 6, 8, 0),
(43, 'animal', '', 250, 'paid', 'files/pet3.zip', 'images/pet3.jpg', 'art or culture,services', '2', '2018-04-03', 6, 8, 0),
(44, 'wildlife', '', 300, 'paid', 'files/wildlife1.zip', 'images/wildlife1.jpg', 'art or culture,services', '2', '2018-07-03', 6, 9, 0),
(45, 'wildlife', '', 0, 'free', 'files/wildlife2.zip', 'images/wildlife2.jpg', 'bussiness,bootstrap', '4', '2018-07-08', 6, 8, 0),
(46, 'zoo', '', 0, 'free', 'files/zoo1.zip', 'images/zoo1.jpg', 'bussiness,bootstrap', '1', '2018-04-04', 6, 10, 0),
(47, 'zoo', '', 240, 'paid', 'files/zoo2.zip', 'images/zoo2.jpg', 'bussiness,bootstrap', '4', '2018-06-14', 6, 10, 0),
(48, 'cars', '', 0, 'free', 'files/car1.zip', 'images/car1.jpg', 'bussiness,bootstrap', '2', '2018-02-08', 8, 24, 0),
(49, 'cars', '', 240, 'paid', 'files/car2.zip', 'images/car2.jpg', 'bussiness,bootstrap', '4', '2018-01-24', 8, 24, 0),
(50, 'software', '', 0, 'free', 'files/software1.zip', 'images/software1.jpg', 'services,bussiness', '2', '2018-06-27', 11, 33, 0),
(51, 'software', '', 240, 'paid', 'files/software2.zip', 'images/software2.jpg', 'services,bussiness', '4', '2018-06-13', 11, 33, 0),
(52, 'software', '', 250, 'paid', 'files/software3.zip', 'images/software3.jpg', 'services,bussiness', '2', '2018-06-13', 11, 33, 0),
(53, 'photography', '', 0, 'free', 'files/photo1.zip', 'images/photo1.jpg', 'services,bussiness', '2', '2018-07-09', 4, 4, 0),
(54, 'photography', '', 240, 'paid', 'files/photo2.zip', 'images/photo2.jpg', '', '4', '2018-06-19', 4, 4, 0),
(55, 'photography', '', 250, 'paid', 'files/photo3.zip', 'images/photo3.jpg', '', '2', '2018-03-14', 4, 4, 0),
(56, 'theater', '', 250, 'paid', 'files/theater1.zip', 'images/theater1.jpg', '', '2', '2018-06-20', 1, 7, 0),
(57, 'theater', '', 0, 'free', 'files/theater2.zip', 'images/theater2.jpg', '', '1', '2018-06-21', 1, 7, 0),
(58, 'theater', '', 240, 'paid', 'files/theater3.zip', 'images/theater3.jpg', '', '4', '2018-06-03', 1, 7, 0),
(59, 'books', '', 350, 'paid', 'files/books1.zip', 'images/books1.jpg', '', '1', '2018-06-06', 3, 18, 0),
(60, 'books', '', 0, 'free', 'files/books2.zip', 'images/books2.jpg', '', '4', '2017-12-20', 3, 18, 0),
(61, 'books', '', 300, 'paid', 'files/books3.zip', 'images/books3.jpg', '', '2', '2018-03-28', 3, 18, 0),
(62, 'industrial', '', 0, 'free', 'files/industrial1.zip', 'images/industrial1.jpg', '', '1', '2018-06-20', 2, 22, 0),
(63, 'industrial', '', 240, 'paid', 'files/industrial2.zip', 'images/industrial2.jpg', '', '4', '2018-02-18', 2, 22, 0),
(64, 'industrial', '', 200, 'paid', 'files/industrial3.zip', 'images/industrial3.jpg', '', '1', '2018-02-12', 2, 22, 0),
(65, 'law', '', 0, 'free', 'files/law1.zip', 'files/law1.jpg', '', '2', '2018-02-04', 2, 23, 0),
(66, 'law', '', 240, 'paid', 'files/law2.zip', 'images/law2.jpg', '', '4', '2018-07-09', 2, 23, 0),
(67, 'law', '', 250, 'paid', 'files/law3.zip', 'images/law3.jpg', '', '2', '2018-07-11', 2, 23, 0),
(69, 'charity', 'charity', 0, 'free', 'files/charity1.zip', 'images/charity1.jpg', '', '3', '2018-04-10', 15, 40, 1),
(70, 'charity', 'charity', 450, 'paid', 'files/charity2.zip', 'images/charity2.jpg', '', '3', '2018-06-06', 15, 40, 1),
(71, 'charity', 'charity', 800, 'paid', 'files/charity3.zip', 'images/charity3.jpg', '', '2', '2018-06-30', 15, 40, 1),
(72, 'hosting', 'hosting', 0, 'free', 'files/hosting1.zip', 'images/hosting1,jpg', '', '2', '2018-06-23', 11, 32, 1),
(73, 'hosting', 'hosting', 450, 'paid', 'files/hosting2.zip', 'images/hosting2.jpg', '', '2', '2018-06-13', 11, 32, 1),
(74, 'hosting', 'hosting', 300, 'paid', 'files/hosting3.zip', 'images/hosting3.jpg', '', '2', '2018-06-01', 11, 32, 1),
(75, 'dating', 'dating', 0, 'free', 'files/dating1.zip', 'images/dating1.jpg', '', '2', '2018-06-25', 15, 38, 1),
(76, 'dating', 'holidays, gifts  and flowers', 250, 'paid', 'files/dating2.zip', 'images/dating2.jpg', 'bootstrap', '2', '2018-06-27', 15, 38, 1),
(77, 'dating', 'holidays,Gifts', 240, 'paid', 'files/dating3.zip', 'images/dating3.jpg', 'bootstrap', '4', '2018-04-04', 15, 38, 1),
(78, 'flowers', 'holidays,gifts', 0, 'free', 'files/flowers1.zip', 'images/flowers1.jpg', 'bootstrap', '2', '2017-10-18', 14, 15, 0),
(79, 'flowers', 'flowers', 240, 'paid', 'files/flowers2.zip', 'images/flowers2.jpg', 'bootstrap', '4', '2017-12-20', 14, 15, 0),
(80, 'flowers', 'holidays,gifts', 350, 'paid', 'files/flowers3.zip\r\n', 'images/flowers3.jpg', 'bootstrap', '3', '2018-01-22', 14, 15, 0),
(81, 'game', 'game', 0, 'free', 'files/game1.zip', 'images/game 1.jpg', 'bootstrap', '2', '2017-10-18', 13, 44, 0),
(82, 'games', 'holidays', 240, 'paid', 'files/game2.zip', 'images/game2.jpg', 'bootstrap', '4', '2018-04-04', 13, 44, 0),
(83, 'games', 'games', 300, 'paid', 'files/game3.zip', 'images/game3.jpg', 'bootstrap', '2', '2017-07-18', 13, 44, 0),
(84, 'holidays', 'holidays', 0, 'free', 'files/holidays1.zip', 'images/holidays1.jpg', 'bootstrap', '2', '2017-07-18', 14, 16, 0),
(85, 'holidays', 'holidays', 240, 'paid', 'files/holidays2.zip', 'images/holidays.jpg', 'bootstrap', '4', '2018-06-03', 14, 16, 0),
(86, 'holidays', 'holidays', 200, 'paid', 'files/holidays3.zip', 'images/holidays3.jpg', 'bootstrap', '2', '2017-07-18', 14, 16, 0),
(87, 'hotel', 'hotel', 0, 'free', 'files/hotel1.zip', 'images/hotel1.jpg', 'bootstrap', '1', '2017-07-18', 9, 28, 0),
(88, 'hotel', 'hotel', 240, 'paid', 'files/hotel2.zip', 'images/hotel2.jpg', 'bootstrap', '4', '2017-12-20', 9, 28, 0),
(89, 'hotel', 'hotel', 200, 'paid', 'files/hotel3.zip', 'images/hotel3.jpg', 'bootstrap', '1', '2017-07-18', 9, 28, 0),
(90, 'interior', 'interior', 0, 'free', 'files/interior1.zip', 'images/interior1.jpg', 'bootstrap', '4', '2017-12-20', 12, 42, 0),
(91, 'interior', 'interior', 200, 'paid', 'files/interior2.zip', 'images/interior2.jpg', 'bootstrap', '1', '2017-07-18', 12, 42, 0),
(92, 'kids', 'kids', 0, 'free', 'files/kids1.zip', 'images/kids1.jpg', 'bootstrap', '1', '2017-07-18', 12, 43, 0),
(93, 'kids', 'kids', 240, 'paid', 'files/kids2.zip', 'images/kids2.jpg', 'bootstrap', '4', '2018-06-14', 12, 43, 0),
(94, 'kids', 'kids', 200, 'paid', 'files/kids3.zip', 'images/kids3.jpg', 'bootstrap', '1', '2017-07-18', 12, 43, 0),
(95, 'landbroker', 'landbroker', 0, 'free', 'files/landbroker1.zip', 'images/landbroker1.jpg', 'bootstrap', '4', '2017-12-20', 17, 50, 0),
(96, 'landbroker', 'landbroker', 200, 'paid', 'files/landbroker2.zip', 'images/landbroker2.jpg', 'bootstrap', '1', '2017-07-18', 17, 50, 0),
(97, 'landbroker', 'landbroker', 240, 'paid', 'files/landbroker3.zip', 'images/landbroker3.jpg', 'bootstrap', '4', '2017-12-20', 17, 50, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

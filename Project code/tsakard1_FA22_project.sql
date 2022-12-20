-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2022 at 12:09 AM
-- Server version: 5.7.40
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsakard1_FA22_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `productid` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`productid`, `email`, `phone`, `orderid`) VALUES
(134, 'dimi@gmail.com', 2018264399, 321);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productid` int(50) DEFAULT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `price` int(50) DEFAULT NULL,
  `Quantity` int(50) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `productname`, `price`, `Quantity`, `Description`) VALUES
(12, 'Red Play Mat', 2, 12, 'A simple red mat.'),
(134, 'Dark Magician (single card)', 10, 10, 'Card sold individually. Iconic in season 1'),
(623, 'Red Eyes Black Dragon', 30, 30, 'A '),
(623, 'Red Eyes Black Dragon', 30, 30, 'A ferocious with a deadly attack'),
(97331, 'Red eyes baby dragon ', 4, 19, 'A young red eyes'),
(98212, 'Red Eyes Dark Dragoon', 50, 10, 'The Fusion of red eyes and dark magician'),
(1234, 'Card Sleeve-Hollow', 1, 100, 'Clear card covers'),
(638212, 'Thick Sleeves- Hollow', 2, 100, 'Thicker card sleeves to display your cards'),
(1111267423, 'Card Binder-Blue', 7, 24, 'A book to hold your cards '),
(223475213, 'Card Binder-Black', 9, 13, 'A book to hold your cards in '),
(666548, 'Blue Eyes White Dragon ', 10, 20, 'A Dragon with a power attack'),
(2349861, 'Funko Pop- Blue eyes', 12, 11, 'A little blue eyes'),
(2234, 'Swords Of Revealing Light', 3, 16, 'Spell Card. enemy cannot attack for three turns'),
(44592837, 'Funko Pop-Dark Magician', 5, 12, 'A cute little magician'),
(932781, 'Funko Pop-Red eyes black dragon', 15, 18, 'Funko pop red eyes '),
(84223, 'Kuriboh', 3, 4, 'Discard this card to take no damage'),
(1928365, 'Monster Reborn', 1, 3, 'Bring one moster from the graveyard'),
(678323, 'Pot of Greed', 4, 2, 'This spell card allows you to draw two cards'),
(122, 'B.Skull Dragon', 1, 9, 'The Fusion between Red Eyes and Summoned skull'),
(6732, 'Blue Eyes Ultimate Dragon', 3, 6, 'The Fusion of three blue eyes Dragons'),
(5678, 'Rescue Cat', 5, 17, 'Send this face-up card on your side of the field t'),
(42865, 'Mystic Tomato', 3, 12, 'Plant/Effect card '),
(87234, 'Dark Paladin', 14, 30, 'Spellcaster/Fusion/Effect card'),
(4456, 'Petit Dragon ', 1, 3, 'Small dragon with vicious attacks'),
(11, 'Dark End Dragon ', 10, 10, 'Send an enemy to the graveyard for attack points'),
(29101, 'Slifer the Sky Dragon ', 5, 20, 'Divine-Beast/Effect'),
(87102, 'Nibiru, The Primal Being', 10, 18, 'Rock/Effect'),
(13, 'Black Play Mat', 18, 30, 'A simple black mat'),
(14, 'Blue Play Mat', 18, 10, 'A simple blue mat'),
(16, 'Orange Play Mat', 20, 15, 'A simple orange mat'),
(565632, 'Cyber Dragon', 18, 1, 'Special summon this card from your hand '),
(126098, 'Cyber Dragon Sieger', 2, 30, 'After not declaring an attack gain 2100 atk points'),
(918432, 'Card Destruction', 2, 10, 'Spell Card');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `user_type` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(NULL, 'bob', 'bob@gmail.com', 'aa53ca0b650dfd85c4f59fa156f7a2cc', 'user'),
(NULL, 'bobtest', 'bobtest@gmail.com', 'aa53ca0b650dfd85c4f59fa156f7a2cc', 'admin'),
(NULL, 'dimi', 'dimi@gmail.com', '3b98e2dffc6cb06a89dcb0d5c60a0206', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

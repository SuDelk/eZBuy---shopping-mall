-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 05:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezbuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `carddetails`
--

CREATE TABLE `carddetails` (
  `cardID` int(11) NOT NULL,
  `paymentNo` int(11) NOT NULL,
  `cardType` varchar(20) NOT NULL,
  `cardNo` varchar(20) NOT NULL,
  `nameOnCard` varchar(20) NOT NULL,
  `expDate` varchar(12) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carddetails`
--

INSERT INTO `carddetails` (`cardID`, `paymentNo`, `cardType`, `cardNo`, `nameOnCard`, `expDate`, `cvv`) VALUES
(1, 6, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(2, 7, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(3, 8, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(4, 9, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(5, 10, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(6, 11, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(7, 12, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(8, 13, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(9, 14, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(10, 15, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(11, 16, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(12, 17, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(13, 18, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(14, 19, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(15, 20, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(16, 21, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(17, 22, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(18, 23, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(19, 24, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(20, 25, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(21, 26, 'Visa', '200012326565321', 'sadfadsfasd', '2021-12', 123),
(22, 30, 'Master Card', '200012326565321', 'sdffdgsdgsd', '2021-08', 123),
(23, 31, 'Master Card', '200012326565321', 'sdffdgsdgsd', '2021-08', 123),
(24, 32, 'Master Card', '200012326565321', 'sdffdgsdgsd', '2021-08', 123),
(25, 33, 'Master Card', '200012326565321', 'sdffdgsdgsd', '2021-08', 123),
(26, 34, 'Master Card', '200012326565321', 'sdffdgsdgsd', '2021-08', 123),
(27, 35, 'Master Card', '200012326565321', 'sdffdgsdgsd', '2021-08', 123),
(28, 36, 'Master Card', '200012326565321', 'sdffdgsdgsd', '2021-08', 123),
(29, 37, 'Master Card', '200012326565321', 'sdffdgsdgsd', '2021-08', 123),
(30, 40, 'Master Card', '200012326565321', 'sdffdgsdgsd', '2021-04', 123),
(31, 3, 'Master Card', '200012326565321', 'Fer nao 12', '2023-07', 233);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `itemId` int(11) NOT NULL,
  `ItemName` varchar(30) NOT NULL,
  `ItemDescription` varchar(200) NOT NULL,
  `Price` float NOT NULL,
  `pic` varchar(100) NOT NULL,
  `categoryId` varchar(4) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryID` varchar(4) NOT NULL,
  `CategoryName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryID`, `CategoryName`) VALUES
('CA01', 'Sports&Gym'),
('CA02', 'Fashion'),
('CA03', 'Kids&Toys'),
('CA04', 'Groceries'),
('CA05', 'Health&Beauty'),
('CA06', 'Electrical Items'),
('CA07', 'Pharmaceutical'),
('CA08', 'Books');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CID` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `uname` varchar(15) NOT NULL,
  `pwd` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CID`, `firstName`, `lastName`, `gender`, `mobile`, `email`, `address`, `dob`, `uname`, `pwd`) VALUES
(1, 'Nuwan', 'Wijethenuge', 'Male', '0779345014', 'nuwan.sliit@gmail.com', 'No.47,Bla bla road,Pandura', '2006-02-05', 'nuwanW', 'jijiji123'),
(2, 'Shalika', 'Hansamali', 'Other', '0787706921', 'iamles@gmail.com', 'No.86, walikada handiya,Borella', '2000-10-13', 'RanjaBae', 'shalika123'),
(3, 'yahasith', 'fernando', 'Male', '0710984025', 'subject@gmail.com', '134/6 galle road , moratuwa', '2008-12-25', 'himachan', 'himachan123');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ItemId` int(11) NOT NULL,
  `ItemName` varchar(30) NOT NULL,
  `ItemDescription` varchar(200) NOT NULL,
  `Price` float NOT NULL,
  `pic` varchar(100) NOT NULL,
  `categoryId` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ItemId`, `ItemName`, `ItemDescription`, `Price`, `pic`, `categoryId`) VALUES
(1, 'Beats Studio3 Headphones', 'Red over-ear headphones,compatible with all smartphones,cormfortable,noisecancellation', 9500, './Images/Electronics/red1.jpg', 'CA06'),
(2, 'Razor Viper Gaming Mouse', 'Razer optical mouse switches, Razer 5G optical sensor,69 g lightweight design, 16,000 DPI', 12000, './Images/Electronics/raz2.jpg', 'CA06'),
(3, 'JBL Flip 5 Bluetooth Speaker', 'Water proof, High quality sound, Light weight', 18000, './Images/Electronics/jbl.jpg', 'CA06'),
(4, 'Samsung 32 inch HD LED TV', 'Operating SSound: 20 Watts, Dolby Digital Plus Surround Sound Technologyystem: Tizen,Resolution: HD Ready (1366 x 768)', 54000, './Images/Electronics/tv.jpg', 'CA06'),
(5, 'Xbox Wireless Controller', 'Robot-white', 10000, './Images/Electronics/xbox.jpeg', 'CA06'),
(6, 'Sony Alpha 1', ' 50.1-megapixel sensor, 10-bit 8K video, Eye AF that works on birds, and more..', 100000, './Images/Electronics/sony.jpg', 'CA06'),
(7, 'Anchor', 'Anchor milk powder is enriched with Vitamins A and D3 to support the daily amount of nutrients required for the entire family.', 900, './Images/groceries/anchor 1.jpg', 'CA04'),
(8, 'Curry Powder', 'Wijaya Curry powders is produced using highest quality ingredients.', 150, './Images/groceries/curryPowder 1.jpg', 'CA04'),
(9, 'Doritos', 'Doritos is a super crispy tortilla crisp made from freshly roasted corn, with the delicious taste of Nacho Cheese.', 850, './Images/groceries/doritos 1.jpg', 'CA04'),
(10, 'Ferrero', 'Ferrero Rocher is a chocolate and hazelnut product produced by the Italian confectionery company Ferrero.', 1800, './Images/groceries/ferrero 1.jpg', 'CA04'),
(11, 'Nutella', 'Nutella is the brand name of a hazelnut-based sweet spread registered by the Italian company Ferrero at the end of 1963.', 950, './Images/groceries/nutella 1.jpg', 'CA04'),
(12, 'Spaghetti', 'A dried, filled pasta that is never doughy or chewy when cooked, and always bursts with naturally fresh flavors.', 500, './Images/groceries/spaghetti 1.jpg', 'CA04'),
(13, 'Hot Wheels', 'Hot Wheels is a brand of die-cast toy cars introduced by American toy maker Mattel in 1968.', 9000, './Images/kids & toys/hotWheels 1.jpg', 'CA03'),
(14, 'Iron Man', 'This walking, talking Iron Man Robot is from Marvels Avengers: Infinity War.', 20000, './Images/kids & toys/ironMan 1.jpg', 'CA03'),
(15, 'Sony PlayStation 5', 'The PlayStation 5 is a home video game console developed by Sony Interactive Entertainment.', 200000, './Images/kids & toys/playStation 1.jpg', 'CA03'),
(16, 'Swimming Pool', 'Inflatable swimming pool portable bathtub for adults kids toddlers, Lightweight, not leak, great for keeping your baby in the pools.', 15000, './Images/kids & toys/swimmingPool 1.jpeg', 'CA03'),
(17, 'Teddy bear', ' This teddy bear has plenty to love. You can cuddle up next to him and provide tons of bear hugs.', 15000, './Images/kids & toys/teddy 1.jpg', 'CA03'),
(18, 'Kids tricycle', 'Tricycle with adjustable seat height and removable pedal is good for 10months to 3years kids.', 9000, './Images/kids & toys/tricycle 1.jpg', 'CA03'),
(19, 'Candid-B', 'Candid-B is used to treat various types of skin infections usually the fungal type of skin infections.', 150, './Images/pharmaceuticals/candidB 1.jpg', 'CA07'),
(20, 'Digene', 'Digene is an antacid that is known to provide effective relief from acidity and its symptoms such as heartburn, stomach discomfort, and abdominal pain.', 120.55, './Images/pharmaceuticals/digene 2.jpg', 'CA07'),
(21, 'Panadol', 'Panadol Original Tablets is a mild analgesic and antipyretic, and is recommended for the treatment of most painful and febrile conditions.', 99.99, './Images/pharmaceuticals/panadol 1.jpg', 'CA07'),
(22, 'Siddhalepa', 'Siddhalepa is the trademark of a herbal balm that is believed to help to relieve body aches and pains.', 125, './Images/pharmaceuticals/siddhalepa 1.jpg', 'CA07'),
(23, 'Surgical spirit', ' a liquid that contains alcohol and water and that is used to clean wounds or skin.', 140, './Images/pharmaceuticals/surgicalSpirit 1.jpg', 'CA07'),
(24, 'Vitamin C', 'Vitamin C is used to prevent or treat low levels of vitamin C in people who do not get enough of the vitamin from their diets.', 327.25, './Images/pharmaceuticals/vitaminC 1.jpg', 'CA07'),
(25, 'Yoga Accessories', '7 piece sets for fitness trainning exercise gym accessories yoga', 11000, './Images/sports and gym/yoga.webp', 'CA01'),
(26, 'Fitness Gloves', 'Sports weight lifting gym workout gloves-Elastic wrist with velcro closure', 800, './Images/sports and gym/gloves.jpg', 'CA01'),
(27, 'Badminton Rackets', 'Yonex Badminton racket with shuttlecock   | Carbon - Metal | Made in Japan', 13200, './Images/sports and gym/badminton1.jpg', 'CA01'),
(28, 'Football Kits', 'Yellow colour football training kits for kids', 1100, './Images/sports and gym/football-kits.jpg', 'CA01'),
(29, 'Shoulder Presser', 'Seated shoulder press machine', 25000, './Images/sports and gym/Shoulder.jpg', 'CA01'),
(30, 'Weights', 'Weight training 16Kg weights', 1800, './Images/sports and gym/weight.jpg', 'CA01'),
(31, 'Lipstick', '6 colour set of HUDABEUTY matte lipsticks ', 5000, './Images/health and beauty/lipstick.jpeg', 'CA05'),
(32, 'Shampoo', 'PANTENE PRO-V shampoo and conditioner pack ', 800, './Images/health and beauty/shampoo.jpeg', 'CA05'),
(33, 'Body Lotion', 'Aroma magic honey & shea butter body lotion', 1000, './Images/health and beauty/bodylotion.jpg', 'CA05'),
(34, 'Perfume', 'Floral essence perfumes for girls', 1200, './Images/health and beauty/perfumes.jpg', 'CA05'),
(35, 'Makeup Set', '7 makeup brushes,foundation creams,face powders and lipsticks set', 6500, './Images/health and beauty/makeup.jpg', 'CA05'),
(36, 'Blackhead Remover', 'YLNALO black mask peel off blackhead remover', 850, './Images/health and beauty/peeloff.jpeg', 'CA05'),
(37, 'Earings', 'A set of pearly white and gold earing collection for casual and formal wear', 1500, './Images/fashion/ear.png', 'CA02'),
(38, 'Necklace', 'YAUTION Fashion Purple Nebula Space Universe Women Galaxy Crescent Moon Necklace-Silver-Plated-Half-Moon-Pendant', 750, './Images/fashion/necklace.png', 'CA02'),
(39, 'Frock', 'White,Red and Yellow colour floral maxi dress', 4500, './Images/fashion/dress.jpeg', 'CA02'),
(40, 'Wrist watch', 'Pink colour quartz luxury wrist watch for ladies', 50000, './Images/fashion/watch.jpg', 'CA02'),
(41, 'Hairpins', 'Pearly white Crystal hairpins for girls', 950, './Images/fashion/hairpins.jpg', 'CA02'),
(42, 'Shirt', 'Blue colour formal shirt for men', 1500, './Images/fashion/shirt.jpeg', 'CA02'),
(43, 'How to win Freinds ', 'Author: Dale Carnegie, Publisher: Fingerprint publishing,ISBN-13 :- 9788175993488', 2500, './Images/BOOKS/dc2.jpg', 'CA08'),
(44, 'Wuthering heights', 'Author:Emily Bronte, Publisher: Wordsworth classics ISBN-13 :- 5928175993400, ', 1500, './Images/BOOKS/wh2.jpeg', 'CA08'),
(45, 'Fifty shades of grey', 'Author: E.L James, Publisher: Cornerstone,ISBN-13 :- 9780099579939', 2000, './Images/BOOKS/fiftyshadesofgrey2.jpg', 'CA08'),
(46, 'Fire and blood', 'Author: George R.R Martin, Publisher: Harper Collins,ISBN-13 :- 9780008402785', 3500, './iMAGES/BOOKS/fireandblood.jpg', 'CA08'),
(47, 'Changing landscapes ', 'Author:Fischer klaus, Publisher: HEINBERG Berlin,ISBN-13 :- 9782348402905 .', 5000, './Images/BOOKS/physics.jpg', 'CA08'),
(48, 'The war of the worlds', 'Author:H.G.WELLS,Publisher:Penguin Publishing,ISBN-13 :- 9955128412671', 2000, './Images/BOOKS/ww2.jpg', 'CA08'),
(49, '2021/2021 psg Third Jersey', 'The PSG 20-21 third jersey brings a very classy design, combining a bordeaux base with truly gold for accents and logos. ', 25000, './Images/psg3.png', 'CA01'),
(50, 'Kelloggs Nutri-Grain Bars', ' Delicious mix of your favourite breakfast ingredients all wrapped up in a satisfying bar.', 380, './Images/grain.jpg', 'CA04'),
(51, 'Euro 2020 Replica Ball', 'Branded Adidas product dedicated to the UEFA EURO 2020. ', 2890, './Images/sng1.jpg', 'CA01'),
(52, 'Dumbell', 'Dumbells for resistance training,great for arms, back, chest, core and legs', 1200, './Images/sng2.jpg', 'CA01'),
(53, 'Lego City Edition', 'LEGO CITY Undercover brings together witty, original storytelling with signature LEGO humor to create a fun-filled experience for players of all ages to enjoy. ', 8900, './Images/knt1.jpg', 'CA03'),
(54, 'Teddy Bear Brown', 'Great classic, Soft, cuddly plush bear ', 2500, './Images/knt2.jpg', 'CA03'),
(55, 'Red And Black JORDAN Shoes', 'The latest Air Jordan One decorated with contrasting Black,Red and White.', 35000, './Images/jordan.jpg', 'CA02'),
(56, 'Fancy Brown Broug Shoes', 'High Genuine Brown Fancy Leather Shoes with luxury broguing.', 6450, './Images/fancy.jpg', 'CA02'),
(57, 'Kylie Jenner Lip Gloss', 'Kylie jenner red colour high lip gloss.', 1890, './Images/fash1.jpg', 'CA02'),
(58, 'Fenty Foundation', 'Fenty beauty pro filter soft matte longwear foundation', 1750, './Images/fash2.jpg', 'CA02'),
(59, 'Dove Conditioner', 'Dove instensive repair conditioner 200ml.', 320, './Images/bnh1.jpg', 'CA05'),
(60, 'Kumarika Hair Oil', 'Kumarika hair oil hair fall control-200ml', 120, './Images/bnh2.jpg', 'CA05'),
(61, 'Heinz-Beinz', 'Original German imported', 2000, './Images/groc1.jpg', 'CA04'),
(62, 'Comfort Fabric Conditioner', 'The best conditioner for clothes', 1000, './Images/groc2.jpeg', 'CA04'),
(63, 'Beats Headphones', 'Orange Beats headset with noise cancelation', 12000, './Images/elec1.jpg', 'CA06'),
(64, 'Room LED Set', 'RGB lighting with full LED set ', 11000, './Images/ele2.jpg', 'CA06');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Oid` int(11) NOT NULL,
  `PaymentNo` int(11) NOT NULL,
  `CID` int(11) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Oid`, `PaymentNo`, `CID`, `Price`) VALUES
(1, 1, 3, 4730),
(2, 2, 1, 28850),
(3, 3, 1, 6400),
(4, 4, 3, 1520.55);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `Oid` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `itemName` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`Oid`, `itemId`, `itemName`, `quantity`, `subPrice`) VALUES
(1, 9, 'Doritos', 4, 3400),
(1, 11, 'Nutella', 1, 950),
(1, 50, 'Kelloggs Nutri-Grain Bars', 1, 380),
(2, 1, 'Beats Studio3 Headphones', 1, 9500),
(2, 56, 'Fancy Brown Broug Shoes', 3, 19350),
(3, 7, 'Anchor', 1, 900),
(3, 43, 'How to win Freinds ', 1, 2500),
(3, 44, 'Wuthering heights', 2, 3000),
(4, 19, 'Candid-B', 1, 150),
(4, 20, 'Digene', 1, 120.55),
(4, 22, 'Siddhalepa', 10, 1250);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentNo` int(11) NOT NULL,
  `paymentType` int(11) NOT NULL,
  `paymentTypeName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentNo`, `paymentType`, `paymentTypeName`) VALUES
(1, 2, 'Cash On Delivery'),
(2, 2, 'Cash On Delivery'),
(3, 1, 'Card Payment'),
(4, 2, 'Cash On Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `requestseller`
--

CREATE TABLE `requestseller` (
  `requestNo` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `experience` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestseller`
--

INSERT INTO `requestseller` (`requestNo`, `firstName`, `lastName`, `category`, `experience`, `username`, `mobile`, `email`, `status`) VALUES
(6, 'yahasith', 'Fernando', 'Sports&Gym', '4 years', 'himachan', '0710984025', 'subject@gmail.com', 'Accepted'),
(7, 'Nuwan', 'Wijethunge', 'Pharmacutical', '7 years', 'nuwanW', '0779345014', 'nuwan.sliit@gmail.com', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carddetails`
--
ALTER TABLE `carddetails`
  ADD PRIMARY KEY (`cardID`),
  ADD KEY `paymentNo` (`paymentNo`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ItemId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Oid`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`Oid`,`itemId`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentNo`);

--
-- Indexes for table `requestseller`
--
ALTER TABLE `requestseller`
  ADD PRIMARY KEY (`requestNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carddetails`
--
ALTER TABLE `carddetails`
  MODIFY `cardID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ItemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `requestseller`
--
ALTER TABLE `requestseller`
  MODIFY `requestNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

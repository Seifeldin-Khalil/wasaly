-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 01:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wasaly_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `F_name` varchar(50) NOT NULL,
  `L_name` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Phone_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `F_name`, `L_name`, `Gender`, `Address`, `Mail`, `Username`, `Password`, `Phone_Number`) VALUES
(1, 'Mohamed', 'Awad', 'male', 'Zayed', 'awad@gmail.com', 'awad', 'awad123', 1013700990),
(2, 'Ahmad', 'Sheriff', 'male', 'Rehab', 'ahmed.sheriff@gmail.com', 'aSheriff', 'sheriff123', 762945067),
(3, 'Mohamed', 'Ali', 'male', 'Nozha', 'moAli@gmail.com', 'Ali', 'ali123', 123745906),
(4, 'Kareem', 'Salem', 'male', 'Nasr City', 'kareemS@gmail.com', 'Kareem', 'kareem123', 456190256),
(5, 'Eyad', 'Sayed', 'male', 'Nozha', 'eyad@gmail.com', 'Eyad', 'eyad123', 19253875),
(6, 'Omar', 'Khaled', 'male', '5th Settlement', 'omark@gmail.com', 'Omar', 'omar123', 975162836),
(7, 'Mona', 'Zaky', 'female', '6th October', 'mona@gmail.com', 'Mona', 'mona123', 16529464),
(8, 'Lamar', 'Ahmad', 'female', 'Heliopolis', 'lamar@gmail.com', 'lamar', 'lamar123', 28168253),
(9, 'Nour', 'Mohamad', 'female', 'Maadi', 'nour@gmail.com', 'Nour', 'nour123', 17387152),
(10, 'Nasser', 'Ahmad', 'male', 'Heliopolis', 'nasser@gmail.com', 'Nasser', 'nasser123', 16728458);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` int(11) NOT NULL,
  `F_name` varchar(50) NOT NULL,
  `L_name` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `F_name`, `L_name`, `Gender`, `Address`, `Mail`, `Username`, `Password`, `Phone_Number`, `age`) VALUES
(1, 'abdelrahman', 'hagrass', 'male', 'new cairo', 'mana.hagrass@gmail.com', 'Hagrass', '12345678', 1013700990, 21),
(2, 'Mahmoud', 'Assem', 'male', 'nozha', 'assem@gmail.com', 'Assem', '10102020', 123456789, 21),
(3, 'Maiada', 'Khaled', 'female', 'new cairo', 'maiada@gmail.com', 'Maiada', 'maiada123', 123565798, 21),
(4, 'Seif', 'Khalil', 'male', 'rehab', 'seif@gmail.com', 'Seif', 'seif1234', 1236598744, 21),
(5, 'ahmed', 'mohamed', 'male', 'nasr city', 'ahmed@gmail.com', 'ahmed', 'ahmed1234', 113256874, 21),
(6, 'mohamed', 'salah', 'male', 'madinty', 'salah@gmail.com', 'salah', 'salah1234', 2147483647, 35),
(7, 'nada', 'mohamed', 'female', 'madinty', 'nadamohamed@gmail.com', 'nada', 'nada1234', 1236598744, 18),
(8, 'abdelrahman', 'mostafa', 'male', 'nasr city', 'abdelrahmanmostafa@gmail.com', 'abdelrahman', 'abdelrahman', 1013700990, 30),
(9, 'mohand', 'galal', 'male', 'nozha', 'mail@gmail.com', 'mohand', 'mohand1234', 123456789, 40),
(10, 'magdy', 'ahmed', 'male', 'rehab', 'magdy@gmail.com', 'magdy', 'magdy1234', 1013700990, 55);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_ID` int(11) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `Rating` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `Order_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Order_ID` int(11) NOT NULL,
  `Order_date` varchar(50) NOT NULL,
  `Order_status` varchar(50) NOT NULL,
  `Customer_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Order_ID`, `Order_date`, `Order_status`, `Customer_ID`) VALUES
(1, '2022/04/30', 'Pending', 1),
(2, '2022/04/30', 'Pending', 2),
(3, '2022/04/30', 'Pending', 1),
(5, '2022/04/30', 'Pending', 3),
(6, '2022/04/30', 'Pending', 5),
(7, '2022/04/30', 'Pending', 6),
(9, '2022/04/30', 'Pending', 8),
(11, '2022/04/30', 'Pending', 9),
(42026, '2022/04/30', 'Pending', 10),
(42027, '2022/04/30', 'Pending', 4),
(42031, '2022/04/30', 'Pending', 7);

-- --------------------------------------------------------

--
-- Table structure for table `ordered_product`
--

CREATE TABLE `ordered_product` (
  `Order_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordered_product`
--

INSERT INTO `ordered_product` (`Order_ID`, `Product_ID`, `Quantity`) VALUES
(1, 1, 9),
(1, 2, 2),
(42026, 2, 1),
(42031, 2, 1),
(2, 3, 1),
(3, 3, 1),
(5, 3, 1),
(2, 4, 1),
(42026, 4, 1),
(7, 5, 1),
(42027, 5, 1),
(3, 6, 1),
(5, 6, 1),
(6, 6, 1),
(9, 6, 1),
(42027, 6, 1),
(9, 7, 1),
(11, 7, 1),
(42027, 7, 1),
(6, 8, 1),
(7, 8, 1),
(9, 8, 1),
(11, 9, 1),
(42031, 9, 1),
(6, 10, 1),
(7, 10, 1),
(9, 10, 1),
(11, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(11) NOT NULL,
  `Product_Name` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Category`, `Amount`, `Price`, `Image`) VALUES
(1, 'Apple', 'fruits', 300, 15.25, 'pngfind.com-apple-vector-png-5952311.png'),
(2, 'Banana', 'fruits', 100, 30, 'favpng_cavendish-banana-juice-cooking-banana-fruit.png'),
(3, 'Orange', 'fruits', 20, 15.25, 'favpng_citrus-sinensis-sweet-lemon-orange-fruit-food.png'),
(4, 'Tomato', 'veggies', 200, 13, 'Lovepik_com-401520273-tomato-splashing.png'),
(5, 'Pepper', 'veggies', 400, 10, 'pngaaa.com-3510282.png'),
(6, 'Kiwi', 'fruits', 60, 50, 'kiwis.png'),
(7, 'Cucumber', 'veggies', 500, 7.5, 'cucumber.png'),
(8, 'Corn', 'veggies', 150, 5.75, 'corn.jpg'),
(9, 'Chili', 'veggies', 250, 350, 'chilli.png'),
(10, 'Mango', 'fruits', 20, 15.25, 'mango.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_ID`),
  ADD KEY `order_feedback_fk` (`Order_ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `cust_order_fk` (`Customer_ID`);

--
-- Indexes for table `ordered_product`
--
ALTER TABLE `ordered_product`
  ADD PRIMARY KEY (`Product_ID`,`Order_ID`),
  ADD KEY `order_orderProd_fk` (`Order_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42033;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5001;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `order_feedback_fk` FOREIGN KEY (`Order_ID`) REFERENCES `order` (`Order_ID`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `cust_order_fk` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`Customer_ID`);

--
-- Constraints for table `ordered_product`
--
ALTER TABLE `ordered_product`
  ADD CONSTRAINT `orderProd_prod_fk` FOREIGN KEY (`Product_ID`) REFERENCES `product` (`Product_ID`),
  ADD CONSTRAINT `order_orderProd_fk` FOREIGN KEY (`Order_ID`) REFERENCES `order` (`Order_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

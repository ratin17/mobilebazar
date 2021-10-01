


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+06:00";



CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `product` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `product` (`item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
('Samsung', 'Samsung Galaxy 10', 152.00, './assets/products/1.png', '2020-03-28 11:08:57'), -- NOW()
('Redmi', 'Redmi Note 7', 122.00, './assets/products/2.png', '2020-03-28 11:08:57'),
('Redmi', 'Redmi Note 6', 122.00, './assets/products/3.png', '2020-03-28 11:08:57'),
('Redmi', 'Redmi Note 5', 122.00, './assets/products/4.png', '2020-03-28 11:08:57'),
('Redmi', 'Redmi Note 4', 122.00, './assets/products/5.png', '2020-03-28 11:08:57'),
('Redmi', 'Redmi Note 8', 122.00, './assets/products/6.png', '2020-03-28 11:08:57'),
('Redmi', 'Redmi Note 9', 122.00, './assets/products/8.png', '2020-03-28 11:08:57'),
('Redmi', 'Redmi Note', 122.00, './assets/products/10.png', '2020-03-28 11:08:57'),
('Samsung', 'Samsung Galaxy S6', 152.00, './assets/products/11.png', '2020-03-28 11:08:57'),
('Samsung', 'Samsung Galaxy S7', 152.00, './assets/products/12.png', '2020-03-28 11:08:57'),
('Apple', 'Apple iPhone 5', 152.00, './assets/products/13.png', '2020-03-28 11:08:57'),
('Apple', 'Apple iPhone 6', 152.00, './assets/products/14.png', '2020-03-28 11:08:57'),
('Apple', 'Apple iPhone 7', 152.00, './assets/products/15.png', '2020-03-28 11:08:57');



CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `user` (`first_name`, `last_name`, `email`,`password`,`status`,`register_date`) VALUES
('Mehrab', 'Tuition', NOW()),
('Akshay', 'Kashyap', NOW());



CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



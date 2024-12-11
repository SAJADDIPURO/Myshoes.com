ET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `akun` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `seller` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `akun` (`id`, `username`, `pw`, `seller`) VALUES
(1, 'andromeda', '$2y$10$yw9oAXTNkS9OoUtO2awtXuy9HZRdvxfL1iBPwLuz4bqaXOSjHd1bq', 1),
(2, 'surya', '$2y$10$eAa2Zcc2835539PAJZWZeebGrqHhDRWLu0M5DDz0WjCCjqv1ocPNW', 1),
(3, 'paquito', '$2y$10$WymxTx8onJ2ldO3LyoRir.XiqXSjXm5MHgSWGoWFh6rDdD3.xMtMG', 0),
(8, 'satria mahatir', '$2y$10$X/lb9W4O1m66W/j8RiWtrebeggwJaPeDfmwUQI8ssFPpEHXWtX0sa', 1);


CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `descript` varchar(10000) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `cart` (`id`, `title`, `price`, `descript`, `nama`) VALUES
(2, 'Macbook second hasil COD di cikarang', '10000.000', 'Laptop seken 10jtan doang cek!', 'Coki Pardede'),
(5, 'Katyusha Missile Rocket Launcher | Made in Uni Soviet Weapon Factory, Tulskay Factory', '10.000000000', 'This Is one of the deadly weapon in world war 2 made in Uni Soviet, The Country That Is Lead As The Conqueror Of Nazi, Germany!', 'Joseph Stalin');


CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `descript` varchar(10000) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `products` (`id`, `title`, `price`, `descript`, `nama`) VALUES
(11, 'Katyusha Missile Rocket Launcher | Made in Uni Soviet Weapon Factory, Tulskay Factory', '10.000000000', 'This Is one of the deadly weapon in world war 2 made in Uni Soviet, The Country That Is Lead As The Conqueror Of Nazi, Germany!', 'Joseph Stalin');


ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `akun`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;


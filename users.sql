-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Stř 30. lis 2022, 20:02
-- Verze serveru: 10.4.27-MariaDB
-- Verze PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `login_onlinemedicalmanagmensystem`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

<<<<<<< HEAD

USE login_onlinemedicalmanagmensystem;
=======
>>>>>>> 3c874bb42d4a160cbda983ee5b0d768e9fd65ef4
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(3, 3901, 'honza@svacek.eu', '1234', '2022-11-29 20:34:12'),
(4, 9791827975325, 'kokot', 'kokot', '2022-11-29 20:35:14'),
(5, 49606555401, 'bara', '123456', '2022-11-30 17:59:29'),
(6, 7381514583537, 'Luke', '7777', '2022-11-30 18:55:37');

--
-- Indexy pro exportované tabulky
--

--
<<<<<<< HEAD
-- Indexy pro tabulku `users`
=======
-- Indexy pro tabulku `users`
>>>>>>> 3c874bb42d4a160cbda983ee5b0d768e9fd65ef4
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
<<<<<<< HEAD
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
=======
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
>>>>>>> 3c874bb42d4a160cbda983ee5b0d768e9fd65ef4

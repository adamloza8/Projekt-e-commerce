-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Gru 2020, 18:45
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ecom_db`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Układ zawieszenia'),
(2, 'Układ hamulcowy'),
(3, 'Opony');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_amount` float NOT NULL,
  `order_transaction` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `order_currency` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text COLLATE utf8_polish_ci NOT NULL,
  `short_description` text COLLATE utf8_polish_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_description`, `short_description`, `product_image`) VALUES
(1, 'Wahacze do Passata', 1, 1152, 3, 'Wahacze do Passacika\r\n', 'Krótki opis produktu', 'https://sklep.elitpolska.pl/pictures/safopic/AK2/File/0035/35126324-7AEC-12B5-7B09-D4562EC5BE31_L.JPG?v211'),
(2, 'Amortyzatory Accord VII', 1, 399, 2, 'Z tymi amorami twoja Honda nie zardzewieje!', 'Krótki opis produktu.', 'https://images.2407.pl/media/images/products/3882/7096073/409003.jpg'),
(5, 'Opona BRIDGESTONE', 3, 209, 33, 'Opona osobowa zimowa BRIDGESTONE Blizzak LM005 205/55 R16 91T BRIDGESTONE 20555R16LM00591TCA71', 'Opona osobowa zimowa BRIDGESTONE Blizzak LM005 205/55 R16 91T BRIDGESTONE 20555R16LM00591TCA71', 'https://v.iparts.pl/000/20555R16LM00591TCA71-BRI/dokumenty/opona-osobowa-zimowa-bridgestone-blizzak-lm005-20555-r16-91t-bridgestone.jpg'),
(6, 'Tarcza ham. Maxgear', 2, 49, 44, 'Tarcza hamulcowa MAXGEAR 19-0791', 'Tarcza hamulcowa MAXGEAR 19-0791\r\n', 'https://t.iparts.pl/403/5907558539424_LARGE/dokumenty/tarcza-hamulcowa-maxgear.jpg'),
(7, 'Klocki ham. Kamoka', 2, 45, 11, 'Klocki hamulcowe - komplet KAMOKA KAMOKA JQ1013298\r\n', 'Klocki hamulcowe - komplet KAMOKA KAMOKA JQ1013298\r\n', 'https://t.iparts.pl/185/JQ1013298/dokumenty/klocki-hamulcowe-komplet-kamoka.jpg'),
(8, 'Szczęki ham. Girling', 2, 69, 22, 'Szczęki hamulcowe - komplet GIRLING 5180719\r\n', 'Szczęki hamulcowe - komplet GIRLING 5180719\r\n', 'https://t.iparts.pl/279/02795180719_1/dokumenty/szczeki-hamulcowe-komplet-girling.jpg'),
(9, 'Łożysko koła GSP', 1, 69, 55, 'Łożysko koła GSP 9235011\r\n', 'Łożysko koła GSP 9235011\r\n', 'https://t.iparts.pl/373/9235011/dokumenty/lozysko-kola-gsp.jpg'),
(10, 'Opona MATADOR ', 3, 127, 111, 'Opona całoroczna MATADOR MP62 Allweather Evo 155/80 R13 79T MATADOR 15580R13MP62ALLWEATHEREVO79TFC71\r\n', 'Opona całoroczna MATADOR MP62 Allweather Evo 155/80 R13 79T MATADOR 15580R13MP62ALLWEATHEREVO79TFC71\r\n', 'https://v.iparts.pl/000/15580R13MP62ALLWEATHEREVO79TFC71-MAT/dokumenty/opona-caloroczna-matador-mp62-allweather-evo-15580-r13-79t-matador.jpg'),
(11, 'Opona GOODYEAR\r\n', 3, 231, 99, 'Opona osobowa całoroczna GOODYEAR Vector 4Season Gen-3 175/65 R14 86H GOODYEAR 17565R14VECTOR4SEASONGEN386HCB69\r\n', 'Opona osobowa całoroczna GOODYEAR Vector 4Season Gen-3 175/65 R14 86H GOODYEAR 17565R14VECTOR4SEASONGEN386HCB69\r\n', 'https://v.iparts.pl/000/17565R14VECTOR4SEASONGEN386HCB69-GDY/dokumenty/opona-osobowa-caloroczna-goodyear-vector-4season-gen-3-17565-r14-86h-goodyear.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'adam', 'frentzen@wp.pl', '123'),
(2, 'jarek', 'jaroslaw@gmail.com', '456');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeksy dla tabeli `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

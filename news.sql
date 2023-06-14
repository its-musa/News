-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Haz 2023, 13:46:46
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `news`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `news` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`id`, `title`, `news`) VALUES
(1, 'Haber 1', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus fugit eum beatae nostrum excepturi omnis iste! Tempore error id unde ea omnis quae corporis dolorum a hic iure nesciunt officiis laboriosam dolores, voluptatibus eos deleniti quaerat? Earum natus aut labore fugiat nemo? Mollitia, debitis? Soluta maxime consectetur voluptates consequuntur dolore nobis at, iste, quaerat non repellendus consequatur? Asperiores, facere! Doloremque consequuntur nesciunt rem earum aperiam sunt asperiores corrupti doloribus. Eveniet quaerat temporibus, fugit fuga sed itaque vero iusto magnam dolores! At repellat eos maxime, harum, possimus iure delectus dignissimos blanditiis illo sequi laudantium cumque dolor sapiente sit totam cupiditate nulla!'),
(2, 'Haber 2', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, nulla incidunt dicta corrupti facere, pariatur enim reiciendis laborum itaque officia aspernatur autem assumenda illo omnis nihil labore earum ea quos natus sit quam! Deleniti iure assumenda, dolorum similique, est expedita voluptas quibusdam ratione, nesciunt hic ducimus magnam eaque? Minima, beatae?');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

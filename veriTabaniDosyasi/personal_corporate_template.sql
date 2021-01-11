-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 11 Oca 2021, 08:07:05
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `personal_corporate_template`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_tablosu`
--

CREATE TABLE `admin_tablosu` (
  `admin_id` int(11) NOT NULL,
  `admin_mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `admin_sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin_tablosu`
--

INSERT INTO `admin_tablosu` (`admin_id`, `admin_mail`, `admin_sifre`) VALUES
(1, 'example@example.com', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimda_tablosu`
--

CREATE TABLE `hakkimda_tablosu` (
  `hakkimda_id` int(11) NOT NULL,
  `ana_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yardimci_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `site_adi` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `giris_paragraf` text COLLATE utf8_turkish_ci NOT NULL,
  `gelisme_paragraf` text COLLATE utf8_turkish_ci NOT NULL,
  `sonuc_paragraf` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimda_tablosu`
--

INSERT INTO `hakkimda_tablosu` (`hakkimda_id`, `ana_baslik`, `yardimci_baslik`, `ad`, `telefon`, `mail`, `site_adi`, `adres`, `giris_paragraf`, `gelisme_paragraf`, `sonuc_paragraf`) VALUES
(1, 'Hakkımda!', 'Herkese Merhaba!', 'Admin Admin', '000 000 00 00', 'example@example.com', 'www.example.com', 'istanbul', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eius atque laboriosam impedit illo tempora assumenda consequuntur fuga delectus numquam amet ea beatae magnam praesentium, ratione iste magni quaerat dicta?\r\n', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eius atque laboriosam impedit illo tempora assumenda consequuntur fuga delectus numquam amet ea beatae magnam praesentium, ratione iste magni quaerat dicta?\r\n', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eius atque laboriosam impedit illo tempora assumenda consequuntur fuga delectus numquam amet ea beatae magnam praesentium, ratione iste magni quaerat dicta?\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim_tablosu`
--

CREATE TABLE `iletisim_tablosu` (
  `iletisim_id` int(11) NOT NULL,
  `iletisim_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_soyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_konu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mesaj` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim_tablosu`
--

INSERT INTO `iletisim_tablosu` (`iletisim_id`, `iletisim_ad`, `iletisim_soyad`, `iletisim_mail`, `iletisim_konu`, `iletisim_mesaj`) VALUES
(1, 'john', 'Doe', 'example@example.com', 'site hakkında', 'lorem ipsum dolor set amium'),
(3, 'mk', 'km', 'example@example.com', 'mesaj deneme', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi inventore dolore, tenetur quae odit, dolor quia assumenda, ea quos mollitia eaque reprehenderit tempora blanditiis adipisci est? Iure odit praesentium pariatur.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilgialani_tablosu`
--

CREATE TABLE `ilgialani_tablosu` (
  `ilgialani_id` int(11) NOT NULL,
  `ana_baslik` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `logo_url` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `orta_baslik` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ilgialani_tablosu`
--

INSERT INTO `ilgialani_tablosu` (`ilgialani_id`, `ana_baslik`, `logo_url`, `orta_baslik`, `icerik`) VALUES
(1, 'İlgi Alanlarım!', 'fas fa-brush', 'Web Development', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(5, 'İlgi Alanlarım!', 'fas fa-gamepad', 'Game Development', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(6, 'İlgi Alanlarım!', 'fas fa-laptop', 'Machine Learning', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kapak_tablosu`
--

CREATE TABLE `kapak_tablosu` (
  `id` int(11) NOT NULL,
  `kapak_resmi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_meslek` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `facebook_url` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `instagram_url` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `twitter_url` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `linkedin_url` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kapak_tablosu`
--

INSERT INTO `kapak_tablosu` (`id`, `kapak_resmi`, `kullanici_adi`, `kullanici_meslek`, `facebook_url`, `instagram_url`, `twitter_url`, `linkedin_url`) VALUES
(1, 'profilAdmin.jpg', 'Admin Admin', 'Web Developer / Software Developer', 'www.facebook.com', 'www.instagram.com', 'www.twitter.com', 'www.linkedin.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ozgecmis_tablosu`
--

CREATE TABLE `ozgecmis_tablosu` (
  `ozgecmis_id` int(11) NOT NULL,
  `ana_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kart_anabaslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kart_ortabaslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kart_yazisi` text COLLATE utf8_turkish_ci NOT NULL,
  `kart_konum` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ozgecmis_tablosu`
--

INSERT INTO `ozgecmis_tablosu` (`ozgecmis_id`, `ana_baslik`, `kart_anabaslik`, `kart_ortabaslik`, `kart_yazisi`, `kart_konum`) VALUES
(4, 'Öz Geçmişim!', 'İlk Öğretim', 'xxx İlk Okulu 2000-2008', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1),
(5, 'Öz Geçmişim!', 'Lise Eğitimi', 'XXX Lisesi 2010-2014', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 0),
(6, 'Öz Geçmişim!', 'Lisans Eğitimi', 'xxx Üniversitesi 1996-2000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1),
(7, 'Öz Geçmişim!', 'Stajyer', 'xxx Şirketi 2000-2008', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teklif_tablosu`
--

CREATE TABLE `teklif_tablosu` (
  `teklif_id` int(11) NOT NULL,
  `ana_baslik` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `button_metni` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetenekler_tablosu`
--

CREATE TABLE `yetenekler_tablosu` (
  `yetenekler_id` int(11) NOT NULL,
  `ana_baslik` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `yetenek_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yetenek_puani` varchar(5) COLLATE utf8_turkish_ci NOT NULL,
  `renk` tinyint(4) NOT NULL,
  `yetenekbar_konum` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yetenekler_tablosu`
--

INSERT INTO `yetenekler_tablosu` (`yetenekler_id`, `ana_baslik`, `yetenek_adi`, `yetenek_puani`, `renk`, `yetenekbar_konum`) VALUES
(1, 'Yetenekler!', 'Html/CSS/Bootstrap', '75', 2, 0),
(3, 'Yeteneklerim', 'JavaScript', '60', 1, 0),
(5, 'Yetenekler!', 'PHP', '80', 3, 0),
(6, 'Yetenekler!', 'C#', '75', 2, 1),
(7, 'Yeteneklerim', 'Java', '50', 0, 1),
(8, 'Yeteneklerim', 'Python', '60', 1, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin_tablosu`
--
ALTER TABLE `admin_tablosu`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `hakkimda_tablosu`
--
ALTER TABLE `hakkimda_tablosu`
  ADD PRIMARY KEY (`hakkimda_id`);

--
-- Tablo için indeksler `iletisim_tablosu`
--
ALTER TABLE `iletisim_tablosu`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `ilgialani_tablosu`
--
ALTER TABLE `ilgialani_tablosu`
  ADD PRIMARY KEY (`ilgialani_id`);

--
-- Tablo için indeksler `kapak_tablosu`
--
ALTER TABLE `kapak_tablosu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ozgecmis_tablosu`
--
ALTER TABLE `ozgecmis_tablosu`
  ADD PRIMARY KEY (`ozgecmis_id`);

--
-- Tablo için indeksler `teklif_tablosu`
--
ALTER TABLE `teklif_tablosu`
  ADD PRIMARY KEY (`teklif_id`);

--
-- Tablo için indeksler `yetenekler_tablosu`
--
ALTER TABLE `yetenekler_tablosu`
  ADD PRIMARY KEY (`yetenekler_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin_tablosu`
--
ALTER TABLE `admin_tablosu`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimda_tablosu`
--
ALTER TABLE `hakkimda_tablosu`
  MODIFY `hakkimda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim_tablosu`
--
ALTER TABLE `iletisim_tablosu`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `ilgialani_tablosu`
--
ALTER TABLE `ilgialani_tablosu`
  MODIFY `ilgialani_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `kapak_tablosu`
--
ALTER TABLE `kapak_tablosu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `ozgecmis_tablosu`
--
ALTER TABLE `ozgecmis_tablosu`
  MODIFY `ozgecmis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `teklif_tablosu`
--
ALTER TABLE `teklif_tablosu`
  MODIFY `teklif_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `yetenekler_tablosu`
--
ALTER TABLE `yetenekler_tablosu`
  MODIFY `yetenekler_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

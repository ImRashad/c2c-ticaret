-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 11 Eyl 2020, 17:11:45
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `c2c`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_seher` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adress` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_maps` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analiystic` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_zopim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_bakim` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_seher`, `ayar_adress`, `ayar_mesai`, `ayar_maps`, `ayar_analiystic`, `ayar_zopim`, `ayar_facebook`, `ayar_twitter`, `ayar_google`, `ayar_youtube`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`, `ayar_bakim`) VALUES
(0, 'dimg/21566289212185929349logo.png', 'E-Ticaret Udemy Kursu', 'E-Ticaret Udemy Kursu.', 'udemy', 'RASHAD_UDEMY', '+994 99-809-89-79', '+994 99-809-89-79', '+994 99-809-89-79', 'salehov_1970@mail.ru', 'Bakı şəhəri.', 'Bakı şəh. Xətai ray. Gəncə PR-Tİ', '7/24', 'map', 'analiystic', 'https://static.zdassets.com/ekr/snippet.js?key=02b7259a-2764-458f-8a1c-79371c2fd02e', 'www.facebook.com', 'www.twitter.com', 'www.google.com', 'www.youtube.com', 'mail.alanadiniz.com', 'Rashad', 'password', '587', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banka`
--

CREATE TABLE `banka` (
  `banka_id` int(11) NOT NULL,
  `banka_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `banka_iban` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `banka_hesapadsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `banka_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `banka`
--

INSERT INTO `banka` (`banka_id`, `banka_ad`, `banka_iban`, `banka_hesapadsoyad`, `banka_durum`) VALUES
(1, 'Kapital Bank', 'AZE1234567898765432', 'SALEHLI RASHAD', '1'),
(2, 'Beynəlxalq Bank', 'AZE9876543212345678', 'QASİMOV İLKİN', '1'),
(3, 'Unibank', 'AZE5678943213214678', 'ALİSOV BAXİS', '1'),
(4, 'Rabitəbank', 'AZE9087456321243568', 'SULEYMANLİ YUSİF', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_basliq` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_video` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyon` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_basliq`, `hakkimizda_icerik`, `hakkimizda_video`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
(0, 'UDEMY PHP DƏRSLƏRİ', '<p>Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. ViLorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınanLorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınanLorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınanLorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınanLorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınanLorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınanLorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınanLorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınanLorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınanrginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan</p>\r\n', 'WYOi0jmSEVE', 'eklenerek değiştimişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir. İnternet\'teki tüm Lorem Ipsum üreteçleri önceden belirlenmiş meti', 'eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir. İnternet\'teki tüm Lorem Ipsum üreteçleri önceden belirlenmiş meti');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_ust` int(2) NOT NULL,
  `kategori_seourl` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(2) NOT NULL,
  `kategori_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_ad`, `kategori_ust`, `kategori_seourl`, `kategori_sira`, `kategori_durum`) VALUES
(16, 'Saat', 0, 'saat', 1, '1'),
(17, 'Televizor', 0, 'televizor', 2, '1'),
(18, 'Notebook', 0, 'notebook', 3, '1'),
(19, 'Ev eşyaları', 0, 'ev-esyalari', 4, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `MerchantKey` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_magaza` int(2) NOT NULL,
  `kullanici_magazafoto` varchar(100) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'dimg/magaza-foto/magaza-foto-yok.png',
  `kullanici_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_resim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tc` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_banka` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_iban` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_soyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adress` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_seher` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tip` enum('PERSONAL','PRIVATE_COMPANY') COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_vdairesi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_vno` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` int(2) NOT NULL,
  `kullanici_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `MerchantKey`, `kullanici_magaza`, `kullanici_magazafoto`, `kullanici_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_banka`, `kullanici_iban`, `kullanici_ad`, `kullanici_soyad`, `kullanici_mail`, `kullanici_tel`, `kullanici_password`, `kullanici_adress`, `kullanici_seher`, `kullanici_tip`, `kullanici_vdairesi`, `kullanici_vno`, `kullanici_yetki`, `kullanici_durum`) VALUES
(2, '', 0, '', '2020-09-02 16:02:47', '', '', '', '', '', '', 'rashad@mail.ru', '', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', 5, '1'),
(4, '', 2, 'dimg/magaza-foto/magaza-foto-yok.png', '2020-09-06 00:17:52', '', 'aze12345678', 'Kapital BANK', '8728259696231893', 'Rashad', 'Salehli', 'rashad@mail.com', '+994 99 809 89 79', 'e10adc3949ba59abbe56e057f20f883e', '', 'BAKU', 'PERSONAL', '', '', 1, '1'),
(5, '', 2, 'dimg/magaza-foto/magaza-foto-yok.png', '2020-09-06 00:21:10', '', 'aze1234567', 'Beynelxalq', '4235235634', 'Seymur', 'Alisov', 'seymur@mail.com', '0556455816', 'e10adc3949ba59abbe56e057f20f883e', 'baki', 'BAKU', 'PERSONAL', 'baki', '2134124', 1, '1'),
(6, '', 2, 'dimg/magaza-foto/magaza-foto-yok.png', '2020-09-09 23:11:01', '', 'AZE02837465', 'RabitəBank', '326234652384235234', 'Baxış', 'Alışov', 'baxis@mail.com', '0998098979', 'e10adc3949ba59abbe56e057f20f883e', '', 'Balakən', 'PERSONAL', '', '', 1, '1'),
(7, '', 2, 'dimg/magaza-foto/magaza-foto-yok.png', '2020-09-09 23:11:44', '', 'AZE71829364', 'Beynəlxalq Bank', '545236263563256', 'Məlik', 'Cəfərov', 'malik@mail.ru', '0707777777', 'e10adc3949ba59abbe56e057f20f883e', '', 'Lənkəran', 'PERSONAL', '', '', 1, '1'),
(8, '', 2, 'dimg/magaza-foto/magaza-foto-yok.png', '2020-09-09 23:12:29', '', 'AZE23568934', 'Kapital Bank', '77345627345623465', 'İlkin', 'Qasımov', 'ilkin@mail.com', '0558349576', 'e10adc3949ba59abbe56e057f20f883e', '', 'Sumqayıt', 'PERSONAL', '', '', 1, '1'),
(9, '', 0, 'dimg/magaza-foto/magaza-foto-yok.png', '2020-09-11 18:10:24', '', '', '', '', 'BaxışBaxışBaxışBaxışBaxışBaxışBaxışBaxışBaxışBaxışBaxışBaxışBaxışBaxışBaxışBaxışBaxışBaxış', 'BaxışBaxışBaxış', 'rashad@mail.ruasaas', '', '7fa8282ad93047a4d6fe6111c93b308a', '', '', 'PERSONAL', '', '', 1, '0'),
(10, '', 2, 'dimg/magaza-foto/magaza-foto-yok.png', '2020-09-11 18:12:31', '', 'AZE02837465', 'RabitəBank', '326234652384235234', 'Baxış', 'Qasımov', 'saleh@mail.ru', '0998098979', 'e10adc3949ba59abbe56e057f20f883e', '', 'Balakən', 'PERSONAL', '', '', 1, '1'),
(11, '', 2, 'dimg/magaza-foto/magaza-foto-yok.png', '2020-09-11 19:58:00', '', 'AZE02837465', 'RabitəBank', '326234652384235234', 'Məlik', 'Qasımov', 'asd@mail.com', '0998098979', 'e10adc3949ba59abbe56e057f20f883e', '', 'Balakən', 'PERSONAL', '', '', 1, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_ust` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `menu_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `menu_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `menu_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `menu_sira` int(2) NOT NULL,
  `menu_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `menu_seourl` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_ust`, `menu_ad`, `menu_detay`, `menu_url`, `menu_sira`, `menu_durum`, `menu_seourl`) VALUES
(3, '', 'Haqqımızda', '', 'hakkimizda.php', 2, '1', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj`
--

CREATE TABLE `mesaj` (
  `mesaj_id` int(11) NOT NULL,
  `mesaj_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mesaj_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_gel` int(11) NOT NULL,
  `kullanici_gon` int(11) NOT NULL,
  `mesaj_okuma` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mesaj`
--

INSERT INTO `mesaj` (`mesaj_id`, `mesaj_zaman`, `mesaj_detay`, `kullanici_gel`, `kullanici_gon`, `mesaj_okuma`) VALUES
(17, '2020-09-11 19:56:38', 'asd\r\n', 8, 4, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `siparis_id` int(11) NOT NULL,
  `siparis_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_id` int(11) NOT NULL,
  `kullanici_idsatici` int(11) NOT NULL,
  `siparis_odeme` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`siparis_id`, `siparis_zaman`, `kullanici_id`, `kullanici_idsatici`, `siparis_odeme`) VALUES
(750054, '2020-09-11 15:56:12', 4, 8, '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_detay`
--

CREATE TABLE `siparis_detay` (
  `siparisdetay_id` int(11) NOT NULL,
  `siparis_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `kullanici_idsatici` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urun_fiyat` float(9,2) NOT NULL,
  `urun_adet` int(3) NOT NULL,
  `siparisdetay_kargozaman` datetime NOT NULL,
  `siparisdetay_kargoad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `siparisdetay_kargono` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `siparisdetay_onay` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  `siparisdetay_onayzaman` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis_detay`
--

INSERT INTO `siparis_detay` (`siparisdetay_id`, `siparis_id`, `kullanici_id`, `kullanici_idsatici`, `urun_id`, `urun_fiyat`, `urun_adet`, `siparisdetay_kargozaman`, `siparisdetay_kargoad`, `siparisdetay_kargono`, `siparisdetay_onay`, `siparisdetay_onayzaman`) VALUES
(60, 750054, 4, 8, 77, 1732.00, 0, '0000-00-00 00:00:00', '', '', '1', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

CREATE TABLE `urun` (
  `urun_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `urun_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `urunfoto_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_seourl` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyat` float(9,2) NOT NULL,
  `urun_satis` int(4) NOT NULL DEFAULT '0',
  `urun_video` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urun_keyword` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_stok` int(11) NOT NULL,
  `urun_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `urun_onecikar` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`urun_id`, `kullanici_id`, `kategori_id`, `urun_zaman`, `urunfoto_resimyol`, `urun_ad`, `urun_seourl`, `urun_detay`, `urun_fiyat`, `urun_satis`, `urun_video`, `urun_keyword`, `urun_stok`, `urun_durum`, `urun_onecikar`) VALUES
(60, 5, 19, '2020-09-09 19:14:26', 'dimg/urun-foto/3623014636.jpg', 'Beko DC 1560', 'beko-dc-1560', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>&Uuml;mumi x&uuml;susiyyətlər</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Tutum, kg</td>\r\n			<td>6</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Qurutma n&ouml;v&uuml;</td>\r\n			<td>Buxar sistemli</td>\r\n		</tr>\r\n		<tr>\r\n			<td>İdarəetmə n&ouml;v&uuml;</td>\r\n			<td>Mexaniki</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Displey</td>\r\n			<td>Yox</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Enerji sinfi</td>\r\n			<td>C</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Enerji sərfi, kWh</td>\r\n			<td>4.2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Rəngi</td>\r\n			<td>Ağ</td>\r\n		</tr>\r\n		<tr>\r\n			<th>&Uuml;st&uuml;nl&uuml;klər</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Proqram sayı</td>\r\n			<td>11</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Əsas funksiyalar</td>\r\n			<td>Tez qurutma</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Təhl&uuml;kəsizlik</td>\r\n			<td>Uşaq kilidi</td>\r\n		</tr>\r\n		<tr>\r\n			<th>&Ouml;l&ccedil;&uuml;lər</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td>H&uuml;nd&uuml;rl&uuml;y&uuml;, sm</td>\r\n			<td>85</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Eni, sm</td>\r\n			<td>60</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dərinliyi, sm</td>\r\n			<td>54</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 835.00, 0, '', '', 3, '1', '0'),
(61, 5, 18, '2020-09-09 19:16:28', 'dimg/urun-foto/48819AMP-1-4.jpg', 'Asus Zenbook UX431FL-EH74 (90NB0PE1-M00790)', 'asus-zenbook-ux431fl-eh74-90nb0pe1-m00790', '<p>&Uuml;mumi məlumat</p>\r\n\r\n<p>Tip:</p>\r\n\r\n<p>Noutbuk</p>\r\n\r\n<p>Brand:</p>\r\n\r\n<p>Asus</p>\r\n\r\n<p>Model:</p>\r\n\r\n<p>Asus Zenbook UX431FL-EH74 (90NB0PE1-M00790)</p>\r\n\r\n<p>Rəng:</p>\r\n\r\n<p>G&uuml;m&uuml;ş&uuml;</p>\r\n\r\n<p>Təyinat:</p>\r\n\r\n<p>Dizayn / Montaj işləri / Oyun</p>\r\n\r\n<p>Proqram</p>\r\n\r\n<p>Proqram təminatı:</p>\r\n\r\n<p>Windows</p>\r\n\r\n<p>Texniki g&ouml;stəricilər</p>\r\n\r\n<p>Prosessor:</p>\r\n\r\n<p>Core i7</p>\r\n\r\n<p>S&uuml;rət:</p>\r\n\r\n<p>Intel&reg; Core&trade; i7-10510U (8M Cache, up to 4.90 GHz)</p>\r\n\r\n<p>Operativ yaddaş (RAM):</p>\r\n\r\n<p>8 GB</p>\r\n\r\n<p>Operativ yaddaşın s&uuml;rəti:</p>\r\n\r\n<p>DDR4 8 GB 2666 Mhz</p>\r\n\r\n<p>Qrafik kart:</p>\r\n\r\n<p>Diskret</p>\r\n\r\n<p>Qrafik yaddaş:</p>\r\n\r\n<p>NVIDIA&reg; GeForce&reg; MX250 2GB</p>\r\n\r\n<p>Ekran:</p>\r\n\r\n<p>14</p>\r\n\r\n<p>İcazə verilən genişlik:</p>\r\n\r\n<p>14 FHD (1920 x 1080) LED</p>\r\n\r\n<p>Səs:</p>\r\n\r\n<p>Daxili səs dinamikləri, daxili mikrofon</p>\r\n\r\n<p>Kamera:</p>\r\n\r\n<p>✔</p>\r\n\r\n<p>Yaddaş həcmi</p>\r\n\r\n<p>SSD (Sərt səthli disk):</p>\r\n\r\n<p>512 GB</p>\r\n\r\n<p>Kart oxuyucu:</p>\r\n\r\n<p>✔</p>\r\n\r\n<p>Qoşulma</p>\r\n\r\n<p>Qoşulma:</p>\r\n\r\n<p>HDMI</p>\r\n\r\n<p>Giriş portları:</p>\r\n\r\n<p>Kombo qulaqcıq və mikrofon girişi</p>\r\n\r\n<p>HDMİ:</p>\r\n\r\n<p>1</p>\r\n\r\n<p>USB:</p>\r\n\r\n<p>2</p>\r\n\r\n<p>USB Type C:</p>\r\n\r\n<p>1</p>\r\n\r\n<p>Şəbəkə</p>\r\n\r\n<p>Blutuz:</p>\r\n\r\n<p>✔</p>\r\n\r\n<p>Simsiz əlaqə:</p>\r\n\r\n<p>✔</p>\r\n\r\n<p>Əlavə</p>\r\n\r\n<p>Daxiletmə qurğusu:</p>\r\n\r\n<p>Tam &ouml;l&ccedil;&uuml;l&uuml;, sağ rəqəm panelsiz klaviatura</p>\r\n\r\n<p>Qida:</p>\r\n\r\n<p>47WHrs, 2S1P, 2-cell Li-ion</p>\r\n\r\n<p>Qabaritlər:</p>\r\n\r\n<p>323 x 210 x 15 mm</p>\r\n\r\n<p>&Ccedil;əki:</p>\r\n\r\n<p>1.50 kg</p>\r\n\r\n<p>Zəmanət m&uuml;ddəti:</p>\r\n\r\n<p>12 ay</p>\r\n', 2399.00, 0, '', '', 2, '1', '0'),
(62, 5, 16, '2020-09-09 19:17:57', 'dimg/urun-foto/42042picsart-09-03-05-22-38.jpg', 'QTR-890 ', 'qtr-890', '<p>Saatinizi her g&uuml;n takıyorsanız ayda bir&nbsp;<strong>saat kordonu temizliği</strong>&nbsp;yapmanız gerekir. Titiz saat koleksiyonerleri her g&uuml;n yatmadan &ouml;nce saatini &ccedil;ıkarıp temizler. Siz de bunu bir alışkanlık haline getirip her akşam saatinizi &ccedil;ıkardığınızda hızlı bir temizlik yaparsanız saatinizin &ouml;mr&uuml; uzayacaktır.</p>\r\n\r\n<p>&Ouml;zellikle altın rengi detayları olan bayan saatlerinde parlaklık &ouml;zelliğinin uzun yıllar s&uuml;rmesi i&ccedil;in sık bakım yapmak olduk&ccedil;a &ouml;nemli.&nbsp;<a href=\"https://www.ersasaat.com.tr/urunara?srchtxt=902682F2\" target=\"_blank\"><strong>Pierre Cardin 902682F2</strong></a>&nbsp;olduk&ccedil;a parlak, ince detayları olan bir saat. Ancak bu tip bayan saatleri g&uuml;n boyunca kolunuzda kaldığı i&ccedil;in uzun vadede kolunuzdaki nemden, parf&uuml;m&uuml;n&uuml;zden veya v&uuml;cut losyonunuzdan etkilenebilir. Bu tip materyalleri k&uuml;&ccedil;&uuml;k bir bezle de olsa d&uuml;zenli olarak temizlerseniz aylık temizliğinizi yapmanız da kolaylaştıracaktır.</p>\r\n\r\n<p>Kendi yaptığınız temizlik dışında yılda bir, saatinizi bir servise g&ouml;t&uuml;r&uuml;p profesyonel saat ve&nbsp;<strong>saat kordonu temizliği</strong>&nbsp;yaptırmanız da saatinizin &ouml;mr&uuml;n&uuml; uzatır. Saat ustaları sizin evde yaptığınız temizlikte ulaşamayacağınız noktalara ulaşır, &ccedil;izikleri alarak saatinizi parlatır.</p>\r\n', 269.99, 0, '', '', 1, '1', '0'),
(63, 4, 16, '2020-09-09 19:19:55', 'dimg/urun-foto/20636metal-saat-kordonu-parlatma-1.jpg', 'Metal saat TY-09', 'metal-saat-ty-09', '<p>Saatiniz suya dayanıklı bir saatse suyun altında yıkayıp g&ouml;zl&uuml;k bezi gibi yumuşak bir kumaş par&ccedil;asıyla nazik&ccedil;e silebilirsiniz. Saatinizle duşa, havuza veya denize giriyorsanız saatinizin kimyasallardan ve tuzdan etkilenmemesi i&ccedil;in metal saat kordonu parlatma işlemini normalden daha sık yapmalısınız. &Ouml;rneğin&nbsp;<a href=\"https://www.ersasaat.com.tr/urunara?srchtxt=efr-561db&amp;fkey=1099:4084\" target=\"_blank\"><strong>Casio Edifice EFR-561DB</strong></a>&nbsp;serisi 100 atm su ge&ccedil;irmezlik &ouml;zelliğine sahip, derindeniz dalışlarına dahi elverişli bir saat. Girintili &ccedil;ıkıntılı bir metal kordonu olan bu&nbsp;<strong><a href=\"https://www.ersasaat.com.tr/casio-saat\" target=\"_blank\">Casio</a></strong>&nbsp;saatin tuzdan etkilenmemesi ve &ccedil;izilmemesi i&ccedil;in denizden ve havuzdan sonra mutlaka yıkanması gerekir.</p>\r\n', 34.99, 0, '', '', 1, '1', '0'),
(64, 4, 17, '2020-09-09 19:21:27', 'dimg/urun-foto/2778604ArToqPXnW55EsuqQdCKKT-1.1597670614.fit_lpad.size_625x365.jpg', 'VIZIO 40\" Class V-Series LED 4K', 'vizio-40-class-v-series-led-4k', '<p>Experience immersive entertainment when watching your favourite movies and TV shows, thanks to the Hisense 24-inch P2 High Definition LED LCD TV.</p>\r\n\r\n<p>Key Features</p>\r\n\r\n<ul>\r\n	<li>The Hisense 24-inch P2 High Definition LED LCD TV has a 1366x768 screen resolution for crisp and sharp visuals.</li>\r\n	<li>Incorporating PureColor technology, the P2 LED TV has vibrant and accurate colour reproduction when playing various multimedia content.</li>\r\n	<li>For convenient catching-up with your favourite shows, this Hisense TV has a scheduled recording function*.</li>\r\n	<li>This 24-inch TV has a built-in USB media player to let you quickly access your multimedia files on your USB storage devices.</li>\r\n</ul>\r\n\r\n<p>*External USB storage device (min. 4GB) required and sold separately.</p>\r\n\r\n<p><img alt=\"Resolution HD\" src=\"https://azcd.harveynorman.com.au/media/wysiwyg/product/icon/resolution_hd.gif\" />&nbsp;&nbsp;</p>\r\n\r\n<h3>What&#39;s In The Box?</h3>\r\n\r\n<ul>\r\n	<li>1x Hisense 24-inch P2 High Definition LED LCD TV</li>\r\n	<li>1x Remote Controller</li>\r\n	<li>2x AAA Batteries</li>\r\n	<li>1x Quick Setup Guide</li>\r\n	<li>1x Warranty Sheet</li>\r\n</ul>\r\n', 4587.00, 0, '', '', 5, '1', '0'),
(65, 4, 19, '2020-09-09 19:23:36', 'dimg/urun-foto/2612620200901045839704_1.jpg', ' Tefal TW 7253', 'tefal-tw-7253', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>&Uuml;mumi x&uuml;susiyyətlər</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td>N&ouml;v</td>\r\n			<td>Tozsoran</td>\r\n		</tr>\r\n		<tr>\r\n			<td>G&uuml;c, W</td>\r\n			<td>550 W</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Toz toplayıcının n&ouml;v&uuml; / həcmi</td>\r\n			<td>2 lt</td>\r\n		</tr>\r\n		<tr>\r\n			<th>&Uuml;st&uuml;nl&uuml;klər</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Funksiyalar</td>\r\n			<td>Teleskopik boru, d&ouml;nən təkərlər, səs səviyyəsi 67dB, dolu torba g&ouml;stəricisi</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Naqilin uzunluğu</td>\r\n			<td>8.4 m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Rəngi</td>\r\n			<td>Qara- qırmızı</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 399.99, 0, '', '', 1, '1', '0'),
(66, 4, 19, '2020-09-09 19:24:42', 'dimg/urun-foto/3206820200818030140748_1.jpg', 'Beko WDB 7425 R2W', 'beko-wdb-7425-r2w', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>&Uuml;mumi x&uuml;susiyyətlər</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Y&uuml;kləmə n&ouml;v&uuml;</td>\r\n			<td>Frontal</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tutum, kq</td>\r\n			<td>7 kq</td>\r\n		</tr>\r\n		<tr>\r\n			<td>MAXI sıxma s&uuml;rəti</td>\r\n			<td>1200 d&ouml;vr</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Displey</td>\r\n			<td>LCD</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Enerji sinfi</td>\r\n			<td>A +</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Enerji sərfi, kWh</td>\r\n			<td>0.84 kW</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Su sərfi, lt</td>\r\n			<td>89 lt</td>\r\n		</tr>\r\n		<tr>\r\n			<td>MAXI təxirə salınma vaxtı, saat</td>\r\n			<td>24 saat</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Rəngi</td>\r\n			<td>Ağ</td>\r\n		</tr>\r\n		<tr>\r\n			<th>&Uuml;st&uuml;nl&uuml;klər</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Proqram sayı</td>\r\n			<td>15 yuma proqramı : Delicate wash, Economy wash, Baby wash, Jeans wash, Sportswear, Outerwear, Down wash, Mixed fabric program, Super rinse, Quick wash, Steam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Əsas funksiyalar</td>\r\n			<td>Bitmə siqnalı, HomeWhiz Eko sistem, Səs səviyyəsi yuma/sıxma: 58/75 dB, Gecə rejimi, &Ouml;n yuyulma,</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Təhl&uuml;kəsizlik</td>\r\n			<td>Uşaq kilidi</td>\r\n		</tr>\r\n		<tr>\r\n			<th>&Ouml;l&ccedil;&uuml;lər</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td>H&uuml;nd&uuml;rl&uuml;y&uuml;, sm</td>\r\n			<td>84 sm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Eni, sm</td>\r\n			<td>60 sm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dərinliyi, sm</td>\r\n			<td>50 sm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>&Ccedil;atdırılmada<br />\r\n&ouml;dəmə &uuml;sulu</h3>\r\n\r\n<p>&nbsp;</p>\r\n', 999.00, 0, '', '', 8, '1', '0'),
(67, 6, 19, '2020-09-09 19:29:18', 'dimg/urun-foto/4328120181206023437559_2.jpg', ' Ariston ALTEAS X (30kW)', 'ariston-alteas-x-30kw', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>&Uuml;mumi x&uuml;susiyyətlər</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td>N&ouml;v&uuml;</td>\r\n			<td>Konveksionel</td>\r\n		</tr>\r\n		<tr>\r\n			<td>İsitmə g&uuml;c&uuml;</td>\r\n			<td>28.1 kW</td>\r\n		</tr>\r\n		<tr>\r\n			<td>İstilik aralığı</td>\r\n			<td>36-60 dərəcə</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Yanacaq tipi</td>\r\n			<td>Təbii qaz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Displey</td>\r\n			<td>LCD Ekran</td>\r\n		</tr>\r\n		<tr>\r\n			<th>&Uuml;st&uuml;nl&uuml;klər</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Əsas funksiyaları</td>\r\n			<td>BusBridgeNet&reg; texnologiyası, Smart isitmə sistemi, Hermetik baca sistemi,</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Əlavə &ouml;zəllikləri</td>\r\n			<td>Wi-Fi, Saat Proqramlaşdırma sistemi</td>\r\n		</tr>\r\n		<tr>\r\n			<th>&Ouml;l&ccedil;&uuml;lər</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td>&Ouml;l&ccedil;&uuml;s&uuml;</td>\r\n			<td>745x400x315 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&Ccedil;əkisi</td>\r\n			<td>32 kg</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1387.00, 0, '', '', 2, '1', '1'),
(68, 6, 19, '2020-09-09 19:30:17', 'dimg/urun-foto/2020420190521044913600_2.jpg', 'Riffel ASW-FJ 090/ 191', 'riffel-asw-fj-090-191', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>&Uuml;mumi x&uuml;susiyyətlər</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td>N&ouml;v&uuml;</td>\r\n			<td>Split</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sahə, м2</td>\r\n			<td>30-35 kv/m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Soyutma, Btu/h</td>\r\n			<td>9000 Btu/h</td>\r\n		</tr>\r\n		<tr>\r\n			<td>İsitmə, Btu/h</td>\r\n			<td>9000 Btu/h</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Rəngi</td>\r\n			<td>Qara</td>\r\n		</tr>\r\n		<tr>\r\n			<th>&Uuml;st&uuml;nl&uuml;klər</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Filtrlər</td>\r\n			<td>Aktiv karbon filtr, Antibakterial</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Rejim və funksiyalar</td>\r\n			<td>Yuxu rejimi,</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Əlavə &uuml;st&uuml;nl&uuml;klər</td>\r\n			<td>Sensor idarə, qaz- R410</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İş g&ouml;stəriciləri</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Səs səviyyəsi, dBA</td>\r\n			<td>-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Enerji sinfi - soyutma/isitmə</td>\r\n			<td>-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&Ouml;l&ccedil;&uuml;ləri, sm (HxExQ)</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 703.90, 0, '', '', 1, '1', '1'),
(69, 6, 19, '2020-09-09 19:31:05', 'dimg/urun-foto/4283220200422055334023_4.jpg', 'Beko WTV 9636 XCM', 'beko-wtv-9636-xcm', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>&Uuml;mumi x&uuml;susiyyətlər</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Y&uuml;kləmə n&ouml;v&uuml;</td>\r\n			<td>Frontal</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tutum, kq</td>\r\n			<td>9 kq</td>\r\n		</tr>\r\n		<tr>\r\n			<td>MAXI sıxma s&uuml;rəti</td>\r\n			<td>1200</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Displey</td>\r\n			<td>+</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Enerji sinfi</td>\r\n			<td>A+++ (-10%)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Enerji sərfi, kWh</td>\r\n			<td>195 kWh (illik)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>MAXI təxirə salınma vaxtı, saat</td>\r\n			<td>24 saat</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Rəngi</td>\r\n			<td>Ağ</td>\r\n		</tr>\r\n		<tr>\r\n			<th>&Uuml;st&uuml;nl&uuml;klər</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Proqram sayı</td>\r\n			<td>15 yuma proqramı</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Əsas funksiyalar</td>\r\n			<td>ProSmart inverter motor, Cottons, Cottons Eco, Synthetics, Mini/Mini14&rsquo;, Wool, Hand Wash, Delicates, Jeans, Outdoor, Hygiene+, Duvet</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Təhl&uuml;kəsizlik</td>\r\n			<td>Uşaq kilidi</td>\r\n		</tr>\r\n		<tr>\r\n			<th>&Ouml;l&ccedil;&uuml;lər</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td>H&uuml;nd&uuml;rl&uuml;y&uuml;, sm</td>\r\n			<td>84 sm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Eni, sm</td>\r\n			<td>60 sm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dərinliyi, sm</td>\r\n			<td>64 sm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 2399.00, 0, '', '', 1, '1', '0'),
(70, 7, 18, '2020-09-09 19:35:07', 'dimg/urun-foto/47740Dell-Latitude-5491-Notebook-1.jpg', 'Noutbuk Acer Aspire 1 A111-31 (NX.GW2ER.004)', 'noutbuk-acer-aspire-1-a111-31-nx-gw2er-004', '<p>&Uuml;mumi məlumat</p>\r\n\r\n<p>Tip:</p>\r\n\r\n<p>Noutbuk</p>\r\n\r\n<p>Brand:</p>\r\n\r\n<p>Acer</p>\r\n\r\n<p>Model:</p>\r\n\r\n<p>Acer Aspire 1 A111-31 (NX.GW2ER.004)</p>\r\n\r\n<p>Rəng:</p>\r\n\r\n<p>Qara</p>\r\n\r\n<p>Təyinat:</p>\r\n\r\n<p>Ofis işləri/internet/multimedia</p>\r\n\r\n<p>Proqram</p>\r\n\r\n<p>Proqram təminatı:</p>\r\n\r\n<p>FreeDos</p>\r\n\r\n<p>Texniki g&ouml;stəricilər</p>\r\n\r\n<p>Prosessor:</p>\r\n\r\n<p>Celeron</p>\r\n\r\n<p>S&uuml;rət:</p>\r\n\r\n<p>Intel&reg; Celeron&reg; N4000 (4M Cache, up to 2.60 GHz)</p>\r\n\r\n<p>Operativ yaddaş (RAM):</p>\r\n\r\n<p>4 GB</p>\r\n\r\n<p>Operativ yaddaşın s&uuml;rəti:</p>\r\n\r\n<p>DDR4 4 GB 2133 MHz</p>\r\n\r\n<p>Qrafik kart:</p>\r\n\r\n<p>Daxili</p>\r\n\r\n<p>Qrafik yaddaş:</p>\r\n\r\n<p>İntel HD</p>\r\n\r\n<p>Ekran:</p>\r\n\r\n<p>11.6</p>\r\n\r\n<p>İcazə verilən genişlik:</p>\r\n\r\n<p>11.6 HD (1366 x 768) LED</p>\r\n\r\n<p>Səs:</p>\r\n\r\n<p>Daxili səs dinamikləri, daxili mikrofon</p>\r\n\r\n<p>Kamera:</p>\r\n\r\n<p>✔</p>\r\n\r\n<p>Yaddaş həcmi</p>\r\n\r\n<p>SSD (Sərt səthli disk):</p>\r\n\r\n<p>64GB eMMC</p>\r\n\r\n<p>Kart oxuyucu:</p>\r\n\r\n<p>✔</p>\r\n\r\n<p>Qoşulma</p>\r\n\r\n<p>Qoşulma:</p>\r\n\r\n<p>HDMI</p>\r\n\r\n<p>Giriş portları:</p>\r\n\r\n<p>Kombo qulaqcıq və mikrofon girişi</p>\r\n\r\n<p>HDMİ:</p>\r\n\r\n<p>1</p>\r\n\r\n<p>USB:</p>\r\n\r\n<p>3</p>\r\n\r\n<p>Şəbəkə</p>\r\n\r\n<p>Blutuz:</p>\r\n\r\n<p>✔</p>\r\n\r\n<p>Şəbəkə:</p>\r\n\r\n<p>10/100/1000 MBps</p>\r\n\r\n<p>Simsiz əlaqə:</p>\r\n\r\n<p>✔</p>\r\n\r\n<p>Əlavə</p>\r\n\r\n<p>Daxiletmə qurğusu:</p>\r\n\r\n<p>Tam &ouml;l&ccedil;&uuml;l&uuml;, sağ rəqəm panelsiz klaviatura</p>\r\n\r\n<p>Zəmanət m&uuml;ddəti:</p>\r\n\r\n<p>12 ay</p>\r\n', 1199.00, 0, '', '', 5, '1', '1'),
(71, 7, 18, '2020-09-09 19:36:04', 'dimg/urun-foto/37239P1044338.jpg', 'Noutbuk Acer Aspire A3 A315-33-C1RP (NX.H64ER.011)', 'noutbuk-acer-aspire-a3-a315-33-c1rp-nx-h64er-011', '<p>&Uuml;mumi məlumat</p>\r\n\r\n<p>Tip:</p>\r\n\r\n<p>Noutbuk</p>\r\n\r\n<p>Brand:</p>\r\n\r\n<p>Acer</p>\r\n\r\n<p>Model:</p>\r\n\r\n<p>Acer A315-33-C1RP (NX.H64ER.011)</p>\r\n\r\n<p>Rəng:</p>\r\n\r\n<p>Qırmızı</p>\r\n\r\n<p>Təyinat:</p>\r\n\r\n<p>Ofis işləri/internet/multimedia</p>\r\n\r\n<p>Proqram</p>\r\n\r\n<p>Proqram təminatı:</p>\r\n\r\n<p>Linux</p>\r\n\r\n<p>Texniki g&ouml;stəricilər</p>\r\n\r\n<p>Prosessor:</p>\r\n\r\n<p>Celeron</p>\r\n\r\n<p>S&uuml;rət:</p>\r\n\r\n<p>Intel&reg; Celeron&reg; N3060 (2M Cache, up to 2.48 GHz)</p>\r\n\r\n<p>Operativ yaddaş (RAM):</p>\r\n\r\n<p>4 GB</p>\r\n\r\n<p>Operativ yaddaşın s&uuml;rəti:</p>\r\n\r\n<p>DDR3L 4 GB 1600 Mhz</p>\r\n\r\n<p>Qrafik kart:</p>\r\n\r\n<p>Daxili</p>\r\n\r\n<p>Qrafik yaddaş:</p>\r\n\r\n<p>İntel HD</p>\r\n\r\n<p>Ekran:</p>\r\n\r\n<p>15.6</p>\r\n\r\n<p>İcazə verilən genişlik:</p>\r\n\r\n<p>15.6 HD (1366 x 768) LED</p>\r\n\r\n<p>Səs:</p>\r\n\r\n<p>Daxili səs dinamikləri, daxili mikrofon</p>\r\n\r\n<p>Kamera:</p>\r\n\r\n<p>✔</p>\r\n\r\n<p>Yaddaş həcmi</p>\r\n\r\n<p>HDD:</p>\r\n\r\n<p>500 GB 5400 rpm</p>\r\n\r\n<p>Kart oxuyucu:</p>\r\n\r\n<p>✔</p>\r\n\r\n<p>Qoşulma</p>\r\n\r\n<p>Giriş portları:</p>\r\n\r\n<p>Kombo qulaqcıq və mikrofon girişi</p>\r\n\r\n<p>HDMİ:</p>\r\n\r\n<p>✔</p>\r\n\r\n<p>USB:</p>\r\n\r\n<p>2</p>\r\n\r\n<p>USB 3.0:</p>\r\n\r\n<p>1</p>\r\n\r\n<p>Şəbəkə</p>\r\n\r\n<p>Blutuz:</p>\r\n\r\n<p>✔</p>\r\n\r\n<p>Şəbəkə:</p>\r\n\r\n<p>10/100/1000 MBps</p>\r\n\r\n<p>Simsiz əlaqə:</p>\r\n\r\n<p>802.11 ac</p>\r\n\r\n<p>Əlavə</p>\r\n\r\n<p>Daxiletmə qurğusu:</p>\r\n\r\n<p>Tam &ouml;l&ccedil;&uuml;l&uuml;, sağ rəqəm panelsiz klaviatura</p>\r\n\r\n<p>Qida:</p>\r\n\r\n<p>4870 mAh Li-Pol</p>\r\n\r\n<p>Qabaritlər:</p>\r\n\r\n<p>381 x 262 x 21 mm</p>\r\n\r\n<p>&Ccedil;əki:</p>\r\n\r\n<p>2.1 kg</p>\r\n\r\n<p>Zəmanət m&uuml;ddəti:</p>\r\n\r\n<p>12 ay</p>\r\n', 548.00, 0, '', '', 2, '1', '0'),
(72, 7, 16, '2020-09-09 19:37:43', 'dimg/urun-foto/3850810051073802290.jpg', 'Casio G-7900-1DR', 'casio-g-7900-1dr', '<p>Sitemizde bulunan t&uuml;m erkek saatleri ve kadın saatleri T&uuml;rkiye Distrib&uuml;t&ouml;r&uuml; olan Ersa Saat garantisiyle satılmaktadır. &Uuml;r&uuml;nlerimiz garanti belgesi ve orijinal kutusu ile sizlere g&ouml;nderilmektedir. İncelediğiniz&nbsp;<strong>Casio G-7900-1DR Erkek Kol Saati</strong>&nbsp;&uuml;cretsiz kargo hizmetiyle g&ouml;nderilmektedir.<strong>&nbsp;Casio Marka, Digital Makine Tipi, Mineral Cam Tipi, 200 m Su Ge&ccedil;irmezlik, Oval Kasa Şekli</strong>&nbsp;&ouml;zelliklerine sahip&nbsp;<strong>Casio G-7900-1DR Erkek Kol Saati</strong>&nbsp;ile ilgili diğer detaylı bilgiler aşağıda yer almaktadır.</p>\r\n', 68.99, 0, '', '', 5, '1', '0'),
(73, 7, 16, '2020-09-09 19:38:50', 'dimg/urun-foto/4795118b38993-ea17-4828-b2eb-39e6c290bee4_size780x780_quality60_cropCenter.jpg', 'Casio GG-1000-1ADR', 'casio-gg-1000-1adr', '<p>MarkaCasio</p>\r\n\r\n<p>SeriG-Shock</p>\r\n\r\n<p>CinsiyetErkek</p>\r\n\r\n<p>Makine TipiAnalog / Digital</p>\r\n\r\n<p>Garanti2 Yıl</p>\r\n\r\n<p>Cam TipiMineral</p>\r\n\r\n<p>Ağırlık84 gr</p>\r\n\r\n<p>Su Ge&ccedil;irmezlik200 m</p>\r\n', 89.99, 0, '', '', 2, '1', '0'),
(74, 7, 17, '2020-09-09 19:39:57', 'dimg/urun-foto/4245724p2-b_1.jpg', 'Sony W600D 32\" Class 720p Smart', 'sony-w600d-32-class-720p-smart', '<p>Samsung&#39;s higher-end LED-LCD TVs are all illuminated by LEDs at the edges of the screen, but the EH series places the LEDs in a full array behind the LCD panel. Before you get too excited about this, these models do&nbsp;<em>not</em>&nbsp;implement local dimming, in which the LEDs dim only behind the dark areas of an image. This is undoubtedly to keep the cost down. Even so, I much prefer LED-array backlighting, which greatly reduces or eliminates uneven illumination in dark scenes, a problem that plagues all LED-edgelit designs.</p>\r\n', 1999.00, 0, '', '', 1, '1', '0'),
(75, 7, 17, '2020-09-09 19:41:01', 'dimg/urun-foto/2452950PUS6654_60-IMS-ru_RU.jpg', 'Samsung 43\" LED 1080p Smart HDTV', 'samsung-43-led-1080p-smart-hdtv', '<p><strong>Product Description</strong><br />\r\nWith a slim profile and enhanced colour and brightness, your home entertainment experience just became even more enticing. Samsung&rsquo;s smart LED television lets you wirelessly browse the internet and download and access apps like Netflix, all from your TV remote. The Wide Colour Enhancer shows truer, more vibrant colours while the HyperReal video engine gives depth and contrast to your movies, games and TV. Plus, Full HD 1080p delivers twice the resolution of a standard HDTV.</p>\r\n\r\n<p><strong>Dimensions</strong><br />\r\nWidth:&nbsp;38.1&quot;&nbsp;(96.8&nbsp;cm)Height:&nbsp;22.5&quot;&nbsp;(57.2&nbsp;cm)Depth:&nbsp;3.1&quot;&nbsp;(7.9&nbsp;cm)</p>\r\n', 3456.90, 0, '', '', 3, '1', '0'),
(76, 8, 17, '2020-09-09 19:43:58', 'dimg/urun-foto/202746268403_sd.jpg', 'TCL 80 cm HD Ready Certified', 'tcl-80-cm-hd-ready-certified', '<ul>\r\n	<li>&nbsp;</li>\r\n	<li>SMART TV.</li>\r\n	<li>Wide Color Enhancer.</li>\r\n	<li>Awe-inspiring contrast.</li>\r\n	<li>HyperRealMC Engine technology.</li>\r\n	<li>Full HD 1080p resolution.</li>\r\n	<li>ConnectShare &trade; Movie technology.</li>\r\n</ul>\r\n', 1547.00, 0, '', '', 1, '1', '0'),
(77, 8, 17, '2020-09-09 19:44:57', 'dimg/urun-foto/32319ru-fhd-t5300-ue43t5300auxru-frontblack-225926985.jpg', 'LG 39LN5700: 39\'\' Class ', 'lg-39ln5700-39-class', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>VSN</p>\r\n			</td>\r\n			<td>\r\n			<p>UN43N5300AFXZC</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>UPC/GTIN</p>\r\n			</td>\r\n			<td>\r\n			<p>887276258676</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Display Type</p>\r\n			</td>\r\n			<td>\r\n			<p>LED</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Resolution</p>\r\n			</td>\r\n			<td>\r\n			<p>Full HD (1080)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Screen Shape</p>\r\n			</td>\r\n			<td>\r\n			<p>Flat</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Screen Size (Diagonal, in.)</p>\r\n			</td>\r\n			<td>\r\n			<p>43</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1732.00, 0, '', '', 4, '1', '1'),
(78, 8, 16, '2020-09-09 19:45:52', 'dimg/urun-foto/25615agilli-saat-wonlex-gw800-.jpg', 'Raymond Saat ', 'raymond-saat', '<p>asa &Ccedil;apı49,3 mm</p>\r\n\r\n<p>Kasa Y&uuml;ksekligi55,9 mm</p>\r\n\r\n<p>Kasa Kalınlığı15,3 mm</p>\r\n\r\n<p>Kasa RengiSiyah-Lacivert</p>\r\n\r\n<p>Kasa ŞekliOval</p>\r\n\r\n<p>Kasa CinsiPlastik</p>\r\n\r\n<p>Kayış RengiSiyah</p>\r\n\r\n<p>Kayış TipiSilikon</p>\r\n\r\n<p>Kadran RengiGri-Siyah</p>\r\n\r\n<p>Kasa-Kadran Taşı</p>\r\n', 79.99, 0, '', '', 8, '1', '1'),
(79, 8, 16, '2020-09-09 19:46:44', 'dimg/urun-foto/46610e4cee990-c5f1-4930-8054-432a6034c807__1_.jpg', 'Men Watches Top Brand', 'men-watches-top-brand', '<p>Sitemizde bulunan t&uuml;m erkek saatleri ve kadın saatleri T&uuml;rkiye Distrib&uuml;t&ouml;r&uuml; olan Ersa Saat garantisiyle satılmaktadır. &Uuml;r&uuml;nlerimiz garanti belgesi ve orijinal kutusu ile sizlere g&ouml;nderilmektedir. İncelediğiniz&nbsp;<strong>Casio GST-S300G-1A2DR Erkek Kol Saati</strong>&nbsp;&uuml;cretsiz kargo hizmetiyle g&ouml;nderilmektedir.<strong>&nbsp;Casio Marka, Analog / Digital Makine Tipi, Mineral Cam Tipi, 200 m Su Ge&ccedil;irmezlik, Oval Kasa Şekli</strong>&nbsp;&ouml;zelliklerine sahip&nbsp;<strong>Casio GST-S300G-1A2DR Erkek Kol Saati</strong>&nbsp;ile ilgili diğer detaylı bilgiler aşağıda yer almaktadır.</p>\r\n', 29.99, 0, '', '', 1, '1', '1'),
(80, 4, 16, '2020-09-09 19:49:01', 'dimg/urun-foto/49758PSSW06-S-1.jpg', 'PSSV006', 'pssv006', '<ul>\r\n	<li>İvme &Ouml;l&ccedil;er:Var</li>\r\n	<li>Ekran Boyutu:1.1 inch</li>\r\n	<li>Ekran &Ccedil;&ouml;z&uuml;n&uuml;rl&uuml;ğ&uuml; (px):390 x 390 HD</li>\r\n	<li>Ağırlık:29 g (kayışsız)</li>\r\n	<li>Menşei:&Ccedil;İN</li>\r\n	<li>Garanti:24</li>\r\n</ul>\r\n', 56.00, 0, '', '', 3, '1', '0'),
(81, 4, 17, '2020-09-09 19:49:56', 'dimg/urun-foto/363028906254_R_Z001A.jpg', 'Mi LED Smart TV 4A 43 - Full HD Smart ', 'mi-led-smart-tv-4a-43-full-hd-smart', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Processor</p>\r\n			</td>\r\n			<td>\r\n			<p>Quad-Core</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Voice Control</p>\r\n			</td>\r\n			<td>\r\n			<p>No</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Full Web Browsing</p>\r\n			</td>\r\n			<td>\r\n			<p>Yes</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Browser</p>\r\n			</td>\r\n			<td>\r\n			<p>Yes</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Streaming</p>\r\n			</td>\r\n			<td>\r\n			<p>Yes. Netflix, Youtube, Airplay5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Screen Share</p>\r\n			</td>\r\n			<td>\r\n			<p>Mobile to TV - Mirroring, DLNA</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Content Share</p>\r\n			</td>\r\n			<td>\r\n			<p>Connect Share&trade; (HDD)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Included Apps</p>\r\n			</td>\r\n			<td>\r\n			<p>Netflix, YouTube,Amazon Alexa, Google Assistant</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1980.99, 0, '', '', 3, '1', '1'),
(82, 5, 18, '2020-09-09 19:51:32', 'dimg/urun-foto/24144samsung-notebook-9_01.jpg', 'Noutbuk Lenovo IdeaPad L340-15IWL (81LG00H9RK)', 'noutbuk-lenovo-ideapad-l340-15iwl-81lg00h9rk', '<p>&Uuml;mumi məlumat</p>\r\n\r\n<p>Tip:</p>\r\n\r\n<p>Noutbuk</p>\r\n\r\n<p>Brand:</p>\r\n\r\n<p>Lenovo</p>\r\n\r\n<p>Model:</p>\r\n\r\n<p>Lenovo S340-15IML (81NA0097RK)</p>\r\n\r\n<p>Rəng:</p>\r\n\r\n<p>Qara</p>\r\n\r\n<p>Təyinat:</p>\r\n\r\n<p>Dizayn / Montaj işləri / Oyun</p>\r\n\r\n<p>Proqram</p>\r\n\r\n<p>Proqram təminatı:</p>\r\n\r\n<p>FreeDos</p>\r\n\r\n<p>Texniki g&ouml;stəricilər</p>\r\n\r\n<p>Prosessor:</p>\r\n\r\n<p>Core i5</p>\r\n\r\n<p>S&uuml;rət:</p>\r\n\r\n<p>Intel&reg; Core&trade; i5-10210U (6M Cache, up to 4.20 GHz)</p>\r\n\r\n<p>Operativ yaddaş (RAM):</p>\r\n\r\n<p>8 GB</p>\r\n\r\n<p>Operativ yaddaşın s&uuml;rəti:</p>\r\n\r\n<p>DDR4 8 GB 2666 Mhz</p>\r\n\r\n<p>Qrafik kart:</p>\r\n\r\n<p>Diskret</p>\r\n\r\n<p>Qrafik yaddaş:</p>\r\n\r\n<p>NVIDIA&reg; GeForce&reg; MX230 2 GB</p>\r\n\r\n<p>Ekran:</p>\r\n\r\n<p>15.6</p>\r\n\r\n<p>İcazə verilən genişlik:</p>\r\n\r\n<p>15.6 FHD (1920 x 1080) LED</p>\r\n\r\n<p>Səs:</p>\r\n\r\n<p>Daxili səs dinamikləri, daxili mikrofon</p>\r\n\r\n<p>Kamera:</p>\r\n\r\n<p>✔</p>\r\n\r\n<p>Yaddaş həcmi</p>\r\n\r\n<p>HDD:</p>\r\n\r\n<p>1 TB 5400 rpm</p>\r\n\r\n<p>SSD (Sərt səthli disk):</p>\r\n\r\n<p>128 GB</p>\r\n\r\n<p>Kart oxuyucu:</p>\r\n\r\n<p>✔</p>\r\n\r\n<p>Qoşulma</p>\r\n\r\n<p>Qoşulma:</p>\r\n\r\n<p>HDMI</p>\r\n\r\n<p>Giriş portları:</p>\r\n\r\n<p>Kombo qulaqcıq və mikrofon girişi</p>\r\n\r\n<p>HDMİ:</p>\r\n\r\n<p>1</p>\r\n\r\n<p>USB:</p>\r\n\r\n<p>2</p>\r\n\r\n<p>USB Type C:</p>\r\n\r\n<p>1</p>\r\n\r\n<p>Şəbəkə</p>\r\n\r\n<p>Blutuz:</p>\r\n\r\n<p>✔</p>\r\n\r\n<p>Simsiz əlaqə:</p>\r\n\r\n<p>✔</p>\r\n\r\n<p>Əlavə</p>\r\n\r\n<p>Daxiletmə qurğusu:</p>\r\n\r\n<p>Tam &ouml;l&ccedil;&uuml;l&uuml;, sağ rəqəm panelli klaviatura</p>\r\n\r\n<p>Qida:</p>\r\n\r\n<p>52.5 Whrs, Li-Ion</p>\r\n\r\n<p>Qabaritlər:</p>\r\n\r\n<p>358 x 245 x 18 mm</p>\r\n\r\n<p>&Ccedil;əki:</p>\r\n\r\n<p>1.80 kg</p>\r\n\r\n<p>Zəmanət m&uuml;ddəti:</p>\r\n\r\n<p>12 ay</p>\r\n', 1249.90, 0, '', '', 2, '1', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorum`
--

CREATE TABLE `yorum` (
  `yorum_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `yorum_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `yorum_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  `yorum_puan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorum`
--

INSERT INTO `yorum` (`yorum_id`, `kullanici_id`, `urun_id`, `yorum_detay`, `yorum_zaman`, `yorum_durum`, `yorum_puan`) VALUES
(23, 4, 82, 'SSD var kompüterdə?', '2020-09-10 21:49:31', '1', 5),
(24, 4, 77, 'asd', '2020-09-11 19:55:37', '1', 3);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `banka`
--
ALTER TABLE `banka`
  ADD PRIMARY KEY (`banka_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `mesaj`
--
ALTER TABLE `mesaj`
  ADD PRIMARY KEY (`mesaj_id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`siparis_id`);

--
-- Tablo için indeksler `siparis_detay`
--
ALTER TABLE `siparis_detay`
  ADD PRIMARY KEY (`siparisdetay_id`);

--
-- Tablo için indeksler `urun`
--
ALTER TABLE `urun`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `yorum`
--
ALTER TABLE `yorum`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `banka`
--
ALTER TABLE `banka`
  MODIFY `banka_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `mesaj`
--
ALTER TABLE `mesaj`
  MODIFY `mesaj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=750055;
--
-- Tablo için AUTO_INCREMENT değeri `siparis_detay`
--
ALTER TABLE `siparis_detay`
  MODIFY `siparisdetay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- Tablo için AUTO_INCREMENT değeri `urun`
--
ALTER TABLE `urun`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- Tablo için AUTO_INCREMENT değeri `yorum`
--
ALTER TABLE `yorum`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

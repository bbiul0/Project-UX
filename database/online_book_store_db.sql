-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2025 at 08:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_book_store_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Elias', 'eliasfsdev@gmail.com', '$2y$10$Rrda1tLnj9xg/OmK/sO1Q.ONNThZiIzJNEpvyzEMzcznA4UPCEMnS');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`) VALUES
(1, 'Jane Austen'),
(2, 'George Orwell'),
(6, 'Agatha Christie'),
(7, 'Shiraishi Jougi'),
(8, 'Satsuki Hiryuu'),
(9, 'Nana Nanana'),
(10, 'Geul Jengi S'),
(11, 'Daisuke Aizawa'),
(12, 'Kabochamasuku'),
(13, 'Lee Kyung Min'),
(14, 'Eunmilhi'),
(15, 'Hermod'),
(16, 'Kana Akatsuki'),
(18, 'Corita'),
(20, 'Harunohi Biyori'),
(21, 'Yuu Kamiya');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author_id`, `description`, `category_id`, `price`, `type_id`, `cover`, `file`) VALUES
(1, 'Pride and Prejudice', 1, 'Sparks fly when spirited Elizabeth Bennet meets single, rich, and proud Mr. Darcy. But Mr. Darcy reluctantly finds himself falling in love with a woman beneath his class. Can each overcome their own pride and prejudice?', 11, 35000, 5, 'prideandprejustice.jpeg', 'Soal Tree.pdf'),
(2, '1984', 2, 'In 1984, civilisation has been ravaged by world war, civil conflict, and revolution. Airstrip One (formerly known as Great Britain) is a province of Oceania, one of the three totalitarian super-states that rule the world. It is ruled by ', 4, 20000, 5, '1984.jpg', 'DDL.pdf'),
(4, 'The Journey Of Elaina Volume 3', 7, 'Since childhood, Elaina has always been fascinated by the stories written within her favorite book, especially those about Nike, a renowned witch who had numerous great travels across the world. Wanting to experience the awe of adventure herself, Elaina strives to become a witch, and despite the numerous trials that come her way, she eventually succeeds.  Now a full-fledged witch, Elaina finally embarks on her long-awaited journey, in which she meets many people along the way, learning their various stories. Through all of this, she explores the world at its fullest—experiencing both its bright and dark sides—starting her legendary tale', 3, 30000, 1, '675005007d2f50.28007394.png', '675005007d8195.35786717.pdf'),
(5, 'Takou Koori No Hime Volume 1', 8, ' Seorang gadis cantik dari sekolah lain berada di kereta yang dinaiki Minori Souta, seorang siswa SMA biasa. [Ratu Es] Shinonome Nagi, yang memiliki sikap dingin dan menjauhkan orang lain. Itulah namanya. Suatu hari, Souta menyaksikan dia dianiaya dan mengerahkan keberanian untuk membantunya. Keesokan harinya, dia muncul di hadapannya lagi... “Aku ingin kamu tetap di sisiku saat aku di kereta.', 7, 40000, 1, '675ac9259c66d4.53237542.jpg', '675ac9259ca083.77630437.pdf'),
(6, 'Danjo Yuujou Wa Seiritsu Volume 1', 9, 'Novel komedi romantis berfokus pada hubungan antara Himari Inuzuka dan penyuka bunga Yuu Natsume, yang bersumpah untuk menjadi teman selamanya selama sekolah menengah. Mereka menghabiskan waktu bersama dengan bahagia bahkan sampai SMA. Namun ketika cinta pertama Yuu muncul kembali dalam hidupnya, hubungan mereka berangsur-angsur menjadi lebih kacau, dan hubungan Himari dan Yuu perlahan berubah menjadi sesuatu yang lebih.', 7, 45000, 1, '675acc424a9d13.43582130.jpg', '675acc424adc84.37124862.pdf'),
(7, 'The Demon Prince Goes To The Academy Chapter 1 - 429', 10, '[The Demon King is Dead] adalah cerita di mana Raja iblis langsung terbunuh di Prolog. Dan aku menjadi \'Pangeran iblis\' dari novel tersebut. …Tolong aku.', 3, 120000, 1, '675b2a2db62687.86546375.jpeg', '675b2a2db6fa57.21779415.pdf'),
(8, 'Kage No Jitsuryokusha Volume 4', 11, 'For as long as he can remember, Minoru Kagenou has been fixated on becoming as strong as possible, which has led him to undertake all kinds of rigorous training. This wish, however, does not stem from a desire to be recognized by others; rather, Minoru does everything he can to blend in with the crowd. So, while pretending to be a completely average student during the day, he arms himself with a crowbar and ruthlessly thrashes local biker gangs at night. Yet when Minoru finds himself in a truck accident, his ambitions seemingly come to a sudden end. In his final moments, he laments his powerlessness—no matter how much he trained, there was nothing he could do to overcome his human limitations.  But instead of dying, Minoru reawakens as Cid, the second child of the noble Kagenou family, in another world—one where magic is commonplace. With the power he so desired finally within his grasp, he dons the moniker ', 3, 30000, 1, '675c2ec2c0d5a1.97447128.png', '675c2ec2c166a5.36637336.pdf'),
(9, 'The Journey Of Elaina Volume 4', 7, 'Since childhood, Elaina has always been fascinated by the stories written within her favorite book, especially those about Nike, a renowned witch who had numerous great travels across the world. Wanting to experience the awe of adventure herself, Elaina strives to become a witch, and despite the numerous trials that come her way, she eventually succeeds.  Now a full-fledged witch, Elaina finally embarks on her long-awaited journey, in which she meets many people along the way, learning their various stories. Through all of this, she explores the world at its fullest—experiencing both its bright and dark sides—starting her legendary tale', 3, 30000, 1, '675c33ee97b7c4.64528034.png', '675c331fb69945.47947327.pdf'),
(10, 'The Demon Prince Goes To The Academy Arc 1', 10, '[The Demon King is Dead] adalah cerita di mana Raja iblis langsung terbunuh di Prolog. Dan aku menjadi \'Pangeran iblis\' dari novel tersebut. …Tolong aku.', 3, 20000, 3, '675c35433f48c8.85730842.jpeg', '675dcb05335821.80335502.pdf'),
(11, 'Rojiura de Hirotta Onna Volume 1', 12, ' \"Bisakah kamu... mengizinkanku menginap di rumahmu?\" \"Hey, jika kamu tetap di sini, kamu akan terkena flu.\" Ash Leben, yang terlahir kembali ke dalam dunia game otome dan kini bersekolah di kelas bangsawan rendah di Royal Magic Academy. Suatu hari, dia bertemu dengan Fine Stoudt, heroine utama dari game tersebut, yang sedang duduk di sudut jalan sambil terjebak dalam hujan. Dari Fine, Ash mendengar bahwa dia telah dihina sebagai \"wanita jahat\" oleh empat kesatria akademi dan temannya, Elise, dan bahkan terancam dikeluarkan dari sekolah. Ash menantang mereka untuk berduel dan berusaha menyelamatkan Fine dari keterpurukan. Setelah itu, Fine meminta untuk tinggal bersamanya sebagai pengelola di rumah Ash, dan mereka pun mulai hidup bersama... Sebuah komedi romantis di sekolah yang menyelamatkan heroine setelah bad end.', 7, 50000, 1, '675c7810995cf6.41575637.jpg', '675c781099aab9.59195557.pdf'),
(12, 'Webtoon Characters Na Kang Lim Arc 1: Yoo Da Hee', 13, 'Na Kang-Lim, seorang siswa SMA yang biasanya menikmati webtoon. Suatu hari, ia mengalami hal yang aneh, seorang tokoh utama wanita dari webtoon yang biasa dibacanya muncul di hadapannya. Kejadian-kejadian dalam webtoon tersebut membuatnya mengalami krisis, tapi masalahnya adalah tidak ada tokoh protagonis yang bisa menyelamatkannya dari kejadian-kejadian tersebut! Dia kemudian menjadi protagonis dan melintasi waktu untuk menyelamatkannya.', 7, 30000, 3, '675dca8893d313.32132877.jpg', '675dca8893f692.53759743.pdf'),
(13, 'Webtoon Characters Na Kang Lim Arc 2 Part 1: Cha Sirin', 13, 'Na Kang-Lim, seorang siswa SMA yang biasanya menikmati webtoon. Suatu hari, ia mengalami hal yang aneh, seorang tokoh utama wanita dari webtoon yang biasa dibacanya muncul di hadapannya. Kejadian-kejadian dalam webtoon tersebut membuatnya mengalami krisis, tapi masalahnya adalah tidak ada tokoh protagonis yang bisa menyelamatkannya dari kejadian-kejadian tersebut! Dia kemudian menjadi protagonis dan melintasi waktu untuk menyelamatkannya.', 7, 30000, 3, '675ddc572fe322.91591209.jpeg', '675ddc57301481.77425867.pdf'),
(14, 'Webtoon Characters Na Kang Lim Arc 2 Part 2: Cha Sirin', 13, 'Na Kang-Lim, seorang siswa SMA yang biasanya menikmati webtoon. Suatu hari, ia mengalami hal yang aneh, seorang tokoh utama wanita dari webtoon yang biasa dibacanya muncul di hadapannya. Kejadian-kejadian dalam webtoon tersebut membuatnya mengalami krisis, tapi masalahnya adalah tidak ada tokoh protagonis yang bisa menyelamatkannya dari kejadian-kejadian tersebut! Dia kemudian menjadi protagonis dan melintasi waktu untuk menyelamatkannya.', 7, 30000, 3, '675ddd332d80c1.11688997.jpeg', '675ddd332de5b9.44559121.pdf'),
(15, 'Webtoon Characters Na Kang Lim Arc 3 Part 1: Joo Ra Mi', 13, 'Na Kang-Lim, seorang siswa SMA yang biasanya menikmati webtoon. Suatu hari, ia mengalami hal yang aneh, seorang tokoh utama wanita dari webtoon yang biasa dibacanya muncul di hadapannya. Kejadian-kejadian dalam webtoon tersebut membuatnya mengalami krisis, tapi masalahnya adalah tidak ada tokoh protagonis yang bisa menyelamatkannya dari kejadian-kejadian tersebut! Dia kemudian menjadi protagonis dan melintasi waktu untuk menyelamatkannya.', 7, 30000, 3, '675dddf61170a9.82785922.jpeg', '675dddf611ac75.27749511.pdf'),
(16, 'Webtoon Characters Na Kang Lim Arc 3 Part 2: Joo Ra Mi (Yoo Na Ri Debut)', 13, 'Na Kang-Lim, seorang siswa SMA yang biasanya menikmati webtoon. Suatu hari, ia mengalami hal yang aneh, seorang tokoh utama wanita dari webtoon yang biasa dibacanya muncul di hadapannya. Kejadian-kejadian dalam webtoon tersebut membuatnya mengalami krisis, tapi masalahnya adalah tidak ada tokoh protagonis yang bisa menyelamatkannya dari kejadian-kejadian tersebut! Dia kemudian menjadi protagonis dan melintasi waktu untuk menyelamatkannya.', 7, 30000, 3, '675dde99521225.38267675.jpeg', '675dde99523dd9.49199680.pdf'),
(17, 'Magic Academy’s Genius Blinker Chapter 1 - 10', 14, 'Karakter dengan tingkat kesulitan ekstrim dan performa terburuk, Baek Yu-Seol dianggap sebagai tr*sh di dalam game karena dia tidak bisa menggunakan sihir di dunia fantasi yang semua orang bisa. Namun…[Karena akhir yang salah, 90% Dunia Aether telah hancur.] [Tolong raih ‘Akhir yang sebenarnya.’] Tiba-tiba, kata-kata itu terngiang di benakku sebelum aku dipindahkan ke Dunia Aether.[Kamu bisa menggunakan skill ‘Blink’.] “Kenapa aku bisa menjadi karakter ini?” Blink adalah satu-satunya kemampuan sihir yang diberikan padaku. Bertahan hidup di Akademi Stella di mana ada banyak penyihir jenius merajalela, aku menjadi Penyihir Blink yang terkenal', 3, 40000, 3, '675de39409cbb5.52476421.jpeg', '675de39409f423.40156114.pdf'),
(18, 'Magic Academy’s Genius Blinker Chapter 11 - 20', 14, 'Karakter dengan tingkat kesulitan ekstrim dan performa terburuk, Baek Yu-Seol dianggap sebagai tr*sh di dalam game karena dia tidak bisa menggunakan sihir di dunia fantasi yang semua orang bisa. Namun…[Karena akhir yang salah, 90% Dunia Aether telah hancur.] [Tolong raih ‘Akhir yang sebenarnya.’] Tiba-tiba, kata-kata itu terngiang di benakku sebelum aku dipindahkan ke Dunia Aether.[Kamu bisa menggunakan skill ‘Blink’.] “Kenapa aku bisa menjadi karakter ini?” Blink adalah satu-satunya kemampuan sihir yang diberikan padaku. Bertahan hidup di Akademi Stella di mana ada banyak penyihir jenius merajalela, aku menjadi Penyihir Blink yang terkenal', 3, 40000, 3, '675de4333b06f9.60935896.jpeg', '675de4333b2cb3.33337414.pdf'),
(19, 'Magic Academy’s Genius Blinker Chapter 21 - 30', 14, 'Karakter dengan tingkat kesulitan ekstrim dan performa terburuk, Baek Yu-Seol dianggap sebagai tr*sh di dalam game karena dia tidak bisa menggunakan sihir di dunia fantasi yang semua orang bisa. Namun…[Karena akhir yang salah, 90% Dunia Aether telah hancur.] [Tolong raih ‘Akhir yang sebenarnya.’] Tiba-tiba, kata-kata itu terngiang di benakku sebelum aku dipindahkan ke Dunia Aether.[Kamu bisa menggunakan skill ‘Blink’.] “Kenapa aku bisa menjadi karakter ini?” Blink adalah satu-satunya kemampuan sihir yang diberikan padaku. Bertahan hidup di Akademi Stella di mana ada banyak penyihir jenius merajalela, aku menjadi Penyihir Blink yang terkenal', 3, 40000, 3, '675de45761c699.20630705.jpeg', '675de457620054.48256838.pdf'),
(20, 'Magic Academy’s Genius Blinker Chapter 31 - 40', 14, 'Karakter dengan tingkat kesulitan ekstrim dan performa terburuk, Baek Yu-Seol dianggap sebagai tr*sh di dalam game karena dia tidak bisa menggunakan sihir di dunia fantasi yang semua orang bisa. Namun…[Karena akhir yang salah, 90% Dunia Aether telah hancur.] [Tolong raih ‘Akhir yang sebenarnya.’] Tiba-tiba, kata-kata itu terngiang di benakku sebelum aku dipindahkan ke Dunia Aether.[Kamu bisa menggunakan skill ‘Blink’.] “Kenapa aku bisa menjadi karakter ini?” Blink adalah satu-satunya kemampuan sihir yang diberikan padaku. Bertahan hidup di Akademi Stella di mana ada banyak penyihir jenius merajalela, aku menjadi Penyihir Blink yang terkenal', 3, 40000, 3, '675de478b59489.44760742.jpeg', '675de478b5d426.66854025.pdf'),
(21, 'Pick Me Up Infinite Gacha Chapter 1 - 10', 15, 'In the mobile gacha game infamous for its atrocious difficulty, the Master ranked 5th in the world, \'Loki\', loses consciousness while raiding the Dungeon. \'What? I\'m a game character now?\' After waking up, \'Loki\' realizes he has turned into a Level 1, 1-Star Hero—\'Han Yslat\'. To return to Earth, he must lead the newbie Master and heroes and clear the 100th floor of the Dungeon! \'You messed with the wrong guy.\' This is the story of hard carrying by Master Loki who never accepts even a single defeat.', 3, 1000000, 3, '676152bc312b37.99873387.png', '676152bc315501.02402789.pdf'),
(22, 'Violet Evergarden Volume 1', 16, 'Former soldier Violet Evergarden tutors a young lady at a private women\'s academy, but still grieves for the only person who ever brought her happiness.', 7, 60000, 1, '676155468f5a30.23596037.png', '676155468f6ce8.35920134.pdf'),
(23, 'Violet Evergarden Volume 2', 16, 'Former soldier Violet Evergarden tutors a young lady at a private women\'s academy, but still grieves for the only person who ever brought her happiness.', 7, 60000, 1, '6761561ad10891.63393982.png', '6761561ad11889.17699962.pdf'),
(24, 'The Extra\'S Academy Survival Guide Chapter 1 - 10', 18, 'I possessed a third-rate extra villain character in my favorite game. I have no ambitions and I just want to live a quiet life. But sheesh, this world is a hard place to survive in. I will survive to the ending of this story, in a way the protagonist cannot. I will survive in the way of a third-rate villainous character.', 3, 40000, 3, '676457b5313f80.39856178.png', '676457b5316be5.11041531.pdf'),
(26, 'No Game No Life Volume 6', 12, 'Meet Sora and Shiro, a brother and sister who are loser shut-ins by normal standards. But these siblings don’t play by the rules of the “crappy game” that is average society. In the world of gaming, this genius pair reigns supreme, their invincible avatar so famous that it’s the stuff of urban legend. So when a young boy calling himself God summons the siblings to a fantastic alternate world where war is forbidden and all conflicts–even those involving national borders–are decided by the outcome of games, Sora and Shiro have pretty much hit the jackpot. But they soon learn that in this world, humanity, cornered and outnumbered by other species, survives within the confines of one city. Will Sora and Shiro, two failures at life, turn out to be the saviors of mankind? Let the games begin…', 11, 50000, 2, '67650ac33365f2.48385259.jpg', '67650ac3338436.77112743.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `buybook`
--

CREATE TABLE `buybook` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buybook`
--

INSERT INTO `buybook` (`id`, `tanggal`, `user_id`, `book_id`) VALUES
(1, '2024-12-19', 2, 16),
(2, '2021-12-10', 2, 20),
(3, '2021-12-12', 2, 7),
(4, '2021-12-12', 2, 12),
(5, '2024-12-20', 2, 9),
(6, '2024-12-20', 2, 8),
(7, '2024-12-20', 2, 25),
(8, '2024-12-20', 2, 23),
(9, '2024-12-20', 6, 24),
(11, '2025-05-10', 2, 11),
(12, '2025-05-10', 2, 18),
(14, '2025-05-10', 2, 13),
(15, '2025-05-10', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(3, 'Fantasy'),
(4, 'History'),
(5, 'Horror'),
(7, 'Romance'),
(10, 'Comedy'),
(11, 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2025_04_26_175107_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('i5CdqmUKQqqBWf0zspnQfmZb9BKmlvRze2bbmq0d', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUFhvaFdEbVlYZ2QwMEhkYVlYVU5mSkd1OTFxRnIwdlNZNm5QMHhxWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1747416856),
('zpe4C779SyFsIgKHkqQQ3j95Nzpzfps02452UfWo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWkd3V3FSRzJTeFZvTkVCMEt5TUQ1eU9HOXd2S3o2NTJXRDBzbWI2dSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXRlZ29yeS8zIjt9fQ==', 1747421322);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, 'Light Novel'),
(2, 'Manga'),
(3, 'Manhwa'),
(5, 'Normal'),
(6, 'Biography');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `full_name`) VALUES
(1, 'bdstwn@gmail.com', '$2y$10$DNatemfUfLz9KjhTweX6deFYrWQrcb8qA.OMMDo35GLDTmATYgomO', 'Budi Setiawan'),
(2, 'JoshKeren@gmail.com', '$2y$12$TGsiIErf3Efvs62G28vcPuVN3lerYsb2p366Dwt/H6iWQZ1Op4576', 'Joshua Chandra'),
(3, 'chris@gmail.com', '$2y$10$v5G0lYDXotYcZQfuS/UkleFATcZgBjKAcQgwV5CLJOYru37xZVOPO', 'Christopher L'),
(6, '123@gmail.com', '$2y$10$X/Vb6wpXkQBlkdZhhEzHkeODLs7P1/qSB3GoTr6dOg0OgpI/z9V5K', 'Christopher'),
(13, 'eina@gmail.com', '$2y$12$Jk4txybVY/N7IjiX13wkduESoAYkvXT6vz.oiJev8n01MAbm0zXby', 'Eina'),
(14, 'abc@gmail.com', '$2y$12$kq8cjsD.DkvLw05Fe/8Sl.xzkW.nsZi0c2EA.aRFu3sbxUrHaptV.', 'Eve'),
(15, 'jason@gmail.com', '$2y$12$.8L/RUsQorpO7Fas.SndpuHtHVifdYWClRL6yRsVmG9mJYi0TZFOe', 'jason');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `book_id`) VALUES
(2, 2, 12),
(3, 2, 10),
(4, 2, 20),
(5, 2, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buybook`
--
ALTER TABLE `buybook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `buybook`
--
ALTER TABLE `buybook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `book_id` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

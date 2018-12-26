-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.30-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table novel.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table novel.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `user`, `pass`, `level`) VALUES
	(1, 'admin', '2a39e1c9c6672b4f2de08bc38773f5c9', 'superadmin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table novel.album
CREATE TABLE IF NOT EXISTS `album` (
  `id_album` int(11) NOT NULL AUTO_INCREMENT,
  `nama_album` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_album`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table novel.album: ~3 rows (approximately)
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
INSERT INTO `album` (`id_album`, `nama_album`, `created_at`) VALUES
	(38, 'Kasdasdsdfs', '2017-07-08 21:31:49'),
	(39, 'test 2', '2017-07-14 09:04:33'),
	(40, 'test 3', '2017-07-14 09:15:48');
/*!40000 ALTER TABLE `album` ENABLE KEYS */;

-- Dumping structure for table novel.artikel
CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `cover` text NOT NULL,
  `view` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_artikel`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table novel.artikel: ~2 rows (approximately)
/*!40000 ALTER TABLE `artikel` DISABLE KEYS */;
INSERT INTO `artikel` (`id_artikel`, `id_kategori`, `judul`, `deskripsi`, `cover`, `view`, `status`, `created_at`) VALUES
	(2, 2, 'asdPembangunan Hanggar Ambruk di Bandara Makassar Dihentikan ', '<p>Konstruksi</p>\r\n', '14987256002.jpg', 9, 0, '2017-07-15 23:25:58'),
	(3, 1, 'Tenaga Kerja Konstruksi Indonesia Memiliki Daya Saing Tinggi ', '<p><strong>Liputan6.com</strong>, Jakarta - Menteri Pekerjaan Umum Djoko Kirmanto berkeyakinan tenaga kerja konstruksi Indonesia memiliki daya saing kompetitif dan<br />\r\nkomparatif&nbsp; yang tinggi. Bahkan tenaga kerja konstruksi Indonesia tidak kalah dengan tenaga kerja kontruksi dari negara-negara lain di Asia Tenggara.</p>\r\n\r\n<p>&quot;Sejauh ini beberapa Badan Usaha Jasa Konstruksi Nasional telah memiliki pengalaman dan berhasil melaksanakan pekerjaan konstruksi di berbagai negara ASEAN, seperti Brunei Darussalam, Filipina, Malaysia, Myanmar, dan Timor Leste.&quot;kata&nbsp; Menteri Pekerjaan Umum Djoko Kirmanto, Senin (29/9/2014).</p>\r\n\r\n<p>Menurut Djoko, tahun ini nilai pasar konstruksi Indonesia akan menyamai pasar konstruksi di Korea Selatan, bahkan Indonesia diprediksi akan menjadi pasar perumahan ketiga terbesar di dunia. Artinya, Indonesia di samping merupakan pasar potensial, tetapi juga mampu berperan sebagai basis produksi sektor konstruksi di Kawasan ASEAN.</p>\r\n\r\n<p>Menyikapi akan segera terbentuknya Masyarakat Ekonomi Asean (MEA) pada akhir 2015, Djoko Kirmanto mengingatkan agar sektor konstruksi di Indonesia bersiap diri menghadapi keterbukaan pasar di lingkup ASEAN. Tentunya disiplin dan kerja keras semua bagian masyarakat konstruksi sangat dibutuhkan.</p>\r\n\r\n<p>&quot;Mari kita sikapi MEA secara proporsional, yang terpenting saya menghimbau para pelaku konstruksi untuk mempersiapkan diri<br />\r\nsebaik-baiknya, &quot; tutur Djoko.</p>\r\n\r\n<p>Djoko Kirmanto juga menghimbau agar perdagangan bebas dalam lingkup negara ASEAN tidak hanya dipersepsi untuk persaingan, namun justru untuk mengintegrasikan dan saling melengkapi kapasitas antara negara-negara tersebut dalam menghadapi negara-negara non ASEAN di era globalisasi yang lebih luas pada 2020 nanti.</p>\r\n\r\n<p>Pemerintah sendiri telah mengambil langkah-langkap progresif untuk mempersiapkan pelaku konstruksi nasional dalam menghadapi MEA. Salah satunya bahwa untuk melakukan usaha jasa konstruksi di Indonesia Badan Usaha Jasa Konstriksi ASEAN harus bekerja sama dengan Badan Usaha Jasa Konstruksi Nasional kualifikasi besar dalam bentuk joint operation atau joint venture.</p>\r\n\r\n<p>Kemudian, dengan penyertaan modal asing saat ini masih dibatasi maksimal sebesar 55 persen untulk kontraktor dan 51<br />\r\npersen untuk konsultan yang nantinya akan menjadi sebesar 70 persen setelah diberlakukannya MEA.</p>\r\n\r\n<p>Oleh karena itu, Badan Usaha Jasa Konstruksi Nasional harus menjadi partner yang aktif dalam bermitra dengan Badan Usaha Jasa Konstruksi ASEAN agar dapat mengambil manfaat dari kerja sama ini dengan tecerminnya kapasitas SDM, teknologi, dan permodalan Badan Usaha Jasa Konstruksi Nasional.</p>\r\n\r\n<p>Di samping itu, tenaga kerja jasa konstruksi asing yang bekerja di Indonesia masih dibatasi hanya untuk tingkat&nbsp; direktur, manajer, dan tenaga ahli serta harus tetap memebuhi ketentuan paraturan perundang-undangan ketenagakerjaan dan keimigrasian yang berlaku di Indonesia. &quot;Saya percaya sampai saat ini, tenaga kerja konstruksi Indonesia memiliki daya saing kompetitif dan komparatif yang relatif tinggi di kawasaan Asean,&quot; pungkas Djoko Kirmanto.</p>\r\n\r\n<p>Pengembangan SDM sangat krusial karena masih banyak pihak yang menilai sektor konstruksi Indonesia dinilai belum siap untuk menghadapi ketatnya persaingan dalam implementasi MEA 2015. Jumlah perusahaan konstruksi di Indonesia memang lebih banyak dibandingkan tenaga ahli yang tersedia. Sebagai perbandingan, perusahaan konstruksi di Indonesia mencapai 114.000,sementara China hanya 66.000. Perusahaan konstruksi China sebagian besar menangani skala proyek yang lebih<br />\r\nbesar.</p>\r\n\r\n<p>Untuk periode 2006-2013, pertumbuhan rata-rata tenaga kerja hanya sekitar 6 persen, sementara pertumbuhan rata-rata nilai konstruksi untuk periode yang sama sebesar 21 persen. Badan Pusat Statistik pada 2013 menyebutkan SDM konstruksi Indonesia mencapai 6,9 juta atau 5,7 persen dari tenaga kerja nasional.</p>\r\n\r\n<p>Dari jumlah tersebut, sebesar 4 persen merupakan tenaga ahli, 20 persen tenaga terampil, dan 76 persen sisanya merupakan tenaga kerja kurang terampil. (Amd/Gdn)</p>\r\n', '1498663300LOGO10.jpeg', 15, 0, '2017-07-15 23:20:15');
/*!40000 ALTER TABLE `artikel` ENABLE KEYS */;

-- Dumping structure for table novel.chapter
CREATE TABLE IF NOT EXISTS `chapter` (
  `id_chapter` int(11) NOT NULL AUTO_INCREMENT,
  `id_novel` int(11) DEFAULT NULL,
  `content` text,
  `content_en` text,
  `content_ch` text,
  `judul` varchar(50) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_chapter`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table novel.chapter: ~3 rows (approximately)
/*!40000 ALTER TABLE `chapter` DISABLE KEYS */;
INSERT INTO `chapter` (`id_chapter`, `id_novel`, `content`, `content_en`, `content_ch`, `judul`, `view`, `created_at`, `updated_at`) VALUES
	(1, 1, 'test jon', NULL, NULL, 'chapter 1', NULL, '2018-10-27 15:17:34', '2018-12-17 14:26:56'),
	(2, 1, '<p>asdasd</', NULL, NULL, 'chapter 2', NULL, '2018-11-01 19:32:09', '2018-12-17 14:26:42'),
	(3, 2, '<p>sadsdfsd', NULL, NULL, 'dsdfsd', NULL, '2018-11-01 20:05:55', '2018-11-01 20:05:55');
/*!40000 ALTER TABLE `chapter` ENABLE KEYS */;

-- Dumping structure for table novel.config
CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` longtext,
  `description` longtext,
  `icon` longtext,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `logo` longtext,
  `meta_deskripsi` text NOT NULL,
  `basic` int(11) DEFAULT NULL,
  `meta_keyword` text NOT NULL,
  `font_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table novel.config: ~0 rows (approximately)
/*!40000 ALTER TABLE `config` DISABLE KEYS */;
INSERT INTO `config` (`id`, `name`, `email`, `phone`, `address`, `description`, `icon`, `instagram`, `facebook`, `logo`, `meta_deskripsi`, `basic`, `meta_keyword`, `font_name`) VALUES
	(1, 'MTLINDO', 'admin@mtlindo.com', '083849940637', 'Machine Translate Indonesia', 'Ketapangkuning adalah sebuah desa di wilayah Kecamatan Ngusikan, Kabupaten Jombang, Provinsi Jawa Timur.<br>', 'icon2.png', 'Instagram Machine Translate Indonesia', 'Facebook Machine Translate Indonesia', 'logo5.png', '																								Kelurahan / Desa Ketapang Kuning Kecamatan Ngusikan Kabupaten / Kota Kab. Jombang Provinsi Jawa Timur Kode Pos 61454			\r\n											\r\n											', 5, '																								Nomor kode pos di Propinsi Jawa Timur, Kota Jombang, Kecamatan Ngusikan, Ketapang Kuning,kab. jombang							\r\n											\r\n											\r\n											', 'cursive');
/*!40000 ALTER TABLE `config` ENABLE KEYS */;

-- Dumping structure for table novel.gambar_album
CREATE TABLE IF NOT EXISTS `gambar_album` (
  `id_gambar` int(11) NOT NULL AUTO_INCREMENT,
  `id_album` int(11) DEFAULT NULL,
  `gambar` text,
  PRIMARY KEY (`id_gambar`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table novel.gambar_album: ~5 rows (approximately)
/*!40000 ALTER TABLE `gambar_album` DISABLE KEYS */;
INSERT INTO `gambar_album` (`id_gambar`, `id_album`, `gambar`) VALUES
	(11, 38, 'LOGO_10.jpeg'),
	(15, 38, '2_i.jpg'),
	(16, 39, 'Asset_1.png'),
	(17, 39, 'usaha-keripik-pangsit.jpg'),
	(18, 40, 'placeit.png');
/*!40000 ALTER TABLE `gambar_album` ENABLE KEYS */;

-- Dumping structure for table novel.glossary
CREATE TABLE IF NOT EXISTS `glossary` (
  `id_glossary` int(11) NOT NULL AUTO_INCREMENT,
  `id_novel` int(11) DEFAULT NULL,
  `id_chapter` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_admin_approved` int(11) DEFAULT NULL,
  `status_glossary` varchar(50) DEFAULT NULL,
  `content_glossary` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_glossary`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table novel.glossary: ~0 rows (approximately)
/*!40000 ALTER TABLE `glossary` DISABLE KEYS */;
INSERT INTO `glossary` (`id_glossary`, `id_novel`, `id_chapter`, `id_user`, `id_admin_approved`, `status_glossary`, `content_glossary`, `created_at`, `updated_at`) VALUES
	(3, 1, 1, NULL, NULL, '1', 'jhgvhvgvh', '2018-11-01 19:56:19', '2018-11-01 19:57:31');
/*!40000 ALTER TABLE `glossary` ENABLE KEYS */;

-- Dumping structure for table novel.header
CREATE TABLE IF NOT EXISTS `header` (
  `id_header` int(11) NOT NULL AUTO_INCREMENT,
  `profil` varchar(255) DEFAULT NULL,
  `artikel` varchar(255) DEFAULT NULL,
  `produk` varchar(255) DEFAULT NULL,
  `potensi` varchar(255) DEFAULT NULL,
  `gallery` varchar(255) DEFAULT NULL,
  `kontak` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_header`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table novel.header: ~0 rows (approximately)
/*!40000 ALTER TABLE `header` DISABLE KEYS */;
INSERT INTO `header` (`id_header`, `profil`, `artikel`, `produk`, `potensi`, `gallery`, `kontak`) VALUES
	(1, 'profil.jpg', 'artikel.png', 'artikel1.png', 'artikel2.png', 'artikel3.PNG', 'artikel4.png');
/*!40000 ALTER TABLE `header` ENABLE KEYS */;

-- Dumping structure for table novel.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `deskripsi_kat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kategori`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table novel.kategori: ~2 rows (approximately)
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` (`id_kategori`, `nama`, `deskripsi_kat`, `created_at`) VALUES
	(1, 'Kategori 1', '<p>kategori 1</p>\r\n', '2018-11-27 12:30:52'),
	(2, 'Kategori 2', '<p>kategori 2</p>\r\n', '2018-11-27 12:31:15');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;

-- Dumping structure for table novel.komentar
CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komen` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) DEFAULT NULL,
  `id_novel` int(11) DEFAULT NULL,
  `komentar` text,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `id_komen` (`id_komen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table novel.komentar: ~0 rows (approximately)
/*!40000 ALTER TABLE `komentar` DISABLE KEYS */;
/*!40000 ALTER TABLE `komentar` ENABLE KEYS */;

-- Dumping structure for table novel.member
CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `code_verification` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_member`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table novel.member: ~0 rows (approximately)
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` (`id_member`, `email`, `nama`, `password`, `code_verification`, `photo`, `created_at`, `updated_at`, `status`) VALUES
	(1, 'paijo@gmail.com', 'Paijo', '25d55ad283aa400af464c76d713c07ad', NULL, '15444362523.jpg', '2018-12-10 17:04:12', '2018-12-10 17:04:12', NULL);
/*!40000 ALTER TABLE `member` ENABLE KEYS */;

-- Dumping structure for table novel.novel
CREATE TABLE IF NOT EXISTS `novel` (
  `id_novel` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deskripsi` text NOT NULL,
  `cover` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `judul` varchar(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  PRIMARY KEY (`id_novel`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table novel.novel: ~4 rows (approximately)
/*!40000 ALTER TABLE `novel` DISABLE KEYS */;
INSERT INTO `novel` (`id_novel`, `created_at`, `updated_at`, `deskripsi`, `cover`, `status`, `judul`, `id_kategori`, `view`) VALUES
	(1, '2018-10-25 20:32:10', '2018-12-17 18:46:16', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '1543296579sampul3.jpg', 0, 'Novel 1', 2, 47),
	(2, '2018-11-01 19:31:14', '2018-12-17 22:07:21', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '1543296619novel1.jpg', 0, 'Novel 2', 1, 22),
	(3, '2018-11-27 20:37:10', '2018-12-26 22:47:00', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '1543325830sampul2.jpg', 0, 'Novel 3', 1, 5),
	(4, '2018-11-27 20:37:53', '2018-12-17 14:30:08', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '1543325873sampul4.gif', 0, 'Novel 4', 1, 3);
/*!40000 ALTER TABLE `novel` ENABLE KEYS */;

-- Dumping structure for table novel.pejabat
CREATE TABLE IF NOT EXISTS `pejabat` (
  `id_pejabat` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `prioritas` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_pejabat`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table novel.pejabat: ~0 rows (approximately)
/*!40000 ALTER TABLE `pejabat` DISABLE KEYS */;
INSERT INTO `pejabat` (`id_pejabat`, `nama`, `jabatan`, `foto`, `prioritas`) VALUES
	(3, 'zc 2', 'czxc 2', '150013394160_1_energetics_noni_(1).jpg', 12);
/*!40000 ALTER TABLE `pejabat` ENABLE KEYS */;

-- Dumping structure for table novel.pesan
CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` decimal(10,0) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '0',
  `pesan` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pesan`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table novel.pesan: ~4 rows (approximately)
/*!40000 ALTER TABLE `pesan` DISABLE KEYS */;
INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `phone`, `status`, `pesan`, `created_at`) VALUES
	(2, 'sdf', 'sdf', NULL, '0', 'sdf', '2017-07-16 01:00:21'),
	(3, 'Joni', 'joni@gmail.com', NULL, '0', 'Testing contact us', '2018-12-13 20:11:44'),
	(4, 'paijo', 'paijo@gmail.com', NULL, '0', 'testing jon', '2018-12-13 20:14:24'),
	(5, 'Sabyan', 'sabyan@gmail.com', NULL, '0', 'test lagi men', '2018-12-13 20:15:04');
/*!40000 ALTER TABLE `pesan` ENABLE KEYS */;

-- Dumping structure for table novel.potensi
CREATE TABLE IF NOT EXISTS `potensi` (
  `id_potensi` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `cover` text NOT NULL,
  `view` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_potensi`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table novel.potensi: ~2 rows (approximately)
/*!40000 ALTER TABLE `potensi` DISABLE KEYS */;
INSERT INTO `potensi` (`id_potensi`, `judul`, `deskripsi`, `cover`, `view`, `created_at`) VALUES
	(7, 'ini test potensi', '<p>isi test potensi</p>\r\n', '14999987216-03-11_MARK_green_blueberry_fruit_after_bloom_.jpg', 5, '2017-07-15 20:43:38'),
	(8, 'test potensi 2', '<p>test potensi 2</p>\r\n', '150002551460_1_energetics_noni_(1).jpg', 26, '2017-07-15 21:11:15');
/*!40000 ALTER TABLE `potensi` ENABLE KEYS */;

-- Dumping structure for table novel.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `cover` text NOT NULL,
  `view` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_produk`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table novel.produk: ~0 rows (approximately)
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` (`id_produk`, `judul`, `deskripsi`, `cover`, `view`, `created_at`) VALUES
	(4, 'ini produk2', '<p>isi produk2</p>\r\n', '14996150512_i.jpg', 50, '2017-07-15 21:11:41');
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;

-- Dumping structure for table novel.profil
CREATE TABLE IF NOT EXISTS `profil` (
  `id_profil` int(11) NOT NULL AUTO_INCREMENT,
  `nama_desa` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_profil`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table novel.profil: ~0 rows (approximately)
/*!40000 ALTER TABLE `profil` DISABLE KEYS */;
INSERT INTO `profil` (`id_profil`, `nama_desa`, `gambar`, `deskripsi`) VALUES
	(1, 'Ketapang Kuning', 'profil7.png', 'Ketapangkuning adalah sebuah desa di wilayah Kecamatan Ngusikan, Kabupaten Jombang, Provinsi Jawa Timur.<br>');
/*!40000 ALTER TABLE `profil` ENABLE KEYS */;

-- Dumping structure for table novel.slider
CREATE TABLE IF NOT EXISTS `slider` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_slider`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table novel.slider: ~0 rows (approximately)
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` (`id_slider`, `judul`, `deskripsi`, `cover`, `created_at`) VALUES
	(5, 'ini slider 2', '<p>ini isi slider 2</p>\r\n', '15000532486.png', '2017-07-15 00:27:28');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

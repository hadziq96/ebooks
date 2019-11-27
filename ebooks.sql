-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `book`;
CREATE TABLE `book` (
  `id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `book` (`id`, `title`, `description`) VALUES
('book-00001',	'Cara penggunaan aplikasi (ebooks)',	'Dokumentasi dari aplikasi ini. Meliputi cara penggunaan aplikasi.');

DROP TABLE IF EXISTS `part`;
CREATE TABLE `part` (
  `id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_book` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `article` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `part` (`id`, `id_book`, `title`, `article`) VALUES
('part-00005',	'book-00001',	'Menu part',	'<p>Sama seperti menu book. Kamu bisa menambahkan, mengedit, dan menghapus part dengan mengklik tombol masing-masing.</p>'),
('part-00004',	'book-00001',	'Menu book',	'<p>Dengan mengetikkan baseurl kamu/admin , maka kamu akan diarahkan ke menu book. Disana kamu bisa menambahkan book, mengedit, dan juga menghapus book dengan cara menekan tombol masing-masing. Untuk menambahkan part ke sebuah book maka kamu bisa menuju ke part menu dengan mengklik tombol part.</p>'),
('part-00003',	'book-00001',	'Halaman Admin',	'<p>Untuk masuk ke halaman admin kamu bisa mengetikkan url pada browser kamu dengan aturan berikut:\r\nsesuai baseurl kamu di konfig /admin .</p>\r\nUntuk saat ini belum ada form login'),
('part-00002',	'book-00001',	'Penjelasan book dan part',	'<p>Book adalah buku. Sedangkan part adalah bagian dalam buku. Karena saya tidak tahu bahasa inggrisnya bab maka saya menamainya part.\r\nSeperti halnya buku pada umumnya yang memiliki banyak bab, disini kamu juga bisa menuliskan banyak bab. </p>\r\n<p>Untuk menulis sesuatu seperti deskripsi buku atau artikel dari part kamu juga bisa menambahkan tag html. Jika ingin menulis paragraf maka bungkus diantara tag p. Jika ingin menebalkan tulisan maka bungkus tulisan tadi dengan tag b. Dan lain lain</p>'),
('part-00001',	'book-00001',	'Pemasangan',	'<p>Pertama-tama anda harus menginstall aplikasi ini terlebih dahulu. Namun jika kamu sudah melihat tulisan ini kemungkinan besar kamu telah berhasil menginstal aplikasi ini. Selamat, anda bisa ke step selanjutnya</p>'),
('part-00006',	'book-00001',	'Terimakasih',	'<p>Terimakasih telah menggunakan aplikasi ini. Tentu masih banyak kekurangan fitur dan eror yang mungkin masih sering muncul. Bila ada saran untuk fitur kedepannya atau kamu menemukan eror dalam aplikasi ini, kamu bisa menghubungi kami melalui kontak di bawah atau langsung email ke:</p> <b>hadziqay@gmail.com</b>');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `user` (`id`, `name`, `username`, `password`, `level`) VALUES
('user-001',	'Super admin',	'admin',	'$2y$10$JR3wisiVE5/qdNLaGRevf.jz11g6OqQQEEaQqRKyyUA1Zy3dU3NjC',	1);

-- 2019-11-27 11:54:18

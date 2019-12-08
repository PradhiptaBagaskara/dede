-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 08:07 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukm_dede`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `username`, `password`) VALUES
(1, 'nama admin', 'admin@admin.com', 'admin', '$2y$12$LUpvwCrntLu0CmALkb9d7uLs6fFaOPXoL9SiffP4j7RjQlY1.EJPa');

-- --------------------------------------------------------

--
-- Table structure for table `cerita`
--

CREATE TABLE `cerita` (
  `id_cerita` int(11) NOT NULL,
  `id_kategori` varchar(200) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `img` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `diskripsi` longtext NOT NULL,
  `isi` longtext NOT NULL,
  `status` enum('enable','disable') NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cerita`
--

INSERT INTO `cerita` (`id_cerita`, `id_kategori`, `id_user`, `img`, `judul`, `diskripsi`, `isi`, `status`, `date`) VALUES
(1, '1', '1', 'images.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the , when an unknown printer took a galley of type and sc', 'disable', '2019-07-17 13:44:33'),
(2, '2', '3', 'images.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the , when an unknown printer took a galley of type and sc', 'enable', '2019-07-06 03:55:06'),
(3, '1', '1', 'pamflet.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the , when an unknown printer took a galley of type and sc', 'enable', '2019-07-17 13:44:30'),
(4, '2', '1', 'pamflet.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the , when an unknown printer took a galley of type and sc', 'enable', '2019-07-06 03:55:06'),
(5, '1', '1', 'pamflet.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the , when an unknown printer took a galley of type and sc', 'enable', '2019-07-06 03:55:06'),
(6, '3', '2', 'pamflet.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the , when an unknown printer took a galley of type and sc', 'enable', '2019-07-06 03:55:06'),
(7, '1', '2', 'pamflet.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the , when an unknown printer took a galley of type and sc', 'enable', '2019-07-06 03:55:06'),
(8, '4', '2', 'pamflet.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the , when an unknown printer took a galley of type and sc', 'enable', '2019-07-06 03:55:06'),
(9, '1', '2', 'pamflet.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the , when an unknown printer took a galley of type and sc', 'enable', '2019-07-06 03:55:06'),
(10, '5', '2', 'pamflet.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the , when an unknown printer took a galley of type and sc', 'enable', '2019-07-06 03:55:06'),
(11, '1', '1', 'pamflet.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the , when an unknown printer took a galley of type and sc', 'enable', '2019-07-06 03:55:06'),
(12, '5', '2', 'pamflet.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the , when an unknown printer took a galley of type and sc', 'enable', '2019-07-06 03:55:06'),
(13, '1', '1', 'pamflet.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the , when an unknown printer took a galley of type and sc', 'enable', '2019-07-06 03:55:06'),
(14, '2', '3', 'Brosur_Nugget22.jpg', 'judul', 'diskripsi', 'isi cerita', 'enable', '2019-07-06 03:55:06'),
(15, '2', '3', '1.jpeg', 'judul terbaru', 'diskripsi', 'isi cerita', 'enable', '2019-07-06 08:50:54'),
(16, '2', '3', '', 'judul terbaru', 'diskripsi', 'isi cerita', 'enable', '2019-07-09 06:32:53'),
(17, '5', '2', 'android-grid1.png', 'Jwjw', 'Nsnaa', '<html><body><p>Jdkdme</p>\n<p><u>Bdkslsj</u></p>\n</body></html>', 'enable', '2019-07-09 07:11:48'),
(18, '4', '2', 'IMG-20190704-WA0011.jpg', 'Android judul', 'Diskripsi', '<html><body><p><u>Hahaahah</u></p>\n</body></html>', 'enable', '2019-07-09 07:18:48'),
(19, '4', '2', '', 'Jdjd', 'Iewiw', '<html><body><p>Isioe</p>\n<p><b><u>Nddklel</u></b></p>\n</body></html>', 'enable', '2019-07-09 07:26:04'),
(20, '4', '2', 'IMG20190521195220.jpg', 'Judul bold', 'Diskripsi', '<html><body><h3>3. Menggunakan kode HTML.</h3>\r\n<p>Cara ini dapat dilakukan dengan mudah jika anda paham dengan kode HTML. Jika anda belum tau caranya silahkan ikuti petunjuk dibawah ini.</p>\r\n<ul>\r\n<li>Ubah tampilan Visual tulisan anda ke mode HTML\r\n<p><figure id=\"attachment_3534\" aria-describedby=\"caption-attachment-3534\" style=\"width: 600px\" class=\"wp-caption aligncenter\"><img class=\"wp-image-3534\" src=\"https://i2.wp.com/bossulo.com/wp-content/uploads/2019/03/tex-justify-bossulo.jpg?resize=600%2C397&#038;ssl=1\" alt=\"\" width=\"600\" height=\"397\" srcset=\"https://i2.wp.com/bossulo.com/wp-content/uploads/2019/03/tex-justify-bossulo.jpg?w=1080&amp;ssl=1 1080w, https://i2.wp.com/bossulo.com/wp-content/uploads/2019/03/tex-justify-bossulo.jpg?resize=300%2C199&amp;ssl=1 300w, https://i2.wp.com/bossulo.com/wp-content/uploads/2019/03/tex-justify-bossulo.jpg?resize=768%2C508&amp;ssl=1 768w, https://i2.wp.com/bossulo.com/wp-content/uploads/2019/03/tex-justify-bossulo.jpg?resize=1024%2C678&amp;ssl=1 1024w\" sizes=\"(max-width: 600px) 100vw, 600px\" data-recalc-dims=\"1\" /><figcaption id=\"caption-attachment-3534\" class=\"wp-caption-text\">merubah visual editor ke code editor</figcaption></figure></li>\r\n</ul>\r\n<ul>\r\n<li>Tambahkan code html berikut ini <code style=\"color: #353535; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">&lt;p style=\"text-align: justify;\"&gt;</code> pada awal paragraf dan ditutup pada akhir paragraf<code style=\"color: #353535; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\"><code style=\"color: #353535; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">&lt;/ p&gt; .</code></code>\r\n<p><figure id=\"attachment_3532\" aria-describedby=\"caption-attachment-3532\" style=\"width: 600px\" class=\"wp-caption aligncenter\"><img class=\"wp-image-3532\" src=\"https://i1.wp.com/bossulo.com/wp-content/uploads/2019/03/3.-Text-Justify-bossulo.jpg?resize=600%2C634&#038;ssl=1\" alt=\"\" width=\"600\" height=\"634\" srcset=\"https://i1.wp.com/bossulo.com/wp-content/uploads/2019/03/3.-Text-Justify-bossulo.jpg?w=1080&amp;ssl=1 1080w, https://i1.wp.com/bossulo.com/wp-content/uploads/2019/03/3.-Text-Justify-bossulo.jpg?resize=284%2C300&amp;ssl=1 284w, https://i1.wp.com/bossulo.com/wp-content/uploads/2019/03/3.-Text-Justify-bossulo.jpg?resize=768%2C811&amp;ssl=1 768w, https://i1.wp.com/bossulo.com/wp-content/uploads/2019/03/3.-Text-Justify-bossulo.jpg?resize=969%2C1024&amp;ssl=1 969w\" sizes=\"(max-width: 600px) 100vw, 600px\" data-recalc-dims=\"1\" /><figcaption id=\"caption-attachment-3532\" class=\"wp-caption-text\">Contoh membuat text justify dengan memasukan code html.</figcaption></figure></li>\r\n</ul>\r\n<p>Setelah mengikuti cara diatas coba kembalikan mode html ke mode Visual. Hasilnya tampilan tulisan anda telah menjadi <i>Justify</i> atau rata kanan dan kiri.</p>\r\n<p>Satu-satunya kekurangan cara ini adalah masalah ketelitian, karena anda harus memasukan kode HTML tersebut secara manual pada setiap paragraf.</p>\r\n<p>Itulah cara membuat tulisan <i>Justify</i> Rata kanan dan Kiri pada Blog. Jika anda mempunyai kesulitan dalam hal ini, jangan ragu untuk bertanya pada kolom komentar. Dengan senang hati kami akan menjawab seluruh pertanyaan anda.</p>\r\n<p>Selamat Mencoba!.</p>\r\n</body></html>', 'enable', '2019-07-10 20:38:27'),
(21, '5', '2', 'android-grid2.png', 'Judul andro', 'Diskripsi kk', '<html><body><p>Crtb gkhfkh mgzsjtky&#129322;&#128538;&#129315;&#128532;&#128538;&#128538;</p>\n</body></html>', 'disable', '2019-07-13 15:16:01'),
(22, '4', '6', 'android-grid2.png', 'Bunuh', 'U 6h', '<html><body><br>\n<p><emoji src=\"2131230979\" /><emoji src=\"2131230979\" /><emoji src=\"2131230979\" /></p>\n<p><hr /></p>\n<br>\n<p><b>Lorenza </b><i>Pergi </i><u>kamboja</u></p>\n</body></html>', 'disable', '2019-07-14 10:36:17'),
(23, '5', '4', 'IMG20190517130906.jpg', 'Coba', 'Deskripsi ', '<html><body><p><u>Testetsteyswt</u></p>\n</body></html>', 'enable', '2019-07-14 10:47:46'),
(24, '1', '4', 'pan_pan_foto.jpg', '123', 'Qwerty', '<html><body><p>Qwerrt</p>\n</body></html>', 'disable', '2019-07-17 14:14:58'),
(25, '5', '4', '2269-1.jpeg', 'Judul bag', 'Tes bag', '<html><body><p>Isi <u>cerita</u></p>\n</body></html>', 'enable', '2019-07-17 14:23:38'),
(26, '5', '7', '2269-11.jpeg', 'Uwuw', 'Usuiw', '<html><body><p>Test img</p>\n<br>\n<p style=\"text-align:center;\"><img src=\"https://4.bp.blogspot.com/-JNOOQzdHKu0/VpEvdcjtrVI/AAAAAAAABkU/Mi3mWgBX0MU/s1600/tes-mata-minus.jpg\" /></p>\n<p style=\"text-align:start;\">?</p>\n</body></html>', 'enable', '2019-07-17 19:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Agama'),
(2, 'Novel & Sastra'),
(3, 'Pengembangan Diri'),
(4, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `masukan`
--

CREATE TABLE `masukan` (
  `id_masukan` int(11) NOT NULL,
  `id_user` varchar(200) NOT NULL,
  `isi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masukan`
--

INSERT INTO `masukan` (`id_masukan`, `id_user`, `isi`) VALUES
(1, '3', 'masukan saya adalah'),
(2, '8', '<html><body><p>Masukan dari <u>andro</u></p>\n</body></html>'),
(3, '7', '<html><body><p>Masukan <u>agus</u></p>\n</body></html>'),
(4, '6', '<html><body><p>Masukan dari <u>bekti</u></p>\n</body></html>');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id_admin` int(11) NOT NULL,
  `status` enum('true','false','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ukm`
--

CREATE TABLE `ukm` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukm`
--

INSERT INTO `ukm` (`id`, `id_kategori`, `id_user`) VALUES
(1, 1, 2),
(3, 3, 3),
(4, 4, 4),
(5, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `foto_user` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `auth_key` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `foto_user`, `username`, `email`, `password`, `auth_key`) VALUES
(1, 'agus setiawan', 'images.jpg', 'gaga', 'angga@gmail.com', 'password', '6a890056c6a1e14213c996e58eedad60'),
(2, 'santi budiman', 'pakan.jpg', 'santi', 'santi@gmail.com', '$2y$12$YTyUnYOtfo5NY0mTSuNCjuAorpeDZXIamQXozy1C9AZibwp6u/7pS', 'ff97ecc1c48db2e4a513e37ca13eed5e'),
(3, 'Pradhipta Bagaskara', '', 'pradhipta', 'pradhipta@mail.com', '$2y$12$FOW3GDpVbp/gYkHFpvP.mObkcD6hAGPO0cETcNx7dp9ha2l1MzPpG', 'c99415f08edec508bbf34f8307f22b7d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cerita`
--
ALTER TABLE `cerita`
  ADD PRIMARY KEY (`id_cerita`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `masukan`
--
ALTER TABLE `masukan`
  ADD PRIMARY KEY (`id_masukan`);

--
-- Indexes for table `ukm`
--
ALTER TABLE `ukm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cerita`
--
ALTER TABLE `cerita`
  MODIFY `id_cerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `masukan`
--
ALTER TABLE `masukan`
  MODIFY `id_masukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ukm`
--
ALTER TABLE `ukm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

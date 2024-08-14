-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2024 at 07:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus_digital`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `sinopsis` text NOT NULL,
  `cover` varchar(100) NOT NULL,
  `available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `penulis`, `tahun_terbit`, `sinopsis`, `cover`, `available`) VALUES
(1, 'Bumi', 'Tere Liye', '2014', 'Pada saat itu, makhluk kurus dan tinggi itu tiba-tiba hadir di dalam cermin kamar Raib. Tak hanya itu, banyak berbagai keanehan yang ia alami, sampai akhirnya Raib pun merasakan dan menyadari bahwa dirinya mempunyai kemampuan yang istimewa.\r\n\r\nBeberapa peristiwa atau kejadian aneh itu diawali dengan kasus robohnya tower listrik yang berada di belakang sekolahnya, sampai pertemuannya dengan makhluk tidak terduga yang kemudian membawanya ke klan Bulan, yaitu dunia paralel yang kehidupan di dalamnya berdampingan dengan klan Bumi.\r\n\r\nSelain itu, memang secara keseluruhan, novel pertama dari serial Bumi ini menceritakan awal pertemuan Raib, Seli, dan Ali yang mana hingga akhirnya mereka bertiga menjadi sahabat yang akan berjelajah dan berpetualang di dunia paralel', '20240814175949.png', 2),
(2, 'Bulan', 'Tere Liye', '2015', 'Penjelajahan mereka pada novel kedua serial Bumi ini bermula dari tujuan mereka untuk mempersatukan antara klan Bulan dan klan Matahari. Pada awalnya, penjelajahan mereka semacam perjalanan politik. Akan tetapi, siapa yang mengira bahwa Ali, Seli, dan Raib justru dilibatkan dengan perburuan bunga. Bunga tersebut dapat mengabulkan permintaan orang yang berhasil mendapatkannya saat pertama kali bunga itu mekar.\r\n\r\nPenjelajahan mereka amatlah panjang, hingga membawa mereka, yaitu Ali, Raib, dan Seli berjumpa dengan banyak tokoh baru dan berbagai pertarungan yang terjadi antara mereka bertiga dan berbagai tokoh tersebut. Hal itu menjadi sebuah penjelajahan dan petualangan politik menakjubkan yang dilalui oleh mereka.', '20240814180031.png', 3),
(3, 'Matahari', 'Tere Liye', '2016', 'Awalnya, Ali hanya penasaran, kemudian membawa kedua sahabatnya, yaitu Raib dan Seli untuk mewujudkan rasa penasaran Ali dengan mengajak mereka berjelajah ke rahim atau perut Bumi. Sampai akhirnya, mereka berhasil menemukan terkait eksistensi klan Bintang.', '20240814180127.png', 3),
(4, 'Bintang', 'Tere Liye', '2017', 'Pada novel ini, Ali, Raib, dan Seli masih melanjutkan misinya di klan Bintang. Apa misi yang akan mereka lakukan? Misi yang hendak mereka kerjakan adalah mencoba untuk menyelamatkan manusia yang berada di klan Bumi.\r\n\r\nAkan tetapi, yang menjadi permasalahan mereka, yaitu mereka bertiga harus mendapatkan dan melakukan pencegahan pada pasak klan Bumi yang akan segera meledak. Dalam memenuhi tujuan dan misi tersebut, Ali, Raib, dan Seli dihadapkan pada berbagai macam pertarungan dan rintangan yang rumit', '20240814180236.png', 3),
(5, 'Ceroz dan Batozar', 'Tere Liye', '2018', 'Ceros dan Batozar adalah dua part yang berbeda. Ceros merupakan dua makhluk raksasa yang bersembunyi di bawah pada suatu monumen yang cukup terkenal akan historinya. Kedua makhluk itu secara tidak sengaja ditemukan oleh Ali, Raib, dan Seli saat sekolah mereka sedang melakukan tour ke salah satu situs kuno, yaitu Bor-O-Bdur.\r\n\r\nSementara Batozar adalah makhluk kriminal berasal dari klan bulan yang berada dan bersembunyi di klan Bumi. Perjalanan dan petualangan Ali, Seli, dan Raib kali ini, nantinya akan membawa mereka untuk mempelajari metode bertarung yang baru dari Master B alias Batozar.', '20240814180307.png', 3),
(6, 'Komet', 'Tere Liye', '2018', 'Pulau itu mempunyai nama berdasarkan nama hari, mulai dari hari senin, selasa, rabu, sampai hari minggu. Di sana pula, mereka bersua dengan orang berwajah sama, tetapi berbeda nama pada setiap pulaunya. Aneh bukan? ', '20240814180402.png', 3),
(7, 'Komet Minor', 'Tere Liye', '2019', 'Ketika novel Komet Minor ini terbit, banyak pembaca setia yang beranggapan bahwa novel ini merupakan akhir dari serial Bumi. Namun, siapa sangka bahwa cerita di dalam novel ini masih memuat banyak misteri dan teka-teki yang perlu diselesaikan di novel selanjutnya. Terlebih, selepas pertarungan mereka dengan si Tanpa Mahkota.', '20240814180446.png', 3),
(8, 'Selena ', 'Tere Liye', '2020', 'Pada novel ini, tidak mengisahkan perjalanan Ali, Seli, dan Raib. Sesuai dengan judulnya maka novel ini hendak menceritakan terkait Miss Selena yang merupakan guru Matematika di sekolah mereka.\r\n\r\nAkan tetapi, ternyata Miss Selena atau Miss Keriting ini juga seorang petarung hebat yang berasal dari klan Bulan. Di dalamnya menceritakan awal mula perjalanan hidup Miss Selena, mulai dari masa remaja sampai berhasil masuk dan lolos Akademi Bayangan Tingkat Tinggi (ABTT). Hingga kemudian dirinya bertemu dengan Mata dan Tazk.\r\n\r\nMata dan Tazk adalah dua orang yang sudah ditakdirkan untuk menjadi sahabat sejati Miss Selena. Mata merupakan teman sekamar Miss Selena yang berasal dari kawasan sungai jauh dan mempunyai teknik bertarung yang luar biasa. Ia juga seorang putri keturunan murni. Sementara Tazk merupakan mantan boyband yang mempunyai kebolehan dalam memimpin dengan baik. Mereka bertiga bagaikan tiga serangkai yang sukar untuk dipisahkan.', '20240814180516.png', 3),
(9, 'Nebula', 'Tere Liye', '2020', 'Nebula adalah novel kedelapan dari serial dunia paralel yang memang terbit berbarengan dengan novel Selena, yakni pada tahun Mei 2020 lalu. Novel ini mengisahkan kehidupan Miss Selena selama berada di Akademi Bayangan Tingkat Tinggi (ABTT). Selena tidak sendiri, di dalam novel ini akan ada Mata dan Tazk yang andil dalam kisah Selena.\r\n\r\nKemudian, di dalam novel ini, Selena harus mencari petunjuk dan mengunjungi ke berbagai lokasi untuk menemukan segala jawaban atas misi yang diberikan oleh makhluk jahat yang kerap mengancamnya.\r\n\r\nHingga Selena berjelajah ke klan Nebula guna mencari Cawan Abadi yang diperintahkan Tamus, yakni makhluk jahat yang sering mengancam Selena. Di dalam novel Nebula juga akan terkuak mengenai misteri siapa sesungguhnya orang tua dari Raib.\r\n\r\nTak hanya itu, di novel ini persahabatan mereka bertiga, yakni Selena, Tazk, dan Mata akan diuji.\r\n\r\nLantas, Bagaimakah kisah antara persahabatan mereka? Apakah yang sebenarnya terjadi? Bagaimana Selena memecahkan teka-teki dari Cawan Abadi? Lalu, bagaimana kehidupan di klan Nebula dan apa istimewanya klan ini?', '20240814180551.png', 0),
(10, 'Si Putih (Spin Off)', 'Tere Liye', '2021', 'Novel urutan kesembilan dari serial Dunia Paralel, yakni bertajuk Si Putih. Novel ini berhasil diterbitkan pada tahun 2021. Bagi pecinta serial Bumi dan mengikuti dari buku pertama, pastinya kalian tahu dengan hewan kesayangan milik Raib, yakni Si Putih.\r\n\r\nSesuai dengan judulnya, novel ini tentu akan membahas Si Putih, kucing kesayangan Raib. Kucing yang pada saat itu berada di depan pintu rumahnya sebagai hadiah hari kelahiran Raib. Akan tetapi, siapa yang mengira bahwa Si Putih mempunyai ceritanya tersendiri akan masa lalunya yang tak kalah menarik.\r\n\r\nSelain itu, di novel ini pun akan ada petualangan di klan baru bersama berbagai tokoh yang baru pula. Kemudian, akan diketahui pandemi yang merepotkan penduduk di klan-klan jauh.', '20240814180906.png', 3),
(11, 'Lumpu', 'Tere Liye', '2021', 'Lumpu merupakan novel urutan kesepuluh dari serial Bumi Dunia Paralel. Novel ini terbit pertama kali pada bulan tahun 2021 oleh penerbit Gramedia Pustaka Utama. Novel ini menceritakan terkait kehidupan musuh dari masa lalu, rumornya makhluk itu telah menyimpan dendam pada Miss Selena selama kurang lebih 17 tahun.\r\n\r\nKemudian, ada hal yang menjadi awal petualangan bagi Raib, Ali, dan Seli ke berbagai tempat, seperti klan Bulan, klan Matahari, klan Bintang, situs Bor-O-Bdur, klan Komet, serta klan Komet Minor.\r\n\r\nDalam novel Lumpu ini, mereka hendak berpetualang kembali dengan kapsul terbang, yakni ILY yang telah diciptakan oleh Ali si genius. Tujuannya adalah mereka akan mengunjungi klan Nebula guna menyelamatkan Miss Selena dari Lumpu.\r\n\r\nLalu, kabarnya, klan Nebula adalah gerbang menuju klan Aldebaran, yakni tempat berasalnya orang-orang yang memiliki kekuatan. Tempat tersebut yang akan memulai peradaban manusia.\r\n\r\nBagaimana perjuangan Raib, Ali, dan Seli dalam menyelamatkan Miss Selena? Apakah mereka mampu menaklukkan kekuatan dari Lumpu? Sebenarnya, apa yang terjadi antara Miss Selena dan Lumpu di masa lalu? Baca kisah selengkapnya tentunya di novel Lumpu. ', '20240814180916.png', 3),
(12, 'Bibi Gill', 'Tere Liye', '2022', 'Buku ke-12 dari serial Bumi adalah yang berjudul Bibi Gill. Berbeda dari petualangan dari dunia parallel sebelumnya, buku ke-12 dari serial Bumi ini yang tentu lebih berfokus kepada perjalanan Bibi Gill yang adalah seorang ahli Pengintai di dalam dunia parallel.\r\n\r\nSama halnya dengan buku Selena, melalui novel ini kita juga tentunya akan mengenal lebih jauh lagi tentang sosok dari seorang Bibi Gill dan bagaimana perjalanan hidupnya sebelum menjadi seorang dosen di ABTT.\r\n\r\nBagaimana menjadi petarung terkuat di dunia paralel? Dengan latihan panjang dan pengorbanan. Termasuk kehilangan dan kesedihan. Inilah kisah tentang Bibi Gill, yang sejak kecil berusaha mengalahkan ‘monster’ dalam hidupnya.\r\n\r\nApakah dia bisa menemukan jawaban yang selama ini dia cari?\r\n\r\nHei, jika kalian melihat seseorang yang amat sederhana, seperti ibu-ibu penjaga kantin, tukang sapu, sopir ojek online. Jangan buru-buru menilainya memang sesederhana itu. Boleh jadi dia adalah pemilik teknik bertarung paling mematikan di dunia paralel.', '20240814180732.png', 3),
(13, 'Sagaras', 'Tere Liye', '2022', 'Ke mana orang tua Ali? Apakah orang tua Ali masih hidup? Dari klan mana kah Ali? Pada 384 halaman novel SagaraS ini, semua pertanyaan dan rasa penasaran tersebut akhirnya akan terjawab. Akhirnya. Siapa orang tua Ali dijawab di buku ini.\r\n\r\nAli, bertahun-tahun, berusaha memecahkan misteri itu. Paib dan Seli tentu tidak akan membiarkan Ali sendirian, mereka sahabat sejati. Dan jangan lupakan, Batozar alias Master B, dengan segenap kalimat kasar, seolah tidak peduli, dia selalu siap membela. Tapi bagaimana jika misteri itu terhadang tembok kokoh SagaraS? Dan mereka harus bertarung hidup-mati lima ronde melawan Ksatria SagaraS?\r\n\r\nJangan khawatir, kalian akan tersenyum lebar (dan boleh jadi sambil menangis), saat tiba di halaman terakhir buku ini. Buku ini adalah buku ke-13 dari serial BUMI.', '20240814180802.png', 3),
(14, 'Matahari Minor', 'Tere Liye', '2022', 'Namaku Seli, dan aku bisa mengeluarkan petir. \r\nApa yang akan kalian lakukan jika teman kalian dalam bahaya besar? Apakah menolongnya? Atau diam saja tidak bisa melakukan apapun? Aku tahu apa yang akan aku lakukan: berangkat bertarung membantunya. \r\nKali ini kami bertualang ke Klan yang malam-malamnya adalah horor panjang. Kekuatan gelap menyelimuti separuh Klan, dan aku harus memecahkan misteri pesan yang dikirimkan lewat teknologi mimpi. Petualangan ini tidak kalah seru, tidak kalah menegangkan. Dan sungguh, aku mohon maaf, kalian mungkin berteriak kesal saat tiba di halaman terakhir buku ini. ', '20240814180839.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_dipinjam` datetime NOT NULL,
  `tgl_dikembalikan` date DEFAULT NULL,
  `lama_meminjam` int(11) NOT NULL,
  `status` enum('0','disetujui','ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_buku`, `id_user`, `tgl_dipinjam`, `tgl_dikembalikan`, `lama_meminjam`, `status`) VALUES
(2, 1, 4, '2024-08-14 00:00:00', NULL, 7, '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `level` enum('user','petugas','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `nama_lengkap`, `alamat`, `no_hp`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'istri sah administrator underworld', 'underworld', 88888888, 'admin'),
(2, 'iqbal', 'eedae20fc3c7a6e9c5b1102098771c70', 'iqbal@gmail.com', 'iqbal iqbal', 'titang', 2147483647, 'petugas'),
(4, 'damar', 'dd28a856e0e04daf04cd11322a0835aa', 'damar@gmail.com', 'damar juliano', 'gaum', 2147483647, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

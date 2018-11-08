-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2018 at 01:59 PM
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
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `daerah`
--

CREATE TABLE `daerah` (
  `id_daerah` char(3) NOT NULL,
  `nama_daerah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daerah`
--

INSERT INTO `daerah` (`id_daerah`, `nama_daerah`) VALUES
('KBL', 'Kota Bandar Lampung'),
('KLB', 'Kabupaten Lampung Barat'),
('KLH', 'Kabupaten Lampung Tengah'),
('KLR', 'Kabupaten Lampung Timur'),
('KLS', 'Kabupaten Lampung Selatan'),
('KLU', 'Kabupaten Lampung Utara'),
('KMI', 'Kabupaten Mesuji'),
('KMO', 'Kota Metro'),
('KPB', 'Kabupaten Pesisir Barat'),
('KPN', 'Kabupaten Pasawaran'),
('KPU', 'Kabupaten Pringsewu'),
('KTB', 'Kabupaten Tulang Bawang Barat'),
('KTG', 'Kabupaten Tulang Bawang'),
('KTS', 'Kabupaten Tanggamus'),
('KWK', 'Kabupaten Way Kanan');


<!-- Member -->

CREATE TABLE member(
  nama_member VARCHAR(25) NOT NULL,
  uname VARCHAR(8) NOT NULL,
  hengpon VARCHAR(12) NOT NULL,
  Jenis_kelamin CHAR(1) NOT NULL,
  kota VARCHAR(25) NOT NULL,
  pass VARCHAR(8) NOT NULL, 
  email VARCHAR(255) NOT NULL,
  PRIMARY KEY(uname)
)Engine = InnoDB;
-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` char(3) NOT NULL,
  `id_daerah` char(3) NOT NULL,
  `tempat` varchar(20) NOT NULL DEFAULT 'Lampung',
  `nama_hotel` varchar(25) NOT NULL,
  `lokasi` varchar(500) NOT NULL,
  `harga` varchar(20) DEFAULT NULL,
  `deskripsi` text,
  `gambar` varchar(20) NOT NULL DEFAULT 'fakeimg.jpg',
  `maps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `id_daerah`, `tempat`, `nama_hotel`, `lokasi`, `harga`, `deskripsi`, `gambar`, `maps`) VALUES
('GEK', 'KLS', 'Kalianda', 'Hotel Grand Elty Krakatoa', 'Jl. Trans Sumatera Km. 45 Merak Belantung Kalianda, Kalianda, Lampung Selatan, Provinsi Lampung, Indonesia, 35551', 'Rp 764.000', 'Akomodasi ini hanya berjarak 12 menit dari pantai. Dikelilingi pantai berpasir putih yang menghadap Selat Sunda, Grand Elty Krakatoa menyediakan kamar-kamar dengan Wi-Fi gratis dan TV kabel layar datar. Resor ini juga memiliki kolam renang outdoor.\r\n\r\nGrand Elty Krakatoa berjarak kira-kira 2 jam berkendara dari Bandara Raden Intan.\r\n\r\nKamar-kamar Grand Elty Krakatoa ber-AC dan dilengkapi fasilitas membuat teh/kopi dan minibar. Kamar mandi pribadinya menawarkan shower dan perlengkapan mandi gratis.\r\n\r\nPeralatan olahraga laut seperti banana boat dan jet ski tersedia untuk disewakan. Anda juga dapat berkaraoke di lounge. Layanan penyewaan sepeda tersedia bagi Anda yang ingin menjelajahi daerah sekitar.\r\n\r\nRakata Coffee Shop menyajikan berbagai hidangan Barat, Asia, dan Indonesia. Tersedia layanan kamar. \r\n\r\nAkomodasi ini juga berada di salah satu kawasan paling favorit di Kaliandak! Tamu lebih senang di sini dibandingkan dengan di akomodasi lain di area yang sama.\r\n\r\nAkomodasi ini juga dinilai memiliki harga terbaik di Kaliandak! Tamu mendapatkan fasilitas lebih banyak untuk uang yang mereka keluarkan dibandingkan akomodasi lain di kota in', 'hotel-elty.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.667846341913!2d101.39213534943018!3d0.4976146638596806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e411a6fd16caaf9%3A0x1cfbe772777de4da!2sGrand+Elty+Krakatoa+Resort!5e0!3m2!1sid!2sid!4v1541089408105\" width=\"690\" height=\"469\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('HBS', 'KLS', 'Lampung Selatan', 'Hotel Bandara Syariah', 'Jl. H. Alamsyah Ratu Prawira Negara KM, Candi Mas, Natar, Kabupaten Lampung Selatan, Lampung 35362', 'Rp 380.000', 'Hotel Bandara Syariah berjarak 5 menit berkendara dari Bandara Radin Inten II. Hotel ini memiliki restoran, serta menawarkan akses WiFi gratis di seluruh areanya. Kulkas dengan minibar tersedia di semua kamar ber-AC.\r\n\r\nHotel Bandara Syariah berjarak 20 menit berkendara dari pusat kota Lampung, sementara Mall Lampung dapat dicapai dalam 30 menit berkendara.\r\n\r\nKamar-kamar ber-AC hotel ini menyediakan area tempat duduk, TV kabel layar datar, dan lemari. Masing-masing kamar memiliki kamar mandi pribadi dengan sandal, perlengkapan mandi gratis, dan fasilitas shower air panas. Handuk bersih juga tersedia di kamar.\r\n\r\nStaf di meja depan yang buka 24 jam siap membantu Anda mengatur layanan binatu dan penjemputan bandara.\r\n\r\nRestoran hotel mengkhususkan diri dengan masakan Indonesia, serta menyajikan sarapan prasmanan setiap pagi. Anda juga dapat menikmati hidangan dalam kenyamanan kamar Anda. ', 'HotelBandara.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.0312453070637!2d105.18159814946583!3d-5.257762654310648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c8e55319ef47%3A0xbcbd96fd6b76f02e!2sHOTEL+BANDARA+SYARIAH!5e0!3m2!1sid!2sid!4v1541089812056\" width=\"690\" height=\"469\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('HEL', 'KBL', 'Bandar Lampung', 'Home Stay Elmo\'s Lampung', 'Perumahan Kelapa 3 Asri blok C 3, Klp. Tiga, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35214', 'Rp 600.000', 'Elmo\'s homestay terletak di Bandar Lampung. Homestay ini berjarak 3,6 km dari Boemi Kedaton Mall. ', 'elmo1.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.0511182254954!2d105.2400410494672!3d-5.409185655519335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40da607297a35d%3A0x221906a3ef9d5d5d!2sHome+stay+Elmo&#39;S+lampung!5e0!3m2!1sid!2sid!4v1541089586111\" width=\"690\" height=\"469\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('HGP', 'KBL', 'Bandar Lampung', 'Hotel Grand Praba', 'Jalan Wolter Monginsidi No. 170 Teluk Betung Utara, Teluk Betung, Bandar Lampung, Provinsi Lampung, ', 'Rp 409.500', 'Berlokasi ideal di Bandar Lampung, Hotel Grand Praba Lampung memiliki kamar-kamar ber-AC dengan Wi-Fi gratis, parkir pribadi gratis dan layanan kamar. Di hotel ini Anda dapat menikmati taman, teras dan lounge bersama. Hotel ini memiliki layanan penyimpanan surat kabar dan bagasi yang dapat digunakan Anda.\r\n\r\nKamar tamu di hotel ini dilengkapi dengan TV. Hotel Grand Praba Lampung juga menawarkan pemandangan gunung. Semua kamar memiliki meja dan kamar mandi pribadi.\r\n\r\nAnda dapat menikmati sarapan Halal atau khas Asia. Di Hotel Grand Praba Lampung Anda akan menemukan restoran yang menyajikan masakan internasional, lokal dan Indonesia.\r\n\r\nBerbicara bahasa Melayu, Inggris dan Jepang, staf di meja depan 24-jam dapat membantu Anda merencanakan masa inap Anda.\r\n\r\nBoemi Kedaton Mall berjarak 6 km dari hotel. ', 'hotelgrandpraba.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.8976483056354!2d105.25161384946745!3d-5.432514655708889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40da39b652f38f%3A0x4a9bb5456df98cc0!2sHotel+Grand+Praba!5e0!3m2!1sid!2sid!4v1541088402450\" width=\"690\" height=\"469\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('HSL', 'KBL', 'Bandar Lampung', 'Hotel Sheraton Lampung', 'Jl. Wolter Monginsidi No.175, Gulak Galik, Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35401', 'Rp 642.000', 'erletak di Tanjungkarang-Telukbetung, Sheraton dapat dicapai dalam waktu 15 menit berkendara dari Kartini Shopping Mall. Hotel ini menawarkan beberapa pilihan tempat bersantap, kolam renang outdoor, dan spa. Kamar-kamarnya memiliki balkon pribadi, yang menawarkan pemandangan kolam renang atau taman.\r\n\r\nSheraton Lampung Hotel dapat dicapai dalam waktu 20 menit berkendara dari Bumi Kedaton Tourism Park dan 45 menit berkendara dari Bandara Radin Inten II. Dibutuhkan waktu 2 jam perjalanan dari hotel ini menuju Taman Nasional Way Kambas.\r\n\r\nKamar-kamar berlantai kayu yang modern dan ber-AC hotel ini dilengkapi dengan TV layar datar dengan saluran kabel, brankas pribadi, dan kamar mandi pribadi dengan pengering rambut. Fasilitas membuat teh/kopi dan minibar tersedia di dalam kamar.\r\n\r\nLobby Straits Bar menawarkan berbagai minuman disamping hiburan musik live setiap hari, sedangkan Poolside Terrace melayani makanan ringan. Kayu Manis Bake Shop menawarkan makanan ringan serta kue-kue sambil minum teh sampai pukul 20:00. Layanan kamar 24 jam juga tersedia.\r\n\r\nAnda dapat bermain tenis, atau biliar. Pilihan lainnya, Anda dapat bersantai di sauna atau berolahraga di gym. Pusat bisnis dan tempat bermain anak-anak juga tersedia dan Wi-Fi gratis disediakan di area umum hotel. ', 'Sheraton.jpeg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.873315950004!2d105.25428184946746!3d-5.43620425573894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e46d4b7da9fcea9%3A0x70d7994a0e883bb7!2sSheraton+Lampung+Hotel!5e0!3m2!1sid!2sid!4v1541089707432\" width=\"690\" height=\"469\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('NTG', 'KBL', 'Bandar Lampung', 'Nuwono Tasya Guesthouse', 'Jalan Perwira No.9, Rajabasa, Kota Bandar Lampung, Lampung 35122', 'Rp 160.000', 'Nuwono Tasya terletak di Bandar Lampung, menawarkan Wi-Fi gratis, dan Anda dapat menikmati taman, teras, dan lounge bersama.\r\n\r\nSarapan Asia tersedia setiap hari di homestay.\r\n\r\nNuwono Tasya menawarkan taman bermain anak-anak.\r\n\r\nBoemi Kedaton Mall berjarak 3,3 km dari akomodasi. \r\n\r\nAkomodasi ini juga dinilai memiliki harga terbaik di Bandar Lampung! Tamu mendapatkan fasilitas lebih banyak untuk uang yang mereka keluarkan dibandingkan akomodasi lain di kota ini.', 'Nuwono.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.345307619918!2d105.23532184946677!3d-5.364183055156185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c54b85c844cf%3A0xb6d99ba2c8179977!2sNuwono+Tasya+Guesthouse!5e0!3m2!1sid!2sid!4v1541089882283\" width=\"690\" height=\"469\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_favorit`
--

CREATE TABLE `hotel_favorit` (
  `id_hotel` char(3) NOT NULL,
  `id_daerah` char(3) NOT NULL,
  `tempat` varchar(20) NOT NULL DEFAULT 'Lampung',
  `nama_hotel` varchar(25) NOT NULL,
  `lokasi` varchar(500) NOT NULL,
  `harga` varchar(20) DEFAULT NULL,
  `deskripsi` text,
  `gambar` varchar(20) NOT NULL DEFAULT 'fakeimg.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_favorit`
--

INSERT INTO `hotel_favorit` (`id_hotel`, `id_daerah`, `tempat`, `nama_hotel`, `lokasi`, `harga`, `deskripsi`, `gambar`) VALUES
('GEK', 'KLS', 'Kalianda', 'Hotel Grand Elty Krakatoa', 'Jl. Trans Sumatera Km. 45 Merak Belantung Kalianda, Kalianda, Lampung Selatan, Provinsi Lampung, Indonesia, 35551', 'Rp 764.000', 'lorep ipsum', 'hotel-elty.jpg'),
('HBS', 'KLS', 'Lampung Selatan', 'Hotel Bandara Syariah', 'Jl. H. Alamsyah Ratu Prawira Negara KM, Candi Mas, Natar, Kabupaten Lampung Selatan, Lampung 35362', 'Rp 380.000', 'lorem ipsum', 'HotelBandara.jpg'),
('HGP', 'KBL', 'Bandar Lampung', 'Hotel Grand Praba', 'Jalan Wolter Monginsidi No. 170 Teluk Betung Utara, Teluk Betung, Bandar Lampung, Provinsi Lampung, ', 'Rp 409.500', 'lorem ipsum', 'hotelgrandpraba.jpg'),
('HSL', 'KBL', 'Bandar Lampung', 'Hotel Sheraton Lampung', 'Jl. Wolter Monginsidi No.175, Gulak Galik, Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35401', 'Rp 642.000', 'lorem ipsum', 'Sheraton.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id_resto` char(4) NOT NULL,
  `id_daerah` char(3) NOT NULL,
  `nam_resto` varchar(25) NOT NULL,
  `tempat` varchar(20) NOT NULL DEFAULT 'Lampung',
  `lokasi` varchar(100) NOT NULL,
  `deskripsi` text,
  `gambar` varchar(20) NOT NULL DEFAULT 'fakeimg.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id_resto`, `id_daerah`, `nam_resto`, `tempat`, `lokasi`, `deskripsi`, `gambar`) VALUES
('BLAK', 'KBL', 'Mie Ayam Koga', 'Lampung', 'Jl. Teuku Umar No.48, Surabaya, Kedaton, Kota Bandar Lampung, Lampung 35112', 'Mi Ayam Koga sendiri bukanlah pemain baru di dunia kuliner. Tercatat ia telah eksis sejak tahun 1990an. Penggemar dan langganannya pun tidak terhitung lagi jumlahnya.\r\n\r\nMaka jangan heran, saat jam makan siang atau akhir pekan, rumah makan ini akan ramai dikunjungi pelanggan setianya.\r\n\r\nUniknya lagi, meski rumah makan ini terbilang sederhana, dimana menempati sebuah rumah sederhana di bilangan Jalan Teuku Umar No 48A pengunjung yang datang justru didominasi kalangan kelas menengah atas.', 'koga.jpg'),
('BLHD', 'KBL', 'Ayam Penyet Hang Dihi', 'Lampung', 'Jalan Pulau Sebesi No. 001, Sukarame, Kota Bandar Lampung, Lampung 35131', 'Rumah makan Ayam Penyet Asli Hang Dihi, adalah salah destinasi wisata kuliner yang wajib anda kunjungi saat berada di Kota Tapis Berseri.\r\n\r\nTidak seperti rumah makan dengan bangunan yang mewah, Ayam Penyet Hang Dihi adalah rumah makan biasa di sudut jantung Ibukota Provinsi Lampung.\r\n\r\nMengandalkan menu berupa ayam penyet, rumah makan ini adalah salah satu tujuan favorit keluarga, mahasiswa dan masyarakat Bandar Lampung pada umumnya untuk memadamkan rasa lapar.', 'HangDihi.PNG'),
('PNGH', 'KPN', 'Ayam Bakar Mas Gendut Han', 'Lampung', 'JL Teluk Ratai, RT. 02 RW. 02, Hanura, Padang Cermin, Pesawaran, Hanura, Padang Cermin, Kabupaten Pe', '-;', 'MasGendut.jpg'),
('PNPI', 'KPN', 'Rumah Makan Pindang Ika', 'Lampung', 'Hurun, Padang Cermin, Pesawaran Regency, Lampung 35451', 'Ika diazab menjadi pindang ikan karena suka nyolong sendal di masjid raya ', 'pindang-patin.jpg'),
('PNPM', 'KPN', 'Rumah Makan Puti Minang', 'Lampung', 'JL Ahmad Yani, No. 25, RT 6 RW 3, Sukaraja, Bagelen, Gedung Tataan, Bagelen, Gedung Tataan, Kabupate', 'Dimana pun wisatanya makannya tetap nasi padang', 'Minang.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kuliner_favorit`
--

CREATE TABLE `kuliner_favorit` (
  `id_resto` char(4) NOT NULL,
  `id_daerah` char(3) NOT NULL,
  `tempat` varchar(20) NOT NULL DEFAULT 'Lampung',
  `nam_resto` varchar(25) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `deskripsi` text,
  `gambar` varchar(20) NOT NULL DEFAULT 'fakeimg.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuliner_favorit`
--

INSERT INTO `kuliner_favorit` (`id_resto`, `id_daerah`, `tempat`, `nam_resto`, `lokasi`, `deskripsi`, `gambar`) VALUES
('BLAK', 'KBL', 'Lampung', 'Mie Ayam Koga', 'Jl. Teuku Umar No.48, Surabaya, Kedaton, Kota Bandar Lampung, Lampung 35112', 'Puja kerang ajaib', 'koga.jpg'),
('BLHD', 'KBL', 'Lampung', 'Ayam Penyet Hang Dihi', 'Jalan Pulau Sebesi No. 001, Sukarame, Kota Bandar Lampung, Lampung 35131', 'Ayamnya jadi langsing setelah dipenyet', 'HangDihi.PNG'),
('PNGH', 'KPN', 'Lampung', 'Ayam Bakar Mas Gendut Han', 'JL Teluk Ratai, RT. 02 RW. 02, Hanura, Padang Cermin, Pesawaran, Hanura, Padang Cermin, Kabupaten Pe', 'Suami Hanura gendut', 'MasGendut.jpg'),
('PNPM', 'KPN', 'Lampung', 'Rumah Makan Puti Minang', 'JL Ahmad Yani, No. 25, RT 6 RW 3, Sukaraja, Bagelen, Gedung Tataan, Bagelen, Gedung Tataan, Kabupate', 'Dimana pun wisatanya makannya tetap nasi padang', 'Minang.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(20) NOT NULL,
   `label` VARCHAR(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `asal` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`,`label`, `nama`, `text`, `asal`, `foto`) VALUES
(1,`testimoni`, 'Taufik Agung Santoso', 'mengakses informasi menggunakan layanan di web ini itu dapat dipercaya, dan pasti terupdate beritanya', 'Teknik Informatika - Institut Teknologi Sumatera', 'taufik.jpg'),
(3,`testimoni`,'Pasha Abdul Khalid', 'Tes Testimoni', 'Teknik Informatika - Institut Teknologi Sumatera', 'pasha.jpg'),
(4,`testimoni`,'hamzah', 'ok', 'lampung', '');

-- --------------------------------------------------------
<!-- kalo mau ambil data ulasan 
	SELECT `nama`,text`,`asal`,`foto` FROM `testimoni` WHERE `label` = `kuliner`;
-->

-- Table structure for table `User`
--

CREATE TABLE `User` (
  `Email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`Email`, `password`) VALUES
('user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_daerah` char(3) NOT NULL auto_increment,
  `id_wisata` int(10) NOT NULL,
  `tempat` varchar(20) NOT NULL DEFAULT 'Lampung',
  `nama_wisata` varchar(25) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `harga` varchar(20) NOT NULL DEFAULT 'Rp ',
  `deskripsi` text,
  `gambar` varchar(20) NOT NULL DEFAULT 'fakeimage.jpg',
  `maps` text NOT NULL,
  `uname` VARCHAR(8)
) ENGINE=InnoDB DEFAULT CHARSET=latin1; auto_increment = 10;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_daerah`, `tempat`, `nama_wisata`, `lokasi`, `harga`, `deskripsi`, `gambar`, `maps`) VALUES
('KPN', 'Lampung', 'Pantai Bahari Ketapang', 'Gebang, Padang Cermin, Kabupaten Pesawaran, Lampung 35451', 'Rp 10.000', 'Pantai dengan perpaduan warna biru dan hijau toska itu mulai tampak saat Anda melewati tanjakan tak jauh dari Kampung Batu Menyan, Padang cermin. Anda pasti akan terpana menatap pemandangan alam yang begitu mempesona di pinggir Teluk Lampung itu. Gunung, perpaduan warna air laut hingga deretan pohon kelapa yang tak terhitung jumlah mempercantik pemandangan itu. Tak sedikit para pengguna jalan yang kemudian berhenti sejenak untuk sekedar berfoto. Itulah gambaran Teluk Lampung yang akan Anda lewati jika Anda akan berkunjung ke Pantai Bahari Ketapang.\r\n	Jika Anda berkunjung ke pantai ini menggunakan motor dan berjumlah dua orang Anda akan dikenai tiket masuk Rp 10ribu sementara untuk mobil pribadi dikenai tarif Rp 20ribu.', 'Ketapang1.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.8537792906104!2d105.22823494946897!3d-5.588617857000041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e412622d828d503%3A0x13cf9e4f162a074b!2sPantai+Bahari+Ketapang!5e0!3m2!1sid!2sid!4v1541093634418\" width=\"690\" height=\"469\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('KPN', 'Lampung', 'Pantai Klara', 'Jl. Raya Way Ratay No.99, Gebang, Padang Cermin, Kabupaten Pesawaran, Lampung 35451', 'Rp 10.000', 'Pantai ini oleh masyarakat setempat biasa dikenal dengan sebuat Pantai Klara.\r\n	Konon, asal muasal nama kelapa rapat itu maksudnya merujuk pada jejeran pohon kelapa yang berbaris rapat di sepanjang pantai.\r\n	Saat ini ada spot-spot foto yang pastinya instagramble banget yang bisa anda kunjungi di Pantai Klara.\r\n	Lokasi Pantai Klara berada tidak jauh dari pusat kota Bandar Lampung yang juga merupakan ibukota dari provinsi Lampung.\r\n	Pantai yang berada di wilayah administratif Kabupaten Pesawaran ini bisa ditempuh hanya dalam waktu 1 jam bila menggunakan kendaraan bermotor.\r\n	Sementara untuk memasuki pantai Klara pengunjung harus membayar karcis masuk sebesar Rp 25.000 per mobil atau Rp 15.000 jika menggunakan motor.\r\n	Lokasi ini biasanya dijadikan sebagai tempat latihan bagi Batalyon Infanteri 7 Marinir Piabung.', 'Klara2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.9128355741227!2d105.21094784975284!3d-5.579902595934656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e412884e2b18a41%3A0xbdbde9a49735eb99!2sPantai+Klara+Lampung!5e0!3m2!1sid!2sid!4v1541093777332\" width=\"690\" height=\"469\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('KLS', 'Lampung', 'Curug Katibung', 'Karya Tunggal, Katibung, Kabupaten Lampung Selatan, Lampung', 'Rp 5.000', 'Menikmati air terjun sambil menikmati semilir angin laut dan duduk di pasir putih, sambil bermain dengan deburan ombak, ternyata bukanlah suatu yang mustahil.\r\n	Bahkan untuk menikmati dan melihat suatu yang amat jarang dijumpai tersebut, kita tak perlu jauh-jauh bertandang ke Pulau Madura untuk mengunjungi Air Terjun Toroan, yang memang berada di tepi lautan.\r\n	Karena ternyata di Lampung Selatan (Lamsel), tepatnya di daerah Babatan, Katibung, terdapat air terjun yang airnya langsung turun ke laut, dan tempat indah itu bernama Pantai Terjun.', 'Katibung.PNG', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127077.1296022373!2d105.36175607828874!3d-5.5432343637355235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e411fc0465d3b27%3A0x9c01c449befee7c7!2sKatibung%2C+Kabupaten+Lampung+Selatan%2C+Lampung!5e0!3m2!1sid!2sid!4v1541093868710\" width=\"690\" height=\"469\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('KPN', 'Lampung', 'Pantai Mutun', 'Sukajaya Lempasing, Padang Cermin, Kabupaten Pesawaran, Lampung 35236', 'Rp 25.000', 'Pantai Mutun adalah sebuah objek wisata yang terletak di kawasan Jalan Raya Bumi Sari Natar Gang Bima Ruko Orange Natar Lampung Selatan. Secara administratif termasuk dalam wilayah kecamatan Jalan Raya Bumi Sari Natar Gang Bima Ruko Orange Padang Cermin, Kabupaten Pesawaran. Pantai ini mulai dikenal masyarakat Andan Jejama Tabikpun sebagai tujuan wisata sejak awal tahun 2017 dan menjadi tujuan favorit warga Tanjung Karang Pusat. Pantai yang masih alami dan kemudahan akses adalah salah satu daya tarik pantai Mutun Lampung Selatan.', 'Mutun1.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.3580822514455!2d105.26180133521083!3d-5.5137530650590785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40d863ce0b6695%3A0xaff8f326c3a8d9e1!2sPantai+Mutun!5e0!3m2!1sid!2sid!4v1541093942588\" width=\"690\" height=\"469\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('KBL', 'Lampung', 'Curug Niagara Stone Putu', 'Sukadana Ham, West Tanjung Karang, Kota Bandar Lampung, Lampung 35156', 'Rp 5.000', 'Air Terjun Batu Putu terletak satu deretan dengan Wira Garden Lampung dan Bumi Kedaton Resort jadi tinggal lurus saja ikuti jalan Wan Abdul Rahman.\r\n	Dari Gapura Air Terjun Batu Putu tersebut, masuk saja ke dalam. Sekitar 10 meter dari Gapura anda akan dimintai tiket masuk sebesar Rp5.000,- per orang (harga tiket saya beli tanggal 17 April 2016, harga bisa saja berubah sewaktu-waktu).\r\n	Setelah itu jalan lagi ke depan sekitar 300-500 meter akan anda temukan tempat parkir kendaraan. Tempat parkir kendaraan ini persis ada di pinggiran jalan, di sebelah kiri.\r\n	Untuk mencapai ke lokasi Air Terjun Batu Putu, anda harus jalan kaki menuruni perbukitan, sekitar 5 menit jalan kaki. Kendaraan harus dititipkan di tempat parkir yang telah disediakan.', 'niagara.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.932119442357!2d105.2160946497521!3d-5.427283396044531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40da0accb33aad%3A0x7446a5f36e66317f!2sAir+Terjun+Batu+Putu!5e0!3m2!1sid!2sid!4v1541093989599\" width=\"690\" height=\"469\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
('KPN', 'Lampung', 'Pantai Sari Ringgung', 'Jl. Way Ratai No.KM. 14, Sidodadi, Teluk Pandan, Kabupaten Pesawaran, Lampung 35451', 'Rp 5.000 - 50.000', 'Pantai Sari Ringgung merupakan salah satu objek wisata pantai favorit di Lampung. Beralamat di Kabupaten Pesawaran, Provinsi Lampung, Pantai Sari Ringgung memiliki jarak tempuh 14 Km atau ± 30 Menit dari pusat Kota Bandar Lampung. Jarak dari Kota Bandar Lampung ke Pantai Sari Ringgung sekitar 14 km, atau bisa ditempuh dengan kendaraan sekitar 30 menit.', 'SariRinggung2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.0638810781165!2d105.24995394975272!3d-5.55754999595073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40da49bddb1817%3A0x5a88d6e27815fb40!2sSari+Ringgung+Beach!5e0!3m2!1sid!2sid!4v1541094030033\" width=\"690\" height=\"469\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `daerah`
--
ALTER TABLE `daerah`
  ADD PRIMARY KEY (`id_daerah`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`),
  ADD KEY `id_daerah` (`id_daerah`);

--
-- Indexes for table `hotel_favorit`
--
ALTER TABLE `hotel_favorit`
  ADD PRIMARY KEY (`id_hotel`),
  ADD KEY `id_daerah` (`id_daerah`);

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id_resto`),
  ADD KEY `id_daerah` (`id_daerah`);

--
-- Indexes for table `kuliner_favorit`
--
ALTER TABLE `kuliner_favorit`
  ADD PRIMARY KEY (`id_resto`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `id_daerah` (`id_daerah`);


-- foreign member ke wisata

ALTER  TABLE `wisata
  ADD FOREIGN KEY (`uname`) REFERENCES `member`(`uname`) ON UPDATE CASCADE;
  
  
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`id_daerah`) REFERENCES `daerah` (`id_daerah`) ON UPDATE CASCADE;

--
-- Constraints for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD CONSTRAINT `kuliner_ibfk_1` FOREIGN KEY (`id_daerah`) REFERENCES `daerah` (`id_daerah`) ON UPDATE CASCADE;

--
-- Constraints for table `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `wisata_ibfk_1` FOREIGN KEY (`id_daerah`) REFERENCES `daerah` (`id_daerah`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



<!-- Mencambah data di tabel pariwisata 

  INSERT INTO pariwisata (`id_daerah`, `nama_wisata`, `lokasi`, `harga`, `deskripsi`, `gambar`,`member`) VALUES
  ( blablabla,blabla,blabla,<member adalah sesi member yang login>)
 -->
 

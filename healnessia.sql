-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 05:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healnessia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookmark`
--

CREATE TABLE `tbl_bookmark` (
  `idBookmark` int(11) NOT NULL,
  `idInformasi` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi`
--

CREATE TABLE `tbl_informasi` (
  `id_informasi` int(11) NOT NULL,
  `deskTreatment` varchar(800) NOT NULL,
  `namaPenyakit` varchar(100) NOT NULL,
  `deskPenyakit` varchar(2000) NOT NULL,
  `infoPenyakit` varchar(500) NOT NULL,
  `pathGambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_informasi`
--

INSERT INTO `tbl_informasi` (`id_informasi`, `deskTreatment`, `namaPenyakit`, `deskPenyakit`, `infoPenyakit`, `pathGambar`) VALUES
(2, 'Terapkan etika batuk atau bersin (dengan menutup mulut dan hidung).Jangan meludah sembarangan.Bersihkan benda yang sering disentuh.Gunakan masker jika Anda sakit dan segera ke fasilitas kesehatan terdekat.Cuci tangan dengan sabun.Konsumsi makanan bergizi dan olahraga.Hindari menyentuh mata, hidung, dan mulut dengan tangan yang belum dicuci.', 'Covid-19', 'Corona Virus Disease 2019 atau yang biasa disingkat COVID-19 adalah penyakit menular yang disebabkan oleh SARS-CoV-2, salah satu jenis koronavirus. Penderita COVID-19 dapat mengalami demam, batuk kering, dan kesulitan bernafas.Sampai saat ini belum diketahui penyebab dari virus Corona, tetapi diketahui virus ini disebarkan oleh hewan dan mampu menjangkit dari satu spesies ke spesies lainnya, termasuk manusia. Diketahui virus Corona berasal dari Kota Wuhan di China dan muncul pada Desember 2019.Tindakan pencegahan untuk mengurangi kemungkinan infeksi antara lain tetap berada di rumah, menghindari bepergian dan beraktivitas di tempat umum, sering mencuci tangan dengan sabun dan air, tidak menyentuh mata, hidung, atau mulut dengan tangan yang tidak dicuci. Segera hubungi Hotline jika Anda mengalami gejala atau memiliki riwayat perjalanan/berpergian dari Negara yang terjangkit.', 'Coronavirus atau sering dikenal sebagai Covid-19 merupakan penyakit yang menyebabkan wabah pada awal tahun 2020', 'images/service/covid2.jpg'),
(3, 'Tidak melakukan hubungan seks sebelum menikah.Tidak berganti-ganti pasangan seksual.Menggunakan kondom saat berhubungan seksual.Menghindari penggunaan narkoba, terutama jenis suntik.Mendapatkan informasi yang benar terkait HIV, cara penularan, pencegahan, dan pengobatannya, terutama bagi anak remaja.', 'HIV/AIDS', 'HIV (human immunodeficiency virus) adalah virus yang merusak sistem kekebalan tubuh dengan menginfeksi dan menghancurkan sel CD4. Jika makin banyak sel CD4 yang hancur, daya tahan tubuh akan makin melemah sehingga rentan diserang berbagai penyakit.HIV yang tidak segera ditangani akan berkembang menjadi kondisi serius yang disebut AIDS (acquired immunodeficiency syndrome). AIDS adalah stadium akhir dari infeksi HIV. Pada tahap ini, kemampuan tubuh untuk melawan infeksi sudah hilang sepenuhnya.Penularan HIV terjadi melalui kontak dengan cairan tubuh penderita, seperti darah, sperma, cairan vagina, cairan anus, serta ASI.Perlu diketahui, HIV tidak menular melalui udara, air, keringat, air mata, air liur, gigitan nyamuk, atau sentuhan fisik.Kebanyakan penderita mengalami flu ringan pada 2–6 minggu setelah terinfeksi HIV. Flu bisa disertai dengan gejala lain dan dapat bertahan selama 1–2 minggu. Setelah flu membaik, gejala lain mungkin tidak akan terlihat selama bertahun-tahun meski virus HIV terus merusak kekebalan tubuh penderitanya, sampai HIV berkembang ke stadium lanjut menjadi AIDS.', 'HIV adalah penyakit yang menyerang sistem kekebalan tubuh dan melemahkan imun tubuh terhadap penyakit. Tahap akhir dari infeksi HIV adalah AIDS.', 'images/service/hiv.jpg'),
(4, 'Hindari kontak dengan hewan yang dapat menjadi reservoir virus (termasuk hewan yang sakit atau yang ditemukan mati di daerah di mana cacar monyet terjadi).Hindari kontak dengan bahan apa pun, seperti tempat tidur, yang pernah bersentuhan dengan hewan yang sakit.Pisahkan pasien yang terinfeksi dari orang lain yang mungkin berisiko terinfeksi.Lakukan cuci tangan yang baik dan benar setelah kontak dengan hewan atau manusia yang terinfeksi.Menggunakan alat pelindung diri (APD) saat merawat pasien yang terinfeksi.Memasak daging dengan benar dan matang.', 'Cacar Monyet', 'Cacar monyet adalah penyakit zoonosis langka yang disebabkan oleh infeksi virus monkeypox. Virus cacar monyet termasuk dalam genus Orthopoxvirus dalam famili Poxviridae. Genus Orthopoxvirus juga termasuk virus variola (penyebab cacar), virus vaccinia (digunakan dalam vaksin cacar), dan virus cacar sapi.Cacar monyet pertama kali ditemukan pada tahun 1958. Pada saat itu ditemukan wabah penyakit mirip cacar yang menyerang koloni monyet yang dipelihara untuk penelitian, hal tersebut yang menyebabkan penyakit ini disebut sebagai cacar monyet atau monkeypox. Kasus cacar monyet pertama yang menginfeksi manusia tercatat pada tahun 1970 di Republik Demokratik Kongo. Sejak saat itu, kasus cacar monyet dilaporkan telah menginfeksi orang-orang di beberapa negara Afrika Tengah dan Barat lainnya seperti : Kamerun, Republik Afrika Tengah, Pantai Gading, Republik Demokratik Kongo, Gabon, Liberia, Nigeria, Republik Kongo, dan Sierra Leone.Virus cacar monyet dapat menular ketika seseorang bersentuhan dengan virus dari hewan yang terinfeksi, orang yang terinfeksi, atau bahan yang terkontaminasi virus. Virus juga dapat melewati plasenta dari ibu hamil ke janin. Virus cacar monyet dapat menyebar dari hewan ke manusia melalui gigitan atau cakaran hewan yang terinfeksi, ketika menangani atau memproses hewan buruan, atau melalui penggunaan produk yang terbuat dari hewan yang terinfeksi. Virus juga dapat menyebar melalui kontak langsung dengan cairan tubuh atau luka pada orang yang terinfeksi atau dengan bahan yang telah menyentuh cairan atau luka tubuh, seperti pakaian atau linen.', 'Cacar monyet disebabkan oleh virus monkeypox, yaitu virus yang termasuk dalam kelompok Orthopoxvirus.', 'images/service/monkeypox.jpeg'),
(5, 'Menghindari alkohol dan obat-obat terlarang.Memiliki satu pasangan tetap untuk melakukan hubungan seksual.Berhenti untuk melakukan kontak seksual dalam jangka waktu lama.Cuci tangan dengan sabun.Secara terbuka mendiskusikan riwayat penyakit kelamin yang dialami bersama pasangan.Biasakan menggunakan kondom bila harus berhubungan seksual dengan orang yang tidak dikenal.', 'Raja Singa/Sifilis', 'Sifilis adalah sebuah penyakit menular seksual yang disebabkan oleh bakteri. Gejala sifilis diawali dengan munculnya luka yang tidak terasa sakit di area kelamin, mulut, atau dubur.Sifilis disebabkan oleh infeksi bakteri Treponema pallidum yang menyebar melalui hubungan seksual dengan penderita raja singa. Bakteri penyebab sifilis juga bisa menyebar melalui melalui kontak fisik dengan luka di tubuh penderita.', 'Sifilis adalah infeksi bakteri yang biasanya menyebar melalui kontak seksual dan dimulai dengan luka tanpa rasa sakit.', 'images/service/sifilis.jpeg'),
(6, 'Gunakan obat nyamuk seperti permetrin karena mereka dapat diaplikasikan pada pakaian, sepatu, perlengkapan berkemah, dan kelambu.Mengurangi habitat nyamuk dengan menutup genangan air.Kenakan pakaian pelindung saat kamu pergi ke daerah yang dipenuhi nyamuk, kenakan baju lengan panjang, celana panjang, kaus kaki, dan sepatu.Gunakan AC atau kelambu yang dipasang diventilasi dan tempat tidur.', 'Demam Berdarah', 'Demam Berdarah Dengue adalah penyakit yang ditularkan oleh nyamuk yang terjadi di daerah tropis dan subtropis di dunia. Untuk demam berdarah ringan, maka ia akan menyebabkan demam tinggi dan gejala seperti flu. Sementara untuk demam berdarah yang parah, ia bisa menyebabkan pendarahan serius, penurunan tekanan darah secara tiba-tiba (syok) dan bahkan kematian.Demam berdarah disebabkan oleh salah satu dari empat jenis virus dengue. Kamu tidak bisa terkena penyakit ini karena berada di sekitar orang yang terinfeksi sebab penyakit ini ditularkan melalui gigitan nyamuk. Dua nyamuk yang bisa menularkan virus ini adalah Aedes aegypti dan Aedes albopictus.', 'Demam berdarah adalah penyakit virus yang dibawa oleh nyamuk, yang terjadi di daerah tropis dan subtropis.', 'images/service/dengue.jpg'),
(7, 'Selalu menjaga kebersihan vagina dengan rutin mencucinya menggunakan sabun di bagian luar.Jangan menggunakan sabun beraroma dan douche.Pastikan untuk mengusap dari depan ke belakang, guna cegah bakteri masuk ke dalam vagina dan menyebabkan infeksi.Hindari semprotan pada area kewanitaan dan mandi busa.Jangan berganti-ganti pasangan seksual.Hindari pakaian yang terlalu ketat.', 'Keputihan', 'Keputihan adalah keluarnya cairan bening atau putih dari Miss V. Cairan ini sebagian besar terdiri dari sel dan bakteri. Proses ini dapat membantu untuk membersihkan dan melumasi area kewanitaan serta membantu melawan bakteri jahat dan infeksi.Keputihan terjadi sebagai bagian dari fungsi tubuh yang sehat akibat perubahan alami pada kadar estrogen. Jumlah keputihan dapat meningkat dari seperti ovulasi, gairah seksual, pil KB, dan kehamilan.', 'Keputihan adalah kondisi ketika lendir kental atau cairan bening keluar dari vagina.', 'images/service/keputihan.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `idUser` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `noHP` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Umur` int(11) NOT NULL,
  `jenisKelamin` varchar(20) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`idUser`, `Username`, `Password`, `Nama`, `Alamat`, `noHP`, `email`, `Umur`, `jenisKelamin`, `tanggalLahir`, `Role`) VALUES
(1, 'Admin', 'admin', 'admin', 'jahanam', '0853243242', 'mail@mail.com', 20, 'Laki-Laki', '2022-03-01', 'Admin'),
(2, 'Daffa', 'daffa', 'Daffa Darmawan', 'JAHANAM', '0872313123', 'daffa@mail.com', 20, 'Laki-Laki', '2002-02-11', 'User'),
(5, 'Cobaaja', 'coba', 'coba lagi', 'Hellheim', '08957123102', 'mail@mail.com', 20, 'Laki-Laki', '2022-11-03', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vaksin`
--

CREATE TABLE `tbl_vaksin` (
  `id_vaksin` int(11) NOT NULL,
  `tempatVaksin` varchar(500) NOT NULL,
  `alamatVaksin` varchar(500) NOT NULL,
  `imgVaksin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vaksin`
--

INSERT INTO `tbl_vaksin` (`id_vaksin`, `tempatVaksin`, `alamatVaksin`, `imgVaksin`) VALUES
(1, 'RUMAH SAKIT PMI BOGOR', 'Pajajaran No.80, Tegallega, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16143', 'images/service/PMI.jpg'),
(2, 'RUMAH VAKSINASI BOGOR', 'Taman Yasmin Sektor VI Jalan Pinang Raya No. 32 Curugmekar,Bogor Barat.', 'images/service/rumahvaksinbogor.jpg'),
(3, 'DINKES KOTA BOGOR', 'Jalan R.M. Tirto Adhi Soerjo, RT.02/RW.02, Tanah Sareal, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16161.', 'images/service/dinasbogor.jpg'),
(4, 'RUMAH VAKSINASI PUSAT', 'Jalan Raya Inpres No. 81 RT05/RW09, Kel. Tengah, Kramat Jati, RT.2/RW.9, Kampung Tengah, Kramatjati, RT.2/RW.9, Kp. Tengah, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13540', 'images/service/rumahvaksinpusat.jpeg'),
(5, 'KLINIK VAKSINASI INHARMONY', 'Jl. Percetakan Negara IV B No.48, RT.9/RW.9, Johar Baru, Kec. Johar Baru, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10560', 'images/service/klinikharmony.jpg'),
(6, 'PRISCILLA MEDICAL CENTER', 'Jl. Raya Maos-Sampang, Area Sawah, Karangtengah, Kec. Sampang, Kabupaten Cilacap, Jawa Tengah 53273', 'images/service/sampang.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bookmark`
--
ALTER TABLE `tbl_bookmark`
  ADD PRIMARY KEY (`idBookmark`),
  ADD KEY `idInformasi` (`idInformasi`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `tbl_vaksin`
--
ALTER TABLE `tbl_vaksin`
  ADD PRIMARY KEY (`id_vaksin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bookmark`
--
ALTER TABLE `tbl_bookmark`
  MODIFY `idBookmark` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_vaksin`
--
ALTER TABLE `tbl_vaksin`
  MODIFY `id_vaksin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_bookmark`
--
ALTER TABLE `tbl_bookmark`
  ADD CONSTRAINT `idInformasi` FOREIGN KEY (`idInformasi`) REFERENCES `tbl_informasi` (`id_informasi`),
  ADD CONSTRAINT `idUser` FOREIGN KEY (`idUser`) REFERENCES `tbl_user` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

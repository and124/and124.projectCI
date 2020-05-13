-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 02:54 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penilaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nik`, `nama`, `alamat`, `foto`, `telepon`) VALUES
('13', 'gofur', 'jl.suka jaya no.16', 'IMG_21321.JPG', '082126288349'),
('1356', 'pak harto', 'jl.bandung', 'admin111.PNG', 'fisika');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_kuis`
--

CREATE TABLE `hasil_kuis` (
  `id_hasil` int(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `total_kehad` varchar(20) NOT NULL,
  `total_perku` varchar(20) NOT NULL,
  `total_marku` varchar(20) NOT NULL,
  `total_silu` varchar(20) NOT NULL,
  `ket` text NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_kuis`
--

INSERT INTO `hasil_kuis` (`id_hasil`, `nik`, `total_kehad`, `total_perku`, `total_marku`, `total_silu`, `ket`, `tanggal`, `nama`) VALUES
(1, '13', 'A', 'A', 'A', 'A', 'sangat baik dalam mengajar dan pahami', '2018-09-09', 'gofur'),
(2, '1356', 'A', 'A', 'A', 'A', 'semoga ada yang lebih baru dalam teknologi', '2018-12-12', 'pak harto');

-- --------------------------------------------------------

--
-- Table structure for table `kuisioner`
--

CREATE TABLE `kuisioner` (
  `idkuisioner` int(11) NOT NULL,
  `soalkuisioner` text NOT NULL,
  `A` varchar(20) NOT NULL,
  `B` varchar(20) NOT NULL,
  `C` varchar(20) NOT NULL,
  `D` varchar(20) NOT NULL,
  `E` varchar(20) NOT NULL,
  `id_paket` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuisioner`
--

INSERT INTO `kuisioner` (`idkuisioner`, `soalkuisioner`, `A`, `B`, `C`, `D`, `E`, `id_paket`) VALUES
(1, 'Kehadiran dosen untuk menjalankan Kewajiban mengajar minimal 12 kali pertemuan?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 10),
(2, 'Waktu tatap muka / perkuliahan sesuai dengan waktu yang telah ditetapkan (1 sks= 50 menit)?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 10),
(3, 'Waktu Kuliah dimanfaatkan dengan efisien oleh dosen ?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 10),
(4, 'Kesesuaian materi kuliah yang diberikan dosen dengan materi di SAP (Satuan Acara Perkuliahan )?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 20),
(5, 'Handout yang dibuat/diberikan oleh dosen ?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 20),
(6, 'Kejelasan dosen dama penyampaian materi perkuliahan?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 20),
(7, 'Cara/teknik menyampaikan materi perkuliahan ?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 20),
(8, 'Pemberian Kesempatan dan motivasi untuk bertanya / dialog ?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 20),
(9, 'Pemberian contoh-contoh soal dan penyelesaiannya ?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 20),
(10, 'Materi yang diberikan berkaitan dengan manfaat untuk menguasai bidang ilmu serta mengikuti perkembangan teknologi ?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 30),
(11, 'Materi kuliah yang diberikan berkaitan dengan kemampuan dari Mahasiswa yang diharapkan manfaat untuk memperluas wawasan pikiran ?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 30),
(12, 'Sistematika pemberian materi mudah di mengerti?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 30),
(13, 'Ketidak tumpang tindihan materi yang diberikan dengan materi kuliah yang lain?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 30),
(14, 'Buku wajib dan buku anjuran terbitan / edisi terbaru ?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 30),
(15, 'Dosen memberikan materi diluar materi pembelajaran yang ditetapkan ?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 30),
(16, 'Jumlah tugas yang diberikan ?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 40),
(17, 'Bobot tugas yang diberikan ?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 40),
(18, 'Manfaat tugas untuk menguasai matakuliah ?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 40),
(19, 'Bobot kesulitan soal UTS / UAS ?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 40),
(20, 'Kesesuaian soal ujigan dengan materi perkuliah ?', 'Baik Sekali', 'Baik', 'Sedang', 'Kurang', 'Sangat Kurang', 40);

-- --------------------------------------------------------

--
-- Table structure for table `level_user`
--

CREATE TABLE `level_user` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level_user`
--

INSERT INTO `level_user` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'guru'),
(3, 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kodematkul` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `nama`, `kodematkul`) VALUES
(1, 'matematika', 'A102'),
(2, 'B.indonesia', 'A101');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(20) NOT NULL,
  `paket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `paket`) VALUES
(10, 'kehadiran'),
(20, 'perkuliahan'),
(30, 'materi kuliah'),
(40, 'sistem evaluasi');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `foto`, `level`, `nama`) VALUES
(1, 'admin', 'admin', 'admin', 1, 'admin'),
(2, 'ketua', 'ketua', '', 2, 'Ketua'),
(3, 'mahasiswa', 'mahasiswa', '', 3, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp_ortu` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` int(11) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `alamat`, `no_hp_ortu`, `foto`, `username`, `password`, `level`, `kelas`) VALUES
('3', 'andri', 'jl.padasuka', '083455645548', '3x4.PNG', '3', '3', 3, 'TI D3'),
('5', 'sugiman', 'jalan bandung', '083455645548', 'IMG_49985.JPG', '5', '5', 3, 'TM D3');

-- --------------------------------------------------------

--
-- Table structure for table `tes`
--

CREATE TABLE `tes` (
  `id_tes` int(20) NOT NULL,
  `nik` int(20) NOT NULL,
  `jurusan` int(20) NOT NULL,
  `namakuisioner` varchar(100) NOT NULL,
  `waktu` int(10) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `terlambat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `hasil_kuis`
--
ALTER TABLE `hasil_kuis`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD PRIMARY KEY (`idkuisioner`);

--
-- Indexes for table `level_user`
--
ALTER TABLE `level_user`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tes`
--
ALTER TABLE `tes`
  ADD PRIMARY KEY (`id_tes`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kuisioner`
--
ALTER TABLE `kuisioner`
  MODIFY `idkuisioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tes`
--
ALTER TABLE `tes`
  MODIFY `id_tes` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

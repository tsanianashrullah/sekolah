-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2014 at 02:07 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sedot`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `kd_dokter` char(6) NOT NULL,
  `nm_dokter` varchar(25) NOT NULL,
  `kd_poli` char(6) NOT NULL,
  `sip` char(6) NOT NULL,
  `tempat_lhr` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` char(13) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kd_dokter`, `nm_dokter`, `kd_poli`, `sip`, `tempat_lhr`, `tgl_lahir`, `no_hp`, `alamat`, `username`) VALUES
('090991', 'jaja suharja', 'kd_pol', 'pagi', 'tempat_lhr', '0000-00-00', 'no_hp', 'alamat', 'username'),
('097654', 'nunut', '870909', 'pagi', 'batujajar', '0000-00-00', '087723345111', 'jln.cihampelas', 'nunu'),
('098765', 'joe', 'kd_pol', 'pagi', 'tempat_lhr', '0000-00-00', 'no_hp', 'alamat', 'username'),
('123131', 'dr.ilham.sd', '321111', 'malam', 'bandung', '0000-00-00', '0898989898989', ' jln.lll', '321312'),
('321100', 'karjo', '987777', 'Malam', 'jawa', '0000-00-00', '0854343333333', 'jln.kertosono', 'jojo'),
('333333', 'njnjnjn', 'kd_pol', 'siang', 'tempat_lhr', '0000-00-00', 'no_hp', 'alamat', 'username'),
('677777', 'rajun muhammad', 'kd_pol', 'pagi', 'tempat_lhr', '0000-00-00', 'no_hp', 'alamat', 'username'),
('765777', 'hasan darmawan', 'kd_pol', 'pagi', 'tempat_lhr', '0000-00-00', 'no_hp', 'alamat', 'username'),
('909889', 'jacki', '090090', 'siang', 'jakarta', '0000-00-00', '08974453553', ' jln.loli', 'boamboam'),
('989899', 'joni kadek', '788877', 'siang', 'banten', '0000-00-00', '0897667665322', ' jln.terusan', 'joni');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE IF NOT EXISTS `kunjungan` (
  `jd_kunjungan` char(6) NOT NULL,
  `tgl_kunjugan` char(8) NOT NULL,
  `kd_pasien` char(6) NOT NULL,
  `kd_dokter` char(6) NOT NULL,
  `jam_kunjungan` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`jd_kunjungan`, `tgl_kunjugan`, `kd_pasien`, `kd_dokter`, `jam_kunjungan`) VALUES
('Kamis', '4', '334522', '344422', '9'),
('Sabtu', '28', '878787', '090909', '08.00');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `kd_obat` char(6) NOT NULL,
  `nm_obat` varchar(15) NOT NULL,
  `jml_obat` varchar(2) NOT NULL,
  `ukuran` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kd_obat`, `nm_obat`, `jml_obat`, `ukuran`) VALUES
('093131', 'paraxemaoa', '23', '3x'),
('122344', '', '2', '3x'),
('323232', 'amoxilin', '3', '3x');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `kd_pasien` char(6) NOT NULL,
  `nm_pasien` varchar(25) NOT NULL,
  `j_kel` varchar(15) NOT NULL,
  `j_keluarga` varchar(15) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `tempat_lhr` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `usia` char(2) NOT NULL,
  `no_tlp` char(13) NOT NULL,
  `nm_kk` varchar(25) NOT NULL,
  `hub_kel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`kd_pasien`, `nm_pasien`, `j_kel`, `j_keluarga`, `alamat`, `tempat_lhr`, `tgl_lahir`, `usia`, `no_tlp`, `nm_kk`, `hub_kel`) VALUES
('000009', 'harjuana', '', '4', 'jln.suka manah', 'tempat_lhr', '0000-00-00', '44', '089654355555', 'juju', 'Anak'),
('134214', 'juju junaedi', '', '909999', 'malam', '', '0000-00-00', '19', '', ' jln.terusan', 'oioio'),
('232323', 'hamba', 'laki-laki', '5', 'jln.kerta', 'kertosono', '0000-00-00', '50', '02271011099', 'hamba', 'Ayah'),
('353435', 'kadek wardana', '', '9', 'jln.jakarta', 'jakarta', '0000-00-00', '27', '08321165777', 'h.joju', 'anak'),
('354454', 'dirly', '', '10', 'jln.sinarjaya', 'tempat_lhr', '0000-00-00', '8', '12313131313', 'nanadang', 'Ayah'),
('567655', 'asepo', '', '9', 'jln.jamika', 'banten', '0000-00-00', 'us', 'no_tlp', 'nm_kk', 'hub_kel');

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE IF NOT EXISTS `poliklinik` (
  `kd_poli` char(6) NOT NULL,
  `nm_poli` varchar(15) NOT NULL,
  `lantai` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`kd_poli`, `nm_poli`, `lantai`) VALUES
('232323', 'poli anak', '1'),
('987767', 'poli bedah', '2');

-- --------------------------------------------------------

--
-- Table structure for table `rekam medis`
--

CREATE TABLE IF NOT EXISTS `rekam medis` (
  `kd_rm` char(6) NOT NULL,
  `kd_tindakan` char(6) NOT NULL,
  `kd_pasien` char(6) NOT NULL,
  `keluhan` varchar(30) NOT NULL,
  `diagnosa` int(11) NOT NULL,
  `kd_resep` char(6) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `ket` varchar(40) NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE IF NOT EXISTS `resep` (
  `id` char(6) NOT NULL,
  `kd_resep` char(6) NOT NULL,
  `kd_obat` char(6) NOT NULL,
  `aturan_pakai` varchar(6) NOT NULL,
  `ket` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id`, `kd_resep`, `kd_obat`, `aturan_pakai`, `ket`) VALUES
('343434', '232323', '687345', '3x1', 'ket'),
('998989', '078078', '098967', '3x2', 'hareudang');

-- --------------------------------------------------------

--
-- Table structure for table `rmedis`
--

CREATE TABLE IF NOT EXISTS `rmedis` (
  `kd_rm` char(6) NOT NULL,
  `kd_tindakan` char(6) NOT NULL,
  `kd_pasien` char(6) NOT NULL,
  `keluhan` varchar(30) NOT NULL,
  `diagnosa` int(11) NOT NULL,
  `kd_resep` char(6) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `ket` varchar(40) NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rmedis`
--

INSERT INTO `rmedis` (`kd_rm`, `kd_tindakan`, `kd_pasien`, `keluhan`, `diagnosa`, `kd_resep`, `tgl_pemeriksaan`, `ket`, `username`) VALUES
('321456', '232323', '111111', 'panas dalam', 0, '078078', '0000-00-00', 'gapapa juga ', 'oioioi');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE IF NOT EXISTS `tindakan` (
  `kd_tindakan` char(6) NOT NULL,
  `nm_tindakan` varchar(20) NOT NULL,
  `ket` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`kd_tindakan`, `nm_tindakan`, `ket`) VALUES
('343408', 'darurat', 'harus dibawa rujuk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
 ADD PRIMARY KEY (`kd_dokter`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
 ADD PRIMARY KEY (`jd_kunjungan`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
 ADD PRIMARY KEY (`kd_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
 ADD PRIMARY KEY (`kd_pasien`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
 ADD PRIMARY KEY (`kd_poli`);

--
-- Indexes for table `rekam medis`
--
ALTER TABLE `rekam medis`
 ADD PRIMARY KEY (`kd_rm`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rmedis`
--
ALTER TABLE `rmedis`
 ADD PRIMARY KEY (`kd_rm`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
 ADD PRIMARY KEY (`kd_tindakan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

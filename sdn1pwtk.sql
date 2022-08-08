-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2022 pada 04.53
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdn1pwtk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(64) NOT NULL,
  `admin_image` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id_admin`, `admin_image`, `email_admin`, `username`, `password`) VALUES
(1, '', 'admin@gmail.com', 'admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` int(11) NOT NULL,
  `tahun_pelajaran` varchar(255) NOT NULL,
  `jumlah_lulusan` int(11) NOT NULL,
  `jumlah_lanjut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `tahun_pelajaran`, `jumlah_lulusan`, `jumlah_lanjut`) VALUES
(1, '2014/2015', 17, 16),
(2, '2014/2015', 17, 16),
(3, '2015/2016', 23, 23),
(4, '2016/2017', 21, 21),
(5, '2017/2018', 24, 24),
(6, '2018/2019', 18, 18),
(7, '2019/2020', 29, 29),
(8, '2020/2021', 20, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `berita_category_id` varchar(255) NOT NULL,
  `berita_title` varchar(255) NOT NULL,
  `berita_description` text NOT NULL,
  `berita_date` date NOT NULL,
  `berita_author` varchar(255) NOT NULL,
  `berita_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `berita_category_id`, `berita_title`, `berita_description`, `berita_date`, `berita_author`, `berita_image`) VALUES
(17, 'Covid-19', 'Rajin Cuci Tangan SDN 1 Purwokerto Kulon Di Saat Covid-19', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2022-08-07', 'Daffa', 'IMG_20220426_091139.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousel`
--

CREATE TABLE `carousel` (
  `id_carr` int(11) NOT NULL,
  `gambar_carr` varchar(255) NOT NULL,
  `judul_carr` varchar(255) NOT NULL,
  `isi_carr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `carousel`
--

INSERT INTO `carousel` (`id_carr`, `gambar_carr`, `judul_carr`, `isi_carr`) VALUES
(1, 'Hero1.png', 'SDN 1 Purwokerto Kulon', '\"Terwujudnya Siswa yang Beriman, Berakhlak Mulia, Cerdas, Terampil, dan Mandiri\"'),
(2, 'Hero2.png', 'HTML', 'Ayo Belajar HTML'),
(3, 'Hero3.png', 'PHP', 'Ayo Belajar PHP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_berita`
--

CREATE TABLE `category_berita` (
  `id_category_berita` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category_berita`
--

INSERT INTO `category_berita` (`id_category_berita`, `category_name`) VALUES
(1, 'Prestasi Siswa'),
(2, 'Prestasi Guru'),
(3, 'Berita');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_keadaan_kelas`
--

CREATE TABLE `category_keadaan_kelas` (
  `id_category_keadaan_kelas` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category_keadaan_kelas`
--

INSERT INTO `category_keadaan_kelas` (`id_category_keadaan_kelas`, `category_name`) VALUES
(1, 'Baik Sekali'),
(2, 'Baik'),
(3, 'Rusak Baik'),
(4, 'Rusak Ringan'),
(5, 'Rusak Sedang'),
(6, 'Rusak Berat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `deskripsi_misi`
--

CREATE TABLE `deskripsi_misi` (
  `id_deskripsi_misi` int(11) NOT NULL,
  `isi_deskripsi_misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `deskripsi_misi`
--

INSERT INTO `deskripsi_misi` (`id_deskripsi_misi`, `isi_deskripsi_misi`) VALUES
(1, 'Untuk mencapai visi sebagai sekolah yang terdepan, terbaik, dan terpercaya, perlu dilakukan suatu misi berupa kegiatan jangka panjang dengan arah yang jelas dan sistematis. Berikut misi Sekolah Dasar Negeri 1 Purwokerto Kulon yang dirumuskan berdasarkan visi sekolah, yaitu :');

-- --------------------------------------------------------

--
-- Struktur dari tabel `deskripsi_program_sekolah`
--

CREATE TABLE `deskripsi_program_sekolah` (
  `id_deskripsi_program` int(11) NOT NULL,
  `deskripsi_program` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `deskripsi_program_sekolah`
--

INSERT INTO `deskripsi_program_sekolah` (`id_deskripsi_program`, `deskripsi_program`) VALUES
(1, 'Seiringan dengan berjalannya Kurikulum tersebut, <b>Sekolah Dasar Negeri 1 Purwokerto Kulon</b> memiliki program-program yang dapat diikuti para peserta didik, yaitu sebagai berikut :');

-- --------------------------------------------------------

--
-- Struktur dari tabel `deskripsi_tujuan`
--

CREATE TABLE `deskripsi_tujuan` (
  `id_deskripsi_tujuan` int(11) NOT NULL,
  `isi_deskripsi_tujuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `deskripsi_tujuan`
--

INSERT INTO `deskripsi_tujuan` (`id_deskripsi_tujuan`, `isi_deskripsi_tujuan`) VALUES
(1, 'Sesuai dengan visi misi sekolah, tujuan SD Negeri 1 Purwokerto Kulon adalah mengantarkan siswa untuk :');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id_ekstrakulikuler` int(11) NOT NULL,
  `nama_ekstrakulikuler` varchar(255) NOT NULL,
  `nama_pembina_ekstrakulikuler` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`id_ekstrakulikuler`, `nama_ekstrakulikuler`, `nama_pembina_ekstrakulikuler`) VALUES
(1, 'Pramuka', 'Siti Supinah,S.Pd., Nilasari Yoarry Prawiharan,S.Pd., Sujatmiko, S.Pd., Dwi Hastuti,A.Ma.Pust., Eka Wulansari,S.Pd., Supriyatin,S.Pd.SD.'),
(5, 'Membatik', 'Nilasari Yoarry Prawiharan,S.Pd., Dwi Hastuti,A.Ma.Pust.'),
(6, 'Tari', 'Nilasari Yoarry Prawiharan,S.Pd., Dwi Hastuti,A.Ma.Pust.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL,
  `tahun_masuk_fasilitas` date NOT NULL,
  `gambar_fasilitas` varchar(255) NOT NULL,
  `keterangan_fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `tahun_masuk_fasilitas`, `gambar_fasilitas`, `keterangan_fasilitas`) VALUES
(1, 'Musholla SDN 1 Purwokerto Kulon', '2022-07-05', 'IMG_20220426_090511.jpg', 'Musholla'),
(8, 'asdasdasd', '2022-07-26', 'PHP.png', 'asdasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `gambar_galeri` varchar(255) NOT NULL,
  `judul_galeri` varchar(255) NOT NULL,
  `deskripsi_galeri` text NOT NULL,
  `tanggal_galeri` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `gambar_galeri`, `judul_galeri`, `deskripsi_galeri`, `tanggal_galeri`) VALUES
(1, 'BOOTSTRAP.png', 'Pramuka SDN 1 Purwokerto Kulon', 'Kegiatan Pramuka SDN 1 Purwokerto Kulon', '2022-07-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_karyawan`
--

CREATE TABLE `guru_karyawan` (
  `id_guru_karyawan` int(64) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `gol_ruang` varchar(50) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `jumlah_kelas` int(11) NOT NULL,
  `jam_tatap_muka` int(64) NOT NULL,
  `total_jam` int(64) NOT NULL,
  `posisi_lainnya` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru_karyawan`
--

INSERT INTO `guru_karyawan` (`id_guru_karyawan`, `gambar`, `nama`, `nip`, `gol_ruang`, `posisi`, `jumlah_kelas`, `jam_tatap_muka`, `total_jam`, `posisi_lainnya`) VALUES
(1, 'Bu_Esti.png', 'RR.Esti Andjar Arijandhini,S.E, S.Pd.SD', '19660112 199001 2 002', 'IV/B', 'Kepala Sekolah', 0, 0, 0, 'Koordinator Olimpiade MIPA'),
(3, '', 'Siti Supinah,S.Pd.', '19681026 199401 2 001', 'III/B', 'Guru Kelas IV', 1, 24, 24, 'Koordinator Pramuka Siaga, Kesiswaan,  dan Lomba Kompetensi Siswa'),
(4, '', 'Nilasari Yoarry Prawiharan,S.Pd.', '19951008 201902 2 007', 'III/A', 'Guru Kelas III', 1, 24, 24, 'Koordinator Pramuka Siaga dan Kesenian'),
(5, '', 'Sujatmiko, S.Pd.', '19830917 201406 1 002', 'III/A', 'Guru Kelas VI', 1, 24, 32, 'Koordinator Pramuka Penggalang Pa, Kesiswaan, dan Lomba Kopetensi Siswa'),
(6, '', 'Rose Suharti Elisabet Purba,S.Pd.Jas.', '19630917 198405 2 003', 'IV/B', 'Guru PJOK', 6, 24, 24, 'Koordinator O2SN'),
(7, '', 'Rini Priana, S.Pd.', '', '', 'Guru Kelas I', 1, 24, 24, ''),
(8, '', 'Sumiasih,S.Pd.', '', '', 'Guru Kelas II', 1, 24, 24, 'Koordinator MAPSI BTQ'),
(9, '', 'Dwi Hastuti,A.Ma.Pust.', '', '', 'Guru Kelas V', 1, 24, 24, 'Koordinator Pramuka Siaga Kesenian'),
(10, '', 'Afia Rahmah,S.Pd.', '', '', 'Guru PAI', 6, 24, 24, ''),
(11, '', 'Eka Wulansari,S.Pd', '', '', 'Pembimbing Pramuka Penggalang', 0, 0, 2, 'Koordinator Pramuka Penggalang pi, Kerohanian, dan Lomba Kopetensi Siswa'),
(12, '', 'Supriyatin,S.Pd.SD', '', '', 'Pembimbing Pramuka Siaga', 0, 0, 2, 'Koordinator Pramuka Siaga'),
(13, '', 'Ahmaludin', '', '', 'Penjaga Wiyata Bakti', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keadaan_kelas`
--

CREATE TABLE `keadaan_kelas` (
  `id_keadaan_kelas` int(11) NOT NULL,
  `nama_ruang_kelas` varchar(255) NOT NULL,
  `panjang_kelas` float NOT NULL,
  `lebar_kelas` float NOT NULL,
  `satuan_kelas` varchar(255) NOT NULL,
  `keadaan_kelas` varchar(255) NOT NULL,
  `keterangan_kelas` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keadaan_kelas`
--

INSERT INTO `keadaan_kelas` (`id_keadaan_kelas`, `nama_ruang_kelas`, `panjang_kelas`, `lebar_kelas`, `satuan_kelas`, `keadaan_kelas`, `keterangan_kelas`) VALUES
(1, 'Ruang Kelas I', 7, 7, 'Ruang', 'Rusak sedang', 1),
(2, 'Ruang Kelas II', 7, 7, 'Ruang', 'Rusak sedang', 1),
(3, 'Ruang Kelas III', 7, 7, 'Ruang', 'Rusak sedang', 1),
(4, 'Ruang Kelas IV', 7.2, 8.5, 'Ruang', 'Rusak baik', 1),
(5, 'Ruang Kelas V', 8, 7, 'Ruang', 'Rusak ringan', 1),
(6, 'Ruang Kelas VI', 8, 7, 'Ruang', 'Rusak ringan', 1),
(8, 'asdasd', 2.22222, 2.22298, 'Ruang', 'Baik Sekali', 1),
(9, 'asdas', 22, 222, '111', '1', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar_berita`
--

CREATE TABLE `komentar_berita` (
  `id_komentar_berita` int(11) NOT NULL,
  `komentar_id_berita` int(11) NOT NULL,
  `nama_komentar` varchar(255) NOT NULL,
  `email_komentar` varchar(255) NOT NULL,
  `isi_komentar` text NOT NULL,
  `tanggal_komentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar_berita`
--

INSERT INTO `komentar_berita` (`id_komentar_berita`, `komentar_id_berita`, `nama_komentar`, `email_komentar`, `isi_komentar`, `tanggal_komentar`) VALUES
(4, 2222, 'daffa', 'daffa@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2022-07-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak_sekolah`
--

CREATE TABLE `kontak_sekolah` (
  `id_kontak_sekolah` int(11) NOT NULL,
  `no_telp_sekolah` varchar(255) NOT NULL,
  `email_sekolah` varchar(255) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `facebook_sekolah` varchar(255) NOT NULL,
  `instagram_sekolah` varchar(255) NOT NULL,
  `youtube_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak_sekolah`
--

INSERT INTO `kontak_sekolah` (`id_kontak_sekolah`, `no_telp_sekolah`, `email_sekolah`, `alamat_sekolah`, `facebook_sekolah`, `instagram_sekolah`, `youtube_sekolah`) VALUES
(17, '(0281) 6577339', 'sdn1pwtk@gmail.com', 'Jln. DI Panjaitan Gang Karangbaru III No.50 Kecamatan Purwokerto Selatan, Kabupaten Banyumas', '@Sample', '@Sample', 'Sample');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id_mapel` int(11) NOT NULL,
  `komponen` varchar(255) NOT NULL,
  `kelas1` int(11) NOT NULL,
  `kelas2` int(11) NOT NULL,
  `kelas3` int(11) NOT NULL,
  `kelas4` int(11) NOT NULL,
  `kelas5` int(11) NOT NULL,
  `kelas6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurikulum_sekolah`
--

CREATE TABLE `kurikulum_sekolah` (
  `id_kurikulum_sekolah` int(11) NOT NULL,
  `deskripsi_kurikulum_sekolah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kurikulum_sekolah`
--

INSERT INTO `kurikulum_sekolah` (`id_kurikulum_sekolah`, `deskripsi_kurikulum_sekolah`) VALUES
(1, 'Kurikulum yang digunakan pada <b>Sekolah Dasar Negeri 1 Purwokerto Kulon</b> merupakan <b>Kurikulum 2013</b> dengan layanan SKS, sesuai dengan bakat, minat, dan kemampuan / kecepatan belajar peserta didik. Mengembangkan literasi, numerasi, meningkatkan kemampuan <b><i>Critical Thinking, Creativity, Collaboration, Communication</i></b> pada seluruh peserta didik.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `misi`
--

CREATE TABLE `misi` (
  `id_misi` int(11) NOT NULL,
  `isi_misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `misi`
--

INSERT INTO `misi` (`id_misi`, `isi_misi`) VALUES
(1, 'Mendidik dan membimbing peserta didik untuk menjadi manusia yang beriman dan bertaqwa kepada Tuhan Y.M.E.'),
(2, 'Mendidik dan membimbing peserta didik untuk menjadi manusia yang beriman dan bertaqwa kepada Tuhan Y.M.E.'),
(4, 'Membimbing peserta didik menjadi manusia yang cerdas , terampil, dan berdaya guna.'),
(5, 'Mendidik siswa menjadi manusia jujur, disiplin, mandiri dan bertanggung jawab.'),
(6, 'Melaksanakan pembelajaran saintifik sehingga tercipta belajar mengajar yang kreatif, efektif, inovatif, kondusif.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nama_prestasi` varchar(255) NOT NULL,
  `tanggal_prestasi` date NOT NULL,
  `tingkat_prestasi` varchar(255) NOT NULL,
  `nama_peraih_prestasi` varchar(255) NOT NULL,
  `lokasi_prestasi` varchar(255) NOT NULL,
  `gambar_prestasi` varchar(255) NOT NULL,
  `keterangan_prestasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nama_prestasi`, `tanggal_prestasi`, `tingkat_prestasi`, `nama_peraih_prestasi`, `lokasi_prestasi`, `gambar_prestasi`, `keterangan_prestasi`) VALUES
(3, 'Sample', '2022-07-26', 'Sample', 'Sample', 'Sample', 'HTML.png', 'Sample'),
(4, 'asdasdas', '2022-08-09', 'asd', 'asdasda', 'asd', 'IMG_20220426_090511.jpg', 'asdas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_sekolah`
--

CREATE TABLE `program_sekolah` (
  `id_program_sekolah` int(11) NOT NULL,
  `gambar_program_sekolah` varchar(255) NOT NULL,
  `deskripsi_gambar_program_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `program_sekolah`
--

INSERT INTO `program_sekolah` (`id_program_sekolah`, `gambar_program_sekolah`, `deskripsi_gambar_program_sekolah`) VALUES
(1, 'Sample.jpg', 'Olimpiade MIPA'),
(2, '', 'Pramuka Siaga'),
(3, '', 'Lomba Kompetensi'),
(4, '', 'Pramuka Penggalang Putra & Putri'),
(5, '', 'Kerohanian'),
(6, '', 'Kesenian'),
(7, '', 'Atletik'),
(8, '', 'Dokter Kecil / PMR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `respon_kontak_sekolah`
--

CREATE TABLE `respon_kontak_sekolah` (
  `id_respon_kontak_sekolah` int(11) NOT NULL,
  `name_respon_kontak_sekolah` varchar(255) NOT NULL,
  `kontak_perespon_kontak_sekolah` varchar(255) NOT NULL,
  `pesan_respon_kontak_sekolah` text NOT NULL,
  `tanggal_respon_kontak_sekolah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `respon_kontak_sekolah`
--

INSERT INTO `respon_kontak_sekolah` (`id_respon_kontak_sekolah`, `name_respon_kontak_sekolah`, `kontak_perespon_kontak_sekolah`, `pesan_respon_kontak_sekolah`, `tanggal_respon_kontak_sekolah`) VALUES
(1, 'asdasdasd', 'daffa@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2022-07-26'),
(2, 'daffa', 'daffa123@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2022-07-27'),
(7, 'asdasd', 'asdas@gmail.com', 'dasdasd', '2022-08-04'),
(8, 'sample', 'asdas@gmail.com', 'saya Daffa', '2022-08-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sambutan`
--

CREATE TABLE `sambutan` (
  `id_sambutan` int(11) NOT NULL,
  `gambar_sambutan` varchar(255) NOT NULL,
  `name_sambutan` varchar(255) NOT NULL,
  `status_sambutan` varchar(255) NOT NULL,
  `isi_sambutan` text NOT NULL,
  `tanggal_sambutan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sambutan`
--

INSERT INTO `sambutan` (`id_sambutan`, `gambar_sambutan`, `name_sambutan`, `status_sambutan`, `isi_sambutan`, `tanggal_sambutan`) VALUES
(1, 'Bu_Esti.png', 'RR.ESTI ANDJAR ARIJANDHINI,S.E,S.PD.SD', 'Kepala Sekolah', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '2022-07-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah_sekolah`
--

CREATE TABLE `sejarah_sekolah` (
  `id_sejarah_sekolah` int(11) NOT NULL,
  `deskripsi_sejarah_sekolah` text NOT NULL,
  `gambar_sejarah_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sejarah_sekolah`
--

INSERT INTO `sejarah_sekolah` (`id_sejarah_sekolah`, `deskripsi_sejarah_sekolah`, `gambar_sejarah_sekolah`) VALUES
(1, 'Sebelum bernama <b>SDN 1 Purwokerto Kulon</b> dahulu bernama SD Purwokerto Kulon II berdasarkan Kutipan Surat Keputusan Gubernur Kepala Daerah Propinsi Jawa Tengah tanggal 14 Juli 1971 bahwa wilayah S.D.2 terletak di dalam wilayah P.S. Purwokerto II terhitung mulai tanggal 1 Januari 1970 diberikan hak PAKAI atas gedung/tanah halaman sekolah menurut keadaan yang sesungguhnya seperti tercantum pada daftar lampiran Keputusan Gubernur Kepala Daerah Propinsi Jawa Tengah tanggal 14 Juli 1971 No.SD/PDK/.17/1/1 bagi S.D.2 dalam wilayah Purwokerto II Kab.Banyumas.', 'IMG_20220426_090850.jpg'),
(2, 'Berdasarkan Peraturan Bupati Banyumas Nomor 21 Tahun 2005 tentang penggabungan 173 Sekolah Dasar Negeri di Lingkungan Pemerintah Kabupaten Banyumas tanggal 07 Mei 2005 berlaku diundangkan yaitu Diundangkan di Purwokerto Pada tanggal 9 Mei 2005 ditandatangani oleh Sekretaris Daerah Kabupaten Banyumas Singgih Wiranto,S.H, NIP. 500 086 384 pada Berita Daerah Kabupaten Banyumas Nomor 11 Seri E.', 'IMG_20220426_091736.jpg'),
(3, 'Sejak tanggal 9 Mei 2005 SD N 1 Purwokerto Kulon SD N 2 Purwokerto Kulon digabung menjadi satu dengan nama SD N 1 Purwokerto Kulon yang terletak di Jalan DI Panjaitan Seluas ∓ 2.852 meter persegi terletak di persil 114 klas D.III Jalan DI Panjaitan Kelurahan Purwokerto Kulon Kecamatan Purwokerto Selatan.', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `jumlah_siswa_laki` int(11) NOT NULL,
  `jumlah_siswa_perempuan` int(11) NOT NULL,
  `tahun_ajaran_siswa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `jumlah_siswa_laki`, `jumlah_siswa_perempuan`, `tahun_ajaran_siswa`) VALUES
(1, 2, 1, '2022/2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tatib_sekolah`
--

CREATE TABLE `tatib_sekolah` (
  `id_tatib_sekolah` int(11) NOT NULL,
  `poin_tatib_sekolah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tatib_sekolah`
--

INSERT INTO `tatib_sekolah` (`id_tatib_sekolah`, `poin_tatib_sekolah`) VALUES
(2, 'Pelajaran dimulai pukul 07.00 dan diakhiri pukul 12.10 (Kelas III s/d VI), sedangkan kelas I,II,III menyesuaikan jadwal pelajaran.'),
(3, 'Pelajaran diawali dan diakhiri dengan doa dan penghormatan kepada guru.'),
(4, 'Siswa datang paling lambat 15 menit sebelum pelajaran dimulai.'),
(5, 'Siswa piket datang lebih awal.'),
(6, 'Siswa wajib berpakaian seragam, yaitu : \r\n- Hari Senin dan Selasa : Pakaian Merah Putih\r\n- Hari Rabu dan Kamis : Pakaian Identitas Sekolah\r\n- Hari Jumat dan Sabtu : Pakaian Pramuka'),
(7, 'Saat pelajaran berlangsung, siswa keluar dan masuk harus seijin guru.'),
(8, 'Ssiwa meninggalkan sekolah sebelum jam pelajaran usai harus ijin kepada guru / Kepala Sekolah.'),
(9, 'Semua siswa wajib mengikuti Upacara Bendera setiap hari Senin dan atau hari besar nasional dengan tertib.'),
(10, 'Siswa wajib mengikuti Senam setiap hari Rabu dan Sabtu.'),
(11, 'Siswa wajib berpakaian olahraga pada saat pelajaran Penjasorkes.'),
(12, 'Siswa wajib menjaga, memelihara buku-buku dan alat-alat pelajaran.'),
(13, 'Siswa wajib mengembalikan jika meminjam buku/alat pelajaran.'),
(14, 'Siswa wajib menjaga kebersihan, keamanan dan ketertiban sekolah.'),
(15, 'Siswa disarankan mengikuti gerakan tabungan sekolah.'),
(16, 'Siswa wajib menjaga kebersihan pribadi (badan, gigi, rambut dan kuku).'),
(17, 'Siswa kelas III s/d VI wajib membersihkan/mengepel lantai ruang kelas seusai pelajaran.'),
(18, 'Siswa diwajibkan mematuhi Tata Tertib Sekolah.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tujuan`
--

CREATE TABLE `tujuan` (
  `id_tujuan` int(11) NOT NULL,
  `isi_tujuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tujuan`
--

INSERT INTO `tujuan` (`id_tujuan`, `isi_tujuan`) VALUES
(15, 'Mendidik dan membimbing peserta didik untuk menjadi manusia yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa.'),
(16, 'Mendidik dan membimbing peserta didik menjadi manusia yang berakhlak mulia dan berbudi pekerti yang luhur.'),
(17, 'Membimbing dan mendidik peserta didik menjadi manusia yang cerdas, terampil, dan berdaya guna.'),
(18, 'Mendidik dan membimbing siswa menjadi manusia yang jujur, disiplin, mandiri dan bertanggung jawab.'),
(19, 'Melaksanakan pembelajaran model saintifik sehingga tercipta belajar mengajar yang kreatif, efektif, inovatif, dan kondusif.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi`
--

CREATE TABLE `visi` (
  `id_visi` int(11) NOT NULL,
  `isi_visi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visi`
--

INSERT INTO `visi` (`id_visi`, `isi_visi`) VALUES
(1, '\"Terwujudnya Siswa yang Beriman, Berakhlak Mulia, Cerdas, Terampil, dan Mandiri\"');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id_carr`);

--
-- Indeks untuk tabel `category_berita`
--
ALTER TABLE `category_berita`
  ADD PRIMARY KEY (`id_category_berita`);

--
-- Indeks untuk tabel `category_keadaan_kelas`
--
ALTER TABLE `category_keadaan_kelas`
  ADD PRIMARY KEY (`id_category_keadaan_kelas`);

--
-- Indeks untuk tabel `deskripsi_misi`
--
ALTER TABLE `deskripsi_misi`
  ADD PRIMARY KEY (`id_deskripsi_misi`);

--
-- Indeks untuk tabel `deskripsi_program_sekolah`
--
ALTER TABLE `deskripsi_program_sekolah`
  ADD PRIMARY KEY (`id_deskripsi_program`);

--
-- Indeks untuk tabel `deskripsi_tujuan`
--
ALTER TABLE `deskripsi_tujuan`
  ADD PRIMARY KEY (`id_deskripsi_tujuan`);

--
-- Indeks untuk tabel `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id_ekstrakulikuler`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `guru_karyawan`
--
ALTER TABLE `guru_karyawan`
  ADD PRIMARY KEY (`id_guru_karyawan`);

--
-- Indeks untuk tabel `keadaan_kelas`
--
ALTER TABLE `keadaan_kelas`
  ADD PRIMARY KEY (`id_keadaan_kelas`);

--
-- Indeks untuk tabel `komentar_berita`
--
ALTER TABLE `komentar_berita`
  ADD PRIMARY KEY (`id_komentar_berita`),
  ADD KEY `komentar_id_berita` (`komentar_id_berita`);

--
-- Indeks untuk tabel `kontak_sekolah`
--
ALTER TABLE `kontak_sekolah`
  ADD PRIMARY KEY (`id_kontak_sekolah`);

--
-- Indeks untuk tabel `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `kurikulum_sekolah`
--
ALTER TABLE `kurikulum_sekolah`
  ADD PRIMARY KEY (`id_kurikulum_sekolah`);

--
-- Indeks untuk tabel `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id_misi`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indeks untuk tabel `program_sekolah`
--
ALTER TABLE `program_sekolah`
  ADD PRIMARY KEY (`id_program_sekolah`);

--
-- Indeks untuk tabel `respon_kontak_sekolah`
--
ALTER TABLE `respon_kontak_sekolah`
  ADD PRIMARY KEY (`id_respon_kontak_sekolah`);

--
-- Indeks untuk tabel `sambutan`
--
ALTER TABLE `sambutan`
  ADD PRIMARY KEY (`id_sambutan`);

--
-- Indeks untuk tabel `sejarah_sekolah`
--
ALTER TABLE `sejarah_sekolah`
  ADD PRIMARY KEY (`id_sejarah_sekolah`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tatib_sekolah`
--
ALTER TABLE `tatib_sekolah`
  ADD PRIMARY KEY (`id_tatib_sekolah`);

--
-- Indeks untuk tabel `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- Indeks untuk tabel `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_carr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `category_berita`
--
ALTER TABLE `category_berita`
  MODIFY `id_category_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `category_keadaan_kelas`
--
ALTER TABLE `category_keadaan_kelas`
  MODIFY `id_category_keadaan_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `deskripsi_misi`
--
ALTER TABLE `deskripsi_misi`
  MODIFY `id_deskripsi_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `deskripsi_program_sekolah`
--
ALTER TABLE `deskripsi_program_sekolah`
  MODIFY `id_deskripsi_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `deskripsi_tujuan`
--
ALTER TABLE `deskripsi_tujuan`
  MODIFY `id_deskripsi_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id_ekstrakulikuler` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `guru_karyawan`
--
ALTER TABLE `guru_karyawan`
  MODIFY `id_guru_karyawan` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `keadaan_kelas`
--
ALTER TABLE `keadaan_kelas`
  MODIFY `id_keadaan_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `komentar_berita`
--
ALTER TABLE `komentar_berita`
  MODIFY `id_komentar_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kontak_sekolah`
--
ALTER TABLE `kontak_sekolah`
  MODIFY `id_kontak_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kurikulum_sekolah`
--
ALTER TABLE `kurikulum_sekolah`
  MODIFY `id_kurikulum_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `misi`
--
ALTER TABLE `misi`
  MODIFY `id_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `program_sekolah`
--
ALTER TABLE `program_sekolah`
  MODIFY `id_program_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `respon_kontak_sekolah`
--
ALTER TABLE `respon_kontak_sekolah`
  MODIFY `id_respon_kontak_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `sambutan`
--
ALTER TABLE `sambutan`
  MODIFY `id_sambutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sejarah_sekolah`
--
ALTER TABLE `sejarah_sekolah`
  MODIFY `id_sejarah_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tatib_sekolah`
--
ALTER TABLE `tatib_sekolah`
  MODIFY `id_tatib_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `visi`
--
ALTER TABLE `visi`
  MODIFY `id_visi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

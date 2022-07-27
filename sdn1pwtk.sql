-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2022 pada 07.56
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
  `berita_category_id` int(11) NOT NULL,
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
(5, 1, 'PHP', 'UH SHEEUUUP', '2022-07-20', 'DAFFA', 'PHP.png'),
(6, 2, 'CSS', 'CSS GGWP', '2022-07-20', 'Saya', 'CSS.png'),
(8, 3, 'asasd', 'asdasd', '2022-07-21', 'asdasd', 'HTML.png');

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
(1, 'CSS.png', 'CSS', 'Ayo Belajar CSS'),
(2, 'HTML.png', 'HTML', 'Ayo Belajar HTML'),
(3, 'PHP.png', 'PHP', 'Ayo Belajar PHP');

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
-- Struktur dari tabel `deskripsi_misi`
--

CREATE TABLE `deskripsi_misi` (
  `id_deskripsi_misi` int(11) NOT NULL,
  `isi_deskripsi_misi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `desk_visi`
--

CREATE TABLE `desk_visi` (
  `id_desk_visi` int(11) NOT NULL,
  `isi_desk_visi` text NOT NULL,
  `isi_desk_misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `desk_visi`
--

INSERT INTO `desk_visi` (`id_desk_visi`, `isi_desk_visi`, `isi_desk_misi`) VALUES
(3, 'Sekolah Dasar Negeri', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `eks_kul`
--

CREATE TABLE `eks_kul` (
  `id_ekskul` int(11) NOT NULL,
  `nama_ekskul` varchar(255) NOT NULL,
  `nama_pembina` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `eks_kul`
--

INSERT INTO `eks_kul` (`id_ekskul`, `nama_ekskul`, `nama_pembina`) VALUES
(1, 'asda', 'adsad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL,
  `tahun_masuk` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `tahun_masuk`, `gambar`, `keterangan`) VALUES
(1, 'dadasd', 'asdasd', 'CSS.png', 'asdads');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_karyawan`
--

CREATE TABLE `guru_karyawan` (
  `id` int(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `gol_ruang` varchar(50) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `jumlah_kelas` int(11) NOT NULL,
  `jam_tatap_muka` int(64) NOT NULL,
  `total_jam` int(64) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru_karyawan`
--

INSERT INTO `guru_karyawan` (`id`, `nama`, `nip`, `gol_ruang`, `posisi`, `jumlah_kelas`, `jam_tatap_muka`, `total_jam`, `keterangan`) VALUES
(1, 'RR.Esti Andjar Arijandhini,S.E, S.Pd.SD', '19660112 199001 2 002', 'IV/B', 'Kepala Sekolah', 0, 0, 0, ''),
(3, 'Siti Supinah,S.Pd.', '19681026 199401 2 001', 'III/B', 'Guru Kelas IV', 1, 24, 24, ''),
(4, 'Nilasari Yoarry Prawiharan,S.Pd.', '19951008 201902 2 007', 'III/A', 'Guru Kelas III', 1, 24, 24, ''),
(5, 'Sujatmiko, S.Pd.', '19830917 201406 1 002', 'III/A', 'Guru Kelas VI', 1, 24, 32, ''),
(6, 'Rose Suharti Elisabet Purba,S.Pd.Jas.', '19630917 198405 2 003', 'IV/B', 'Guru PJOK', 6, 24, 24, ''),
(7, 'Rini Priana, S.Pd.', '', '', 'Guru Kelas I', 1, 24, 24, ''),
(8, 'Sumiasih,S.Pd.', '', '', 'Guru Kelas II', 1, 24, 24, ''),
(9, 'Dwi Hastuti,A.Ma.Pust.', '', '', 'Guru Kelas V', 1, 24, 24, ''),
(10, 'Afia Rahmah,S.Pd.', '', '', 'Guru PAI', 6, 24, 24, ''),
(11, 'Eka Wulansari,S.Pd', '', '', 'Pembimbing Pramuka Penggalang', 0, 0, 2, 'Koordinator'),
(12, 'Supriyatin,S.Pd.SD', '', '', 'Pembimbing Pramuka Siaga', 0, 0, 2, 'Koordinator'),
(13, 'Ahmaludin', '', '', 'Penjaga Wiyata Bakti', 0, 0, 0, '');

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
  `id_kontak` int(11) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak_sekolah`
--

INSERT INTO `kontak_sekolah` (`id_kontak`, `no_telp`, `email`, `alamat`, `facebook`, `youtube`) VALUES
(17, 'asdasd', 'ariqcw@gmail.com', 'asdasda', 'asdasd', 'asssss');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritik_saran`
--

CREATE TABLE `kritik_saran` (
  `id_pesan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `isi_pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, 'Mendidik dan membimbing peserta didik menjadi manusia yang berakhlak mulia dan berbudi luhur.'),
(4, 'Membimbing peserta didik menjadi manusia yang cerdas , terampil, dan berdaya guna.'),
(5, 'Mendidik siswa menjadi manusia jujur, disiplin, mandiri dan bertanggung jawab.'),
(6, 'Melaksanakan pembelajaran saintifik sehingga tercipta belajar mengajar yang kreatif, efektif, inovatif, kondusif.'),
(11, 'asdasd'),
(12, 'asdasdasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nama_prestasi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `tingkatan` varchar(255) NOT NULL,
  `nama_pemenang` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sambutan`
--

CREATE TABLE `sambutan` (
  `id_sambutan` int(11) NOT NULL,
  `name_sambutan` varchar(255) NOT NULL,
  `isi_sambutan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sambutan`
--

INSERT INTO `sambutan` (`id_sambutan`, `name_sambutan`, `isi_sambutan`) VALUES
(1, 'adasdad', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ');

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
(5, 'Membuat generasi penerus bangsa yang baik dan berguna bagi bangsa dan negara'),
(6, 'Membuat generasi penerus bangsa yang baik dan berguna bagi bangsa dan negara'),
(9, 'asdasdasdasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(64) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `user_image`, `email`, `username`, `password`) VALUES
(1, '', 'admin@gmail.com', 'admin', '123');

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
(1, 'Menciptakan lingkungan sekolah yang baik'),
(2, 'Menciptakan lingkungan sekolah yang nyaman');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `berita_category_id` (`berita_category_id`) USING BTREE;

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
-- Indeks untuk tabel `deskripsi_misi`
--
ALTER TABLE `deskripsi_misi`
  ADD PRIMARY KEY (`id_deskripsi_misi`);

--
-- Indeks untuk tabel `desk_visi`
--
ALTER TABLE `desk_visi`
  ADD PRIMARY KEY (`id_desk_visi`);

--
-- Indeks untuk tabel `eks_kul`
--
ALTER TABLE `eks_kul`
  ADD PRIMARY KEY (`id_ekskul`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `guru_karyawan`
--
ALTER TABLE `guru_karyawan`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id_mapel`);

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
-- Indeks untuk tabel `sambutan`
--
ALTER TABLE `sambutan`
  ADD PRIMARY KEY (`id_sambutan`);

--
-- Indeks untuk tabel `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT untuk tabel `deskripsi_misi`
--
ALTER TABLE `deskripsi_misi`
  MODIFY `id_deskripsi_misi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `desk_visi`
--
ALTER TABLE `desk_visi`
  MODIFY `id_desk_visi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `eks_kul`
--
ALTER TABLE `eks_kul`
  MODIFY `id_ekskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `guru_karyawan`
--
ALTER TABLE `guru_karyawan`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `komentar_berita`
--
ALTER TABLE `komentar_berita`
  MODIFY `id_komentar_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kontak_sekolah`
--
ALTER TABLE `kontak_sekolah`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `kritik_saran`
--
ALTER TABLE `kritik_saran`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `misi`
--
ALTER TABLE `misi`
  MODIFY `id_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sambutan`
--
ALTER TABLE `sambutan`
  MODIFY `id_sambutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `visi`
--
ALTER TABLE `visi`
  MODIFY `id_visi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`berita_category_id`) REFERENCES `category_berita` (`id_category_berita`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

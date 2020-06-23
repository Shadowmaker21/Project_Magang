-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Jan 2019 pada 03.16
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arpusda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahasa`
--

CREATE TABLE `bahasa` (
  `id_bahasa` int(11) NOT NULL,
  `nama_bahasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bahasa`
--

INSERT INTO `bahasa` (`id_bahasa`, `nama_bahasa`) VALUES
(1, 'Indonesia'),
(2, 'Inggris'),
(3, 'Belanda'),
(4, 'Portugis'),
(5, 'China');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_berita_jenis` int(11) DEFAULT NULL,
  `id_bidang` int(11) NOT NULL,
  `judul` text,
  `slug` text,
  `isi` text,
  `n_read` int(11) DEFAULT NULL,
  `n_comment` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_berita_jenis`, `id_bidang`, `judul`, `slug`, `isi`, `n_read`, `n_comment`, `user_id`, `created`, `updated`) VALUES
(5, 4, 1, 'Rapat Koordinasi Sinkronisasi Program Kegiatan Tahun 2018', 'rapat-koordinasi-sinkronisasi-program-kegiatan-tahun-2018', '<p style="text-align: justify; ">        Perencanaan pembangunan daerah merupakan suatu kesatuan dalam sistem perencanaan pembangunan nasional. Hal ini dimaksudkan agar perencanaan pembangunan daerah senantiasa konsisten, sejalan dan selaras dengan kebijakan perencanaan pembangunan dari Pemerintah pusat dan pemerintah provinsi, mengacu pada perencanaan nasional tersebut maka terjalin keterkaitan perencanaan dengan provinsi sehingga diharapkan ada kesinambungan program-program pembangunan dari tingkat pusat hingga daerah. Sehubungan dengan hal tersebut, perlu kiranya Dinas Kearsipan Dan Perpustakaan menyusun sebuah dokumen Rencana Strategis (Renstra) Tahun 2018-2023 sebagai dasar untuk mengembangkan program dan kegiatan di bidang kearsipan dan perpustakaan yang bertumpu pada Dokumen RENSTRA Provinsi Jawa Tengah tahun 2018-2023 oleh karena itu melalui Dinas Kearsipan Dan Perpustakaan memandang perlu menyelenggarakan Rapat Koordinasi Sinkronisasi Program/Kegiatan, sehingga tema yang akan kami usung dalam Rapat Koordinasi Sinkronisasi Program / Kegiatan tahun 2018 adalah “Sinkronisasi Penyusunan RENSTRA Tahun 2018 – 2023 Kabupaten/Kota di Bidang Kearsipan dan Perpustakaan di Jawa Tengah” Sehingga diharapkan upaya menuju pelayanan publik yang optimal di bidang kearsipan dan perpustakaan di Jawa Tengah dapat terealisasi serta bersinergi secara bersama – sama.</p><p>         Adapun maksud dan tujuan pelaksanaan Rakor Sinkronisasi Program / Kegiatan adalah : </p><ul><li>Untuk mengetahui arah kebijakan dan strategi yang ditempuh Pemerintah Pusat dalam rangka Penyusunan RENSTRA  Tahun 2018 – 2023</li><li>Untuk menyatukan langkah pengembangan kearsipan dan perpustakaan  antara pemerintah kab/kota dan provinsi melalui perencanaan program/kegiatan di Jawa Tengah.</li><li>Untuk menjalin sinergitas antara pemerintah kabupaten/kota, pemerintah provinsi dan pemerintah pusat di bidang Kearsipan dan Perpustakaan;</li></ul><p>Kegiatan ini diadakan pada hari Senin dan Selasa 19 dan 20 Pebruari 2018 bertempat di Hotel Patra Jasa Semarang. <span lang="FI" style="text-align: justify; font-family: "nova regular";">Peserta Rapat\nKoordinasi Sinkronisasi Program / Kegiatan Tahun 2018 berjumlah 92 orang terdiri\ndari Kepala </span><span style="text-align: justify; font-family: "nova regular";">dan </span><span lang="EN-US" style="text-align: justify; font-family: "nova regular";">Pejabat\nPerencana </span><span lang="EN-US" style="text-align: justify; font-family: "nova regular";"> </span><span style="text-align: justify; font-family: "nova regular";">Dinas Kearsipan</span><span style="text-align: justify; font-family: "nova regular";"> </span><span style="text-align: justify; font-family: "nova regular";">dan </span><span lang="FI" style="text-align: justify; font-family: "nova regular";">Perpustakaan\nKabupaten/Kota di Jawa Tengah, </span><span style="text-align: justify; font-family: "nova regular";">pejabat eselon III di lingkungan Dinas Kearsipan</span><span style="text-align: justify; font-family: "nova regular";"> </span><span style="text-align: justify; font-family: "nova regular";">dan </span><span lang="FI" style="text-align: justify; font-family: "nova regular";">Perpustakaan\n</span><span style="text-align: justify; font-family: "nova regular";">Provinsi\nJawa Tengah.</span></p><p style="text-align: justify; ">Materi dan Penyaji dalam pelaksanaan Rapat Koordinasi Sinkronisasi Program / Kegiatan Tahun 2018 adalah sebagai berikut :</p><ul><li style="text-align: justify;">Kebijakan Strategis Nasional Kearsipan: “Arah Kebijakan dan Rencana Strategis ANRI dalam RENSTRA 2018 -2023” (Arsip Nasional RI)</li><li style="text-align: justify;">Kebijakan Strategis Nasional Perpustakaan: Arah Kebijakan dan Rencana Strategis PERPUSNAS dalam RENSTRA 2018 -2023 (Perpusnas RI).</li><li style="text-align: justify;">Paparan Program dan Kegiatan Dinas Kearsipan Dan Perpustakaan Prov. Jateng Tahun Anggaran 2018 dan RENSTRA 2018-2023 (Dinas Kearsipan Dan Perpustakaan Prov. Jateng).</li><li style="text-align: justify;">Peran Bappeda Provinsi Jawa Tengah dalam rangka “Penyusunan RENSTRA 2018-2023 Bidang Kearsipan dan Perpustakaan” di Jawa Tengah.</li><li style="text-align: justify;">Peran Biro Organisasi Setda Provinsi Jawa Tengah dalam rangka “Penyusunan RENSTRA 2018-2023 Bidang Kearsipan dan Perpustakaan”. </li></ul><div style="text-align: justify;"><br></div><p class="MsoNormal" style="margin-top:0cm;margin-right:0cm;margin-bottom:6.0pt;\nmargin-left:30.8pt;text-align:justify;line-height:150%"><span style="font-family:"Candara","sans-serif";mso-ansi-language:IN"><o:p></o:p></span></p>', 133, 0, 19, '2018-02-21 07:01:04', '2018-02-26 08:25:06'),
(6, 5, 7, 'KB-TK Nasima Kegiatan Story Telling dan Kunjungan di Perpustakaan Provinsi Jawa Tengah', 'kb-tk-nasima-kegiatan-story-telling-dan-kunjungan-di-perpustakaan-provinsi-jawa-tengah', '<h4><span style="font-family: &quot;nova regular&quot;;">Menuju generasi Emas KB-TK Nasima Jl. Puspojolo Tengah no. 69 Semarang mendidik anak sejak usia dini gemar membaca dalam kegiatan Kunjungan dan Story Telling di Perpustakaan provinsi Jawa Tengah Jl. Sriwijaya 29 A Semarang mengajak 39 anak usia dini didampingi 7 guru pendaming antara lain Bunda Elly, Bunda Uly, Bunda Nur, Bunda Cici, Bunda Yanti, Bunda Ayu, Bunda Iyem di terima Pustakawan Provinsi Jawa Tengah Bunda Sri Hayati,S.Sos di bantu kak Setyaningsih.</span></h4>', 90, 0, 1, '2018-02-21 07:19:25', NULL),
(7, 5, 7, 'Menjadikan Generasi Emas PAUD KB-Nurul Burhan', 'menjadikan-generasi-emas-paud-kb-nurul-burhan', '<h4 style="text-align: justify; ">Paud KB-Nurul Burhan Jl. Sunan Kalijaga Rt.04 Rw. 01 Pengaron Kidul-Pedurungan - Semarang pimpinan Bunda Ulfi Haisun,S.Ag didapingi bunda Hj Zubaidah,S.Ag, Bunda Nur Hidayah,S.Pd I dan Bunda Maya Apriliyani mengajak 20 anak didik usia dini mengunjungi Perpustakaan Provinsi Jawa Tengah Jl. Sriwijaya 29 A Semarang dengan agenda kunjungan "Story Telling dan Mengengalkan tentang Perpustakaan" yang di terima Pustakawan provinsi Jawa Tengah Bunda Nur Cahyati,S.Sos dibantu Kak Ninu Tri Aprilia</h4>', 74, 0, 1, '2018-02-22 07:21:41', NULL),
(8, 5, 7, 'Kunjungan Observasi SMK Pelayaran Wira Samudra', 'kunjungan-observasi-smk-pelayaran-wira-samudra', '<h4 style="text-align: justify; "><span style="font-family: &quot;nova regular&quot;;">Kunjungan observasi 21 Siswa SMK Pelayaran Wira Samudra Semarang yang dipimpin ketua pelaksana kunjungan Ubaid Alvarino,TU mengunjungi Perpustakaan Provinsi Jawa Tengah Jl. Sriwijaya 29 A Semarang yang di Terima Ibu PLT Kepala Perpustakaan Provinsi jawa Tengah Ibu Dra.Sri Lestari Handayani,MM didampingi KaTU Bp Kusdanarko,S.Sos yang selanjutnya pemanduan ke ruangan oleh&nbsp; Pustakawan Provinsi Jawa Tengah Ibu Wiwik Riyanti,S.Sos dan Bp Supono,S.Sos.</span></h4>', 141, 0, 1, '2018-02-23 07:23:00', NULL),
(9, 5, 7, 'Rapat Anggota Tahunan KPRI PUSTA Tahun Buku 2017', 'rapat-anggota-tahunan-kpri-pusta-tahun-buku-2017', '<h4 style="text-align: justify; "><font size="2"><span style="font-family: &quot;nova regular&quot;;">Rapat Anggota Tahunan KPRI PUSTA Tahun Buku 2017 hari Jumat 23 Februari 2018 di Gedung Perpustakaan Provinsi Jawa Tengah Jl. Sriwijaya 29 A Semarang Lantai 4 di Buka oleh Kepala Dinas Kearsipan dan Perpustakaan yang di Wakilkan Kepala Bidang Pengelolaan Pelestarian Arsip Bapak Dadang Tri Djoko Puspito,S.Sos,M.Si sedangkan dari Dinas Koperasi yang mewakili Ibu Choirunisa,S.Pt dan di hadiri kurang lebih 90 anggota KPRI Pustaka</span></font></h4>', 101, 0, 1, '2018-02-23 07:25:05', NULL),
(10, 5, 7, 'KB Aisyiyah Bustanul Athfal 27 Fieldtriep Outclass ke Perpustakaan', 'kb-aisyiyah-bustanul-athfal-27-fieldtriep-outclass-ke-perpustakaan', '<h4 style="text-align: justify; "><span style="font-family: &quot;nova regular&quot;;">Kelompok Bermain (KB) Aisyiyah Bustanul Athfal Jl Tampomas Dalam III/15 Gajah Mungkur Semarang yang di pimpin Bunda Tri Ramadhania,S.Pd didampingi guru pengasuh Bunda Tri Suni dan bunda Dwi mengajak anak didik usia dini 18 anak mengunjungi Perpustakaan Provinsi Jawa Tengah Jl. Sriwijaya 29 A Semarang dalam rangka "Study Wisata" (Fieldtriep Outclass) untuk mengenaldan mempelajari lebih dalam tentang "Story Telling Perpustakaan Provinsi Jawa Tengah", yang di terima oleh Pustakawan Provinsi Jawa Tengah Bunda Nur Cahyati,S.Sos dibantu Kak Setyaningsih</span></h4>', 115, 0, 1, '2018-02-26 07:26:11', NULL),
(11, 1, 6, 'Lomba Penulisan Artikel Populer', 'lomba-penulisan-artikel-populer', '<h4 style="text-align: justify; ">Membaca merupakan kebutuhan setiap orang yang menghendaki kehidupan masa depan yang lebih baik. Membaca dapat memperlus cakrawala ilmu pengetahuan, memperkaya perbendaharaan bahasa dan membentuk budi pekerti. Menulis tak dapat terlepas dari kegiatan membaca. Penulis tak dapat menghasilkan karya yang baik tanpa membaca. Sebagai salah satu lembaga yang memiliki misi “Pengembangan Kebiasaan Membaca Masyarakat ”, Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah pada tahun 2018 akan menyelenggarakan kegiatan Lomba Penulisan Artikel Populer untuk Siswa SLTA. Sasaran lomba Penulisan Artikel Populer adalah terpilihnya 6 (enam) orang pemenang lomba untuk siswa/ siswi SLTA se Provinsi Jawa Tengah Tahun 2018 yang terdiri dari Juara I, II, III, serta Juara Harapan I, II dan III.&nbsp; Naskah paling lambat diterima pada tanggal 26 Maret 2018, Yuk Guys Simak lebih lanjut pada link berikut ini https://goo.gl/AXgwsz</h4>', 265, 0, 1, '2018-02-26 07:44:02', NULL),
(12, 5, 6, 'Bimtek Pengelola Perpustakaan Sekolah Se-jawa Tengah', 'bimtek-pengelola-perpustakaan-sekolah-se-jawa-tengah', '<p style="text-align: justify; ">Perpustakaan sekolah merupakan tempat para siswa yang dapat dimanfaatkan untuk membaca buku. Hari ini, Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah mengadakan Bimtek untuk Pengelola Perpustakaan Se-Jawa Tengah. Acara dilaksanakan di Hotel Gradhika Semarang. Acara dibuka langsung oleh Kepala Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah Muhamad Masrofi, S.Sos, M.Si. Semoga dengan adanya acara ini dapat meningkatkan kemampuan pengelola perpustakaan sekolah untuk dapat melakukan pengelolaan yang baik.</p>', 188, 0, 1, '2018-03-07 16:31:48', '2018-03-07 16:36:28'),
(13, 1, 1, 'Pameran Perpustakaan Kabupaten Cilacap', 'pameran-perpustakaan-kabupaten-cilacap', '<p style="text-align: justify; ">Pameran Perpustakaan yang diadakan oleh Dinas Kearsipan Dan Perpustakaan Kabupaten Cilacap berakhir pada 7 Maret 2018 yang sebelumnya dibuka pada 1 Maret 2018 kemarin. Acara Pembukaan pun sangat meriah. Acara dibuka sekitar pukul 10.00 WIB. Para pejabat turut hadir pada acara tersebut diantaranya, Wakil Bupati Cilacap, Ketua DPRD Cilacap, Kepala Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah, Ketua Tim Penggerak PKK, Anggota Forkopimda, dan Para pejabat dilingkungan Kabupaten Cilacap. Pada acara tersebut mengukuhkan Ibu Hj. Tetty menjadi Bunda Baca Kabupaten Cilacap. Kepala Dinas Kearsipan Dan Perpustakaan Prov. Jateng Muhamad Masrofi, S.Sos, M.Si saat memberikan sambutan mengatakan bahwa budaya membaca harus sejak dini diterapkan kepada anak - anak. Dengan adanya teknologi informasi dapat membantu masyarakat untuk selalu membaca informasi - informasi yang ada . Selain itu, Kadinas Arpus memberikan penganugerahan Bunda Baca Kab. Cilacap kepada Hj. Tetty.</p><p style="text-align: justify; ">Dinas Kearsipan Dan Perpustakaan Kabupaten Cilacap meluncurkan aplikasi android ePusda yang merupakan perpustakaan digital. Masyarakat yang berada jauh dari perpustakaan dapat memanfaatkan aplikasi ini. Aplikasi ePusda diluncurkan dengan penekanan tombol oleh Wakil Bupati Cilacap dan Bunda Baca Kab. Cilacap yang disaksikan oleh para tamu undangan. Aplikasi ini dapat di unduh melalui Google Play Store secara mandiri oleh masyarakat. Di Jawa Tengah juga terdapat aplikasi serupa bernama iJateng. Koleksi buku yang ada sangat banyak dan beragam. iJateng dikelola langsung oleh Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah. </p><p style="text-align: justify; ">Dengan adanya acara seperti lomba - lomba maupun workshop semoga dapat bermanfaat bagi para siswa/i yang mengikuti pameran tersebut maupun masyarakat dilingkungan Kabupaten Cilacap. </p>', 165, 0, 1, '2018-03-07 17:08:53', '2018-03-12 04:33:58'),
(14, 1, 1, 'Hari Jadi Perpustakaan Kabupaten Wonosobo Ke-28', 'hari-jadi-perpustakaan-kabupaten-wonosobo-ke-28', '<p style="text-align:justify"><span style="font-family:nova regular">Hari senin, 12 Maret 2018 merupakan Hari Jadi Perpustakaan Wonosobo ke-28. HUT Perpustakaan&nbsp; Daerah Kab. Wonosobo ini bertemakan &quot; Rame - rame menyang Perpustakaan, aku baca, aku belajar, aku berkarya &quot;. Kepala Dinas Kearsipan dan Perpustakaan Provinsi Jawa Tengah Muhamad Masrofi, S.Sos, M.Si turut hadir dan memberikan sambutan dalam acara tersebut. Setelah sambutan oleh Kadinas Arpus Jateng, acara dilanjutkan dengan pembagian Hadiah Lomba didampingi dengan Bupati Wonosobo. Pada kesempatan ini, Dinas Kearsipan dan Perpustakaan Kabupaten Wonosobo juga meluncurkan Perpustakaan Digital e-Perpusda Wonosobo. Masyarakat dapat membaca buku dengan mudah pada handphone android melalui aplikasi e-Perpusda.&nbsp; Selain e-Perpusda, juga telah diresmikan juga Layanan Wonosobo Center serta hibah perpustakaan digital ke Sekolah dan Perpusdes.</span></p>\n', 159, 0, 1, '2018-03-12 04:46:04', '2018-03-15 07:15:15'),
(15, 6, 6, 'Penilaian Kuesioner Lomba Perpustakaan', 'penilaian-kuesioner-lomba-perpustakaan', '<p><span style="font-size:18px"><span style="font-family:nova bold">Semarang</span><span style="font-family:nova regular">, Pustakawan UIN Salatiga dengan teliti dan hati-hati menilai kuesioner Lomba Perpustakaan SMA, SMK dan MA se Jawa Tengah. Untuk menentukan 6 besar yg akan di nilai secara langsung ke Perpustakaan sekolah, dimana juara tingkat Provinsi Jawa Tengah akan mewakili lomba tingkat nasional. Dalam penilaian tersebut Kabid Pengembangan Perpustakaan Drs. Nugroho, MM&nbsp;juga ikut melihat proses penilaian tersebut yang dilaksanakan&nbsp;baru baru ini.</span></span></p>\n', 229, 0, 1, '2018-03-25 01:10:46', '2018-03-25 01:16:39'),
(16, 4, 1, 'Arsip adalah Identitas-KU', 'arsip-adalah-identitas-ku', '<p style="text-align: justify;"><span style="font-family:nova bold">Semarang -</span><span style="font-family:nova regular">&nbsp;Arsip sebagai tulang punggung manajemen pemerintahan dan pembangunan mempunyai ciri khas masing-masing dari tugas pokok dan fungsi lembaga itu dibentuk. arsip dapat memberikan informasi autentik, utuh dan terpercaya sekaligus sebagai bukti akuntabilitas kinerja organisasi dalam pelaksanaan berbagai kegiatan dan bahan bukti dalam kepentingan proses peradilan sebagai bentuk pertanggungjawaban nasional kepada generasi yang akan datang. Pagi ini, RRI (Radio Republik Indonesia) melakukan dialog bersama Kepala Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah Muhamad Masrofi, S.Sos, M.Si dan&nbsp;Wakil Dekan I, Fakultas Ilmu Budaya Undip Prof. Dr. Singgih Tri Sulistiyono, M. Hum dengan tema &quot;Arsip Adalah Identitas-Ku&quot; di Kantor Dinas Kearsipan dan Perpustakaan. Hal ini sesuai dengan Pasal 36 Undang - Undang nomor 43 tahun 2009 tentang Kearsipan menyatakan bahwa lembaga kearsipan menggiatkan sosialisasi kearsipan dalam rangka mewujudkan masyarakat sadar arsip.</span></p>\n\n<p style="text-align: justify;"><span style="font-family:nova regular">Selain arsip pemerintahan /&nbsp; organisasi terdapat juga arsip perseorangan. Arsip Keluarga dapat dikategorikan sebagai arsip perseorangan. Arsip keluarga bermanfaat sebagai bukti sejarah keberadaan suatu keluarga dan aktivitasnya. Dengan adanya bukti sejarah ini, generasi mendatang dapat memahami idenditas diri dan mengetahui siapa saja yang termasuk bagian dari saudara - saudara sedarahnya. Arsip Keluarga dapat berupa arsip tekstual maupun non tekstual. Kepala Dinas Kearsipan dan Perpustakaan selalu mengingatkan betapa pentingnya pengelolaan arsip. Manfaat dalam pengelolaan arsip ini akan kita rasakan nanti apabila suatu saat kita membutuhkan arsip tersebut. apabila masyarakat sudah memiliki kesadaran dan pengetahun dasar dalam menyimpan arsip dengan rapi dan tertib, maka pengembangan kearsipan indonesia ditingkat pemerintahan dapat berjalan maksimal.</span></p>\n\n<p style="text-align: justify;"><span style="font-family:nova regular">Dalam siarannya bersama RRI yang berlangsung selama kurang lebih 1 jam, terdapat beberapa masyarakat yang ikut aktif bertanya melalui telepon maupun sms. Salah satu pertanyaan yang menarik adalah mengenai legalitas dari arsip yang telah dilakukan alih media dalam bentuk digital apakah memiliki kekuatan hukum apabila tidak menunjukkan aslinya / sudah hilang.&nbsp;Menurut Kepala Dinas Arpus, arsip digital tersebut dapat dijadikan pembuktian kepada lembaga atau organisasi bahwa kita memiliki arsip tersebut. &quot;Seperti halnya dalam mencari pekerjaan, jika kita lupa membawa ijazah aslinya, tetapi kita sudah memiliki hasil scannya, hal itu dapat menjadi bukti bahwa kita memiliki ijazah&nbsp;tersebut dan Setelah itu apabila sudah diterima, dapat kita tunjukkan ijazah yang asli,&quot;&nbsp;Ujar Masrofi.&nbsp;</span><span style="font-family:nova regular">Prof. Dr. Singgih Tri Sulistiyono, M. Hum menyinggung&nbsp;bahwa pentingnya legalitas terhadap suatu arsip. Bagaimana caranya agar arsip digital tersebut memiliki kekuatan hukum. </span></p>\n\n<p style="text-align: justify;"><span style="font-family:nova regular">Selain arsip, beberapa penanya menanyakan mengenai iJateng dalam hal koleksi buku digitalnya. Menurut Muhamad Masrofi, S.Sos, M.Si, untuk koleksi buku digital akan ditambahkan lagi pada tahun 2018 ini, karena untuk menambahkan buku digital harus melalui beberapa proses karena memiliki Hak Cipta. Sehingga setelah melalui proses ini, nantinya masyarakat dapat menikmati buku yang terdapat pada iJateng secara gratis. Layanan iJateng akan terus ditingkatkan guna memenuhi kebutuhan masyarakat untuk membaca. Untuk cuplikan&nbsp;video dapat dilihat pada halaman facebook di dinasarpusjateng.</span></p>\n\n<p style="text-align: justify;">&nbsp;</p>\n', 215, 0, 1, '2018-03-29 03:43:03', NULL),
(17, 1, 6, 'Pengumuman Lomba Perpustakaan Umum Dan Perpustakaan Sekolah', 'pengumuman-lomba-perpustakaan-umum-dan-perpustakaan-sekolah', '<p><span style="font-family:nova regular">Pengumuman 6 Nominasi Lomba Perpustakaan Umum Desa/Kelurahan dan Perpustakaan Sekolah Tingkat Provinsi Jawa Tengah Tahun 2018 sudah dapat diunduh pada website Dinas Arpus Jateng menu download tab lomba atau klik link berikut <a href="https://goo.gl/miezJT" target="_blank">ini</a></span></p>\n', 267, 0, 1, '2018-04-06 02:27:57', '2018-04-06 02:29:08'),
(18, 1, 6, 'Pemanggilan Peserta Lomba Penulisan Artikel Populer Siswa SLTA', 'pemanggilan-peserta-lomba-penulisan-artikel-populer-siswa-slta', '<p style="text-align: justify;"><span style="font-family:nova regular">Dalam rangka meningkatkan Minat Baca Siswa Tingkat SLTA Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah mengadakan Lomba Penulisan Artikel Populer Tingkat SLTA se Jawa Tengah, adapun artikel yang sudah masuk ke panitia lomba mencapai 114 artikel. Berdasarkan penilaian Juri, ditetapkan 12 terbaik. Sehubungan dengan hal tersebut untuk memilih Juara 1 s.d 6, dimohon kehadiran para siswa untuk hadir mengikuti tes tertulis dan presentasi. Berkas dapat diunduh melalui menu download atau klik link <a href="https://arpusda.jatengprov.go.id/home/download" target="_blank">ini</a></span></p>\n', 288, 0, 1, '2018-04-09 01:26:38', NULL),
(19, 1, 6, 'Pemenang Lomba Penulisan Artikel Populer 2018', 'pemenang-lomba-penulisan-artikel-populer-2018', '<p style="text-align: justify;"><span style="font-family:nova semibold">Semarang</span><span style="font-family:nova regular">&nbsp;- Lomba Penulisan Artikel Populer merupakan lomba yang setiap tahun diadakan oleh Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah. Tahun 2018, artikel yang masuk ke panitia sebanyak 114 artikel. Pada tanggal 3 April 2018 telah diumumkan 12 nominasi terbaik yang selanjutnya mengikuti tahapan berikutnya untuk ditetapkan juara I-VI. 12 Peserta mengikuti tes tertulis dan presentasi yang diselenggarakan di Aula Lantai 4 Dinas Kearsipan Dan Perpustakaan pada tanggal 11 April 2018. Berdasarkan Juri Lomba Penulisan Artikel Populer ditentukan pemenang sebagai berikut :</span></p>\n\n<ol>\n	<li style="text-align: justify;"><span style="font-family:nova regular">Seizza Rahdianny S.A dari SMA N 1 Salatiga sebagai Juara I</span></li>\n	<li style="text-align: justify;"><span style="font-family:nova regular">Afifah Nurul Izaah dari SMA N 1 Sragen sebagai Juara II</span></li>\n	<li style="text-align: justify;"><span style="font-family:nova regular">Baiti Rahma Asy- Syifa dari SMA N 1 Bobotsari, Purbalingga sebagai Juara III</span></li>\n	<li style="text-align: justify;"><span style="font-family:nova regular">Ezza Fadlillah Putri dari SMA N 1 Kedungwuni, Pekalongan sebagai Juara IV</span></li>\n	<li style="text-align: justify;"><span style="font-family:nova regular">Indah Wulandari dari SMA N 1 Guntur, Demak sebagai Juara V</span></li>\n	<li style="text-align: justify;"><span style="font-family:nova regular">Desti Mustika Safitri dari SMA N 1 Gemolong, Sragen sebagai Juara VI</span></li>\n</ol>\n', 244, 0, 1, '2018-04-13 01:44:17', NULL),
(20, 4, 6, 'Safari Gerakan Nasional Gemar Membaca', 'safari-gerakan-nasional-gemar-membaca', '<p style="text-align: justify;"><span style="font-family:nova semibold">Semarang</span><span style="font-family:nova regular"> - Hari Senin, 16 April 2018 Perpustakaan Nasional melaksanakan Promosi Gemar Membaca dalam bentuk Safari Gerakan Nasional Gemar Membaca di Kota Semarang. Acara dilaksanakan di Gedung&nbsp; Moch Ichsan Lantai 8 Jl. Pemuda Nomor 148 Semarang. Kepala Dinas Kearsipan Dan Perpustakaan Muhamad Masrofi, S.Sos, M.Si menjadi narasumber pada acara tersebut dan memaparkan &quot;Implementasi Revolusi Mental Melalui Mobilisasi Pengetahuan dalam Meningkatkan Indeks Kegemaran Membaca&quot;. Perpustakaan Provinsi Jawa Tengah&nbsp;memiliki peran strategis dalam membangun revolusi mental diantarnya :</span></p>\n\n<ol>\n	<li style="text-align: justify;"><span style="font-family:nova regular">Dengan Membangun Perpustakaan Digital Ijateng.</span></li>\n	<li style="text-align: justify;"><span style="font-family:nova regular">Mengembangkan website Perpustakaan Daerah Jawa Tengah (perpusdajawatengah.id)</span></li>\n	<li style="text-align: justify;"><span style="font-family:nova regular">Pengembangan Layanan.</span>\n	<ol>\n		<li style="text-align: justify;"><span style="font-family:nova regular">Layanan Keanggotaan</span></li>\n		<li style="text-align: justify;"><span style="font-family:nova regular">Layanan Sirkulasi</span></li>\n		<li style="text-align: justify;"><span style="font-family:nova regular">Layanan Perpustakaan Keliling</span></li>\n		<li style="text-align: justify;"><span style="font-family:nova regular">Layanan LTPS</span></li>\n		<li style="text-align: justify;"><span style="font-family:nova regular">Layanan Komunitas</span></li>\n		<li style="text-align: justify;"><span style="font-family:nova regular">Layanan Kursus-kursus</span></li>\n		<li style="text-align: justify;"><span style="font-family:nova regular">Layanan Konsultasi Perpustakaan</span></li>\n		<li style="text-align: justify;"><span style="font-family:nova regular">Layanan Magang</span></li>\n		<li style="text-align: justify;"><span style="font-family:nova regular">Layanan Deposit</span></li>\n		<li style="text-align: justify;"><span style="font-family:nova regular">Layanan Bercerita</span></li>\n		<li style="text-align: justify;"><span style="font-family:nova regular">Layanan Fotocopy</span></li>\n		<li style="text-align: justify;"><span style="font-family:nova regular">Layanan Referens</span></li>\n		<li style="text-align: justify;"><span style="font-family:nova regular">Layanan Terbitan Berkala</span></li>\n		<li style="text-align: justify;"><span style="font-family:nova regular">Layanan AV</span></li>\n	</ol>\n	</li>\n</ol>\n', 83, 0, 1, '2018-04-16 08:30:36', NULL),
(21, 6, 2, 'Perawatan dan Pelestarian Arsip', 'perawatan-dan-pelestarian-arsip', '<p style="text-align: justify;"><span style="font-family:nova semibold">Semarang</span><span style="font-family:nova regular"> - Kegiatan preservasi arsip adalah melakukan perawatan dan pelestarian arsip. Bagi orang awam, kata preservasi mungkin belum diketahui oleh banyak orang, terkecuali arsiparis. Dinas Kearsipan dan Perpustakaan Provinsi Jawa Tengah melakukan kegiatan Bimbingan Teknis Preservasi Arsip bagi pengelola Arsip di LKD Kabupaten Kota Se-Jawa Tengah yang diadakan di hotel Noormans Jatingaleh Semarang selama 3 hari mulai 17 s.d 19 April 2018. Dalam pembukaanya, Muhamad Masrofi, S.Sos, M.Si mengatakan bahwa, &quot;Dalam pengelolaan arsip membutuhkan ilmu yang khusus, pengetahuan yang khusus pula&quot;. Karena arsip harus disimpan pada tempatnya sesuai ketentuan. Peserta yang kurang lebih mencapai 75 orang sangat antusias dalam mengikuti kegiatan bimbingan teknis ini.&nbsp;</span></p>\n\n<p style="text-align: justify;"><span style="font-family:nova regular">Pada era jaman now, dalam pencarian arsip harus dilakukan secara cepat. Pada Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah sudah menerapkan sejak tahun 2012 dengan menggunakan aplikasi SKD yang sekarang ini sudah dilakukan pengembangan menjadi eSurat. Surat yang datang, sudah tidak dicatat lagi pada buku agenda melainkan sudah didata menggunakan aplikasi eSurat. Surat yang datang di adminsitrasi dengan cara melakukan scan surat dan dicatat. Setelah data sudah ada pada aplikasi, petugas pengadministrasi segera menaikkan kepada Kepala Dinas dengan menggunakan lembar disposisi. Setelah Kepala Dinas mendisposisi, petugas TU Pimpinan memasukan disposisi yang ditulis oleh Kadinas kedalam aplikasi. Surat yang telah didisposisi di distribusikan kepada bagian yang mendapatkan tugas. Dalam mencari surat sangat mudah sekali hanya butuh waktu 1 menit, kata Masrofi.</span></p>\n\n<p style="text-align: justify;"><span style="font-family:nova regular">Masrofi menyinggung mengenai audit eksternal pada kabupate kota tahun kemarin. Belum ada kabkota yang melakukan kegiatan preservasi. Dengan adanya Bimbingan Teknis ini diharapkan memberikan pengetahun kepada kabupaten kota dalam melakukan kegiatan preservasi.</span></p>\n', 135, 0, 1, '2018-04-17 08:34:13', NULL),
(22, 1, 1, 'BINTEK KEARSIPAN DI BADAN KEPEGAWAIAN PENDIDIKAN DAN PELATIHAN (BKPP) KABUPATEN DEMAK', 'bintek-kearsipan-di-badan-kepegawaian-pendidikan-dan-pelatihan-bkpp-kabupaten-demak', '<p style="text-align:justify"><span style="font-family:nova regular"><span style="font-size:12pt">Kepala Dinas Kearsipan Dan Perpustakaan Prov. Jateng Muhamad Masrofi, S.Sos, M.Si pada tanggal 3 Mei 2018 memberikan materi sebagai pengajar pada Bintek Kearsipan yang diselenggarakan oleh Kepegawaian&nbsp;Pendidikan dan pelatihan (BKPP) Kabupaten&nbsp;Demak. Adapun materi yang disampaikan oleh Bapak Kadinarpus Jateng adalah Penyelenggaraan Kearsipan Daerah Dalam Rangka Tertib Arsip di Jawa Tengah dengan Tema &ldquo;Arsip Sebagai Jantung Organisasi&rdquo;.</span></span></p>\n\n<p style="text-align:justify"><span style="font-family:nova regular"><span style="font-size:12pt">Acara pembukaan juga dihadiri oleh Bapak Bupati Demak, Wakil Bupati, Sekda Kab. Demak, Komisi A DPRD Demak, Kepala Badan Kepegawaian&nbsp;Pendidikan dan pelatihan (BKPP) Kabupaten&nbsp;Demak dan para tamu undangan dari Kepala OPD di lingkungan Pemda Demak. </span></span></p>\n\n<p style="text-align:justify"><span style="font-family:nova regular"><span style="font-size:11pt"><span style="font-size:12.0pt">&nbsp;Acara dilaksanakan pada tanggal 2 s/d 5 Mei 2018 bertempat di Aula Badan Kepegawaian&nbsp;Pendidikan dan pelatihan (BKPP) Kabupaten&nbsp;Demak dengan peserta 50 orang yang terdiri dari 34 orang pengelola arsip di OPD Kab. Demak dan 16 orang pengelola arsip dari Kantor Kecamatan di Kab. Demak. </span></span></span></p>\n\n<p style="text-align:justify"><span style="font-family:nova regular"><span style="font-size:11pt"><span style="font-size:12.0pt">Para peserta Bintek Kearsipan yang dikirim harus disertai dengan Surat Keputusan Kepala OPD yang bersangkutan. Hal ini bertujuan agar peserta yang dikirim ke Bintek adalah benar-benar sebagai petugas pengelola arsip sehingga setelah diadakan bintek para peserta akan menerapkan ilmu kearsipan di masing-masing OPD untuk melaksanakan pengelolaan arsip dengan yang baik dan teratur.</span></span></span></p>\n', 166, 0, 14, '2018-05-04 01:39:35', NULL),
(23, 1, 7, 'Sosialisasi Braille Corner', 'sosialisasi-braille-corner', '<p style="text-align: justify;"><span style="font-family:nova semibold">Semarang</span><span style="font-family:nova regular"> - Untuk melayani masyarakat Penyandang Disabilitas yang ada di wilayah Semarang khususnya dan Provinsi Jawa Tengah umum nya. Pihak Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah telah mnegadakan kejasama dengan Kementrian Sosial RI dalam hal ini Balai Penerbitan Braille Indonesia (BPBI) &quot;Abiyoso&quot; Jl. Kerkhof 21, Leuwigajah Cimahi, Bapak Herry mewakili Kepala Balai Penerbitan Braille Indonesia (BPBI) &quot;Abiyoso&quot; mengatakan definisi penyandang Disabilitas yang berdasarkan UU No. 8 Tahun 2016 tentang Penyandang Disabilitas adalah setiap orang yang mengalami keterbatasan fisik, Intelektual, mental/sensorik dalam jangka waktu yang lama, yang dalam interaksi dengan lingkungan dapat mengalami hambatan dan kesulitan untuk berpartisipasi secara penuh dan efektif dengan warga negara lainnya berdasarkan kesamaan hak Seorang Penyandang disabilitas netra membutuhkan pelajaran dan oriantasi dan mobilitas agar yang bersangkutan dapat mengatasi keterbatasan yang dimilikinya, Juga Orientasi Mobilitas sebagai kemampuan bergerak dari satu tempat ke tempat lain dengan menggunakan semua indera yang masih ada untuk menentukan posisi seseorang terhadap benda-benda penting yang ada di sekitarnya, baik secara temporal maupun spasial.</span></p>\n\n<p style="text-align: justify;"><span style="font-family:nova regular">Kepala Dinas Kearsipan dan Perpustakaan Provinsi Jawa Tengah Bp M.Masrofi,S.Sos, M.Si mengapresiasi dan berterima kasih sebesar-besarnya kepada&nbsp;Balai Penerbitan Braille Indonesia (BPBI) &quot;Abiyoso&quot;, bahwa kita dalam melayani masyarakat umum tidak membeda-bedakan diantara penyandang disabilitas dan yang sehat. Di Dinas Kearsipan dan Perpustakaan Provinsi Jawa Tengah jumlah Koleksi Literasi yang&nbsp; berkaitan dengan tuna netra kurang lebih sejumlah 690 eksemplar ramah difabel, disablitas sedangkan pengunjung setiap harinya tidak kurang dari 800 pengunjung diantaranya ada penyandang disabilitas netra, maka untuk meningkatkan literasi penyandang disablitas perlu di sosialisasikan dan dikuti 20 peserta antara lain 5 peserta Disabilitas&nbsp;<em><strong>&quot;</strong></em></span><span style="font-family:nova bold"><em><strong>Sahabat Mata</strong></em></span><span style="font-family:nova regular"><em><strong>&quot;</strong></em>&nbsp;Semarang dan 15 peserta Pustakawan dari Dinas Kearsipan dan Perpustakaan Provinsi Jawa Tengah.</span></p>\n', 102, 0, 1, '2018-05-07 00:39:43', '2018-05-07 00:42:38'),
(24, 6, 4, 'Pemilihan Arsiparis Teladan Se Jawa Tengah', 'pemilihan-arsiparis-teladan-se-jawa-tengah', '<p style="text-align: justify;"><span style="font-family:nova semibold">Semarang</span> - <span style="font-family:nova regular">Dalam rangka &nbsp;pembinaan sumber daya manusia&nbsp;bidang kearsipan&nbsp; serta untuk memberikan penghargaan kepada arsiparis atas pengabdian dan jasanya terhadap profesi kearsipan, Kepala Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah&nbsp;melaksanakan Pemilihan Arsiparis Teladan. Dalam sambutannya Kepala Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah Muhamad Masrofi, S.Sos, M.Si pemilihan arsiparis teladan ini&nbsp;dapat menjadi daya tarik dan pendorong bagi arsiparis untuk selalu meningkatkan pengetahuan, kemampuan dan ketrampilannya dibidang kearsipan.&nbsp;</span></p>\n\n<p style="text-align: justify;"><span style="font-family:nova regular">Dalam melaksanakan Pemilihan Arsiparis Teladan ini, Dinas Arpus Jateng mengundang para juri dari Fakultas Ilmu Budaya Undip dan&nbsp;BKD Provinsi Jawa Tengah. Pemilihan Arsiparis Teladan ini dilaksanakan mulai hari ini Selasa, 08 Mei 2018 di Aula Lantai 4 Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah pukul 09.30 s.d Selesai. Arsiparis yang mengikuti sebanyak 74 arsiparis di Jawa Tengah.</span></p>\n', 187, 0, 1, '2018-05-08 03:38:10', NULL),
(25, 4, 7, 'Pembukaan Expo Perpustakaan dan Festival Buku di Gedung Wanita Semarang', 'pembukaan-expo-perpustakaan-dan-festival-buku-di-gedung-wanita-semarang', '<p style="text-align: justify;"><span style="font-family:nova semibold">Semarang - </span><span style="font-family:nova regular">Bertempat di Gedung Wanita, Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah bersama dengan Dinas Arsip Dan Perpustakaan Kota Semarang mengadakan event expo perpustakaan dan pameran sejuta buku. Acara dibuka mulai pukul 10.00 WIB. Sebelum acara pembukaan dimulai, Kepala Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah Muhamad Masrofi, S.Sos, M.Si telah membuka lomba bercerita bagi SD/MI Tingkat Provinsi pada aula lantai 4 Perpustakaan Daerah di Jl. Sriwijaya No.29A Semarang. berbagai peserta dari berbagai kabupaten di Jawa Tengah ikut hadir untuk mengikuti lomba bercerita ini. &quot;Bagi peserta yang menjuarai lomba ini nantinya akan mewakili provinsi di tingkat nasional&quot;, kata Muhamad Masrofi. Setelah memberikan sambutan, beliau berfoto bersama dengan para peserta. Setelah memberikan sambutan, Muhamad Masrofi, S.Sos, M.Si beserta jajarannya&nbsp;bergegas untuk membuka acara Expo Perpustakaan yang bertempat gedung wanita sebelah perpustakaan daerah.</span></p>\n\n<p style="text-align: justify;"><span style="font-family:nova regular">Expo perpustakaan ini turut dihadiri oleh Sekda Provinsi Jawa Tengah Dr. Ir Sri Puryono, para kepala dinas di lingkungan pemerintah provinsi jawa tengah beserta para LKD kabupaten kota. Acara expo ini dibuka oleh Sekda Provinsi Jawa Tengah. Sebelum pembukaan acara expo ini, beliau&nbsp;membacakan sambutan dari Gubernur Jawa Tengah. Dalam sambutannya tema expo perpustakaan kali ini merupakan tema yang bagus dan sangat berani. Tema Expo Perpustakaan ini adalah&nbsp;&quot;Berkaca Pada Buku&quot;. Sri Puryono mengaku senang dengan adanya acara expo perpustakaan dan festival sejuta buku ini. &quot;Saya dulu semasa sekolah sangat suka membaca buku, sampai anak dan cucu saya juga senang dalam membaca buku&quot;,&nbsp;kata Sri Puryono saat memberikan sambutan. Perkembangan Teknologi Informasi dan Komunikasi membuat anak-anak sekarang sangat mudah dalam mencari informasi apapun.</span></p>\n\n<p style="text-align: justify;"><span style="font-family:nova regular">Tidak lupa Sekda Provinsi Jawa Tengah, Kepala Dinas Arpus Jawa Tengah dan Kepala Dinas Arsip dan Perpustakaan Kota Semarang turut menandatangani prasasti dan menggantungkan pada tempat yang telah disediakan didepan pintu masuk gedung wanita. Setelah menandatangani prasasti tersebut rombongan beserta para pengunjung meninjau stan di dalam gedung wanita. Acara expo perpustakaan ini diselenggarakan dari tanggal 09 s.d 15 Mei 2018. berbagai macam lomba diantaranya lomba menyanyi, lomba tari kreasi jawab, lomba musikalisasi puisi, lomba band pelajar, lomba mewarnai kreasi, lomba menggambar dan lomba bercerita.&nbsp;</span></p>\n', 219, 0, 1, '2018-05-09 06:37:12', NULL),
(26, 6, 4, 'Pengumuman Pemenang Lomba Arsiparis Teladan 2018', 'pengumuman-pemenang-lomba-arsiparis-teladan-2018', '<p style="text-align:justify"><span style="font-family:nova semibold">Semarang</span> - <span style="font-family:nova regular">Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah telah mengadakan lomba pemilihan arsiparis teladan pada tanggal 8 mei 2018. Setelah mengikuti seleksi yang dilakukan oleh beberapa juri, telah diputuskan pemenang diantaranya :</span></p>\n\n<ul>\n	<li style="text-align: justify;"><span style="font-family:nova regular">Arsiparis Teladan Tingkat Ahli</span>\n\n	<ol>\n		<li><span style="font-family:nova regular">Juara I - Andreas Lukito (&nbsp;Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah )</span></li>\n		<li><span style="font-family:nova regular">Juara&nbsp;II - Rosa Delima (&nbsp;Dinas Kearsipan Dan Perpustakaan Kab. Purworejo )</span></li>\n		<li><span style="font-family:nova regular">Juara III - Sapto Pamungkas (&nbsp;Dinas Kearsipan Dan Perpustakaan Kab. Wonosobo )</span></li>\n		<li><span style="font-family:nova regular">Harapan I - Ratih Anggara (&nbsp;Dinas Kearsipan Dan Perpustakaan Kab. Cilacap )</span></li>\n		<li><span style="font-family:nova regular">Harapan II - RR. Siti Ratnaningsih (&nbsp;</span><span style="font-family:nova regular">Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah )</span></li>\n		<li><span style="font-family:nova regular">Harapan III - Yulianto (&nbsp;Bagian Kepegawaian Pendidikan Dan Pelatihan Daerah Kab. Tegal )</span></li>\n	</ol>\n	</li>\n	<li style="text-align: justify;"><span style="font-family:nova regular">Arsiparis Teladan Tingkat Terampil</span>\n	<ol>\n		<li><span style="font-family:nova regular">Juara I - Rita S.ST, Ars (&nbsp;Dinas Kearsipan Dan Perpustakaan Kab. Purworejo )</span></li>\n		<li><span style="font-family:nova regular">Juara II - Rita W ( Dinas Kependudukan Dan Catatan Sipil Kab. Purworejo )</span></li>\n		<li><span style="font-family:nova regular">Juara III - Putri Wahyu (&nbsp;Dinas Kearsipan Dan Perpustakaan Kab. Kebuman )</span></li>\n		<li><span style="font-family:nova regular">Harapan I - Ageng Prihantano ( Dinas Kearsipan Dan Perpustakaan Kab. Kendal )</span></li>\n		<li><span style="font-family:nova regular">Harapan II - Supriaji (&nbsp;Dinas Kearsipan Dan Perpustakaan Kota Tegal )</span></li>\n		<li><span style="font-family:nova regular">Harapan III - Warsito (&nbsp;</span><span style="font-family:nova regular">Dinas Kearsipan Dan Perpustakaan Kab. Banyumas )</span></li>\n	</ol>\n	</li>\n</ul>\n', 264, 0, 1, '2018-05-09 07:23:30', '2018-05-09 07:30:04'),
(27, 6, 1, 'Peringatan Hari Kebangkitan Nasional ke 110', 'peringatan-hari-kebangkitan-nasional-ke-110', '<p style="text-align: justify;"><span style="font-family:nova semibold">Semarang - </span><span style="font-family:nova regular">Pada hari senin tepatnya 21 mei 2018, Dinas Kearsipan Dan Perpustakaan memperingati Hari Kebangkitan Nasional ke 110 di Jl. Dr. Seriabudi No.201C Semarang. Peringatan itu dengan menggelar upacara bendera yang dimulai pukul 07.30 WIB. Inspektur Upacara oleh Kepala Bidang Layanan dan Pemanfaatan Arsip Anny Indrati, SH. Hari Kebangkitan Nasional mengingatkan kita pada Boedi Oetomo yang menjadi salah satu penanda utama bahwa&nbsp; bangsa Indonesia untuk pertama kalinya menyadari pentingnya dan kesatuan. Presiden Pertama&nbsp; dan Proklamator Kemerdekaan Republik Indonesia, Soekarno, pada peringatan Hari Kebangkitan Nasional tahun 1952 mengatakan bahwa, &quot;Pada hari itu kita memasuki satu cara baru untuk melaksanakan satu &#39;idee&#39;, satu naluri pokok daripada bangsa Indonesia. Cara baru itu ialah cara mengejar sesuatu maksud dengan alat organisasi politik, cara berjuang dengan perserikatan dan perhimpunan politik, cara berjuang dengan tenaga persatuan&quot;</span></p>\n\n<p style="text-align: justify;"><span style="font-family:nova regular">Seratus sepuluh tahun kemudian bangsa ini telah tumbuh menjadi bangsa yang besar dan maju, sejajar dengan bangsa-bangsa lain. meski belum sepenuhnya sempurna, rakyat telah menikmati hasil perjuangan para pahlawannya berupa meningkatnya perekonomian, kesehatan, pendidikan, dan sebagainya. Tema Hari Kebangkitan Nasional 2018 adalah &quot;Pembangunan Sumber Daya Manusia Memperkuat Pondasi Kebangkitan Nasional Indonesia Dalam Era Digital. Era sekarang yang serba digital ini perlunya menyatukan pikiran untuk memperjuangkan kedaulatan bangsa. Seharusnya kita juga bisa, sepikul berdua, menjaga dunia yang serba digital ini, agar menjadi wadah yang kondusif bagi perkembangan budi pekerti, yang seimbang dengan pengetahuan dan keterampilan generasi penerus kita.</span></p>\n\n<p style="text-align: justify;"><span style="font-family:nova regular">Selamat Hari Kebangkitan Nasional ke 110</span><br />\n<span style="font-family:nova regular">#Bangkit Indonesia</span></p>\n', 129, 0, 1, '2018-05-21 02:52:49', NULL),
(28, 6, 1, 'Safari Gerakan Nasional Gemar Membaca Di Kabupaten Wonogiri', 'safari-gerakan-nasional-gemar-membaca-di-kabupaten-wonogiri', '<p style="text-align:justify"><span style="font-family:nova semibold"><span style="font-size:12pt">Senin, 1 Juli 2018</span></span><span style="font-family:nova regular"><span style="font-size:12pt">,&nbsp;Dinas Kearsipan Dan Perpustakaan menghadiri Safari Gerakan Pembudayaan Gemar Membaca di Kabupaten Wonogiri bertempat di Pendopo Rumah Dinas Bupati Wonogiri. Gerakan ini dalam upaya meningkatkan minat baca masyarakat. Hari ini Kepala Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah Muhamad Masrofi, S.Sos, M.Si datang ke Kabupaten Wonogiri dimana beliau menjadi narasumber dalam acara yang dilaksanakan oleh Dinas Kearsipan Kabupaten Wonogiri. Tema yang diusung adalah implementasi tentang Program Pengembangan Perpustakaan Dan Gemar Membaca serta Local Content. Kegiatan ini turut dihadiri oleh Sekda Kabupaten Wonogiri, Bupati Wonogiri, Perpusnas RI, Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah dan Anggota Komisi X&nbsp;DPR RI</span></span></p>\n\n<p style="text-align:justify"><span style="font-family:nova regular"><span style="font-size:12pt">Semakin tingginya persaingan di bidang pendidikan merupakan tantangan bagi kita untuk kembali menggalakkan budaya membaca bagi kita dan anak-anak kita. Perlu kita sadari bersama bahwa membaca menjadi kebutuhan untuk terus menambah pengetahuan kita setiap saat. Penyelenggaraan Safari Gerakan Nasional Gemar Membaca diharapkan dapat memberikan motivasi bagi para pengelola perpustakaan desa, taman bacaan, serta masyarakat dalam peran sertanya mengembangkan perpustakaan di tempatnya masing-masing. Kegiatan ini juga merupakan media yang tepat untuk mengenalkan pengelolaan perpustakaan dari sudut pandang lain yaitu perpustakaan yang lebih memasyarakat</span></span></p>\n\n<p>&nbsp;</p>\n', 117, NULL, 14, '2018-07-02 04:06:29', '2018-07-02 04:17:19'),
(29, 3, 1, 'Penggerak Kemajuan Bidang Perpustakaan', 'penggerak-kemajuan-bidang-perpustakaan', '<p style="text-align: justify;"><span style="font-family:nova semibold">Yogyakarta -&nbsp;</span><span style="font-family:nova regular">Tim Sinergi Provinsi Jawa Tengah dalam rangka pengembangan perpustakaan desa mendapatkan penghargaan Perpuseru, yang digelar di Yogyakarta, kamis (5/7) malam. Penghargaan tersebut merupakan yang tertinggi dan terbaik se Indonesia. Kepala Dinas Kearsipan Dan Perpustakaan Muhamad Masrofi merasa senang mendapatkan penghargaan tersebut. Selain itu beliau juga mendapatkan penghormatan&nbsp;tertinggi sebagai&nbsp;</span><span style="font-family:nova semibold">penggerak kemajuan bidang perpustakaan</span><span style="font-family:nova regular">. Masrofi saat itu didampingi oleh pustakawan berprestasi dari Dinas Kearsipan Dan Perpustakaan Diah Nugraheni.&nbsp;</span></p>\n\n<p style="text-align: justify;"><span style="font-family:nova regular">Perpustakaan Desa Dasun yang mewakili Kabupaten Rembang </span><span style="font-family:nova semibold">berhasil menjadi yang terbaik nasional</span><span style="font-family:nova regular"> dalam Perpuseru Award 2018.&nbsp;Perpustakaan Dasun berhasil mengalahkan perwakilan dari puluhan kabupaten lainnya yang juga masuk nominasi.&nbsp;Kepala Desa Dasun, Sujarwo yang hadir langsung menerima penghargaan mengatakan, perpustakaannya berhasil menjadi jawara lantaran berbagai kelebihan. Di antaranya menyangkut berbagai kegiatan yang secara rutin terselenggara di perpustakaan. Selain itu, kepengurusan dan pengelolaan juga dilakukan dengan cukup baik melibatkan komunitas setempat dalam wadah Dasun Haritage Society (DHS). Sehingga, antusiasme kalangan pemuda untuk berkunjung di perpustakaan cukup tinggi.</span></p>\n', 64, NULL, 14, '2018-07-06 13:28:45', NULL),
(30, 2, 1, 'Dosen dari jerman bersama perwakilan undip datangi Dinas Kearsipan Dan Perpustakaan', 'dosen-dari-jerman-bersama-perwakilan-undip-datangi-dinas-kearsipan-dan-perpustakaan', '<p style="text-align: justify;"><span style="font-family:nova semibold">Semarang - <span style="font-family:nova regular">Sekolah Vokasi Undip D3 Kearsipan menyelenggarakan program&nbsp;</span></span><span style="font-family:nova regular">Workshop Penyusunan Proposal Kerjasama Senior Experten Service (SES).&nbsp;SES merupakan lembaga non profit dari Jerman yang telah berpengalaman dalam mengirimkan tenaga ahli Jerman ke seluruh dunia. Indonesia saat ini menjadi salah satu negara tujuan utama para ahli di bidang pendidikan vokasi. Sekolah Vokasi Undip beserta tenaga ahli dari jerman Mrs Marion Mellman Biehler melakukan kunjungan Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah. kunjungan tersebut diterima langsung oleh Kepala Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah Muhamad Masrofi, S.Sos, M.Si. Masrofi sangat senang karena dikunjungi oleh tenaga ahli dari jerman tersebut. Mrs Marion Mellman Biehler melihat arsip - arsip yang berada di depo Dinas Kearsipan Dan Perpustakaan yang bertempat di Jl Dr. Setiabudi No.201C Semarang ini. Beliau diberikan penjelasan oleh Kasi Pelestarian Arsip Puji Indradi mengenai pengolahan alihmedia yang dilakukan. Dikarenakan alat - alat yang digunakan untuk memutar media tersebut sudah susah ditemukan, maka perlu dilakukan alihmedia. Selain itu, beliau juga melihat pengolahan arsip secara manual di ruang pengolahan yang juga didampingi oleh tim arsiparis Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah. Mrs Marion merasa senang bisa mengunjungi Dinas Kearsipan Dan Perpustakaan ini, tidak lupa beliau juga berfoto bersama sebelum melanjutkan kembali perjalanan ke undip bersama dengan perwakilan undip.</span></p>\n', 116, NULL, 14, '2018-07-16 07:43:47', NULL),
(31, 2, 1, 'Pertemuan rutin dengan Rotary Club Kunthi', 'pertemuan-rutin-dengan-rotary-club-kunthi', '<p style="text-align: justify;"><span style="font-family:nova semibold">Semarang</span><span style="font-family:nova regular"> - Selasa, 17 Juli 2018 pertemuan rutin dilakukan oleh Rotary Club Kunthi dengan Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah di Jl. Dr. Setiabudi No.201C Semarang.&nbsp;Rotary Club merupakan organisasi yang bertujuan mengabdikan diri bahkan menjadi pelayan masyarakat. Pertemuan ini di terima langsung oleh Kepala Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah Muhamad Masrofi, S.Sos, M.Si. Maksud kedatangan Rotary Club Kunthi dalam rangka akan memberikan sebuah mobil Perpustakaan Keliling Digital yang rencananya akan diberikan ketika Ulang Tahun Provinsi Jawa Tengah. Mobil itu nantinya akan digunakan oleh UPT Perpustakaan Provinsi untuk melakukan pelayanan kepada masyarakat. Plt Kepala UPT Perpustakaan Provinsi mengaku sangat senang, karena dapat menambah jumlah armada yang ada.</span></p>\n', 83, NULL, 14, '2018-07-19 00:56:11', NULL),
(32, 5, 2, 'Rapat Koordinasi Penyusunan Pedoman Kearsipan', 'rapat-koordinasi-penyusunan-pedoman-kearsipan', '<p style="text-align: justify;"><span style="font-family:nova semibold">Semarang</span><span style="font-family:nova regular"> - Rapat Koordinasi Penyusunan Pedoman Kearsipan berlangsung pada tanggal&nbsp;25 Juli 2018 di Aula Lantai 4 Dinas Arpus Provinsi&nbsp;Jawa Tengah. Acara dibuka oleh Ibu Sekretaris Dinas Arpus Sapta Hermawati dimana diikuti oleh 48 OPD Provinsi Jawa Tengah. Tujuan Rapat Koordinasi ini dalam rangka untuk memperoleh masukan - masukan dari OPD Provinsi Jawa Tengah guna menyempurnakan pedoman kearsipan. Substansi pedoman meliputi JRA, Revisi JRA Keuangan, Peodman Penyusutan Arsip, dan Pedoman Program Arsip Vital. Narasumber yang hadir berasal dari Arsip Nasional RI, Dinas Arpus Prov. Jateng dan Dinas Arpus Kabupaten Kendal. Moderator pada acara tersebut Anny Indrati yang sebelumnya menjabat Kepala Bidang Layanan Pemanfaatan Arsip. Penyusunan Pedoman ini belum final karena akan didiskusikan kembali dengan OPD terkait. Dengan adanya kegiatan&nbsp;ini agar terdapat sinergi dan integrasi antara tata naskah dinas, klasifikasi arsip, jra dan sistem klasifikasi keamanan akses arsip .</span></p>\n', 82, NULL, 1, '2018-07-31 01:11:15', NULL),
(33, 3, 1, 'Penghargaan Satyalancana Karya Satya', 'penghargaan-satyalancana-karya-satya', '<p style="text-align: justify;"><span style="font-family:nova semibold">Semarang -&nbsp; </span><span style="font-family:nova regular">Satyalancana Karya Satya merupakan penghargaan yang diberikan kepada Pegawai Negeri Sipil&nbsp;yang telah berbakti selama 10 atau 20 atau 30 tahun&nbsp;lebih secara terus menerus dengan menunjukkan kecakapan, kedisiplinan, kesetian dan pengabdian sehingga dapat dijadikan teladan bagi setiap pegawai lainnya. Penghargaan ini dianugerahkan oleh Presiden Republik Indonesia kepada 8 Pegawai di lingkungan Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah. Acara tersebut di langsungkan setelah apel pagi yang dipimpin langsung oleh Kepala Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah Muhamad Masrofi, S.Sos, M.Si.</span></p>\n', 71, NULL, 1, '2018-07-31 02:00:31', NULL);
INSERT INTO `berita` (`id_berita`, `id_berita_jenis`, `id_bidang`, `judul`, `slug`, `isi`, `n_read`, `n_comment`, `user_id`, `created`, `updated`) VALUES
(34, 1, 6, 'Penyerahan Hadiah Lomba Bidang Kearsipan Dan Perpustakaan Tahun 2018', 'penyerahan-hadiah-lomba-bidang-kearsipan-dan-perpustakaan-tahun-2018', '<p><span style="font-family:nova regular">Semarang,&nbsp;Dinas Kearsipan Dan Perpustakaan telah selesai dalam melakukan kegiatan penilaian lomba bidang kearsipan dan perpustakaan. Beberapa diantaranya :</span></p>\n\n<ul>\n	<li><span style="font-family:nova regular">Lomba LKD Kabupaten Kota</span></li>\n	<li><span style="font-family:nova regular">Lomba Tertib Arsip Desa</span></li>\n	<li><span style="font-family:nova regular">Pemilihan Arsiparis Teladan Tingkat Ahli</span></li>\n	<li><span style="font-family:nova regular">Arsiparis Teladan Tingkat Terampil</span></li>\n	<li><span style="font-family:nova regular">Lomba Perpustakaan Umum Desa/Kelurahan</span></li>\n	<li><span style="font-family:nova regular">Lomba Perpustakaan Sekolah SLTA</span></li>\n	<li><span style="font-family:nova regular">Lomba Bercerita bagi siswa SD/MI</span></li>\n	<li><span style="font-family:nova regular">Pemilihan Pustakawan Berprestasi Terbaik</span></li>\n	<li><span style="font-family:nova regular">Lomba Penulisan Artikel Populer Siswa SLTA</span></li>\n</ul>\n\n<p><span style="font-family:nova regular">Rabu, 8 Agustus 2018 Dinas Kearsipan Dan Perpustakaan mengundang para pemenang untuk menerima hadiah dan trophy. Acara dibuka langsung oleh Kepala Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah Muhamad Masrofi, S.Sos, M.Si. Beliau dalam sambutannya mengapresiasi kepada para pemenang, semoga dapat memotivasi teman - teman yang lain untuk terus aktif meningkatkan kemampuan diri agar tahun depan memperoleh juara. &quot;Seharusnya penyerahan hadiah ini dilakukan pada saat hari jadi Provinsi Jawa Tengah yang&nbsp;jatuh pada tanggal 15 Agustus 2018 dan diserahkan langsung oleh Gubernur Jawa Tengah, akan tetapi dikarenakan terlalu banyak sehingga hanya untuk para juara 1 yang nantinya harus hadir disimpang lima&quot;, imbuh Masrofi. Berikut lomba beserta data para pemenang:</span></p>\n\n<ul>\n	<li><span style="font-family:nova regular">Lomba Lembaga Kearsipan Daerah Kabupaten Kota</span>\n\n	<ul>\n		<li><span style="font-family:nova regular">Juara I : Dinas Perpustakaan dan Kearsipan Kota Magelang</span></li>\n		<li><span style="font-family:nova regular">Juara II : Dinas Kearsipan dan Perpustakaan Kabupaten Kebumen</span></li>\n		<li><span style="font-family:nova regular">Juara III : Dinas Perpustakaan dan Kearsipan Kabupaten&nbsp;Magelang&nbsp;</span></li>\n		<li><span style="font-family:nova regular">Harapan I :&nbsp;Dinas Kearsipan dan Perpustakaan Kabupaten Kendal</span></li>\n		<li><span style="font-family:nova regular">Harapan II : Dinas Arsip dan Perpustakaan Kabupaten Sragen</span></li>\n		<li><span style="font-family:nova regular">Harapan III : Dinas Kearsipan dan Perpustakaan Kabupaten Pekalongan</span></li>\n	</ul>\n	</li>\n	<li><span style="font-family:nova regular">Lomba Perpustakaan Umum Desa/Kelurahan</span>\n	<ul>\n		<li><span style="font-family:nova regular">Juara I :&nbsp;Perpustakaan &quot;MUDA BHAKTI&quot;, Desa Ngablak, Kecamatan Srumbung, Kabupaten Magelang</span></li>\n		<li><span style="font-family:nova regular">Juara II :&nbsp;Perpustakaan &quot;IQRO&quot; Desa Lamuk, Kecamatan Kecobong, Kabupaten Purbalingga</span></li>\n		<li><span style="font-family:nova regular">Juara III :&nbsp;Perpustakaan &quot;CITRA ILMU&quot;, Desa Kenteng, Kecamatan Susukan, Kabupaten Semarang</span></li>\n		<li><span style="font-family:nova regular">Harapan I :&nbsp;Perpustakaan &quot;AL HURRIYYAH&quot;, Desa Tambak Agung, Kecamatan Kliro, Kabupaten Kebumen</span></li>\n		<li><span style="font-family:nova regular">Harapan II :&nbsp;Perpustakaan &quot;CERAH&quot;, Desa Wonopringgo, Kecamatan Wonopringgo, Kabupaten Pekalongan</span></li>\n		<li><span style="font-family:nova regular">Harapan III :&nbsp;Perpustakaan &quot;KARYA MUDA&quot;, Kecamatan Kalijambe, Kabupaten Sragen</span></li>\n	</ul>\n	</li>\n	<li><span style="font-family:nova regular">Lomba Perpustakaan Sekolah SLTA</span>\n	<ul>\n		<li><span style="font-family:nova regular">Juara I : Perpustakaan MA Negeri 2 Wonosobo Kabupaten Wonosobo</span></li>\n		<li><span style="font-family:nova regular">Juara II :&nbsp;Perpustakaan SMA Negeri 2 Temanggung Kabupaten Temanggung</span></li>\n		<li><span style="font-family:nova regular">Juara III :&nbsp;Perpustakaan SMA Negeri 1 Karangreja Kabupaten Purbalingga</span></li>\n		<li><span style="font-family:nova regular">Harapan I :&nbsp;Perpustakaan SMA Negeri 1 Demak Kabupaten Demak</span></li>\n		<li><span style="font-family:nova regular">Harapan II :&nbsp;Perpustakaan SMK Negeri 2 Sragen Kabupaten Sragen</span></li>\n		<li><span style="font-family:nova regular">Harapan III :&nbsp;Perpustakaan SMA Negeri 1 Wonogiri Kabupaten Wonogiri</span></li>\n	</ul>\n	</li>\n	<li><span style="font-family:nova regular">Lomba Bercerita Bagi Siswa SD/MI</span>\n	<ul>\n		<li><span style="font-family:nova regular">Juara I :&nbsp;Fransiska Apriliani dari SD Negeri Mondoteko, Kabupaten Rembang</span></li>\n		<li><span style="font-family:nova regular">Juara II :&nbsp;Raihan Faiq Syabani dari SD Muhammadiyah Karangpucung, Kabupaten Cilacap</span></li>\n		<li><span style="font-family:nova regular">Juara III :&nbsp;Pramuyasih Citrarini dari SD Negeri 3 Kalipelus Kabupaten Banjarnegara</span></li>\n		<li><span style="font-family:nova regular">Harapan I :&nbsp;Naura Qurratu&rsquo;ain Nisa Azzahra&nbsp; dari SD Negeri 1 Prembun Kabupaten Kebumen</span></li>\n		<li><span style="font-family:nova regular">Harapan II :&nbsp;Keisha Visaliany Wibowo dari SD Muhammadiyah 1 Kota Magelang</span></li>\n		<li><span style="font-family:nova regular">Harapan III :&nbsp;Winne Aprilia Putri dari SD Negeri Tambakaji Kota Semarang</span></li>\n	</ul>\n	</li>\n	<li><span style="font-family:nova regular">Pemilihan Pustakawan Berprestasi Terbaik</span>\n	<ul>\n		<li><span style="font-family:nova regular">Juara I :&nbsp;Turnadi, SE dari Dinas Kearsipan Dan Perpustakaan Kabupaten Sukoharjo</span></li>\n		<li><span style="font-family:nova regular">Juara II :&nbsp;Nurlistiani, MA dari Universitas&nbsp;Negeri Semarang</span></li>\n		<li><span style="font-family:nova regular">Juara III :&nbsp;Asih Winarto, S.I.Kom dari Dinas Kearsipan Dan Perpustakaan Kabupaten Semarang</span></li>\n		<li><span style="font-family:nova regular">Harapan I :&nbsp;Suryanto, S.Hum dari SMAN 5 Kota Magelang</span></li>\n		<li><span style="font-family:nova regular">Harapan II :&nbsp;Aan Prabowo, S.Hum dari Udinus Semarang</span></li>\n		<li><span style="font-family:nova regular">Harapan III :&nbsp;Yunda Sara Sekar Arum, SIP dari Universitas Muhammadiyah Kota Magelang</span></li>\n	</ul>\n	</li>\n	<li><span style="font-family:nova regular">Lomba Tertib Arsip Desa Kabupaten</span>\n	<ul>\n		<li><span style="font-family:nova regular">Juara I :&nbsp;Desa Tegalsambi, Kecamatan Tahunan, Kabupaten Jepara</span></li>\n		<li><span style="font-family:nova regular">Juara II :&nbsp;Desa Tanuharjo, Kecamatan Alian Kabupaten Kebumen</span></li>\n		<li><span style="font-family:nova regular">Juara III :&nbsp;Desa Tanuharjo, Kecamatan Alian Kabupaten Kebumen</span></li>\n		<li><span style="font-family:nova regular">Harapan I :&nbsp;Desa Penungkulan, Kecamatan Gebang, Kabupaten Purworejo</span></li>\n		<li><span style="font-family:nova regular">Harapan II :&nbsp;Desa Ngablak Kecamatan Srumbung, Kabupaten Magelang</span></li>\n		<li><span style="font-family:nova regular">Harapan III :&nbsp;Desa Peron, Kecamatan Limbangan, Kabupaten Kendal</span></li>\n	</ul>\n	</li>\n	<li><span style="font-family:nova regular">Lomba Penulisan Artikel Populer Siswa SLTA</span>\n	<ul>\n		<li><span style="font-family:nova regular">Juara I : Seizza Rahdianny, S.A dari SMA Negeri 1 Salatiga</span></li>\n		<li><span style="font-family:nova regular">Juara II : Afifah Nurul Izzah dari SMA Negeri 1 Sragen</span></li>\n		<li><span style="font-family:nova regular">Juara III : Baiti Rahma Asysyifa dari SMA Negeri 1 Bobotsari Purbalingga</span></li>\n		<li><span style="font-family:nova regular">Harapan I : Ezza Fadhilah Putri dari SMA Negeri 1 Kedungwuni Pekalongan</span></li>\n		<li><span style="font-family:nova regular">Harapan II : Indah Wulandari dari SMA Negeri 1 Guntur Demak</span></li>\n		<li><span style="font-family:nova regular">Harapan III : Desti Mustika Safitri dari SMA Negeri 1 Gemolong Sragen</span></li>\n	</ul>\n	</li>\n</ul>\n\n<ul>\n	<li><span style="font-family:nova regular">Lomba Arsiparis Teladan</span>\n\n	<ul>\n		<li><span style="font-family:nova regular">Juara I : Andreas Lukito W, S.Sos dari Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah</span></li>\n		<li><span style="font-family:nova regular">Juara II : Rosa Delima NW. S.ST. Ars dari Dinas Kearsipan Dan Perpustakaan Kabupaten Purworejo</span></li>\n		<li><span style="font-family:nova regular">Juara III : Sapto Pamungkas, SAP dari Dinas Kearsipan Dan Perpustakaan Kabupaten Wonosobo</span></li>\n		<li><span style="font-family:nova regular">Harapan I : Ratih Anggara Puri, S.Sos dari Badan Kepegawaian, Pendidikan, dan Pelatihan Daerah Kabupaten Cilacap</span></li>\n		<li><span style="font-family:nova regular">Harapan II : RR. Siti Ratnaningsih, SH, MH dari Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah</span></li>\n		<li><span style="font-family:nova regular">Harapan III : Wasis Yulianto, S.ST. Ars dari Badan Kepegawaian, Pendidikan, dan Pelatihan Daerah Kota Tegal</span></li>\n	</ul>\n	</li>\n	<li><span style="font-family:nova regular">Lomba Arsiparis Tingkat Terampil</span>\n	<ul>\n		<li><span style="font-family:nova regular">Juara I : Rita Umami, S.ST. Ars dari Dinas Kearsipan Dan Perpustakaan Kabupaten Purworejo</span></li>\n		<li><span style="font-family:nova regular">Juara II : Rita Wijayanti, A.Md dari Dinas Kependudukan dan Catatan Sipil Kabupaten Purworejo</span></li>\n		<li><span style="font-family:nova regular">Juara III : Putri Wahyu P, A.Md dari Dinas Kearsipan Dan Perpustakaan Kabupaten Kebumen</span></li>\n		<li><span style="font-family:nova regular">Harapan I : Ageng Prihantano L, A.Md dari Dinas Kearsipan Dan Perpustakaan Kabupaten Kendal</span></li>\n		<li><span style="font-family:nova regular">Harapan II : Supri Aji, A.Md dari Dinas Kearsipan Dan Perpustakaan Kota Tegal</span></li>\n		<li><span style="font-family:nova regular">Harapan III : Warsito, A.Md dari Dinas Kearsipan Dan Perpustakaan Kabupaten Banyumas</span></li>\n	</ul>\n	</li>\n</ul>\n\n<p><span style="font-family:nova regular">Sekali lagi, Selamat bagi para pemenang, ini bukanlah akhir tetapi awal dari sesuatu..</span></p>\n\n<p><span style="font-family:nova regular">Tetap Semangat bagi yang belum menjadi pemenang, teruslah berkembang.</span></p>\n\n<p><span style="font-family:nova regular">#Salam Arsip, #Salam Literasi</span></p>\n', 99, NULL, 1, '2018-08-08 08:27:16', '2018-08-08 13:21:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_gambar`
--

CREATE TABLE `berita_gambar` (
  `id` int(11) NOT NULL,
  `id_berita` int(11) DEFAULT NULL,
  `utama` int(11) DEFAULT NULL,
  `file_path` text NOT NULL,
  `file_name` text NOT NULL,
  `file_ekstention` varchar(10) NOT NULL,
  `file_size` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita_gambar`
--

INSERT INTO `berita_gambar` (`id`, `id_berita`, `utama`, `file_path`, `file_name`, `file_ekstention`, `file_size`, `user_id`, `created`, `updated`) VALUES
(14, 12, 1, '/home/arpusdajatengpro/public_html/files/berita/', '4331d0861dad4f7aa244efb76608bce5.jpeg', '.jpeg', '91.72', 1, '2018-03-17 04:29:03', '0000-00-00 00:00:00'),
(15, 12, 0, '/home/arpusdajatengpro/public_html/files/berita/', '89560500927f6ab9b8593341a0e9e944.jpeg', '.jpeg', '164.52', 1, '2018-03-17 04:29:29', '0000-00-00 00:00:00'),
(16, 12, 0, '/home/arpusdajatengpro/public_html/files/berita/', '3947d2b0cf405bfeaf82db83532f7737.jpeg', '.jpeg', '149.83', 1, '2018-03-17 04:29:47', '0000-00-00 00:00:00'),
(17, 12, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'ff210f92a9a17caa9a9ef35900473512.jpeg', '.jpeg', '99.92', 1, '2018-03-17 04:29:58', '0000-00-00 00:00:00'),
(18, 10, 1, '/home/arpusdajatengpro/public_html/files/berita/', '873124bba5a0182b076584ce1fbabf86.JPG', '.JPG', '47.95', 1, '2018-03-17 04:32:51', '0000-00-00 00:00:00'),
(19, 10, 0, '/home/arpusdajatengpro/public_html/files/berita/', '4af2f81e61560bdc36b717669ff064e6.JPG', '.JPG', '48.23', 1, '2018-03-17 04:32:56', '0000-00-00 00:00:00'),
(20, 10, 0, '/home/arpusdajatengpro/public_html/files/berita/', '0fd12d9b3920e4a221e447ccbcfc9ea5.JPG', '.JPG', '40.36', 1, '2018-03-17 04:33:00', '0000-00-00 00:00:00'),
(21, 10, 0, '/home/arpusdajatengpro/public_html/files/berita/', '2b31bb801c81e18c5a442db2b10e5e64.JPG', '.JPG', '42.07', 1, '2018-03-17 04:33:03', '0000-00-00 00:00:00'),
(22, 9, 1, '/home/arpusdajatengpro/public_html/files/berita/', 'c2ec7d3e3d4b71d96b6f12d29bbb9dd7.JPG', '.JPG', '31.53', 1, '2018-03-17 04:34:58', '0000-00-00 00:00:00'),
(23, 9, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'c4907e0b77b8f4e268bd58746589e96a.JPG', '.JPG', '36.01', 1, '2018-03-17 04:35:02', '0000-00-00 00:00:00'),
(24, 9, 0, '/home/arpusdajatengpro/public_html/files/berita/', '77d641000a1a64d3122b48d86121aae3.JPG', '.JPG', '36.34', 1, '2018-03-17 04:35:05', '0000-00-00 00:00:00'),
(25, 9, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'd88a125cd3c8ea77c461c7d4ea31a20b.JPG', '.JPG', '36.35', 1, '2018-03-17 04:35:08', '0000-00-00 00:00:00'),
(26, 13, 1, '/home/arpusdajatengpro/public_html/files/berita/', '8155bf02f78ebd154bc42fc30afc5233.jpeg', '.jpeg', '179.49', 1, '2018-03-17 04:38:06', '0000-00-00 00:00:00'),
(27, 13, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'fa5271134dda33b5228fd50f44384f34.jpeg', '.jpeg', '178.27', 1, '2018-03-17 04:38:13', '0000-00-00 00:00:00'),
(28, 13, 0, '/home/arpusdajatengpro/public_html/files/berita/', '0ccd8923519edeb6ed0d74bca1699dd0.jpeg', '.jpeg', '164.15', 1, '2018-03-17 04:38:19', '0000-00-00 00:00:00'),
(29, 13, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'eade2c9c43b76c7b24fd097b986306e4.jpeg', '.jpeg', '196.95', 1, '2018-03-17 04:38:25', '0000-00-00 00:00:00'),
(30, 14, 1, '/home/arpusdajatengpro/public_html/files/berita/', 'e569bb747b81758e839f88a3dc6fcbaa.jpeg', '.jpeg', '184.79', 1, '2018-03-17 04:39:33', '0000-00-00 00:00:00'),
(31, 14, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'e6bfdd275957267fd495ffaf4726917e.jpeg', '.jpeg', '151.57', 1, '2018-03-17 04:39:41', '0000-00-00 00:00:00'),
(33, 5, 1, '/home/arpusdajatengpro/public_html/files/berita/', '7e731974a51670020ab38330060143d9.JPG', '.JPG', '481.81', 1, '2018-03-17 04:56:22', '0000-00-00 00:00:00'),
(34, 5, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'f08729d06724b5a1c6aec186c1214c2e.JPG', '.JPG', '3902.59', 1, '2018-03-17 04:56:39', '0000-00-00 00:00:00'),
(35, 5, 0, '/home/arpusdajatengpro/public_html/files/berita/', '5822c3d78bd43fc4fb23da7818cb743a.JPG', '.JPG', '473.83', 1, '2018-03-17 04:56:51', '0000-00-00 00:00:00'),
(36, 5, 0, '/home/arpusdajatengpro/public_html/files/berita/', '3f4fa872ce8f076eec412a2dc9d543fe.JPG', '.JPG', '365.03', 1, '2018-03-17 14:16:13', '0000-00-00 00:00:00'),
(37, 5, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'e97b4299266d82b28bd0f885193fe917.JPG', '.JPG', '375.04', 1, '2018-03-17 14:18:50', '0000-00-00 00:00:00'),
(38, 5, 0, '/home/arpusdajatengpro/public_html/files/berita/', '7e2a9f9c1ecf0ca0d0f8649d12f44517.JPG', '.JPG', '366.83', 1, '2018-03-17 14:18:56', '0000-00-00 00:00:00'),
(39, 5, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'b92fe215a7a17d09022e93cd11cfaff6.JPG', '.JPG', '379.98', 1, '2018-03-17 14:20:11', '0000-00-00 00:00:00'),
(40, 5, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'abee70ea5cdde7ccbbe2531cc5a3d683.JPG', '.JPG', '354.26', 1, '2018-03-17 14:21:50', '0000-00-00 00:00:00'),
(41, 5, 0, '/home/arpusdajatengpro/public_html/files/berita/', '757f29c4ba4080ae885f1b75f6359ac4.JPG', '.JPG', '435.93', 1, '2018-03-17 14:22:48', '0000-00-00 00:00:00'),
(42, 15, 1, '/home/arpusdajatengpro/public_html/files/berita/', '061de7bb4acf9833ac213f0bff3fd1b2.jpg', '.jpg', '175.54', 1, '2018-03-25 01:10:57', '0000-00-00 00:00:00'),
(43, 16, 1, '/home/arpusdajatengpro/public_html/files/berita/', 'b75ef18d0669eda11eff22d6d2b3b3dc.JPG', '.JPG', '278.15', 1, '2018-03-29 03:45:10', '0000-00-00 00:00:00'),
(45, 16, 0, '/home/arpusdajatengpro/public_html/files/berita/', '3e4a974398d6e41f4eb72fd9a8c6dacd.jpg', '.jpg', '224.7', 1, '2018-03-29 04:01:41', '0000-00-00 00:00:00'),
(46, 16, 0, '/home/arpusdajatengpro/public_html/files/berita/', '82b1495f07e2347841ee32f8236d0477.jpg', '.jpg', '291.85', 1, '2018-03-29 04:01:49', '0000-00-00 00:00:00'),
(48, 19, 1, '/home/arpusdajatengpro/public_html/files/berita/', '213efd25448764857d81fa24f800d556.JPG', '.JPG', '495.63', 1, '2018-04-13 01:52:04', '0000-00-00 00:00:00'),
(49, 19, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'bd4c1e822ed65b58784d83dd59576479.JPG', '.JPG', '486.84', 1, '2018-04-13 01:52:07', '0000-00-00 00:00:00'),
(50, 19, 0, '/home/arpusdajatengpro/public_html/files/berita/', '9f84548fce7053f6aaa46accc59f4e4a.JPG', '.JPG', '518.56', 1, '2018-04-13 01:52:10', '0000-00-00 00:00:00'),
(51, 19, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'b65c876b505c8cdc852e464a4e7564ef.JPG', '.JPG', '493.42', 1, '2018-04-13 01:52:13', '0000-00-00 00:00:00'),
(52, 19, 0, '/home/arpusdajatengpro/public_html/files/berita/', '696d4bad6790b8560b916d454a13b5c1.JPG', '.JPG', '491.54', 1, '2018-04-13 01:52:16', '0000-00-00 00:00:00'),
(53, 19, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'b2eaa30b625f5739e78864d1d26b0020.JPG', '.JPG', '462.57', 1, '2018-04-13 01:52:20', '0000-00-00 00:00:00'),
(54, 19, 0, '/home/arpusdajatengpro/public_html/files/berita/', '9160e7091776558b24771c4a33b5f13a.JPG', '.JPG', '485.03', 1, '2018-04-13 01:52:23', '0000-00-00 00:00:00'),
(55, 19, 0, '/home/arpusdajatengpro/public_html/files/berita/', '9013b43f4b6580cb2244092f6856a99e.JPG', '.JPG', '498.5', 1, '2018-04-13 01:52:26', '0000-00-00 00:00:00'),
(56, 19, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'faf949e3c80d99aec8098c795769bbe4.JPG', '.JPG', '509.43', 1, '2018-04-13 01:52:28', '0000-00-00 00:00:00'),
(57, 19, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'd24de39eb124d9e1ed351411038c9451.JPG', '.JPG', '509.89', 1, '2018-04-13 01:52:31', '0000-00-00 00:00:00'),
(58, 19, 0, '/home/arpusdajatengpro/public_html/files/berita/', '6d746c21d0a453cd2fabdad60696671c.JPG', '.JPG', '478.36', 1, '2018-04-13 01:53:31', '0000-00-00 00:00:00'),
(59, 20, 1, '/home/arpusdajatengpro/public_html/files/berita/', '1dbb60bc19b39b62c361432db13624a3.jpg', '.jpg', '361.15', 1, '2018-04-16 08:31:17', '0000-00-00 00:00:00'),
(60, 20, 0, '/home/arpusdajatengpro/public_html/files/berita/', '5d9fea123093c6f5af86bee09e40652e.jpg', '.jpg', '330.73', 1, '2018-04-16 08:31:26', '0000-00-00 00:00:00'),
(61, 20, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'c431c7dfe558973ec6ab4ea15bdf1c22.jpg', '.jpg', '363.72', 1, '2018-04-16 08:31:29', '0000-00-00 00:00:00'),
(62, 20, 0, '/home/arpusdajatengpro/public_html/files/berita/', '4c9bc80afe55de46dd590640a1b7b7b2.jpg', '.jpg', '359.48', 1, '2018-04-16 08:31:37', '0000-00-00 00:00:00'),
(63, 20, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'b49302831d7ce0baf5ca72872fb13383.jpg', '.jpg', '367.41', 1, '2018-04-16 08:31:47', '0000-00-00 00:00:00'),
(64, 20, 0, '/home/arpusdajatengpro/public_html/files/berita/', '9f644182cbb86a068319de66050ba360.jpg', '.jpg', '301.38', 1, '2018-04-16 08:31:51', '0000-00-00 00:00:00'),
(65, 20, 0, '/home/arpusdajatengpro/public_html/files/berita/', '16eac3d97ba00dd0e42cedf1be31a6c3.JPG', '.JPG', '307.73', 1, '2018-04-16 08:31:56', '0000-00-00 00:00:00'),
(66, 21, 1, '/home/arpusdajatengpro/public_html/files/berita/', 'd39f3336757923393834132a849d1a83.jpg', '.jpg', '291.37', 1, '2018-04-17 08:34:52', '0000-00-00 00:00:00'),
(67, 21, 0, '/home/arpusdajatengpro/public_html/files/berita/', '102b08f7998c4e31b933a24fcc2c6131.jpg', '.jpg', '317.69', 1, '2018-04-17 08:36:05', '0000-00-00 00:00:00'),
(68, 21, 0, '/home/arpusdajatengpro/public_html/files/berita/', '948eea28aac45ece42ac681da131409d.jpg', '.jpg', '302.51', 1, '2018-04-17 08:37:02', '0000-00-00 00:00:00'),
(69, 21, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'f479f65b07c8e21a461fc7435552c9a3.jpg', '.jpg', '312.38', 1, '2018-04-17 08:37:06', '0000-00-00 00:00:00'),
(72, 21, 0, '/home/arpusdajatengpro/public_html/files/berita/', '1ba2d96d3604b30436aca9246934be53.jpg', '.jpg', '306.73', 1, '2018-04-17 08:38:53', '0000-00-00 00:00:00'),
(73, 21, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'f02aac89c5c691e3d7a205e31b810d24.jpg', '.jpg', '327.43', 1, '2018-04-17 08:39:05', '0000-00-00 00:00:00'),
(74, 22, 1, '/home/arpusdajatengpro/public_html/files/berita/', 'c7b8e6efa2bc2fe15fd9f40aa80fd96c.jpeg', '.jpeg', '163.74', 14, '2018-05-04 01:41:07', '0000-00-00 00:00:00'),
(75, 22, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'f73788e01742dace4ecd6142e3320eee.jpeg', '.jpeg', '184.27', 14, '2018-05-04 01:41:24', '0000-00-00 00:00:00'),
(76, 22, 0, '/home/arpusdajatengpro/public_html/files/berita/', '13184276b9980f9f1c43d19cf5a31990.jpeg', '.jpeg', '147.29', 14, '2018-05-04 01:41:31', '0000-00-00 00:00:00'),
(77, 22, 0, '/home/arpusdajatengpro/public_html/files/berita/', '7d68d7f12c63bd04d9a5bf85017f037d.jpeg', '.jpeg', '137.13', 14, '2018-05-04 01:41:38', '0000-00-00 00:00:00'),
(78, 22, 0, '/home/arpusdajatengpro/public_html/files/berita/', '813f80c407942dff28bcbf55c3e18d6a.jpeg', '.jpeg', '100.55', 14, '2018-05-04 01:41:48', '0000-00-00 00:00:00'),
(79, 22, 0, '/home/arpusdajatengpro/public_html/files/berita/', '4dd65b7f753f26570caebe3ff4230940.jpeg', '.jpeg', '179.69', 14, '2018-05-04 01:41:51', '0000-00-00 00:00:00'),
(80, 23, 1, '/home/arpusdajatengpro/public_html/files/berita/', 'adee083d9d6738003f88841530134887.JPG', '.JPG', '43.26', 1, '2018-05-07 00:41:54', '0000-00-00 00:00:00'),
(81, 23, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'f739b683ecd57c91fc3968d424b7794b.JPG', '.JPG', '50.18', 1, '2018-05-07 00:41:58', '0000-00-00 00:00:00'),
(82, 23, 0, '/home/arpusdajatengpro/public_html/files/berita/', '1c77f9a4c70b4eba26f83726d2ec4c21.JPG', '.JPG', '42.78', 1, '2018-05-07 00:42:03', '0000-00-00 00:00:00'),
(83, 23, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'b1580189be11d5f2a4fd4b0ad6619c9d.JPG', '.JPG', '37.15', 1, '2018-05-07 00:42:06', '0000-00-00 00:00:00'),
(84, 23, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'df50a783118b9aee1927bc436603e41d.JPG', '.JPG', '40.32', 1, '2018-05-07 00:42:10', '0000-00-00 00:00:00'),
(85, 23, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'b3d0ee6315f4e83590c7c0e5d25197a7.JPG', '.JPG', '36.28', 1, '2018-05-07 00:42:13', '0000-00-00 00:00:00'),
(86, 23, 0, '/home/arpusdajatengpro/public_html/files/berita/', '117563d663629e4cfc2a675db2378f3a.JPG', '.JPG', '41.3', 1, '2018-05-07 00:42:16', '0000-00-00 00:00:00'),
(87, 24, 1, '/home/arpusdajatengpro/public_html/files/berita/', '0e07e7875a8e89f27f1067ae39c53c4c.jpeg', '.jpeg', '128.12', 1, '2018-05-08 03:43:46', '0000-00-00 00:00:00'),
(88, 24, 0, '/home/arpusdajatengpro/public_html/files/berita/', '92237f0bb4dcf8d8272a4414c3ef03d9.jpeg', '.jpeg', '126.09', 1, '2018-05-08 03:43:51', '0000-00-00 00:00:00'),
(90, 24, 0, '/home/arpusdajatengpro/public_html/files/berita/', '8f3c28168f16990d74ece69d63927d68.jpeg', '.jpeg', '118.86', 1, '2018-05-08 03:43:59', '0000-00-00 00:00:00'),
(92, 24, 0, '/home/arpusdajatengpro/public_html/files/berita/', '3131c2b858aa36f850ca9639a30f3cd3.jpeg', '.jpeg', '120.24', 1, '2018-05-08 03:44:08', '0000-00-00 00:00:00'),
(109, 25, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'c2e810053b1f89210f99e0ef603b5723.jpg', '.jpg', '1342.75', 1, '2018-05-09 06:51:31', '0000-00-00 00:00:00'),
(110, 25, 1, '/home/arpusdajatengpro/public_html/files/berita/', 'b0475e56c72b5d7becf7f6e6caecb04a.jpg', '.jpg', '2711.58', 1, '2018-05-09 06:51:39', '0000-00-00 00:00:00'),
(111, 25, 0, '/home/arpusdajatengpro/public_html/files/berita/', '8926334e45edd04482944e1a1ac79678.jpg', '.jpg', '2108.03', 1, '2018-05-09 06:51:46', '0000-00-00 00:00:00'),
(112, 25, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'bdad25e8128ce8ed6c873bee6c3c1734.jpg', '.jpg', '1847.25', 1, '2018-05-09 06:51:54', '0000-00-00 00:00:00'),
(113, 25, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'a9e98995b615081cc115aec687516fa6.jpg', '.jpg', '2034.87', 1, '2018-05-09 06:52:02', '0000-00-00 00:00:00'),
(114, 25, 0, '/home/arpusdajatengpro/public_html/files/berita/', '3de290f8376b8363d26371d9fe66768b.jpg', '.jpg', '1788.27', 1, '2018-05-09 06:52:07', '0000-00-00 00:00:00'),
(115, 25, 0, '/home/arpusdajatengpro/public_html/files/berita/', '092f8017995bda8bad0d4fa7dcad3b29.jpg', '.jpg', '1737.44', 1, '2018-05-09 06:52:11', '0000-00-00 00:00:00'),
(116, 25, 0, '/home/arpusdajatengpro/public_html/files/berita/', '6d49341eda9f19e05e2a986966221e4e.jpg', '.jpg', '1847.1', 1, '2018-05-09 06:52:15', '0000-00-00 00:00:00'),
(117, 25, 0, '/home/arpusdajatengpro/public_html/files/berita/', '83305aa564cca747ccf5a32fcd043852.jpg', '.jpg', '2717.2', 1, '2018-05-09 06:52:19', '0000-00-00 00:00:00'),
(118, 25, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'd74fea1119cfcdfa5405165451d8fbdc.jpg', '.jpg', '1655.42', 1, '2018-05-09 06:52:24', '0000-00-00 00:00:00'),
(119, 25, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'abfed7b6c0ddb0b80f3714f754434598.jpg', '.jpg', '3244.88', 1, '2018-05-09 06:52:28', '0000-00-00 00:00:00'),
(120, 25, 0, '/home/arpusdajatengpro/public_html/files/berita/', '8cee91ffe5db818c8db91a1fb0144f0e.jpg', '.jpg', '2025.72', 1, '2018-05-09 06:52:32', '0000-00-00 00:00:00'),
(121, 25, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'f94551d0a19d13cb50bf5d73ba923b82.jpg', '.jpg', '2310.14', 1, '2018-05-09 06:52:41', '0000-00-00 00:00:00'),
(122, 25, 0, '/home/arpusdajatengpro/public_html/files/berita/', '943be493a659df6238539549deb372ec.jpg', '.jpg', '2439.85', 1, '2018-05-09 06:52:46', '0000-00-00 00:00:00'),
(123, 25, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'c2b9da1b91f8c6151f954ddcebe09fcb.jpg', '.jpg', '1378.61', 1, '2018-05-09 06:52:50', '0000-00-00 00:00:00'),
(124, 26, 1, '/home/arpusdajatengpro/public_html/files/berita/', '6eb047ab527dd1952aeac36d954dbf9b.jpeg', '.jpeg', '128.12', 1, '2018-05-09 07:23:59', '0000-00-00 00:00:00'),
(125, 26, 0, '/home/arpusdajatengpro/public_html/files/berita/', '1485fbe981913997dd2cc3d30dbf036e.jpeg', '.jpeg', '107.99', 1, '2018-05-09 07:24:02', '0000-00-00 00:00:00'),
(126, 26, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'f4b11d01af1c8d3cb21dbc8470391967.jpeg', '.jpeg', '99.95', 1, '2018-05-09 07:24:05', '0000-00-00 00:00:00'),
(127, 26, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'a1b3ca3d35c60a05ce21c3dd67971b92.jpeg', '.jpeg', '117.38', 1, '2018-05-09 07:24:08', '0000-00-00 00:00:00'),
(128, 26, 0, '/home/arpusdajatengpro/public_html/files/berita/', '0385baa01b38425eefcf20c21accee71.jpeg', '.jpeg', '128.83', 1, '2018-05-09 07:24:10', '0000-00-00 00:00:00'),
(129, 27, 1, '/home/arpusdajatengpro/public_html/files/berita/', '3a478da6f78df944990a24e52d2daa8a.JPG', '.JPG', '612.02', 1, '2018-05-21 02:53:15', '0000-00-00 00:00:00'),
(130, 27, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'b51e9af6e02d772e67b67dcd5fc36caa.JPG', '.JPG', '649.09', 1, '2018-05-21 02:53:20', '0000-00-00 00:00:00'),
(131, 27, 0, '/home/arpusdajatengpro/public_html/files/berita/', '9e7de526b014e0d99ec2abc21a7b9d1c.JPG', '.JPG', '652.69', 1, '2018-05-21 02:53:23', '0000-00-00 00:00:00'),
(132, 27, 0, '/home/arpusdajatengpro/public_html/files/berita/', '4bc8ba19bd30f5678887ad6f4c3edcd0.JPG', '.JPG', '662.59', 1, '2018-05-21 02:53:27', '0000-00-00 00:00:00'),
(133, 27, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'b84c304179c6200c6ffc54d0618522fa.JPG', '.JPG', '736.41', 1, '2018-05-21 02:53:31', '0000-00-00 00:00:00'),
(134, 27, 0, '/home/arpusdajatengpro/public_html/files/berita/', '740dc79d8406c4080395b52193de6625.JPG', '.JPG', '696.42', 1, '2018-05-21 02:53:34', '0000-00-00 00:00:00'),
(135, 28, 1, '/home/arpusdajatengpro/public_html/files/berita/', '354ca2f538149c6f3a2aa1af1f544df6.jpeg', '.jpeg', '145.92', 14, '2018-07-05 00:18:46', NULL),
(136, 28, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'e11909aba63dd8f54cb50641060866cd.jpeg', '.jpeg', '153.23', 14, '2018-07-05 00:19:24', NULL),
(137, 28, 0, '/home/arpusdajatengpro/public_html/files/berita/', '8891c37454900f60b8e2ad4de6b7c754.jpeg', '.jpeg', '222.12', 14, '2018-07-05 00:19:27', NULL),
(138, 29, 1, '/home/arpusdajatengpro/public_html/files/berita/', '39f6885e98057154c9807aee8657250e.jpeg', '.jpeg', '85.29', 14, '2018-07-06 13:29:10', NULL),
(139, 29, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'f9f70d38b7b1e51a3897c10dbf627755.jpeg', '.jpeg', '123.82', 14, '2018-07-06 13:29:17', NULL),
(140, 29, 0, '/home/arpusdajatengpro/public_html/files/berita/', '9d6dcebe1ad87e4940a3981a33b67bb7.jpeg', '.jpeg', '69.13', 14, '2018-07-06 13:29:27', NULL),
(141, 29, 0, '/home/arpusdajatengpro/public_html/files/berita/', '31038b7654348d2f1c2bcb36d9c36cf3.jpeg', '.jpeg', '34.74', 14, '2018-07-06 13:30:30', NULL),
(142, 30, 1, '/home/arpusdajatengpro/public_html/files/berita/', '3f7bf65f6fdf05ea3aaa62e5e2ee349a.JPG', '.JPG', '457.72', 14, '2018-07-16 07:48:18', NULL),
(143, 30, 0, '/home/arpusdajatengpro/public_html/files/berita/', '49adc0737ab91a4ab729654b8e8c9e3e.JPG', '.JPG', '374.56', 14, '2018-07-16 07:48:34', NULL),
(144, 30, 0, '/home/arpusdajatengpro/public_html/files/berita/', '6cd2fb5eccd8347227dbe8077b1b273b.JPG', '.JPG', '404.78', 14, '2018-07-16 07:48:39', NULL),
(145, 30, 0, '/home/arpusdajatengpro/public_html/files/berita/', '6a2e8cbf42e5c7ac149aad239cf82aaa.JPG', '.JPG', '378.33', 14, '2018-07-16 07:48:44', NULL),
(146, 30, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'b4e97ce79dffd8ecc9efe031bb2f176a.JPG', '.JPG', '436.57', 14, '2018-07-16 07:48:48', NULL),
(147, 30, 0, '/home/arpusdajatengpro/public_html/files/berita/', '550a0db60512f4fb1568e3a946a4afcc.JPG', '.JPG', '358.8', 14, '2018-07-16 07:48:52', NULL),
(148, 30, 0, '/home/arpusdajatengpro/public_html/files/berita/', '59dd39897afb8fef3548b561bda0386c.JPG', '.JPG', '379.69', 14, '2018-07-16 07:48:56', NULL),
(151, 30, 0, '/home/arpusdajatengpro/public_html/files/berita/', '0fd9eb0d24e3699b7df2ae0e1fab062c.JPG', '.JPG', '400.94', 14, '2018-07-16 07:50:24', NULL),
(152, 30, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'ab87be712d98cfb90505f53cdfd89183.JPG', '.JPG', '480.56', 14, '2018-07-16 07:50:30', NULL),
(153, 31, 1, '/home/arpusdajatengpro/public_html/files/berita/', '2ccc5a2543cb7f2c90c05bcd05c44f9d.jpg', '.jpg', '380.65', 14, '2018-07-19 02:24:56', NULL),
(154, 31, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'df897b0357188a2af87476979c8aa065.jpg', '.jpg', '408.12', 14, '2018-07-19 02:25:02', NULL),
(155, 31, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'f0dae7ca8c2d1b526d9fa317fd14bec5.jpg', '.jpg', '418.04', 14, '2018-07-19 02:25:07', NULL),
(156, 31, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'c562051e170b5e187136e80c65d85ee9.jpg', '.jpg', '395.98', 14, '2018-07-19 02:25:13', NULL),
(157, 31, 0, '/home/arpusdajatengpro/public_html/files/berita/', '0b94677be542cd4f9083278f72307dd4.jpg', '.jpg', '398.35', 14, '2018-07-19 02:25:18', NULL),
(158, 31, 0, '/home/arpusdajatengpro/public_html/files/berita/', '3e82924552038e59484a6a15ffca406f.jpg', '.jpg', '413.82', 14, '2018-07-19 02:25:42', NULL),
(159, 32, 1, '/home/arpusdajatengpro/public_html/files/berita/', '4e7f4ba2ca9474466da5faed02b68406.jpeg', '.jpeg', '105.41', 1, '2018-07-31 01:11:45', NULL),
(160, 33, 1, '/home/arpusdajatengpro/public_html/files/berita/', '69fbce99f585db826dd450aa4fa50c8d.jpg', '.jpg', '515.84', 1, '2018-07-31 02:00:56', NULL),
(161, 33, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'f955e01cb07f8963f3347c09376ac386.jpg', '.jpg', '397.86', 1, '2018-07-31 02:01:03', NULL),
(162, 33, 0, '/home/arpusdajatengpro/public_html/files/berita/', '29f11316360a90b08bd363d1834315ca.jpg', '.jpg', '496.48', 1, '2018-07-31 02:01:08', NULL),
(163, 33, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'ee7057b710fbfaead5a334d629d82af4.jpg', '.jpg', '571.04', 1, '2018-07-31 02:01:13', NULL),
(164, 33, 0, '/home/arpusdajatengpro/public_html/files/berita/', '6e077f74fb8f980fea8d6b65a5ff8061.jpg', '.jpg', '536.23', 1, '2018-07-31 02:01:19', NULL),
(165, 33, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'e2ff26180aea70e85173dbb2b4aace0a.jpg', '.jpg', '497.75', 1, '2018-07-31 02:01:24', NULL),
(166, 33, 0, '/home/arpusdajatengpro/public_html/files/berita/', '8e6ddcefe3c891089a623dc2923c1f49.jpg', '.jpg', '447.75', 1, '2018-07-31 02:01:32', NULL),
(167, 33, 0, '/home/arpusdajatengpro/public_html/files/berita/', '06fc781a40778947d594c65054732905.jpg', '.jpg', '442', 1, '2018-07-31 02:01:38', NULL),
(168, 33, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'f738e05d62319c643e96c77e982097e8.jpg', '.jpg', '460.26', 1, '2018-07-31 02:01:43', NULL),
(169, 33, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'bacfce929690925db1cf5b92769751a6.jpg', '.jpg', '465.39', 1, '2018-07-31 02:01:48', NULL),
(170, 34, 1, '/home/arpusdajatengpro/public_html/files/berita/', '697cdc43683a3adcee341602d71c767a.JPG', '.JPG', '421.83', 1, '2018-08-08 08:27:53', NULL),
(171, 34, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'dee68a21d3b4ac2001811d32a0d8695a.JPG', '.JPG', '425.29', 1, '2018-08-08 08:28:00', NULL),
(172, 34, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'bd49e90d189fc33d2df1b51a16fba86c.JPG', '.JPG', '473.3', 1, '2018-08-08 08:28:05', NULL),
(173, 34, 0, '/home/arpusdajatengpro/public_html/files/berita/', '27db46f28710256610f1dcab3fb374fc.JPG', '.JPG', '528', 1, '2018-08-08 08:28:12', NULL),
(174, 34, 0, '/home/arpusdajatengpro/public_html/files/berita/', '5153a80e0620187e541db12fbeb806da.JPG', '.JPG', '445.01', 1, '2018-08-08 08:28:19', NULL),
(175, 34, 0, '/home/arpusdajatengpro/public_html/files/berita/', '2ff306a76be7b80b87a300585c6348ec.JPG', '.JPG', '443.57', 1, '2018-08-08 08:28:26', NULL),
(176, 34, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'd35bbc9e774fe46cdbcaa9c610830713.JPG', '.JPG', '409.82', 1, '2018-08-08 08:28:34', NULL),
(177, 34, 0, '/home/arpusdajatengpro/public_html/files/berita/', '4822170fe867be6b53aaf4f4b6e6f568.JPG', '.JPG', '417.33', 1, '2018-08-08 08:28:40', NULL),
(178, 34, 0, '/home/arpusdajatengpro/public_html/files/berita/', '8a131023d1c67f46514c96b2c3d95c47.JPG', '.JPG', '421.99', 1, '2018-08-08 08:28:47', NULL),
(179, 34, 0, '/home/arpusdajatengpro/public_html/files/berita/', '4de2b12635a56b97410ed9d8ff0b1fe8.JPG', '.JPG', '418.92', 1, '2018-08-08 08:28:55', NULL),
(180, 34, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'be8336621de7f37244d7aab8985f6113.JPG', '.JPG', '370.79', 1, '2018-08-08 08:29:01', NULL),
(181, 34, 0, '/home/arpusdajatengpro/public_html/files/berita/', '782f12d63f038002e7fb3957ede97ef1.JPG', '.JPG', '435.22', 1, '2018-08-08 08:29:08', NULL),
(182, 34, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'b486bd3f76f8e8b3655f6418e1fcac65.JPG', '.JPG', '474.42', 1, '2018-08-08 08:29:15', NULL),
(184, 34, 0, '/home/arpusdajatengpro/public_html/files/berita/', 'b09d870161adef2395597fee8408289c.JPG', '.JPG', '461.28', 1, '2018-08-08 08:29:49', NULL),
(185, 34, 0, '/home/arpusdajatengpro/public_html/files/berita/', '79cf25196c5abf0a2609df949151efb9.JPG', '.JPG', '411.49', 1, '2018-08-08 08:29:59', NULL),
(186, 34, 0, '/home/arpusdajatengpro/public_html/files/berita/', '9cb9fcc976297cfc968c477087b17980.JPG', '.JPG', '437.12', 1, '2018-08-08 08:30:07', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_jenis`
--

CREATE TABLE `berita_jenis` (
  `id_berita_jenis` int(11) NOT NULL,
  `nama_berita` text,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita_jenis`
--

INSERT INTO `berita_jenis` (`id_berita_jenis`, `nama_berita`, `created`, `updated`) VALUES
(1, 'Pengumuman ', '2018-01-26 13:58:00', NULL),
(2, 'serba serbi', '2018-01-26 13:58:15', NULL),
(3, 'penghargaan', '2018-01-26 13:58:30', NULL),
(4, 'utama', '2018-01-26 13:59:00', NULL),
(5, 'kegiatan', '2018-01-26 13:59:50', NULL),
(6, 'Informasi Terbaru', '2018-01-29 07:54:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `id` int(11) NOT NULL,
  `bidang` text,
  `deskripsi` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`id`, `bidang`, `deskripsi`, `created`, `updated`) VALUES
(1, 'SEKRETARIAT', '', NULL, NULL),
(2, 'PEMBINAAN, PENGEMBANGAN DAN PENGAWASAN KEARSIPAN', '', NULL, NULL),
(3, 'PENGELOLAAN DAN PELESTARIAN ARSIP', '', NULL, NULL),
(4, 'LAYANAN DAN PEMANFAATAN ARSIP', '', NULL, NULL),
(5, 'DEPOSIT DAN PENGOLAHAN BAHAN PERPUSTAKAAN', '', NULL, NULL),
(6, 'PENGEMBANGAN PERPUSTAKAAN', '', NULL, NULL),
(7, 'UPT PERPUSTAKAAN', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tampil` int(11) DEFAULT NULL,
  `file_path` text NOT NULL,
  `file_name` text NOT NULL,
  `file_ekstention` varchar(10) NOT NULL,
  `file_size` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `carousel`
--

INSERT INTO `carousel` (`id`, `judul`, `deskripsi`, `tampil`, `file_path`, `file_name`, `file_ekstention`, `file_size`, `user_id`, `created`, `updated`) VALUES
(12, 'Temu Arsiparis Se-Jawa Tengah Tahun 2018', 'Tema Kegiatan ini adalah Peningkatan Kompetensi dalam Mewujudkan Profesional Arsiparis.', NULL, '/home/arpusdajatengpro/public_html/files/carousel/', '08470cb8e4ccf12ac67158d940aba0d8.jpeg', '.jpeg', '156.69', 1, '2018-03-17 04:45:22', NULL),
(14, 'Rapat Koordinasi Sikronisasi Program dan Kegiatan Tahun 2018', '-', NULL, '/home/arpusdajatengpro/public_html/files/carousel/', '64bc9e4c85d7927bb7df9416d00c4d28.JPG', '.JPG', '392.11', 1, '2018-03-17 04:58:34', '2018-03-17 05:00:18'),
(15, 'Perpustakaan Digital Jawa Tengah - iJateng -', 'Dapat anda unduh di Google Play Store untuk pengguna android dan ijateng.id bagi pengguna desktop', NULL, '/home/arpusdajatengpro/public_html/files/carousel/', '517705e4566841ce17e7993b2f921e0a.PNG', '.PNG', '291.13', 1, '2018-03-21 00:24:30', NULL),
(18, 'Pembukaan Expo Perpustakaan dan Festival Sejuta Buku', 'Pembukaan pameran di Gedung Wanita Semarang dari 9 s.d 15 Mei 2018', NULL, '/home/arpusdajatengpro/public_html/files/carousel/', '72cb5b9de5206ac14c1ba899a1646667.jpg', '.jpg', '2310.14', 1, '2018-05-09 07:10:04', NULL),
(22, 'Talkshow Duta Baca Indonesia Tahun 2018', 'Membentuk Generasi Milenial Dengan Membaca', NULL, '/home/arpusdajatengpro/public_html/files/carousel/', 'ca9fd7d2d7b8bce9cf34709f4a257bb3.JPG', '.JPG', '529.82', 1, '2018-08-02 02:49:57', NULL),
(23, 'Bantuan Mobil Perpustakaan Digital Keliling', 'Mobil perpustakaan keliling ini merupakan bantuan dari Rotary District 3420.', NULL, '/home/arpusdajatengpro/public_html/files/carousel/', '7a7542074de8a03b04a72345763c2744.JPG', '.JPG', '442.73', 1, '2018-08-16 00:19:07', '2018-08-16 00:19:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) DEFAULT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `demo_user_address`
--

CREATE TABLE `demo_user_address` (
  `uadd_id` int(11) NOT NULL,
  `uadd_uacc_fk` int(11) NOT NULL DEFAULT '0',
  `uadd_alias` varchar(50) NOT NULL DEFAULT '',
  `uadd_recipient` varchar(100) NOT NULL DEFAULT '',
  `uadd_phone` varchar(25) NOT NULL DEFAULT '',
  `uadd_company` varchar(75) NOT NULL DEFAULT '',
  `uadd_address_01` varchar(100) NOT NULL DEFAULT '',
  `uadd_address_02` varchar(100) NOT NULL DEFAULT '',
  `uadd_city` varchar(50) NOT NULL DEFAULT '',
  `uadd_county` varchar(50) NOT NULL DEFAULT '',
  `uadd_post_code` varchar(25) NOT NULL DEFAULT '',
  `uadd_country` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `demo_user_profiles`
--

CREATE TABLE `demo_user_profiles` (
  `upro_id` int(11) NOT NULL,
  `upro_uacc_fk` int(11) NOT NULL DEFAULT '0',
  `upro_company` varchar(50) NOT NULL DEFAULT '',
  `upro_first_name` varchar(50) NOT NULL DEFAULT '',
  `upro_last_name` varchar(50) NOT NULL DEFAULT '',
  `upro_phone` varchar(25) NOT NULL DEFAULT '',
  `upro_newsletter` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `demo_user_profiles`
--

INSERT INTO `demo_user_profiles` (`upro_id`, `upro_uacc_fk`, `upro_company`, `upro_first_name`, `upro_last_name`, `upro_phone`, `upro_newsletter`) VALUES
(1, 1, '', 'andreas', 'Ade', '085641505576', 0),
(22, 21, '', 'tatang', '', '', 0),
(23, 22, '', 'irawan', '', '', 0),
(24, 23, '', 'putri', '', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `download_macam` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `file_path` text,
  `file_name` text,
  `file_ekstenstion` varchar(100) DEFAULT NULL,
  `file_size` varchar(100) NOT NULL,
  `n_download` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`id`, `download_macam`, `id_bidang`, `nama`, `deskripsi`, `file_path`, `file_name`, `file_ekstenstion`, `file_size`, `n_download`, `user_id`, `created`, `updated`) VALUES
(10, 24, 1, 'Rakor Sinkronisasi Program Kegiatan Tahun 2018', '-', '/home/arpusdajatengpro/public_html/files/download/', '002dae78931f83107466f5fa7f18e615.rar', '.rar', '25948.79', 56, 1, '2018-03-17 04:09:49', NULL),
(12, 27, 6, 'Pengumuman Lomba Perpustakaan Umum Desa Kelurahan dan Perpustakaan Sekolah', '6 Nominasi Lomba Perpustakaan', '/home/arpusdajatengpro/public_html/files/download/', 'b6006f70ba71290e8ec938205fe3eb07.pdf', NULL, '227.4', 259, 1, '2018-04-06 02:21:32', '2018-04-12 08:44:27'),
(13, 32, 4, 'Pedoman Layanan Arsip', '-', '/home/arpusdajatengpro/public_html/files/download/', 'fe2a61ef8a167483f78ccb23980a44be.pdf', '.pdf', '1138.66', 11, 1, '2018-04-06 02:46:06', NULL),
(14, 32, 4, 'Pedoman Pengelolaan Arsip Statis', '-', '/home/arpusdajatengpro/public_html/files/download/', '005b7f970ccf1a27703bce93d5f31086.pdf', '.pdf', '1205.23', 16, 1, '2018-04-06 02:47:47', NULL),
(15, 32, 4, 'Pedoman SJIK Aplikasi Arsip Aktif', '-', '/home/arpusdajatengpro/public_html/files/download/', 'cc55fa16e3177b577123a615a4601135.pdf', '.pdf', '1841.76', 18, 1, '2018-04-06 03:06:04', NULL),
(16, 32, 4, 'Pedoman Arsip Elektronik', '-', '/home/arpusdajatengpro/public_html/files/download/', 'dd0dfb0b3bf51423c8beaa26523d4fc5.pdf', '.pdf', '487.39', 8, 1, '2018-04-06 03:06:49', NULL),
(17, 33, 6, 'Pengumuman Lomba Penulisan Artikel Populer', 'Penetapan 12 Terbaik', '/home/arpusdajatengpro/public_html/files/download/', '10c825eec86835fb151b638cdc3f2deb.pdf', '.pdf', '377.87', 73, 1, '2018-04-09 01:01:31', '2018-04-12 08:44:13'),
(18, 29, 2, 'Peraturan Gubernur Jawa Tengah Nomor 19 Tahun 2018', 'Sistem Klasifikasi Keamanan dan Akses Arsip Dinamis Di Lingkungan Pemerintah Provinsi Jawa Tengah', '/home/arpusdajatengpro/public_html/files/download/', '0f721b8cba085a886c452438a8cbdd9d.pdf', '.pdf', '13308.79', 30, 1, '2018-04-12 07:46:44', NULL),
(19, 33, 4, 'Pengumuman Lomba LKD dan Tertib Arsip Desa 2018', '6 Nominasi LKD dan TAD 2018', '/home/arpusdajatengpro/public_html/files/download/', 'bde9043f0da549318902a947df10e9e3.pdf', '.pdf', '254.22', 22, 1, '2018-04-12 07:51:35', NULL),
(20, 28, 1, 'perda nomor 1 tahun 2015', 'penyelenggaraan kearsipan di provinsi jawa tengah', '/home/arpusdajatengpro/public_html/files/download/', '6441c3a1018408c5ae56e6aba0fd0d05.pdf', '.pdf', '230.22', 11, 1, '2018-04-16 01:25:51', NULL),
(21, 29, 1, 'pergub jateng nomor 39 tahun 2016', 'petunjuk pelaksanaan peraturan daerah provinsi jawa tengah nomor 1 tahun 2015 tentang penyelenggaraan kearsipan di provinsi jawa tengah', '/home/arpusdajatengpro/public_html/files/download/', 'f3dd32a0f07e4958d12b71462b3f3c2a.pdf', '.pdf', '3453.2', 18, 1, '2018-04-16 01:27:36', NULL),
(22, 30, 1, 'instruksi gubernur jawa tengah nomor 045/20929/2007', 'pelaksanaan tertib arsip dilingkungan pemerintah provinsi jawa tengah', '/home/arpusdajatengpro/public_html/files/download/', '2613ada0f72f8e2c9a412be8398b161f.pdf', '.pdf', '338.07', 3, 1, '2018-04-16 01:28:41', NULL),
(23, 29, 1, 'pergub jateng nomor 14 tahun 2016', 'jadwal retensi arsip fasilitatif non keuangan dan non kepegawaian dilingkungan pemerintah provinsi jawa tengah', '/home/arpusdajatengpro/public_html/files/download/', 'e60abd74801229c9874fc1424ecb4176.pdf', '.pdf', '4132.72', 11, 1, '2018-04-16 01:30:03', NULL),
(24, 29, 1, 'pergub jateng nomor 90 tahun 2010', 'pedoman pengelolaan arsip vital dilingkungan pemerintah provinsi jawa tengah', '/home/arpusdajatengpro/public_html/files/download/', 'cb77ac1b6bffaf47a7ffc59777d3fe1e.pdf', '.pdf', '1589.72', 6, 1, '2018-04-16 01:30:55', NULL),
(25, 31, 1, 'keputusan gubernur jawa tengah nomor 108 tahun 2003', 'pedoman penataan berkas dilingkungan pemerintah provinsi jawa tengah', '/home/arpusdajatengpro/public_html/files/download/', '840f2590bdc95e02ac2dd74454ca4e64.pdf', '.pdf', '1998.93', 4, 1, '2018-04-16 01:32:34', NULL),
(26, 31, 1, 'keputusan gubernur jawa tengah nomor 109 tahun 2003', 'pedoman pengurusan surat dilingkungan pemerintah provinsi jawa tengah', '/home/arpusdajatengpro/public_html/files/download/', '3d32cbe8a8fd4969b019467e4dfea390.pdf', '.pdf', '2514.82', 15, 1, '2018-04-16 01:33:27', NULL),
(27, 31, 1, 'keputusan gubernur jawa tengah nomor 110 tahun 2003', 'pedoman perawatan arsip dilingkungan pemerintah provinsi jawa tengah', '/home/arpusdajatengpro/public_html/files/download/', '942d55da83632e1103912561df39f0af.pdf', '.pdf', '1574.21', 1, 1, '2018-04-16 01:34:08', NULL),
(28, 32, 0, 'pedoman layanan arsip', 'pedoman layanan arsip dilingkungan badan arsip daerah propinsi jawa tengah', '/home/arpusdajatengpro/public_html/files/download/', '1b7c4f4a196e1b613d9179200267e756.pdf', '.pdf', '1138.66', 1, 1, '2018-04-16 01:36:00', '2018-04-16 01:36:47'),
(29, 32, 1, 'pedoman pengolahan arsip statis', 'pedoman pengolahan arsip statis dilingkungan pemerintah provinsi jawa tengah', '/home/arpusdajatengpro/public_html/files/download/', 'fd0727a08ef7ff4dcd27d5558f98aa05.pdf', '.pdf', '1205.23', 14, 1, '2018-04-16 01:37:31', NULL),
(30, 32, 1, 'pedoman jaringan informasi kearsipan aplikasi arsip aktif', '-', '/home/arpusdajatengpro/public_html/files/download/', '689c9bbe8a9888123a87b7c2f703d7bc.pdf', '.pdf', '1841.76', 7, 1, '2018-04-16 01:39:06', NULL),
(31, 28, 7, 'perda provinsi jawa tengah nomor 1 tahun 2014', 'penyelenggaraan perpustakaan di provinsi jawa tengah', '/home/arpusdajatengpro/public_html/files/download/', '7a25b3dda714a5db544038ee1e49abc3.pdf', '.pdf', '3967.74', 4, 1, '2018-04-16 01:39:50', NULL),
(32, 29, 1, 'pergub jateng nomor 15 tahun 2014', 'jadwal retensi arsip kepegawaian pegawai negeri sipil dan pejabat negara dilingkungan pemerintah provinsi jawa tengah', '/home/arpusdajatengpro/public_html/files/download/', 'd7e4b032076e7e50c710c197b3be7d31.pdf', '.pdf', '1713.04', 9, 1, '2018-04-16 01:41:13', NULL),
(33, 29, 1, 'pergub jateng nomor 53 tahun 2012', 'pedoman klasifikasi arsip dilingkungan pemerintah provinsi jawa tengah', '/home/arpusdajatengpro/public_html/files/download/', '4b69b261ad8d3eee4aaa0c869fbe1aca.pdf', '.pdf', '5385.93', 46, 1, '2018-04-16 01:42:44', NULL),
(34, 29, 1, 'pergub jateng nomor 54 tahun 2012 ', 'pedoman penyusutan arsip pada skpd / bumd provinsi jawa tengah', '/home/arpusdajatengpro/public_html/files/download/', 'e21d6d4323647f8e437c19b67dd15c5e.pdf', '.pdf', '1477.22', 12, 1, '2018-04-16 01:43:43', NULL),
(35, 29, 1, 'pergub jateng nomor 81 tahun 2007', 'jadwal retensi arsip keuangan dilingkungan pemerintah provinsi jawa tengah', '/home/arpusdajatengpro/public_html/files/download/', 'a1f7d34faae13a53fe106ca2e935e17a.pdf', '.pdf', '1518.84', 15, 1, '2018-04-16 01:44:23', NULL),
(36, 31, 1, 'keputusan gubernur jawa tengah nomor 74 tahun 2004', 'pedoman penggunaan sarana penyimpanan arsip dilingkungan pemerintah provinsi jawa tengah', '/home/arpusdajatengpro/public_html/files/download/', '675032d811a671b45cdc47de2a79bed5.pdf', '.pdf', '1300.65', 21, 1, '2018-04-16 01:45:17', NULL),
(37, 31, 1, 'keputusan presiden nomor 105 tahun 2004', 'pengelolaan arsip statis', '/home/arpusdajatengpro/public_html/files/download/', 'e80d2e60f001c11e16cca6f173e7c9fd.pdf', '.pdf', '121.68', 13, 1, '2018-04-16 01:47:25', NULL),
(38, 34, 1, 'undang undang nomor 43 tahun 2009', 'kearsipan', '/home/arpusdajatengpro/public_html/files/download/', '41b1b4b437d5f307e48a7aa2d568ad46.pdf', '.pdf', '224.47', 6, 1, '2018-04-16 01:48:29', NULL),
(39, 26, 2, 'Pertemuan Anggota Jaringan SKD', 'File Paparan Audit Kearsipan Internal', '/home/arpusdajatengpro/public_html/files/download/', 'a134b3b315965bae9b28d7b9b5a1da97.ppt', '.ppt', '3700.5', 31, 1, '2018-05-14 04:02:39', NULL),
(48, 33, 4, 'Pengumuman Lomba LKD dan Tertib Arsip Desa 2018 - 2', 'Pengumuman Akhir Lomba LKD Dan Tertib Arsip Desa 2018', '/home/arpusdajatengpro/public_html/files/download/', '568fbaee108025ea46ed54ee7ec650d7.pdf', '.pdf', '365.26', 8, 1, '2018-05-30 02:17:58', NULL),
(49, 27, 6, 'Pengumuman Lomba Perpustakaan Umum Desa Kelurahan Dan Perpustakaan Sekolah - 2', 'Pengumuman Akhir Lomba Perpustakaan Umum Desa Kelurahan Dan Perpustakaan Sekolah', '/home/arpusdajatengpro/public_html/files/download/', '6d9a04cdb5c149cb40158468f4780761.pdf', '.pdf', '616.92', 29, 1, '2018-05-30 02:21:33', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `download_jenis`
--

CREATE TABLE `download_jenis` (
  `id` int(11) NOT NULL,
  `nama` text,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `download_jenis`
--

INSERT INTO `download_jenis` (`id`, `nama`, `created`, `updated`) VALUES
(1, 'peraturan', '2018-01-26 13:58:00', NULL),
(2, 'materi', '2018-01-26 13:58:15', NULL),
(3, 'Lomba', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `download_macam`
--

CREATE TABLE `download_macam` (
  `id_download_macam` tinyint(4) NOT NULL,
  `id_download_jenis` int(11) NOT NULL,
  `nama_jenis_peraturan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `download_macam`
--

INSERT INTO `download_macam` (`id_download_macam`, `id_download_jenis`, `nama_jenis_peraturan`) VALUES
(24, 2, 'rakor'),
(25, 2, 'bimtek'),
(26, 2, 'sosialisasi'),
(27, 3, 'Lomba Perpustakaan'),
(28, 1, 'Perda'),
(29, 1, 'Pergub'),
(30, 1, 'Instruksi'),
(31, 1, 'keputusan'),
(32, 1, 'Pedoman'),
(33, 3, 'Lomba Arsip'),
(34, 1, 'undang undang');

-- --------------------------------------------------------

--
-- Stand-in structure for view `dtberita`
--
CREATE TABLE `dtberita` (
`id_berita` int(11)
,`id_berita_jenis` int(11)
,`id_bidang` int(11)
,`judul` text
,`slug` text
,`isi` text
,`n_read` int(11)
,`n_comment` int(11)
,`user_id` int(11)
,`created` datetime
,`updated` datetime
,`jenis_berita` text
,`username` varchar(25)
,`angkahari` int(2)
,`hari` varchar(9)
,`bulan` varchar(9)
,`tahun` int(4)
,`tanggalan` varchar(17)
,`bidang` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dtcarousel`
--
CREATE TABLE `dtcarousel` (
`id` int(11)
,`judul` text
,`deskripsi` text
,`tampil` int(11)
,`file_path` text
,`file_name` text
,`file_ekstention` varchar(10)
,`file_size` varchar(255)
,`user_id` int(11)
,`created` datetime
,`updated` datetime
,`user` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dtdownload`
--
CREATE TABLE `dtdownload` (
`id` int(11)
,`download_macam` int(11)
,`id_bidang` int(11)
,`nama` varchar(255)
,`deskripsi` text
,`file_path` text
,`file_name` text
,`file_ekstenstion` varchar(100)
,`file_size` varchar(100)
,`n_download` int(11)
,`user_id` int(11)
,`created` datetime
,`updated` datetime
,`hari` varchar(9)
,`bulan` varchar(9)
,`tahun` int(4)
,`tanggalan` varchar(17)
,`user` varchar(25)
,`nama_download_jenis` varchar(30)
,`nama_bidang` text
,`download_jenis` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dtgaleri`
--
CREATE TABLE `dtgaleri` (
`id` int(11)
,`judul` text
,`deskripsi` text
,`tampil` int(11)
,`file_path` text
,`file_name` text
,`file_ekstention` varchar(10)
,`file_size` varchar(255)
,`user_id` int(11)
,`created` datetime
,`updated` datetime
,`user` varchar(25)
,`id_album` int(11)
,`album` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dtjadwal_kegiatan`
--
CREATE TABLE `dtjadwal_kegiatan` (
`id` int(11)
,`nama` varchar(255)
,`tanggalan` varchar(17)
,`tanggalan_upload` varchar(17)
,`namabulan` varchar(9)
,`numberbulan` int(2)
,`username` varchar(25)
,`id_bidang` int(11)
,`bidang` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dtlink_terkait`
--
CREATE TABLE `dtlink_terkait` (
`id` int(11)
,`tampil` int(11)
,`link` text
,`deskripsi` text
,`file_path` text
,`file_name` text
,`file_ekstention` varchar(10)
,`file_size` varchar(255)
,`user_id` int(11)
,`created` datetime
,`updated` datetime
,`hari` varchar(9)
,`bulan` varchar(9)
,`tahun` int(4)
,`tanggalan` varchar(17)
,`user` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dtstatis`
--
CREATE TABLE `dtstatis` (
`id_statis` int(11)
,`id_pencipta_arsip` int(11)
,`id_riwayat` int(11)
,`id_masalah` int(11)
,`id_submasalah` int(11)
,`kode_pelaksana` varchar(255)
,`hasil` varchar(255)
,`id_jenis_naskah` int(11)
,`id_bahasa` int(11)
,`indeks` varchar(255)
,`kurun_waktu` datetime
,`isi` text
,`id_media` int(11)
,`id_tingkat_perkembangan` int(11)
,`file_path` text
,`file_name` text
,`file_size` int(11)
,`file_ekstension` text
,`jumlah_download` int(11)
,`uacc_id` int(11)
,`nama_pencipta` varchar(255)
,`judul_riwayat` varchar(255)
,`nama_masalah` varchar(255)
,`nama_submasalah` varchar(255)
,`uacc_username` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dtuser`
--
CREATE TABLE `dtuser` (
`uacc_id` int(11) unsigned
,`uacc_group_fk` smallint(5) unsigned
,`uacc_email` varchar(100)
,`uacc_username` varchar(25)
,`uacc_password` varchar(60)
,`uacc_ip_address` varchar(40)
,`uacc_salt` varchar(40)
,`uacc_activation_token` varchar(40)
,`uacc_forgotten_password_token` varchar(40)
,`uacc_forgotten_password_expire` datetime
,`uacc_update_email_token` varchar(40)
,`uacc_update_email` varchar(100)
,`uacc_active` tinyint(1) unsigned
,`uacc_suspend` tinyint(1) unsigned
,`uacc_fail_login_attempts` smallint(5)
,`uacc_fail_login_ip_address` varchar(40)
,`uacc_date_fail_login_ban` datetime
,`uacc_date_last_login` datetime
,`uacc_date_added` datetime
,`ugrp_id` smallint(5)
,`ugrp_name` varchar(20)
,`ugrp_desc` varchar(100)
,`ugrp_admin` tinyint(1)
,`nama` text
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tampil` int(11) DEFAULT NULL,
  `file_path` text NOT NULL,
  `file_name` text NOT NULL,
  `file_ekstention` varchar(10) NOT NULL,
  `file_size` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `id_album`, `judul`, `deskripsi`, `tampil`, `file_path`, `file_name`, `file_ekstention`, `file_size`, `user_id`, `created`, `updated`) VALUES
(1, 4, 'pak edo bertanya kepada narasumber', 'Dialog pak edo dengan pak prof. dr singgih tri pada tanggal 29 maret 2018 diruangan kadinas', NULL, '/home/arpusdajatengpro/public_html/files/galeri/', 'DSC01530.JPG', '.JPG', '285.35', 1, '2018-03-29 04:26:59', '2018-03-29 04:30:09'),
(2, 4, 'kadinas menjawab pertanyaan', 'dialog antara pak edo, pak masrofi dan pak prof. dr. singgih mengenai arsip adalah identitasku pada tanggal 29 maret 2018 diruangan kadinas', NULL, '/home/arpusdajatengpro/public_html/files/galeri/', 'DSC01542.JPG', '.JPG', '278.15', 1, '2018-03-29 04:27:39', '2018-03-29 04:29:31'),
(3, 4, 'para kabid mendampingi kadinas', 'Para kabid sedang mendampingi kepala dinas melakukan dialog interaktif diruangan kepala dinas pada tanggal 29 maret 2018 diruangan kadinas', NULL, '/home/arpusdajatengpro/public_html/files/galeri/', 'DSC01543.JPG', '.JPG', '352.59', 1, '2018-03-29 04:28:33', '2018-03-29 04:29:36'),
(4, 5, 'Gerakan Literasi', 'petugas sedang bersama dengan pengunjung pameran', NULL, '/home/arpusdajatengpro/public_html/files/galeri/', 'WhatsApp_Image_2018-04-06_at_09.42_.47_.jpeg', '.jpeg', '143.64', 1, '2018-04-06 04:03:13', NULL),
(5, 5, 'Para pengunjung bersama sama melakukan gerakan literasi', '-', NULL, '/home/arpusdajatengpro/public_html/files/galeri/', 'WhatsApp_Image_2018-04-06_at_09.41_.15_.jpeg', '.jpeg', '134.47', 1, '2018-04-06 04:04:20', NULL),
(6, 6, 'Rapat pengendalian', 'bpk kepala dinas memimpin rapat pengendalian dihadiri oleh semua pejabat struktural di lantai 2 dinas arpus', NULL, '/home/arpusdajatengpro/public_html/files/galeri/', 'WhatsApp_Image_2018-04-06_at_10.06_.14_.jpeg', '.jpeg', '117.55', 1, '2018-04-06 04:06:15', NULL),
(7, 7, 'Panitia membagikan instrumen untuk lomba penulisan artikel populer', 'suhardi saat membagikan instrumen untuk lomba penulisan artikel populer di aula lantai 4 dinas arpus', NULL, '/home/arpusdajatengpro/public_html/files/galeri/', 'DSC_0416.JPG', '.JPG', '485.62', 1, '2018-04-13 02:02:25', NULL),
(8, 7, 'Berfoto dengan para pemenang lomba', 'Pustakawan Dinas Arpus berfoto bersama dengan pemenang lomba penulisan artikel populer', NULL, '/home/arpusdajatengpro/public_html/files/galeri/', 'DSC_0514.JPG', '.JPG', '509.89', 1, '2018-04-13 02:03:43', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_album`
--

CREATE TABLE `galeri_album` (
  `id` int(11) NOT NULL,
  `album` text,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri_album`
--

INSERT INTO `galeri_album` (`id`, `album`, `created`, `updated`) VALUES
(4, 'Dialog Interaktif RRI - Arsip adalah Identitasku', NULL, NULL),
(5, 'Pameran Buku Pekalongan', NULL, NULL),
(6, 'Rapat Pengendalian Bulan April', NULL, NULL),
(7, 'Lomba Penulisan Artikel Populer', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_kegiatan`
--

CREATE TABLE `jadwal_kegiatan` (
  `id` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_naskah`
--

CREATE TABLE `jenis_naskah` (
  `id_jenis_naskah` int(11) NOT NULL,
  `nama_naskah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_naskah`
--

INSERT INTO `jenis_naskah` (`id_jenis_naskah`, `nama_naskah`) VALUES
(1, 'Laporan'),
(2, 'Surat'),
(3, 'Daftar'),
(4, 'Surat Edaran'),
(5, 'Gambar'),
(6, 'Berita Acara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `link_terkait`
--

CREATE TABLE `link_terkait` (
  `id` int(11) NOT NULL,
  `tampil` int(11) DEFAULT NULL,
  `link` text NOT NULL,
  `deskripsi` text NOT NULL,
  `file_path` text NOT NULL,
  `file_name` text NOT NULL,
  `file_ekstention` varchar(10) NOT NULL,
  `file_size` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `link_terkait`
--

INSERT INTO `link_terkait` (`id`, `tampil`, `link`, `deskripsi`, `file_path`, `file_name`, `file_ekstention`, `file_size`, `user_id`, `created`, `updated`) VALUES
(3, 1, 'https://jatengprov.go.id', '', 'C:/xampp/htdocs/roorpeg/includes/files/link_terkait/', 'jatengrov.jpg', '.jpg', '24.24', 1, '2018-02-27 17:49:13', '2018-03-02 15:27:16'),
(4, 1, 'https://laporgub.jatengprov.go.id', 'alamat untuk link laporgub', 'C:/xampp/htdocs/roorpeg/includes/files/link_terkait/', 'laporgub.jpg', '.jpg', '17.06', 1, '2018-02-27 18:18:24', '2018-03-02 15:27:23'),
(7, 1, 'https://menpan.go.id', 'link untuk menpan', 'C:/xampp/htdocs/roorpeg/includes/files/link_terkait/', 'menpan.PNG', '.PNG', '8.1', 1, '2018-03-04 17:41:29', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `masalah`
--

CREATE TABLE `masalah` (
  `id_masalah` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama_masalah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masalah`
--

INSERT INTO `masalah` (`id_masalah`, `kode`, `nama_masalah`) VALUES
(1, '01', 'Administrasi'),
(2, '02', 'Umum'),
(3, '03', 'Pengolahan'),
(4, '04', 'Instalasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `nama_media` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `media`
--

INSERT INTO `media` (`id_media`, `nama_media`) VALUES
(1, 'Dokumen'),
(2, 'Audio'),
(3, 'Video'),
(4, 'Elektronik'),
(5, 'Tekstual');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pencipta_arsip`
--

CREATE TABLE `pencipta_arsip` (
  `id_pencipta_arsip` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama_pencipta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pencipta_arsip`
--

INSERT INTO `pencipta_arsip` (`id_pencipta_arsip`, `kode`, `nama_pencipta`) VALUES
(1, '001', 'Rutan Kelas 1 Surakarta'),
(2, '002', 'P.O ESTO'),
(3, '003', 'PG. Mojo Sragen'),
(4, '004', 'Hoofd Provinciale Waterstaat Midden Java (HPW)'),
(5, '005', 'Tweede Waterstaat Te Semarang '),
(6, '006 ', 'Kanwil Deptrans dan PPH Provinsi Jawa Tengah'),
(7, '007', 'Pimpinan Wilayah gerakan Pemuda Ansor Jawa Tengah'),
(8, '008', 'Lembaga Pemasyarakatan Kelas II A Pekalongan'),
(9, '009', 'PG. Sragi Pekalongan'),
(10, '010', 'Kanwil Deppen Prop Jateng'),
(11, '011', 'Kandeptrans dan PPH Magelang'),
(12, '012', 'Tweede Waterstaat Te Semarang 1'),
(13, '013', 'Hoofd Provinciale Waterstaat Midden Java 1'),
(14, '02pg', 'PABRIK GULA BANJARATMA'),
(15, '03pg', 'PABRIK GULA JATIBARANG'),
(16, '1', 'BP7 KENDAL'),
(17, '1000', 'Biro Otda'),
(18, '112', 'HPW 2017'),
(19, '16.1', 'LP Pati'),
(20, '16.2', 'LP Magelang'),
(21, '16.9', 'LP MAGELANG-2'),
(22, '17.1', 'PABRIK GULA (PG) CEPIRING KENDAL'),
(23, '17.3', 'PUSAT REHABILITASI SOSIAL BINA GRAHITA (PRSBG)KARTINI TEMANGGUNG'),
(24, '17.4', 'PIMPINAN WILAYAH NAHDLATUL ULAMA JAWA TENGAH'),
(25, '17.5', 'UNIVERSITAS NEGERI SEMARANG'),
(26, '17.6', 'DIREKTORAT SOSIAL DAN POLITIK DAERAH TINGKAT PROVINSI JAWA TENGAH'),
(27, '17.7', 'PEMERINTAHAN MANGKUNEGARA V'),
(28, '17.8', 'PEMERINTAHAN MANGKUNEGARA VI'),
(29, '17.9', 'PEMERINTAHAN MANGKUNEGARA VII'),
(30, '1710', 'PEMERINTAHAN MANGKUNEGARA VIII'),
(31, '1711', 'KANTOR ARSIP DAERAH PROPINSI JAWA TENGAH'),
(32, '1712', 'BP7 KOTAMADYA TEGAL'),
(33, '1713', 'BP7 KOTAMADYA SEMARANG'),
(34, '1714', 'BIRO OTONOMI DAERAH (I) SETDA PROPINSI JAWA TENGAH'),
(35, '1715', 'BIRO OTONOMI DAERAH (II) SETDA PROPINSI JAWA TENGAH'),
(36, '1716', 'BIRO OTONOMI DAERAH (III) SETDA PROPINSI JAWA TENGAH'),
(37, '1717', 'BIRO OTONOMI DAERAH (IV) SETDA PROPINSI JAWA TENGAH'),
(38, '1718', 'BIRO OTONOMI DAERAH (V) SETDA PROPINSI JAWA TENGAH'),
(39, '1719', 'BIRO HUMAS SETDA PROPINSI JAWA TENGAH'),
(40, '1720', 'BIRO HUKUM SETDA PROPINSI JAWA TENGAH'),
(41, '1721', 'SEKRETARIAT DAERAH PROPINSI JAWA TENGAH'),
(42, '1722', 'KANTOR PERPUSTAKAAN WILAYAH PROPINSI JAWA TENGAH'),
(43, '1723', 'BKPMD (Sekretaris) PROP TK I JATENG'),
(44, '1724', 'BKPMD (Wakil Ketua) PROP TK I JATENG'),
(45, '1725', 'BKPMD (Bidang Perencanaan dan Promosi) PROP TK I JATENG'),
(46, '1726', 'BKPMD (Bidang Perajinan) PROP TK I JATENG'),
(47, '1727', 'BKPMD (Bidang Pengendalian dan Pengawasan) PROP TK I JAWA TENGAH'),
(48, '1728', 'KARESIDENAN SEMARANG'),
(49, '1729', 'LEMBAGA PEMASYARAKATAN WIROGUNAN'),
(50, '1730', 'Kandep Transmigrasi dan PPH Kab. Purworejo'),
(51, '1731', 'KANDEP TRANSMIGRASI DAN PPH KAB. TEMANGGUNG'),
(52, '1732', 'KANDEP TRANSMIGRASI DAN PPH KABUPATEN BOYOLALI'),
(53, '1733', 'KANDEP TRANSMIGRASI DAN PPH KABUPATEN BANJARNEGARA'),
(54, '1734', 'KANDEP TRANSMIGRASI DAN PPH KABUPATEN KEBUMEN'),
(55, '1801', 'BADAN PENELITIAN DAN PENGEMBANGAN PROV. JATENG'),
(56, '1802', 'KANTOR DEPARTEMEN TRANSMIGRASI DAN PPH KABUPATEN MAGELANG'),
(57, '1803', 'KANTOR WILAYAH DEPARTEMEN PENERANGAN PROPINSI JAWA TENGAH'),
(58, '1804', 'KANWIL DEPARTEMEN PEKERJAAN UMUM PROPINSI JAWA TENGAH - Buku 1'),
(59, '1805', 'LEMBAGA PEMASYARAKATAN (LP)AMBARAWA 1950 s.d. 1986'),
(60, '1806', 'SEKRETARIAT DAERAH PROVINSI JAWA TENGAH- Buku 1'),
(61, '1807', 'DPU PENGAIRAN BENGAWAN SOLO KABUPATEN BOYOLALI'),
(62, '1808', 'KANWIL DEPARTEMEN SOSIAL PROPINSI JAWA TENGAH'),
(63, '1809', 'KANWIL DEPARTEMEN PARIWISATA SENI BUDAYA PROPINSI JAWA TENGAH'),
(64, '1810', 'DANWIL DEPARTEMEN KEHUTANAN PROPINSI JAWA TENGAH'),
(65, '202', 'KANDEPKOP MAGELANG'),
(66, '204', 'KANDEPKOP PURWOREJO'),
(67, '205', 'KANDEPKOP WONOGIRI'),
(68, '206', 'KANDEPKOP BLORA'),
(69, '207', 'KANDEPKOP BATANG'),
(70, '208', 'KANDEPKOP TEMANGGUNG'),
(71, '209', 'KANDEPKOP BOYOLALI'),
(72, '23', 'KANDEPKOP REMBANG'),
(73, '30', 'KANDEPKOP TEGAL'),
(74, '300', 'KANDEPKOP KEBUMEN'),
(75, '301', 'KANDEPKOP SURAKARTA'),
(76, '302', 'KANDEPKOP SRAGEN'),
(77, '303', 'KANDEPKOP KLATEN'),
(78, '304', 'KANDEPKOP CILACAP'),
(79, '305', 'KANDEPKOP WONOSOBO'),
(80, '311', 'KANDEPKOP SUKOHARJO'),
(81, '312', 'KANDEPKOP JATENG'),
(82, '313', 'KANDEPKOP JEPARA'),
(83, '316', 'KANDEPKOP PURWOKERTO'),
(84, '317', 'KANDEPKOP SALATIGA'),
(85, '318', 'KANDEPKOP BANJARNEGARA'),
(86, '319', 'KANDEPKOP KARANGANYAR'),
(87, '320', 'KANDEPKOP GROBOGAN'),
(88, '321', 'KANDEPKOP KENDAL'),
(89, '322', 'KANDEPKOP SEMARANG'),
(90, '323', 'KANDEPKOP DEMAK'),
(91, '324', 'KANDEPKOP PURBALINGGA'),
(92, '404', 'KANDEPKOP BANYUMAS'),
(93, 'bp-1', 'BP-7 Propinsi Jawa Tengah'),
(94, 'BP-7', 'BP7 KOTA SEMARANG'),
(95, 'BP.7', 'BP7 Banjarnegara'),
(96, 'bp02', 'BP7 KABUPATEN BATANG 01'),
(97, 'BP7', 'BP7 DEMAK'),
(98, 'bp7s', 'BP7 KAB. SEMARANG'),
(99, 'dew1', 'TrialError'),
(100, 'GS', 'GATOT SUBROTO'),
(101, 'HPW', 'HOOFDEN VAN DEN PROVINCIALENWATER STAAT DIENST VAN MIDDEN JAVA IV (HPW IV)'),
(102, 'HPW2', 'Hoofd Provinciale Waterstaat Midden Java 2'),
(103, 'K-JP', 'DAFTAR INVENTARIS ARSIP KANDEPTRANS JEPARA'),
(104, 'K-KD', 'KANDEPKOP KUDUS'),
(105, 'K-KP', 'KANDEPKOP PEMALANG'),
(106, 'KDB', 'KANDEPKOP KAB.BREBES'),
(107, 'KDP', 'KANDEPKOP KAB. PATI'),
(108, 'KKB', 'KANDEPKOP KAB. BANYUMAS'),
(109, 'KKP', 'KANDEPKOP PEKALONGAN'),
(110, 'PN_M', 'PENGADILAN NEGERI MAGELANG'),
(111, 'R5J', 'RSJD SURAKARTA'),
(112, 'RC', 'RC SOLO'),
(113, 'rsj1', 'Rumah Sakit Jiwa Daerah Surakarta2016'),
(114, 'RSJD', 'Rumah Sakit Jiwa Daerah Surakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_sejarah`
--

CREATE TABLE `profil_sejarah` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil_sejarah`
--

INSERT INTO `profil_sejarah` (`id`, `isi`, `created`, `updated`) VALUES
(1, '<h5><ul style="font-size: 18px;"><li style="text-align: justify;">Embrio kegiatan kearsipan dilaksanakan disebuah gudang kawasan Tambaksari Semarang, berdekatan dengan pelabuhan Tanjung Mas Semarang sebagai gudang penyimpanan arsip</li><li style="text-align: justify;">Tahun 1980 disebut Pusat Arsip Daerah Keputusan Gubernur Kepala Daerah Propinsi Daerah Tingkat I Jawa Tengah Nomor 061/134/1980 tanggal 16 juni 1980 tentang Pembentukan, Susunan Organisasi dan Tata Kerja Arsip Daerah Propinsi Daerah Tingkat I Jawa Tengah</li><li style="text-align: justify;">Tahun 1983 sebagai Pusat Arsip Daerah diresmikan Gubernur Jawa Tengah, Bpk. Soepardjo Rustam pda tanggal 2 April 1983</li><li style="text-align: justify;">Tahun 1988 menjadi Kantor Arsip Daerah sebagai UPD (Unit Perangkat Daerah). Persetujuan Mendagri Nomor 061.1/2464/SJ tanggal 10 Juni 1988 perihal Persetujuan Organisasi dan Keputusan Mendagri Nomor 15 Tahun 1988 tentang Pedoman Pembengukan Organisasi dan Tata Kerja Kantor Arsip Daerah Tk. I Prop. Jawa Tengah di Lingkungan Srondol.</li><li style="text-align: justify;">Tahun 1993 berdiri Perwakilan Arsip Nasional RI di Jawa Tengah atau ANRIWIL Keputusan Presiden Nomor 92 Tahun 1993 tanggal 11 Oktober 1993 tentang Kedudukan, Tugas, Fungsi, Susunan Organisasi, Tata Kerja Arsip Nasional RI dan Keputusan Kepala ANRI Nomor OT.00/290/30/1994 tentang Susunan Organisasi dan Tata Kerja Arsip Nasional RI</li><li style="text-align: justify;">Perwakilan ANRI terletak bersebelahan dengan Kantor Arsip Daerah Tk. I Propinsi Jawa Tengah, yaitu di Srondol.</li><li style="text-align: justify;">Tahun 2001 menjadi Badan Arsip Daerah Provinsi Jawa Tengah, merupakan gabungan dari dua instansi yaitu Arsip Nasional Wilayah (ANRIWIL) Provinsi Jawa Tengah dan Kantor Arsip Daerah (KAD) Provinsi Jawa Tengah berdasarkan Peraturan Daerah (PERDA) No. 8 Tahun 2001 dan Peraturan Daerah No. 4 Tahun 2005 tentang Penyelenggaraan Kearsipan di Provinsi Jawa Tengah.</li><li style="text-align: justify;">Berlaku UU No. 32 Tahun 2004 tentang pemerintahan daerah, maka Tahun 2008 menjadi Badan Arsip Dan Perpustakaan Provinsi Jawa Tengah, merupakan gabungan dari Badan Arsip Daerah Provinsi Jawa Tengah dan Kantor Perpustakaan Daerah Provinsi Jawa Tengah Nomor 7 Tahuun 2008 tanggal 7 Juni 2008 tentang Organisasi dan Tata kerja Badan Perencanaan Pembangunan daerah, Inspektorat, Lembaga Teknis. Hal ini diperkuat dengan Peraturan Gubernur Jawa Tengah Nomor 87 tahun 2008 tentang Penjabaran Tugas Pokok, Fungsi dan Tata Kerja (tupoksi) Badan Arsip Dan Perpustakaan Provinsi Jawa Tengah.</li><li style="text-align: justify;">Tahun 2016 menjadi Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah. Peraturan Gubernur Jawa Tengah nomor 74 Tahun 2016 tanggal 15 Desember 2016 tentang Organisasi dan Tata Kerja Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah</li></ul></h5>', '2018-02-06 04:37:50', '2018-03-14 03:05:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_sotk`
--

CREATE TABLE `profil_sotk` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil_sotk`
--

INSERT INTO `profil_sotk` (`id`, `isi`, `created`, `updated`) VALUES
(1, '<p><span style="font-size:18px"><span style="font-family:nova regular">Struktur Organisasi Dinas Kearsipan Dan Perpustakaan Provinsi Jawa Tengah berdasarkan Peraturan Gubernur&nbsp; Provinsi Jawa Tengah Nomor 74 Tahun 2016 tentang Organisasi dan Tata Kerja Dinas Kearsipan Dan Perpustakaan&nbsp; Provinsi Jawa Tengah sebagai berikut:&nbsp;</span></span></p>\n\n<p><span style="font-size:18px"><span style="font-family:nova regular">Kepala Dinas</span></span></p>\n\n<p><span style="font-size:18px"><span style="font-family:nova regular">Sekretariat :</span></span></p>\n\n<ul>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Sub Bagian Program</span></span></li>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Sub Bagian Umum dan Kepegawaian</span></span></li>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Sub Bagian Keuangan&nbsp;</span></span></li>\n</ul>\n\n<p><span style="font-size:18px"><span style="font-family:nova regular">Bidang Pembinaan Pengembangan dan Pengawasan Kearsipan:</span></span></p>\n\n<ul>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Seksi&nbsp; Pembinaan dan Pengembangan Kearsipan</span></span></li>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Seksi&nbsp; Pengawasan Kearsipan&nbsp;</span></span></li>\n</ul>\n\n<p><span style="font-size:18px"><span style="font-family:nova regular">Bidang Pengelolaan dan Pelestarian Arsip:</span></span></p>\n\n<ul>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Seksi&nbsp; Akuisisi Arsip</span></span></li>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Seksi Pengolahan Arsip</span></span></li>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Seksi Pelestarian Arsip&nbsp;</span></span></li>\n</ul>\n\n<p><span style="font-size:18px"><span style="font-family:nova regular">Bidang Layanan dan Pemanfaatan Arsip:</span></span></p>\n\n<ul>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Seksi Layanan Arsip</span></span></li>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Seksi Pemanfaatan Arsip&nbsp;</span></span></li>\n</ul>\n\n<p><span style="font-size:18px"><span style="font-family:nova regular">Bidang Deposit dan Pengolahan Bahan Perpustakaan:</span></span></p>\n\n<ul>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Seksi Deposit dan Pelestarian Bahan Perpustakaan</span></span></li>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Seksi Akuisisi dan Pengolahan bahan Perpustakaan&nbsp;</span></span></li>\n</ul>\n\n<p><span style="font-size:18px"><span style="font-family:nova regular">Bidang Pengembangan Perpustakaan:</span></span></p>\n\n<ul>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Seksi Pembinaan Perpustakaan</span></span></li>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Seksi Pengembangan dan Kerjasama Perpustakaan</span></span></li>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Seksi Pembudayaan Kegemaran Membaca&nbsp;</span></span></li>\n</ul>\n\n<p><span style="font-size:18px"><span style="font-family:nova regular">Unit Pelaksanaan Teknis Dinas :</span></span></p>\n\n<ul>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Kepala Perpustakaan Daerah</span></span></li>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Subbag Tata Usaha</span></span></li>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Seksi&nbsp; Layanan Perpustakaan</span></span></li>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Seksi Otomasi&nbsp;</span></span></li>\n</ul>\n\n<p><span style="font-size:18px"><span style="font-family:nova regular">Kelompok Jabatan Fungsional</span></span></p>\n\n<ul>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Fungsional Tertentu Arsiparis</span></span></li>\n	<li style="text-align: justify;"><span style="font-size:18px"><span style="font-family:nova regular">Fungsional tertentu Pustakawan</span></span></li>\n</ul>\n\n<p>&nbsp;</p>\n', '2018-02-06 04:37:50', '2018-04-03 00:17:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_tugas`
--

CREATE TABLE `profil_tugas` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil_tugas`
--

INSERT INTO `profil_tugas` (`id`, `isi`, `created`, `updated`) VALUES
(1, '<h4 nova="" regular";="" color:="" rgb(0,="" 0,="" 0);="" text-align:="" justify;"="" style="font-family: &quot;nova regular&quot;; color: rgb(0, 0, 0);"><span nova="" regular";"="">Tugas Pokok</span></h4><h5 style="font-family: &quot;nova regular&quot;; color: rgb(0, 0, 0);"><span nova="" regular";"="" style="font-size: 15px;"><div style="text-align: justify;"><span nova="" regular";"="">Tugas pokok Dinas Kearsipan Dan Perpustakaan</span><span nova="" regular";"="">?</span>&nbsp;sesuai dengan Peraturan Gubernur Jawa Tengah Nomor 74 Tahun 2016 tentang Organisasi Dan Tata Kerja Dinas&nbsp; Kearsipan Dan Perpustakaan Provinsi Jawa Tengah adalah melaksanakan penyusunan dan pelaksanaan kebijakan daerah di bidang kearsipan dan perpustakaan sebagaimana yang diatur dalam peraturan perundang-undangan.</div></span></h5><h5 nova="" regular";="" color:="" rgb(0,="" 0,="" 0);="" text-align:="" justify;"="" style="font-family: &quot;nova regular&quot;; color: rgb(0, 0, 0);"><br></h5><h4 nova="" regular";="" color:="" rgb(0,="" 0,="" 0);="" text-align:="" justify;"="" style="font-family: &quot;nova regular&quot;; color: rgb(0, 0, 0);">Fungsi</h4><h5 style="font-family: &quot;nova regular&quot;; color: rgb(0, 0, 0);"><div style="font-size: 15px; text-align: justify;">Untuk melaksanakan tugas pokok sebagimana tersebut diatas Dinas Kearsipan dan Perpustakaan Provinsi Jawa Tengah melaksanakan fungsi Dinas Kearsipan Dan Perpustakaan sesuai dengan Peraturan Gubernur Jawa Tengah Nomor 74 Tahun 2016 tentang Organisasi Dan Tata Kerja Dinas&nbsp; Kearsipan Dan Perpustakaan Provinsi Jawa Tengah adalah sebagai berikut :</div><ul style="font-size: 15px;"><li style="text-align: justify;">Perumusan kebijakan teknis bidang kearsipan dan perpustakaan</li></ul><ul style="font-size: 15px;"><li style="text-align: justify;">Penyelenggaraan urusan pemerintahan dan pelayanan umum bidang kearsipan dan perpustakaan</li></ul><ul style="font-size: 15px;"><li style="text-align: justify;">Pembinaan, pengembangan dan pengawasan kearsipan, pengelolaan dan pelestarian arsip, layanan dan pemanfaatan arsip, deposit dan pengolahan bahan perpustakaan,&nbsp; pengembangan perpustakaan.</li></ul><ul style="font-size: 15px;"><li style="text-align: justify;">Pelaksanaan&nbsp; kebijakan bidang pembinaan, pengembangan dan pengawasan kearsipan, pengelolaan dan pelestarian arsip, layanan dan pemanfaatan arsip, deposit dan pengolahan bahan perpustakaan, pengembangan perpustakaan.</li></ul><ul style="font-size: 15px;"><li style="text-align: justify;">Pelaksanaan evaluasi dan pelaporan bidang pembinaan, pengembangan dan pengawasan kearsipan, pengelolaan dan pelestarian arsip, layanan dan pemanfaatan arsip, deposit dan pengolahan bahan perpustakaan, pengembangan perpustakaan;</li></ul><ul style="font-size: 15px;"><li style="text-align: justify;">Pelaksanaan dan pembinaan adminstrasi dan kesekretariatan kepada seluruh unit kerja dilingkungan Dinas</li></ul><ul style="font-size: 15px;"><li style="text-align: justify;">Pelaksanaan fungsi kedinasan lain&nbsp; yang diberikan oleh Gubernur sesuai dengan tugas dan fungsinya.</li></ul></h5><h2></h2>', '2018-02-06 04:37:50', '2018-03-14 03:06:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_visimisi`
--

CREATE TABLE `profil_visimisi` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil_visimisi`
--

INSERT INTO `profil_visimisi` (`id`, `isi`, `created`, `updated`) VALUES
(1, '<h4 nova="" regular";="" color:="" rgb(0,="" 0,="" 0);"="" style="font-family: &quot;nova regular&quot;; color: rgb(0, 0, 0);"><span nova="" regular";"="">Visi Dinas Kearsipan Dan Perpustakaan</span></h4><h4 nova="" regular";="" color:="" rgb(0,="" 0,="" 0);"="" style="font-family: &quot;nova regular&quot;; color: rgb(0, 0, 0);"><span nova="" regular";"="" style="color: rgb(51, 51, 51);">Arsip Dan Perpustakaan Sebagai Sumber Informasi Dan Ilmu Pengetahuan Yang Berkualitas Dan Berdaya Saing</span></h4><h4 nova="" regular";="" color:="" rgb(0,="" 0,="" 0);"="" style="font-family: &quot;nova regular&quot;; color: rgb(0, 0, 0);"><span nova="" regular";"="" style="color: rgb(51, 51, 51);"><br></span></h4><h4 nova="" regular";="" color:="" rgb(0,="" 0,="" 0);"="" style="font-family: &quot;nova regular&quot;; color: rgb(0, 0, 0);"><span nova="" regular";"=""></span><span nova="" regular";"="" style="color: rgb(51, 51, 51);">Misi Dinas Kearsipan Dan Perpustakaan</span><ul><li style="text-align: justify;"><span nova="" regular";"="" style="color: rgb(51, 51, 51);">Meningkatkan Kualitas SDM Arsip Dan Perpustakaan</span></li></ul><ul><li style="text-align: justify;"><span nova="" regular";"="" style="color: rgb(51, 51, 51);">Meningkatkan Kualitas Sarana Dan Prasarana Kearsipan Dan Perpustakaan</span></li></ul><ul><li style="text-align: justify;"><span nova="" regular";"="" style="color: rgb(51, 51, 51);">Mengembangkan Sistem Kearsipan Dan Perpustakaan Berbasis Teknologi Informasi</span></li></ul><ul><li style="text-align: justify;"><span nova="" regular";"="" style="color: rgb(51, 51, 51);">Meningkatkan Manajemen Kelembagaan Arsip Dan Perpustakaan</span></li></ul><br></h4>', '2018-02-06 04:37:50', '2018-03-14 03:06:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `id_pencipta_arsip` int(11) NOT NULL,
  `judul_riwayat` varchar(255) NOT NULL,
  `id_tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `id_pencipta_arsip`, `judul_riwayat`, `id_tahun`) VALUES
(1, 1, 'rutan', 1998),
(2, 2, 'Perjalanan', 1889),
(3, 3, 'Kerusakan Mesin Pabrik', 2003),
(4, 4, 'Arsip Foto Deppen', 1997);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setup_kab`
--

CREATE TABLE `setup_kab` (
  `NO_KAB` int(11) NOT NULL,
  `NAMA_KAB` varchar(60) NOT NULL,
  `NO_PROP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `setup_kab`
--

INSERT INTO `setup_kab` (`NO_KAB`, `NAMA_KAB`, `NO_PROP`) VALUES
(1, 'ACEH SELATAN', 11),
(1, 'TAPANULI TENGAH', 12),
(1, 'PESISIR SELATAN', 13),
(1, 'KAMPAR', 14),
(1, 'KERINCI', 15),
(1, 'OGAN KOMERING ULU', 16),
(1, 'BENGKULU SELATAN', 17),
(1, 'LAMPUNG SELATAN', 18),
(1, 'BANGKA', 19),
(1, 'BINTAN', 21),
(1, 'ADM. KEPULAUAN SERIBU', 31),
(1, 'BOGOR', 32),
(1, 'CILACAP', 33),
(1, 'KULON PROGO', 34),
(1, 'PACITAN', 35),
(1, 'PANDEGLANG', 36),
(1, 'JEMBRANA', 51),
(1, 'LOMBOK BARAT', 52),
(1, 'KUPANG', 53),
(1, 'SAMBAS', 61),
(1, 'KOTAWARINGIN BARAT', 62),
(1, 'TANAH LAUT', 63),
(1, 'PASER', 64),
(1, 'BULUNGAN', 65),
(1, 'BOLAANG MONGONDO', 71),
(1, 'BANGGAI', 72),
(1, 'KEPULAUAN SELAYAR', 73),
(1, 'KOLAKA', 74),
(1, 'GORONTALO', 75),
(1, 'MAMUJU UTARA', 76),
(1, 'MALUKU TENGAH', 81),
(1, 'HALMAHERA BARAT', 82),
(1, 'MERAUKE', 91),
(1, 'SORONG', 92),
(2, 'ACEH TENGGARA', 11),
(2, 'TAPANULI UTARA', 12),
(2, 'SOLOK', 13),
(2, 'INDRAGIRI HULU', 14),
(2, 'MERANGIN', 15),
(2, 'OGAN KOMERING ILIR', 16),
(2, 'REJANG LEBONG', 17),
(2, 'LAMPUNG TENGAH', 18),
(2, 'BELITUNG', 19),
(2, 'KARIMUN', 21),
(2, 'SUKABUMI', 32),
(2, 'BANYUMAS', 33),
(2, 'BANTUL', 34),
(2, 'PONOROGO', 35),
(2, 'LEBAK', 36),
(2, 'TABANAN', 51),
(2, 'LOMBOK TENGAH', 52),
(2, 'TIMOR TENGAH SELATAN', 53),
(2, 'PONTIANAK', 61),
(2, 'KOTAWARINGIN TIMUR', 62),
(2, 'KOTA BARU', 63),
(2, 'KUTAI KERTANEGARA', 64),
(2, 'MALINAU', 65),
(2, 'MINAHASA', 71),
(2, 'POSO', 72),
(2, 'BULUKUMBA', 73),
(2, 'KENDARI', 74),
(2, 'BOALEMO', 75),
(2, 'MAMUJU', 76),
(2, 'MALUKU TENGGARA', 81),
(2, 'HALMAHERA TENGAH', 82),
(2, 'JAYAWIJAYA', 91),
(2, 'MANOKWARI', 92),
(3, 'ACEH TIMUR', 11),
(3, 'TAPANULI SELATAN', 12),
(3, 'SAWAHLUNTO/SIJUNJUNG', 13),
(3, 'BENGKALIS', 14),
(3, 'SAROLANGUN', 15),
(3, 'MUARA ENIM', 16),
(3, 'BENGKULU UTARA', 17),
(3, 'LAMPUNG UTARA', 18),
(3, 'BANGKA SELATAN', 19),
(3, 'NATUNA', 21),
(3, 'CIANJUR', 32),
(3, 'PURBALINGGA', 33),
(3, 'GUNUNG KIDUL', 34),
(3, 'TRENGGALEK', 35),
(3, 'TANGERANG', 36),
(3, 'BADUNG', 51),
(3, 'LOMBOK TIMUR', 52),
(3, 'TIMOR TENGAH UTARA', 53),
(3, 'SANGGAU', 61),
(3, 'KAPUAS', 62),
(3, 'BANJAR', 63),
(3, 'BERAU', 64),
(3, 'NUNUKAN', 65),
(3, 'KEPULAUAN SANGIHE', 71),
(3, 'DONGGALA', 72),
(3, 'BANTAENG', 73),
(3, 'MUNA', 74),
(3, 'BONE BOLANGO', 75),
(3, 'MAMASA', 76),
(3, 'MALUKU TENGGARA BARAT', 81),
(3, 'HALMAHERA UTARA', 82),
(3, 'JAYAPURA', 91),
(3, 'FAKFAK', 92),
(4, 'ACEH TENGAH', 11),
(4, 'NIAS', 12),
(4, 'TANAH DATAR', 13),
(4, 'INDRAGIRI HILIR', 14),
(4, 'BATANG HARI', 15),
(4, 'LAHAT', 16),
(4, 'KAUR', 17),
(4, 'LAMPUNG BARAT', 18),
(4, 'BANGKA TENGAH', 19),
(4, 'LINGGA', 21),
(4, 'BANDUNG', 32),
(4, 'BANJARNEGARA', 33),
(4, 'SLEMAN', 34),
(4, 'TULUNGAGUNG', 35),
(4, 'SERANG', 36),
(4, 'GIANYAR', 51),
(4, 'SUMBAWA', 52),
(4, 'BELU', 53),
(4, 'KETAPANG', 61),
(4, 'BARI', 62),
(4, 'BARITO KUALA', 63),
(4, 'BULUNGAN', 64),
(4, 'TANA TIDUNG', 65),
(4, 'KEPULAUAN TALAUD', 71),
(4, 'TOLI-TOLI', 72),
(4, 'JENEPONTO', 73),
(4, 'BUTON', 74),
(4, 'POHUWATO', 75),
(4, 'POLEWALI MAMASA', 76),
(4, 'BURU', 81),
(4, 'HALMAHERA SELATAN', 82),
(4, 'NABIRE', 91),
(4, 'SORONG SELATAN', 92),
(5, 'ACEH BARAT', 11),
(5, 'LANGKAT', 12),
(5, 'PADANG PARIAMAN', 13),
(5, 'PELALAWAN', 14),
(5, 'MUARO JAMBI', 15),
(5, 'MUSI RAWAS', 16),
(5, 'SELUMA', 17),
(5, 'TULANG BAWANG', 18),
(5, 'BANGKA BARAT', 19),
(5, 'KEPULAUAN ANAMBAS', 21),
(5, 'GARUT', 32),
(5, 'KEBUMEN', 33),
(5, 'BLITAR', 35),
(5, 'KLUNGKUNG', 51),
(5, 'DOMPU', 52),
(5, 'ALOR', 53),
(5, 'SINTANG', 61),
(5, 'BARITO UTARA', 62),
(5, 'TAPIN', 63),
(5, 'NUNUKAN', 64),
(5, 'MINAHASA SELATAN', 71),
(5, 'BUOL', 72),
(5, 'TAKALAR', 73),
(5, 'KONAWE SELATAN', 74),
(5, 'GORONTALO UTARA', 75),
(5, 'MAJENE', 76),
(5, 'KEPULAUAN ARU', 81),
(5, 'KEPULAUAN SULA', 82),
(5, 'YAPEN WAROPEN', 91),
(5, 'RAJA AMPAT', 92),
(6, 'ACEH BESAR', 11),
(6, 'KARO', 12),
(6, 'AGAM', 13),
(6, 'ROKAN HULU', 14),
(6, 'TANJUNG JABUNG BARAT', 15),
(6, 'MUSI BANYUASIN', 16),
(6, 'MUKO-MUKO', 17),
(6, 'TANGGAMUS', 18),
(6, 'BELITUNG TIMUR', 19),
(6, 'TASIKMALAYA', 32),
(6, 'PURWOREJO', 33),
(6, 'KEDIRI', 35),
(6, 'BANGLI', 51),
(6, 'BIMA', 52),
(6, 'FLORES TIMUR', 53),
(6, 'KAPUAS HULU', 61),
(6, 'KATI', 62),
(6, 'HULU SUNGAI SELATAN', 63),
(6, 'MALINAU', 64),
(6, 'MINAHASA UTARA', 71),
(6, 'MOROWALI', 72),
(6, 'GOWA', 73),
(6, 'BOMBANA', 74),
(6, 'MAMUJU TENGAH', 76),
(6, 'SERAM BAGIAN BARAT', 81),
(6, 'HALMAHERA TIMUR', 82),
(6, 'BIAK NUMFOR', 91),
(6, 'TELUK BINTUNI', 92),
(7, 'PIDIE', 11),
(7, 'DELI SERDANG', 12),
(7, 'LIMA PULUH KOTO', 13),
(7, 'ROKAN HILIR', 14),
(7, 'TANJUNG JABUNG TIMUR', 15),
(7, 'BANYUASIN', 16),
(7, 'LEBONG', 17),
(7, 'LAMPUNG TIMUR', 18),
(7, 'CIAMIS', 32),
(7, 'WONOSOBO', 33),
(7, 'MALANG', 35),
(7, 'KARANGASEM', 51),
(7, 'SUMBAWA BARAT', 52),
(7, 'SIKKA', 53),
(7, 'BENGKAYANG', 61),
(7, 'SERU', 62),
(7, 'HULU SUNGAI TENGAH', 63),
(7, 'KUTAI BARAT', 64),
(7, 'MINAHASA TENGGARA', 71),
(7, 'BANGGAI KEPULAUAN', 72),
(7, 'SINJAI', 73),
(7, 'WAKATOBI', 74),
(7, 'SERAM BAGIAN TIMUR', 81),
(7, 'PULAU MOROTAI', 82),
(7, 'PUNCAK JAYA', 91),
(7, 'TELUK WONDAMA', 92),
(8, 'ACEH UTARA', 11),
(8, 'SIMALUNGUN', 12),
(8, 'PASAMAN', 13),
(8, 'SIAK', 14),
(8, 'BUNGO', 15),
(8, 'OGAN KOMERING ULU TIMUR', 16),
(8, 'KEPAHIANG', 17),
(8, 'WAY KANAN', 18),
(8, 'KUNINGAN', 32),
(8, 'MAGELANG', 33),
(8, 'LUMAJANG', 35),
(8, 'BULELENG', 51),
(8, 'LOMBOK UTARA', 52),
(8, 'ENDE', 53),
(8, 'LANDAK', 61),
(8, 'SUKAMARA', 62),
(8, 'HULU SUNGAI UTARA', 63),
(8, 'KUTAI TIMUR', 64),
(8, 'BOLAANG MONGONDOW UTARA', 71),
(8, 'PARIMO', 72),
(8, 'BONE', 73),
(8, 'KOLAKA UTARA', 74),
(8, 'MALUKU BARAT DAYA', 81),
(8, 'PULAU TALIABU', 82),
(8, 'PANIAI', 91),
(8, 'KAIMANA', 92),
(9, 'SIMEULUE', 11),
(9, 'ASAHAN', 12),
(9, 'KEPULAUAN MENTAWAI', 13),
(9, 'KUANTAN SINGINGI', 14),
(9, 'TEBO', 15),
(9, 'OGAN KOMERING ULU SELATAN', 16),
(9, 'BENGKULU TENGAH', 17),
(9, 'TANGGAMUS', 18),
(9, 'CIREBON', 32),
(9, 'BOYOLALI', 33),
(9, 'JEMBER', 35),
(9, 'NGADA', 53),
(9, 'SEKADAU', 61),
(9, 'LAMANDAU', 62),
(9, 'TABALONG', 63),
(9, 'PENAJAM PASER UTARA', 64),
(9, 'KEPULAUAN SIAU TAGULANDANG BIARO ATAU SITARO', 71),
(9, 'TOJO UNA-UNA', 72),
(9, 'MAROS', 73),
(9, 'KONAWE UTARA', 74),
(9, 'BURU SELATAN', 81),
(9, 'MIMIKA', 91),
(9, 'TAMBRAUW', 92),
(10, 'ACEH SINGKIL', 11),
(10, 'LABUAN BATU', 12),
(10, 'SOLOK SELATAN', 13),
(10, 'KEPULAUAN MERANTI', 14),
(10, 'OGAN ILIR', 16),
(10, 'PRINGSEWU', 18),
(10, 'MAJALENGKA', 32),
(10, 'KLATEN', 33),
(10, 'BANYUWANGI', 35),
(10, 'MANGGARAI', 53),
(10, 'MELAWI', 61),
(10, 'GUNU', 62),
(10, 'TANAH BUMBU', 63),
(10, 'BOLAANG MONGONDOW TIMUR', 71),
(10, 'SIGI', 72),
(10, 'PANGKAJENE DAN KEPULAUAN', 73),
(10, 'BUTON UTARA', 74),
(10, 'SARMI', 91),
(10, 'MAYBRAT', 92),
(11, 'BIREUEN', 11),
(11, 'DAIRI', 12),
(11, 'DHARMASRAYA', 13),
(11, 'EMPAT LAWANG', 16),
(11, 'MESUJI', 18),
(11, 'SUMEDANG', 32),
(11, 'SUKOHARJO', 33),
(11, 'BONDOWOSO', 35),
(11, 'SUMBA TIMUR', 53),
(11, 'KAYONG UTARA', 61),
(11, 'PULANG PISAU', 62),
(11, 'BALANGAN', 63),
(11, 'MAHAKAM ULU', 64),
(11, 'BOLAANG MONGONDOW SELATAN', 71),
(11, 'BANGGAI LAUT', 72),
(11, 'BARRU', 73),
(11, 'KOLAKA TIMUR', 74),
(11, 'KEEROM', 91),
(11, 'MANOKWARI SELATAN', 92),
(12, 'ACEH BARAT DAYA', 11),
(12, 'TOBA SAMOSIR', 12),
(12, 'PASAMAN BARAT', 13),
(12, 'PENUKAL ABAB LEMATANG ILIR', 16),
(12, 'TULANG BAWANG BARAT', 18),
(12, 'INDRAMAYU', 32),
(12, 'WONOGIRI', 33),
(12, 'SITUBONDO', 35),
(12, 'SUMBA BARAT', 53),
(12, 'KUBU RAYA', 61),
(12, 'MURU', 62),
(12, 'MOROWALI UTARA', 72),
(12, 'SOPPENG', 73),
(12, 'KONAWE KEPULAUAN', 74),
(12, 'PEGUNUNGAN BINTANG', 91),
(12, 'PEGUNUNGAN ARFAK', 92),
(13, 'GAYO LUES', 11),
(13, 'MANDAILING NATAL', 12),
(13, 'MUSI RAWAS UTARA', 16),
(13, 'PESISIR BARAT', 18),
(13, 'SUBANG', 32),
(13, 'KARANGANYAR', 33),
(13, 'PROBOLINGGO', 35),
(13, 'LEMBATA', 53),
(13, 'BARITO TIMUR', 62),
(13, 'WAJO', 73),
(13, 'MUNA BARAT', 74),
(13, 'YAHUKIMO', 91),
(14, 'ACEH JAYA', 11),
(14, 'NIAS SELATAN', 12),
(14, 'PURWAKARTA', 32),
(14, 'SRAGEN', 33),
(14, 'PASURUAN', 35),
(14, 'ROTE NDAO', 53),
(14, 'SIDENRENG RAPPANG', 73),
(14, 'BUTON TENGAH', 74),
(14, 'TOLIKARA', 91),
(15, 'NAGAN RAYA', 11),
(15, 'PAKPAK BHARAT', 12),
(15, 'KARAWANG', 32),
(15, 'GROBOGAN', 33),
(15, 'SIDOARJO', 35),
(15, 'MANGGARAI BARAT', 53),
(15, 'PINRANG', 73),
(15, 'BUTON SELATAN', 74),
(15, 'WAROPEN', 91),
(16, 'ACEH TAMIANG', 11),
(16, 'HUMBANG HASUNDUTAN', 12),
(16, 'BEKASI', 32),
(16, 'BLORA', 33),
(16, 'MOJOKERTO', 35),
(16, 'NAGEKEO', 53),
(16, 'ENREKANG', 73),
(16, 'BOVEN DIGOEL', 91),
(17, 'BENER MERAH', 11),
(17, 'SAMOSIR', 12),
(17, 'BANDUNG BARAT', 32),
(17, 'REMBANG', 33),
(17, 'JOMBANG', 35),
(17, 'SUMBA TENGAH', 53),
(17, 'LUWU', 73),
(17, 'MAPPI', 91),
(18, 'PIDIE JAYA', 11),
(18, 'SERDANG BEDAGAI', 12),
(18, 'PANGANDARAN', 32),
(18, 'PATI', 33),
(18, 'NGANJUK', 35),
(18, 'SUMBA BARAT DAYA', 53),
(18, 'TANA TORAJA', 73),
(18, 'ASMAT', 91),
(19, 'BATU BARA', 12),
(19, 'KUDUS', 33),
(19, 'MADIUN', 35),
(19, 'MANGGARAI TIMUR', 53),
(19, 'SUPIORI', 91),
(20, 'PADANG LAWAS UTARA', 12),
(20, 'JEPARA', 33),
(20, 'MAGETAN', 35),
(20, 'SABU RAIJUA', 53),
(20, 'MAMBERAMO RAYA', 91),
(21, 'PADANG LAWAS', 12),
(21, 'DEMAK', 33),
(21, 'NGAWI', 35),
(21, 'MALAKA', 53),
(21, 'MAMBERAMO TENGAH', 91),
(22, 'LABUHANBATU SELATAN', 12),
(22, 'SEMARANG', 33),
(22, 'BOJONEGORO', 35),
(22, 'LUWU UTARA', 73),
(22, 'YALIMO', 91),
(23, 'LABUHANBATU UTARA', 12),
(23, 'TEMANGGUNG', 33),
(23, 'TUBAN', 35),
(23, 'LANNY JAYA', 91),
(24, 'NIAS UTARA', 12),
(24, 'KENDAL', 33),
(24, 'LAMONGAN', 35),
(24, 'LUWU TIMUR', 73),
(24, 'NDUGA', 91),
(25, 'NIAS BARAT', 12),
(25, 'BATANG', 33),
(25, 'GRESIK', 35),
(25, 'PUNCAK', 91),
(26, 'PEKALONGAN', 33),
(26, 'BANGKALAN', 35),
(26, 'TORAJA UTARA', 73),
(26, 'DOGIYAI', 91),
(27, 'PEMALANG', 33),
(27, 'SAMPANG', 35),
(27, 'INTAN JAYA', 91),
(28, 'TEGAL', 33),
(28, 'PAMEKASAN', 35),
(28, 'DEIYAI', 91),
(29, 'BREBES', 33),
(29, 'SUMENEP', 35),
(71, 'KOTA BANDA ACEH', 11),
(71, 'KOTA MEDAN', 12),
(71, 'KOTA PADANG', 13),
(71, 'KOTA PEKANBARU', 14),
(71, 'KOTA JAMBI', 15),
(71, 'KOTA PALEMBANG', 16),
(71, 'BENGKULU', 17),
(71, 'BANDAR LAMPUNG', 18),
(71, 'KOTA PANGKAL PINANG', 19),
(71, 'KOTA BATAM', 21),
(71, 'KODYA JAKARTA PUSAT', 31),
(71, 'KOTA BOGOR', 32),
(71, 'KOTA MAGELANG', 33),
(71, 'KOTA YOGYAKARTA', 34),
(71, 'KOTA KEDIRI', 35),
(71, 'KOTA TANGERANG', 36),
(71, 'KOTA DENPASAR', 51),
(71, 'KOTA MATARAM', 52),
(71, 'KOTA KUPANG', 53),
(71, 'KOTA PONTIANAK', 61),
(71, 'KOTA', 62),
(71, 'KOTA BANJARMASIN', 63),
(71, 'KOTA BALIK PAPAN', 64),
(71, 'KOTA TARAKAN', 65),
(71, 'KOTA MANADO', 71),
(71, 'KOTA PALU', 72),
(71, 'KOTA MAKASSAR', 73),
(71, 'KOTA KENDARI', 74),
(71, 'KOTA GORONTALO', 75),
(71, 'KOTA AMBON', 81),
(71, 'KOTA TERNATE', 82),
(71, 'KOTA JAYAPURA', 91),
(71, 'KOTA SORONG', 92),
(72, 'KOTA SABANG', 11),
(72, 'KOTA PEMATANG SIANTAR', 12),
(72, 'KOTA SOLOK', 13),
(72, 'KOTA DUMAI', 14),
(72, 'KOTA SUNGAI PENUH', 15),
(72, 'KOTA PAGAR ALAM', 16),
(72, 'METRO', 18),
(72, 'KOTA TANJUNG PINANG', 21),
(72, 'KODYA JAKARTA UTARA', 31),
(72, 'KOTA SUKABUMI', 32),
(72, 'KOTA SURAKARTA', 33),
(72, 'KOTA BLITAR', 35),
(72, 'KOTA CILEGON', 36),
(72, 'KOTA BIMA', 52),
(72, 'KOTA SINGKAWANG', 61),
(72, 'KOTA PALANGKARAYA', 62),
(72, 'KOTA BANJAR BARU', 63),
(72, 'KOTA SAMARINDA', 64),
(72, 'KOTA BITUNG', 71),
(72, 'KOTA PARE-PARE', 73),
(72, 'KOTA BAU-BAU', 74),
(72, 'KOTA TUAL', 81),
(72, 'KOTA TIDORE KEPULAUAN', 82),
(73, 'KOTA LHOKSEUMAWE', 11),
(73, 'KOTA SIBOLGA', 12),
(73, 'KOTA SAWAH LUNTO', 13),
(73, 'KOTA LUBUK LINGGAU', 16),
(73, 'KODYA JAKARTA BARAT', 31),
(73, 'KOTA BANDUNG', 32),
(73, 'KOTA SALATIGA', 33),
(73, 'KOTA MALANG', 35),
(73, 'KOTA SERANG', 36),
(73, 'KOTA TARAKAN', 64),
(73, 'KOTA TOMOHON', 71),
(73, 'KOTA PALOPO', 73),
(74, 'KOTA LANGSA', 11),
(74, 'KOTA TANJUNG BALAI', 12),
(74, 'KOTA PADANG PANJANG', 13),
(74, 'KOTA PRABUMULIH', 16),
(74, 'KODYA JAKARTA SELATAN', 31),
(74, 'KOTA CIREBON', 32),
(74, 'KOTA SEMARANG', 33),
(74, 'KOTA PROBOLINGGO', 35),
(74, 'KOTA TANGERANG SELATAN', 36),
(74, 'KOTA BONTANG', 64),
(74, 'KOTA KOTAMOBAGU', 71),
(75, 'KOTA SUBULUSSALAM', 11),
(75, 'KOTA BINJAI', 12),
(75, 'KOTA BUKITTINGGI', 13),
(75, 'KODYA JAKARTA TIMUR', 31),
(75, 'KOTA BEKASI', 32),
(75, 'KOTA PEKALONGAN', 33),
(75, 'KOTA PASURUAN', 35),
(76, 'KOTA TEBING TINGGI', 12),
(76, 'KOTA PAYAKUMBUH', 13),
(76, 'KOTA DEPOK', 32),
(76, 'KOTA TEGAL', 33),
(76, 'KOTA MOJOKERTO', 35),
(77, 'KOTA PADANG SIDEMPUAN', 12),
(77, 'KOTA PARIAMAN', 13),
(77, 'KOTA CIMAHI', 32),
(77, 'KOTA MADIUN', 35),
(78, 'KOTA GUNUNGSITOLI', 12),
(78, 'KOTA TASIKMALAYA', 32),
(78, 'KOTA SURABAYA', 35),
(79, 'KOTA BANJAR', 32),
(79, 'KOTA BATU', 35);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setup_prop`
--

CREATE TABLE `setup_prop` (
  `NO_PROP` int(11) NOT NULL,
  `NAMA_PROP` varchar(60) NOT NULL,
  `FLAGSINK` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `setup_prop`
--

INSERT INTO `setup_prop` (`NO_PROP`, `NAMA_PROP`, `FLAGSINK`) VALUES
(76, 'SULAWESI BARAT', 'read'),
(33, 'JAWA TENGAH', 'read'),
(36, 'BANTEN', 'read'),
(31, 'DKI JAKARTA', 'read'),
(19, 'KEPULAUAN BANGKA BELITUNG', 'read'),
(34, 'DAERAH ISTIMEWA YOGYAKARTA', 'read'),
(71, 'SULAWESI UTARA', 'read'),
(16, 'SUMATERA SELATAN', 'read'),
(14, 'RIAU', 'read'),
(64, 'KALIMANTAN TIMUR', 'read'),
(32, 'JAWA BARAT', 'read'),
(13, 'SUMATERA BARAT', 'read'),
(17, 'BENGKULU', 'read'),
(52, 'NUSA TENGGARA BARAT', 'read'),
(82, 'MALUKU UTARA', 'read'),
(62, 'KALIMANTAN TENGAH', 'read'),
(75, 'GORONTALO', 'read'),
(15, 'JAMBI', 'read'),
(74, 'SULAWESI TENGGARA', 'read'),
(11, 'NANGGROE ACEH DARUSSALAM', 'read'),
(61, 'KALIMANTAN BARAT', 'read'),
(73, 'SULAWESI SELATAN', 'read'),
(91, 'PAPUA', 'read'),
(53, 'NUSA TENGGARA TIMUR', 'read'),
(18, 'LAMPUNG', 'read'),
(63, 'KALIMANTAN SELATAN', 'read'),
(81, 'MALUKU', 'read'),
(12, 'SUMATERA UTARA', 'read'),
(51, 'BALI', 'read'),
(35, 'JAWA TIMUR', 'read'),
(21, 'KEPULAUAN RIAU', 'read'),
(72, 'SULAWESI TENGAH', 'read'),
(92, 'PAPUA BARAT', 'read');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statis`
--

CREATE TABLE `statis` (
  `id_statis` int(11) NOT NULL,
  `id_pencipta_arsip` int(11) NOT NULL,
  `id_riwayat` int(11) NOT NULL,
  `id_masalah` int(11) NOT NULL,
  `id_submasalah` int(11) NOT NULL,
  `kode_pelaksana` varchar(255) NOT NULL,
  `hasil` varchar(255) NOT NULL,
  `id_jenis_naskah` int(11) NOT NULL,
  `id_bahasa` int(11) NOT NULL,
  `indeks` varchar(255) NOT NULL,
  `kurun_waktu` datetime NOT NULL,
  `isi` text NOT NULL,
  `id_media` int(11) NOT NULL,
  `id_tingkat_perkembangan` int(11) NOT NULL,
  `file_path` text NOT NULL,
  `file_name` text NOT NULL,
  `file_size` int(11) NOT NULL,
  `file_ekstension` text NOT NULL,
  `jumlah_download` int(11) NOT NULL,
  `uacc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statis`
--

INSERT INTO `statis` (`id_statis`, `id_pencipta_arsip`, `id_riwayat`, `id_masalah`, `id_submasalah`, `kode_pelaksana`, `hasil`, `id_jenis_naskah`, `id_bahasa`, `indeks`, `kurun_waktu`, `isi`, `id_media`, `id_tingkat_perkembangan`, `file_path`, `file_name`, `file_size`, `file_ekstension`, `jumlah_download`, `uacc_id`) VALUES
(1, 1, 1, 1, 1, '449', 'Pencurian Terhadap alat alat kelengkapan', 1, 1, 'Kalapas', '2018-10-09 06:29:46', 'Daftar Barang yang hilang di rutan kelas 1', 1, 4, '', '', 0, '', 0, 1),
(3, 3, 3, 3, 3, '545', 'kerusakan terhadap mesin pengolahan', 1, 1, 'Pabrik Gula', '2019-01-04 03:13:59', 'Daftar kerusakan Alat pengolahan', 1, 3, '', '', 0, '', 0, 1),
(4, 1, 1, 1, 1, '789', 'Daftar Tahanan ', 3, 1, 'Kalapas', '2019-01-04 04:11:52', 'daftar nama tahanan rutan', 1, 3, '', '', 0, '', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_masalah`
--

CREATE TABLE `sub_masalah` (
  `id_submasalah` int(11) NOT NULL,
  `id_masalah` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama_submasalah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_masalah`
--

INSERT INTO `sub_masalah` (`id_submasalah`, `id_masalah`, `kode`, `nama_submasalah`) VALUES
(1, 1, '424', 'pencurian'),
(2, 2, '553', 'Perbaikan '),
(3, 3, '761', 'pengolahan bahan'),
(4, 4, '221', 'perbaikan instalasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(11) NOT NULL,
  `nama_tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tingkat_perkembangan`
--

CREATE TABLE `tingkat_perkembangan` (
  `id_tingkat_perkembangan` int(11) NOT NULL,
  `nama_tingkatperkembangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tingkat_perkembangan`
--

INSERT INTO `tingkat_perkembangan` (`id_tingkat_perkembangan`, `nama_tingkatperkembangan`) VALUES
(1, 'Asli'),
(2, 'Tembusan'),
(3, 'Salinan / Ganda'),
(4, 'Fotocopy '),
(5, 'Pertinggal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_accounts`
--

CREATE TABLE `user_accounts` (
  `uacc_id` int(11) UNSIGNED NOT NULL,
  `uacc_group_fk` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `uacc_bidang` int(11) NOT NULL,
  `uacc_email` varchar(100) NOT NULL DEFAULT '',
  `uacc_username` varchar(25) NOT NULL DEFAULT '',
  `uacc_password` varchar(60) NOT NULL DEFAULT '',
  `uacc_ip_address` varchar(40) NOT NULL DEFAULT '',
  `uacc_salt` varchar(40) NOT NULL DEFAULT '',
  `uacc_activation_token` varchar(40) NOT NULL DEFAULT '',
  `uacc_forgotten_password_token` varchar(40) NOT NULL DEFAULT '',
  `uacc_forgotten_password_expire` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `uacc_update_email_token` varchar(40) NOT NULL DEFAULT '',
  `uacc_update_email` varchar(100) NOT NULL DEFAULT '',
  `uacc_active` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `uacc_suspend` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `uacc_fail_login_attempts` smallint(5) NOT NULL DEFAULT '0',
  `uacc_fail_login_ip_address` varchar(40) NOT NULL DEFAULT '',
  `uacc_date_fail_login_ban` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Time user is banned until due to repeated failed logins',
  `uacc_date_last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `uacc_date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_accounts`
--

INSERT INTO `user_accounts` (`uacc_id`, `uacc_group_fk`, `uacc_bidang`, `uacc_email`, `uacc_username`, `uacc_password`, `uacc_ip_address`, `uacc_salt`, `uacc_activation_token`, `uacc_forgotten_password_token`, `uacc_forgotten_password_expire`, `uacc_update_email_token`, `uacc_update_email`, `uacc_active`, `uacc_suspend`, `uacc_fail_login_attempts`, `uacc_fail_login_ip_address`, `uacc_date_fail_login_ban`, `uacc_date_last_login`, `uacc_date_added`) VALUES
(1, 3, 0, 'admin@admin.com', 'andreas', '$2a$08$IUoT2J8RKCRJKTK3MEPCBeW95VhVN4IfJ7j3ZfVHaQl6ZQ0kOVzx6', '::1', 'XKVT29q2Jr', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2019-01-04 04:09:41', '2011-01-01 00:00:00'),
(14, 7, 1, '12@admin.com', 'dewa', '$2a$08$0tBOR21tirt8zJVZih.G.Om7SalwWC2Lvle22aSZEG6sFq0NPrCqu', '103.9.227.6', 'SQbWnBZNtr', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2018-07-31 00:51:25', '2018-01-03 14:00:48'),
(15, 7, 0, 'Agusyud@admin.com', 'Agusyud', '$2a$08$S.l1WPxnNwtFoacFtul.9e2El1bHfAjt84koKmb8XmGad5.Z2.hq2', '::1', 'j4zqSzZksf', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2018-02-25 02:04:39', '2018-02-22 16:15:45'),
(18, 7, 2, 'lastoer76@admin.com', 'lastoer76', '$2a$08$0yk34KMibJFRJhRAEZ2lL.EvPELtg7pdA0a4772uOy0W6T0oFH6IK', '::1', 'NXN3SJzk35', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2018-02-25 10:44:19', '2018-02-25 02:44:39'),
(19, 7, 1, 'taufnet@admin.com', 'taufnet', '$2a$08$.pLgOwmWfwJmFkmk9HLr2OEiZP/6RKf9XA8szKmDLNUsig7D6g8d2', '103.9.227.1', 'bty76j9cMZ', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2018-02-26 06:43:53', '2018-02-25 02:53:36'),
(21, 3, 0, 'tatang@admin.com', 'tatang', '$2a$08$FYi92dWSun/HvxLScaNciO6NwDohcT2fy.B29U01LQ7WqjEXIGBoK', '103.9.227.1', 'k34jXSRVCM', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2018-03-28 08:21:40', '2018-03-14 11:49:04'),
(22, 3, 0, 'irawan@admin.com', 'irawan', '$2a$08$BqafdE/egYov3JdKtLXwQuTShKquVWMt74Tak7wp24QRoGcowuID6', '114.124.246.202', 'HxMnh7wtGr', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2018-03-14 11:49:16', '2018-03-14 11:49:16'),
(23, 3, 0, 'putri@admin.com', 'putri', '$2a$08$oyTviI6/.UfTMqsvUXcALeooU5jjFqknYVaNR.EKqZ9Gyq1T5xuSu', '103.9.227.1', 'HNDHcg3c8M', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2018-03-15 02:35:51', '2018-03-15 02:35:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_accounts1`
--

CREATE TABLE `user_accounts1` (
  `uacc_id` int(11) UNSIGNED NOT NULL,
  `uacc_group_fk` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `uacc_bidang` int(11) NOT NULL,
  `uacc_email` varchar(100) NOT NULL DEFAULT '',
  `uacc_username` varchar(25) NOT NULL DEFAULT '',
  `uacc_password` varchar(60) NOT NULL DEFAULT '',
  `uacc_ip_address` varchar(40) NOT NULL DEFAULT '',
  `uacc_salt` varchar(40) NOT NULL DEFAULT '',
  `uacc_activation_token` varchar(40) NOT NULL DEFAULT '',
  `uacc_forgotten_password_token` varchar(40) NOT NULL DEFAULT '',
  `uacc_forgotten_password_expire` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `uacc_update_email_token` varchar(40) NOT NULL DEFAULT '',
  `uacc_update_email` varchar(100) NOT NULL DEFAULT '',
  `uacc_active` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `uacc_suspend` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `uacc_fail_login_attempts` smallint(5) NOT NULL DEFAULT '0',
  `uacc_fail_login_ip_address` varchar(40) NOT NULL DEFAULT '',
  `uacc_date_fail_login_ban` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Time user is banned until due to repeated failed logins',
  `uacc_date_last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `uacc_date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_accounts1`
--

INSERT INTO `user_accounts1` (`uacc_id`, `uacc_group_fk`, `uacc_bidang`, `uacc_email`, `uacc_username`, `uacc_password`, `uacc_ip_address`, `uacc_salt`, `uacc_activation_token`, `uacc_forgotten_password_token`, `uacc_forgotten_password_expire`, `uacc_update_email_token`, `uacc_update_email`, `uacc_active`, `uacc_suspend`, `uacc_fail_login_attempts`, `uacc_fail_login_ip_address`, `uacc_date_fail_login_ban`, `uacc_date_last_login`, `uacc_date_added`) VALUES
(1, 3, 0, 'admin@admin.com', 'masteradmin', '$2a$08$IUoT2J8RKCRJKTK3MEPCBeW95VhVN4IfJ7j3ZfVHaQl6ZQ0kOVzx6', '103.9.227.1', 'XKVT29q2Jr', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2018-03-14 02:38:08', '2011-01-01 00:00:00'),
(20, 7, 9, 'tesdi@admin.com', 'tesdi', '$2a$08$o1SOWt0aJUuffRIWSHnwi.0OQv56/2QpC4anIxrI65ftyG1z5Lf5a', '::1', 'Wd8ggfBwtH', '', '', '0000-00-00 00:00:00', '', '', 1, 0, 0, '', '0000-00-00 00:00:00', '2018-03-12 15:39:10', '2018-02-26 15:15:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_groups`
--

CREATE TABLE `user_groups` (
  `ugrp_id` smallint(5) NOT NULL,
  `ugrp_name` varchar(20) NOT NULL DEFAULT '',
  `ugrp_desc` varchar(100) NOT NULL DEFAULT '',
  `ugrp_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_groups`
--

INSERT INTO `user_groups` (`ugrp_id`, `ugrp_name`, `ugrp_desc`, `ugrp_admin`) VALUES
(7, 'Contributtor Data', 'Contributtor Data : User has no master admin access rights', 0),
(3, 'Master Admin', 'Master Admin : has full admin access rights.', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_login_sessions`
--

CREATE TABLE `user_login_sessions` (
  `usess_uacc_fk` int(11) NOT NULL DEFAULT '0',
  `usess_series` varchar(40) NOT NULL DEFAULT '',
  `usess_token` varchar(40) NOT NULL DEFAULT '',
  `usess_login_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_login_sessions`
--

INSERT INTO `user_login_sessions` (`usess_uacc_fk`, `usess_series`, `usess_token`, `usess_login_date`) VALUES
(1, '', 'd9ca2d603240e3266a4611d9e993b890b4d651e5', '2019-01-04 04:13:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_privileges`
--

CREATE TABLE `user_privileges` (
  `upriv_id` smallint(5) NOT NULL,
  `upriv_name` varchar(50) NOT NULL DEFAULT '',
  `upriv_desc` varchar(100) NOT NULL DEFAULT '',
  `is_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_privileges`
--

INSERT INTO `user_privileges` (`upriv_id`, `upriv_name`, `upriv_desc`, `is_menu`) VALUES
(13, 'view akun pengguna', 'user dapat melihat akun pengguna', 0),
(14, 'view grup pengguna', 'user dapat melihat grup pengguna', 0),
(15, 'view rule pengguna', 'user dapat melihat rule pengguna', 0),
(16, 'view informasi pengguna', 'user dapat melihat informasi pengguna', 0),
(18, 'view menu akun pengguna', 'user dapat melihat menu akun pengguna', 1),
(21, 'view menu jadwal kegiatan', 'user dapat melihat menu jadwal kegiatan', 0),
(25, 'view menu download', 'user dapat melihat menu download', 0),
(26, 'view menu berita', 'User dapat melihat menu berita', 1),
(27, 'view data berita', 'user dapat melihat data berita', 0),
(28, 'view pengaturan berita', 'user dapat melihat pengaturan berita', 0),
(29, 'view menu bidang', 'user dapat melihat menu bidang', 0),
(30, 'view menu halaman depan', 'user dapat melihat menu halaman depan', 0),
(31, 'view data banner depan', 'user dapat melihat data banner depan', 0),
(32, 'view menu galeri foto', 'user dapat melihat menu galeri foto', 1),
(33, 'view data galeri foto', 'user dapat melihat data galeri foto', 0),
(34, 'view pengaturan galeri foto', 'user dapat melihat pengaturan galeri foto', 0),
(35, 'view menu profil', 'user dapat melihat menu profil', 1),
(36, 'view data sejarah', 'user dapat melihat menu sejarah', 0),
(37, 'view data visi misi', 'user dapat melihat data visi misi', 0),
(38, 'view data struktur organisasi', 'user dapat melihat data struktur organisasi', 0),
(39, 'view data tugas fungsi', 'user dapat melihat data tugas fungsi', 0),
(40, 'view pengaturan download', 'user dapat melihat pengaturan download', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_privilege_groups`
--

CREATE TABLE `user_privilege_groups` (
  `upriv_groups_id` smallint(5) UNSIGNED NOT NULL,
  `upriv_groups_ugrp_fk` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `upriv_groups_upriv_fk` smallint(5) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_privilege_groups`
--

INSERT INTO `user_privilege_groups` (`upriv_groups_id`, `upriv_groups_ugrp_fk`, `upriv_groups_upriv_fk`) VALUES
(343, 7, 21),
(344, 7, 25),
(345, 7, 26),
(346, 7, 27),
(347, 7, 32),
(348, 7, 33),
(349, 3, 13),
(350, 3, 14),
(351, 3, 15),
(352, 3, 16),
(353, 3, 18),
(354, 3, 21),
(355, 3, 25),
(356, 3, 26),
(357, 3, 27),
(358, 3, 28),
(359, 3, 29),
(360, 3, 30),
(361, 3, 31),
(362, 3, 32),
(363, 3, 33),
(364, 3, 34),
(365, 3, 35),
(366, 3, 36),
(367, 3, 37),
(368, 3, 38),
(369, 3, 39);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_privilege_users`
--

CREATE TABLE `user_privilege_users` (
  `upriv_users_id` smallint(5) NOT NULL,
  `upriv_users_uacc_fk` int(11) NOT NULL DEFAULT '0',
  `upriv_users_upriv_fk` smallint(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur untuk view `dtberita`
--
DROP TABLE IF EXISTS `dtberita`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dtberita`  AS  select `a`.`id_berita` AS `id_berita`,`a`.`id_berita_jenis` AS `id_berita_jenis`,`a`.`id_bidang` AS `id_bidang`,`a`.`judul` AS `judul`,`a`.`slug` AS `slug`,`a`.`isi` AS `isi`,`a`.`n_read` AS `n_read`,`a`.`n_comment` AS `n_comment`,`a`.`user_id` AS `user_id`,`a`.`created` AS `created`,`a`.`updated` AS `updated`,`b`.`nama_berita` AS `jenis_berita`,`c`.`uacc_username` AS `username`,dayofmonth(`a`.`created`) AS `angkahari`,dayname(`a`.`created`) AS `hari`,monthname(`a`.`created`) AS `bulan`,year(`a`.`created`) AS `tahun`,concat(dayofmonth(`a`.`created`),' ',monthname(`a`.`created`),' ',year(`a`.`created`)) AS `tanggalan`,`d`.`bidang` AS `bidang` from (((`berita` `a` join `berita_jenis` `b` on((`a`.`id_berita_jenis` = `b`.`id_berita_jenis`))) join `user_accounts` `c` on((`a`.`user_id` = `c`.`uacc_id`))) left join `bidang` `d` on((`a`.`id_bidang` = `d`.`id`))) order by `a`.`id_berita` desc ;

-- --------------------------------------------------------

--
-- Struktur untuk view `dtcarousel`
--
DROP TABLE IF EXISTS `dtcarousel`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dtcarousel`  AS  select `a`.`id` AS `id`,`a`.`judul` AS `judul`,`a`.`deskripsi` AS `deskripsi`,`a`.`tampil` AS `tampil`,`a`.`file_path` AS `file_path`,`a`.`file_name` AS `file_name`,`a`.`file_ekstention` AS `file_ekstention`,`a`.`file_size` AS `file_size`,`a`.`user_id` AS `user_id`,`a`.`created` AS `created`,`a`.`updated` AS `updated`,`b`.`uacc_username` AS `user` from (`carousel` `a` join `user_accounts` `b` on((`a`.`user_id` = `b`.`uacc_id`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `dtdownload`
--
DROP TABLE IF EXISTS `dtdownload`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dtdownload`  AS  select `a`.`id` AS `id`,`a`.`download_macam` AS `download_macam`,`a`.`id_bidang` AS `id_bidang`,`a`.`nama` AS `nama`,`a`.`deskripsi` AS `deskripsi`,`a`.`file_path` AS `file_path`,`a`.`file_name` AS `file_name`,`a`.`file_ekstenstion` AS `file_ekstenstion`,`a`.`file_size` AS `file_size`,`a`.`n_download` AS `n_download`,`a`.`user_id` AS `user_id`,`a`.`created` AS `created`,`a`.`updated` AS `updated`,dayname(`a`.`created`) AS `hari`,monthname(`a`.`created`) AS `bulan`,year(`a`.`created`) AS `tahun`,concat(dayofmonth(`a`.`created`),' ',monthname(`a`.`created`),' ',year(`a`.`created`)) AS `tanggalan`,`b`.`uacc_username` AS `user`,`c`.`nama_jenis_peraturan` AS `nama_download_jenis`,`d`.`bidang` AS `nama_bidang`,`e`.`id` AS `download_jenis` from ((((`download` `a` left join `user_accounts` `b` on((`a`.`user_id` = `b`.`uacc_id`))) left join `download_macam` `c` on((`a`.`download_macam` = `c`.`id_download_macam`))) left join `bidang` `d` on((`a`.`id_bidang` = `d`.`id`))) left join `download_jenis` `e` on((`c`.`id_download_jenis` = `e`.`id`))) order by `a`.`id` desc ;

-- --------------------------------------------------------

--
-- Struktur untuk view `dtgaleri`
--
DROP TABLE IF EXISTS `dtgaleri`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dtgaleri`  AS  select `a`.`id` AS `id`,`a`.`judul` AS `judul`,`a`.`deskripsi` AS `deskripsi`,`a`.`tampil` AS `tampil`,`a`.`file_path` AS `file_path`,`a`.`file_name` AS `file_name`,`a`.`file_ekstention` AS `file_ekstention`,`a`.`file_size` AS `file_size`,`a`.`user_id` AS `user_id`,`a`.`created` AS `created`,`a`.`updated` AS `updated`,`b`.`uacc_username` AS `user`,`c`.`id` AS `id_album`,`c`.`album` AS `album` from ((`galeri` `a` join `user_accounts` `b` on((`a`.`user_id` = `b`.`uacc_id`))) left join `galeri_album` `c` on((`a`.`id_album` = `c`.`id`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `dtjadwal_kegiatan`
--
DROP TABLE IF EXISTS `dtjadwal_kegiatan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dtjadwal_kegiatan`  AS  select `a`.`id` AS `id`,`a`.`nama` AS `nama`,concat(dayofmonth(`a`.`tanggal`),' ',monthname(`a`.`tanggal`),' ',year(`a`.`tanggal`)) AS `tanggalan`,concat(dayofmonth(`a`.`created`),' ',monthname(`a`.`created`),' ',year(`a`.`created`)) AS `tanggalan_upload`,monthname(`a`.`tanggal`) AS `namabulan`,month(`a`.`tanggal`) AS `numberbulan`,`b`.`uacc_username` AS `username`,`c`.`id` AS `id_bidang`,`c`.`bidang` AS `bidang` from ((`jadwal_kegiatan` `a` join `user_accounts` `b` on((`a`.`user_id` = `b`.`uacc_id`))) left join `bidang` `c` on((`a`.`id_bidang` = `c`.`id`))) order by month(`a`.`tanggal`) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `dtlink_terkait`
--
DROP TABLE IF EXISTS `dtlink_terkait`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dtlink_terkait`  AS  select `a`.`id` AS `id`,`a`.`tampil` AS `tampil`,`a`.`link` AS `link`,`a`.`deskripsi` AS `deskripsi`,`a`.`file_path` AS `file_path`,`a`.`file_name` AS `file_name`,`a`.`file_ekstention` AS `file_ekstention`,`a`.`file_size` AS `file_size`,`a`.`user_id` AS `user_id`,`a`.`created` AS `created`,`a`.`updated` AS `updated`,dayname(`a`.`created`) AS `hari`,monthname(`a`.`created`) AS `bulan`,year(`a`.`created`) AS `tahun`,concat(dayofmonth(`a`.`created`),' ',monthname(`a`.`created`),' ',year(`a`.`created`)) AS `tanggalan`,`b`.`uacc_username` AS `user` from (`link_terkait` `a` join `user_accounts` `b` on((`a`.`user_id` = `b`.`uacc_id`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `dtstatis`
--
DROP TABLE IF EXISTS `dtstatis`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dtstatis`  AS  select `a`.`id_statis` AS `id_statis`,`a`.`id_pencipta_arsip` AS `id_pencipta_arsip`,`a`.`id_riwayat` AS `id_riwayat`,`a`.`id_masalah` AS `id_masalah`,`a`.`id_submasalah` AS `id_submasalah`,`a`.`kode_pelaksana` AS `kode_pelaksana`,`a`.`hasil` AS `hasil`,`a`.`id_jenis_naskah` AS `id_jenis_naskah`,`a`.`id_bahasa` AS `id_bahasa`,`a`.`indeks` AS `indeks`,`a`.`kurun_waktu` AS `kurun_waktu`,`a`.`isi` AS `isi`,`a`.`id_media` AS `id_media`,`a`.`id_tingkat_perkembangan` AS `id_tingkat_perkembangan`,`a`.`file_path` AS `file_path`,`a`.`file_name` AS `file_name`,`a`.`file_size` AS `file_size`,`a`.`file_ekstension` AS `file_ekstension`,`a`.`jumlah_download` AS `jumlah_download`,`a`.`uacc_id` AS `uacc_id`,`b`.`nama_pencipta` AS `nama_pencipta`,`c`.`judul_riwayat` AS `judul_riwayat`,`d`.`nama_masalah` AS `nama_masalah`,`e`.`nama_submasalah` AS `nama_submasalah`,`f`.`uacc_username` AS `uacc_username` from (((((`statis` `a` left join `pencipta_arsip` `b` on((`a`.`id_pencipta_arsip` = `b`.`id_pencipta_arsip`))) left join `riwayat` `c` on((`a`.`id_riwayat` = `c`.`id_riwayat`))) left join `masalah` `d` on((`a`.`id_masalah` = `d`.`id_masalah`))) left join `sub_masalah` `e` on((`a`.`id_submasalah` = `e`.`id_submasalah`))) left join `user_accounts` `f` on((`a`.`uacc_id` = `f`.`uacc_id`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `dtuser`
--
DROP TABLE IF EXISTS `dtuser`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dtuser`  AS  select `a`.`uacc_id` AS `uacc_id`,`a`.`uacc_group_fk` AS `uacc_group_fk`,`a`.`uacc_email` AS `uacc_email`,`a`.`uacc_username` AS `uacc_username`,`a`.`uacc_password` AS `uacc_password`,`a`.`uacc_ip_address` AS `uacc_ip_address`,`a`.`uacc_salt` AS `uacc_salt`,`a`.`uacc_activation_token` AS `uacc_activation_token`,`a`.`uacc_forgotten_password_token` AS `uacc_forgotten_password_token`,`a`.`uacc_forgotten_password_expire` AS `uacc_forgotten_password_expire`,`a`.`uacc_update_email_token` AS `uacc_update_email_token`,`a`.`uacc_update_email` AS `uacc_update_email`,`a`.`uacc_active` AS `uacc_active`,`a`.`uacc_suspend` AS `uacc_suspend`,`a`.`uacc_fail_login_attempts` AS `uacc_fail_login_attempts`,`a`.`uacc_fail_login_ip_address` AS `uacc_fail_login_ip_address`,`a`.`uacc_date_fail_login_ban` AS `uacc_date_fail_login_ban`,`a`.`uacc_date_last_login` AS `uacc_date_last_login`,`a`.`uacc_date_added` AS `uacc_date_added`,`b`.`ugrp_id` AS `ugrp_id`,`b`.`ugrp_name` AS `ugrp_name`,`b`.`ugrp_desc` AS `ugrp_desc`,`b`.`ugrp_admin` AS `ugrp_admin`,`c`.`bidang` AS `nama` from ((`user_accounts` `a` join `user_groups` `b` on((`a`.`uacc_group_fk` = `b`.`ugrp_id`))) left join `bidang` `c` on((`a`.`uacc_bidang` = `c`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`id_bahasa`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `berita_gambar`
--
ALTER TABLE `berita_gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita_jenis`
--
ALTER TABLE `berita_jenis`
  ADD PRIMARY KEY (`id_berita_jenis`);

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity` (`last_activity`) USING BTREE;

--
-- Indexes for table `demo_user_address`
--
ALTER TABLE `demo_user_address`
  ADD PRIMARY KEY (`uadd_id`),
  ADD UNIQUE KEY `uadd_id` (`uadd_id`) USING BTREE,
  ADD KEY `uadd_uacc_fk` (`uadd_uacc_fk`) USING BTREE;

--
-- Indexes for table `demo_user_profiles`
--
ALTER TABLE `demo_user_profiles`
  ADD PRIMARY KEY (`upro_id`),
  ADD UNIQUE KEY `upro_id` (`upro_id`) USING BTREE,
  ADD KEY `upro_uacc_fk` (`upro_uacc_fk`) USING BTREE,
  ADD KEY `upro_company` (`upro_company`),
  ADD KEY `upro_first_name` (`upro_first_name`),
  ADD KEY `upro_last_name` (`upro_last_name`),
  ADD KEY `upro_phone` (`upro_phone`),
  ADD KEY `upro_newsletter` (`upro_newsletter`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download_jenis`
--
ALTER TABLE `download_jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download_macam`
--
ALTER TABLE `download_macam`
  ADD PRIMARY KEY (`id_download_macam`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_album`
--
ALTER TABLE `galeri_album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_kegiatan`
--
ALTER TABLE `jadwal_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_naskah`
--
ALTER TABLE `jenis_naskah`
  ADD PRIMARY KEY (`id_jenis_naskah`);

--
-- Indexes for table `link_terkait`
--
ALTER TABLE `link_terkait`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masalah`
--
ALTER TABLE `masalah`
  ADD PRIMARY KEY (`id_masalah`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`);

--
-- Indexes for table `pencipta_arsip`
--
ALTER TABLE `pencipta_arsip`
  ADD PRIMARY KEY (`id_pencipta_arsip`);

--
-- Indexes for table `profil_sejarah`
--
ALTER TABLE `profil_sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_sotk`
--
ALTER TABLE `profil_sotk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_tugas`
--
ALTER TABLE `profil_tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_visimisi`
--
ALTER TABLE `profil_visimisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `setup_kab`
--
ALTER TABLE `setup_kab`
  ADD KEY `NAMA_KAB` (`NAMA_KAB`),
  ADD KEY `NO_PROP` (`NO_PROP`),
  ADD KEY `NO_KAB` (`NO_KAB`);

--
-- Indexes for table `setup_prop`
--
ALTER TABLE `setup_prop`
  ADD KEY `NO_PROP` (`NO_PROP`),
  ADD KEY `NAMA_PROP` (`NAMA_PROP`),
  ADD KEY `FLAGSINK` (`FLAGSINK`);

--
-- Indexes for table `statis`
--
ALTER TABLE `statis`
  ADD PRIMARY KEY (`id_statis`);

--
-- Indexes for table `sub_masalah`
--
ALTER TABLE `sub_masalah`
  ADD PRIMARY KEY (`id_submasalah`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `tingkat_perkembangan`
--
ALTER TABLE `tingkat_perkembangan`
  ADD PRIMARY KEY (`id_tingkat_perkembangan`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`uacc_id`),
  ADD KEY `uacc_group_fk` (`uacc_group_fk`),
  ADD KEY `uacc_email` (`uacc_email`),
  ADD KEY `uacc_username` (`uacc_username`),
  ADD KEY `uacc_password` (`uacc_password`,`uacc_ip_address`,`uacc_salt`,`uacc_activation_token`,`uacc_forgotten_password_token`,`uacc_forgotten_password_expire`,`uacc_update_email_token`,`uacc_update_email`,`uacc_active`,`uacc_suspend`,`uacc_fail_login_attempts`,`uacc_fail_login_ip_address`,`uacc_date_fail_login_ban`,`uacc_date_last_login`,`uacc_date_added`);

--
-- Indexes for table `user_accounts1`
--
ALTER TABLE `user_accounts1`
  ADD PRIMARY KEY (`uacc_id`),
  ADD KEY `uacc_group_fk` (`uacc_group_fk`),
  ADD KEY `uacc_email` (`uacc_email`),
  ADD KEY `uacc_username` (`uacc_username`),
  ADD KEY `uacc_password` (`uacc_password`,`uacc_ip_address`,`uacc_salt`,`uacc_activation_token`,`uacc_forgotten_password_token`,`uacc_forgotten_password_expire`,`uacc_update_email_token`,`uacc_update_email`,`uacc_active`,`uacc_suspend`,`uacc_fail_login_attempts`,`uacc_fail_login_ip_address`,`uacc_date_fail_login_ban`,`uacc_date_last_login`,`uacc_date_added`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`ugrp_id`),
  ADD KEY `ugrp_name` (`ugrp_name`,`ugrp_desc`,`ugrp_admin`);

--
-- Indexes for table `user_privileges`
--
ALTER TABLE `user_privileges`
  ADD PRIMARY KEY (`upriv_id`);

--
-- Indexes for table `user_privilege_groups`
--
ALTER TABLE `user_privilege_groups`
  ADD PRIMARY KEY (`upriv_groups_id`);

--
-- Indexes for table `user_privilege_users`
--
ALTER TABLE `user_privilege_users`
  ADD PRIMARY KEY (`upriv_users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `id_bahasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `berita_gambar`
--
ALTER TABLE `berita_gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;
--
-- AUTO_INCREMENT for table `berita_jenis`
--
ALTER TABLE `berita_jenis`
  MODIFY `id_berita_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `demo_user_address`
--
ALTER TABLE `demo_user_address`
  MODIFY `uadd_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `demo_user_profiles`
--
ALTER TABLE `demo_user_profiles`
  MODIFY `upro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `download_jenis`
--
ALTER TABLE `download_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `download_macam`
--
ALTER TABLE `download_macam`
  MODIFY `id_download_macam` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `galeri_album`
--
ALTER TABLE `galeri_album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jadwal_kegiatan`
--
ALTER TABLE `jadwal_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis_naskah`
--
ALTER TABLE `jenis_naskah`
  MODIFY `id_jenis_naskah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `link_terkait`
--
ALTER TABLE `link_terkait`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `masalah`
--
ALTER TABLE `masalah`
  MODIFY `id_masalah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pencipta_arsip`
--
ALTER TABLE `pencipta_arsip`
  MODIFY `id_pencipta_arsip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `profil_sejarah`
--
ALTER TABLE `profil_sejarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profil_sotk`
--
ALTER TABLE `profil_sotk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profil_tugas`
--
ALTER TABLE `profil_tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profil_visimisi`
--
ALTER TABLE `profil_visimisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `statis`
--
ALTER TABLE `statis`
  MODIFY `id_statis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sub_masalah`
--
ALTER TABLE `sub_masalah`
  MODIFY `id_submasalah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tingkat_perkembangan`
--
ALTER TABLE `tingkat_perkembangan`
  MODIFY `id_tingkat_perkembangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `uacc_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user_accounts1`
--
ALTER TABLE `user_accounts1`
  MODIFY `uacc_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `ugrp_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_privileges`
--
ALTER TABLE `user_privileges`
  MODIFY `upriv_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `user_privilege_groups`
--
ALTER TABLE `user_privilege_groups`
  MODIFY `upriv_groups_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=370;
--
-- AUTO_INCREMENT for table `user_privilege_users`
--
ALTER TABLE `user_privilege_users`
  MODIFY `upriv_users_id` smallint(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

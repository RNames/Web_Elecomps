-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2024 at 09:32 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1658729_elecompid`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel_pbn`
--

CREATE TABLE `artikel_pbn` (
  `id_artikelpbn` int NOT NULL,
  `id_pbn` int NOT NULL,
  `creator_artikelpbn` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggalbuat_artikelpbn` datetime NOT NULL,
  `judul_artikelpbn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto_artikelpbn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_artikelpbn` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `statusupload_artikelpbn` enum('Belum Diupload','Sudah Diupload') NOT NULL,
  `tanggalupload_artikelpbn` datetime DEFAULT NULL,
  `alamatweb_backlink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug_in` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `artikel_pbn`
--

INSERT INTO `artikel_pbn` (`id_artikelpbn`, `id_pbn`, `creator_artikelpbn`, `tanggalbuat_artikelpbn`, `judul_artikelpbn`, `foto_artikelpbn`, `deskripsi_artikelpbn`, `statusupload_artikelpbn`, `tanggalupload_artikelpbn`, `alamatweb_backlink`, `slug_in`) VALUES
(10, 3, 'nala', '2024-12-09 15:07:00', 'inilah', 'inilah_09122024081048.jpg', '<p>bhjfh</p>', 'Belum Diupload', NULL, '', 'inilah');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(13, '2023-07-20-081917', 'App\\Database\\Migrations\\TbProduk', 'default', 'App', 1690513521, 1),
(14, '2023-07-20-084755', 'App\\Database\\Migrations\\TbSlider', 'default', 'App', 1690513521, 1),
(15, '2023-07-20-085024', 'App\\Database\\Migrations\\TbProfil', 'default', 'App', 1690513521, 1),
(16, '2023-07-28-035902', 'App\\Database\\Migrations\\TbAktivitas', 'default', 'App', 1690517128, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_aktivitas`
--

CREATE TABLE `tb_aktivitas` (
  `id_aktivitas` int UNSIGNED NOT NULL,
  `nama_aktivitas_in` varchar(200) NOT NULL,
  `nama_aktivitas_en` varchar(200) NOT NULL,
  `foto_aktivitas` varchar(100) NOT NULL,
  `deskripsi_aktivitas_in` text,
  `deskripsi_aktivitas_en` text,
  `slug_in` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `meta_title_id` varchar(100) DEFAULT NULL,
  `meta_description_id` varchar(255) DEFAULT NULL,
  `meta_title_en` varchar(100) DEFAULT NULL,
  `meta_description_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tb_aktivitas`
--

INSERT INTO `tb_aktivitas` (`id_aktivitas`, `nama_aktivitas_in`, `nama_aktivitas_en`, `foto_aktivitas`, `deskripsi_aktivitas_in`, `deskripsi_aktivitas_en`, `slug_in`, `slug_en`, `meta_title_id`, `meta_description_id`, `meta_title_en`, `meta_description_en`) VALUES
(6, 'Bagaimana Kami Mendesign Website', 'How We Design A Website', 'Comprehensive Daily Cleaning_Pembersihan Harian yang Komprehensif_13092024104922.jpg', '<p>Web designing adalah proses perencanaan, pembuatan, dan pemeliharaan situs web. Aktivitas ini melibatkan berbagai elemen untuk menciptakan situs web yang menarik, fungsional, dan user-friendly. Berikut adalah beberapa aspek penting yang kita lakukan dalam mendesign web:</p>\r\n<ol>\r\n<li>\r\n<p><strong>Riset dan Perencanaan:</strong></p>\r\n<ul>\r\n<li>Mengidentifikasi tujuan situs web dan audiens target.</li>\r\n<li>Menganalisis situs web pesaing untuk mengidentifikasi tren desain dan praktik terbaik.</li>\r\n<li>Membuat wireframes atau prototipe untuk merencanakan struktur dan tata letak situs web.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Desain Visual:</strong></p>\r\n<ul>\r\n<li>Mengembangkan desain visual dengan menggunakan elemen seperti warna, tipografi, dan gambar untuk menciptakan estetika yang konsisten dan menarik.</li>\r\n<li>Mendesain antarmuka pengguna (UI) dengan fokus pada pengalaman pengguna (UX) untuk memastikan navigasi yang intuitif dan interaksi yang lancar.</li>\r\n<li>Menggunakan perangkat lunak desain grafis seperti Adobe XD, Figma, atau Sketch untuk membuat mockup dan prototipe.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Pengembangan dan Implementasi:</strong></p>\r\n<ul>\r\n<li>Mengubah desain visual menjadi kode dengan menggunakan HTML, CSS, dan JavaScript.</li>\r\n<li>Mengintegrasikan sistem manajemen konten (CMS) seperti WordPress atau Joomla untuk memudahkan pembaruan konten oleh pengguna non-teknis.</li>\r\n<li>Memastikan situs web responsif dan kompatibel dengan berbagai perangkat dan ukuran layar.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Pengujian dan Optimalisasi:</strong></p>\r\n<ul>\r\n<li>Melakukan pengujian fungsionalitas, kecepatan, dan kompatibilitas untuk memastikan situs web berfungsi dengan baik di berbagai browser dan perangkat.</li>\r\n<li>Mengoptimalkan gambar dan sumber daya untuk meningkatkan waktu muat halaman.</li>\r\n<li>Menyusun dan menerapkan strategi SEO (Search Engine Optimization) untuk meningkatkan visibilitas situs web di hasil pencarian.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Peluncuran dan Pemeliharaan:</strong></p>\r\n<ul>\r\n<li>Memastikan bahwa semua elemen situs web bekerja dengan baik sebelum peluncuran akhir.</li>\r\n<li>Mengawasi kinerja situs web dan memperbaiki masalah yang muncul setelah peluncuran.</li>\r\n<li>Memperbarui konten secara berkala dan melakukan pemeliharaan teknis untuk memastikan situs web tetap relevan dan aman.</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n<p>Web designing merupakan kombinasi antara kreativitas dan keterampilan teknis untuk menciptakan pengalaman digital yang efektif dan menyenangkan bagi pengguna.</p>', '<p>Web designing is the process of planning, creating, and maintaining websites. This activity involves various elements to create a visually appealing, functional, and user-friendly website. Here are some key aspects that we use on the web designing:</p>\r\n<ol>\r\n<li>\r\n<p><strong>Research and Planning:</strong></p>\r\n<ul>\r\n<li>Identifying the website\'s goals and target audience.</li>\r\n<li>Analyzing competitor websites to identify design trends and best practices.</li>\r\n<li>Creating wireframes or prototypes to plan the website&rsquo;s structure and layout.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Visual Design:</strong></p>\r\n<ul>\r\n<li>Developing visual designs using elements such as color, typography, and images to create a consistent and attractive aesthetic.</li>\r\n<li>Designing user interfaces (UI) with a focus on user experience (UX) to ensure intuitive navigation and smooth interaction.</li>\r\n<li>Using design software such as Adobe XD, Figma, or Sketch to create mockups and prototypes.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Development and Implementation:</strong></p>\r\n<ul>\r\n<li>Converting visual designs into code using HTML, CSS, and JavaScript.</li>\r\n<li>Integrating content management systems (CMS) like WordPress or Joomla to facilitate content updates by non-technical users.</li>\r\n<li>Ensuring the website is responsive and compatible with various devices and screen sizes.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Testing and Optimization:</strong></p>\r\n<ul>\r\n<li>Performing functionality, speed, and compatibility tests to ensure the website works well across different browsers and devices.</li>\r\n<li>Optimizing images and resources to improve page load times.</li>\r\n<li>Implementing SEO (Search Engine Optimization) strategies to enhance the website\'s visibility in search results.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Launch and Maintenance:</strong></p>\r\n<ul>\r\n<li>Ensuring all website elements function correctly before the final launch.</li>\r\n<li>Monitoring website performance and addressing issues that arise after launch.</li>\r\n<li>Updating content regularly and performing technical maintenance to keep the website relevant and secure.</li>\r\n</ul>\r\n</li>\r\n</ol>', 'bagaimana-kami-mendesign-website', 'how-we-design-a-website', 'Bagaimana Kami Mendesain Website yang Menarik dan Fungsional', 'Pelajari proses desain website kami mulai dari riset, perencanaan, hingga peluncuran. Kami menciptakan situs web yang menarik, user-friendly, dan dioptimalkan untuk performa dan SEO.', 'How We Design Attractive and Functional Websites', 'Learn about our web design process, from research and planning to launch. We create websites that are visually appealing, user-friendly, and optimized for performance and SEO.'),
(7, 'Bagaimana Cara Kita Melakukan Digital Marketing', 'How Are We Doing A Digital Marketing', 'Regular Deep Cleaning_Pembersihan Mendalam Rutin_13092024134816.jpg', '<p>Digital marketing adalah serangkaian strategi dan praktik yang digunakan untuk mempromosikan produk, layanan, atau merek melalui berbagai platform digital. Aktivitas ini melibatkan penggunaan teknologi dan internet untuk menjangkau audiens yang lebih luas dan meningkatkan keterlibatan serta konversi. Berikut adalah beberapa langkah utama dalam melakukan digital marketing:</p>\r\n<ol>\r\n<li>\r\n<p><strong>Riset dan Analisis:</strong></p>\r\n<ul>\r\n<li><strong>Menentukan Tujuan:</strong> Mengidentifikasi tujuan pemasaran yang ingin dicapai, seperti meningkatkan kesadaran merek, menghasilkan prospek, atau meningkatkan penjualan.</li>\r\n<li><strong>Menganalisis Audiens:</strong> Meneliti karakteristik demografis, perilaku, dan preferensi audiens target untuk mengarahkan strategi pemasaran.</li>\r\n<li><strong>Menganalisis Kompetitor:</strong> Memahami strategi pemasaran pesaing untuk menemukan peluang dan tantangan.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Strategi Konten:</strong></p>\r\n<ul>\r\n<li><strong>Pembuatan Konten:</strong> Mengembangkan konten yang relevan dan menarik, seperti artikel blog, infografis, video, dan posting media sosial, yang berfokus pada kebutuhan dan minat audiens.</li>\r\n<li><strong>Penjadwalan Konten:</strong> Mengatur kalender konten untuk memastikan posting yang konsisten dan terjadwal pada berbagai platform.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Pemasaran Media Sosial:</strong></p>\r\n<ul>\r\n<li><strong>Platform Sosial:</strong> Menggunakan platform media sosial seperti Facebook, Instagram, Twitter, dan LinkedIn untuk menjangkau audiens dan membangun keterlibatan.</li>\r\n<li><strong>Iklan Berbayar:</strong> Mengelola kampanye iklan berbayar di media sosial untuk meningkatkan jangkauan dan menarik audiens baru.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Optimisasi Mesin Pencari (SEO):</strong></p>\r\n<ul>\r\n<li><strong>Penelitian Kata Kunci:</strong> Mengidentifikasi kata kunci yang relevan untuk meningkatkan peringkat situs web dalam hasil pencarian mesin pencari.</li>\r\n<li><strong>Optimisasi On-Page:</strong> Mengoptimalkan elemen halaman web seperti tag judul, meta deskripsi, dan konten untuk SEO.</li>\r\n<li><strong>Link Building:</strong> Membangun tautan berkualitas dari situs web lain untuk meningkatkan otoritas dan peringkat pencarian.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Pemasaran Email:</strong></p>\r\n<ul>\r\n<li><strong>Pengumpulan Kontak:</strong> Mengumpulkan alamat email dari pelanggan dan prospek untuk membangun daftar email.</li>\r\n<li><strong>Kampanye Email:</strong> Mengirimkan email yang dipersonalisasi dan relevan kepada pelanggan untuk mempromosikan produk, layanan, atau penawaran khusus.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Analisis dan Pelaporan:</strong></p>\r\n<ul>\r\n<li><strong>Pelacakan Kinerja:</strong> Menggunakan alat analitik seperti Google Analytics untuk melacak kinerja kampanye digital marketing.</li>\r\n<li><strong>Evaluasi dan Penyesuaian:</strong> Menganalisis data untuk mengevaluasi efektivitas strategi dan membuat penyesuaian berdasarkan hasil untuk meningkatkan hasil di masa depan.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Pengelolaan Hubungan Pelanggan (CRM):</strong></p>\r\n<ul>\r\n<li><strong>Pemantauan Interaksi:</strong> Mengelola interaksi dan hubungan dengan pelanggan untuk meningkatkan kepuasan dan loyalitas.</li>\r\n<li><strong>Tindak Lanjut:</strong> Menyediakan dukungan dan tindak lanjut untuk membangun hubungan jangka panjang dengan pelanggan.</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n<p>Digital marketing adalah proses yang dinamis dan terus berkembang, memanfaatkan berbagai saluran digital untuk menjangkau audiens, membangun merek, dan mencapai tujuan bisnis.</p>', '<p>Digital marketing encompasses a range of strategies and practices used to promote products, services, or brands through various digital platforms. This activity involves leveraging technology and the internet to reach a broader audience, enhance engagement, and drive conversions. Here are the key steps in executing digital marketing:</p>\r\n<ol>\r\n<li>\r\n<p><strong>Research and Analysis:</strong></p>\r\n<ul>\r\n<li><strong>Setting Objectives:</strong> Identifying marketing goals such as increasing brand awareness, generating leads, or boosting sales.</li>\r\n<li><strong>Audience Analysis:</strong> Researching the demographic characteristics, behaviors, and preferences of the target audience to guide marketing strategies.</li>\r\n<li><strong>Competitor Analysis:</strong> Understanding competitors\' marketing strategies to identify opportunities and challenges.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Content Strategy:</strong></p>\r\n<ul>\r\n<li><strong>Content Creation:</strong> Developing relevant and engaging content such as blog posts, infographics, videos, and social media updates that address the needs and interests of the audience.</li>\r\n<li><strong>Content Scheduling:</strong> Organizing a content calendar to ensure consistent and timely posting across various platforms.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Social Media Marketing:</strong></p>\r\n<ul>\r\n<li><strong>Social Platforms:</strong> Utilizing social media platforms like Facebook, Instagram, Twitter, and LinkedIn to reach audiences and build engagement.</li>\r\n<li><strong>Paid Advertising:</strong> Managing paid ad campaigns on social media to increase reach and attract new audiences.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Search Engine Optimization (SEO):</strong></p>\r\n<ul>\r\n<li><strong>Keyword Research:</strong> Identifying relevant keywords to improve the ranking of a website in search engine results.</li>\r\n<li><strong>On-Page Optimization:</strong> Optimizing web page elements such as title tags, meta descriptions, and content for SEO.</li>\r\n<li><strong>Link Building:</strong> Building high-quality backlinks from other websites to enhance authority and search rankings.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Email Marketing:</strong></p>\r\n<ul>\r\n<li><strong>Contact Collection:</strong> Gathering email addresses from customers and prospects to build an email list.</li>\r\n<li><strong>Email Campaigns:</strong> Sending personalized and relevant emails to customers to promote products, services, or special offers.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Analytics and Reporting:</strong></p>\r\n<ul>\r\n<li><strong>Performance Tracking:</strong> Using analytics tools like Google Analytics to monitor the performance of digital marketing campaigns.</li>\r\n<li><strong>Evaluation and Adjustment:</strong> Analyzing data to assess the effectiveness of strategies and making adjustments based on results to improve future outcomes.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Customer Relationship Management (CRM):</strong></p>\r\n<ul>\r\n<li><strong>Interaction Monitoring:</strong> Managing interactions and relationships with customers to enhance satisfaction and loyalty.</li>\r\n<li><strong>Follow-Up:</strong> Providing support and follow-up to build long-term customer relationships.</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n<p>Digital marketing is a dynamic and evolving process that leverages various digital channels to reach audiences, build brands, and achieve business goals.</p>', 'bagaimana-cara-kita-melakukan-digital-marketing', 'how-are-we-doing-a-digital-marketing', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int UNSIGNED NOT NULL,
  `judul_artikel` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `judul_artikel_en` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_artikel` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_artikel` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_artikel_en` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `slug_in` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_title_id` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_description_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_title_en` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_description_en` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel`, `judul_artikel_en`, `foto_artikel`, `deskripsi_artikel`, `deskripsi_artikel_en`, `created_at`, `slug_in`, `slug_en`, `meta_title_id`, `meta_description_id`, `meta_title_en`, `meta_description_en`) VALUES
(1, 'Memahami Dua Dunia SEO Perbedaan SEO On page dan Off page', 'Understanding the Two Worlds of SEO The Difference Between On Page and Off Page SEO', '1725941397_023edd64d2499c71778c.jpeg', '<p>Pekerjaan SEO dalam mengoptimasi halaman website agar mendapat peringkat tinggi tentu bukanlah tugas yang mudah. Meskipun mengaplikasikan SEO itu gratis, karena tujuannya adalah untuk menarik traffic organik (kunjungan menuju website melalui hasil pencarian yang organik, bukan dari iklan-iklan berbayar), tapi praktiknya tetap membutuhkan komitmen waktu, tenaga, dan pada tingkat tertentu, membutuhkan biaya juga.</p>\r\n<p>Dalam dunia SEO, secara umum dikenal terdapat dua bagian: on-page dan off-page. Apakah perbedaan kedua istilah tersebut? simak penjelasan berikut.</p>\r\n<h3><strong>Pengertian SEO On-Page dan Off-Page</strong></h3>\r\n<p>SEO On-Page singkatnya adalah pengoptimalan yang dilakukan di dalam website kita sendiri, dibangun dari dua aspek: konten dan teknis. Jadi praktik ini melibatkan semua pekerjaan yang mengoptimalkan elemen-elemen di website kita untuk meningkatkan peringkat mesin pencari dan memberikan pengalaman pengguna yang lebih baik.&nbsp;</p>\r\n<p>SEO Off-Page mengacu pada tindakan yang dilakukan di luar website dalam usaha meningkatkan peringkat di SERP. Utamanya dilakukan untuk membangun banyak backlink yang berkualitas dari website lain untuk mengacu ke website kita, serta aktivitas lain yang pada intinya dillakukan untuk meningkatkan reputasi dan otoritas website.</p>\r\n<h3><strong>Komponen Utama Pembentuk SEO On-Page dan Off-Page</strong></h3>\r\n<p><strong>Komponen Pembentuk SEO On-Page</strong></p>\r\n<ul>\r\n<li>Kualitas Konten: Konten yang berkualitas tinggi, relevan, dan orisinal yang memberikan nilai kepada pengguna.</li>\r\n<li>Optimisasi Kata Kunci: Penggunaan kata kunci dan frasa yang relevan secara efektif dalam konten, judul, heading, dan meta deskripsi.</li>\r\n<li>Tag Judul: Tag judul yang dioptimalkan dan menarik yang mencakup kata kunci utama.</li>\r\n<li>Meta Deskripsi: Meta deskripsi yang menarik yang merangkum konten dan mencakup kata kunci yang relevan.</li>\r\n<li>Tag Header: Penggunaan tag H1, H2, H3, dll., untuk menyusun konten dan menyoroti poin-poin utama.</li>\r\n<li>Struktur URL: URL yang bersih, deskriptif, mencakup kata kunci yang relevan.</li>\r\n<li>Internal Linking: Tautan ke halaman lain di website kita untuk meningkatkan navigasi dan distribusi link equity.</li>\r\n<li>Optimisasi Gambar: Nama file yang deskriptif, teks alt, dan gambar yang dikompresi untuk waktu muat yang lebih cepat.Kesesuaian untuk Perangkat Mobile: Memastikan website kita responsif dan memberikan pengalaman pengguna yang baik di perangkat mobile.</li>\r\n<li>Kecepatan Halaman: Peongoptimalan website untuk waktu muat yang cepat.</li>\r\n<li>SSL/HTTPS: Memastikan situs web aman dengan HTTPS.</li>\r\n<li>Schema Markup: Menggunakan data terstruktur untuk membantu mesin pencari memahami konten dengan lebih baik.</li>\r\n</ul>\r\n<p><strong>Komponen Pembentuk SEO Off-Page</strong></p>\r\n<ul>\r\n<li>Backlink: Mendapatkan tautan dari website lain yang relevan dan memiliki otoritas. Dianggap sebagai salah satu faktor terpenting dalam peringkat.</li>\r\n<li>Sinyal Sosial: Aktivitas di platform media sosial yang menunjukkan seberapa banyak konten kita dibagikan karena menarik dan dinikmati masyarakat.</li>\r\n<li>Guest Blogging: Menulis artikel untuk website lain dengan tautan balik ke website kita.</li>\r\n<li>Outreach Influencer: Berkolaborasi dengan influencer untuk mempromosikan konten atau website kita.</li>\r\n<li>Posting Forum: Berpartisipasi dalam forum dan komunitas online yang berkaitan dengan topik/niche kita lalu menyertakan link ke website kita jika relevan.</li>\r\n<li>Pemasaran Konten: Membuat konten berharga sehingga dapat secara sukarela dibagikan dan ditautkan oleh orang lain.</li>\r\n<li>Penyebutan Brand: Brand kita disebut di website lain, meskipun tanpa ada link yang menghubungkan langsung ke website.</li>\r\n<li>Ulasan dan Peringkat: Mendapat ulasan dan peringkat positif di website pihak ketiga.</li>\r\n</ul>\r\n<h3>Kesimpulan Perbedaan SEO On-Page dan Off-Page</h3>\r\n<p><strong>Perbedaan :</strong></p>\r\n<ul>\r\n<li>On-Page : Lokasi Optimasi Berfokus mengoptimalkan elemen di dalam website kita sendiri.</li>\r\n<li>Off-Page : Melibatkan aktivitas di luar website untuk meningkatkan otoritas dan reputasi.</li>\r\n</ul>\r\n<p><strong>Kontrol :</strong></p>\r\n<ul>\r\n<li>On-Page : Kita memiliki kendali penuh atas elemen yang bisa dioptimalkan dalam website.</li>\r\n<li>Off-Page : Karena bergantung pada website lain dan faktor eksternal, kendali yang kita punya lebih sedikit.</li>\r\n</ul>\r\n<p><strong>Fokus :</strong></p>\r\n<ul>\r\n<li>On-Page : Berkonsentrasi dalam meningkatkan pengalaman pengguna dan memastikan konten relevan dan berharga.</li>\r\n<li>Off-Page : Berfokus pada membangun otoritas dan kepercayaan melalui sinyal eksternal seperti backlink dan keterlibatan sosial.</li>\r\n</ul>\r\n<h3>Perbedaan Dasar SEO On-Page dan Off-Page</h3>\r\n<p>Baik itu aspek on-page maupun off-page sama-sama penting untuk diperhatikan dalam strategi SEO yang menyeluruh. SEO on-page memastikan website kita dioptimalkan untuk mesin pencari dan pengguna, sementara SEO off-page membantu membangun otoritas dan reputasi yang diperlukan untuk peringkat lebih tinggi dalam hasil pencarian.</p>\r\n<p>&nbsp;</p>', '<p>SEO work to optimize a web page for high rankings is undoubtedly not an easy task. Although applying SEO is free since its goal is to attract organic traffic (visitors to a website through organic search results rather than paid ads), in practice, it still requires a commitment of time, effort, and, to some extent, costs as well.</p>\r\n<p>In the world of SEO, there are generally two parts: on-page and off-page. Here&rsquo;s an explanation of the difference between these terms:</p>\r\n<h3><strong>Understanding SEO On-Page and Off-Page</strong></h3>\r\n<p>SEO On-Page refers to optimization done within our own website, which is built from two aspects: content and technical. This practice involves all tasks that optimize elements within our website to improve search engine rankings and provide a better user experience.</p>\r\n<p>SEO Off-Page refers to actions taken outside of the website to improve rankings on the SERP (Search Engine Results Page). It mainly involves building high-quality backlinks from other websites to ours and other activities aimed at improving the website\'s reputation and authority.</p>\r\n<h3><strong>Key Components of SEO On-Page and Off-Page</strong></h3>\r\n<p><strong>Components of SEO On-Page</strong></p>\r\n<ul>\r\n<li><strong>Content Quality:</strong> High-quality, relevant, and original content that provides value to users.</li>\r\n<li><strong>Keyword Optimization:</strong> Effective use of relevant keywords and phrases in content, titles, headings, and meta descriptions.</li>\r\n<li><strong>Title Tags:</strong> Optimized and engaging title tags that include primary keywords.</li>\r\n<li><strong>Meta Descriptions:</strong> Engaging meta descriptions that summarize content and include relevant keywords.</li>\r\n<li><strong>Header Tags:</strong> Use of H1, H2, H3 tags, etc., to structure content and highlight main points.</li>\r\n<li><strong>URL Structure:</strong> Clean, descriptive URLs that include relevant keywords.</li>\r\n<li><strong>Internal Linking:</strong> Links to other pages on our website to improve navigation and distribute link equity.</li>\r\n<li><strong>Image Optimization:</strong> Descriptive file names, alt text, and compressed images for faster loading times.</li>\r\n<li><strong>Mobile-Friendliness:</strong> Ensuring the website is responsive and provides a good user experience on mobile devices.</li>\r\n<li><strong>Page Speed:</strong> Optimizing the website for fast loading times.</li>\r\n<li><strong>SSL/HTTPS:</strong> Ensuring the website is secure with HTTPS.</li>\r\n<li><strong>Schema Markup:</strong> Using structured data to help search engines better understand the content.</li>\r\n</ul>\r\n<h3><strong>Components of SEO Off-Page</strong></h3>\r\n<ul>\r\n<li>Backlinks: Acquiring links from other relevant and authoritative websites. Considered one of the most important ranking factors.</li>\r\n<li>Social Signals: Activity on social media platforms showing how much our content is shared because it is engaging and valued.</li>\r\n<li>Guest Blogging: Writing articles for other websites with backlinks to our site.</li>\r\n<li>Influencer Outreach: Collaborating with influencers to promote our content or website.</li>\r\n<li>Forum Posting: Participating in forums and online communities related to our niche and including links to our website if relevant.</li>\r\n<li>Content Marketing: Creating valuable content that is willingly shared and linked to by others.</li>\r\n<li>Brand Mentions: Mentions of our brand on other websites, even without a direct link to our site.</li>\r\n<li>Reviews and Ratings: Receiving positive reviews and ratings on third-party sites.</li>\r\n</ul>\r\n<p><strong>Conclusion: The Difference Between SEO On-Page and Off-Page</strong></p>\r\n<p><strong>Differences:</strong></p>\r\n<ul>\r\n<li>On-Page: Focuses on optimizing elements within our own website.</li>\r\n<li>Off-Page: Involves activities outside the website to improve authority and reputation.</li>\r\n</ul>\r\n<p><strong>Control:</strong></p>\r\n<ul>\r\n<li>On-Page: We have full control over the elements that can be optimized within the website.</li>\r\n<li>Off-Page: Since it depends on other websites and external factors, our control is more limited.</li>\r\n</ul>\r\n<p><strong>Focus:</strong></p>\r\n<ul>\r\n<li>On-Page: Concentrates on enhancing user experience and ensuring the content is relevant and valuable.</li>\r\n<li>Off-Page: Focuses on building authority and trust through external signals such as backlinks and social engagement.</li>\r\n</ul>\r\n<p>Both on-page and off-page aspects are essential to consider in a comprehensive SEO strategy. On-page SEO ensures our website is optimized for search engines and users, while off-page SEO helps build the authority and reputation needed for higher search rankings.</p>', '2024-06-06 04:29:36', 'memahami-dua-dunia-seo-perbedaan-seo-on-page-dan-off-page', 'understanding-the-two-worlds-of-seo-the-difference-between-on-page-and-off-page-seo', 'Memahami Perbedaan SEO On-Page dan Off-Page: Strategi Optimalisasi SEO', 'Pelajari perbedaan antara SEO On-Page dan Off-Page. Temukan cara mengoptimalkan website Anda melalui konten, teknis, dan backlink untuk meningkatkan peringkat di mesin pencari.', 'Understanding the Differences Between On-Page and Off-Page SEO: SEO Optimization Strategies', 'Learn the differences between On-Page and Off-Page SEO. Discover how to optimize your website through content, technical aspects, and backlinks to improve search engine rankings.'),
(2, 'Jasa Pembuatan Website Custom Website Unik Sesuai Kebutuhan Bisnis Anda', 'Custom Website Development Services Unique Websites Tailored to Your Business Needs', '1725955043_5b6474d670cc0799e090.png', '<p>Dalam era digital saat ini, memiliki <strong>website custom</strong> sangat penting untuk membedakan bisnis Anda dari kompetitor. Kami menyediakan <em>jasa pembuatan website custom</em> yang dirancang khusus sesuai dengan kebutuhan unik dan karakter bisnis Anda. Website yang kami buat akan mencerminkan identitas bisnis Anda dengan desain dan fitur yang disesuaikan sepenuhnya.</p>\r\n<h2>Keunggulan Jasa Pembuatan Website Custom</h2>\r\n<ul>\r\n<li><strong>Desain Unik:</strong> Setiap website yang kami buat dirancang secara eksklusif sesuai dengan visi dan branding bisnis Anda.</li>\r\n<li><strong>Fitur Sesuai Permintaan:</strong> Kami menyediakan fitur custom sesuai kebutuhan bisnis Anda, seperti sistem manajemen konten, toko online, atau integrasi dengan aplikasi pihak ketiga.</li>\r\n<li><strong>SEO Optimized:</strong> Website custom yang kami bangun dioptimalkan untuk mesin pencari agar bisnis Anda mudah ditemukan di Google.</li>\r\n<li><strong>Responsive Design:</strong> Website Anda akan terlihat sempurna di berbagai perangkat, mulai dari smartphone hingga komputer desktop.</li>\r\n</ul>\r\n<h2>Mengapa Memilih Jasa Pembuatan Website Custom?</h2>\r\n<p>Kami mengerti bahwa setiap bisnis memiliki kebutuhan yang berbeda-beda. Dengan <strong>jasa pembuatan website custom</strong>, Anda mendapatkan website yang tidak hanya terlihat profesional, tetapi juga memiliki fungsionalitas yang spesifik sesuai dengan bisnis Anda. Kami bekerja sama dengan Anda dalam setiap tahap, mulai dari perencanaan hingga pengembangan, memastikan hasil akhir yang sesuai harapan.</p>\r\n<p>Tidak ada solusi satu untuk semua ketika datang ke website. Setiap proyek kami adalah unik dan kami bangga membantu klien kami memiliki website yang benar-benar sesuai dengan kebutuhan mereka.</p>\r\n<p>Hubungi kami sekarang untuk diskusi lebih lanjut dan mulai membangun website impian Anda!</p>', '<p>In today&rsquo;s digital age, having a <strong>custom website</strong> is essential to stand out from the competition. We offer <em>custom website development services</em> tailored to meet your unique business needs and vision. Our custom websites are designed to reflect your brand identity with features and functionality that align with your goals.</p>\r\n<h2>Benefits of Our Custom Website Development Services</h2>\r\n<ul>\r\n<li><strong>Unique Design:</strong> Every website we create is designed specifically to reflect your brand&rsquo;s identity and business goals.</li>\r\n<li><strong>Custom Features:</strong> We provide tailored features, such as content management systems, e-commerce solutions, or third-party integrations, based on your business needs.</li>\r\n<li><strong>SEO Optimized:</strong> Our custom websites are built with SEO best practices, ensuring your business ranks well in search engines like Google.</li>\r\n<li><strong>Responsive Design:</strong> Your website will look flawless across all devices, from smartphones to desktop computers.</li>\r\n</ul>\r\n<h2>Why Choose Custom Website Development?</h2>\r\n<p>We understand that every business is unique, and one-size-fits-all solutions don&rsquo;t work for everyone. With our <strong>custom website development services</strong>, you get a website that not only looks professional but also has the exact functionality you need. We work closely with you at every stage, from planning to development, ensuring that the final product meets your expectations.</p>\r\n<p>There&rsquo;s no one-size-fits-all approach when it comes to websites. Every project we take on is unique, and we pride ourselves on delivering websites that are perfectly suited to our clients&rsquo; needs.</p>\r\n<p>Contact us today for more information and start building your dream website with us!</p>', '2024-06-06 04:29:36', 'jasa-pembuatan-website-custom-website-unik-sesuai-kebutuhan-bisnis-anda', 'custom-website-development-services-unique-websites-tailored-to-your-business-needs', 'Jasa Pembuatan Website Custom - Solusi Fleksibel dan Kreatif untuk Bisnis Anda', 'Kami menawarkan jasa pembuatan website custom sesuai kebutuhan Anda. Dengan desain unik dan fitur khusus, website Anda akan tampil beda dan fungsional.', 'Custom Website Development Services - Flexible and Creative Solutions for Your Business', 'We offer custom website development services tailored to your needs. With unique designs and special features, your website will stand out and be highly functional.'),
(3, 'Jasa Pembuatan Website UMKM Website Profesional untuk Mendukung Bisnis Anda', 'Website Development Services for SMEs Professional Website Solutions to Support Your Business', '1725955821_651bfe07f4ad6afe9811.jpg', '<p>Di era digital saat ini, memiliki website sangat penting, termasuk bagi usaha kecil dan menengah (UMKM). Kami menawarkan <strong>jasa pembuatan website UMKM</strong> yang dirancang khusus untuk membantu bisnis Anda berkembang secara online. Website yang profesional dapat meningkatkan kredibilitas, memperluas pasar, dan memudahkan pelanggan dalam menemukan produk atau layanan Anda.</p>\r\n<h2>Keuntungan Memiliki Website untuk UMKM</h2>\r\n<ul>\r\n<li><strong>Meningkatkan Kredibilitas:</strong> Website membantu bisnis Anda terlihat lebih profesional di mata pelanggan.</li>\r\n<li><strong>Mudah Ditemukan:</strong> Dengan optimasi SEO, website UMKM Anda akan mudah ditemukan di mesin pencari seperti Google.</li>\r\n<li><strong>Memperluas Jangkauan Pasar:</strong> Website memungkinkan bisnis Anda menjangkau pelanggan dari berbagai lokasi, bahkan luar kota atau luar negeri.</li>\r\n<li><strong>Menampilkan Produk atau Layanan:</strong> Dengan website, Anda bisa menampilkan katalog produk atau layanan yang mudah diakses oleh calon pelanggan kapan saja.</li>\r\n</ul>\r\n<h2>Layanan Jasa Pembuatan Website UMKM yang Kami Tawarkan</h2>\r\n<p>Kami memahami bahwa setiap UMKM memiliki kebutuhan yang berbeda. Oleh karena itu, kami menawarkan <strong>jasa pembuatan website</strong> yang fleksibel dan disesuaikan dengan kebutuhan bisnis Anda. Beberapa fitur yang kami tawarkan antara lain:</p>\r\n<ul>\r\n<li>Desain website yang menarik dan mudah digunakan</li>\r\n<li>Optimasi SEO untuk meningkatkan peringkat di Google</li>\r\n<li>Fitur e-commerce untuk UMKM yang ingin berjualan online</li>\r\n<li>Integrasi dengan media sosial</li>\r\n<li>Dukungan teknis dan maintenance berkala</li>\r\n</ul>\r\n<p>Dengan <strong>jasa pembuatan website UMKM</strong> dari kami, Anda bisa lebih fokus pada pengembangan bisnis, sementara kami membantu menghadirkan solusi digital yang tepat untuk bisnis Anda.</p>\r\n<p>Hubungi kami sekarang untuk mendapatkan konsultasi gratis dan mulai membangun website UMKM Anda!</p>', '<p>In today&rsquo;s digital era, having a website is crucial, even for small and medium-sized businesses (SMEs). We offer <strong>website development services for SMEs</strong> specifically designed to help your business grow online. A professional website can increase credibility, expand market reach, and make it easier for customers to find your products or services.</p>\r\n<h2>Benefits of Having a Website for SMEs</h2>\r\n<ul>\r\n<li><strong>Increase Credibility:</strong> A website helps your business appear more professional in the eyes of customers.</li>\r\n<li><strong>Easy to Find:</strong> With SEO optimization, your SME website will be easily found on search engines like Google.</li>\r\n<li><strong>Expand Market Reach:</strong> A website allows your business to reach customers from various locations, even outside your city or country.</li>\r\n<li><strong>Showcase Products or Services:</strong> With a website, you can display a catalog of products or services that potential customers can access anytime.</li>\r\n</ul>\r\n<h2>Our Website Development Services for SMEs</h2>\r\n<p>We understand that every SME has different needs. That\'s why we offer <strong>website development services</strong> that are flexible and tailored to your business requirements. Some features we offer include:</p>\r\n<ul>\r\n<li>Attractive and user-friendly website design</li>\r\n<li>SEO optimization to boost Google rankings</li>\r\n<li>E-commerce features for SMEs wanting to sell online</li>\r\n<li>Social media integration</li>\r\n<li>Technical support and regular maintenance</li>\r\n</ul>\r\n<p>With our <strong>website development services for SMEs</strong>, you can focus on growing your business while we provide the right digital solution for your needs.</p>\r\n<p>Contact us today for a free consultation and start building your SME website with us!</p>', '2024-06-06 04:29:36', 'jasa-pembuatan-website-umkm-website-profesional-untuk-mendukung-bisnis-anda', 'website-development-services-for-smes-professional-website-solutions-to-support-your-business', 'Jasa Pembuatan Website UMKM - Meningkatkan Bisnis Anda secara Online', 'Solusi terbaik bagi UMKM untuk berkembang di dunia digital. Jasa pembuatan website UMKM dengan desain menarik dan optimasi SEO untuk meningkatkan penjualan.', 'UMKM Website Development Services - Boost Your Business Online', 'The best solution for UMKM to grow in the digital world. UMKM website development services with attractive design and SEO optimization to increase sales.'),
(5, 'Jasa Pembuatan Website Bogor Solusi Profesional untuk Bisnis Anda', 'Website Development Services Bogor Professional Solutions for Your Business', '1725954453_0614623d347f6d4b79fe.jpg', '<p>Meningkatkan kehadiran online bisnis Anda di era digital ini sangat penting, terutama di kota besar seperti Bogor. Kami menyediakan <strong>jasa pembuatan website di Bogor</strong> yang dirancang khusus untuk mendukung bisnis lokal dan UMKM dalam mengembangkan pasar mereka secara online. Website yang kami buat tidak hanya tampil menarik tetapi juga berfungsi optimal untuk memudahkan pelanggan menemukan bisnis Anda.</p>\r\n<h2>Keuntungan Memiliki Website untuk Bisnis di Bogor</h2>\r\n<ul>\r\n<li><strong>Menjangkau Lebih Banyak Pelanggan:</strong> Website membantu bisnis Anda menjangkau pelanggan lebih luas, baik di dalam kota maupun luar kota.</li>\r\n<li><strong>Meningkatkan Kredibilitas:</strong> Bisnis yang memiliki website terlihat lebih profesional dan terpercaya di mata calon pelanggan.</li>\r\n<li><strong>Optimasi SEO Lokal:</strong> Dengan optimasi SEO, website Anda akan lebih mudah ditemukan oleh pengguna di Bogor dan sekitarnya melalui mesin pencari.</li>\r\n<li><strong>Desain Responsif:</strong> Website Anda akan tampil sempurna di berbagai perangkat, mulai dari smartphone hingga desktop.</li>\r\n</ul>\r\n<h2>Mengapa Memilih Jasa Pembuatan Website Bogor dari Kami?</h2>\r\n<p>Kami memahami kebutuhan khusus dari bisnis lokal di Bogor, baik itu untuk restoran, toko retail, jasa layanan, maupun UMKM lainnya. Dengan <strong>jasa pembuatan website</strong> kami, Anda akan mendapatkan layanan yang disesuaikan dengan karakteristik bisnis Anda. Beberapa layanan kami meliputi:</p>\r\n<ul>\r\n<li>Desain website yang sesuai dengan identitas bisnis Anda</li>\r\n<li>Optimasi SEO untuk meningkatkan peringkat di mesin pencari lokal</li>\r\n<li>Integrasi media sosial untuk memperluas jangkauan pemasaran online</li>\r\n<li>Dukungan teknis dan perawatan berkala untuk memastikan website selalu berfungsi dengan baik</li>\r\n</ul>\r\n<p>Dengan pengalaman dan keahlian kami, kami berkomitmen untuk membantu bisnis Anda berkembang dan sukses secara online di kota Bogor. Hubungi kami sekarang dan mulai bangun website profesional untuk bisnis Anda!</p>', '<p>Enhancing your business&rsquo;s online presence in today&rsquo;s digital era is crucial, especially in a large city like Bogor. We offer <strong>website development services in Bogor</strong> specifically designed to help local businesses and SMEs expand their reach online. Our websites are not only visually appealing but also functionally optimized to make it easier for customers to find your business.</p>\r\n<h2>Benefits of Having a Website for Your Business in Bogor</h2>\r\n<ul>\r\n<li><strong>Reach More Customers:</strong> A website helps your business reach a broader audience, both within and outside the city.</li>\r\n<li><strong>Increase Credibility:</strong> Businesses with websites appear more professional and trustworthy to potential customers.</li>\r\n<li><strong>Local SEO Optimization:</strong> With SEO optimization, your website will be more visible to users in Bogor and surrounding areas via search engines.</li>\r\n<li><strong>Responsive Design:</strong> Your website will look perfect on all devices, from smartphones to desktops.</li>\r\n</ul>\r\n<h2>Why Choose Our Website Development Services in Bogor?</h2>\r\n<p>We understand the specific needs of local businesses in Bogor, whether it&rsquo;s for restaurants, retail stores, service providers, or other SMEs. With our <strong>website development services</strong>, you&rsquo;ll receive a solution tailored to your business&rsquo;s unique characteristics. Our services include:</p>\r\n<ul>\r\n<li>Website design that aligns with your business&rsquo;s identity</li>\r\n<li>SEO optimization to improve local search engine rankings</li>\r\n<li>Social media integration to expand your online marketing reach</li>\r\n<li>Technical support and regular maintenance to ensure your website runs smoothly</li>\r\n</ul>\r\n<p>With our experience and expertise, we are committed to helping your business grow and succeed online in Bogor. Contact us today and start building a professional website for your business!</p>', '2024-06-06 04:29:36', 'jasa-pembuatan-website-bogor-solusi-profesional-untuk-bisnis-anda', 'website-development-services-bogor-professional-solutions-for-your-business', 'Jasa Pembuatan Website Bogor - Solusi Profesional untuk Bisnis Anda', 'Jasa pembuatan website Bogor yang menawarkan desain responsif dan optimasi SEO. Meningkatkan kehadiran online bisnis Anda dengan website profesional.', 'Website Development Services in Bogor - Professional Solutions for Your Business', 'Website development services in Bogor offering responsive design and SEO optimization. Boost your business\'s online presence with a professional website.'),
(6, 'Jasa Pembuatan Website Jogja Solusi Profesional untuk Bisnis Anda', 'Website Development Services Jogja Professional Solutions for Your Business', '1725954161_e10fa62cfa5f0c595cf5.png', '<p>Apakah Anda memiliki bisnis di Jogja dan ingin meningkatkan kehadiran online? Kami menyediakan <strong>jasa pembuatan website di Jogja</strong> yang dapat membantu bisnis lokal dan UMKM dalam membangun website profesional untuk menarik lebih banyak pelanggan. Website yang kami tawarkan didesain untuk memudahkan pelanggan dalam menemukan informasi tentang produk atau layanan Anda.</p>\r\n<h2>Manfaat Website untuk Bisnis di Jogja</h2>\r\n<ul>\r\n<li><strong>Meningkatkan Kredibilitas:</strong> Dengan memiliki website, bisnis Anda akan tampak lebih profesional dan terpercaya.</li>\r\n<li><strong>Memperluas Jangkauan Pasar:</strong> Website membantu bisnis Anda menjangkau pelanggan yang lebih luas, tidak hanya di Jogja, tetapi juga di luar kota.</li>\r\n<li><strong>Optimasi SEO Lokal:</strong> Website Anda akan dioptimalkan untuk muncul di hasil pencarian lokal di Jogja.</li>\r\n<li><strong>Tampilan Responsif:</strong> Website akan terlihat sempurna di semua perangkat, baik di smartphone, tablet, maupun komputer.</li>\r\n</ul>\r\n<h2>Layanan Jasa Pembuatan Website Jogja</h2>\r\n<p>Kami menyediakan layanan <strong>pembuatan website</strong> yang dapat disesuaikan dengan kebutuhan bisnis Anda. Berikut adalah beberapa fitur yang kami tawarkan:</p>\r\n<ul>\r\n<li>Desain website yang sesuai dengan identitas bisnis Anda</li>\r\n<li>Optimasi SEO untuk meningkatkan visibilitas di mesin pencari</li>\r\n<li>Integrasi media sosial untuk meningkatkan interaksi dengan pelanggan</li>\r\n<li>Dukungan teknis dan perawatan berkala untuk memastikan website berjalan lancar</li>\r\n</ul>\r\n<p>Dengan <strong>jasa pembuatan website Jogja</strong> dari kami, Anda dapat lebih fokus mengembangkan bisnis, sementara kami mengurus solusi digital yang tepat untuk mendukung pertumbuhan Anda.</p>\r\n<p>Hubungi kami sekarang dan mulailah membangun website yang profesional untuk bisnis Anda di Jogja!</p>', '<p>Do you own a business in Jogja and want to boost your online presence? We offer <strong>website development services in Jogja</strong> to help local businesses and SMEs build professional websites that attract more customers. Our websites are designed to make it easier for your customers to find information about your products or services.</p>\r\n<h2>Benefits of Having a Website for Your Business in Jogja</h2>\r\n<ul>\r\n<li><strong>Increase Credibility:</strong> Having a website makes your business appear more professional and trustworthy.</li>\r\n<li><strong>Expand Market Reach:</strong> A website helps your business reach a broader audience, not only in Jogja but also beyond.</li>\r\n<li><strong>Local SEO Optimization:</strong> Your website will be optimized to appear in local search results in Jogja.</li>\r\n<li><strong>Responsive Design:</strong> The website will look perfect on all devices, including smartphones, tablets, and desktops.</li>\r\n</ul>\r\n<h2>Our Website Development Services in Jogja</h2>\r\n<p>We provide <strong>website development services</strong> that can be tailored to meet your business needs. Some features we offer include:</p>\r\n<ul>\r\n<li>Website design that aligns with your business identity</li>\r\n<li>SEO optimization to increase visibility on search engines</li>\r\n<li>Social media integration to boost customer interaction</li>\r\n<li>Technical support and regular maintenance to ensure smooth website performance</li>\r\n</ul>\r\n<p>With our <strong>website development services in Jogja</strong>, you can focus on growing your business while we handle the right digital solutions to support your growth.</p>\r\n<p>Contact us today and start building a professional website for your business in Jogja!</p>', '2024-07-10 10:38:58', 'jasa-pembuatan-website-jogja-solusi-profesional-untuk-bisnis-anda', 'website-development-services-jogja-professional-solutions-for-your-business', 'Jasa Pembuatan Website Jogja - Solusi Kreatif dan Profesional untuk Bisnis Anda', 'Kami menyediakan jasa pembuatan website Jogja dengan desain menarik dan SEO-friendly. Solusi terbaik untuk meningkatkan visibilitas bisnis Anda di internet.', 'Website Development Services in Jogja - Creative and Professional Solutions for Your Business', 'We provide website development services in Jogja with attractive and SEO-friendly designs. The best solution to increase your business visibility on the internet.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_emailpbn`
--

CREATE TABLE `tb_emailpbn` (
  `id_emailpbn` int NOT NULL,
  `creator_emailpbn` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggalbuat_emailpbn` datetime NOT NULL,
  `alamat_emailpbn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password_emailpbn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `infolain_emailpbn` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_emailpbn`
--

INSERT INTO `tb_emailpbn` (`id_emailpbn`, `creator_emailpbn`, `tanggalbuat_emailpbn`, `alamat_emailpbn`, `password_emailpbn`, `infolain_emailpbn`) VALUES
(3, 'Muhammad Bintang Saftar Arief', '2024-12-09 07:23:10', 'bintang@gmail.com', 'bintangsaftar', 'blogspot'),
(4, 'Siti Putri Diana', '2024-12-09 07:23:58', 'diana@gmail.com', 'dianaputri', 'blogspot'),
(5, 'Muhammad Rudi Hartono', '2024-12-09 07:34:40', 'rudi@gmail.com', 'rudihartono', 'blogspot'),
(6, 'Rio Anugrah putra', '2024-12-09 07:35:28', 'rioanugrah@gmail.com', 'anugrahrio', 'blogspot'),
(7, 'Bayu Valent', '2024-12-09 07:36:17', 'bayu@gmail.com', 'bayuvalent', 'blogspot');

-- --------------------------------------------------------

--
-- Table structure for table `tb_meta`
--

CREATE TABLE `tb_meta` (
  `id_seo` int UNSIGNED NOT NULL,
  `nama_halaman` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_title_id` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_description_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_title_en` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_description_en` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_meta`
--

INSERT INTO `tb_meta` (`id_seo`, `nama_halaman`, `meta_title_id`, `meta_description_id`, `meta_title_en`, `meta_description_en`) VALUES
(1, 'Beranda', 'Beranda | Elecomp Indonesia', 'Temukan informasi lengkap tentang perusahaan Competent dan layanan unggulan kami di halaman Beranda.', 'Home | Elecomp Indonesia', 'Discover complete information about Competent Company and our top services on the Home page.'),
(2, 'Tentang Kami', 'Tentang Kami | Elecomp Indonesia', 'Pelajari lebih lanjut tentang sejarah, visi, misi, dan nilai-nilai perusahaan Competent di halaman T', 'About Us | Elecomp Indonesia', ' Learn more about the history, vision, mission, and values of Competent Company on the About Us page'),
(3, 'Artikel', 'Artikel | Elecomp Indonesia', ' Ikuti artikel dan berita terbaru dari perusahaan Competent di halaman Blog kami.', 'Article | Elecomp Indonesia', 'Follow the latest articles and news from Competent Company on our Blog page.'),
(4, 'Layanan', 'Layanan | Elecomp Indonesia', 'Jelajahi berbagai materi pelatihan yang disediakan oleh Competent untuk meningkatkan keterampilan pr', 'Services | Elecomp Indonesia', 'Explore various training materials provided by Competent to enhance your professional skills.'),
(5, 'Aktivitas', 'Aktivitas | Elecomp Indonesia', 'Lihat daftar klien kami dan studi kasus tentang bagaimana kami telah membantu mereka mencapai kesuks', 'Activities | Elecomp Indonesia', 'View our client list and case studies on how we have helped them achieve success.'),
(6, 'Kontak', 'Kontak | Elecomp Indonesia', 'Hubungi tim Competent untuk pertanyaan lebih lanjut atau permintaan layanan di halaman Kontak.', 'Contact | Elecomp Indonesia', 'Contact the Competent team for further inquiries or service requests on the Contact page.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pbn`
--

CREATE TABLE `tb_pbn` (
  `id_pbn` int NOT NULL,
  `id_emailpbn` int NOT NULL,
  `creator_pbn` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggalbuat_pbn` datetime NOT NULL,
  `alamat_pbn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tema_pbn` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_pbn`
--

INSERT INTO `tb_pbn` (`id_pbn`, `id_emailpbn`, `creator_pbn`, `tanggalbuat_pbn`, `alamat_pbn`, `tema_pbn`) VALUES
(2, 3, 'Muhammad Bintang Saftar Arief', '2024-12-09 07:25:00', 'https://jendela-destinasi.blogspot.com/', 'Wisata'),
(3, 4, 'Siti Putri Diana', '2024-12-09 07:26:05', 'https://wisatadiblog.blogspot.com/', 'Wisata'),
(4, 5, 'Muhammad Rudi Hartono', '2024-12-09 07:37:29', 'https://ayoliburansekarang.blogspot.com/', 'Wisata'),
(5, 6, 'Rio Anugrah putra', '2024-12-09 07:38:25', 'https://beatifulbanyuwangi.blogspot.com', 'Wisata'),
(6, 7, 'Bayu Valent ', '2024-12-09 07:39:43', 'https://kuyteknologi.blogspot.com/', 'Teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int UNSIGNED NOT NULL,
  `nama_produk_in` varchar(200) NOT NULL,
  `nama_produk_en` varchar(200) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk_in` text,
  `deskripsi_produk_en` text,
  `slug_in` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `meta_title_id` varchar(100) DEFAULT NULL,
  `meta_description_id` varchar(255) DEFAULT NULL,
  `meta_title_en` varchar(100) DEFAULT NULL,
  `meta_description_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk_in`, `nama_produk_en`, `foto_produk`, `deskripsi_produk_in`, `deskripsi_produk_en`, `slug_in`, `slug_en`, `meta_title_id`, `meta_description_id`, `meta_title_en`, `meta_description_en`) VALUES
(2, 'Jasa Pembuatan WebGIS', 'WebGIS Development Services', 'WebGIS Development Services_Jasa Pembuatan WebGIS_12092024075431.png', '<p>Elecomp Indonesia menyediakan Jasa Pembuatan WebGIS (Website Sistem Informasi Geografis).</p>', '<p>Elecomp Indonesia provides WebGIS (Web-based Geographic Information System) development services.</p>', 'jasa-pembuatan-webgis', 'webgis-development-services', 'Jasa Pembuatan WebGIS Profesional - Elecomp Indonesia', 'Elecomp Indonesia menyediakan jasa pembuatan WebGIS (Website Sistem Informasi Geografis) untuk kebutuhan informasi geografis yang interaktif dan mudah diakses.', 'Professional WebGIS Development Services - Elecomp Indonesia', 'Elecomp Indonesia offers WebGIS (Geographic Information System Website) development services for interactive and easily accessible geographic information needs.'),
(3, 'Pengembangan Sistem Informasi', 'Information System Development', 'Information System Development_Pengembangan Sistem Informasi_12092024075444.png', '<div>\r\n<p>Elecomp Indonesia menyediakan Jasa Pengembangan Sistem Informasi Yang Bisa di Customize Sesuai Dengan Kebutuhan Client.</p>\r\n</div>', '<p>Elecomp Indonesia offers customizable Information System development services tailored to meet client needs.</p>', 'pengembangan-sistem-informasi', 'information-system-development', 'Jasa Pengembangan Sistem Informasi Kustom - Elecomp Indonesia', 'Elecomp Indonesia menyediakan jasa pengembangan sistem informasi yang dapat dikustomisasi sesuai kebutuhan klien, untuk solusi yang tepat dan efisien.', 'Custom Information System Development Services - Elecomp Indonesia', 'Elecomp Indonesia offers custom information system development services tailored to clients\' needs, providing precise and efficient solutions.'),
(4, 'Jasa Pembuatan Website Toko Online', 'Online Store Website Development Services', 'Online Store Website Development Services_Jasa Pembuatan Website Toko Online_12092024075414.png', '<p>Elecomp Indonesia menyediakan Jasa Pembuatan Website Toko Online / E-Commerce yang dapat digunakan untuk berjualan secara online.</p>', '<p>Elecomp Indonesia provides online store / e-commerce website development services that can be used for online selling.</p>', 'jasa-pembuatan-website-toko-online', 'online-store-website-development-services', 'Tips Memilih Jasa Pembuatan Website yang Tepat untuk Bisnis Anda', 'Pelajari tips penting dalam memilih jasa pembuatan website yang sesuai untuk bisnis Anda. Evaluasi portofolio, layanan, teknologi, dan dukungan untuk memastikan kehadiran online yang kuat dan efektif.', 'Tips for Choosing the Right Website Development Service for Your Business', 'Learn essential tips for selecting a website development service that suits your business. Evaluate portfolios, services, technology, and support to ensure a strong and effective online presence.'),
(7, 'Pendampingan dan Pelatihan Digital Marketing', 'Digital Marketing Training and Support', 'Digital Marketing Training and Support_Pelatihan Digital Marketing_12092024072949.jpg', '<p>Elecomp Indonesia menyediakan jasa Pelatihan dan Pendampingan Digital Marketing (Pemasaran Digital) untuk Perusahaan Swasta, Pemerintahan, Pendidikan, Komunitas, UMKM, dan lain-lain.</p>', '<p>Elecomp Indonesia offers digital marketing training and support services for private companies, government institutions, educational institutions, communities, SMEs, and more.</p>', 'pendampingan-dan-pelatihan-gigital-marketing', 'digital-marketing-training-and-support', NULL, NULL, NULL, NULL),
(8, 'Jasa Pembuatan Aplikasi Mobile ', 'Mobile App Development Services', 'Mobile App Development Services_Jasa Pembuatan Aplikasi Mobile _12092024080032.png', '<p>Elecomp Indonesia menyediakan Jasa Pembuatan Aplikasi Mobile Android dan IOS untuk Perusahaan Swasta, Pemerintahan, Pendidikan, Komunitas, UMKM, dan lain-lain.</p>', '<p>Elecomp Indonesia provides mobile app development services for Android and iOS for private companies, government institutions, educational institutions, communities, SMEs, and more.</p>', 'jasa-pembuatan-aplikasi-mobile', 'mobile-apps-development-services', NULL, NULL, NULL, NULL),
(9, 'Jasa Pembuatan Website Company Profile Professional', 'Professional Company Profile Website Development Services', 'a_Company Profile Professional_12092024081228.png', '<p>Elecomp Indonesia menyediakan Jasa Pembuatan Website Company Profile Profesional, mulai dari Website Perusahaan Swasta, Pemerintahan, Pendidikan, Komunitas, UMKM, dan lain-lain.</p>', '<p>Elecomp Indonesia offers professional company profile website development services, ranging from websites for private companies, government institutions, educational institutions, communities, SMEs, and more.</p>', 'jasa-pembuatan-website-profile-company-professional', 'professional-company-profile-website-development-services', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `logo_perusahaan` varchar(100) NOT NULL,
  `deskripsi_perusahaan_in` text,
  `deskripsi_perusahaan_en` text,
  `deskripsi_kontak_in` text,
  `deskripsi_kontak_en` text,
  `link_maps` text,
  `link_whatsapp` text,
  `favicon_website` varchar(100) NOT NULL,
  `title_website` varchar(100) NOT NULL,
  `foto_utama` varchar(100) NOT NULL,
  `alamat` text,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `teks_footer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `username`, `password`, `nama_perusahaan`, `logo_perusahaan`, `deskripsi_perusahaan_in`, `deskripsi_perusahaan_en`, `deskripsi_kontak_in`, `deskripsi_kontak_en`, `link_maps`, `link_whatsapp`, `favicon_website`, `title_website`, `foto_utama`, `alamat`, `no_hp`, `email`, `teks_footer`) VALUES
(1, 'user', 'user', 'ELECOMP', 'Logo_ELECOMP_14092024054301.png', '<p>Elecomp Indonesia merupakan salah satu Perusahaan di bidang Teknologi Informasi (IT) yang ada di Indonesia. Kami sudah berdiri sejak tahun 2014. Bisnis utama kami adalah menyediakan Jasa Pembuatan Website Company Profile Profesional, Aplikasi Mobile (Android &amp; IOS), Toko Online / E-Commerce, Website Sistem Informasi Geografis (WebGIS), Pengembangan Sistem Informasi (Customize), serta Pelatihan dan Pendampingan Digital Marketing.</p>', '<p>Elecomp Indonesia is one of the Information Technology (IT) companies in Indonesia. We have been established since 2014. Our main business includes providing professional company profile website development services, mobile app development (Android &amp; iOS), online store / e-commerce solutions, Geographic Information System (WebGIS) websites, customizable information system development, as well as digital marketing training and support.</p>', '<div class=\"flex max-w-full flex-col flex-grow\">\r\n<div class=\"min-h-[20px] text-message flex w-full flex-col items-end gap-2 whitespace-normal break-words [.text-message+&amp;]:mt-5\" dir=\"auto\" data-message-author-role=\"assistant\" data-message-id=\"a9c627d4-2ea9-4721-bcb5-8c219dc3d794\">\r\n<div class=\"flex w-full flex-col gap-1 empty:hidden first:pt-[3px]\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert dark\">\r\n<p><strong>Jangan Ragu untuk Menghubungi Kami</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Kami dengan senang hati membuka kesempatan untuk kerja sama atau konsultasi lebih lanjut. Silakan hubungi kami melalui:</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Email</strong>: <a href=\"mailto:elecomp@gmail.com\">Elecomp@gmail.com</a></li>\r\n<li><strong>Nomor Telepon</strong>: +6282131222331</li>\r\n<li><strong>Alamat</strong>: Jl. Danau Bratan Tim. No.H5 A5, Madyopuro, Kec. Kedungkandang, Kota Malang, Jawa Timur 65139</li>\r\n</ul>\r\n<p>Kami menantikan kabar dari Anda dan berterima kasih atas minat serta dukungan Anda!</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"mt-1 flex gap-3 empty:hidden -ml-2\">\r\n<div class=\"items-center justify-start rounded-xl p-1 flex\">\r\n<div class=\"flex items-center\">&nbsp;</div>\r\n</div>\r\n</div>', '<div class=\"flex max-w-full flex-col flex-grow\">\r\n<div class=\"min-h-[20px] text-message flex w-full flex-col items-end gap-2 whitespace-normal break-words [.text-message+&amp;]:mt-5\" dir=\"auto\" data-message-author-role=\"assistant\" data-message-id=\"a9c627d4-2ea9-4721-bcb5-8c219dc3d794\">\r\n<div class=\"flex w-full flex-col gap-1 empty:hidden first:pt-[3px]\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert dark\">\r\n<p><strong>Feel Free to Contact Us</strong></p>\r\n<p>&nbsp;</p>\r\n<p>We are more than happy to welcome opportunities for collaboration or further consultation. Please reach out to us via:</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Email</strong>: <a href=\"mailto:elecomp@gmail.com\">Elecomp@gmail.com</a></li>\r\n<li><strong>Phone Number</strong>: +6282131222331</li>\r\n<li><strong>Address</strong>: Jl. Danau Bratan Tim. No.H5 A5, Madyopuro, Kec. Kedungkandang, Kota Malang, Jawa Timur 65139</li>\r\n</ul>\r\n<p>We look forward to hearing from you and thank you for your interest and support!</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.24101722537!2d112.6632556099459!3d-7.974024292017878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6298db1e5b70b%3A0xaf3552a89f1cc9f0!2sELECOMP%20INDONESIA!5e0!3m2!1sid!2sid!4v1726290314723!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '+6282131222332', 'Favicon_ELECOMP_09092024063219.png', 'Every Client is VIP', '1725932987_ccfa24be31ea70f6644a.jpg', '<p>Jl. Danau Bratan Tim. No.H5 A5, Madyopuro, Kec. Kedungkandang, Kota Malang, Jawa Timur 65139</p>', '0812345678', 'Elecomp@gmail.com', 'Edited with love');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id_slider` int UNSIGNED NOT NULL,
  `file_foto_slider` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id_slider`, `file_foto_slider`) VALUES
(1, 'ELECOMP_12092024153930.jpg'),
(6, 'ELECOMP_12092024153627.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel_pbn`
--
ALTER TABLE `artikel_pbn`
  ADD PRIMARY KEY (`id_artikelpbn`),
  ADD KEY `id_pbn` (`id_pbn`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_aktivitas`
--
ALTER TABLE `tb_aktivitas`
  ADD PRIMARY KEY (`id_aktivitas`);

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_emailpbn`
--
ALTER TABLE `tb_emailpbn`
  ADD PRIMARY KEY (`id_emailpbn`);

--
-- Indexes for table `tb_meta`
--
ALTER TABLE `tb_meta`
  ADD PRIMARY KEY (`id_seo`);

--
-- Indexes for table `tb_pbn`
--
ALTER TABLE `tb_pbn`
  ADD PRIMARY KEY (`id_pbn`),
  ADD KEY `id_emailpbn` (`id_emailpbn`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel_pbn`
--
ALTER TABLE `artikel_pbn`
  MODIFY `id_artikelpbn` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_aktivitas`
--
ALTER TABLE `tb_aktivitas`
  MODIFY `id_aktivitas` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_emailpbn`
--
ALTER TABLE `tb_emailpbn`
  MODIFY `id_emailpbn` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_meta`
--
ALTER TABLE `tb_meta`
  MODIFY `id_seo` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pbn`
--
ALTER TABLE `tb_pbn`
  MODIFY `id_pbn` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

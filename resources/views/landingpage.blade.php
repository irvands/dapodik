<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>DAPODIK</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.7.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <b>UPT. TIKP Dispendik Jawa Timur</b>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#tugasfungsi">Tugas & Fungsi</a></li>
                    <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Selamat Datang di Website UPT.TIKP Dispendik Jawa Timur</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Masuk untuk menggunakan layanan digital yang tersedia.</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="{{route('login')}}"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Masuk</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{asset('frontend/img/hero-img.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>Tentang</h3>

                            <p>
                                Data Pokok Pendidikan atau Dapodik adalah Sistem pendataan skala Nasional yang terpadu,
                                dan merupakan sumber data utama Pendidikan Nasional,
                                yang merupakan bagian dari Program perancanaan pendidikan nasional dalam mewujudkan
                                insan Indonesia yang Cerdas dan Kompetitif.Dapodik digunakan
                                untuk menjaring semua data terkait data kelembagaan dan kurikulum sekolah, data siswa,
                                data guru dan karyawan, serta data sarana dan prasarana setiap
                                sekolah di seluruh Indonesia bahkan hingga sekolah-sekolah Indonesia yang berada di luar
                                negeri

                            </p>

                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{asset('frontend/img/xx.jpg')}}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->



        <!-- ======= Features Section ======= -->
        <section id="tugasfungsi" class="features">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Tugas & Fungsi</h2>
                    <p>Tugas UPT. TIKP Dispendik Jatim</p>
                </header>

                <div class="row">

                    <div class="col-lg-6">
                        <img src="{{asset('frontend/img/features.png')}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Bertugas untuk melaksanakan pengembangan dan pendayagunaan teknologi infomasi
                                        dan komunikasi untuk pendidikan.</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Penyusunan materi e-learning</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pengembangan media pembelajaran berbasis teknologi informasi</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Penyelenggaraan pendidikan teknologi informasi bagi peserta didik, guru, dan
                                        tenaga kependidikan</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pendayagunaan teknologi informasi dan komunikasi bagi peserta didik, guru, dan
                                        tenaga kependidikan</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pelaksanaan tugas-tugas lain yang diberikan oleh Kepala Dinas</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div> <!-- / row -->

                <div class="row">

                <header class="section-header">
                    <p>Fungsi Dapodik</p>
                </header>

                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Alokasi dana BOS bagi sekolah sesuai jumlah siswanya</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Alokasi kuota penerima tunjangan-tunjangan bagi guru yang memenuhi syarat</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Alokasi bantuan sarana dan prasarana bagi sekolah yang fasilitasnya belum memadai</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pengajuan dan perbaikan data kelembagaan sekolah</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pengajuan dan VerVal  data dan Nomor Unik Pendidik dan Tenaga
                                Kependidikan (NUPTK)</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pengajuan dan VerVal data Peserta Didik (Siswa) dan Nomor Induk Siswa Nasional (NISN)</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pengajuan dan Verval data Satuan Pendidikan dan Nomor Pokok Sekolah Nasional (NPSN)</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pemetaan dan pemerataan guru </h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Monitoring dan Evaluasi kebijakan-kebijakan dan program-program Kemdikbud</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Mempercepat dan meningkatkan efektifitas pelaporan yang dilakukan dari sekolah ke kementerian serta dengan mengurangi resiko penyimpangan atau pelanggaran yang ada sebelumnya. </h3>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <img src="{{asset('frontend/img/features.png')}}" class="img-fluid" alt="">
                    </div>

                </div> <!-- / row -->

            </div>

        </section><!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Layanan</h2>
                    <p>Daftar Layanan Yang Tersedia</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h6>Pengajuan NPSN Baru</h6>
                            <p>Syarat :
                                <ul>
                                    <li>Surat permohonan NPSN Baru</li>
                                    <li>Fotocopy dan scan surat ijin pendirian dan operasional</li>
                                    <li>Foto papan nama sekolah dan foto sekolah tampak depan</li>
                                    <li>Surat Keterangan luas tanah milik dan bukan milik</li>
                                    <li>Koordinat lintang dan bujur sekolah</li>
                                    <li>Format Excel Pengajuan</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-discuss-line icon"></i>
                            <h6>Merger/Penutupan/Penghapusan NPSN</h6>
                            <p>Syarat :
                                <ul>
                                    <li>Surat permohonan merger, penutupan, penghapusan npsn (ganda)</li>
                                    <li>Format Excel Pengajuan</li>

                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-discuss-line icon"></i>
                            <h6>Username DAPODIK (Sekolah baru) </h6>
                            <p>Syarat :
                                <ul>
                                    <li>Surat permohonan username dapodik</li>
                                    <li>Surat tugas operator sekolah yg di dalamnya memuat nama, telp dan email</li>
                                    <li>Format Excel Pengajuan</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-box red">
                            <i class="ri-discuss-line icon"></i>
                            <h6>Reset Username DAPODIK </h6>
                            <p>Syarat :
                                <ul>
                                    <li>Surat tugas operator sekolah yg di dalamnya memuat nama, telp dan email</li>
                                    <li>Format Excel Pengajuan</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-box purple">
                            <i class="ri-discuss-line icon"></i>
                            <h6>Approve NUPTK Oleh Dinas </h6>
                            <p>Syarat :
                                <ul>
                                    <li>Upload Data Calon NUPTK oleh Operator Sekolah</li>
                                    <li>Fotocopy dan scan SK pengangkatan</li>
                                    <li>Fotocopy dan scan SK pembagian tugas</li>
                                    <li>Fotocopy dengan dilegalisir dan scan, Ijazah Awal-Terakhir</li>
                                    <li>Fotocopy dan scan KTP </li>
                                    <li>Fotocopy dan scan Kartu Keluarga</li>
                                    <li>Berkas di Bendel/Map per GTK, jangan di campur</li>
                                    <li>Format Excel Pengajuan</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-box pink">
                            <i class="ri-discuss-line icon"></i>
                            <h6>Approve Perubahan Identitas PTK/GTK </h6>
                            <p>Syarat :
                                <ul>
                                    <li>Sudah Upload Data di VervalPTK oleh Operator Sekolah</li>
                                    <li>Fotocopy dan scan KTP </li>
                                    <li>Fotocopy dan scan Kartu Keluarga </li>
                                    <li> Berkas di Bendel/Map per GTK, jangan di campur</li>
                                    <li>Format Excel Pengajuan </li>

                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-discuss-line icon"></i>
                            <h6>Approve Perubahan Identitas Peserta Didik </h6>
                            <p>Syarat :
                                <ul>
                                    <li>Sudah Upload Data di VervalPD oleh Operator Sekolah</li>
                                    <li>Fotocopy dan scan KTP V Fotocopy dan scan Kartu Keluarga </li>
                                    <li>Berkas di Bendel/Map per PD, jangan di campur </li>
                                    <li>Format Excel Pengajuan </li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-discuss-line icon"></i>
                            <h6>Approve Mutasi/Pindah Rombel Peserta Didik </h6>
                            <p>Syarat :
                                <ul>
                                    <li>Surat Permohonan Mutasi PD beserta alasannya </li>
                                    <li>Fotocopy dan scan Ijazah Terakhir, Raport Awal-Akhir </li>
                                    <li>Fotocopy dan scan KTP-KK </li>
                                    <li>Berkas di Bendel/Map per PD, jangan di campur </li>
                                    <li>Format Excel Pengajuan</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h6>Tambah PTK/GTK (Negri)</h6>
                            <p>Syarat :
                                <ul>
                                    <li>Surat permohonan Tambah PTK</li>
                                    <li><a href="http://dapodikdasmen.data.kemdikbud.go.id/3 F-GTK.pdf">Form dapodik
                                            isian GTK</a> </li>
                                    <li>Fotocopy dan scan SK pengangkatan, SK Gubernur Jatim jika ada</li>
                                    <li>Fotocopy dan scan SK pembagian tugas</li>
                                    <li>Fotocopy dengan dilegalisir dan scan, Ijazah terakhir </li>
                                    <li>Fotocopy dan scan KTP</li>
                                    <li>Fotocopy dan scan Kartu Keluarga</li>
                                    <li>Berkas di Bendel/Map per GTK, jangan di campur</li>
                                    <li>Format Excel Pengajuan</li>

                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box pink">
                            <i class="ri-discuss-line icon"></i>
                            <h6>Tambah PTK/GTK (Swasta)</h6>
                            <p>Syarat :
                                <ul>
                                    <li>Sudah Entri Aplikasi Tambah PTK Baru oleh Operator Yayasan</li>
                                    <li><a href="http://dapodikdasmen.data.kemdikbud.go.id/3 F-GTK.pdf">Form dapodik
                                            isian GTK</a> </li>
                                    <li>Fotocopy dan scan SK pengangkatan</li>
                                    <li>Fotocopy dan scan SK pembagian tugas</li>
                                    <li>Fotocopy dengan dilegalisir dan scan, Ijazah terakhir</li>
                                    <li>Fotocopy dan scan KTP</li>
                                    <li>Fotocopy dan scan Kartu Keluarga</li>
                                    <li>Berkas di Bendel/Map per GTK, jangan di campur</li>
                                    <li>Format Excel Pengajuan</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-box pink">
                            <i class="ri-discuss-line icon"></i>
                            <h6>Tarik PTK/GTK</h6>
                            <p>Syarat :
                                <ul>
                                    <li>Surat Penugasan di sekolah tujuan</li>
                                    <li>Format Excel Pengajuan</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-box purple">
                            <i class="ri-discuss-line icon"></i>
                            <h6>Edit Jenis/Kepegawaian/Penugasan PTK/GTK</h6>
                            <p>Syarat :
                                <ul>
                                    <li>Surat Penugasan di sekolah</li>
                                    <li>Dokumen perubahan data (Surat Keputusan/Surat Keterangan) </li>
                                    <li>Format Excel Pengajuan </li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-box red">
                            <i class="ri-discuss-line icon"></i>
                            <h6>Reset Kode Registrasi DAPODIK </h6>
                            <p>Syarat :
                                <ul>
                                    <li>Surat Keterangan alasan reset kode registrasi</li>
                                    <li>Format Excel Pengajuan </li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h6>Nonaktifkan User Verval SDM.Data</h6>
                            <p>Syarat :
                                <ul>
                                    <li>Surat Keterangan alasan penonaktifan </li>
                                    <li>Format Excel Pengajuan</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-discuss-line icon"></i>
                            <h6>Perubahan NOMENKLATUR</h6>
                            <p>Syarat :
                                <ul>
                                    <li>Perubahan Nama Sekolah</li>
                                    <li>Surat ijin operasional </li>
                                    <li> SK KEMENKUMHAM</li>
                                    <li>Surat pengantar dari cabang dinas</li>
                                    <li>Surat Permohonan dari cabang dinas</li>
                                </ul>
                            </p>
                        </div>
                    </div>




                </div>

            </div>

        </section><!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Kontak</h2>
                    <p>Hubungi Kami</p>
                </header>

                <div class="row">


                    <div class="col-md-3">
                        <div class="info-box">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Alamat</h3>
                            <p>Jl. Jagir Sidoresmo V,Wonokromo
                                ,<br>Kota Surabaya,Jawa Timur 60224</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="info-box">
                            <i class="bi bi-telephone"></i>
                            <h3>Hubungi Kami</h3>
                            <p>+62 8113 2211 101<br>(031) 99841277</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="info-box">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Kami</h3>
                            <p>tekkomdik@dindik.jatimprov.go.id</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="info-box">
                            <i class="bi bi-clock"></i>
                            <h3>Jam Buka</h3>
                            <p>Senin - Jum'at<br>08:00 - 16:00</p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>UPT.TIKP Dinas Pendidikan Jawa Timur</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Made with ❤️ <a href="https://instagram.com/yaelahvannn">Irvan Dwi Setiawan</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{ asset('frontend/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('frontend/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('frontend/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{ asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/js/main.js')}}"></script>

</body>

</html>

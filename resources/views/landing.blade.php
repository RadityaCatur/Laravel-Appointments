<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <title>Ngelangi Yuk!</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-training-studio.css') }}">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="logo-img">
                            Ngelangi<em> Yuk!</em>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#profil">Profil</a></li>
                            <li class="scroll-to-section"><a href="#penghargaan">Penghargaan</a></li>
                            <li class="scroll-to-section"><a href="#kelas">Kelas</a></li>
                            <li class="scroll-to-section"><a href="#trainers">Pelatih</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Lokasi</a></li>
                            <li class="main-button"><a href="/login">Member</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="{{ asset('assets/images/gym-video.mp4') }}" type="video/mp4">
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>disini teks disini teks</h6>
                <h2>disini teks disini <em>teks</em></h2>
                <div class="main-button scroll-to-section">
                    <a href="#features">Gabung Ngelangi Yuk!</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="profil">
        <div class="container">
            <div class="row section-heading">
                <div class="features-items-wrapper">
                    <div class="features-items single-feature">
                        <li class="feature-item">
                            <div class="icon">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Profil Kami">
                            </div>
                            <div class="content">
                                <h4>Tentang Kami</h4>
                                <p>Ngelangi Yuk! hadir sebagai komunitas dan penyedia les renang profesional yang lahir
                                    dari semangat para atlet renang dan selam Kota Batu. Berdiri sejak 2021, kami
                                    berkomitmen untuk menghadirkan pengalaman belajar renang yang menyenangkan, aman,
                                    dan dapat dinikmati oleh semua kalangan.</p>
                                <p>Kami percaya bahwa berenang bukan hanya sekadar olahraga, tetapi gaya hidup sehat
                                    dan keterampilan penting yang wajib dikuasai sejak dini.</p>
                            </div>
                        </li>
                    </div>
                    <div class="features-items single-feature right">
                        <li class="feature-item">
                            <div class="content">
                                <h4>🌟 Visi:</h4>
                                <p>Mewujudkan berenang sebagai gaya hidup sehat dan positif bagi semua kalangan, dari
                                    anak-anak hingga lansia.</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="content">
                                <h4>🚀 Misi:</h4>
                                <p>✅ Menjadikan berenang sebagai keterampilan wajib bagi anak-anak sebagai bentuk
                                    pertahanan diri.</p>
                                <p>✅ Memasyarakatkan olahraga renang sebagai aktivitas yang dapat dilakukan sepanjang
                                    usia.</p>
                                <p>✅ Memberikan pengalaman belajar renang yang aman, profesional, dan menyenangkan.</p>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="penghargaan">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Penghargaan</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="penghargaan-items">
                        <li class="penghargaan-item">
                            <div class="left-icon">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Penghargaan 1</h4>
                                <p>Nama: </p>
                                <p>Umur: </p>
                                <p>Jenis Kelas:</p>
                            </div>
                        </li>
                        <li class="penghargaan-item">
                            <div class="left-icon">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Penghargaan 2</h4>
                                <p>Nama: </p>
                                <p>Umur: </p>
                                <p>Jenis Kelas:</p>
                            </div>
                        </li>
                        <li class="penghargaan-item">
                            <div class="left-icon">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Penghargaan 3</h4>
                                <p>Nama: </p>
                                <p>Umur: </p>
                                <p>Jenis Kelas:</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="penghargaan-items">
                        <li class="penghargaan-item">
                            <div class="left-icon">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Penghargaan 4</h4>
                                <p>Nama: </p>
                                <p>Umur: </p>
                                <p>Jenis Kelas:</p>
                            </div>
                        </li>
                        <li class="penghargaan-item">
                            <div class="left-icon">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Penghargaan 5</h4>
                                <p>Nama: </p>
                                <p>Umur: </p>
                                <p>Jenis Kelas:</p>
                            </div>
                        </li>
                        <li class="penghargaan-item">
                            <div class="left-icon">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Penghargaan 6</h4>
                                <p>Nama: </p>
                                <p>Umur: </p>
                                <p>Jenis Kelas:</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="kelas">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Program <em>Unggulan</em></h2>
                        <p>Setiap program didesain agar sesuai kebutuhan peserta, dengan bimbingan instruktur
                            berpengalaman dan suasana latihan yang suportif.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <li><a href='#tabs-1'><img src="{{ asset('assets/images/line-dec.png') }}" alt="">Kelas Anak</a>
                        </li>
                        <li><a href='#tabs-2'><img src="{{ asset('assets/images/line-dec.png') }}" alt="">Kelas
                                Dewasa</a></a></li>
                        <li><a href='#tabs-3'><img src="{{ asset('assets/images/line-dec.png') }}" alt="">Kelas
                                Perempuan</a></a></li>
                        <li><a href='#tabs-4'><img src="{{ asset('assets/images/line-dec.png') }}" alt="">Kelas
                                Terapi</a></a></li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="{{ asset('assets/images/training-image-01.jpg') }}" alt="First Class">
                            <h4>Kelas Grup dan Privat Anak</h4>
                            <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend
                                hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem
                                tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut,
                                accumsan diam.</p>
                        </article>
                        <article id='tabs-2'>
                            <img src="{{ asset('assets/images/training-image-02.jpg') }}" alt="Second Training">
                            <h4>Kelas Dewasa</h4>
                            <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a
                                velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus
                                nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius
                                natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </article>
                        <article id='tabs-3'>
                            <img src="{{ asset('assets/images/training-image-03.jpg') }}" alt="Third Class">
                            <h4>Kelas Khusus Perempuan</h4>
                            <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit
                                amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id
                                scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel,
                                accumsan a neque.</p>
                        </article>
                        <article id='tabs-4'>
                            <img src="{{ asset('assets/images/training-image-04.jpg') }}" alt="Fourth Training">
                            <h4>Kelas Terapi Kesehatan</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget
                                venenatis ipsum commodo et.</p>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Expert <em>Trainers</em></h2>
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor,
                            ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('assets/images/first-trainer.jpg') }}" alt="">
                        </div>
                        <div class="down-content">
                            <span>Strength Trainer</span>
                            <h4>Bret D. Bowers</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan
                                church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('assets/images/second-trainer.jpg') }}" alt="">
                        </div>
                        <div class="down-content">
                            <span>Muscle Trainer</span>
                            <h4>Hector T. Daigl</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan
                                church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('assets/images/third-trainer.jpg') }}" alt="">
                        </div>
                        <div class="down-content">
                            <span>Power Trainer</span>
                            <h4>Paul D. Newman</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan
                                church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                        <iframe
                            src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="Your Email*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="Subject">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" id="message" placeholder="Message"
                                            required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Send Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2020 Training Studio

                        - Designed by <a rel="nofollow" href="https://templatemo.com" class="tm-text-link"
                            target="_parent">TemplateMo</a><br>

                        Distributed by <a rel="nofollow" href="https://themewagon.com" class="tm-text-link"
                            target="_blank">ThemeWagon</a>

                    </p>

                    <!-- You shall support us a little via PayPal to info@templatemo.com -->

                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
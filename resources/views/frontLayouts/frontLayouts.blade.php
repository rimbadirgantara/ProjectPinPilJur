<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Pintar Pilih Jurusan</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="frontTemplate/css/bootstrap.min.css" rel="stylesheet">

        <link href="frontTemplate/css/bootstrap-icons.css" rel="stylesheet">

        <link href="frontTemplate/css/templatemo-topic-listing.css" rel="stylesheet">      

    </head>
    
    <body id="top">

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="{{route('frontPage.index')}}">
                        <i class="bi-back"></i>
                        <span>PinPilJur</span>
                    </a>
          
                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
          
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
          
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#home">Home</a>
                            </li>
          
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#bantuSaya">Bantu Saya</a>
                            </li>
          
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#beginiCaraKerjaNya">Bagaimana Kami Bekerja</a>
                            </li>
          
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#Nanya?">FAQs</a>
                            </li>
          
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#kontak">Kontak</a>
                            </li>
                        </ul>
          
                        <div class="d-none d-lg-block">
                            <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                        </div>
                    </div>
                </div>
            </nav>

      @yield('pages');

<footer class="site-footer section-padding" id="kontak">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="index.html">
                            <i class="bi-back"></i>
                            <span>Pintar Pilih <br>Jurusan</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="site-footer-title mb-3">Sumber</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#home" class="site-footer-link">Home</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#bantuSaya" class="site-footer-link">Bantu Saya</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#beginiCaraKerjaNya" class="site-footer-link">Bagaimana Kami Bekerja</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#Nanya?" class="site-footer-link">FAQs</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#kontak" class="site-footer-link">Kontak</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Informasi</h6>

                        <p class="text-white d-flex mb-1">
                            <a href="tel: +62-8220-0202-0101" class="site-footer-link">
                                +62-8220-0202-0101
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:pinpiljur@proton@proton.me" class="site-footer-link">
                                pinpiljur@proton@proton.me
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mt-3 mt-lg-0 ms-auto">
                        <p class="copyright-text mt-lg-5 mt-4">Copyright © 2048 Topic Listing Center. All rights reserved.
                            <br><br>Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution <a href="https://themewagon.com">ThemeWagon</a></p>
                    </div>

                </div>
            </div>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="frontTemplate/js/jquery.min.js"></script>
        <script src="frontTemplate/js/bootstrap.bundle.min.js"></script>
        <script src="frontTemplate/js/jquery.sticky.js"></script>
        <script src="frontTemplate/js/click-scroll.js"></script>
        <script src="frontTemplate/js/custom.js"></script>

    </body>
</html>

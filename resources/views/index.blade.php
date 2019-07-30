<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('images/clipboard.png')}}" type="image/x-icon">
    <title>WeBook - Welcome</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('dashboard/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('dashboard/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('dashboard/css/grayscale.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">WeBook</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">Wedding Book</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5">Buatlah buku tamu untuk pernikahan anda, lebih mudah dan
                praktis.</h2>
            <a href="{{url('/login')}}" class="btn btn-primary js-scroll-trigger">Mulai</a>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about" class="about-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-white mb-4">Buku Tamu (WeBook)</h2>
                <p class="text-white-50">Buku tamu dirancang berbasis Web, di desain dengan sederhana agar pengguna bisa
                    lebih mudah dalam menggunakan aplikasi ini.
                    aplikasi ini dilengkapi dengan fitur-fitur yang membantu anda dalam penggunaan buku tamu.</p>
                <h5 class="text-white mb-4">Selamat Menempuh Hidup Baru</h5>
            </div>
        </div>
        <img src="img/ipad.png" class="img-fluid" alt="">
    </div>
</section>


<!-- Contact Section -->
<section id="contact" class="contact-section bg-black">
    <div class="container">

        <div class="row">

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Alamat</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">Wringin Anom, Kec. Asembagus Situbondo</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">
                            <a href="#">razak.syaiful.r@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Telepon</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">(+62) 8990531215</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="social d-flex justify-content-center">
            <a href="https://twitter.com/cek_acek" target="_blank" class="mx-2">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.facebook.com/Razak.syaiful.R" target="_blank" class="mx-2">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://github.com/acek27" target="_blank" class="mx-2">
                <i class="fab fa-github"></i>
            </a>
        </div>

    </div>
</section>

<!-- Footer -->
<footer class="bg-black small text-center text-white-50">
    <div class="container">
        Copyright &copy; <a href="https://www.acek.me" target="_blank">Razak Syaiful Rochman</a> 2019
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('/dashboard/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{asset('dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for this template -->
<script src="{{asset('dashboard/js/grayscale.min.js')}}"></script>

</body>

</html>

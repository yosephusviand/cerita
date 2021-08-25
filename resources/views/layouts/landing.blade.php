<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Yosephus Wahyu Eko Novianto, S.Kom" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('img/gk.ico') }}" type="image/x-icon">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('agency') }}/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" style="color: black" href="#page-top">BAKESBANGPOL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('aduan') }}">Aduan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <section class="page-section" style="text-align: center">
        <div class="container">
            <div class="text-right">
                <img class="img-fluid" src="{{ asset('img/gk.png') }}" alt="alternative" width="100px">
            </div>
            <h2 class="section-heading">POJOK MIGUNANI</h2>
            <h3 class="section-subheading">Mari Gugah Nasionalisme Anak Dengan Literasi</h3>
            <div class="row">
                <div class="form-group">
                    <a href="{{ route('cernak') }}" class="btn "><img src="{{ asset('img/cernak.png') }}"
                            style="opacity: 100%" width="200px" alt=""></a>
                    <a href="{{ route('komik') }}" class="btn "><img src="{{ asset('img/komik.png') }}"
                            style="opacity: 100%" width="200px" alt=""></a>
                    <a href="{{ route('pictbook') }}" class="btn "><img src="{{ asset('img/pictbook.png') }}"
                            style="opacity: 100%" width="200px" alt=""></a>
                    <a href="{{ route('puisi') }}" class="btn "><img src="{{ asset('img/puisi.png') }}"
                            style="opacity: 100%" width="200px" alt=""></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <a href="{{ route('piagam') }}" class="btn "><img src="{{ asset('img/piagam.png') }}"
                            style="opacity: 100%" width="200px" alt=""></a>
                    <a href="{{ route('informasi') }}" class="btn "><img src="{{ asset('img/informasi.png') }}"
                            style="opacity: 100%" width="200px" alt=""></a>
                    <a href="{{ route('karya') }}" class="btn "><img src="{{ asset('img/karya.png') }}"
                            style="opacity: 100%" width="200px" alt=""></a>
                    <a href="{{ route('diskusi') }}" class="btn "><img src="{{ asset('img/diskusi.png') }}"
                            style="opacity: 100%" width="200px" alt=""></a>
                </div>
            </div>

        </div>
        <br>
        {{-- <br> --}}
        <div class="row">
            <div class="col-lg-4 col-md-6 text-lg-start">
                <div class="text-center"><button class="btn btn-danger btn-sm text-uppercase"
                        type="button"><b>Pengunjung : {{ Visitor::count() }}</b></button></div>
            </div>
        </div>

    </section>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('agency') }}/js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>

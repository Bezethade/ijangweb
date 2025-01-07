<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<style>
    .nav {
        background-color: #2A8A70;
    }

    .nav-link:hover {
        background-color: #DADADA;
        color: #000;
    }

    .nav-link.active {
        background-color: #DADADA;
        color: #000 !important;
    }
</style>

<body style="background-color:#2A8A70;">
    <nav class="navbar navbar-expand-lg nav navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="img/lauk.png" alt="logo" width="60" class="img-fluid">
                <h1 class="fs-5 mt-2"> BOGAM <br> FISH FRESH
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MENU</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">our product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pb-5">
        <div class="row mt-5 d-flex align-items-center">
            <div class="col-xl-6 text-white">
                <span>WELCOME TO FISH BOGAM</span>
                <h2>BERSAMA KITA BISA
                    MEMBANGUN MASA DEPAN,PERIKANAN YANG LEBIH BAIK</h2>
                <button class="btn mt-5 text-black" style="background-color: #DADADA;">Info Selengkapnya</button>
            </div>

            <div class="col-xl-6 d-flex justify-content-end">
                <img src="img/lauk.png" class="img-fluid w-75" alt="">
            </div>
        </div>
    </div>
    <section class="bg-white">
        <div class="container pt-5">
            <div class="row d-flex align-items-center">
                <div class="col-xl-6">
                    <img src="img/orang.png" class="img-fluid w-75" alt="">
                </div>
                <div class="col-xl-6 text-black">
                    <span class="fs-6 mb-2">About us</span>
                    <h2 class="fs-1 fw-bold mt-3 mb-3">BOGAM <br> FISH FRESH</h2>
                    <p class="fs-5">Bogam fish fresh adalah tempat yang tepat bagi anda penggemar ikan segar,di sini anda akan menemukan berbagai jenis ikan air tawar yang berkualitas tinggi, langsung dari hasil tangkapan peternak atau budidaya.</p>
                </div>
            </div>
        </div>
        <div class="container mt-5 pb-5">
            <div class="row mt-5 d-flex align-items-center">
                <div class="col-xl-6 text-black">
                    <span class="fs-6 mb-2">Our Product</span>
                    <h2 class=" fs-1 fw-bold mt-3 mb-3">BERBAGAI JENIS IKAN <br> MENUNGGU ANDA</h2>
                    <p class="fs-5">terdapat berbagai macam jenis ikan seperti
                        ikan nila, ikan bawal, ikan lele, ikan mas, ikan mujaer, ikan kakap.
                        tidak hanya ikan, tetapi kami juga menyediakan pakan ikan yang terbuat dari
                        pelet, magot, tepung, cacing.</p>
                    <button class="btn mt-5 text-black" style="background-color: #DADADA;">Lihat Product</button>
                </div>
                <div class="col-xl-6 d-flex justify-content-end">
                    <img src="img/pakan-ikan.png" class="img-fluid w-50" alt="">
                </div>
            </div>
            <div>
                <div class="container mt-5 pb-5">
                    <div class="row mt-5 d-flex align-items-center">
                        <div class="col-xl-6 text-black">
                            <span class="fs-6 mb-2">Our Product</span>
                            <h2 class="fs-1 fw-bold mt-3 mb-3">TESTIMONIAL <br>
                                CLIENTS
                            </h2>
                            <p class="fs-5">pelayanan nya ramah dan membantu dalam memilih ikan juga psroses taransaksi nya cepat dan mudah, serta informasi yang di berikan mengenai cara mengelola ikan sangat jelas dan mudah di pahami.</p>
                        </div>
                        <div class="col-xl-6">

                        </div>


                    </div>
                </div>
                <div class="container mt-5 pb-5">
                    <div class="row mt-5 d-flex align-items-center">
                        <div class="col-xl-12 text-center text-black">
                            <h1 class="fw-bold " style="font-size: 50px;">Semoga Ikan Kami sesuai <br> Dengan Selera Anda</h1>
                            <button class="btn mt-5 text-black" style="background-color: #DADADA;">Contact Us</button>
                        </div>
                    </div>
                </div>
    </section>
    <footer>
        <div class="container mt-5 pb-5">
            <div class="row mt-5 d-flex align-items-center">
                <div class="col-xl-4 text-black">
                    <h1 class="fs-1 fw-bold mt-3 mb-3"> Information</h1>
                    <p class="fs-5">ikuti akun sosial media kami untuk mendapatkan <br> informasi terbaru tentang promo dan produk <br> baru.</p>
                </div>
                <div class="col-xl-4">
                    <h1 class="fs-1 fw-bold mt-3 mb-3">Navigation</h1>
                    <p>>Home Page</p>
                    <p>>About Us</p>
                    <p>>Contact Us</p>
                </div>

                <div class="col-xl-4">
                    <h1 class="fs-2 fw-bold mt-3 mb-3 ">Contact Us</h1>
                    <p>BOjonggsmbir Tasikmalaya</p>
                    <p>Bojonggambirfishfresh@gmail.com</p>
                    <p>Email Addres </p>

                </div>
                <div class="container mt-5 pb-5">
                    <div class="row mt-5 d-flex align-items-center">
                        <div class="col-xl-6 text-black">
                            <p>Allright Reserved - Bogam Fish Fresh</p>
                        </div>
                        <div class="col-xl-6 text-black d-flex gap-5 justify-content-end">
                            <h5>DIsclaimer</h5>
                            <h5>DIsclaimer</h5>
                            <h5>DIsclaimer</h5>
                        </div>

                    </div>
                </div>
            </div>

    </footer>
    </div>


    <script src="bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>

</html>
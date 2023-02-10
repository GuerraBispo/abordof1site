<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Abordo F1</title>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Abordo F1">
    <meta name="description" content="Abordo F1 é uma plataforma para quem ama automobilismo.">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/slide.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

</head>

<body>

    <!-- **************** MAIN CONTENT START **************** -->

    <!-- =======================
Header START -->
    <header class="navbar-dark navbar-transparent header-static">

        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="index.html">
                    <img class="light-mode-item navbar-brand-item" src="assets/logo/logo.webp" alt="abordof1" style="height: 70px">
                    <img class="dark-mode-item navbar-brand-item" src="assets/logo/logo.webp" alt="abordof1" style="height: 70px">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto icon-md btn btn-light p-0" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Main navbar START -->
                <div class="collapse navbar-collapse" id="navbarCollapse">

                    <ul class="navbar-nav navbar-nav-scroll ms-auto">
                        <!-- Nav item 4 Notícias -->
                        <li class="nav-item">
                            <a class="nav-link" aria-haspopup="true" href="{{ route('noticia.index') }}"
                                aria-expanded="false">Notícias</a>
                        </li>
                        <!-- Nav item 1 Calendário -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ route('calendario.index') }}" id="homeMenu"
                                aria-haspopup="true" aria-expanded="false">Calendário</a>
                        </li>
                        <!-- Nav item 2 Pilotos -->
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="{{route('piloto.index')}}" id="pagesMenu" aria-haspopup="true"
                                aria-expanded="false">Pilotos</a>

                        </li>

                        <!-- Nav item 3 Construtores -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{route('equipe.index')}}" id="postMenu" aria-haspopup="true"
                                aria-expanded="false">Construtores </a>
                        </li>


                    </ul>
                </div>
                <!-- Main navbar END -->
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- =======================
Header END -->
    <!-- Abordo F1 Inicio -->
    <section class="pt-5 pb-0 position-relative"
        style="background-image: url(assets/images/bg/imagem-header.webp); background-repeat: no-repeat; background-size: cover; background-position: top center;">
        <div class="bg-overlay bg-dark opacity-8"></div>
        <!-- Container START -->
        <div class="container">
            <div class="pt-5">
                <div class="row position-relative">
                    <!-- Title -->
                    <div class="col-xl-8 col-lg-10 mx-auto pt-sm-5 text-center">
                        <!-- Title -->
                        <h1 class="text-white">Abordo F1</h1>
                        <p class="text-white">Já pensou em conversar sobre fórmula 1, com pessoas
                            de diferentes <br> lugares do Brasil? CLique no botão abaixo e venha fazer parte da nossa
                            comunidade <br> que ama automobilismo!
                        </p>
                        <a class="btn btn-lg btn-primary" href="https://chat.whatsapp.com/IWG37bzOcFGKTGJ7q7623i" target="_blank">Grupo do Whatsapp</a><br><br><br>

                    </div>
                    <!-- Title -->
                    <div class="mb-n5 mt-3 mt-lg-5">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Abordo F1 Fim  -->

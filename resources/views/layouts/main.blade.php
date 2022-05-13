<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Блог :: Список постов</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.3.0/css/flag-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/edica/style.css') }}">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/edica/loader.js') }}"></script>
</head>

<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="{{ asset('img/edica/logo.svg') }}" alt="Ladiwals  logo"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Главная<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Блог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Контакты</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<footer class="edica-footer" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">
                <a href="#" class="footer-brand-wrapper">
                    <img src="{{ asset('img/edica/logo.svg') }}" alt="Ladiwals logo">
                </a>
                <p class="contact-details">vladjeslav@gmail.com</p>
                <p class="contact-details">+7 916 647 15 15</p>
                <nav class="footer-social-links">
                    <a href="https://github.com/ladiWals"><i class="fab fa-github"></i></a>
                    <a href="https://vk.com/ladiwals"><i class="fab fa-vk"></i></a>
                    <a href="https://t.me/ladiwals"><i class="fab fa-telegram"></i></a>
                </nav>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="#" class="nav-link">Главная</a>
                    <a href="#" class="nav-link">О нас</a>
                    <a href="#" class="nav-link">Блог</a>
                    <a href="#" class="nav-link">Контакты</a>
                </nav>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="#" class="nav-link">Карта сайта</a>
                    <a href="#" class="nav-link">API</a>
                    <a href="#" class="nav-link">Фиды</a>
                </nav>
            </div>
        </div>
        <div class="footer-bottom-content">
            <p class="mb-0">© Ladiwals Блог - 2022</p>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="{{ asset('js/edica/main.js') }}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>

</body>
</html>

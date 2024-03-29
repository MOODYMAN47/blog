<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <link rel="stylesheet" href="{{ asset('../fontawesome/css/all.min.css') }}"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="{{ asset('../css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/templatemo-xtra-blog.css') }}" rel="stylesheet">
    <script src="{{ asset('../js/jquery.min.js') }}"></script>
    <script src="{{ asset('../js/templatemo-script.js') }}"></script>
</head>
<body>
    <header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>
                <h1 class="text-center">MOODEY BLOG</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">
                <ul>
                    <li class="tm-nav-item"><a href="{{ url('/') }}" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Blog Home
                    </a></li>
                    <li class="tm-nav-item active"><a href="{{ url('post') }}" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                        Single Post
                    </a></li>
                    <li class="tm-nav-item"><a href="{{ url('about') }}" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        About US
                    </a></li>
                    <li class="tm-nav-item"><a href="{{ url('contact.html') }}" class="tm-nav-link">
                        <i class="far fa-comments"></i>
                        Contact US
                    </a></li>
                </ul>
            </nav>
            <div class="tm-mb-65">
                <a href="https://facebook.com" class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon"></i>
                </a>
                <a href="https://twitter.com" class="tm-social-link">
                    <i class="fab fa-twitter tm-social-icon"></i>
                </a>
                <a href="https://instagram.com" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i>
                </a>
                <a href="https://linkedin.com" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i>
                </a>
        </div>
            </div>

        </body>
</html>

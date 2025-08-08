<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ config('app.name') }} - @yield('title')</title>
	<link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}"> 


    <!-- CSS FILES -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">
    <link rel="stylesheet" href="{{ asset('css/cards.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monsieur+La+Doulaise&display=swap" rel="stylesheet">



    <!-- COPY CSS -->
    <link rel="stylesheet" href="{{ asset('copy/style.css') }}">

    <!-- Clipboard.js -->
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.10/dist/clipboard.min.js"></script>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.1.8/css/dataTables.uikit.css" />


    <style type="text/css">
        h1 {
            font-family: "Monsieur La Doulaise", serif;
            font-weight: 400;
            color: white;
            font-style: normal;
            text-align: center;
            padding: 5px;
            font-size: 70px;
            /* Augmenta el tamany de la lletra */
        }

        .uk-navbar-dropbar {
            background: #252121;
        }

        .uk-navbar-container:not(.uk-navbar-transparent) {
            background: #252121;
        }
    </style>



</head>

<body data-uk-filter="target: .js-filter; animation: fade">

    <div class="uk-section-secondary uk-background-cover uk-preserve-color uk-inverse-light"
        style="background-image: url('images/bga1.jpg');">

        <div class="uk-position-relative">
            <nav class="uk-navbar-container ">
                <div class="uk-container uk-background-secondary">
                    <div uk-navbar>
                        <div class="uk-navbar-left">

                            <ul class="uk-navbar-nav ">
                                <a href="/" class="uk-navbar-item uk-logo"><img
                                        src="{{ asset('images/logo.png') }}" align="left" width="60"
                                        height="" /></a>


                                <li>
                                    <?php if ($_SERVER['REQUEST_URI'] === '/indexgallery'): ?>
                                    <div class="uk-navbar-item">
                                        <form id="search-form" action="">
                                            <div class="uk-inline uk-width-1-1">
                                                <span class="uk-form-icon uk-form-icon-flip"
                                                    data-uk-icon="icon: search"></span>
                                                <input class="uk-input uk-width-1-1 search-fld" type="text"
                                                    placeholder="Type your search" oninput="filterCards(this.value)">
                                            </div>
                                        </form>
                                    </div>
                                    <?php endif; ?>
                                </li>

                                <li>
                                    <!-- html -->
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="2em"
                                            height="2em" viewBox="0 0 2048 2048">
                                            <path fill="#daa5ea"
                                                d="M1536 640h512v1280H512v-512H0V128h1536zm384 128h-384v128h384zm-512-512H128v128h1280zM128 512v768h1280V512zm512 1280h1280v-768h-384v384H640z" />
                                        </svg> </a>


                                    <div class="uk-navbar-dropdown uk-background-secondary">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li class="uk-nav-header uk-text-primary uk-text-bold">PAGINES</li>
                                            <li class="uk-nav-divider"></li>
                                            <li><a href="/indexgallery">INDEX GALLERY POSTS</a></li>
                                            <li><a href="/datatables">POSTS DATATABLES</a></li>
                                            <li><a href="/videos">VIDEOS GALLERY</a></li>
                                            <li><a href="/sorpren">VIDEOS SORPREN</a></li>
                                            <li><a href="/filtered-slider">SLIDER MODELS</a></li>
                                        </ul>
                                    </div>
                                </li>


                                <li>
                                    <!-- html -->
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="2em"
                                            height="2em" viewBox="0 0 24 24">
                                            <path fill="#1a73e3"
                                                d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8zm-1 2l5 5h-5zM8.531 18h-.76v-1.411H6.515V18h-.767v-3.373h.767v1.296h1.257v-1.296h.76zm3-2.732h-.921V18h-.766v-2.732h-.905v-.641h2.592zM14.818 18l-.05-1.291c-.017-.405-.03-.896-.03-1.387h-.016c-.104.431-.245.911-.375 1.307l-.41 1.316h-.597l-.359-1.307a15 15 0 0 1-.306-1.316h-.011c-.021.456-.034.976-.059 1.396L12.545 18h-.705l.216-3.373h1.015l.331 1.126c.104.391.21.811.284 1.206h.017c.095-.391.209-.836.32-1.211l.359-1.121h.996L15.563 18zm3.434 0h-2.108v-3.373h.767v2.732h1.342z" />
                                        </svg></a>

                                    <div class="uk-navbar-dropdown uk-background-secondary">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li class="uk-nav-header uk-text-primary uk-text-bold">HTML</li>
                                            <?php
                                            // Directorio a explorar
                                            $directory = 'C:/xampp/htdocs/HTML';
                                            
                                            // Abrir el directorio
                                            if (is_dir($directory)) {
                                                // Leer el contenido del directorio
                                                $dirs = scandir($directory);
                                                foreach ($dirs as $dir) {
                                                    // Ignorar los directorios especiales "." y ".."
                                                    if ($dir !== '.' && $dir !== '..' && is_dir($directory . '/' . $dir)) {
                                                        // Generar el enlace con formato http://localhost/NOMBRE-DIRECTORIO
                                                        $url = 'http://localhost/HTML/' . $dir;
                                                        echo "<li><a href=\"$url\">$dir</a></li>";
                                                    }
                                                }
                                            } else {
                                                echo 'El directorio no existe o no se puede leer.';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <!-- php -->
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="2em"
                                            height="2em" viewBox="0 0 32 32">
                                            <defs>
                                                <radialGradient id="vscodeIconsFolderTypePhpOpened0" cx="-10.216"
                                                    cy="31.126" r="13.788"
                                                    gradientTransform="translate(26.52 -9.307)"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#fff" />
                                                    <stop offset=".5" stop-color="#4c6b96" />
                                                    <stop offset="1" stop-color="#231f20" />
                                                </radialGradient>
                                            </defs>
                                            <path fill="#7a9edd"
                                                d="M27.4 5.5h-9.2l-2.1 4.2H4.3v16.8h25.2v-21Zm0 18.7H6.6V11.8h20.8Zm0-14.5h-8.2l1-2.1h7.1v2.1Z" />
                                            <path fill="#7a9edd" d="M25.7 13.7H.5l3.8 12.8h25.2z" />
                                            <ellipse cx="20.5" cy="25.4"
                                                fill="url(#vscodeIconsFolderTypePhpOpened0)" rx="10.5"
                                                ry="5.523" />
                                            <ellipse cx="20.5" cy="25.4" fill="#6280b6" rx="10.09"
                                                ry="5.113" />
                                            <path fill="#fff"
                                                d="m22.544 27.053l.5-2.576a1.31 1.31 0 0 0-.279-1.289a2.2 2.2 0 0 0-1.5-.394H20.4l.248-1.276a.164.164 0 0 0-.161-.2h-1.2a.164.164 0 0 0-.161.133l-.526 2.738a1.54 1.54 0 0 0-.358-.79a2.09 2.09 0 0 0-1.65-.605h-2.32a.164.164 0 0 0-.161.133l-1.076 5.535a.164.164 0 0 0 .161.2H14.4a.164.164 0 0 0 .161-.133l.26-1.339h.9a3.9 3.9 0 0 0 1.176-.152a2.3 2.3 0 0 0 .863-.517a2.7 2.7 0 0 0 .51-.633l-.215 1.106a.164.164 0 0 0 .161.2h1.2a.164.164 0 0 0 .161-.133l.59-3.038h.821c.35 0 .452.07.48.1s.078.124.019.427l-.476 2.449a.164.164 0 0 0 .161.2h1.215a.164.164 0 0 0 .157-.146M17 24.924a1.3 1.3 0 0 1-.421.819a1.63 1.63 0 0 1-.986.241h-.534L15.443 24h.691c.508 0 .712.109.794.2a.9.9 0 0 1 .072.724M27.66 23.4a2.09 2.09 0 0 0-1.65-.605h-2.319a.164.164 0 0 0-.161.133l-1.076 5.535a.164.164 0 0 0 .161.2h1.206a.164.164 0 0 0 .161-.133l.26-1.339h.9a3.9 3.9 0 0 0 1.176-.152a2.3 2.3 0 0 0 .863-.517a2.57 2.57 0 0 0 .807-1.445a1.88 1.88 0 0 0-.328-1.677m-1.251 1.525a1.3 1.3 0 0 1-.421.819a1.63 1.63 0 0 1-.986.241h-.534L24.854 24h.691c.508 0 .712.109.794.2a.9.9 0 0 1 .07.724Z" />
                                            <path fill="#000004"
                                                d="M16.134 23.831a1.23 1.23 0 0 1 .916.254a1 1 0 0 1 .109.871a1.46 1.46 0 0 1-.482.917a1.77 1.77 0 0 1-1.086.275h-.733l.45-2.317ZM13.2 28.493h1.2l.286-1.472h1.034a3.7 3.7 0 0 0 1.125-.144a2.1 2.1 0 0 0 .8-.482a2.4 2.4 0 0 0 .757-1.356a1.72 1.72 0 0 0-.289-1.533a1.93 1.93 0 0 0-1.526-.549h-2.315Zm6.091-7.007h1.2l-.291 1.472h1.066a2.08 2.08 0 0 1 1.388.351a1.16 1.16 0 0 1 .229 1.137l-.5 2.576h-1.215l.476-2.449a.67.67 0 0 0-.06-.57a.84.84 0 0 0-.6-.152h-.956l-.616 3.171h-1.2Zm6.254 2.345a1.23 1.23 0 0 1 .916.254a1 1 0 0 1 .109.871a1.46 1.46 0 0 1-.482.917a1.77 1.77 0 0 1-1.088.275h-.733l.45-2.317Zm-2.938 4.662h1.206l.286-1.472h1.033a3.7 3.7 0 0 0 1.125-.144a2.1 2.1 0 0 0 .8-.482a2.4 2.4 0 0 0 .757-1.356a1.72 1.72 0 0 0-.289-1.533A1.93 1.93 0 0 0 26 22.958h-2.317Z" />
                                        </svg></a>
                                    <div class="uk-navbar-dropdown uk-background-secondary">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li class="uk-nav-header uk-text-primary uk-text-bold">PHP</li>
                                            <?php
                                            // Directorio a explorar
                                            $directory = 'C:/xampp/htdocs/PHP';
                                            
                                            // Abrir el directorio
                                            if (is_dir($directory)) {
                                                // Leer el contenido del directorio
                                                $dirs = scandir($directory);
                                                foreach ($dirs as $dir) {
                                                    // Ignorar los directorios especiales "." y ".."
                                                    if ($dir !== '.' && $dir !== '..' && is_dir($directory . '/' . $dir)) {
                                                        // Generar el enlace con formato http://localhost/NOMBRE-DIRECTORIO
                                                        $url = 'http://localhost/PHP/' . $dir;
                                                        echo "<li><a href=\"$url\">$dir</a></li>";
                                                    }
                                                }
                                            } else {
                                                echo 'El directorio no existe o no se puede leer.';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <!-- codeigniter -->
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1.63em"
                                            height="2em" viewBox="0 0 256 316">
                                            <path fill="#dd4814"
                                                d="M81.834 315.107c-20.223-8.935-33.964-28.183-35.767-50.228a70.92 70.92 0 0 1 32.181-55.763c-3.122 7.614-2.364 16.282 1.97 23.247a21.34 21.34 0 0 0 21.74 8.48c11.84-3.329 18.775-15.622 15.446-27.472a22.6 22.6 0 0 0-6.777-10.747A49.36 49.36 0 0 1 92.896 157.5a46.2 46.2 0 0 1 14.392-23.444c-5.32 14.185 9.683 28.182 19.75 35.068a523 523 0 0 1 51.537 35.274c17.997 14.185 27.808 36.388 26.272 59.103c-4.049 24.173-21.15 44.13-44.456 51.616c46.623-10.372 94.693-47.41 95.609-99.942c-.916-42.032-26.005-79.75-64.353-96.929h-1.704a15.7 15.7 0 0 1 1.182 6.511a24.5 24.5 0 0 0 0-4.334a21.2 21.2 0 0 1 0 5.122c-2.916 11.949-14.973 19.307-26.951 16.391c-4.787-1.182-9.062-3.87-12.136-7.752c-15.367-19.7 0-42.12 2.571-63.792A81.04 81.04 0 0 0 121.07 0c11.239 18.736-3.734 43.342-14.619 57.34c-10.904 13.997-26.665 24.429-39.51 36.643c-13.84 12.875-26.527 27.03-37.914 42.16C4.41 166.217-5.253 205.885 2.755 243.907c10.984 36.644 41.441 64.176 79.001 71.318h.207z" />
                                        </svg></a>
                                    <div class="uk-navbar-dropdown uk-background-secondary">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li class="uk-nav-header uk-text-primary uk-text-bold">CODEIGNITER</li>
                                            <?php
                                            // Directorio a explorar
                                            $directory = 'C:/xampp/htdocs/CODEIGNITER';
                                            
                                            // Abrir el directorio
                                            if (is_dir($directory)) {
                                                // Leer el contenido del directorio
                                                $dirs = scandir($directory);
                                                foreach ($dirs as $dir) {
                                                    // Ignorar los directorios especiales "." y ".."
                                                    if ($dir !== '.' && $dir !== '..' && is_dir($directory . '/' . $dir)) {
                                                        // Generar el enlace con formato http://NOMBRE-DIRECTORIO.test
                                                        $url = 'http://' . $dir . '.test';
                                                        echo "<li><a href=\"$url\">$dir</a></li>";
                                                    }
                                                }
                                            } else {
                                                echo 'El directorio no existe o no se puede leer.';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <!-- laravel -->
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="2em"
                                            height="2em" viewBox="0 0 24 24">
                                            <path fill="#e33b1a"
                                                d="M21.7 6.53c.01.02.01.05.01.08v4.29c0 .1-.06.22-.15.27l-3.61 2.08v4.11c0 .11-.05.21-.15.27l-7.52 4.33c-.02.01-.04.04-.06.04H10s0-.03-.04-.04l-7.52-4.33a.32.32 0 0 1-.15-.27V4.5c0-.05 0-.08.01-.1c0-.01.01-.02.01-.03c0-.02.01-.03.02-.05c0-.01.01-.02.02-.03l.03-.03l.03-.03c.01-.01.02-.02.03-.02L6.2 2.04c.1-.04.22-.04.3 0l3.78 2.17c.01.01.02.01.03.02l.03.03l.03.03c.01.01.02.02.02.03c.01.02.02.03.02.05c0 .01.01.02.01.03c.01.03.01.05.01.1v8l3.14-1.78V6.61c0-.03 0-.06.01-.08l.01-.03s.01-.03.02-.05c0-.01.01-.02.02-.03l.03-.03l.03-.03c.01-.01.02-.02.03-.02l3.78-2.17c.08-.06.2-.06.3 0l3.76 2.17c.01 0 .02.01.03.02l.03.03l.03.03c.01.01.01.02.02.03c.01.02.01.05.02.05s.01 0 .01.03m-.61 4.19V7.15l-3.14 1.8v3.55zm-3.76 6.46V13.6l-6.9 3.94v3.61zM2.91 5v12.18l6.9 3.97v-3.61l-3.6-2.04H6.2c-.01 0-.02 0-.03-.03c-.01 0-.02-.01-.03-.02l-.03-.03c-.01-.01-.01-.02-.02-.03c-.01-.02-.01-.03-.02-.04c0-.02-.01-.03-.01-.04c-.01-.01-.01-.03-.01-.04V6.82zm3.45-2.32L3.23 4.5l3.13 1.78L9.5 4.5zm3.45 10.2V5L6.67 6.82v7.87zm7.83-8.08L14.5 6.61l3.14 1.8l3.13-1.8zm-.31 4.15l-3.14-1.8v3.57l3.14 1.78zM10.12 17L17 13.06l-3.12-1.8L7 15.23z" />
                                        </svg></a>
                                    <div class="uk-navbar-dropdown uk-background-secondary">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li class="uk-nav-header uk-text-primary uk-text-bold">LARAVEL</li>
                                            <?php
                                            // Directorio a explorar
                                            $directory = 'C:/xampp/htdocs/LARAVEL';
                                            
                                            // Abrir el directorio
                                            if (is_dir($directory)) {
                                                // Leer el contenido del directorio
                                                $dirs = scandir($directory);
                                                foreach ($dirs as $dir) {
                                                    // Ignorar los directorios especiales "." y ".."
                                                    if ($dir !== '.' && $dir !== '..' && is_dir($directory . '/' . $dir)) {
                                                        // Generar el enlace con formato http://NOMBRE-DIRECTORIO.test
                                                        $url = 'http://' . $dir . '.test';
                                                        echo "<li><a href=\"$url\">$dir</a></li>";
                                                    }
                                                }
                                            } else {
                                                echo 'El directorio no existe o no se puede leer.';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <!-- wordpress -->
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="2em"
                                            height="2em" viewBox="0 0 24 24">
                                            <path fill="#1a58e3"
                                                d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10s10-4.49 10-10S17.51 2 12 2M3.01 12c0-1.3.28-2.54.78-3.66l4.29 11.75c-3-1.46-5.07-4.53-5.07-8.09M12 20.99c-.88 0-1.73-.13-2.54-.37l2.7-7.84l2.76 7.57c.02.04.04.09.06.12c-.93.34-1.93.52-2.98.52m1.24-13.21c.54-.03 1.03-.09 1.03-.09c.48-.06.43-.77-.06-.74c0 0-1.46.11-2.4.11c-.88 0-2.37-.11-2.37-.11c-.48-.02-.54.72-.05.75c0 0 .46.06.94.09l1.4 3.84l-1.97 5.9l-3.27-9.75c.54-.02 1.03-.08 1.03-.08c.48-.06.43-.77-.06-.74c0 0-1.46.11-2.4.11c-.17 0-.37 0-.58-.01C6.1 4.62 8.86 3.01 12 3.01c2.34 0 4.47.89 6.07 2.36c-.04 0-.08-.01-.12-.01c-.88 0-1.51.77-1.51 1.6c0 .74.43 1.37.88 2.11c.34.6.74 1.37.74 2.48c0 .77-.3 1.66-.68 2.91l-.9 3zm6.65-.09a8.99 8.99 0 0 1-3.37 12.08l2.75-7.94c.51-1.28.68-2.31.68-3.22c0-.33-.02-.64-.06-.92" />
                                        </svg></a>
                                    <div class="uk-navbar-dropdown uk-background-secondary">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li class="uk-nav-header uk-text-primary uk-text-bold">WORDPRESS</li>
                                            <?php
                                            // Directorio a explorar
                                            $directory = 'C:/xampp/htdocs/WORDPRESS';
                                            
                                            // Abrir el directorio
                                            if (is_dir($directory)) {
                                                // Leer el contenido del directorio
                                                $dirs = scandir($directory);
                                                foreach ($dirs as $dir) {
                                                    // Ignorar los directorios especiales "." y ".."
                                                    if ($dir !== '.' && $dir !== '..' && is_dir($directory . '/' . $dir)) {
                                                        // Generar el enlace con formato http://NOMBRE-DIRECTORIO.test
                                                        $url = 'http://' . $dir . '.test';
                                                        echo "<li><a href=\"$url\">$dir</a></li>";
                                                    }
                                                }
                                            } else {
                                                echo 'El directorio no existe o no se puede leer.';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </li>


                                <li>
                                    <!-- hosts -->
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="2em"
                                            height="2em" viewBox="0 0 16 16">
                                            <g fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="#cad3f5"
                                                    d="M4.5 4.5H12A1.5 1.5 0 0 1 13.5 6v.5m-7.5 7H2A1.5 1.5 0 0 1 .5 12V3.5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1" />
                                                <path stroke="#eed49f" d="M8.5 9.5h7v2h-7zm2 0v2m-2 2h7v2h-7zm2 0v2" />
                                            </g>
                                        </svg></a>
                                    <div class="uk-navbar-dropdown uk-background-secondary">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li class="uk-nav-header uk-text-primary uk-text-bold">HOSTS VIRTUALS</li>
                                            <?php
                                            $hostsFile = 'C:\Windows\System32\drivers\etc\hosts';
                                            if (file_exists($hostsFile)) {
                                                $lines = file($hostsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                                                $validHosts = [];
                                            
                                                foreach ($lines as $line) {
                                                    $line = trim($line);
                                            
                                                    // Procesar líneas válidas de hosts
                                                    if (!empty($line) && strpos($line, '#') !== 0) {
                                                        $parts = preg_split('/\s+/', $line);
                                                        if (isset($parts[1])) {
                                                            $validHosts[] = $parts[1]; // Agregar solo el dominio
                                                        }
                                                    }
                                                }
                                            
                                                foreach ($validHosts as $host) {
                                                    echo '<li><a href="http://' . htmlspecialchars($host, ENT_QUOTES, 'UTF-8') . '" class="active">' . htmlspecialchars($host, ENT_QUOTES, 'UTF-8') . '</a></li>';
                                                }
                                            } else {
                                                echo '<li><span class="text-gray-500">Archivo hosts no encontrado.</span></li>';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </li>


                            </ul>

                        </div>

                        <div class="uk-navbar-right">

                            <ul class="uk-navbar-nav">

                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="2em"
                                            height="2em" viewBox="0 0 256 256">
                                            <g fill="none">
                                                <rect width="256" height="256" fill="#f4f2ed" rx="60" />
                                                <g clip-path="url(#skillIconsMysqlLight0)">
                                                    <path fill="#00678c" fill-rule="evenodd"
                                                        d="M203.801 178.21c-9.79-.272-17.385.731-23.75 3.409c-1.833.736-4.774.736-5.016 3.043c.98.968 1.098 2.552 1.957 3.894c1.467 2.435 4.041 5.715 6.365 7.417l7.834 5.598c4.774 2.917 10.16 4.622 14.811 7.542c2.694 1.704 5.386 3.894 8.08 5.721c1.372.973 2.203 2.558 3.918 3.163v-.368c-.856-1.091-1.103-2.672-1.956-3.894l-3.677-3.526c-3.547-4.744-7.957-8.884-12.731-12.287c-3.918-2.677-12.484-6.326-14.076-10.825l-.241-.273c2.689-.272 5.872-1.219 8.445-1.949c4.165-1.091 7.957-.851 12.238-1.945l5.88-1.704v-1.091c-2.204-2.189-3.795-5.11-6.119-7.176c-6.242-5.353-13.102-10.586-20.203-14.965c-3.794-2.432-8.692-4.017-12.731-6.081c-1.473-.731-3.918-1.096-4.774-2.312c-2.209-2.672-3.43-6.204-5.021-9.369l-10.037-21.168c-2.203-4.745-3.553-9.49-6.242-13.869c-12.611-20.683-26.324-33.212-47.38-45.502c-4.527-2.555-9.913-3.654-15.64-4.99l-9.18-.49c-1.962-.851-3.919-3.164-5.633-4.26c-6.978-4.38-24.974-13.868-30.12-1.363c-3.305 7.907 4.899 15.692 7.684 19.709c2.085 2.798 4.774 5.96 6.247 9.124c.823 2.067 1.098 4.259 1.957 6.449c1.956 5.352 3.794 11.316 6.365 16.306c1.372 2.555 2.813 5.235 4.527 7.545c.98 1.363 2.695 1.947 3.06 4.136c-1.715 2.435-1.833 6.081-2.813 9.127c-4.409 13.748-2.694 30.78 3.548 40.902c1.962 3.04 6.585 9.734 12.858 7.177c5.509-2.19 4.28-9.124 5.871-15.208c.37-1.458.124-2.432.856-3.408v.273l5.021 10.097c3.795 5.961 10.408 12.167 15.914 16.306c2.936 2.19 5.263 5.964 8.934 7.3v-.368h-.241c-.736-1.091-1.839-1.582-2.818-2.433c-2.203-2.189-4.651-4.867-6.366-7.299c-5.139-6.812-9.666-14.357-13.708-22.142c-1.961-3.771-3.676-7.908-5.262-11.679c-.741-1.461-.741-3.654-1.962-4.379c-1.839 2.672-4.527 4.99-5.88 8.273c-2.327 5.23-2.568 11.679-3.424 18.371c-.494.122-.275 0-.494.272c-3.913-.97-5.263-4.99-6.73-8.393c-3.672-8.638-4.287-22.507-1.104-32.484c.856-2.555 4.533-10.585 3.065-13.018c-.74-2.312-3.183-3.648-4.533-5.475c-1.591-2.312-3.3-5.23-4.403-7.785c-2.936-6.817-4.404-14.357-7.59-21.17c-1.473-3.164-4.041-6.45-6.124-9.367c-2.327-3.286-4.892-5.599-6.73-9.49c-.612-1.363-1.468-3.528-.489-4.99c.242-.973.735-1.363 1.71-1.581c1.59-1.364 6.124.365 7.715 1.09c4.527 1.827 8.322 3.529 12.117 6.081c1.715 1.216 3.553 3.529 5.756 4.14h2.574c3.918.85 8.322.272 11.99 1.363c6.49 2.072 12.364 5.11 17.632 8.398c16.035 10.098 29.26 24.454 38.193 41.611c1.468 2.798 2.08 5.353 3.43 8.273c2.574 5.964 5.757 12.045 8.322 17.888c2.574 5.718 5.021 11.562 8.693 16.306c1.838 2.555 9.18 3.891 12.484 5.23c2.45 1.091 6.242 2.073 8.451 3.409c4.159 2.555 8.322 5.475 12.237 8.273c1.956 1.456 8.081 4.499 8.445 6.926zM78.958 72.487a19.6 19.6 0 0 0-5.015.608v.273h.241c.98 1.947 2.695 3.286 3.918 4.99l2.818 5.84l.242-.272c1.714-1.216 2.573-3.163 2.573-6.08c-.735-.851-.856-1.705-1.468-2.556c-.735-1.216-2.326-1.827-3.309-2.797z"
                                                        clip-rule="evenodd" />
                                                </g>
                                                <defs>
                                                    <clipPath id="skillIconsMysqlLight0">
                                                        <path fill="#fff" d="M38 38h180v180H38z" />
                                                    </clipPath>
                                                </defs>
                                            </g>
                                        </svg></a>
                                    <div class="uk-navbar-dropdown uk-background-secondary">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li class="uk-nav-header uk-text-primary uk-text-bold">localhost</li>
                                            <li class="uk-nav-divider"></li>
                                            <li><a href="http://localhost/phpmyadmin/index.php?route=/">phpmyadmin</a>
                                            </li>
                                            <li><a href="http://administracio.test/admin/posts">projecte administracio
                                                    laravel</a></li>
                                            <li class="uk-nav-header uk-text-primary uk-text-bold">admin</li>
                                            <li><a href="/admin">Admin a Filament</a></li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="uk-section uk-light uk-text-center">
            <div class="uk-container">
                <h1>@yield('title')</h1>
                <p> @yield('subtitle') </p>
            </div>
        </div>

    </div>


    @yield('content')



    <script type="text/javascript">
        function filterCards(value) {
            const searchValue = value.toLowerCase().trim(); // Text de cerca en minúscules
            const cards = document.querySelectorAll('[data-tags]'); // Selecciona totes les targetes

            cards.forEach(card => {
                const tags = card.getAttribute('data-tags').toLowerCase();
                if (tags.includes(searchValue)) {
                    card.style.display = ''; // Mostra la targeta
                } else {
                    card.style.display = 'none'; // Amaga la targeta
                }
            });
        }
    </script>



    <!-- Footer UIKit -->
    <footer class="uk-section uk-section-small uk-background-secondary uk-text-center">
        <div class="uk-container uk-flex uk-flex-column uk-flex-middle">
            <!-- Logo -->
            <a href="/" class="uk-logo uk-text-bold uk-text-large uk-text-muted">uikit 3 definitiu<span
                    class="uk-text-primary">.</span></a>

            <!-- Copyright -->
            <p class="uk-text-meta uk-margin-small">© 2022 estudijoanpuig.com</p>

            <!-- Social Links -->
            <div class="uk-flex uk-flex-center uk-margin">
                <a href="https://www.facebook.com/joanpuigbertran" class="uk-icon-button uk-margin-small-right"
                    uk-icon="facebook" target="_blank"></a>
                <a href="https://www.instagram.com/estudijoanpuig/" class="uk-icon-button uk-margin-small-right"
                    uk-icon="instagram" target="_blank"></a>
                <a href="https://twitter.com/estudijoanpuig" class="uk-icon-button uk-margin-small-right"
                    uk-icon="twitter" target="_blank"></a>
                <a href="https://github.com/estudijoanpuig" class="uk-icon-button" uk-icon="github"
                    target="_blank"></a>
            </div>
        </div>
    </footer>

    <!-- Back To Top Button -->
    <button id="to-top-button" onclick="goToTop()" title="Go To Top"
        class="uk-hidden uk-position-fixed uk-position-bottom-right uk-button uk-button-primary uk-border-pill"
        style="right: 20px; bottom: 20px; width: 60px; height: 60px; font-size: 24px; z-index: 90;">
        &uarr;
    </button>

    <!-- Javascript code -->
    <script>
        var toTopButton = document.getElementById("to-top-button");

        // Show button on scroll
        window.onscroll = function() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                toTopButton.classList.remove("uk-hidden");
            } else {
                toTopButton.classList.add("uk-hidden");
            }
        };

        // Scroll to top
        function goToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>



    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.16/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.16/dist/js/uikit-icons.min.js"></script>
    <script src="{{ asset('js/cards.js') }}"></script>

    <script src='https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js'></script>
    <script src='https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js?skin=sunburst'></script>
    <script src="{{ asset('copy/script.js') }}"></script>



</body>

</html>

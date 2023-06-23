<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Cache control -->
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, proxy-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <!-- Icon -->
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <title>Arin & Indra</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700&display=swap"
        rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet" />
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="assets/vendor/bootstrap-5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <!-- AOS -->
    <link rel="stylesheet" href="assets/vendor/aos-2.3.4/css/ajax_libs_aos_2.3.4_aos.css" />
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/admin.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    @livewireStyles
</head>

<body>

    {{ $slot }}

    <!-- Jquery -->
    <script src="assets/vendor/jquery-3.7.0/jquery-3.7.0.min.js"></script>
    <!-- Boostrap -->
    <script src="assets/vendor/bootstrap-5.3.0/js/bootstrap.min.js"></script>
    <!-- AOS -->
    <script src="assets/vendor/aos-2.3.4/js/ajax_libs_aos_2.3.4_aos.js"></script>
    <!-- Glightbox -->
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <!-- Script -->
    <script src="assets/js/admin.js"></script>
</body>

@livewireScripts

</html>

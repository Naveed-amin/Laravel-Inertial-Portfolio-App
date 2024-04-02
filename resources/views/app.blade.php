<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />



    <meta name="theme-name" content="phantom" />

    <!-- Essential Stylesheets -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i|Open+Sans:400,600,700,800">

    @vite('resources/plugins/bootstrap/bootstrap.min.css')


    @vite('resources/plugins/animate.css')


    @vite('resources/plugins/slick/slick.css')


    @vite('resources/plugins/slick/slick-theme.css')


    @vite('resources/plugins/themefisher-fonts/css/themefisher-fonts.min.css')


    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" href="#" id="color-changer">

    <!--Favicon-->
    <link rel="icon" href="images/favicon.png" type="image/x-icon">


    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @vite('resources/css/dark.css')
    @vite('resources/css/style.css')
    @vite('resources/css/app.css.map')
    @vite('resources/css/style.css.map')


    @inertiaHead
</head>

<body>
    @inertia




    @vite('resources/plugins/jquery-2.2.4.min.js')
    @vite('resources/plugins/bootstrap/bootstrap.min.js')
    @vite('resources/plugins/jquery.nicescroll.min.js')
    @vite('resources/plugins/isotope/isotope.pkgd.min.js')
    @vite('resources/plugins/slick/slick.min.js')
    @vite('resources/js/script.js')

    {{-- <script src="js/script.js"></script> --}}

</body>

</html>

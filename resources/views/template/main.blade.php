<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('storage/app/public/assets/image/logo.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/foundation-datepicker.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
        h1, h2, h3, h4, h5{
            color: #FF8D21;
        }

        nav {
            background-color: #FF8D21;
        }

        .navbar .navbar-brand img {
            width: 80px;
        }

        .navbar .navbar-collapse ul li.nav-item {
            margin-right: 30px;
            font-size: 14px;
        }

        .navbar .navbar-collapse ul li.nav-item .nav-link {
            color: white;
        }

        .navbar .navbar-collapse ul li.nav-item.active {
            color: white;
            font-weight: bold;
            border-bottom: 2px solid white;
        }

        .carousel,
        .carousel .carousel-inner .carousel-item img {
            max-height: 625px;
        }

        .adventage {
            font-size: 14px;
            background-color: white;
        }

        h1.icon {
            font-size: 36px;
            margin-bottom: 10px;
        }

        /* .card {
            border: none;
            text-align: center;
            margin-bottom: 20px;
            padding: 20px;
        }

        .parallax-window {
            min-height: 250px;
        }

        .parallax-section {
            overflow: hidden;
        }

        .package .card:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .container-fluid.package {
            overflow-x: hidden;
        } */
        .social-icons {
        display: flex;
        gap: 15px;
        }

        .social-icon {
        width: 30px;
        height: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        font-size: 15px;
        text-decoration: none;
        color: white;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        margin-left: 5px;
        }

        .instagram {
        background-color: #e1306c;
        }

        .facebook {
        background-color: #0866FF;
        }

        .tiktok {
        background-color: black;
        }

        .social-icon:hover {
        transform: scale(1.1);
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
        color: none;
        }

        /* .myaccordion {
        box-shadow: 0 0 1px rgba(0,0,0,0.1);
        }

        .myaccordion .card,
        .myaccordion .card:last-child .card-header {
        border: none;
        }

        .myaccordion .fa-stack {
        font-size: 18px;
        }

        .myaccordion .btn {
        width: 100%;
        color: #41AB5D;
        padding: 0;
        }

        .myaccordion .btn-link:hover,
        .myaccordion .btn-link:focus {
        text-decoration: none;
        } */

    </style>
</head>

<body>
    @include('sweetalert::alert')
    @include('template.nav')

    @yield('content')

    @include('template.footer')

    @yield('script')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script src="{{ asset('js/foundation-datepicker.js') }}"></script>
    <script src="{{ asset('js/foundation-datepickerid.js') }}"></script>
    <script>
        $(document).foundation();

        $('.fdatepicker').fdatepicker({
            language: 'id'
        });
    </script>
</body>

</html>

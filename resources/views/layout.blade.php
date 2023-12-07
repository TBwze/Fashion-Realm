<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/layoutStyle.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>@yield('title')</title>
</head>

<body>

    <div class="navbar">
        <div class="logo">
        This is Cogil
        </div>

        <div class="navbar-list">
            <a 
            class="navbar-item"
            href="#"
            >Sign In</a>
            <a 
            class="navbar-item"
            href="#"
            >Sign Up</a>
            </div>

    </div>

    @yield('content')

    <div class="footer-body">
        <div class="footer-container">
            <div class="footer-item">
                <div class="footer-header">Fashion Realm</div>
                <p>Created since 2023, our designs are inspired by the realm of fashion, where every style lives in harmony.
                 Our pieces are made for everyone, from those who love to embrace the latest trends to those who always
                  set them. At Fashion Realm, we believe that style is a reflection of the individual, and we strive to
                   create unique and timeless pieces that showcase the beauty and creativity of each person who wears them.
                </p>
            </div>
            <div class="footer-item">
                <div class="footer-header">Contact Us</div>
                <p>support@fashionrealm.com</p>
                <p>Jl. Merdeka No. 10, Menteng, Jakarta Pusat, DKI Jakarta, 12345, Indonesia</p>
            </div>
            <div class="footer-item">
                <div class="footer-header">Social Profiles</div>
                <p></p>
            </div>
        </div>
        <div class="footer-copyright">Copyright [Logo] 2023 FashionRealm</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</body>

</html>

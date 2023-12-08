<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/layoutStyle.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>@yield('title')</title>
</head>

<body>

    <nav
        class="navbar navbar-expand-sm navbar-dark m-0"
        style="background-color: #272829;"
    >
        <a class="navbar-brand ms-4" href="#">Navbar</a>

        <div class ="container-fluid d-flex justify-content-end">
            <a
                class="btn text-white me-4"
                href="#"
                >Sign In</a
            >
            <a
                class="btn text-white me-4"
                href="#"
                >Sign Up</a
            >
        </div>
    </nav>

    @yield('content')

    <div 
    class="container-fluid justify-content-around d-flex text-white"
    style="background-color : #272829;"
    >
        <div class="container">
            <h5 class="fw-semibold">Fashion Realm</h1>
            <p>Created since 2023, our designs are inspired by the realm of fashion, where every style lives in harmony.
                 Our pieces are made for everyone, from those who love to embrace the latest trends
                  to those who always set them. At Fashion Realm, we believe that style is a reflection of the individual,
                   and we strive to create unique and timeless pieces that showcase the beauty and creativity of each
                    person who wears them.
            </p>
        </div>
        <div class="container">
        <h5 class="fw-semibold">Contact Us</h1>
            <p>
                support@fashionrealm.com
            </p>
            <p>
            Jl. Merdeka No. 10, Menteng, Jakarta Pusat, DKI Jakarta, 12345, Indonesia
            </p>
        </div>
        <div class="container">
        <h5 class="fw-semibold">Social Profiles</h1>
            <a class=""href="#"><i class="fa-brands fa-instagram w-30%"></i></a>
            <a class=""href="#"><i class="fa-brands fa-instagram"></i></a>
            <a class=""href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</body>

</html>

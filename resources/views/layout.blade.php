<!DOCTYPE html>
<html lang="en" style="font-family:Poppins,sans-serif">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>@yield('title')</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-sm navbar-dark m-0 " style="background-color: #272829;">
        <a class="navbar-brand ms-4" href="/">Fashion Realm</a>

        <div class ="container-fluid d-flex justify-content-end">

            @if (Auth::check() == true && Auth::user()->role == 'admin')
                <a href="/manage-product" class="btn text-white me-4">Manage Product</a>
            @endif
            @if (Auth::check() == true)
                <a class="btn text-white me-4" href="/cart">Cart</a>
                <a class="btn text-white me-4"
                    href="{{ route('user.transactions', ['userId' => Auth::id()]) }}">Transaction</a>
                <div class="text-white">Hello, {{ Auth::user()->name }}</div>

                <form action="/logout" method="POST">
                    {{ csrf_field() }}
                    <input type="submit" value="Logout" class="btn text-white me-4 ms-4" />
                </form>
            @else
                <a class="btn text-white me-4" href="/signin">Sign In</a>
                <a class="btn text-white me-4" href="/signup">Sign Up</a>
            @endif
        </div>
    </nav>

    @yield('content')

    <div class="container-fluid text-white p-2 mt-auto" style="background-color : #272829;">
        <div class="container-fluid justify-content-around d-flex p-0 m-0">
            <div class="container">
                <h5 class="fw-semibold">Fashion Realm</h1>
                    <p>Created since 2023, our designs are inspired by the realm of fashion, where every style lives in
                        harmony.
                        Our pieces are made for everyone, from those who love to embrace the latest trends
                        to those who always set them. At Fashion Realm, we believe that style is a reflection of the
                        individual,
                        and we strive to create unique and timeless pieces that showcase the beauty and creativity of
                        each
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
                    <a class=""href="#"><i class="fa-brands fa-instagram fa-3x fa-fw" style="color:white"></i></a>
                    <a class=""href="#"><i class="fa-brands fa-facebook-f fa-3x fa-fw"
                            style="color:white"></i></a>
                    <a class=""href="#"><i class="fa-brands fa-twitter fa-3x fa-fw" style="color:white"></i></a>
            </div>

        </div>
        <div class="d-flex justify-content-end fw-semibold">
            <span>Copyright © 2023 FashionRealm</span>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/navbarStyle.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>

<body>

    <nav
        class="navbar navbar-expand-sm navbar-dark mb-0 rounded-0"
        style="
            background-color: #272829;
        "
    >
        <a class="navbar-brand" href="#">Navbar NTR LOGO DISINI BROK</a>

        
        <div class="collapse navbar-collapse">
            <!-- class ul buat gap -->
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                
            </ul>
            <a
                class="btn fs-4 text-white me-4"
                href="#"
                style="
            background-color: #272829;
        "
                >Sign In</a
            >
            <a
                class="btn fs-4 text-white me-4"
                href="#"
                style="
            background-color: #272829;
        "
                >Sign Up</a
            >
            
            
        </div>
    </nav>
    
    

    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</body>

</html>
    @extends('layout')

    @section('title', 'Catalog - Men')

    @section('content')

    <link rel="stylesheet" href="css/catalog.css">

    <div class="head">
      <h2>Fashion Realm / Collections</h2>
    </div>
    <div class = "gender">
      <h1>MEN</h1>
    </div>
    <div class="dropdown">
        <div class="select">
            <span class="selected">Release Date</span>
            <div class="caret"></div>
        </div>
        <ul class="menu">
            <li>Recently Added</li>
            <li>Oldest Release</li>
            <li class="active">Release Date</li>
        </ul>
    </div>

    <script src="js/catalog.js"></script>
    @endsection
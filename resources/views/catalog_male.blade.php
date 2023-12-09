    @extends('layout')

    @section('title', 'Catalog - Men')

    @section('content')

    <div class="text-center fst-italic">
      <div class="fs-4">
        <h2>Fashion Realm / Collections</h2>
      </div>
      <div class="fs-3">
        <h1>MEN</h1>
      </div>
    </div>

    <!-- dropdown for sorting -->
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Release Date
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Sort by Oldest</a>
        <a class="dropdown-item" href="#">Sort by Latest</a>
        <a class="dropdown-item" href="#">Sort by Best Seller</a>
      </div>
    </div>
    
    <!-- cloth gridview (ON PROGRESS) -->
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="..."> <!-- clothing img -->
      <div class="card-body">
        <!-- clothing name -->
        <h5 class="card-title">Clothing name</h5>

        <!-- price -->
        <p class="card-text">Rp. 500.000,00</p>
      </div>
    </div>

    
    @endsection
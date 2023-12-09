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

    
    @endsection
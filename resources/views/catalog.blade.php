@extends('layout')

@section('title', 'Fashion Realm | Catalog {{ $category }}')

@section('content')

    <div class="text-center fst-italic pt-4">
        <h7>Fashion Realm / Collections</h7>
    </div>

    <div class="text-center pb-4">
        <h2 class="text-uppercase">{{ $category }}</h2>
    </div>

    <div class="container">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                Release Date
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">#</a></li>
                <li><a class="dropdown-item" href="#">#</a></li>
                <li><a class="dropdown-item" href="#">#</a></li>
            </ul>
        </div>
        <br>

        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-2">
                    <div class="card mb-4 box-shadow">
                        <a href="{{ url('product/' . $product->id) }}" class="text-decoration-none text-black ">
                            <img class="card-img-top object-fit-cover border-bottom border-black bg-dark-subtle"
                                data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                                style="height: 225px; width: 100%; display: block;" src="{{ asset($product->image_front) }}"
                                data-holder-rendered="true">
                            <div class="card-body">
                                <p class="card-text">{{ $product->name }}</p>
                                <div class="d-flex justify-content-between align-items-center">

                                    <small class="text-muted">Rp {{ $product->price }},00</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top"
                        data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                        alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                        src="{{ asset('img/oversized-blue-tee.png') }}" data-holder-rendered="true">
                    <div class="card-body">
                        <p class="card-text">cloth name</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            </div>
                            <small class="text-muted">price</small>
                        </div>
                    </div>
                </div>
            </div> --}}
    <br>

@endsection

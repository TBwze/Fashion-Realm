@extends('layout')

@section('title', 'Fashion Realm | Detail')

@section('content')
    <script src="https://kit.fontawesome.com/3f477032fd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/detail.css">
    <div class="container" style="padding-block: 5em;   ">
        <div class="row justify-content-md-center">
            <div class="col-4">
                <img style="width: 35vh" src="{{ asset($product->image_front) }}">
            </div>
            <div class="col-sm-auto col-sm-8">
                <h2 class="text_title">{{ $product->name }}</h2>
                <p style="font-size: 1.15em">Rp {{ $product->price }},00</p>
                <form action="{{ route('cart.store') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="row row-cols-auto" style="padding-bottom: 1em">
                        <div class="col col-md-auto" style="margin-block: auto;">
                            Size:
                        </div>
                        <div class="col">
                            {{-- <button type="button" class="btn btn_size">S</button> --}}
                            <input type="radio" class="btn-check" name="sizes" value="small" id="option1"
                                autocomplete="off" checked>
                            <label class="btn btn_size" for="option1">S</label>

                        </div>
                        <div class="col">
                            {{-- <button type="button" class="btn btn_size">M</button> --}}
                            <input type="radio" class="btn-check" name="sizes" value="medium" id="option2"
                                autocomplete="off">
                            <label class="btn btn_size" for="option2">M</label>
                        </div>
                        <div class="col">
                            {{-- <button type="button" class="btn btn_size">L</button> --}}
                            <input type="radio" class="btn-check" name="sizes" value="large" id="option3"
                                autocomplete="off">
                            <label class="btn btn_size" for="option3">L</label>
                        </div>
                    </div>
                    <div class="d-grid">
                        @if (Auth::check())
                            <button type="submit" class="btn btn_cart">
                                Add to Cart
                            </button>
                        @else
                            <b>
                                <p>Sign in to start shopping</p>
                            </b>
                        @endif
                    </div>
                </form>

                {{--  --}}


                <div class="row text_apaini text-nowrap justify-content-center text-center">
                    <div class="col-6">
                        <i class="fa-solid fa-heart"></i> 1M+ happy buyers
                    </div>
                    <div class="col">
                        <i class="fa-solid fa-unlock"></i> Guaranteed 7 days return
                    </div>
                    <div class="col">
                        <i class="fa-solid fa-globe"></i> Free shipping around the globe
                    </div>
                </div>

                <div class="">
                    <h5>Description:</h5>
                    {{ $product->description }}
                </div>
            </div>

        </div>
    </div>

@endsection

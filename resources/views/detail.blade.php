@extends('layout')

@section('title', 'Detail')

@section('content')
<script src="https://kit.fontawesome.com/3f477032fd.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/detail.css">
<div class="container" style="padding-block: 5em;   ">
    <div class="row justify-content-md-center">
        <div class="col-4">
            <img style="width: 35vh" src="\img\placeholderproduct.jpg" alt="">
        </div>
        <div class="col-md-auto">
            <h2 class="text_title">Product Name</h2>
            <p style="font-size: 1.15em">Rp 1.000.000,--</p>
            <div class="row row-cols-auto" style="padding-bottom: 1em">
                <div class="col col-12 col-md-1" style="margin-block: auto;">
                    Size:
                </div>
                <div class="col">
                    <button type="button" class="btn btn_size">S</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn_size">M</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn_size">L</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn_size">XL</button>
                </div>
            </div>

            <div class="d-grid">
                <button type="button" name="" id="" class="btn btn_cart">
                    Add to Cart
                </button>
            </div>

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
                <ul>
                    <li>Design: Streetwear</li>
                    <li>Breathable materials: Made of polyester, cotton and spandex can be worn all year round</li>
                    <li>Suitable for men and women</li>
                    <li>Machine washable: 30 °C (86 °F)</li>
                </ul>
            </div>
        </div>

    </div>
</div>

@endsection
@extends('layout')

@section('content')
    <div class="container mt-5">
        <h3>Edit Product {{$product->name}}</h3>

        <form action="{{ url('product/'.$product->id) }}" method="post" class="form-update" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-content">
                <label class="form-label" for="ProductName">Product Name</label>
                <input type="text" name="name" value="{{ $product->name }}" />
            </div>

            <div class="form-content">
                <label class="form-label" for="photo">Image</label>
                <input type="file" name="image_front"/>
            </div>

            <div class="form-content">
                <label class="form-label" for="ProductDescription">Product Description</label>
                <input type="text" name="description" class="form-input"cols="40"
                    value="{{ $product->description}}"></input>
            </div>

            <div class="form-content">
                <label class="form-label" for="ProductPrice">Product Price</label>
                <input type="number" name="price" class="form-input" value="{{ $product->price}}"/>
            </div>

            <div class="form-content">
                <label class="form-label" for="ProductCategory">Product Category</label>
                <input type="text" name="category" value="{{ $product->category }}" />
            </div>

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color:red">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <input type="submit" value="Update Course">
        </form>

    <div class="container-fluid d-flex flex-column mb-5 mt-5">
        <button class="container-fluid d-flex flex-row border border-black bg-dark-subtle pe-0 mb-5 text-decoration-none" href="{{ url('product/' . $product->id) }}">
            <img src="{{ asset($product->image_front) }}" class=" object-fit-contain" />

            <div class=" ms-5 pt-3 ps-3 border-start border-end border-black text-black text-start">
                <p>{{ $product->name }}</p>
                <p class="text-uppercase">{{ $product->category }}</p>
                <p>Rp {{ $product->price }},00</p>
                <p>{{ $product->description }}</p>

            </div>

        </button>
    </div>

    </div>
@endsection
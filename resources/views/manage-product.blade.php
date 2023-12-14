@extends ('layout')

@section('content')
<div class="container mt-5">
    <a class ="btn text-black fs-5 border-black bg-dark-subtle rounded-pill ms-3 mb-3" href="/product/create">+ Add Product</a>
    <div class="container-fluid d-flex flex-column mb-5">
        @foreach($products as $product)
        <button class="container-fluid d-flex flex-row border border-black bg-dark-subtle pe-0 mb-5 text-decoration-none" href="{{ url('product/' . $product->id) }}">
            <img src="{{ asset($product->image_front) }}" class="w-25 object-fit-contain" />

            <div class="w-50 ms-5 pt-3 ps-3 border-start border-end border-black text-black text-start">
                <p>{{ $product->name }}</p>
                <p class="text-uppercase">{{ $product->category }}</p>
                <p>Rp {{ $product->price }},00</p>
                <p>{{ $product->description }}</p>

            </div>

            <div class="w-25 d-flex justify-content-evenly align-items-center">
                <a class="btn btn-primary text-white fs-5" href="{{url('product/' . $product->id . '/edit')}}">Edit</a>
                <form action="{{ url('product/' . $product->id) }}" method="POST">
                {{csrf_field()}}
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger text-white fs-5"/>
                </form>

            </div>

        </button>
        @endforeach
    </div>
</div>

@endsection
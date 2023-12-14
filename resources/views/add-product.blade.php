@extends('layout')

@section('content')

    <div class="container mt-5">
        <h3>Add Product</h3>

        <form action="{{ url('product/')}}" method="post" class="form-update" enctype="multipart/form-data">
            @csrf
            <div class="form-content">
                <label class="form-label" for="ProductName">Product Name</label>
                <input type="text" name="name" />
            </div>

            <div class="form-content">
                <label class="form-label" for="photo">Image</label>
                <input type="file" name="image_front"/>
            </div>

            <div class="form-content">
                <label class="form-label" for="ProductDescription">Product Description</label>
                <input type="text" name="description" class="form-input"cols="40"></input>
            </div>

            <div class="form-content">
                <label class="form-label" for="ProductPrice">Product Price</label>
                <input type="number" name="price" class="form-input"/>
            </div>

            <div class="form-content">
                <label class="form-label" for="ProductCategory">Product Category</label>
                <input type="text" name="category" />
            </div>

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color:red">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <input type="submit" value="Add Product">
        </form>

    </div>
@endsection
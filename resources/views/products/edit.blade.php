@extends('layouts.front')@section('title', 'Modify'.$product->product)
@section('content')
    <link href="{{ asset('css/homepage.scss') }}" rel="stylesheet">

    <div class="row">
        <div class="col-6 edit-title">

            <h1>Edit Product</h1>
        </div>
    </div>

    <div class="row">

        <div class="col-3 align-items-center align-self-center product-edit">

            <form action="{{ route('products.update', ['product'=>$product]) }}" method="POST" enctype="multipart/form-data">

                @method('PATCH')

                <div class="form-group pb-2">
                    <label for="name">Product name:</label>
                    <input type="text" name="name" value="{{ old('name') ?? $product->name}}" class="form-control">
                </div>

                <label for="email">Brand:</label>

                <div class="form-group ">
                    <input type="text" name="brand" value="{{ old('brand') ?? $product->brand }}" class="form-control" >
                </div>

                <div class="form-group pb-2">
                    <label for="name">Category:</label>
                    <input type="text" name="category" value="{{ old('category') ?? $product->category}}" class="form-control">
                </div>
                <div class="form-group pb-2">
                    <label for="name">Price:</label>
                    <input type="text" name="price" value="{{ old('price') ?? $product->price}}" class="form-control">
                </div>
                <div class="form-group pb-2">
                    <label for="name">Stock:</label>
                    <input type="text" name="stock" value="{{ old('stock')?? $product->stock}}" class="form-control">
                </div>
                <div class="form-group pb-2">

                    <label for="active">Specifications:</label>
                    <textarea type="text" name="specifications" class="form-control">{{ old('description') ?? $product->specifications}} </textarea>
                </div>
                <div class="form-group">

                    <label for="active">Description:</label>
                    <textarea type="text" name="description" class="form-control">{{ old('description') ?? $product->description}}</textarea>
                </div>

                <div class="col-12">
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif

                    <div class="form-group pb-2">
                        <label for="image">Image:</label>
                        <input type="file" name="image">
                    </div>
                    @csrf

                    <button type="submit" class="btn btn-primary"> Modify Product</button>
                </div>
            </form>
        </div>
@endsection
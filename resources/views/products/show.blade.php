@extends('layouts.app')@section('title', $product->name)

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1> {{ $product->name }}</h1>

                <form action="/products/{{ $product->id }}" method="POST">

{{--                    @if(auth()->check() && auth()->user()->hasRole('admin'))--}}
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                        <a class="btn btn-primary" href="/products/{{ $product->id }}/edit">Edit</a>
{{--                    @endif--}}
                </form>
                <hr>
                <div class="row">
                    <div class="col-8">
                        <p><strong>Name:</strong> {{ $product->name }}</p>
                        <p><strong>Brand:</strong> {{ $product->brand }}</p>
                        <p><strong>Specifications:</strong> {{ $product->specifications }}</p>
                        <p><strong>Description:</strong> {{ $product->description }}</p>
                        <p><strong>Category:</strong> {{ $product->category }}</p>
                        <p><strong>Price:</strong> {{ $product->price }}</p>
                        <p><strong>Stock:</strong> {{ $product->stock }}</p>
                    </div>
                    <div class="col-4">
                        <p>
                            <strong>Media:</strong>
                            <img src="/storage/{{ $product->image }}" class="card-img-top" alt="...">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
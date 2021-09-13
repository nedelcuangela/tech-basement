@extends('layouts.front')

@foreach($users as $user)
@section('title', 'Details for '.$user->name)

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Details for {{ $user->name }}</div>

                    @if(session('success'))
                        <div class="alert alert-primary">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="/users/{{ $user->id }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <p><strong>Name:</strong> {{ $user->name }}</p>
                                    <p><strong>Email:</strong> {{ $user->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <button class="btn btn-danger" type="submit">Delete</button>
                            <a class="btn btn-primary" href="/users/{{ $user->id }}/edit">Edit</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection
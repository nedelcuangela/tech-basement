@extends('layouts.app')@section('title', 'Edit role: '.$role->name)

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Details for {{ $role->name }}</div>

                    @if(session('success'))
                        <div class="alert alert-primary">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="/roles/{{ $role->id }}" method="POST">

                            @method('DELETE')
                            @csrf

                            <div class="row">
                                <div class="col-12">

                                    <p><strong>Role name:</strong> {{ $role->name }}</p>
                                    <p><strong>Role slug:</strong> {{ $role->slug }}</p>
                                </div>
                            </div>

                            <hr>

                            <button class="btn btn-danger" type="submit">Delete</button>
                            <a class="btn btn-primary" href="/roles/{{ $role->id }}/edit">Edit</a>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
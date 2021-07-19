@extends('layouts.app')@section('title', 'Edit permission: '.$permission->name)

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Details for {{ $permission->name }}</div>

                    @if(session('success'))
                        <div class="alert alert-primary">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-body">

                        <form action="/permissions/{{ $permission->id }}" method="POST">

                            @method('DELETE')
                            @csrf

                            <div class="row">
                                <div class="col-12">

                                    <p><strong>Permission name:</strong> {{ $permission->name }}</p>
                                    <p><strong>Permission slug:</strong> {{ $permission->slug }}</p>
                                </div>
                            </div>

                            <hr>

                            <button class="btn btn-danger" type="submit">Delete</button>
                            <a class="btn btn-primary" href="/permissions/{{ $permission->id }}/edit">Edit</a>
                        </form>
                        <hr>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
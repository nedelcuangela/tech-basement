@extends('layouts.app')@section('title', 'Edit Details for '. $role->name)
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __(' Edit Role') }}</div>

                    @if(session('success'))
                        <div class="alert alert-primary">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-body">

                        <div class="col-12">
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif

                            <form action="{{ route('roles.update', ['role'=>$role]) }}" method="POST">

                                @method('PATCH')

                                <div class="form-group pb-2">
                                    <label for="name">Name:</label>
                                    <input type="text" name="name" value="{{ old('name') ?? $role->name}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="email">Slug:</label>
                                    <input type="text" name="slug" value="{{ old('slug') ?? $role->slug}}" class="form-control">
                                </div>

                                @csrf

                                <button type="submit" class="btn btn-primary">Save role</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
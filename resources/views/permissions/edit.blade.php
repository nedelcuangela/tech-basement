@extends('layouts.front')@section('title', 'Edit Details for '. $permission->name)
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __(' Edit Permission') }}</div>

                    @if(session('success'))
                        <div class="alert alert-primary">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-body">

                        <div class="row">

                            <div class="col-12">
                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif

                                <form action="{{ route('permissions.update', ['permission'=>$permission]) }}" method="POST">

                                    @method('PATCH')

                                    <div class="form-group pb-2">
                                        <label for="name">Permission name:</label>
                                        <input type="text" name="name" value="{{ old('name') ?? $permission->name}}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Slug:</label>
                                        <input type="text" name="slug" value="{{ old('slug') ?? $permission->slug}}" class="form-control">
                                    </div>

                                    @csrf

                                    <button type="submit" class="btn btn-primary"> Save permission</button>
                                </form>
                            </div>
                        </div
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
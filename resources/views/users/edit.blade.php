@extends('layouts.front')@section('title', 'Edit Details for '. $user->name)
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Users Create') }}</div>

                    @if(session('success'))
                        <div class="alert alert-primary">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-body">

                        <form action="{{ route('users.update', ['user'=>$user]) }}" method="POST">

                            @method('PATCH')
                            <div class="form-group pb-2">
                                <label for="name">Name:</label>
                                <input type="text" name="name" value="{{ old('name') ?? $user->name}}" class="form-control">
                            </div>

                            <label for="email">Email:</label>

                            <div class="form-group ">

                                <input type="text" name="email" value="{{ old('email') ?? $user->email}}" class="form-control" >
                            </div>

                            <div class="form-group pb-2">
                                <label for="name">Password:</label>
                                <input type="password" name="password" value="{{ old('name') ?? $user->password}}" class="form-control">
                            </div>

                            <div>{{ $errors->first('name') }}</div>
                            <div>{{ $errors->first('email') }}</div>
                            <div>{{ $errors->first('description') }}</div>

                            <div class="form-group">
                                <label for="role">Role:</label>
                                <select multiple class="form-control" id="roles" name="role">

                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}" {{ $role->id == $user->role->id ? 'selected' : ''}}>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @csrf
                            <button type="submit" class="btn btn-primary"> Save User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection